<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        $developments=array('Web Development','Data Science',
            'Mobile Development','Game Development',
            'Software Testing', 'Software Engineering',
            'Development Tool','No-code Development');
        foreach ($developments as $development) {
            DB::table('subcategories')->insert([
                'name' => $development,
                'category_id'=> 1,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }

        $programminglanguages=array('C','C++',
            'c#','Java',
            'JavaScript','Kotlin','Python',
            'Ruby','Swift', 'Other Programming Language');
        foreach ($programminglanguages as $programminglanguage) {
            DB::table('subcategories')->insert([
                'name' => $programminglanguage,
                'category_id'=> 2,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }

        $businesses=array('Entrepreneurship','Communicaton',
            'Management','Sells',
            'Business Strategy','Operation','Project management',
            'Business Law','Business Analytics and Intelligence','Human Resource',
            'Industry','E-Commerce','Media','Real Estate','Other Business');
        foreach ($businesses as $business) {
            DB::table('subcategories')->insert([
                'name' => $business,
                'category_id'=> 3,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }

        $accountings=array('Accounting and Bookkeeping','Compliance',
            'Cryptocurrency and Blockchain','Economics',
            'Finance','Finance Cert and Exam prep','Financial Modeling and Analysis',
            'Investing and Trading','Money Management Tool','Taxes','Other Finance and Accounting');
        foreach ($accountings as $accounting) {
            DB::table('subcategories')->insert([
                'name' => $accounting,
                'category_id'=> 4,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }

        $its=array('IT Certification','Network and Security',
            'Hardware','Operating System',
            'Other IT and Software');
        foreach ($its as $it) {
            DB::table('subcategories')->insert([
                'name' => $it,
                'category_id'=> 5,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }

        $offices=array('Microsoft Office','Libre office',
            'Open Office','Google',
            'SPA','Oracle','Other Office and Productivity');
        foreach ($offices as $office) {
            DB::table('subcategories')->insert([
                'name' => $office,
                'category_id'=> 6,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }

        $persondevs=array('Personal Transformation','Personal Productivity',
            'Leadership','Career Developmet',
            'Parenting and Relationship','Happiness',
            'Esoteric Practices','Religion and Spirituality','Personal Brand Building',
            'Creativity','Influence', 'Self Esteem and Confidence','Stress Management',
            'Money and Study Skill','Motivation',
            'Other Personal Development');
        foreach ($persondevs as $persondev) {
            DB::table('subcategories')->insert([
                'name' => $persondev,
                'category_id'=> 7,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }

        $designs=array('Web Design','Graphic Design and Illustration',
            'Design Tools','User Experience Design',
            'Design Thinking','2D/3D and Animation',
            'Fashion Design','Architectural Design','Interior Design',
            'Other Design');
        foreach ($designs as $design) {
            DB::table('subcategories')->insert([
                'name' => $design,
                'category_id'=> 8,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }

        $marketings=array('Digital marketing','Search Engine Optimization',
            'Social Media Marketing','Branding',
            'Marketing Fundamentals','Marketing Analytics and Automation',
            'Public Relations','Advertising','Video and Mobile Marketing',
            'Content Marketing','Growth Hacking','Affiliate Marketing',
            'product Marketing',
            'Other Design');
        foreach ($marketings as $marketing) {
            DB::table('subcategories')->insert([
                'name' => $marketing,
                'category_id'=> 9,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }

        $lifestyles=array('Arts and Crafts','Beauty and Makeup',
            'Esoterics Practices','Food and Beverage',
            'Gaming','Home improvements',
            'pet Care and Training','Travel',
            'Other Lifestyle');
        foreach ($lifestyles as $lifestyle) {
            DB::table('subcategories')->insert([
                'name' => $lifestyle,
                'category_id' => 10,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }

        $photographyvideos=array('Digital Photography','Photography',
            'Portrait photography','Commercial Photography',
            'Video Design', 'Other Photography and Video');
        foreach ($photographyvideos as $photographyvideo) {
            DB::table('subcategories')->insert([
                'name' => $photographyvideo,
                'category_id'=> 11,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }

        $healthandfits=array('fitness','General Health',
            'Sport','Nutration',
            'Yoga','Mental Health','Dietig',
            'Self Defense','Safety and First Aid','Dance',
            'meditation','Other Health ad Fitness');
        foreach ($healthandfits as $healthandfit) {
            DB::table('subcategories')->insert([
                'name' => $healthandfit,
                'category_id'=> 12,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }

        $musics=array('Instruments','Music Production',
            'Music Fundamentals','Vocal',
            'music  Techniques','Music software',
            'Other Music');
        foreach ($musics as $music) {
            DB::table('subcategories')->insert([
                'name' => $music,
                'category_id'=> 13,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }

    }
}
