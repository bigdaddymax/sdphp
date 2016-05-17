<?php

use Illuminate\Database\Seeder;

class DocumentDocumentTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('document_document_type')->delete();

      $records = [
        [
          'document_id' => 1,
          'document_type_id' => 3,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'document_id' => 1,
          'document_type_id' => 4,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'document_id' => 2,
          'document_type_id' => 3,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'document_id' => 3,
          'document_type_id' => 3,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ]
      ];

      DB::table('document_document_type')->insert($records);
    }
}
