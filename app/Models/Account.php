<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $table = 'accounts';
    protected $fillable = ['Sort code','Balance'];

    public function customer(){
        $this->belongsTo(Customer::class);
    }

    public static function rnd_sortcode(){
        // Function to generate a random sort code xx-xx-xx
        $sortcode=[];
        for($i=0;$i<3;$i++){
            $a=rand(10,20);
            $sortcode[]=$a;
        }
        $sort = $sortcode[0]."-".$sortcode[1]."-".$sortcode[2];
        return $sort;
    }


    public static function getCustomer_Id($name,$surname,$dob){
        
        $match=['Name'=>$name,'Surname'=>$surname,'Date_of_Birth'=>$dob];
        $user = Customer::where($match)->get();
        foreach($user as $item){
        $id=$item->id;
        }

        return $id;
    }

    public static function getCustomer($name,$surname,$dob){
        $match=['Name'=>$name,'Surname'=>$surname,'Date_of_Birth'=>$dob];
        $customer = Customer::where($match)->get();
        return $customer;
    }
}
