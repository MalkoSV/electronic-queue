<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
          'name'    => 'Получение письма',
          'counter' => 0,
        ]);

        DB::table('tasks')->insert([
          'name'    => 'Отправка письма',
          'counter' => 0,
        ]);

        DB::table('tasks')->insert([
          'name'    => 'Получение посылки',
          'counter' => 0,
        ]);

        DB::table('tasks')->insert([
          'name'    => 'Отправка посылки',
          'counter' => 0,
        ]);
    }

}
