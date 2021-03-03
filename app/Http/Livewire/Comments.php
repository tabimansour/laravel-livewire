<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Comments extends Component
{
    public $comment;
    public $comments = [
        [
            'body' => 'Hello there, this is my message to you.',
            'created_at' => '10 mins ago',
            'creator' => 'Theo'
        ]
    ];

    public function render()
    {
        return view('livewire.comments');
    }

    public function sendComment() {
        if($this->comment == '') return;

        array_unshift($this->comments, [
            'body' => $this->comment,
            'created_at' => Carbon::now()->diffForHumans(),
            'creator' => 'Theo'
        ]);

        $this->comment = "";
    }
}
