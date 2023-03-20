<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Product;
use Session;
use Validator;

class HomeController extends Controller
{
    public function index()
    {  
        $data['data']=[];
        $data['catlist'] = CommonController::categorylist();
        $data['catbasedoneproduct']=Product::all()->unique('cat_id')->toArray();
        // echo "<pre>"; print_r($data); die;
         return view('home', compact('data'));
    }
    public function aboutpage()
    {  
         $data['data']=[];
         $data['catlist'] = CommonController::categorylist();
         return view('about', compact('data'));
    }
    public function contactpage()
    {  
         $data['data']=[];
         $data['catlist'] = CommonController::categorylist();
         return view('contact', compact('data'));
    }
    
    public function teamlist()
    {  
         $data['data']=[];
         $data['catlist'] = CommonController::categorylist();
         return view('team-list', compact('data'));	 
    }
     public function savecontact( Request $res)
    {		// dd($res->all());
		    $res->validate([
		    'subject' => 'required|unique:contacts',
			]);
	            $contact = new Contact;
		    	$contact->name = $res->name;
		    	$contact->email = $res->email;
		    	$contact->subject = $res->subject;
		    	$contact->phone = $res->phone;
		    	$contact->message = $res->message;
		    	$contact->save();
		    	return redirect('/contact65857vjh34fxbc098n435dfgfjhUs')->withsuccess('Your Contact Added Successfully!');
    }
    
}
