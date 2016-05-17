<?php

use Illuminate\Database\Seeder;

class IndustriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('industries')->delete();

      $records = [
        [
          'id' => 1,
          'name' => 'Generalist',
          'sort_order' => 10,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 2,
          'name' => 'Agribusiness',
          'sort_order' => 20,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 3,
          'name' => 'Cleantech',
          'sort_order' => 30,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 4,
          'name' => 'Consumer',
          'sort_order' => 40,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 5,
          'name' => 'Energy',
          'sort_order' => 50,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 6,
          'name' => 'Financial Services',
          'sort_order' => 60,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 7,
          'name' => 'Healthcare',
          'sort_order' => 70,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 8,
          'name' => 'Industrials',
          'sort_order' => 80,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 9,
          'name' => 'Infrastructure',
          'sort_order' => 90,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 10,
          'name' => 'Manufacturing',
          'sort_order' => 100,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 11,
          'name' => 'Media & Telecom',
          'sort_order' => 110,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 12,
          'name' => 'Real Estate',
          'sort_order' => 120,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 13,
          'name' => 'Minerals & Mining',
          'sort_order' => 130,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 14,
          'name' => 'Technology',
          'sort_order' => 140,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ]
      ];

      DB::table('industries')->insert($records);
    }
}
