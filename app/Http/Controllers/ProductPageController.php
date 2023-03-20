<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;
use DB;
class ProductPageController extends Controller
{
    public function productlist()
    {  
    	$data['productlist']=[];
    	$data['productlist'] = DB::table('products')
					            ->join('categories', 'products.cat_id', '=', 'categories.cat_id')
					            ->select('products.*', 'categories.cat_name', 'categories.cat_id')
					            ->orderBy('products.p_id','DESC')
					            ->get()->toArray();
        $data['catlist'] = CommonController::categorylist();
        // echo "<pre>"; print_r($data); die;
         return view('product-list', compact('data'));	 
    }
    
    public function catbasedproductlist($end = null)
    {  

    	$data['productlist']=[];
        if(!empty($end)){
        	$data['productlist'] = DB::table('products')
					            ->join('categories', 'products.cat_id', '=', 'categories.cat_id')
					            ->select('products.*', 'categories.cat_name', 'categories.cat_id')
					            ->where('products.cat_id',base64_decode($end))
					            ->orderBy('products.p_id','DESC')
					            ->get()->toArray();
	        $data['catlist'] = CommonController::categorylist();
	        //one category one product
	        $data['catbasedoneproduct']=Product::all()->unique('cat_id')->toArray();
	        @$data['cat_name']=$data['productlist'][0]->cat_name;
	         // echo "<pre>"; print_r($data); die;
	         return view('catbased-productlist', compact('data'));	 
            
        }else{
        	 return back()->with('warning', 'Category not found!');
        }     
    	
    }

    public function productDetails( $end = null){ 

    		$data['pdetails']=[];
        if(!empty($end)){
	    	$ser= DB::table('products')
						            ->join('categories', 'products.cat_id', '=', 'categories.cat_id')
						            ->select('products.*', 'categories.cat_name', 'categories.cat_id')
						            ->where('products.p_id',base64_decode($end))
						            ->get()->toArray();
			 if(!empty($ser)){
			 		$data['pdetails'] =$ser['0']; 
             }else{
                return redirect('/product547cgtd324sadz54iukln9856bvs')->withsuccess('Id Not Found!');
             } 
			
	        $data['catlist'] = CommonController::categorylist();
	         //one category one product
	        $data['catbasedoneproduct']=Product::all()->unique('cat_id')->toArray();
	  
	          // echo "<pre>"; print_r($data); die;
	         return view('product-details', compact('data'));
        }                   
    }

}
