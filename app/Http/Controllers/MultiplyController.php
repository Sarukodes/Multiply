<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultiplyController extends Controller
{
 public function multiply(){
    return view('multiply');
 }
        public function showtable(Request $request)
        {
        $num1=$request->num1;
        $num2=$request->num2;
        for($i=1; $i<=$num2; $i++)
        {
            $table=$num1*$i;
            echo "$num1 *$i =$table <br>";
        }
        }
    }


