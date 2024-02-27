<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct()
    {
    }

    public function index(Request $request)
    {
        $ip = $request->ip();
        /*
        if(isset($_GET['id'])){
            echo $_GET['id'];
        }
        $allData= $request->all();
        echo $allData['id'];
        dd($allData);
                
      //  $path = $request->all();
        $path = $request->fulUrl();
        $url = $request->fullUrl();
        echo $path;
        
        $url = $request->method();
        $url = $request->fullUrl();
        $url = $request->input('id.*.id');

        $id = $request->id;
        $name = $request->name;
        //echo $url;
        dd($id);
        $name = request('name', 'Laravel');
        dd($name);
            // dd(request()->id);
        */

        $query = $request->query();
        dd($query);
        return  view('clients/categories/list');
    }

    public function getCategory($id)
    {
        return  view('clients/categories/edit');
    }

    public function updateCategory($id)
    {
        return "Submit sửa category " . $id;
    }

    public function addCategory(Request $request)
    {
        $category_name = $request->old('category_name', 'Mặc định');
        echo $category_name;
        return  view('clients/categories/add', compact('category_name'));
    }

    public function showCategory()
    {
    }


    public function handleAddcategory(Request $request)
    {
        /*
        $allData = $request->all();
        print_r($_POST);
        //return redirect(route('categories.add'));
        //return "submit thêm chuyên mục";
        */

        if ($request->has('category_name')) {
            $categoryName = $request->id;
            $request->flash();
            return  redirect(route('categories.add'));
        } else {
            return "Không có";
        }
    }

    public function deleteCategory($id)
    {
        return "submit xóa chuyên mục";
    }

    public function getFile()
    {
        return view('clients/categories/file');
    }

    public function handleFile(Request $request)
    {

        if ($request->hasFile('photo')) {
            if ($request->photo->isValid()) {
                $file = $request->photo;
                //$path = $file->path();
                $ext = $file->extension();
                //$path = $file->store('images');
                //$path = $file->storeAs('images', 'imag-url.txt') ;
                //$fileName = $file->getClientOriginalName();
                $fileName = md5(uniqid()) . '.' . $ext;
                dd($fileName);
            } else {
                return "Upload  không thành công";
            }
        } else {
            return "Vui lòng chọn file";
        }
    }
}
