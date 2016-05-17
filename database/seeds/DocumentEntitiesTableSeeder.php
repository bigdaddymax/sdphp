<?php

use Illuminate\Database\Seeder;

class DocumentEntitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('document_entities')->delete();

      $records = [
        [
          'document_id' => 1,
          'entity_type_id' => 1,
          'entity_id' => 4,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'document_id' => 1,
          'entity_type_id' => 2,
          'entity_id' => 11,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'document_id' => 2,
          'entity_type_id' => 1,
          'entity_id' => 4,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'document_id' => 2,
          'entity_type_id' => 2,
          'entity_id' => 12,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'document_id' => 3,
          'entity_type_id' => 1,
          'entity_id' => 6,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'document_id' => 3,
          'entity_type_id' => 2,
          'entity_id' => 14,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ]
      ];

      DB::table('document_entities')->insert($records);
    }
}
