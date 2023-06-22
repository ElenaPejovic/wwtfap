<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ram;

class RamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $ram1 = new Ram();
        $ram1->serijski_broj = 'RAM123456';
        $ram1->materijal = 'celik';
        $ram1->dimenzije = '9x3x0.8';
        $ram1->save();

        $ram1 = new Ram();
        $ram1->serijski_broj = 'RAM789012';
        $ram1->materijal = 'celik';
        $ram1->dimenzije = '8.5x2.8x0.7';
        $ram1->save();

        $ram1 = new Ram();
        $ram1->serijski_broj = 'RAM345678';
        $ram1->materijal = 'celik';
        $ram1->dimenzije = '9.2x3.2x0.9';
        $ram1->save();

        $ram1 = new Ram();
        $ram1->serijski_broj = 'RAM901234';
        $ram1->materijal = 'celik';
        $ram1->dimenzije = '8.8x2.9x0.75';
        $ram1->save();
    }
}
