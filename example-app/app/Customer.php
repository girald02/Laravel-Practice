<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Customer extends Model
{
    public function AllData(){
    	// ALL
	 	$customer = DB::table('customers')->paginate(10);
		return $customer;
    }
}


