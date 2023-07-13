<?php

namespace App\Console\Commands;

use App\Models\Equipement;
use Illuminate\Console\Command;

class CreateEquipement extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-equipement';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $tab_equipement=array(
         'Chauffage',
         'Fer à repasser',
         'Ordinateur',
         'Équipements d\'hygiène',
         'Télévision',
         'Cintres pour vêtements',
         'Climatisation',
         'Cuisine équipée',
         'Internet');
         
        foreach($tab_equipement as $item)
        {
            $admin = Equipement::create([
                'nom' => $item,
            ]);
        }

    }
}
