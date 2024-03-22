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
        // DB::enableQueryLog();

        // $id = 9;

        //get all record
        // $lists = DB::table($this->table)->get();

        //get thong tin nhat dinh, neu muon get all thi select *
        // $lists = DB::table($this->table)->select('email', 'fullname as hoten')->get();

        //get first record
        // $detail = DB::table($this->table)->first();

        //get theo dieu kien, có thể có nhiều điều kiện
        // $lists = DB::table($this->table)
        // ->select('*')
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

        //kết hợp điều kiện and or
        // ->where('id','>', 9)
        // ->orWhere('id', 9)
        // ->where('id', 10)
        // ->where(function ($query) use ($id) {
        //     $query->where('id','>', $id)->orWhere('id', $id);
        // })

        // ->where('fullname', 'like', 'Hồ Thị Hoa')

        //truy vấn trong khoảng
        // ->whereBetween('id', [9, 10])

        //truy vấn ngoài khoảng
        // ->whereNotBetween('id', [9, 10])

        //truy vấn toán tử IN
        // ->whereIn('id', [9, 10])
        // ->whereNotIn('id', [9, 10])

        //NULL
        // ->whereNull('update_at')
        // ->whereNotNull('update_at')

        //truy vấn Date
        // ->whereDate('update_at', '2024-03-21')

        //month
        // ->whereMonth('create_at', '03')

        //day
        // ->whereDay('create_at', '08')

        //year
        // ->whereYear('create_at', '2024')

        //TRUY VẤN GIÁ TRỊ CỘT
            //2 cột bằng nhau
        //->whereColumn('create_at', 'update_at')
            //toán tử so sánh
        // ->whereColumn('create_at','>','update_at')
            //kết hợp điều kiện and
        // ->whereColumn([
        //     ['create_at','>','update_at'],
        //     ['name','=','fullname']
        // ])

        $lists = DB::table('users')
        // ->select('users.*', 'groups.name as group_name')

        //NỐI BẢNG JOIN
            //INNER JOIN
            // ->join('groups', 'users.group_id', '=', 'groups.id')
            //LEFT JOIN
            // ->leftJoin('groups', 'users.group_id', '=', 'groups.id')
            //RIGHT JOIN
            // ->rightJoin('groups', 'users.group_id', '=', 'groups.id')

        //Sắp xếp orderBy
            //sắp xếp 1 cột
            // ->orderBy('id', 'desc')
            //sắp xếp nhiều cột
            // ->orderBy('id', 'desc')
            // ->orderBy('create_at', 'asc')
            //sắp xếp ngẫu nhiên
            // ->inRandomOrder()

        //Truy vấn theo nhóm groupBy having
        // ->select(DB::raw('count(id) as email_count'), 'email', 'fullname')
        // ->groupBy('email')
        // ->groupBy('fullname')
        // ->having('email_count', '>=', 2)

        //Giới hạn limit offset
            //offset loại bỏ đi một số bản ghi mà không muốn hiển thị
            // ->limit(2)
            // ->offset(1)//bỏ qua n bản ghi đầu
            //skip take, giống nhau
            ->skip(2)
            ->take(2)
        ->get();
        //debug
        // ->toSql();

        // dd(DB::getQueryLog());

        //all infomation
        dd($lists);

        //detail infomation
        // dd($detail->email);
    }
}
