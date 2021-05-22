<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//ENCRYPTION & DECRYPTION CLASS
use Illuminate\Support\Facades\Crypt;

class Pages_Controller extends Controller
{
	public function encryptval(){
		// return encrypt("Girald is my Name.");
		return Crypt::encrypt("Girald is my Name.");
	}

	public function decryptval(){
		// return decrypt("eyJpdiI6IlR2b2VnZmdETVVTYk03OXlSMU81N1E9PSIsInZhbHVlIjoicURwK05sYVFqbWFmMUdxUDFkZkJVSVJ6ZktIVi9WZzEwY3Qzc1V4M0ZIdz0iLCJtYWMiOiI4ODVlMTk4YWExMDIzMjM2ZGJkMGUzZGIxMjM2YjFiOWRjMmIwYThjZjc4MjA5ODU4MmFiM2Y5MGVlMTBiZWQ0In0=");
		return Crypt::decrypt("eyJpdiI6IlJsZmJKR1NvZEVrODQ1bE1GcG9PYWc9PSIsInZhbHVlIjoiTGt5U0pQUVlyRXozT0JoUitlN0dJQkFnMFplWDVKV0Q2Wm1ENkNqWUI5RT0iLCJtYWMiOiJkMzlhZTdmZDNkNDRhMTExZjE2YzgxZDIzYjY2MjU2NzY1MDE5ZTE1ZWVkMjhmYjgyNTBhYzljNDg0ZDQ5NmVhIn0=");
	}
}
