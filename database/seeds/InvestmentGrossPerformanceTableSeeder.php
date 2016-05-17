<?php

use Illuminate\Database\Seeder;

class InvestmentGrossPerformanceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('investment_gross_performance')->delete();

      $records = [
        [
          'id' => 1,
          'investment_id' => 9,
          'currency' => 'USD',
          'entry_date' => '2007-12-31',
          'exit_date' => '2009-12-31',
          'exited' => 1,
          'invested_capital' => 100.5,
          'realized_value' => 250.5,
          'unrealized_value' => 0,
          'gross_irr' => 0.205,
          'report_date' => '2015-12-31',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 2,
          'investment_id' => 10,
          'currency' => 'USD',
          'entry_date' => '2008-12-31',
          'exit_date' => '2010-12-31',
          'exited' => 1,
          'invested_capital' => 50.5,
          'realized_value' => 20.5,
          'unrealized_value' => 0,
          'gross_irr' => -0.15,
          'report_date' => '2015-12-31',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 3,
          'investment_id' => 11,
          'currency' => 'USD',
          'entry_date' => '2009-12-31',
          'exit_date' => '2011-12-31',
          'exited' => 1,
          'invested_capital' => 100.5,
          'realized_value' => 200,
          'unrealized_value' => 0,
          'gross_irr' => .105,
          'report_date' => '2015-12-31',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 4,
          'investment_id' => 12,
          'currency' => 'USD',
          'entry_date' => '2007-06-30',
          'exit_date' => null,
          'exit_date' => null,
          'exited' => 0,
          'invested_capital' => 70.5,
          'realized_value' => 200,
          'unrealized_value' => 15,
          'gross_irr' => .155,
          'report_date' => '2015-12-31',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 5,
          'investment_id' => 13,
          'currency' => 'USD',
          'entry_date' => '2013-03-31',
          'exit_date' => null,
          'exited' => 0,
          'invested_capital' => 20.5,
          'realized_value' => 90,
          'unrealized_value' => 10,
          'gross_irr' => .105,
          'report_date' => '2015-12-31',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 6,
          'investment_id' => 14,
          'currency' => 'USD',
          'entry_date' => '2011-12-31',
          'exit_date' => null,
          'exited' => 0,
          'invested_capital' => 100.5,
          'realized_value' => 20,
          'unrealized_value' => 100,
          'gross_irr' => .05,
          'report_date' => '2015-12-31',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 7,
          'investment_id' => 15,
          'currency' => 'USD',
          'entry_date' => '2012-09-30',
          'exit_date' => null,
          'exited' => 0,
          'invested_capital' => 100.5,
          'realized_value' => 0,
          'unrealized_value' => 300,
          'gross_irr' => .215,
          'report_date' => '2015-12-31',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 8,
          'investment_id' => 16,
          'currency' => 'USD',
          'entry_date' => '2007-12-31',
          'exit_date' => '2009-12-31',
          'exited' => 1,
          'invested_capital' => 100.5,
          'realized_value' => 250.5,
          'unrealized_value' => 0,
          'gross_irr' => 0.205,
          'report_date' => '2015-12-31',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 9,
          'investment_id' => 17,
          'currency' => 'USD',
          'entry_date' => '2008-12-31',
          'exit_date' => '2010-12-31',
          'exited' => 1,
          'invested_capital' => 50.5,
          'realized_value' => 20.5,
          'unrealized_value' => 0,
          'gross_irr' => -0.15,
          'report_date' => '2015-12-31',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 10,
          'investment_id' => 18,
          'currency' => 'USD',
          'entry_date' => '2009-12-31',
          'exit_date' => '2011-12-31',
          'exited' => 1,
          'invested_capital' => 100.5,
          'realized_value' => 200,
          'unrealized_value' => 0,
          'gross_irr' => .105,
          'report_date' => '2015-12-31',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 11,
          'investment_id' => 19,
          'currency' => 'USD',
          'entry_date' => '2007-06-30',
          'exit_date' => null,
          'exited' => 0,
          'invested_capital' => 70.5,
          'realized_value' => 200,
          'unrealized_value' => 15,
          'gross_irr' => .155,
          'report_date' => '2015-12-31',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 12,
          'investment_id' => 20,
          'currency' => 'USD',
          'entry_date' => '2013-03-31',
          'exit_date' => null,
          'exited' => 0,
          'invested_capital' => 20.5,
          'realized_value' => 90,
          'unrealized_value' => 10,
          'gross_irr' => .105,
          'report_date' => '2015-12-31',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 13,
          'investment_id' => 21,
          'currency' => 'USD',
          'entry_date' => '2011-12-31',
          'exit_date' => null,
          'exited' => 0,
          'invested_capital' => 100.5,
          'realized_value' => 20,
          'unrealized_value' => 100,
          'gross_irr' => .05,
          'report_date' => '2015-12-31',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 14,
          'investment_id' => 22,
          'currency' => 'USD',
          'entry_date' => '2012-09-30',
          'exit_date' => null,
          'exited' => 0,
          'invested_capital' => 100.5,
          'realized_value' => 0,
          'unrealized_value' => 300,
          'gross_irr' => .215,
          'report_date' => '2015-12-31',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 15,
          'investment_id' => 23,
          'currency' => 'USD',
          'entry_date' => '2007-12-31',
          'exit_date' => '2009-12-31',
          'exited' => 1,
          'invested_capital' => 100.5,
          'realized_value' => 250.5,
          'unrealized_value' => 0,
          'gross_irr' => 0.205,
          'report_date' => '2015-12-31',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 16,
          'investment_id' => 24,
          'currency' => 'USD',
          'entry_date' => '2008-12-31',
          'exit_date' => '2010-12-31',
          'exited' => 1,
          'invested_capital' => 50.5,
          'realized_value' => 20.5,
          'unrealized_value' => 0,
          'gross_irr' => -0.15,
          'report_date' => '2015-12-31',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 17,
          'investment_id' => 25,
          'currency' => 'USD',
          'entry_date' => '2009-12-31',
          'exit_date' => '2011-12-31',
          'exited' => 1,
          'invested_capital' => 100.5,
          'realized_value' => 200,
          'unrealized_value' => 0,
          'gross_irr' => .105,
          'report_date' => '2015-12-31',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 18,
          'investment_id' => 26,
          'currency' => 'USD',
          'entry_date' => '2012-09-30',
          'exit_date' => null,
          'exited' => 0,
          'invested_capital' => 100.5,
          'realized_value' => 0,
          'unrealized_value' => 300,
          'gross_irr' => .215,
          'report_date' => '2015-12-31',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 19,
          'investment_id' => 27,
          'currency' => 'USD',
          'entry_date' => '2007-12-31',
          'exit_date' => '2009-12-31',
          'exited' => 1,
          'invested_capital' => 100.5,
          'realized_value' => 250.5,
          'unrealized_value' => 0,
          'gross_irr' => 0.205,
          'report_date' => '2015-12-31',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 20,
          'investment_id' => 28,
          'currency' => 'USD',
          'entry_date' => '2008-12-31',
          'exit_date' => '2010-12-31',
          'exited' => 1,
          'invested_capital' => 50.5,
          'realized_value' => 20.5,
          'unrealized_value' => 0,
          'gross_irr' => -0.15,
          'report_date' => '2015-12-31',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 21,
          'investment_id' => 29,
          'currency' => 'USD',
          'entry_date' => '2009-12-31',
          'exit_date' => '2011-12-31',
          'exited' => 1,
          'invested_capital' => 100.5,
          'realized_value' => 200,
          'unrealized_value' => 0,
          'gross_irr' => .105,
          'report_date' => '2015-12-31',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 22,
          'investment_id' => 30,
          'currency' => 'USD',
          'entry_date' => '2007-06-30',
          'exit_date' => null,
          'exited' => 0,
          'invested_capital' => 70.5,
          'realized_value' => 200,
          'unrealized_value' => 15,
          'gross_irr' => .155,
          'report_date' => '2015-12-31',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ]
      ];

      DB::table('investment_gross_performance')->insert($records);
    }
}
