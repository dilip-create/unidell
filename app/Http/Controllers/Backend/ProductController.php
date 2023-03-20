<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\URL;
use Validator;
use App\Models\Product;
use App\Models\Category;
use DB;
class ProductController extends Controller
{

    public function list() {
         $product = DB::table('products')
            ->join('categories', 'products.cat_id', '=', 'categories.cat_id')
            ->select('products.*', 'categories.cat_name', 'categories.cat_id')
            ->orderBy('products.p_id','DESC')
            ->get()->toArray();
          // echo "<pre>"; print_r($product); die;
         	return view('backend.product.product-list', compact('product'));
    }

    public function new( $end = null){ 

        $product['data']=[];
        if(!empty($end)){
            $ser= Product::where('p_id', base64_decode($end))->get()->toArray();
            if(!empty($ser)){
                $product['data'] =$ser['0']; 
             }else{
                return view('notfound'); 
             } 
        }                    
         $product['catlist'] = Category::select('cat_id','cat_name')->where('isactive','1')->orderBy('cat_id', 'DESC')->get()->toArray();  
         // echo "<pre>";  print_r($product);  die;
        return view('backend.product.product-form', compact('product'));
    }

    public function save(Request $request)
    {    

        $params = $request->all();
        unset($params['_token']);
        unset($params['p_id']);
         // echo "<pre>";   print_r($request->all()); die;
        if(!empty($request->image)){
	            $file= $request->file('image');
	            $filename= 'medicine_'.date('Ymd').$file->getClientOriginalName();
	            $file-> move(public_path('assets/images/product/'), $filename);
	            $params['p_img_url'] = URL::asset('public/assets/images/product').'/'.$filename;
	            $params['p_img_name']=$filename;
	            unset($params['image']);  
       	}else{
       		unset($params['image']);
       	}

        if(isset($request->p_id) && $request->p_id != ''){

        		Product::where('p_id', $request->p_id)->update($params);	
                return redirect()->to('BackEnd/product')->with('success','Medicine details updated successfull!y');
              
        }else{
	            $request->validate([
	                'pname' => 'unique:products',
	                ]);
	            //echo "<pre>"; print_r($params); die;
	            date_default_timezone_set('Asia/Kolkata');
			// Prints the day, date, month, year, time, AM or PM
			$params['created_date'] = date("j M Y h:i A");
			 DB::table('products')->insertGetId($params);
	            return redirect()->to('BackEnd/product')->with('success','New Medicine Added successfully!');
        }        
    }

    public function delete(Request $request){ 
        $this->appRepository->deleteDevice($request->id);
        return back()->with('success','Successfully deleted.!!');
    }
}
