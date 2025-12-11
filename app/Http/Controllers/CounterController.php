<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    public function index() {
        $counter = Counter::first();

        return view('components.subscriptions', [
            'iscritti' => $counter->iscritti,
            'clienti' => $counter->clienti_soddisfatti,
            'prodotti' => $counter->prodotti_presenti
        ]);
    }

    
    public function increment(Request $request)
    {
        $field = $request->input('field');

        if (!in_array($field, ['iscritti', 'clienti_soddisfatti', 'prodotti_venduti'])) {
            return response()->json(['error' => 'Campo non valido'], 400);
        }

        $counter = Counter::first();
        $counter->$field++;
        $counter->save();

        return response()->json([
            'success' => true,
            'new_value' => $counter->$field
        ]);
        
    }
}
