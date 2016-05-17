<?php

use Illuminate\Database\Seeder;

class GeneralPartnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('general_partners')->delete();

      $records = [
        [
          'organization_id' => 4,
          'strategy_id' => 4,
          'aum' => 12000.5552,
          'aum_date' => '2015-06-30',
          'aum_currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'organization_id' => 5,
          'strategy_id' => 3,
          'aum' => 6000.5552,
          'aum_date' => '2015-09-30',
          'aum_currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'organization_id' => 6,
          'strategy_id' => 2,
          'aum' => 350.5552,
          'aum_date' => '2015-03-31',
          'aum_currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ]
      ];

      DB::table('general_partners')->insert($records);
    }
}
