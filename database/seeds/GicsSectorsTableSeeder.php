<?php

use Illuminate\Database\Seeder;

class GicsSectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('gics_sectors')->delete();

      $records = [
        [
          'sector' => 'Consumer Discretionary',
          'sub_sector' => 'Advertising',
          'sector_sort_order' => 10,
          'sub_sector_sort_order' => 10,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'sector' => 'Consumer Discretionary',
          'sub_sector' => 'Apparel Retail',
          'sector_sort_order' => 10,
          'sub_sector_sort_order' => 20,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'sector' => 'Consumer Discretionary',
          'sub_sector' => 'Apparel, Accessories and Luxury',
          'sector_sort_order' => 10,
          'sub_sector_sort_order' => 30,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'sector' => 'Consumer Staples',
          'sub_sector' => 'Agricultural Products',
          'sector_sort_order' => 20,
          'sub_sector_sort_order' => 10,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'sector' => 'Consumer Discretionary',
          'sub_sector' => 'Brewers',
          'sector_sort_order' => 20,
          'sub_sector_sort_order' => 20,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'sector' => 'Energy',
          'sub_sector' => 'Coal and Consumable Fuels',
          'sector_sort_order' => 30,
          'sub_sector_sort_order' => 10,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'sector' => 'Energy',
          'sub_sector' => 'Integrated Oil and Gas',
          'sector_sort_order' => 30,
          'sub_sector_sort_order' => 20,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'sector' => 'Financials',
          'sub_sector' => 'Asset Management and Custody Banks',
          'sector_sort_order' => 40,
          'sub_sector_sort_order' => 10,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'sector' => 'Financials',
          'sub_sector' => 'Consumer Finance',
          'sector_sort_order' => 40,
          'sub_sector_sort_order' => 20,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ]
      ];

      DB::table('gics_sectors')->insert($records);
    }
}
