<?php

use Illuminate\Database\Seeder;

class ClientTeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('client_teams')->delete();

      $records = [
        [
          'id' => 1,
          'name' => 'Private Equity Team',
          'organization_id' => 1,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 2,
          'name' => 'Client Team',
          'organization_id' => 2,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 3,
          'name' => 'Real Estate Team',
          'organization_id' => 3,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ]
      ];

      DB::table('client_teams')->insert($records);
    }
}
