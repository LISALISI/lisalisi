<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AutosearchController extends Controller
{
    //search plainte by Ticket
    function search_key(Request $request)
    {
        if($request->get('keyId'))
        {
            $query = $request->get('keyId');
            $query_search = $request->get('key_search');
            $query_table = $request->get('table_name');
            $data = DB::table($query_table)
                ->where($query_search, 'LIKE', "%{$query}%")
                ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative;width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->$query_search.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
    }


    function valid_search_ticket(Request $request)
    {
        if($request->get('keyupId'))
        {
            $query = $request->get('keyupId');
            $query_search = $request->get('valueSearch');
            $query_table = $request->get('tableName');

            $data_searched = DB::table($query_table)
                ->where($query_search, '=', $query)
                ->get();
            return response()->json(['data_searched'=>$data_searched]);
        }
    }
}
