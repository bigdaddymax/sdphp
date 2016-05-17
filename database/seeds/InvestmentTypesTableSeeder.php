<?php

use Illuminate\Database\Seeder;

class InvestmentTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('investment_types')->delete();

      $records = [
        [
          'id' => 1,
          'name' => 'Portfolio Relationship',
          'sort_order' => 10,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 2,
          'name' => 'Primary',
          'sort_order' => 20,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 3,
          'name' => 'Secondary',
          'sort_order' => 30,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 4,
          'name' => 'Co-Investment',
          'sort_order' => 40,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 5,
          'name' => 'Fund Asset',
          'sort_order' => 50,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ]
      ];

      DB::table('investment_types')->insert($records);
    }
}
