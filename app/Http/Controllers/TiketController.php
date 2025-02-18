<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use App\Models\Tiket;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {{
        $ar_tiket = DB::table('tiket')
        ->select(
            'tiket.*',
            'tiket.name AS nama',
            'tiket.event AS event',
            'tiket.event_date AS event_date',
            'tiket.quantity AS quantity',
            'tiket.price AS price')
        ->get();
        //arahkan data ke view tiket 
        return view('tiket.index',compact('ar_tiket'));
    }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tiket.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|max:255',
            'event' => 'required|max:255',
            'event_date' => 'required|max:255',
            'quantity' => 'required|max:255',
            'price' => 'required|max:25',
        ]);

        // Insert the data into the database
        DB::table('tiket')->insert([
            'name' => $request->name,
            'event' => $request->event,
            'event_date' => $request->event_date,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('tiket.index')->with('success', 'tiket created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tiket = DB::table('tiket')->where('id', $id)->first();
        return view('tiket.show', compact('tiket'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tiket = DB::table('tiket')->where('id', $id)->first();
        return view('tiket.edit', compact('tiket'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|max:255',
            'event' => 'required|max:255',
            'event_date' => 'required|max:255',
            'quantity' => 'required|max:255',
            'price' => 'required|max:25',
        ]);

        // Update the data in the database
        DB::table('tiket')->where('id', $id)->update([
            'name' => $request->name,
            'event' => $request->event,
            'event_date' => $request->event_date,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'updated_at' => now(),
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('tiket.index')->with('success', 'tiket updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Delete the data from the database
        DB::table('tiket')->where('id', $id)->delete();

        // Redirect to the index page with a success message
        return redirect()->route('tiket.index')->with('success', 'Daftar tiket Bioskop deleted successfully.');
    }
    public function tiketPDF()
    {
        $ar_tiket = DB::table('tiket')
            ->select(
                'tiket.*',
                'tiket.name AS nama',
                'tiket.event AS event',
                'tiket.event_date AS event_date',
                'tiket.quantity AS quantity',
                'tiket.price AS price')
            ->get();
        $pdf = PDF::loadView('tiket.tiketPDF', ['ar_tiket' => $ar_tiket]); 
        return $pdf->download('dataTiket.pdf');
    }   
}