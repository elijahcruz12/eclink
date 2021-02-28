<?php

namespace App\View\Components;

use Illuminate\Support\Carbon;
use Illuminate\View\Component;

class totalLinksCount extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $today = Carbon::now();
        $yesterday = Carbon::yesterday();
        $twodaysago = Carbon::parse('two days ago');
        $threedaysago = Carbon::parse('three days ago');
        $fourdaysago = Carbon::parse('four days ago');
        $fivedaysago = Carbon::parse('five days ago');
        $sixdaysago = Carbon::parse('six days ago');
        $todaycount = 0;
        $yesterdaycount = 0;
        $twodaycount = 0;
        $threedaycount = 0;
        $fourdaycount = 0;
        $fivedaycount = 0;
        $sixdaycount = 0;
        $sevendaycount = 0;



        return view('components.total-links-count');
    }
}
