<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table("productos") -> truncate();
        $sql = database_path('proyectoweb22_productos.sql');
        DB::unprepared(file_get_contents($sql));
    }
}
