<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sanduk;

class SandukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $sanduk1 = new Sanduk();
        $sanduk1->serijski_broj = 'TS123456';
        $sanduk1->materijal = 'celik';
        $sanduk1->dimenzije = '8x2.5x3';
        $sanduk1->save();

        $sanduk1 = new Sanduk();
        $sanduk1->serijski_broj = 'TS789012';
        $sanduk1->materijal = 'aluminijum';
        $sanduk1->dimenzije = '7.5x2.2x2.8';
        $sanduk1->save();

        $sanduk1 = new Sanduk();
        $sanduk1->serijski_broj = 'TS345678';
        $sanduk1->materijal = 'stakloplastika';
        $sanduk1->dimenzije = '7.8x2.4x3.2';
        $sanduk1->save();

        $sanduk1 = new Sanduk();
        $sanduk1->serijski_broj = 'TS901234';
        $sanduk1->materijal = 'Drvo sa metalnom konstrukcijom';
        $sanduk1->dimenzije = '8x2.5x3';
        $sanduk1->save();
    }
}
