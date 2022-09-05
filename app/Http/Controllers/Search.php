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

    public function search_customer_accounts(Request $request){
   
        $name= $request->Name;
        $surname=$request->Surname;
        $dob=$request->Date_of_Birth;
        
        $id=Customer::getCustomer_Id($name,$surname,$dob);
        $customer=Customer::getCustomerAccounts($id);
        return view('accounts.moreInfo',compact('customer'));
    }
        
    public function search_customer_view(){
        return view('search.search_customer');
    }

    
}
