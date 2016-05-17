<?php

use Illuminate\Database\Seeder;

class StrategiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('strategies')->delete();

      $records = [
        // Private Equity
        [
          'id' => 1,
          'asset_class' => 'Private Equity',
          'sector' => 'Buyout',
          'sub_sector' => 'Small Buyout',
          'asset_class_sort_order' => 1,
          'sector_sort_order' => 1,
          'sub_sector_sort_order' => 1,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 2,
          'asset_class' => 'Private Equity',
          'sector' => 'Buyout',
          'sub_sector' => 'Middle Buyout',
          'asset_class_sort_order' => 1,
          'sector_sort_order' => 1,
          'sub_sector_sort_order' => 2,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 3,
          'asset_class' => 'Private Equity',
          'sector' => 'Buyout',
          'sub_sector' => 'Large Buyout',
          'asset_class_sort_order' => 1,
          'sector_sort_order' => 1,
          'sub_sector_sort_order' => 3,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 4,
          'asset_class' => 'Private Equity',
          'sector' => 'Buyout',
          'sub_sector' => 'Mega Buyout',
          'asset_class_sort_order' => 1,
          'sector_sort_order' => 1,
          'sub_sector_sort_order' => 4,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 5,
          'asset_class' => 'Private Equity',
          'sector' => 'Venture Capital',
          'sub_sector' => 'Early Stage',
          'asset_class_sort_order' => 1,
          'sector_sort_order' => 2,
          'sub_sector_sort_order' => 1,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 6,
          'asset_class' => 'Private Equity',
          'sector' => 'Venture Capital',
          'sub_sector' => 'Balanced',
          'asset_class_sort_order' => 1,
          'sector_sort_order' => 2,
          'sub_sector_sort_order' => 2,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 7,
          'asset_class' => 'Private Equity',
          'sector' => 'Venture Capital',
          'sub_sector' => 'Late Stage',
          'asset_class_sort_order' => 1,
          'sector_sort_order' => 2,
          'sub_sector_sort_order' => 3,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 8,
          'asset_class' => 'Private Equity',
          'sector' => 'Special Situations',
          'sub_sector' => 'Distressed Debt',
          'asset_class_sort_order' => 1,
          'sector_sort_order' => 3,
          'sub_sector_sort_order' => 1,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 9,
          'asset_class' => 'Private Equity',
          'sector' => 'Special Situations',
          'sub_sector' => 'Turnaround',
          'asset_class_sort_order' => 1,
          'sector_sort_order' => 3,
          'sub_sector_sort_order' => 2,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ]
      ];

      DB::table('strategies')->insert($records);
    }
}
