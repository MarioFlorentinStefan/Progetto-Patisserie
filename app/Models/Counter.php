<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    protected $fillable =[
        'iscritti',
        'clienti_soddisfatti',
        'prodotti_presenti',
    ];
}
