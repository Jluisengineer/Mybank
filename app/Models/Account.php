<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $table = 'accounts';
    protected $fillable = ['Sort code','Balance'];

    // Realtionship: customers table
    public function customer(){
        $this->belongsTo(Customer::class);
    }

    // Realtionship: transactions table

    public function transaction(){
        $this->hasMany(Transaction::class);
    }

     // Function to generate a random sort code xx-xx-xx

    public static function rnd_sortcode(){
       
        $sortcode=[];
        for($i=0;$i<3;$i++){
            $a=rand(10,20);
            $sortcode[]=$a;
        }
        $sort = $sortcode[0]."-".$sortcode[1]."-".$sortcode[2];
        return $sort;
    }

    // Getting account's ID
    public static function getAccount_Id($sort){
        
        $match=['Sort_Code'=>$sort];
        $account = Account::where($match)->get();
        foreach($account as $item){
        $id=$item->id;
        }
        return $id;
    }

    // Getting one Account by its sort code
    public static function getAccount($sort){
        $match=['Sort_Code'=>$sort];
        $account = Account::where($match)->get();
        return $account;
    }

        // Getting one Account by its id
        public static function getAccountbyId($id){
            $match=['accounts.id'=>$id];
            $customer =Customer::select('Name','Surname','accounts.id','Sort_Code')
            ->join('accounts','customers.id','=','accounts.customer_id')->where($match)->get();
            return $customer;
        }

        public static function getAccountbySortcode($sort){
            $match=['Sort_code'=>$sort];
            $customer =Customer::select('Name','Surname','accounts.id','Sort_Code')
            ->join('accounts','customers.id','=','accounts.customer_id')->where($match)->get();
            return $customer;
        }
}
