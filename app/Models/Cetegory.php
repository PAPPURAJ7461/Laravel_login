<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Cetegory extends Model
{
    use HasFactory;

    function insertData($data)
   {
        // $value=DB::table('artical')->where('Author', $data['Author'])->get();
         if($data){
         DB::table('cetegories')->insert($data);
         return 1;
         }else{
         return 0;
         }
   }
    function getData()
   {
        $value=DB::table('cetegories')->get();
        
        return $value;
   }
}
