<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class User1 extends Model
{
    use HasFactory;
   
   function insertData($data)
   {
        $value=DB::table('users1')->where('email', $data['email'])->get();
         if($value->count() == 0){
         DB::table('users1')->insert($data);
         return 1;
         }else{
         return 0;
         }
   }
    function getData($data)
   {
        $value=DB::table('users1')->where('email', $data['email'])->get();
        
        return $value;
   }
    
    
}
