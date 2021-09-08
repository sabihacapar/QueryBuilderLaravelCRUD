<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;//veritabanının yolu


class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('course')->insert([
            [
            'course_title'=>'php',
            'course_content'=>'PHP kurs içeriği',
            'course_must'=>1
            ],
            [
                'course_title'=>'boostrap',
                'course_content'=>'boostrap kurs içeriği2',
                'course_must'=>2
            ],
            [
                'course_title'=>'js',
                'course_content'=>'js kurs içeriği2',
                'course_must'=>3
            ],
            [
                'course_title'=>'laravel',
                'course_content'=>'laravel kurs içeriği2',
                'course_must'=>4
            ]]
    );
    }
}
