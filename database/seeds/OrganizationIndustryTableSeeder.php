<?php

use Illuminate\Database\Seeder;

class OrganizationIndustryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('organization_industry')->delete();

      $records = [
        [
          'organization_id' => 4,
          'industry_id' => 1,
          'primary' => 1,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'organization_id' => 5,
          'industry_id' => 4,
          'primary' => 1,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'organization_id' => 6,
          'industry_id' => 5,
          'primary' => 1,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'organization_id' => 4,
          'industry_id' => 5,
          'primary' => 0,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'organization_id' => 4,
          'industry_id' => 7,
          'primary' => 0,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ]
      ];

      DB::table('organization_industry')->insert($records);
    }
}
