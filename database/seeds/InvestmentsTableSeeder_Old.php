<?php

use Illuminate\Database\Seeder;

class Old__InvestmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('investments')->delete();

      $records = [
        [
          'id' => 1,
          'portfolio_id' => 1,
          'entity_id' => 1,
          'entity_type_id' => 1,
          'commitment_amount' => 100,
          'commitment_currency' => "USD",
          'commitment_date' => "2014-06-30",
          'investment_status_id' => 1,
        ], [
          'id' => 2,
          'portfolio_id' => 2,
          'entity_id' => 2,
          'entity_type_id' => 1,
          'commitment_amount' => 150,
          'commitment_currency' => "USD",
          'commitment_date' => "2011-06-30",
          'investment_status_id' => 1,
        ], [
          'id' => 3,
          'portfolio_id' => 3,
          'entity_id' => 3,
          'entity_type_id' => 1,
          'commitment_amount' => 50,
          'commitment_currency' => "USD",
          'commitment_date' => "2009-09-30",
          'investment_status_id' => 1,
        ], [
          'id' => 4,
          'portfolio_id' => 4,
          'entity_id' => 4,
          'entity_type_id' => 1,
          'commitment_amount' => 200,
          'commitment_currency' => "USD",
          'commitment_date' => "2008-09-30",
          'investment_status_id' => 1,
        ], [
          'id' => 5,
          'portfolio_id' => 5,
          'entity_id' => 2,
          'entity_type_id' => 1,
          'commitment_amount' => 250,
          'commitment_currency' => "USD",
          'commitment_date' => "2011-09-30",
          'investment_status_id' => 1,
        ], [
          'id' => 6,
          'portfolio_id' => 6,
          'entity_id' => 4,
          'entity_type_id' => 1,
          'commitment_amount' => 150,
          'commitment_currency' => "USD",
          'commitment_date' => "2012-09-30",
          'investment_status_id' => 1,
        ], [
          'id' => 7,
          'portfolio_id' => 7,
          'entity_id' => 4,
          'entity_type_id' => 1,
          'commitment_amount' => 350,
          'commitment_currency' => "USD",
          'commitment_date' => "2009-09-30",
          'investment_status_id' => 1,
        ], [
          'id' => 8,
          'portfolio_id' => 8,
          'entity_id' => 1,
          'entity_type_id' => 1,
          'commitment_amount' => 75,
          'commitment_currency' => "USD",
          'commitment_date' => "2010-03-31",
          'investment_status_id' => 1,
        ], [
          'id' => 9,
          'portfolio_id' => 9,
          'entity_id' => 4,
          'entity_type_id' => 1,
          'commitment_amount' => 350,
          'commitment_currency' => "USD",
          'commitment_date' => "2009-09-30",
          'investment_status_id' => 1,
        ], [
          'id' => 10,
          'portfolio_id' => 10,
          'entity_id' => 1,
          'entity_type_id' => 1,
          'commitment_amount' => 75,
          'commitment_currency' => "USD",
          'commitment_date' => "2010-03-31",
          'investment_status_id' => 1,
        ], [
          'id' => 11,
          'portfolio_id' => 1,
          'entity_id' => 4,
          'entity_type_id' => 1,
          'commitment_amount' => 100,
          'commitment_currency' => "USD",
          'commitment_date' => "2008-12-31",
          'investment_status_id' => 1,
        ], [
          'id' => 12,
          'portfolio_id' => 3,
          'entity_id' => 2,
          'entity_type_id' => 1,
          'commitment_amount' => 75,
          'commitment_currency' => "USD",
          'commitment_date' => "2010-03-31",
          'investment_status_id' => 1,
        ], [
          'id' => 13,
          'portfolio_id' => 5,
          'entity_id' => 4,
          'entity_type_id' => 1,
          'commitment_amount' => 75,
          'commitment_currency' => "USD",
          'commitment_date' => "2010-03-31",
          'investment_status_id' => 1,
        ], [
          'id' => 14,
          'portfolio_id' => 8,
          'entity_id' => 3,
          'entity_type_id' => 1,
          'commitment_amount' => 25,
          'commitment_currency' => "USD",
          'commitment_date' => "2007-06-30",
          'investment_status_id' => 1,
        ]
      ];

      DB::table('investments')->insert($records);
    }
}
