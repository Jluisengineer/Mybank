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
        $user = Customer::where($match)->get();
        foreach($user as $item){
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
}
