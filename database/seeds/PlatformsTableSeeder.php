<?php

use Illuminate\Database\Seeder;

class PlatformsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('platforms')->delete();

        \DB::table('platforms')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'crux_group' => 'dictionary',
                    'title' => '数据字典',
                    'name' => 'configgroup',
                    'crux_value' => '{"dictionary":"数据字典"}',
                    'tip' => '',
                    'type' => 'array',
                    'crux_rule' => '',
                    'extend' => '',
                    'content' => '',
                    'created_at' => '2020-05-13 11:46:46',
                    'updated_at' => '2020-05-13 11:46:46',
                    'deleted_at' => NULL
                ),
        ));



    }
}