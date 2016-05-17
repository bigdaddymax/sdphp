<?php

use Illuminate\Database\Seeder;

class AssetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('assets')->delete();

      $records = [
        [
          'id' => 1,
          'name' => 'Company A',
          'primary_asset_type_id' => 1,
          'website' => 'www.stepstoneglobal.com',
          'description' => 'This is a description',
          'country_id' => 230,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 2,
          'name' => 'Company B',
          'primary_asset_type_id' => 1,
          'website' => 'www.stepstoneglobal.com',
          'description' => 'This is a description',
          'country_id' => 230,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 3,
          'name' => 'Company C',
          'primary_asset_type_id' => 1,
          'website' => 'www.stepstoneglobal.com',
          'description' => 'This is a description',
          'country_id' => 229,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 4,
          'name' => 'Company D',
          'primary_asset_type_id' => 1,
          'website' => 'www.stepstoneglobal.com',
          'description' => 'This is a description',
          'country_id' => 50,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 5,
          'name' => 'Company E',
          'primary_asset_type_id' => 1,
          'website' => 'www.stepstoneglobal.com',
          'description' => 'This is a description',
          'country_id' => 100,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 6,
          'name' => 'Company F',
          'primary_asset_type_id' => 1,
          'website' => 'www.stepstoneglobal.com',
          'description' => 'This is a description',
          'country_id' => 40,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 7,
          'name' => 'Company G',
          'primary_asset_type_id' => 1,
          'website' => 'www.stepstoneglobal.com',
          'description' => 'This is a description',
          'country_id' => 230,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ]
      ];

      DB::table('assets')->insert($records);
    }
}
