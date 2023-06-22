<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tip;

class TipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $tip1 = new Tip();
        $tip1->serijski_broj = 'A12345';
        $tip1->naziv_tipa_vozila = 'autobus';
        $tip1->save();
        
        $tip1 = new Tip();
        $tip1->serijski_broj = 'K12345';
        $tip1->naziv_tipa_vozila = 'kamion';
        $tip1->save();

        $tip1 = new Tip();
        $tip1->serijski_broj = 'SN12345';
        $tip1->naziv_tipa_vozila = 'specijalna nadogradnja';
        $tip1->save();
    }
}
