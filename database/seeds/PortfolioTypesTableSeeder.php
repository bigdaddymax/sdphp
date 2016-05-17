<?php

use Illuminate\Database\Seeder;

class PortfolioTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('portfolio_types')->delete();

      $records = [
        [
          'id' => 1,
          'name' => 'Fund',
          'sort_order' => 10,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 2,
          'name' => 'Investment Portfolio',
          'sort_order' => 20,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 3,
          'name' => 'Analysis Portfolio',
          'sort_order' => 30,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ]
      ];

      DB::table('portfolio_types')->insert($records);
    }
}
