<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Hotel;
use App\Room;
use Illuminate\Http\Request;

class BookingController extends Controller
{

     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $booking = Booking::create($request->all());
        $hotel_id = $request->input('hotel_id');
        $room_id = $request->input('room_id');
        Room::where('hotel_id',$hotel_id)->where('id',$room_id)->update(['is_available' => 0]);
        return response()->json($booking, 201);
    }


     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }


     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }


     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
