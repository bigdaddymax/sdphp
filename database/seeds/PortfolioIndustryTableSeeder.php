<?php

use Illuminate\Database\Seeder;

class PortfolioIndustryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('portfolio_industry')->delete();

      $records = [
        [
          'portfolio_id' => 11,
          'industry_id' => 1,
          'primary' => 1,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'portfolio_id' => 12,
          'industry_id' => 4,
          'primary' => 1,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'portfolio_id' => 13,
          'industry_id' => 5,
          'primary' => 1,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'portfolio_id' => 14,
          'industry_id' => 6,
          'primary' => 1,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'portfolio_id' => 11,
          'industry_id' => 5,
          'primary' => 0,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'portfolio_id' => 11,
          'industry_id' => 7,
          'primary' => 0,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ]
      ];

      DB::table('portfolio_industry')->insert($records);
    }
}
