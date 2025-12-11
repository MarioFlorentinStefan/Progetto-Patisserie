<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleEditForm extends Component
{
    public $title;
    public $origin;
    public $body;

    public Article $articleObject;

    public function mount($articleObject){
        $this->title=$articleObject->title;
        $this->origin=$articleObject->origin;
        $this->body=$articleObject->body;
    }

    public function update(){
        $this->articleObject->update([
            'title'=>$this->title,
            'origin'=>$this->origin,
            'body'=>$this->body,
        ]);
        $this->reset(['title','origin','body']);
        session()->flash('message','Articolo modificato con successo!');
    }

    public function render()
    {
        return view('livewire.article.article-edit-form');
    }
}
