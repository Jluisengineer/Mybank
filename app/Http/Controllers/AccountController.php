<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Customer;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::getCustomersAccounts();

        return view('accounts.customerAccounts',compact('customers'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // --- looking for a customer
        $customer = Customer::getCustomer($request->Name,$request->Surname,$request->Date_of_Birth);
        $data=[];
        foreach($customer as $item){
            $data[]=$item->id;
            $data[]=$item->Name;
            $data[]=$item->Surname;
        }
        $data[] = Account::rnd_sortcode();
        
        return view('accounts.insertAccount',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // new account
        $account=new Account;
        $account->customer_id=$request->customer_id;
        $account->Sort_Code=$request->Sort_Code;
        $account->Balance=$request->Balance;
        $account->save();
        return view('/Mybank/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $account=Account::findorfail($id);
        $account->delete();
        return view('/Mybank/index');       
    }
}
