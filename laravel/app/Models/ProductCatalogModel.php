<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class ProductCatalogModel extends Model
{
    
    protected $table = 'danhmucsanpham';
    public function getAllProductCatalog()
    {
        return DB::table('danhmucsanpham')
       ->get();
          
      
    }


    public function addProductCatalog($data)
    {
        DB::insert('INSERT INTO '.$this->table.' ( tendm)
        values ( ?)', $data);
    }

    public function getDetail($id)
    {
       return DB::table('danhmucsanpham')
       ->where('madm', '=', $id)
       ->get();
        
    }

    public function updateProductCatalog($data, $id)
    {   
        $data[] = $id; 

        return DB::update('UPDATE '.$this->table.' SET tendm=? where madm = ? ', $data);
    }

    public function deleteProductCatalog($id)
    {
        return DB::delete('DELETE FROM '.$this->table.' where madm = ? ', [$id]);
    }

    public function searchProductCatalog($string)
    {
        
        return DB::table('danhmucsanpham')
        ->where('madm','LIKE','%'.$string.'%')
        ->orwhere('tendm','LIKE','%'.$string.'%')
        ->get();
    }
    
    
}
