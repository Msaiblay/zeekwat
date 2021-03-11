<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
//use Auth;

class AuthController extends Controller
{
    public function loginform(){
        return view('auth.login');
    }
    public function login(Request $request){
        Validator::make($request->all(),[
            'email' => ['required','string','email'],
            'password' => ['required','string','min:4'],
        ])->validate();
        $email = $request->email;
        $password = Hash::make($request->password);
        $user = User::where('email',$email)->first();

//        dd($user);
        if (Hash::check($request->password,$user->password)){
//            dd('ok');
            $role = $user->getRoleNames();
//            dd($rolecredinal);
            $credentials = $request->only('email','password');
            Auth::attempt($credentials);
            if ($role[0] == 'student'){
                return redirect('/');
            }
            elseif ($role[0] == 'Teacher' or $role == 'teacher'){
                return redirect('/teachercourses');
            }
            else{
                return redirect('/categories');
            }
        }

        else{
            return redirect()->back();
        }
    }

    public function studentregisterform(){
        return view('auth.studentregister');
    }
    public function studentregister(Request $request){
//        dd('ok');

        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4'],
            'confirmpassword' => ['required', 'string', 'min:4'],

        ])->validate();
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $confirmpassword = $request->confirmpassword;
        if ($password == $confirmpassword){

            $now = Carbon::now();
            $student = new User;
            $student->name =$name;
            $student->email = $email ;
            $student->email_verified_at= $now;
            $student->password= Hash::make($password);
            $student->created_at = $now;
            $student->updated_at = $now;
            $student->save();
            $student->assignRole('student');

            $credentials = $request->only('email', 'password');
            Auth::attempt($credentials);

            return redirect('/');
        }else{
            return redirect()->back();
        }

    }
    public function teacherregisterform(){
        return view('auth.teacherregister');
    }

    public function teacherregister(Request $request){
//        dd('ok');

        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4'],
            'confirmpassword' => ['required', 'string', 'min:4'],

        ])->validate();
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $confirmpassword = $request->confirmpassword;
        if ($password == $confirmpassword){

            $now = Carbon::now();
            $student = new User;
            $student->name =$name;
            $student->email = $email ;
            $student->email_verified_at= $now;
            $student->password= Hash::make($password);
            $student->created_at = $now;
            $student->updated_at = $now;
            $student->save();
            $student->assignRole('teacher');

            $credentials = $request->only('email', 'password');
            Auth::attempt($credentials);

            return redirect('/teachercourses');
        }else{
            return redirect()->back();
        }

    }
}
