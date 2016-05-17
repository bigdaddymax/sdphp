<?php

use Illuminate\Database\Seeder;

class CurrenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('currencies')->delete();

      $records = [
        [
            "symbol" => "$",
            "name" => "US Dollar",
            "decimal_digits" => 1,
            "rounding" => 0,
            "code" => "USD",
            "name_plural" => "US dollars",
            "sort_order" => 1
        ],
        [
            "symbol" => "CA$",
            "name" => "Canadian Dollar",
            "decimal_digits" => 1,
            "rounding" => 0,
            "code" => "CAD",
            "name_plural" => "Canadian dollars",
            "sort_order" => 100
        ],
        [
            "symbol" => "€",
            "name" => "Euro",
            "decimal_digits" => 1,
            "rounding" => 0,
            "code" => "EUR",
            "name_plural" => "euros",
            "sort_order" => 2
        ]
      ];

      DB::table('currencies')->insert($records);
    }
}
