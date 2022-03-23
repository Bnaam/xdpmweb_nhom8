<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use Illuminate\Support\Facades\DB;

class OrderModel extends Model
{
    
    protected $table = 'donhang';
    public function getAllOrder()
    {
        $Order =  DB::table('donhang')
      
        ->get(); 
       
     
        return $Order;
    }

    public function getAllOrderDetail($id)
    {
        return DB::table('chitietdonhang')
        ->where('madh', '=', $id)
        ->get();
    }



    public function getDetail($id)
    {
       return DB::table('donhang')
       ->where('madh', '=', $id)
       ->get();
        
    }

    public function updateOrder($data, $id)
    {   
        $data[] = $id; 

        return DB::update('UPDATE '.$this->table.' SET  ngaygiaohang = ?, tinhtrang = ? where madh = ? ', $data);
    }

    public function deleteOrder($id)
    {
        return DB::delete('DELETE FROM '.$this->table.' where masp = ? ', [$id]);
    }

    public function searchOrder($string)
    {
        
        return DB::table('donhang')
        ->where('madh','LIKE','%'.$string.'%')
        ->get();
    }
    
    
}
