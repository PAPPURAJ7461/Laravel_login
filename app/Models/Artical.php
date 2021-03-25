<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Artical extends Model
{
    use HasFactory;

     function insertData($data)
   {
        // $value=DB::table('artical')->where('Author', $data['Author'])->get();
         if($data){
         DB::table('artical')->insert($data);
         return 1;
         }else{
         return 0;
         }
   }
    function getData()
   {
        $value=DB::table('artical')->get();
        
        return $value;
   }
     function viewData($data)
   {
        $value=DB::table('artical')->where('id', $data)->get();
        return $value;
   }
   function updatedata($data)
   {
        
        $value=DB::table('artical')->where('id', $data['id'])->update(
          [
            'Name'     => $data['Name'],
            'Status'     => $data['Status'],
            'cetegory' => $data['cetegory'],
            'content'  => $data['content']
          ]);

        if($value)
        {
          return 1;
        }
        else
        {
         return 0;
        }
        
     }
     
     function trashartical($data)
     {
      $user = DB::table('artical')->where('id', $data)->delete();
       if( $user)
       {
          return 1;
       }
       else
       {
        return 0;
       }
     } 
    
}
