<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class Create extends Component
{
    /**
     * define public variabel
     */
    public $title;
    public $content;

    /**
     * store function
     */
    public function store()
    {
        $this->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $post = Post::create([
            'title' => $this->title,
            'content' => $this->content
        ]);

        // flash message
        session()->flash('message', 'Data Berhasil Disimpan.');

        // redirect
        return redirect()->route('post.index');
    }
    public function render()
    {
        return view('livewire.post.create');
    }
}
