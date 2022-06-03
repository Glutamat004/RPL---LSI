<?php

namespace App\Http\Controllers;

use App\Models\Seat;
use App\Models\Category;
use App\Models\Timeslot;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Requests\StoreReservationRequest;
use App\Http\Requests\UpdateReservationRequest;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reservation', [
            'reservations' => Reservation::where('user_id',auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah-reservasi', [
            'categories' => Category::all(),
            'seats' => Seat::all(),
            'timeslots' => Timeslot::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReservationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReservationRequest $request)
    {
        $validatedData = $request->validate([
            'category_id' => 'required',
            'seat_id' => 'required',
            'timeslot_id' => 'required',
            'slug' => 'unique:reservations',
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        Reservation::create($validatedData);
        return redirect('/reservation');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        return view('edit_reservation',[
            'reservation'=>$reservation,
            'categories' => Category::all(),
            'seats' => Seat::all(),
            'timeslots' => Timeslot::all()

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReservationRequest  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReservationRequest $request, Reservation $reservation)
    {
        $rules = ([
            'category_id' => 'required',
            'seat_id' => 'required',
            'timeslot_id' => 'required',
        ]);
        if($request->slug != $reservation->slug){
            $rules['slug'] = 'unique:reservations';
        }

        $validatedData = $request->validate($rules);
        $validatedData['user_id'] = auth()->user()->id;
        Reservation::where('id',$reservation->id)
            ->update($validatedData);
        return redirect('/reservation')->with('success','New Reservation has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        Reservation::destroy($reservation->id);
        return redirect('/reservation')->with('success','Reservation has been deleted!');
    }
    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Reservation::class,'slug',$request->title,['unique'=>false]);
        return response()->json(['slug' =>$slug]);
    }
    public function getseats($id){
        $seats = DB::table("seats")->where("category_id",$id)->pluck("name","id");
        return json_encode($seats);
    }
}
