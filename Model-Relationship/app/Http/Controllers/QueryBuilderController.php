<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class QueryBuilderController extends Controller
{
    public function TestQuery()
    {
        $obj = DB::table('test_query_builders')->first();
        dd($obj);
    }
}
