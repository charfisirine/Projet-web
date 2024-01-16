<?php
<<<<<<< HEAD
namespace App\Http\Controllers\Auth;
=======

namespace App\Http\Controllers\Auth;

>>>>>>> 2a0a8c243740f13ea1ac47192f81c6abb64d7524
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
<<<<<<< HEAD
class RegisterController extends Controller
{
public function register(Request $request)
{
$request->validate([
'name' => 'required',
'email' => 'required|email|unique:users,email',
'password' => 'required|min:6'
]);
$user = User::create([
'name' => $request->name,
'email' => $request->email,
'password' => Hash::make($request->password),
]);



$token = $user->createToken('token-name')->plainTextToken;
return response()->json([
'status' => true,
'message' => 'User Created Successfully',
'token' => $token
], 200);
}
}
=======

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'lastName' => 'required',
            'email' => 'required|email|unique:users,email',
            'phoneNumber' => 'required',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'phoneNumber' => $request->phoneNumber,
            'password' => Hash::make($request->password),
        ]);

        $token = $user->createToken('token-name')->plainTextToken;

        return response()->json([
            'status' => true,
            'message' => 'User created successfully',
            'token' => $token
        ], 201); // Use 201 Created status code for successful resource creation
    }
}
>>>>>>> 2a0a8c243740f13ea1ac47192f81c6abb64d7524
