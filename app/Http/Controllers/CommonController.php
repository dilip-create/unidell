<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use Session;
class CommonController extends Controller
{
    public function categorylist()
    {  
    	 return Category::select('cat_id','cat_name')->where('isactive','1')->orderBy('cat_id', 'DESC')->get()->toArray();  
    }
}
