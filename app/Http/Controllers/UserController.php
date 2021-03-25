<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Models\User1;
use Illuminate\Hashing\BcryptHasher;

class UserController extends Controller
{
    function index(){
    	
       if (Session::has('email'))
        {
          return view('Admin_panel/dashboard');
        }
        else
        {
          return view('Admin_panel/login');
        }
    	
    }
    function signup(){
    	
       if (Session::has('email'))
        {
          return view('Admin_panel/dashboard');
        }
        else
        {
    	  return view('Admin_panel/sign_up');
        }
    }
    function dashboard(){
      
      return view('Admin_panel/dashboard');
    }
    
    function authenticate(Request $request){
    	
    	  $this->validate($request,[
         'email'=>'required',
         'password'=>'required'
      ]);
    	  $data=
    	  [
            'email'=>$request->email,
            'password'=>$request->password
    	  ];
    	   $user = new User1;
           $result=$user->getData($data); 
           foreach ( $result as  $value) {  
            $password =$value->password;
            $email =$value->email;
            $f_name =$value->first_name;  
            $l_name =$value->last_name;          
           }

           if(!empty($result)&& !empty($password))
           {

            if (password_verify( $data['password'], $password)) 
               {

                  // echo"<br><a href='logout'>logout</a>"; 
                  Session::put('email',$email );
                  Session::put('first_name',$f_name );
                  Session::put('last_name',$l_name );
                  return redirect('dashboard');
               } 
               else
               {
               	     Session::flash('message', "please enter valid username and password");
                     Session::flash('class', "alert-danger");
                     return redirect()->back();
               }
           	
           }
           else
           {
                 	   Session::flash('message', "user does't exist");
                     Session::flash('class', "alert-danger");
                     return redirect()->back();
           }
           
    }
    

    function register(Request $request){
      $this->validate($request,[
         'f_name'=>'required',
         'l_name'=>'required',
         'email'=>'required',
         'password'=>'required|min:5'
      ]);
         
        $data=
        [
        	'first_name'=>$request->f_name, 
        	'last_name' =>$request->l_name,    
        	'email'     =>$request->email,    
        	'password'  =>bcrypt($request->password),       
        ] ;
        
        $user = new User1;
        $result=$user->insertData($data);
        if($result==1)
        {
           Session::flash('message', "register Successfully ");
           Session::flash('class', "alert-success");
          return redirect()->back();
        }
        else
        {
            Session::flash('message', "This user is alredy exist.");
            Session::flash('class', "alert-danger");
           return redirect()->back();
        }
    }
    


}
