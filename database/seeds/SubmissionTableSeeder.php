<?php

use Illuminate\Database\Seeder;

class SubmissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('submissions')->insert([
            'submission_time' => '2018-11-14 00:00:00',
            'user_id' => random_int('1','100'),
            'code' => str_random('255'),
            'problem_id' => random_int('1','100'),
            'verdict' => 'queue',
            'cpu' => '1.1',
            'memory' => '3',
        ]);
        DB::table('submissions')->insert([
            'submission_time' => '2018-11-14 00:00:00',
            'user_id' => random_int('1','100'),
            'code' => str_random('255'),
            'problem_id' => random_int('1','100'),
            'verdict' => 'queue',
            'cpu' => '1.1',
            'memory' => '3',
        ]);
        DB::table('submissions')->insert([
            'submission_time' => '2018-11-14 00:00:00',
            'user_id' => random_int('1','100'),
            'code' => str_random('255'),
            'problem_id' => random_int('1','100'),
            'verdict' => 'queue',
            'cpu' => '1.1',
            'memory' => '3',
        ]);
        DB::table('submissions')->insert([
            'submission_time' => '2018-11-14 00:00:00',
            'user_id' => random_int('1','100'),
            'code' => str_random('255'),
            'problem_id' => random_int('1','100'),
            'verdict' => 'queue',
            'cpu' => '1.1',
            'memory' => '3',
        ]);
        DB::table('submissions')->insert([
            'submission_time' => '2018-11-14 00:00:00',
            'user_id' => random_int('1','100'),
            'code' => str_random('255'),
            'problem_id' => random_int('1','100'),
            'verdict' => 'queue',
            'cpu' => '1.1',
            'memory' => '3',
        ]);
    }
}
