<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Customer;
use Illuminate\Http\Request;

class Search extends Controller
{
    //

    public function search(){
        return view('accounts.search_customer');
    }

    public function search_account(){
        return view('accounts.search_account');
    }

    public function show_customer_account(Request $request){
        $customer = Account::getCustomer($request->Name,$request->Surname,$request->Date_of_Birth);
        $cutomerid = Account::getCustomer_Id($request->Name,$request->Surname,$request->Date_of_Birth);


    }
}
