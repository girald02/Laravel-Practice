<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Customer extends Model
{
    public function AllData(){

    	$customer = DB::table('customers')->where('name', 'Hanna Schaden IV')->first();

		return $customer->name;
    }
}
