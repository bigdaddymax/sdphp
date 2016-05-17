<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('people')->delete();

      $records = [
        [
          'id' => 1,
          'first_name' => 'Internal',
          'last_name' => 'Internalson',
          'email' => 'TDJohnson92101@gmail.com',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 2,
          'first_name' => 'External',
          'last_name' => 'Externalson',
          'email' => 'TylerDJohnson1@gmail.com',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ]
      ];

      DB::table('people')->insert($records);
    }
}
