<?php

namespace App\Http\Controllers;

use App\Customer;
use DB;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $customers = new Customer();
        // $customers = $customers->AllData(); //CUSTOM MODEL DATA
        // return view('show_customer')->with('customers',$customers);

        $customers = new Customer();
        $customers = $customers->AllData(); //CUSTOM MODEL DATA
        return $customers;

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_customer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'bail|min:3|required|max:255|required',
            'email' => 'bail|min:3|required|max:255|',
            'phone' => 'bail|min:3|required|max:255|required',
            'address' => 'bail|min:3|required|max:255|required',
            'country' => 'bail|min:3|required|max:255|required',
            'rating' => 'bail|min:3|required|max:255|required',
        ]);

       $customer = new Customer;     
       $customer->name = $request->input('name');
       $customer->email = $request->input('email');
       $customer->phone = $request->input('phone');
       $customer->address = $request->input('address');
       $customer->country = $request->input('country');
       $customer->rating = $request->input('rating');
       $customer->save();

       return redirect('/customer')->with('message', 'Successfully Added!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);
        return view('single_customer')->with('customer' , $customer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('edit_customer')->with('customer' , $customer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->name = $request->txtName;
        $customer->email = $request->txtEmail;
        $customer->phone = $request->txtPhone;
        $customer->address = $request->txtAddress;
        $customer->country = $request->txtCountry;
        $customer->rating = $request->txtRating;
        $customer->save();
        return redirect('/customer/'.$id)->with('message', 'Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customerName = $customer->name;
        $customer = Customer::destroy($id);

        if ($customer) {
         return redirect('/customer')->with('message-delete', 'Successfully Deleted! ' .$customerName );
        }
    }
}

