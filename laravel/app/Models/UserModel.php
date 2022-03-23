<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class UserModel extends Model
{
    
    protected $table = 'user';
    public function getAllUsers()
    {
        //$users = DB::select('SELECT * FROM '.$this->table.'');

        $users = DB::table($this->table)->get();
       
        
     
        return $users;
    }

    public function addUser($data)
    {
        DB::insert('INSERT INTO '.$this->table.' (tenkh, email, password, sdt, diachi, role, gioitinh)
        values (?, ?, ?, ?, ?, ?, ?)', $data);
    }

    public function getDetail($id)
    {
       return DB::select('SELECT * FROM '.$this->table.' WHERE makh = ?', [$id]);
        
    }

    public function getUserByEmail($email)
    {
       return DB::select('SELECT * FROM '.$this->table.' WHERE email = ?', [$email]);
        
    }

    public function updateUser($data, $id)
    {   
        $data[] = $id; 

        return DB::update('UPDATE '.$this->table.' SET tenkh=?, email=?, password=?, sdt=?, diachi=?, role=?, trangthai=?, gioitinh=? where makh = ? ', $data);
    }

    public function deleteUser($id)
    {
        return DB::delete('DELETE FROM '.$this->table.' where makh = ? ', [$id]);
    }

    public function searchUser($string)
    {
        
        return DB::table('user')->where('tenkh','LIKE','%'.$string.'%')
                                ->orWhere('email', 'like', '%'.$string.'%')
                                ->get();
    }
}
