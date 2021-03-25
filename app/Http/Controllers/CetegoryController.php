<?php

namespace App\Http\Controllers;

use App\Models\Cetegory;
use Illuminate\Http\Request;
use Session;

class CetegoryController extends Controller
{
     
     function cetegory_list(){
         $cetegory= new Cetegory;
         $cetegory1= $cetegory->getdata();
        return view('Admin_panel/cetegory/cetegory_list')->with('tabledata', $cetegory1);

     }

     function add_cetegory(){

        return view('Admin_panel/cetegory/cetegory_add') ;
     }

     function  cetegory_save(Request $request)
     {
         $this->validate($request,[
         'cetegory_name'=>'required'
         ]);
           $data=
          [
            'name'=>$request->post('cetegory_name'),
            'author'=>$request->post('author'),          
            'status'=>$request->post('status')           
          ];

          $cetegorydata= new Cetegory;
          $result=$cetegorydata->insertdata($data);

          if($result)
          {
               Session::flash('message', "Your Cetegory has been successfully inserted.");
               Session::flash('class', "alert-success");
               return redirect()->back();
          }
          else
          {
              Session::flash('message', "something wrong.");
              Session::flash('class', "alert-danger");
              return redirect()->back();
          }
     }
     function cetegory_view(Request $request)
    {
      $cetegorydata= new Cetegory;
       $result=$cetegorydata->viewData($request->get('id'));
       return view('Admin_panel/cetegory/cetegory_view')->with('viewdata', $result);
    }
    function cetegory_edit(Request $request)
    {
        $cetegorydata= new Cetegory;
        $result=$cetegorydata->viewData($request->get('id'));

       return view('Admin_panel/cetegory/cetegory_edit')->with('viewdata', $result);
    }

     function cetegory_update(Request $request)
     {
        $this->validate($request,[
         'cetegory_name'=>'required'
         ]);

         $data=
        [    
             'id'=>$request->post('id'),
             'name'=>$request->post('cetegory_name'),         
             'status'=>$request->post('status')  
        ];

          $cetegorydata= new Cetegory;
          $result= $cetegorydata->updatedata($data);

          if($result)
          {
               Session::flash('message', "Your Cetegory has been successfully updated.");
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

     function delete_cetegory(Request $request)
    {
       
       $cetegorydata= new Cetegory;
       $result= $cetegorydata->trashcetegory($request->get('id'));
       if($result)
       {
        Session::flash('message', "Your Cetegory has been successfully deleted.");
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
