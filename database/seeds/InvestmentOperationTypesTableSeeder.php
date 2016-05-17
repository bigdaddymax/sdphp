<?php

use Illuminate\Database\Seeder;

class InvestmentOperationTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('investment_operation_types')->delete();

      $records = [
        [
          'id' => 1,
          'name' => 'Invested Capital',
          'group' => 'Contribution',
          'cashflow' => 1,
          'name_sort_order' => 10,
          'group_sort_order' => 10,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 2,
          'name' => 'Management Fees',
          'group' => 'Contribution',
          'cashflow' => 1,
          'name_sort_order' => 20,
          'group_sort_order' => 10,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 3,
          'name' => 'Partnership Expenses',
          'group' => 'Contribution',
          'cashflow' => 1,
          'name_sort_order' => 30,
          'group_sort_order' => 10,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 4,
          'name' => 'Dividend Proceeds',
          'group' => 'Distribution',
          'cashflow' => 1,
          'name_sort_order' => 10,
          'group_sort_order' => 20,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 5,
          'name' => 'Sale Proceeds',
          'group' => 'Distribution',
          'cashflow' => 1,
          'name_sort_order' => 20,
          'group_sort_order' => 20,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 6,
          'name' => 'Realized Carried Interest',
          'group' => 'Distribution',
          'cashflow' => 1,
          'name_sort_order' => 30,
          'group_sort_order' => 20,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 7,
          'name' => 'Net Asset Value',
          'group' => 'Net Asset Value',
          'cashflow' => 1,
          'name_sort_order' => 10,
          'group_sort_order' => 30,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 8,
          'name' => 'Unrealized Carried Interest',
          'group' => 'Net Asset Value',
          'cashflow' => 1,
          'name_sort_order' => 20,
          'group_sort_order' => 30,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 9,
          'name' => 'Unfunded Commitment',
          'group' => 'Unfunded Commitment',
          'cashflow' => 0,
          'name_sort_order' => 10,
          'group_sort_order' => 50,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 10,
          'name' => 'Commitment',
          'group' => 'Commitment',
          'cashflow' => 0,
          'name_sort_order' => 10,
          'group_sort_order' => 40,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 11,
          'name' => 'Commitment Change',
          'group' => 'Commitment',
          'cashflow' => 0,
          'name_sort_order' => 20,
          'group_sort_order' => 40,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ]
      ];

      DB::table('investment_operation_types')->insert($records);
    }
}
