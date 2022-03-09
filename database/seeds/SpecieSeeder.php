<?php

use Illuminate\Database\Seeder;
use App\Model\Specie;

class SpecieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $species = array(
            'mammiferi',
            'rettili',
            'anfibi',
            'pesci',
            'uccelli'
        );

        for ($i = 0; $i < count($species); $i++) {
            $newSpecie = new Specie();
            $newSpecie->name = $species[$i];
            $newSpecie->save();
        }
    }
}
