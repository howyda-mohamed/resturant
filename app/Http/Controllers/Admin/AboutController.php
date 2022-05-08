<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Expr\New_;

class AboutController extends Controller
{
    public function index()
    {
        $abouts=About::all();
        return view('dashboard.about.index',compact('abouts'));
    }
    public function add()
    {
        return view('dashboard.about.add');
    }
    public function insert(Request $request)
    {
        $request->validate([
            'day' => ['required', 'string','max:225'],
            'from_time' => 'required',
            'to_time' => 'required'
        ]);
        $about=new About();
        $about->day=$request->input('day');
        $about->from_time=$request->input('from_time');
        $about->to_time=$request->input('to_time');
        $about->save();
        return redirect('/admin/about')->with('msg','Date Inserted Successfully');
    }
    public function edit($id)
    {
        $about=About::find($id);
        return view('dashboard.about.update',compact('about'));
    }
    public function update(Request $request ,$id)
    {
        $about=About::find($id);
        $about->day=$request->input('day');
        $about->from_time=$request->input('from_time');
        $about->to_time=$request->input('to_time');
        $about->update();
        return redirect('/admin/about')->with('msg',"Data updated sucessfully");
    }
    public function delete($id)
    {
        $about=About::find($id);
        $about->delete();
        return redirect('/admin/about')->with('status','Date deleted Successfully');
    }
}
