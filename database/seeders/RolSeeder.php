<?php

namespace Database\Seeders;

use App\Enums\RolEnum;
use App\Models\Rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement("SET FOREIGN_KEY_CHECKS=0");
        Rol::truncate();
        DB::statement("SET FOREIGN_KEY_CHECKS=1");
        $roles = [RolEnum::ADMINISTRADOR->name, RolEnum::CLIENTE->name];
        foreach($roles as $rol){
            Rol::create([
                "rol" => $rol
            ]);
        }
    }
}
