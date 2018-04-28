<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();

        $response = [
            'msg' => 'all Users',
            'users' => $users
        ];
        return response()->json($response, 201);

    }

    public function userById($id)
    {
        $user = User::find($id);

        $response = [
            'msg' => 'User By Id',
            'users' => $user
        ];
        return response()->json($response, 201);

    }

    public function register(Request $request)
    {
        //validate data
        $this->validate($request, [
            'first_name'        => 'required|max:100',
            'last_name'         => 'required|max:100',
            'email'             => 'required|unique:users',
            'password'          => 'required|max:15|min:8',
            'phone_number'      => 'required|min:10',
            'gender'            => 'required',
            'date_of_birth'     => 'required',
            'biography'         => 'required'
        ]);

        //store new use in the database
        $user = new User();
        $user->first_name        =   $request->first_name;
        $user->last_name         =   $request->last_name;
        $user->email             =   $request->email;
        $user->password          =   Hash::make($request->password);
        $user->phone_number      =   $request->phone_number;
        $user->gender            =   $request->gender;
        $user->date_of_birth     =   $request->date_of_birth;
        $user->biography         =   $request->biography;


        if($user->save()){
            $message =  'Registered Successfully!';
        }else{
            $message =  'Registration Failed.';
        }


        $response = [
            'msg' => $message,
            'users' => $user
        ];
        return response()->json($response, 201);

    }

    public function update(Request $request, $id) {

        //validate data
        $this->validate($request, [
            'first_name'        => 'required|max:100',
            'last_name'         => 'required|max:100',
            'email'             => 'required|unique:users',
            'password'          => 'required|max:15|min:8',
            'phone_number'      => 'required|min:10',
            'gender'            => 'required',
            'date_of_birth'     => 'required',
            'biography'         => 'required'
        ]);

        //update user info in the database
        $user = User::find($id);
        $user->first_name        =   $request->first_name;
        $user->last_name         =   $request->last_name;
        $user->email             =   $request->email;
        $user->password          =   Hash::make($request->password);
        $user->phone_number      =   $request->phone_number;
        $user->gender            =   $request->gender;
        $user->date_of_birth     =   $request->date_of_birth;
        $user->biography         =   $request->biography;


        if($user->update()){
            $message =  'Updated Successfully!';
        }else{
            $message =  'Update Failed.';
        }
        $response = [
            'msg' => $message,
            'users' => $user
        ];
        return response()->json($response, 201);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if($user->delete()){
                $message =  'Deleted Successfully!';
            }else{
                $message =  'Delete Failed.';
            }
            $response = [
                'msg' => $message,
                'users' => $user
            ];
        return response()->json($response, 201);
    }
}
