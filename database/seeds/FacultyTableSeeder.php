<?php

use Illuminate\Database\Seeder;

class FacultyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facultys')->insert([
            'fac_id'=>'01',
            'fac_name'=>'วิทยาศาสตร์และเทคโนโลยี',
            'created_at'=>date('Y-m-d H:i:s')
        ],
        [
            'fac_id'=>'02',
            'fac_name'=>'ครุศาสตร์',
        ]
    );
    }
}
