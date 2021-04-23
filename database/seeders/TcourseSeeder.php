<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TcourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $courses = [
            array('MEAN stack', '/storage/author/Mern.jpg', 'bar ngar Tar ra kar1', 'bar lo lo1', 'Life time', '199', true,true,43,1,3),
            array('Complete Python development', '/storage/author/php.jpg', 'bar ngar Tar ra kar2', 'bar lo lo2', 'Life time', '99', true,true,43,1,3),
            array('Ethical Hacking for beginner', '/storage/author/hacking.jpg', 'bar ngar Tar ra kar3', 'bar lo lo3', 'Life time', '159', true,true,43,1,3),
        ];
        $now = Carbon::now();

        foreach ($courses as $course){
            DB::table('courses')->insert([
                'name'=>$course[0],
                'coverphoto'=>$course[1],
                'description'=>$course[2],
                'requirement'=>$course[3],
                'accessstatus'=>$course[4],
                'price'=>$course[5],
                'allowdiscount'=>$course[6],
                'publicstatus'=>$course[7],
                'language_id'=>$course[8],
                'subcategory_id'=>$course[9],
                'user_id'=>$course[10],
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}
