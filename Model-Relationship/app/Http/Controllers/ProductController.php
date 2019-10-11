<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;
class ProductController extends Controller
{
    public function product()
    {
        /* 
        Inner Join Example
        SELECT * 
        FROM table1 INNER JOIN table2 
        ON table1.column_name = table2.column_name; 
        */
        $products = DB::table('products')
                    ->join('categories','categories.id','=','products.category_id')
                    ->select('products.id','products.title','categories.name')
                    ->get();
        return view('pages.products',compact('products'));
    }
}
