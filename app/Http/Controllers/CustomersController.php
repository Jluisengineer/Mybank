<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $customers = Customer::all();
        return view('customers.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        // return view where we can insert a new record
        return view('customers.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        // new customer
        $customer = new Customer;

        // Adding data we received from insert view
        $customer->name=$request->name;
        $customer->surname=$request->surname;
        $customer->age=$request->age;
        $customer->address=$request->address;
        $customer->email=$request->email;
        $customer->phone=$request->phone;
        $customer->save();
        return view('customers.recorded');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        //
        $customer=Customer::find($id);
        
        return view('customers.delete',compact('customer'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        // --- select a customer with $id defined
        $customer=Customer::find($id);
        
        return view('customers.edit',compact('customer'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $customer=Customer::findorfail($id);
        $customer->update($request->all());
        return view('customers.recorded');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $customer=Customer::findorfail($id);
        $customer->delete();
        return view('customers.deleted');
    }
}
