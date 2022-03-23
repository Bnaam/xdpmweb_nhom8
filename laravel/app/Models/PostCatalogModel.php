<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class PostCatalogModel extends Model
{
    
    protected $table = 'danhmucbaiviet';
    public function getAllPostCatalog()
    {
        return DB::table('danhmucbaiviet')
       ->get();
          
      
    }


    public function addPostCatalog($data)
    {
        DB::insert('INSERT INTO '.$this->table.' ( tendm)
        values ( ?)', $data);
    }

    public function getDetail($id)
    {
       return DB::table('danhmucbaiviet')
       ->where('madm', '=', $id)
       ->get();
        
    }

    public function updatePostCatalog($data, $id)
    {   
        $data[] = $id; 

        return DB::update('UPDATE '.$this->table.' SET tendm=? where madm = ? ', $data);
    }

    public function deletePostCatalog($id)
    {
        return DB::delete('DELETE FROM '.$this->table.' where madm = ? ', [$id]);
    }

    public function searchPostCatalog($string)
    {
        
        return DB::table('danhmucbaiviet')
        ->where('madm','LIKE','%'.$string.'%')
        ->get();
    }

    
}
