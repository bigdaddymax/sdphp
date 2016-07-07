<?php

use Illuminate\Database\Seeder;

class DocumentFundsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('document_funds')->delete();

        $records = [
            [
                'document_id' => 1,
                'fund_id' => 11,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ], [
                'document_id' => 1,
                'fund_id' => 12,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ], [
                'document_id' => 2,
                'fund_id' => 13,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ], [
                'document_id' => 2,
                'fund_id' => 11,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ], [
                'document_id' => 3,
                'fund_id' => 12,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        ];

        DB::table('document_funds')->insert($records);
    }

}
