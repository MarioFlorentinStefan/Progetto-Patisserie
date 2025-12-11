<?php
namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Counter;

use Illuminate\Http\Request;
use App\Http\Controllers\PublicController;

class PublicController extends Controller
{
    public function welcome()
    {
       
        $counter = Counter::first();
        $reviews = Review::latest()->get();
        
        return view('welcome', [
            'iscritti' => $counter?->iscritti ??  0,
            'clienti'  => $counter?->clienti_soddisfatti ?? 0,
            'prodotti' => $counter?->prodotti_presenti ?? 0,
            'reviews' => $reviews,
        ]);
    }
}
