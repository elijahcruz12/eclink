<?php

namespace App\Jobs;

use App\Models\Clicks;
use App\Models\Links;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Redis;

class RegisterClick implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var string
     */
    protected string $slug;

    /**
     * @var string
     */
    protected string $ip;

    /**
     * @var string
     */
    protected string $time;

    /**
     * @var int
     */
    protected int $user_id;

    /**
     * Create a new job instance.
     *
     * @param  string  $slug
     * @param  string  $ip
     * @param  string  $time
     * @param  int  $user_id
     */
    public function __construct(string $slug,string $ip, string $time, int $user_id)
    {
        $this->slug = $slug;

        $this->ip = $ip;

        $this->time = $time;

        $this->user_id = $user_id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Redis::zincrby('total.clicks', 1, $this->slug);

        Redis::zincrby('link.clicks', 1, $this->slug);

        Redis::zincrby('link.'.$this->slug, 1, date('d/m/Y'));

        Redis::zincrby('user.clicks', 1, $this->user_id);

        Clicks::create([
            'slug' => $this->slug,
            'access_ip' => $this->ip,
            'real_time' => $this->time,
        ]);
    }
}
