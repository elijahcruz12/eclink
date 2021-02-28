<?php

namespace App\Http\Livewire\Settings\Apikeys;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use function Symfony\Component\String\u;

class Newkey extends Component
{
    public $plainTextToken;

    public $tokenName;

    public $tokenCreated = false;

    public function submit(){
        $token = Auth::user()->createToken($this->tokenName);

        $this->plainTextToken = $token->plainTextToken;
        $this->tokenCreated = true;
    }

    public function render()
    {
        return view('livewire.settings.apikeys.newkey');
    }
}
