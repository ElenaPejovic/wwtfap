<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kabina;

class KabinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $kabina1 = new Kabina();
        $kabina1->serijski_broj = '4923F';
        $kabina1->materijal = 'celik';
        $kabina1->broj_sedista = '2';
        $kabina1->save();
        
        $kabina1 = new Kabina();
        $kabina1->serijski_broj = '55vv222';
        $kabina1->materijal = 'aluminijum';
        $kabina1->broj_sedista = '1';
        $kabina1->save();
        
        $kabina1 = new Kabina();
        $kabina1->serijski_broj = '333sd4242';
        $kabina1->materijal = 'celik';
        $kabina1->broj_sedista = '2';
        $kabina1->save();
        
        $kabina1 = new Kabina();
        $kabina1->serijski_broj = '1840bdt32';
        $kabina1->materijal = 'kompozitni materijal';
        $kabina1->broj_sedista = '3';
        $kabina1->save();

    }
}
