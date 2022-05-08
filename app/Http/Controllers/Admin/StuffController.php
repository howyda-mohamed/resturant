<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stuff;
use App\Models\Menu;
use Illuminate\Support\Facades\File;

class StuffController extends Controller
{
    public function index()
    {
        $stuffs=Stuff::all();
        return view('dashboard.stuff.index',compact('stuffs'));
    }
    public function add()
    {
        return view('dashboard.stuff.add');
    }
    public function insert(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string','min:10','max:225'],
            'description' => 'required',
            'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $stuff=new Stuff();
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $file_name=time().'.'.$ext;
            $file->move('assets/uploads/stuff',$file_name);
            $stuff->image=$file_name;
        }
        $stuff->name=$request->input('name');
        $stuff->description=$request->input('description');
        $stuff->save();
        return redirect('/admin/stuff')->with('msg','Date Inserted Successfully');
    }
    public function edit($id)
    {
        $stuff=Stuff::find($id);
        return view('dashboard.stuff.update',compact('stuff'));
    }
    public function update(Request $request ,$id)
    {
        $stuff=Stuff::find($id);
        if($request->hasFile('image'))
        {
            $path='assets/uploads/stuff'.$stuff->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $file_name=time().'.'.$ext;
            $file->move('assets/uploads/stuff',$file_name);
            $stuff->image=$file_name;
        }
        $stuff->name=$request->input('name');
        $stuff->description=$request->input('description');
        $stuff->update();
        return redirect('/admin/stuff')->with('msg',"Data updated sucessfully");
    }
    public function delete($id)
    {
        $stuff=stuff::find($id);
        $stuff->delete();
        return redirect('/admin/stuff')->with('status','Date deleted Successfully');
    }
}
