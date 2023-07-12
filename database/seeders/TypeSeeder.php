<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Project $project)
    {
        $types = config('store.types');
        foreach ($types as $type) {
            // Crea una nuova istanza del modello "Project"
            $project = new Type();
        
            // Assegna il valore del tipo corrente alla colonna 'type'
            $project->type = $type;
        
            // Salva il modello nel database
            $project->save();
        }
    }
}
