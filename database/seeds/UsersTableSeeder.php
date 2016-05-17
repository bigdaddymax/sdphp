<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->delete();

      $records = [
        [
          'person_id' => 1,
          'password' => bcrypt('123456'),
          'internal' => 1,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'person_id' => 2,
          'password' => bcrypt('123456'),
          'internal' => 0,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ]
      ];

      DB::table('users')->insert($records);
    }
}
