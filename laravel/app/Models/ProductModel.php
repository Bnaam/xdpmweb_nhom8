<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use Illuminate\Support\Facades\DB;

class ProductModel extends Model
{
    
    protected $table = 'sanpham';
    public function getAllProducts()
    {
        $product =  DB::table('sanpham')
        ->leftJoin('danhmucsanpham', 'sanpham.madm', '=', 'danhmucsanpham.madm')
        ->get(); 
       
     
        return $product;
    }

    public function getProducts($id)
    {
        return DB::table('sanpham')
       ->where('madm', '=', $id)
       ->get();
    }

    public function getAllProductCatalog()
    {
        $PostsCatalog = DB::select('SELECT * FROM danhmucsanpham');
          
        return $PostsCatalog;
    }

    public function addProduct($data)
    {
        DB::insert('INSERT INTO '.$this->table.' ( tensp, giamoi, soluong, mausac, hinh, madm, mota)
        values ( ?, ?, ?, ?, ?, ?, ?)', $data);
    }

    public function getDetail($id)
    {
       return DB::table('sanpham')
       ->leftJoin('danhmucsanpham', 'sanpham.madm', '=', 'danhmucsanpham.madm')
       ->where('masp', '=', $id)
       ->get();
        
    }

    public function updateProduct($data, $id)
    {   
        $data[] = $id; 

        return DB::update('UPDATE '.$this->table.' SET tensp=?, giamoi=?, soluong=?, mausac=?, hinh=?, madm=?, mota=? where masp = ? ', $data);
    }

    public function deleteProduct($id)
    {
        return DB::delete('DELETE FROM '.$this->table.' where masp = ? ', [$id]);
    }

    public function searchProduct($string)
    {
        
        return DB::table('sanpham')
        ->leftJoin('danhmucsanpham', 'sanpham.madm', '=', 'danhmucsanpham.madm')
        ->where('tensp','LIKE','%'.$string.'%')
        ->Orwhere('tendm','LIKE','%'.$string.'%')
        ->get();
    }
    
    
}
