<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artical;
use App\Models\Cetegory;
use Session;

class ArticalController extends Controller
{
    
    function index()
    {
       return view('Admin_panel/artical/artical_list');
    }

     function add_artical()
     {
        $cetegory= new Cetegory;
         $cetegory1= $cetegory->getdata();

         return view('Admin_panel/artical/add_artical')->with('cetegory',$cetegory1);
     }
      function artical_save(Request $request)
     {
     	  $this->validate($request,[
         'artical_name'=>'required',
         'artical_content'=>'required'
         ]);
     	   $data=
    	  [
            'Name'=>$request->post('artical_name'),
            'Author'=>$request->post('author'),
            'cetegory'=>$request->post('cetegory'),
            'Status'=>1,
            'content'=>$request->post('artical_content')
    	  ];

          $articaldata= new Artical;
          $result= $articaldata->insertdata($data);

          if($result)
          {
               Session::flash('message', "Your Artical has been successfully inserted.");
               Session::flash('class', "alert-success");
               return redirect()->back();
          }
          else
          {
              Session::flash('message', "This post is alredy exist.");
              Session::flash('class', "alert-danger");
              return redirect()->back();
          }
       
     }

    function artical_list()
    {
       $articaldata= new Artical;
       $result= $articaldata->getdata();
       return view('Admin_panel/artical/artical_list')->with('tabledata', $result);
    }

    function view_artical(Request $request)
    {
       $articaldata= new Artical;
       $result=$articaldata->viewData($request->get('id'));
       return view('Admin_panel/artical/artical_view')->with('viewdata', $result);
    }
    function edit_artical(Request $request)
    {
       $articaldata= new Artical;
       $result=$articaldata->viewData($request->get('id'));
       $cetegory= new Cetegory;
       $cetegory1= $cetegory->getdata();
       $data=[
         'viewdata'=> $result,
         'cetegory'=> $cetegory1 
       ];
       return view('Admin_panel/artical/artical_update')->with('data', $data);
    }

     function artical_update(Request $request)
     {
        $this->validate($request,[
         'artical_name'=>'required',
         'artical_content'=>'required'
         ]);
         $data=
        [    
             'id'=>$request->post('id'),
            'Name'=>$request->post('artical_name'),
            'Author'=>$request->post('author'),
            'cetegory'=>$request->post('cetegory'),
            'Status'=>$request->post('status'),
            'content'=>$request->post('artical_content')
        ];

          $articaldata= new Artical;
          $result= $articaldata->updatedata($data);

          if($result)
          {
               Session::flash('message', "Your Artical has been successfully updated.");
               Session::flash('class', "alert-success");
               return redirect()->back();
          }
          else
          {
              Session::flash('message', "Something is wrong.");
              Session::flash('class', "alert-danger");
              return redirect()->back();
          }
       
     }

     function delete_artical(Request $request)
    {
       
       $articaldata= new Artical;
       $result= $articaldata->trashartical($request->get('id'));
       if($result)
       {
        Session::flash('message', "Your Artical has been successfully deleted.");
        Session::flash('class', "alert-success");
        return redirect()->back();
       }
       else
       {

        Session::flash('message', "sorry your data are not able to delete.");
        Session::flash('class', "alert-danger");
        return redirect()->back();
       }
      
    }
}
