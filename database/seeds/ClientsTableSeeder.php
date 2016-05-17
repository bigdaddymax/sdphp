<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('clients')->delete();

      $records = [
        [
          'organization_id' => 1,
          'active' => 1,
          'file_name' => 'Gotham',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'organization_id' => 2,
          'active' => 1,
          'file_name' => 'Empire',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'organization_id' => 3,
          'active' => 1,
          'file_name' => 'Winterfell',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ]
      ];

      DB::table('clients')->insert($records);
    }
}
