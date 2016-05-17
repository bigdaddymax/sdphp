<?php

use Illuminate\Database\Seeder;

class FundsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('funds')->delete();

      $records = [
        [
          'portfolio_id' => 11,
          'legal_name' => 'Blackstone Capital Partners VI, L.P.',
          'strategy_id' => 4,
          'vintage_year' => 2010,
          'fund_size' => 10200.50,
          'fund_size_date' => '2015-06-30',
          'fund_size_currency' => 'USD',
          'description' => 'This fund makes good investments in BX companies',
          'file_name' => 'Blackstone VI',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'portfolio_id' => 12,
          'legal_name' => 'Blackstone Capital Partners IV, L.P.',
          'strategy_id' => 2,
          'vintage_year' => 2005,
          'fund_size' => 6500.50,
          'fund_size_date' => '2015-09-30',
          'fund_size_currency' => 'USD',
          'description' => 'This fund makes good investments in BX companies',
          'file_name' => 'Blackstone IV',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'portfolio_id' => 13,
          'legal_name' => 'Carlyle Partners V, L.P.',
          'strategy_id' => 6,
          'vintage_year' => 2007,
          'fund_size' => 8000.50,
          'fund_size_date' => '2015-09-30',
          'fund_size_currency' => 'USD',
          'description' => 'This fund makes good investments in Carlyle companies',
          'file_name' => 'Carlyle V',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'portfolio_id' => 14,
          'legal_name' => 'Hellman & Friedman IV, L.P.',
          'strategy_id' => 2,
          'vintage_year' => 2008,
          'fund_size' => 9750.50,
          'fund_size_date' => '2015-09-30',
          'fund_size_currency' => 'USD',
          'description' => 'This fund makes good investments in H&F companies',
          'file_name' => 'H&F IV',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ]
      ];

      DB::table('funds')->insert($records);
    }
}
