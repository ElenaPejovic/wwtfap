<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Nadogradnja;

class NadogradnjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $nadogradnja1 = new Nadogradnja();
        $nadogradnja1->serijski_broj = 'N123';
        $nadogradnja1->naziv_nadogradnje = 'dizalica';
        $nadogradnja1->save();

        $nadogradnja1 = new Nadogradnja();
        $nadogradnja1->serijski_broj = 'N345';
        $nadogradnja1->naziv_nadogradnje = 'vatrogasna nadogradnja';
        $nadogradnja1->save();
        
        $nadogradnja1 = new Nadogradnja();
        $nadogradnja1->serijski_broj = 'N567';
        $nadogradnja1->naziv_nadogradnje = 'slep nadogradnja';
        $nadogradnja1->save();

    }
}
