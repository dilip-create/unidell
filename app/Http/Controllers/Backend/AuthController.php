<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use Session;
use App\Models\Admin;
use DB;

class AuthController extends Controller
{
    
    public function adminlogin(Request $req)
    {
       $users = Admin::where('email',$req->email)->first();
    	 
        if(!empty($users)){   
          		$password = base64_encode($req->password);
            if ($password==$users['password']) {
                     $sessdata=array(
                     	'adminId' => $users['id'],
                    	'email'     => $users['email']
                          );

                    if(!empty($sessdata)){
                      $req->session()->put('sessdata', $sessdata);
                      return redirect('/BackEnd/dashboard')->withsuccess('Login Successfully!');  
                     }
            }else{
                 return back()->with('warning', 'Invalid Email or Password!');
            }
        }else{
            return back()->with('warning', 'Invalid Email!');
        }
    }

    public function alogout()
    {   
        Session::flush();
        return redirect('/BackEnd')->withsuccess('LogOut Successfully !');
    }

    public function passwordpage()
    {  
        return view('backend.change-password');
    }
    
    public function changePassword(Request $req)
    {  
      	$data=Session::get('sessdata');
      
	      if(!empty($data)){
	        
	          if($req->npass == $req->cpass){
	              $newpass = base64_encode($req->npass);
	            
	              Admin::where('email', $data['email'])->update(['password' => $newpass]);
	              $uppass = Admin::where('email', $data['email'])->value('password');
	                 if($uppass==$newpass){
	                      Session::flush();
	                      return redirect('/BackEnd')->withsuccess('Your password has been changed Successfully! Please Login again!');
	                 }else{
	                      return redirect('BackEnd/chan4545101dgf4r3645pass35fh34')->with('warning', 'Updation Error!');
	                 }

		         }else{
		            return redirect('BackEnd/chan4545101dgf4r3645pass35fh34')->with('warning', 'New Password must be match with confirm password!');
		         }

		     }else{
		                return redirect('BackEnd/chan4545101dgf4r3645pass35fh34')->with('warning', 'Data Not Found, Please Login First!');
		     }
        
    }

}
