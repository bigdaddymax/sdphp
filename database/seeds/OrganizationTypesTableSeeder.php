<?php

use Illuminate\Database\Seeder;

class OrganizationTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('organization_types')->delete();

      $records = [
        [
          'id' => 1,
          'name' => 'General Partner',
          'sort_order' => 1,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 2,
          'name' => 'Institution',
          'sort_order' => 2,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ]
      ];

      DB::table('organization_types')->insert($records);
    }
}
