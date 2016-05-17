<?php

use Illuminate\Database\Seeder;

class ClientTeamPersonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('client_team_person')->delete();

      $records = [
        [
          'client_team_id' => 1,
          'person_id' => 1,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'client_team_id' => 2,
          'person_id' => 1,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'client_team_id' => 3,
          'person_id' => 1,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ]
      ];

      DB::table('client_team_person')->insert($records);
    }
}
