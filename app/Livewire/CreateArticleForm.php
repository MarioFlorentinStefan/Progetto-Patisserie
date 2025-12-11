<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class CreateArticleForm extends Component
{
    use WithFileUploads;
    #[Validate('required|min:3')]
    public $title;
    #[Validate('required')]
    public $origin;
    #[Validate('required')]
    public $body;
    #[Validate('image|max:1024')]
    public $image;


    public function messages(){
        return[
            'required'=> 'Il :attribute è richiesto.',
            'min'=> 'Il :attribute deve possedere minimo 3 caratteri.',
            'image'=> 'Il file deve essere di tipo image.',
            'max'=> 'Il file non deve superare 1MB',
        ];
    }
    public function store(){

        $this->validate();

        Article::create([
        'title'=>$this->title,
        'origin'=>$this->origin,
        'body'=>$this->body,
        'image'=>$this->image->store('image','public'),
        'user_id'=>Auth::user()->id,
        ]);

        $this->reset(['title','origin','body']);
        
        session()->flash('message','Articolo memorizzato con successo!');
    }
    public function resetAttributes(){
        $this->title="";
        $this->origin="";
        $this->body="";
    }

    public function render()
    {

        return view('livewire.article.create-article-form');
    }
}
