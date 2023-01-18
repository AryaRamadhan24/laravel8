<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Levels;

class ngisi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Levels::create([
            'level' => 'user' 
        ]);
        Levels::create([
            'level' => 'admin' 
        ]);
    }
}
