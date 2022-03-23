<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class PostModel extends Model
{
    
    protected $table = 'baiviet';
    public function getAllPosts()
    {
        return DB::table('baiviet')
       ->leftJoin('danhmucbaiviet', 'baiviet.madm', '=', 'danhmucbaiviet.madm')
       ->get();
          
       
    }

    public function countPost($id)
    {
        $post= DB::table('baiviet')
       
       ->where('madm', '=', $id)
       ->get();
          
       return $post;
    }

    public function getAllPostsCatalog()
    {
        $PostsCatalog = DB::select('SELECT * FROM danhmucbaiviet');
          
        return $PostsCatalog;
    }

    public function addPost($data)
    {
        DB::insert('INSERT INTO '.$this->table.' ( tieude, madm, noidung, hinh)
        values ( ?, ?, ?, ?)', $data);
    }

    public function getDetail($id)
    {
       return DB::table('baiviet')
       ->leftJoin('danhmucbaiviet', 'baiviet.madm', '=', 'danhmucbaiviet.madm')
       ->where('mabv', '=', $id)
       ->get();
        
    }

    public function updatePost($data, $id)
    {   
        $data[] = $id; 

        return DB::update('UPDATE '.$this->table.' SET tieude=?, madm=?, noidung=?, hinh=? where mabv = ? ', $data);
    }

    public function deletePost($id)
    {
        return DB::delete('DELETE FROM '.$this->table.' where mabv = ? ', [$id]);
    }

    public function searchPost($string)
    {
        
        return DB::table('baiviet')
        ->leftJoin('danhmucbaiviet', 'baiviet.madm', '=', 'danhmucbaiviet.madm')
        ->where('tieude','LIKE','%'.$string.'%')
        ->get();
    }

    
}
