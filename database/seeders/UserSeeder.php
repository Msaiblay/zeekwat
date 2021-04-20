<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
//use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        $admin = new User;
        $admin->name ='Msai Admin';
        $admin->email = 'admin@mail.com' ;
        $admin->email_verified_at= $now;
        $admin->password= Hash::make('0000');
        $admin->created_at = $now;
        $admin->updated_at = $now;
        $admin->save();
        $admin->assignRole('admin');

        $student = new User;
        $student->name ='Msai student';
        $student->email = 'student@mail.com' ;
        $student->email_verified_at= $now;
        $student->password= Hash::make('0000');
        $student->created_at = $now;
        $student->updated_at = $now;
        $student->save();
        $student->assignRole('student');

        $teacher = new User;
        $teacher->name ='Msai teacher';
        $teacher->email = 'teacher@mail.com' ;
        $teacher->email_verified_at= $now;
        $teacher->password= Hash::make('0000');
        $teacher->created_at = $now;
        $teacher->updated_at = $now;
        $teacher->save();
        $teacher->assignRole('teacher');

        $teacher = new User;
        $teacher->name ='Msai teacher2';
        $teacher->email = 'teacher2@mail.com' ;
        $teacher->email_verified_at= $now;
        $teacher->password= Hash::make('0000');
        $teacher->created_at = $now;
        $teacher->updated_at = $now;
        $teacher->save();
        $teacher->assignRole('teacher');

        $student = new User;
        $student->name ='Msai student2';
        $student->email = 'student2@mail.com' ;
        $student->email_verified_at= $now;
        $student->password= Hash::make('0000');
        $student->created_at = $now;
        $student->updated_at = $now;
        $student->save();
        $student->assignRole('student');

        $student = new User;
        $student->name ='Msai student3';
        $student->email = 'student3@mail.com' ;
        $student->email_verified_at= $now;
        $student->password= Hash::make('0000');
        $student->created_at = $now;
        $student->updated_at = $now;
        $student->save();
        $student->assignRole('student');

        $student = new User;
        $student->name ='Msai student4';
        $student->email = 'student4@mail.com' ;
        $student->email_verified_at= $now;
        $student->password= Hash::make('0000');
        $student->created_at = $now;
        $student->updated_at = $now;
        $student->save();
        $student->assignRole('student');
    }
}
