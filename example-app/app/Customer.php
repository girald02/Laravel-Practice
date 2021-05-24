<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Customer extends Model
{
    public function AllData(){
    	// ALL
	 		$customer = DB::table('customers')->get();
			return $customer;

    	// WHERE
    		// $customer = DB::table('customers')->where('name' , 'Betty Medhurst')->get()->first();
 		
 		// ORDER BY
    		// $customer = DB::table('customers')->orderBy('name' , 'asc')->get();

    	// AGGREGATE 

    		// return "qweqweds";

    }
}


