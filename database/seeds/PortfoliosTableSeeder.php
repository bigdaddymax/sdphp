<?php

use Illuminate\Database\Seeder;

class PortfoliosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('portfolios')->delete();

      $records = [
        [
          'id' => 1,
          'name' => 'Gotham City Retirement System',
          'primary_portfolio_type_id' => 2,
          'reporting_currency' => 'USD',
          'benchmark_id' => 1,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 2,
          'name' => 'Gotham City Police Department Pension',
          'primary_portfolio_type_id' => 2,
          'reporting_currency' => 'USD',
          'benchmark_id' => 1,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 3,
          'name' => 'Gotham City Fire Department Pension',
          'primary_portfolio_type_id' => 2,
          'reporting_currency' => 'USD',
          'benchmark_id' => 1,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 4,
          'name' => 'Gotham City Employees Pension',
          'primary_portfolio_type_id' => 2,
          'reporting_currency' => 'USD',
          'benchmark_id' => 1,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 5,
          'name' => 'Galactic Empire Corporate Pension',
          'primary_portfolio_type_id' => 2,
          'reporting_currency' => 'EUR',
          'benchmark_id' => 1,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 6,
          'name' => 'Sith Academy Scholarship Fund',
          'primary_portfolio_type_id' => 2,
          'reporting_currency' => 'EUR',
          'benchmark_id' => 1,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 7,
          'name' => 'Rebellion Terrorist Relief Fund',
          'primary_portfolio_type_id' => 2,
          'reporting_currency' => 'EUR',
          'benchmark_id' => 1,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 8,
          'name' => 'Winterfell Holdings',
          'primary_portfolio_type_id' => 2,
          'reporting_currency' => 'USD',
          'benchmark_id' => 1,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 9,
          'name' => 'Winter Is Coming Foundation',
          'primary_portfolio_type_id' => 2,
          'reporting_currency' => 'USD',
          'benchmark_id' => 1,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 10,
          'name' => 'Lannister Bounty Fund',
          'primary_portfolio_type_id' => 2,
          'reporting_currency' => 'USD',
          'benchmark_id' => 1,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 11,
          'name' => 'Blackstone Capital Partners VI',
          'primary_portfolio_type_id' => 1,
          'reporting_currency' => 'USD',
          'benchmark_id' => 1,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 12,
          'name' => 'Blackstone Capital Partners IV',
          'primary_portfolio_type_id' => 1,
          'reporting_currency' => 'USD',
          'benchmark_id' => 1,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 13,
          'name' => 'Carlyle Partners V',
          'primary_portfolio_type_id' => 1,
          'reporting_currency' => 'USD',
          'benchmark_id' => 1,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 14,
          'name' => 'Hellman & Friedman IV',
          'primary_portfolio_type_id' => 1,
          'reporting_currency' => 'USD',
          'benchmark_id' => 1,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ]
      ];

      DB::table('portfolios')->insert($records);
    }
}
