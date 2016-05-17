<?php

use Illuminate\Database\Seeder;

class InvestmentsTableSeeder extends Seeder
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
          'investment_type_id' => 2,
          'currency' => "USD",
          'investment_status_id' => 1,
          'parent_ownership' => 1,
        ], [
          'id' => 2,
          'investment_type_id' => 2,
          'currency' => "USD",
          'investment_status_id' => 1,
          'parent_ownership' => 1,
        ], [
          'id' => 3,
          'investment_type_id' => 2,
          'currency' => "USD",
          'investment_status_id' => 1,
          'parent_ownership' => 1,
        ], [
          'id' => 4,
          'investment_type_id' => 2,
          'currency' => "USD",
          'investment_status_id' => 1,
          'parent_ownership' => 1,
        ], [
          'id' => 5,
          'investment_type_id' => 2,
          'currency' => "USD",
          'investment_status_id' => 1,
          'parent_ownership' => 1,
        ], [
          'id' => 6,
          'investment_type_id' => 2,
          'currency' => "USD",
          'investment_status_id' => 1,
          'parent_ownership' => 1,
        ], [
          'id' => 7,
          'investment_type_id' => 2,
          'currency' => "USD",
          'investment_status_id' => 1,
          'parent_ownership' => 1,
        ], [
          'id' => 8,
          'investment_type_id' => 2,
          'currency' => "USD",
          'investment_status_id' => 1,
          'parent_ownership' => 1,
        ], [
          'id' => 9,
          'investment_type_id' => 5,
          'currency' => "USD",
          'investment_status_id' => 1,
          'parent_ownership' => 1,
        ], [
          'id' => 10,
          'investment_type_id' => 5,
          'currency' => "USD",
          'investment_status_id' => 1,
          'parent_ownership' => 1,
        ], [
          'id' => 11,
          'investment_type_id' => 5,
          'currency' => "USD",
          'investment_status_id' => 1,
          'parent_ownership' => 1,
        ], [
          'id' => 12,
          'investment_type_id' => 5,
          'currency' => "USD",
          'investment_status_id' => 1,
          'parent_ownership' => 1,
        ], [
          'id' => 13,
          'investment_type_id' => 5,
          'currency' => "USD",
          'investment_status_id' => 1,
          'parent_ownership' => 1,
        ], [
          'id' => 14,
          'investment_type_id' => 5,
          'currency' => "USD",
          'investment_status_id' => 1,
          'parent_ownership' => 1,
        ], [
          'id' => 15,
          'investment_type_id' => 5,
          'currency' => "USD",
          'investment_status_id' => 1,
          'parent_ownership' => 1,
        ], [
          'id' => 16,
          'investment_type_id' => 5,
          'currency' => "USD",
          'investment_status_id' => 1,
          'parent_ownership' => 1,
        ], [
          'id' => 17,
          'investment_type_id' => 5,
          'currency' => "USD",
          'investment_status_id' => 1,
          'parent_ownership' => 1,
        ], [
          'id' => 18,
          'investment_type_id' => 5,
          'currency' => "USD",
          'investment_status_id' => 1,
          'parent_ownership' => 1,
        ], [
          'id' => 19,
          'investment_type_id' => 5,
          'currency' => "USD",
          'investment_status_id' => 1,
          'parent_ownership' => 1,
        ], [
          'id' => 20,
          'investment_type_id' => 5,
          'currency' => "USD",
          'investment_status_id' => 1,
          'parent_ownership' => 1,
        ], [
          'id' => 21,
          'investment_type_id' => 5,
          'currency' => "USD",
          'investment_status_id' => 1,
          'parent_ownership' => 1,
        ], [
          'id' => 22,
          'investment_type_id' => 5,
          'currency' => "USD",
          'investment_status_id' => 1,
          'parent_ownership' => 1,
        ], [
          'id' => 23,
          'investment_type_id' => 5,
          'currency' => "USD",
          'investment_status_id' => 1,
          'parent_ownership' => 1,
        ], [
          'id' => 24,
          'investment_type_id' => 5,
          'currency' => "USD",
          'investment_status_id' => 1,
          'parent_ownership' => 1,
        ], [
          'id' => 25,
          'investment_type_id' => 5,
          'currency' => "USD",
          'investment_status_id' => 1,
          'parent_ownership' => 1,
        ], [
          'id' => 26,
          'investment_type_id' => 5,
          'currency' => "USD",
          'investment_status_id' => 1,
          'parent_ownership' => 1,
        ], [
          'id' => 27,
          'investment_type_id' => 5,
          'currency' => "USD",
          'investment_status_id' => 1,
          'parent_ownership' => 1,
        ], [
          'id' => 28,
          'investment_type_id' => 5,
          'currency' => "USD",
          'investment_status_id' => 1,
          'parent_ownership' => 1,
        ], [
          'id' => 29,
          'investment_type_id' => 5,
          'currency' => "USD",
          'investment_status_id' => 1,
          'parent_ownership' => 1,
        ], [
          'id' => 30,
          'investment_type_id' => 5,
          'currency' => "USD",
          'investment_status_id' => 1,
          'parent_ownership' => 1,
        ]
      ];

      DB::table('investments')->insert($records);
    }
}
