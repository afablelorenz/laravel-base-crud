<?php

namespace Database\Seeders;

use Dotenv\Store\File\Reader;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Animal;
use League\Csv\Reader as CsvReader;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csv = CsvReader::createFromPath(database_path('seeders/animals.csv','r'));
        $csv->setHeaderOffset(0);
        foreach ($csv as $record) {
            Animal::create([
                'name' => $record['name'],
                'scientific_name' => $record['scientific_name'],
                'taxonomic_group' => $record['taxonomic_group'],
                'class' => $record['class'],
                'family' => $record['family'],
                'species' => $record['species'],
                'habitat' => $record['habitat'],
                'protected' => $record['protected'],
                'date_of_arrival' => $record['date_of_arrival'],
            ]);
    }
}
}
