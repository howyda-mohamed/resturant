<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Menu;
use App\Models\Reserv;
use App\Models\Stuff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $abouts=About::all();
        $mains=Menu::all()->where('status','0');
        $specials=Menu::all()->where('status','1');
        $stuffs=Stuff::all();
        return view('site.index',compact('abouts','mains','specials','stuffs'));
    }
    public function redirects()
    {
        $role=Auth::user()->role_id;
        if($role == '1')
        {
            return view('dashboard.index');
        }
        elseif($role == '0')
        {
            $abouts=About::all();
            $mains=Menu::all()->where('status','0');
            $specials=Menu::all()->where('status','1');
            $stuffs=Stuff::all();
            return view('site.index',compact('abouts','mains','specials','stuffs'));
        }

    }
    public function add_reserv(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string','min:5','max:225'],
            'phone' => 'required',
            'date' =>'required',
            'seats' =>'required|numeric',
        ]);
        $name=$_POST['name'];
        if($name == Auth::user()->name)
        {
            $reserv=new Reserv();
            $reserv->name=$request->input('name');
            $reserv->phone=$request->input('phone');
            $reserv->date=$request->input('date');
            $reserv->seats=$request->input('seats');
            $reserv->user_id=Auth::user()->id;
            $reserv->save();
            return redirect('/#testmonial')->with('msg','your Reservation Done Successfully');
        }
        else
        {
            return redirect('/#testmonial')->with('status','Invalid Reservation Please Log In');
        }

    }
}
