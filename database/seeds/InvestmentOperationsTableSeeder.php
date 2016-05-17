<?php

use Illuminate\Database\Seeder;

class InvestmentOperationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('investment_operations')->delete();

      $records = [
        [
          'investment_id' => 1,
          'investment_operation_type_id' => 1,
          'date' => '2005-12-31',
          'amount' => -20,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 1,
          'investment_operation_type_id' => 1,
          'date' => '2006-12-31',
          'amount' => -20,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 1,
          'investment_operation_type_id' => 2,
          'date' => '2007-12-31',
          'amount' => -20,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 1,
          'investment_operation_type_id' => 5,
          'date' => '2008-06-30',
          'amount' => 30,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 1,
          'investment_operation_type_id' => 4,
          'date' => '2010-12-31',
          'amount' => 30,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 1,
          'investment_operation_type_id' => 5,
          'date' => '2012-12-31',
          'amount' => 10,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 1,
          'investment_operation_type_id' => 7,
          'date' => '2014-12-31',
          'amount' => 40,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 1,
          'investment_operation_type_id' => 1,
          'date' => '2015-01-01',
          'amount' => -40,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 1,
          'investment_operation_type_id' => 7,
          'date' => '2013-12-31',
          'amount' => 30,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 1,
          'investment_operation_type_id' => 7,
          'date' => '2014-03-31',
          'amount' => 35,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 1,
          'investment_operation_type_id' => 7,
          'date' => '2014-06-30',
          'amount' => 45,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 1,
          'investment_operation_type_id' => 7,
          'date' => '2014-09-30',
          'amount' => 50,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 1,
          'investment_operation_type_id' => 1,
          'date' => '2014-03-15',
          'amount' => -10,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 1,
          'investment_operation_type_id' => 4,
          'date' => '2014-06-15',
          'amount' => 15,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 1,
          'investment_operation_type_id' => 5,
          'date' => '2014-09-15',
          'amount' => 5,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 1,
          'investment_operation_type_id' => 9,
          'date' => '2014-12-31',
          'amount' => 30,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 2,
          'investment_operation_type_id' => 1,
          'date' => '2005-12-31',
          'amount' => -20,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 2,
          'investment_operation_type_id' => 1,
          'date' => '2006-12-31',
          'amount' => -20,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 2,
          'investment_operation_type_id' => 2,
          'date' => '2007-12-31',
          'amount' => -20,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 2,
          'investment_operation_type_id' => 5,
          'date' => '2008-06-30',
          'amount' => 30,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 2,
          'investment_operation_type_id' => 4,
          'date' => '2010-12-31',
          'amount' => 30,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 2,
          'investment_operation_type_id' => 5,
          'date' => '2012-12-31',
          'amount' => 20,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 2,
          'investment_operation_type_id' => 7,
          'date' => '2014-12-31',
          'amount' => 40,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 3,
          'investment_operation_type_id' => 1,
          'date' => '2005-12-31',
          'amount' => -20,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 3,
          'investment_operation_type_id' => 1,
          'date' => '2006-12-31',
          'amount' => -20,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 3,
          'investment_operation_type_id' => 2,
          'date' => '2007-12-31',
          'amount' => -20,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 3,
          'investment_operation_type_id' => 5,
          'date' => '2008-06-30',
          'amount' => 30,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 3,
          'investment_operation_type_id' => 4,
          'date' => '2010-12-31',
          'amount' => 30,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 3,
          'investment_operation_type_id' => 5,
          'date' => '2012-12-31',
          'amount' => 20,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 3,
          'investment_operation_type_id' => 7,
          'date' => '2014-12-31',
          'amount' => 40,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 4,
          'investment_operation_type_id' => 1,
          'date' => '2005-12-31',
          'amount' => -20,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 4,
          'investment_operation_type_id' => 1,
          'date' => '2006-12-31',
          'amount' => -20,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 4,
          'investment_operation_type_id' => 2,
          'date' => '2007-12-31',
          'amount' => -20,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 4,
          'investment_operation_type_id' => 5,
          'date' => '2008-06-30',
          'amount' => 30,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 4,
          'investment_operation_type_id' => 4,
          'date' => '2010-12-31',
          'amount' => 30,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 4,
          'investment_operation_type_id' => 5,
          'date' => '2012-12-31',
          'amount' => 20,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 4,
          'investment_operation_type_id' => 7,
          'date' => '2014-12-31',
          'amount' => 40,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 5,
          'investment_operation_type_id' => 1,
          'date' => '2005-12-31',
          'amount' => -20,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 5,
          'investment_operation_type_id' => 1,
          'date' => '2006-12-31',
          'amount' => -20,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 5,
          'investment_operation_type_id' => 2,
          'date' => '2007-12-31',
          'amount' => -20,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 5,
          'investment_operation_type_id' => 5,
          'date' => '2008-06-30',
          'amount' => 30,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 5,
          'investment_operation_type_id' => 4,
          'date' => '2010-12-31',
          'amount' => 30,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 5,
          'investment_operation_type_id' => 5,
          'date' => '2012-12-31',
          'amount' => 20,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 5,
          'investment_operation_type_id' => 7,
          'date' => '2014-12-31',
          'amount' => 40,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 6,
          'investment_operation_type_id' => 1,
          'date' => '2005-12-31',
          'amount' => -20,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 6,
          'investment_operation_type_id' => 1,
          'date' => '2006-12-31',
          'amount' => -20,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 6,
          'investment_operation_type_id' => 2,
          'date' => '2007-12-31',
          'amount' => -20,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 6,
          'investment_operation_type_id' => 5,
          'date' => '2008-06-30',
          'amount' => 30,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 6,
          'investment_operation_type_id' => 4,
          'date' => '2010-12-31',
          'amount' => 30,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 6,
          'investment_operation_type_id' => 5,
          'date' => '2012-12-31',
          'amount' => 20,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 6,
          'investment_operation_type_id' => 7,
          'date' => '2014-12-31',
          'amount' => 40,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 7,
          'investment_operation_type_id' => 1,
          'date' => '2005-12-31',
          'amount' => -20,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 7,
          'investment_operation_type_id' => 1,
          'date' => '2006-12-31',
          'amount' => -20,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 7,
          'investment_operation_type_id' => 2,
          'date' => '2007-12-31',
          'amount' => -20,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 7,
          'investment_operation_type_id' => 5,
          'date' => '2008-06-30',
          'amount' => 30,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 7,
          'investment_operation_type_id' => 4,
          'date' => '2010-12-31',
          'amount' => 30,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 7,
          'investment_operation_type_id' => 5,
          'date' => '2012-12-31',
          'amount' => 20,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 7,
          'investment_operation_type_id' => 7,
          'date' => '2014-12-31',
          'amount' => 40,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 8,
          'investment_operation_type_id' => 1,
          'date' => '2005-12-31',
          'amount' => -20,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 8,
          'investment_operation_type_id' => 1,
          'date' => '2006-12-31',
          'amount' => -20,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 8,
          'investment_operation_type_id' => 2,
          'date' => '2007-12-31',
          'amount' => -20,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 8,
          'investment_operation_type_id' => 5,
          'date' => '2008-06-30',
          'amount' => 30,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 8,
          'investment_operation_type_id' => 4,
          'date' => '2010-12-31',
          'amount' => 30,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 8,
          'investment_operation_type_id' => 5,
          'date' => '2012-12-31',
          'amount' => 20,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 8,
          'investment_operation_type_id' => 7,
          'date' => '2014-12-31',
          'amount' => 40,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 1,
          'investment_operation_type_id' => 9,
          'date' => '2014-12-31',
          'amount' => 30,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 2,
          'investment_operation_type_id' => 9,
          'date' => '2014-12-31',
          'amount' => 40,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 3,
          'investment_operation_type_id' => 9,
          'date' => '2014-12-31',
          'amount' => 10,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 4,
          'investment_operation_type_id' => 9,
          'date' => '2014-12-31',
          'amount' => 120,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 5,
          'investment_operation_type_id' => 9,
          'date' => '2014-12-31',
          'amount' => 95,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 6,
          'investment_operation_type_id' => 9,
          'date' => '2014-12-31',
          'amount' => 30,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 7,
          'investment_operation_type_id' => 9,
          'date' => '2014-12-31',
          'amount' => 190,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 8,
          'investment_operation_type_id' => 9,
          'date' => '2014-12-31',
          'amount' => 25,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 1,
          'investment_operation_type_id' => 10,
          'date' => '2014-06-30',
          'amount' => 100,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 2,
          'investment_operation_type_id' => 10,
          'date' => '2011-06-30',
          'amount' => 150,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 3,
          'investment_operation_type_id' => 10,
          'date' => '2009-09-30',
          'amount' => 50,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 4,
          'investment_operation_type_id' => 10,
          'date' => '2008-09-30',
          'amount' => 200,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 5,
          'investment_operation_type_id' => 10,
          'date' => '2011-09-30',
          'amount' => 250,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 6,
          'investment_operation_type_id' => 10,
          'date' => '2012-09-30',
          'amount' => 150,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 7,
          'investment_operation_type_id' => 10,
          'date' => '2009-09-30',
          'amount' => 350,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'investment_id' => 8,
          'investment_operation_type_id' => 10,
          'date' => '2010-03-31',
          'amount' => 75,
          'currency' => 'USD',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ]
      ];

      DB::table('investment_operations')->insert($records);
    }
}
