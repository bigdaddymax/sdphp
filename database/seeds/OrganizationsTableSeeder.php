<?php

use Illuminate\Database\Seeder;

class OrganizationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('organizations')->delete();

      $records = [
        [
          'id' => 1,
          'name' => 'Gotham City Retirement System',
          'short_name' => 'Gotham City',
          'website' => 'www.gotham.com',
          'primary_organization_type_id' => 2,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 2,
          'name' => 'Galactic Empire Corporate Pension',
          'short_name' => 'Empire',
          'website' => 'www.empire.com',
          'primary_organization_type_id' => 2,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 3,
          'name' => 'Winterfell Holdings',
          'short_name' => 'Winterfell',
          'website' => 'www.winterfell.com',
          'primary_organization_type_id' => 2,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 4,
          'name' => 'Blackstone Capital Partners',
          'short_name' => 'Blackstone',
          'website' => 'www.bx.com',
          'primary_organization_type_id' => 1,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 5,
          'name' => 'Carlyle Partners',
          'short_name' => 'Carlyle',
          'website' => 'www.carlyle.com',
          'primary_organization_type_id' => 1,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 6,
          'name' => 'Hellman & Friedman',
          'short_name' => 'H&F',
          'website' => 'www.hf.com',
          'primary_organization_type_id' => 1,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ]
      ];

      DB::table('organizations')->insert($records);
    }
}
