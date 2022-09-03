<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $fillable = ['id','Name','Surname','Age','Address','Email','Phone'];

    // --- Defining a relationship one to many with accounts table
    public function account(){
        return $this->hasMany(Account::class);
    }
        
    // Getting customer's ID
    public static function getCustomer_Id($name,$surname,$dob){
        
        $match=['Name'=>$name,'Surname'=>$surname,'Date_of_Birth'=>$dob];
        $customer = Customer::where($match)->get();
        foreach($customer as $item){
            $id=$item->id;
        }
        return $id;
    }

    // Getting one customer
    public static function getCustomer($name,$surname,$dob){
        $match=['Name'=>$name,'Surname'=>$surname,'Date_of_Birth'=>$dob];
        $customer = Customer::where($match)->get();
        return $customer;
    }

    // Select customers with their accounts

    public static function getCustomersAccounts(){

    $customers =Customer::select('Name','Surname','Date_of_Birth','accounts.id','Sort_Code','Balance')
    ->join('accounts','customers.id','=','accounts.customer_id')->get();

    return $customers;
    }

    // Select one customer with their accounts

    public static function getCustomerAccounts($id){
        $match=['customers.id'=>$id];
        $customer =Customer::select('Name','Surname','Date_of_Birth','accounts.id','Sort_Code','Balance')
        ->join('accounts','customers.id','=','accounts.customer_id')->where($match)->get();
    
        return $customer;
        }
}
