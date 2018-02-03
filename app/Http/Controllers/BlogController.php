<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Login;
use App\Blogs;


class BlogController extends Controller {
   
 
   public function checklogin(Request $request)
   { 
      $username = $request->input('username');
      $password = $request->input('pwd');
    
	
		
	   $alldata =  DB::table('login')->where(array(array(DB::raw('LOWER(username)'),'=', strtolower($username)), array('password','=',$password)))->get();
	 
	
	   $request->session()->put('uname', $username);
       $datarr = array('uname' => $username); 
	   $first = 1;
       if($alldata[0]->type == 'admin')
       {
		    $request->session()->put('usertype', 'admin');
			$isadmin = 1;
			return view('createblog', compact('isadmin','username','first'));
			
       }else if($alldata[0]->type == 'user')
       { 
		  $request->session()->put('usertype', 'user');
		  $isadmin = 0;
		  return view('createblog', compact('isadmin','username','first'));
           
	   }else{
		   
		   $arr = array('isvalid', '0');
				  return view('index',  array('isvalid' => '0'));
	   }		   
   }
   
   
   function createblog(Request $request)
   { 
	   $username = $request->session()->get('uname');
	   $usertype = $request->session()->get('usertype');
	   $blog_head = $request->input('blog_head');
       $blog_content = $request->input('blog_content');
	   
	 //  $inputs = array('createdby' => $uname,'blog_header' => $blog_head, 'blog_content' => $blog_content , 'updated_date' => date('Y-m-d H:i:s'), 'cur_date' => date('Y-m-d H:i:s')  );
	  // Blogs::create($inputs);
	   
	   $Blogsobj = new Blogs;
	 
	   $Blogsobj->createdby = $username;
	   $Blogsobj->blog_header = $blog_head;
	   $Blogsobj->blog_content = $blog_content;
	   $Blogsobj->updated_date = date('Y-m-d H:i:s');
	   $Blogsobj->cur_date = date('Y-m-d H:i:s');
	   
	   $Blogsobj->save();
       
	   $alldata =  Blogs::all();
	  
	  $i = 0;
	  $response = array();
	  foreach($alldata as $val)
	  {
		 $response[$i]['useredit'] = ($val->createdby == $username) ? 1:0;
		 $response[$i]['useredit'] = ($usertype == 'admin') ? 1: $response['useredit'];
		 $response[$i]['createdby'] = $val->createdby;
		 $response[$i]['blog_header'] = $val->blog_header;
		 $response[$i]['blog_content'] = $val->blog_content;
		 $response[$i]['updated_date'] = $val->updated_date;
		 $response[$i]['cur_date'] = $val->cur_date;
		 $response[$i]['blogid'] = $val->blogid;
		 $i = $i +1; 
	  }
	   
	  return view('allblogs',  compact('response','username','usertype'));
   }
   
   function showallblogs(Request $request)
   {
	    $username = $request->session()->get('uname');
	   $usertype = $request->session()->get('usertype');
	   
	    $alldata =  Blogs::all();
		$response = array();
		
		 $i = 0;
	  foreach($alldata as $val)
	  {
		 $response[$i]['useredit'] = ($val->createdby == $username) ? 1:0;
		 $response[$i]['useredit'] = ($usertype == 'admin') ? 1: $response['useredit'];
		 $response[$i]['createdby'] = $val->createdby;
		 $response[$i]['blog_header'] = $val->blog_header;
		 $response[$i]['blog_content'] = $val->blog_content;
		 $response[$i]['updated_date'] = $val->updated_date;
		 $response[$i]['cur_date'] = $val->cur_date;
		 $response[$i]['blogid'] = $val->blogid;
		 
		   $i = $i +1; 
	  }
	 
	  return view('allblogs',  compact('response','username','usertype'));
   }
   
   function logout(Request $request)
   {
	 
		$request->session()->put('uname','');
	
        return view('index', array('isvalid' => true));
   } 
}




?>
