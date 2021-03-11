<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=array('Development','programming language','Business',
            'Finance and Accounting','IT and Software',
            'Office Productivity', 'Personal Development',
            'Design','Marketing','Lifestyle','Photography and Video',
            'Health and Fitness','Music');

        $now = Carbon::now();
        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}
