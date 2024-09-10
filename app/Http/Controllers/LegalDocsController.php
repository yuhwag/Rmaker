<?php  

namespace App\Http\Controllers;  
use Illuminate\Http\Request;  

class LegalDocsController extends Controller{  
    public function page($title){  
        return view('legaldocs')->with('title',$title);  
    }   
}  