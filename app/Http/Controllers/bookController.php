<?php

namespace App\Http\Controllers;

use App\Customer;
use DB;
use App\Booking;
use App\Equipment;
use App\EquipmentCustomer;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Sodium\randombytes_uniform;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $params = [
            'title' => 'E-BEST SYSTEM',
            'sub_title' => 'All Products Listing',
            'products' => Equipment::all(),
        ];

        return view('booking.view')->with($params);
    }

    public function addCart(Request $request){
        $product = Equipment::find($request->id);

        \Cart::add($product->equip_id, $product->equipName, $product->equipPrice, $request->quantity, array());

        return back()->with('success', $product->equipName. ' has successfully beed added to the booking list!');
    }

    public function cart(){
        $params = [
            'title' => 'Shopping Cart Checkout',
        ];

        return view('booking.cart')->with($params);
    }

    public function clear(){
        \Cart::clear();

        return back()->with('success',"The list equipment has successfully clear from the booking list!");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function detail()
    {

        return view('booking.staffView')->with('books', Booking::paginate(5));
    }

    public function detailView($id)
    {
        $booking = Booking::where('book_id', $id)->first();

        $equipment_customers = EquipmentCustomer::where('book_id', $booking->book_id)->get();

        return view('booking.staffDetailView', compact('booking', 'equipment_customers'));

    }

    public function show($id)
    {

        $booking = Booking::where('book_id', $id)->first();

        $equipment_customers = EquipmentCustomer::where('book_id', $booking->book_id)->get();

        return view('booking.invoice', compact('booking', 'equipment_customers'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $booking = DB::table('customer')
            ->join('booking', function ($join) use ($id) {
                $join->on('customer.cust_id', '=', 'booking.cust_id')
                    ->where('booking.cust_id', $id);

            })
            ->get();

        return view('booking.viewBooking', compact('booking'));
    }

    public function updateBooking($id)
    {
        $bookings = Booking::where('book_id', $id)->first();

        return view('booking.update', compact('bookings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Booking::where('book_id', $id)->first();

        if ($book){

            $input = $request->validate([
                'venue' => 'required',
                'eventDate' => 'required',
                'organizerPno' => 'required|numeric'
            ]);

            $book->update([
                'venue' => $input['venue'],
                'eventDate' => $input['eventDate'],
                'organizerPno' => $input['organizerPno']
            ]);

            return redirect('/update/booking/'. $id)->with('success',"Your booking information has successfully update!");
            //return redirect('/update/equipment/'.$id);
            //Session::flash('update_profile','Update profile successfully');

        } else {

            //return redirect('/update/equipment/' . $id);
            return redirect('/update/booking/'. $id)->with('success',"Your booking information has successfully update!");

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function testCheckout(Request $request)
    {

        // stored data booking
        // id
        $input = $request->validate([
            'venue' => 'required',
            'eventDate' => 'required',
            'organizerPno' => 'required|numeric',
        ]);

        $equipment = Booking::create([

            'venue' => $input['venue'],
            'eventDate' => $input['eventDate'],
            'organizerPno' => $input['organizerPno'],
            'totalPrice' => \Cart::getSubTotal(),
            'cust_id' => Auth::guard('customer')->user()->cust_id,
        ]);

        foreach (\Cart::getContent() as $items){
            //dump($items->name);
            // booking_id = id

            EquipmentCustomer::create([
                'quantity' => $items->quantity,
                'book_id' => $equipment->book_id,
                'equip_id' => $items->id,
            ]);
        }
        return redirect()->route('book.invoice', ['id' => $equipment->book_id]);

    }

    public function editDate(Request $request, $id)
    {
        $bookings = Booking::where('book_id', $id)->first();

        return view('booking.updateDate', compact('bookings'));

    }

    public function updateDate(Request $request, $id)
    {
        $book = Booking::where('book_id', $id)->first();

        if ($book){

            $input = $request->validate([
                'deliveryDate' => 'required',
                'collectDate' => 'required'
            ]);

            $book->update([
                'deliveryDate' => $input['deliveryDate'],
                'collectDate' => $input['collectDate']
            ]);

            return redirect('/staffDetailView/booking/'. $id);
            //return redirect('/update/equipment/'.$id);
            //Session::flash('update_profile','Update profile successfully');

        } else {

            //return redirect('/update/equipment/' . $id);
            return redirect('/staffDetailView/booking/'. $id);

        }
    }

    public function detailBooking($id)
    {

        $booking = Booking::where('book_id', $id)->first();

        $equipment_customers = EquipmentCustomer::where('book_id', $booking->book_id)->get();

        return view('booking.detail', compact('booking', 'equipment_customers'));

    }

}
