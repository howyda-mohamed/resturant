<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reserv;

class ReservationController extends Controller
{
    public function index()
    {
        $reservs=Reserv::all();
        return view('dashboard.reserv.index',compact('reservs'));
    }
    public function delete($id)
    {
        $reserv=Reserv::find($id);
        $reserv->delete();
        return redirect('/admin/reserv')->with('status','Date deleted Successfully');
    }
}
