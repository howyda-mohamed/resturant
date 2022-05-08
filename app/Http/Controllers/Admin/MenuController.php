<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\About;
use Illuminate\Support\Facades\File;

class MenuController extends Controller
{
    public function index()
    {
        $menus=Menu::all();
        return view('dashboard.menu.index',compact('menus'));
    }
    public function add()
    {
        return view('dashboard.menu.add');
    }
    public function insert(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string','max:225'],
            'description' => 'required',
            'price'=> ['required','string'],
            'image' =>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $menu=new Menu();
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $file_name=time().'.'.$ext;
            $file->move('assets/uploads/menu',$file_name);
            $menu->image=$file_name;
        }
        $menu->title=$request->input('title');
        $menu->description=$request->input('description');
        $menu->price=$request->input('price');
        $menu->status=$request->input('status') == TRUE ?'1':'0';
        $menu->save();
        return redirect('/admin/menu')->with('msg','Date Inserted Successfully');
    }
    public function edit($id)
    {
        $menu=Menu::find($id);
        return view('dashboard.menu.update',compact('menu'));
    }
    public function update(Request $request ,$id)
    {
        $menu=Menu::find($id);
        if($request->hasFile('image'))
        {
            $path='assets/uploads/menu'.$menu->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $file_name=time().'.'.$ext;
            $file->move('assets/uploads/menu',$file_name);
            $menu->image=$file_name;
        }
        $menu->title=$request->input('title');
        $menu->description=$request->input('description');
        $menu->price=$request->input('price');
        $menu->status=$request->input('status') == TRUE ?'1':'0';
        $menu->update();
        return redirect('/admin/menu')->with('msg',"Data updated sucessfully");
    }
    public function delete($id)
    {
        $menu=Menu::find($id);
        $menu->delete();
        return redirect('/admin/menu')->with('status','Date deleted Successfully');
    }
}
