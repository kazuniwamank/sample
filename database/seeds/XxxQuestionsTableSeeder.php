<?php

use Illuminate\Database\Seeder;

class XxxQuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\XxxQuestion::create([
            'title' => 'aaaの事',
            'question' => 'aaaについてどう思うか',
            'start_date' => '2019-05-19',
            'end_date' =>'9999-12-31'
        ]);
    }
}
