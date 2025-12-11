<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleIndex extends Component
{

    public $search="";

    public function delete($id){
        $article= Article::find($id);
        $article->delete();
    }
    public function render()
    {
        $articles = Article::query()
            ->when($this->search, function ($query) {
                $query->where('title', 'like', '%' . $this->search . '%')
                ->orWhere('body', 'like', '%' . $this->search . '%')
                ->orWhere('origin', 'like','%'. $this->search . '%');
            })
            ->orderBy('created_at', 'desc')
            ->get();
        
        return view('livewire.article.article-index', compact('articles'));
    }
}
