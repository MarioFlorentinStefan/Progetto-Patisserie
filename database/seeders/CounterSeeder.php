<?php

namespace Database\Seeders;

use App\Models\Counter;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CounterSeeder extends Seeder
{
    /**
    * Run the database seeds.
    */
    public function run(): void
    {
        Counter::create([
            'iscritti' => 100,
            'clienti_soddisfatti' => 1000,
            'prodotti_presenti' => 9999,
        ]);
        
    }
}
