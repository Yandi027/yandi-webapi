<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Student::create(
        	[
        		'nama'=>'yandi',
        		'jk'=>'P'
        	]
        );
        Student::create(
        	[
        		'nama'=>'yuswandi',
        		'jk'=>'L'
        	]
        );
    }
}
