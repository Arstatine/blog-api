<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    // show all users
    public function index(){
        $users = User::all();

        if($users){
            return response()->json($users);
        }

        return response()->json(['message' => 'No data found.']);
    }

    // show single user
    public function show($id){
        $user = User::find($id);

        if($user){
            return response()->json($user);
        }

        return response()->json(['message' => 'No data found.']);
    }

    public function store(Request $request){
        $form = $request->validate([
            'name' => ['required'],
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);

        if($form){
            $form['password'] = bcrypt($form['password']);
            $user = User::create($form);
            $token = $user->createToken(env('TOKEN_VARIABLE'))->plainTextToken;

            if($user){
                return response()->json(['message' => 'User successfully added.', 'user' => $user, 'token' => $token]);
            }
        }

        return response()->json(['message' => 'Please create an account first.']);
    }

    // update user
    public function update(Request $request, $id){
        $user = User::find($id);

        if($user){
            if($request->name != '' || $request->name != null){
                $user->name = $request->name;
            }

            if($request->email != '' || $request->email != null || $request->email != $user->email){
                $user->name = $request->name;
            }

            $user->save();

            return response()->json(['message' => 'User updated successfully.']);
        }

        return response()->json(['message' => 'No user found.']);
    }

    // delete a user
    public function destroy($id){
        $deleted_user = User::destroy($id);

        if($deleted_user){
            return response()->json(['message' => 'User deleted with the id of ' . $id ]);
        }

        return response()->json(['message' => 'No user with the id of ' . $id ]);
    }

    // login a user
    public function login(Request $request){
        $form  = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if($form){
            if (auth()->attempt($form)) {
                $user = User::find(auth()->user()->id);
                if($user){
                    $token = $user->createToken(env('TOKEN_VARIABLE'))->plainTextToken;
                    
                    return response()->json([
                        'user' => $user,
                        'token' => $token
                    ]);
                }

                return response()->json(['message' => 'Unauthorized.' ]);
            }

            return response()->json(['message' => 'Credentials does not match, please try again.']);
        }

        return response()->json(['message' => 'Please enter email and password.' ]);

    }

    // logout a user
    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => 'Logged out successfully.' ]);
    }
}
