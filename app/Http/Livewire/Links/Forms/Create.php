<?php

namespace App\Http\Livewire\Links\Forms;

use App\Models\Links;
use Barryvdh\Debugbar\Facade as DebugBar;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Create extends Component
{
    public $title;

    public $custom;

    public $customSlug;

    public $slug;

    public $url;

    protected $rules = [
        'title' => 'required',
        'url' => 'required|url|active_url',
    ];

    public function updatedCustomSlug () {
        DebugBar::info('customSlug value: '. $this->customSlug);
    }

    public function submit() {
        $this->validate();

        if($this->customSlug == 1){
            $this->slug = $this->custom;
            $this->validate([
                'slug' => 'required|min:3|unique:links'
            ]);
        }
        else{
            $this->slug = hash('adler32', Auth::id() . time() . rand());
        }

        Links::create([
            'title' => $this->title,
            'slug' => $this->slug,
            'user_id' => Auth::id(),
            'url' => $this->url,
        ]);

        return $this->redirectRoute('links');

    }

    public function render()
    {
        return view('livewire.links.forms.create');
    }
}
