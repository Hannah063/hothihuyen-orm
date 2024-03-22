<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\select;

class Users extends Model
{
    use HasFactory;

    protected $table = 'users';

    public function getAllUsers(){
        $users = DB::select('SELECT * FROM users ORDER BY create_at DESC');
        return $users;
    }

    public function addUser($data){
        DB::insert('INSERT INTO users (fullname, email, create_at) VALUES (?, ?, ?)', $data);
    }

    public function getDetail($id){
        return DB::select('SELECT * FROM '.$this->table.' WHERE id = ?', [$id]);
    }

    public function updateUser($data, $id){
        $data[] = $id;
        return DB::update('UPDATE '.$this->table.' SET fullname =?, email=?, update_at=? WHERE id = ?', $data);
    }

    public function deleteUser($id){
        return DB::delete("DELETE FROM $this->table WHERE id=?", [$id]);
    }

    public function statementUser($sql){
        return DB::statement($sql);
    }

    public function learnQueryBuilder(){
        //get all record
        // $lists = DB::table($this->table)->get();

        //get first record
        $detail = DB::table($this->table)->first();

        //get thong tin nhat dinh, neu muon get all thi select *
        // $lists = DB::table($this->table)->select('email', 'fullname as hoten')->get();

        //get theo dieu kien, có thể có nhiều điều kiện
        $lists = DB::table($this->table)
        ->select('email', 'fullname as hoten')
        // =
        // ->where('id', 9)

        //> < <>
        // ->where('id','>', 9)

        //and
        // ->where([
        //     [
        //         'id', '>', 2
        //     ],
        //     [
        //         'id', '<', 4
        //     ]
        // ])

        //or
        ->where('id','>', 9)
        ->orWhere('id', 9)

        ->get();

        //all infomation
        dd($lists);

        //detail infomation
        // dd($detail->email);
    }
}
