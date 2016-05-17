<?php

use Illuminate\Database\Seeder;

class DocumentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('documents')->delete();

      $records = [
        [
          'id' => 1,
          'name' => 'Q1.2016.QR.Blackstone VI.Gotham',
          'file_name' => 'Q1.2016.QR.FS.Blackstone VI.Gotham.PDF',
          'file_type' => 'pdf',
          'document_date' => '2016-03-31',
          'date_received' => '2016-05-01',
          'original_file_name' => 'Blackstone VI 2016 Q1 Report.pdf',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 2,
          'name' => 'Q1.2016.QR.Blackstone IV.Gotham',
          'file_name' => 'Q1.2016.QR.Blackstone IV.Gotham.PDF',
          'file_type' => 'pdf',
          'document_date' => '2016-03-31',
          'date_received' => '2016-05-01',
          'original_file_name' => 'Blackstone IV 2016 Q1 Report.pdf',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ], [
          'id' => 3,
          'name' => 'Q1.2016.QR.H&F IV.Empire',
          'file_name' => 'Q1.2016.QR.H&F IV.Empire.PDF',
          'file_type' => 'pdf',
          'document_date' => '2016-03-31',
          'date_received' => '2016-05-01',
          'original_file_name' => 'Report H&F IV Q12016.pdf',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
        ]
      ];

      DB::table('documents')->insert($records);
    }
}
