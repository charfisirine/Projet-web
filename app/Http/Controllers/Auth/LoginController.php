<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
class LoginController extends Controller
{
public function login(Request $request)
{
$request->validate([
'email' => 'required|email',
'password' => 'required',
]);
if (Auth::attempt($request->only('email', 'password'))) {
$user = Auth::user();
$token = $user->createToken('token-name')->plainTextToken;

return response()->json([
'status' => true,
'message' => 'User Logged In Successfully',
'token' => $token,
'user' =>$user
], 200);
}
throw ValidationException::withMessages([
'email' => ['The provided credentials are incorrect.'],
<<<<<<< HEAD
=======

2

>>>>>>> 2a0a8c243740f13ea1ac47192f81c6abb64d7524
]);
}
public function logout(Request $request)
{
$request->user()->tokens()->delete();
return response()->json([
'message' => 'Successfully logged out'
]);

}

<<<<<<< HEAD
}
=======
}
>>>>>>> 2a0a8c243740f13ea1ac47192f81c6abb64d7524
