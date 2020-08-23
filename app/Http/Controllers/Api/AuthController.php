<?php
namespace App\Http\Controllers\Api;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\User; 
use Illuminate\Support\Facades\Auth; 
use Validator;
class AuthController extends Controller 
{
 public $successStatus = 200;
  
 public function register(Request $request) {    
 $validator = Validator::make($request->all(), 
              [ 
              'name' => 'required',
              'email' => 'required|email|unique:users',
              'password' => 'required',  
              'c_password' => 'required|same:password', 
             ]);   
 if($validator->fails()) {          
       return response()->json(['error'=>$validator->errors()], 401);               
    }    
 $input = $request->all();  
 $input['password'] = bcrypt($input['password']);
 $user = User::create($input); 
 // $success['token'] =  $user->createToken('AppName')->accessToken;
 // return response()->json(['success'=>$success], $this->successStatus); 
return response()->json(['sucess'=>'Register Successfully When You will Login Token Generate..'],401);
}
  
   
public function login(){ 
if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
   $user = Auth::user(); 
   $success['token'] =  $user->createToken('MyToken')-> accessToken; 
    return response()->json(['success' => $success], $this-> successStatus); 
  } else{ 
   return response()->json(['error'=>'Invalid Creditieals...'], 401); 
   } 
}
  
 public function details() 
    { 
        $user = Auth::user(); 
        return response()->json(['success' => $user], $this-> successStatus); 
    }
  public function getUsers(){
    return User::all();
  } 
} 
  
?>
