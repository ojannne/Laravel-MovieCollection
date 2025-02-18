<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use App\Models\Lokasi;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {{
        $ar_lokasi = DB::table('lokasi')
        ->select(
            'lokasi.*',
            'lokasi.name AS nama',
            'lokasi.address AS address',
            'lokasi.city AS city',
            'lokasi.state AS state',
            'lokasi.link_maps AS link_maps',
            'lokasi.zip_code AS zip_code')
        ->get();
        //arahkan data ke view lokasi 
        return view('lokasi.index',compact('ar_lokasi'));
    }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lokasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'city' => 'required|max:255',
            'state' => 'required|max:255',
            'zip_code' => 'required|max:10',
        ]);

        // Insert the data into the database
        DB::table('lokasi')->insert([
            'name' => $request->name,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'link_maps' => $request->link_maps,
            'zip_code' => $request->zip_code,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('lokasi.index')->with('success', 'Lokasi created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $lokasi = DB::table('lokasi')->where('id', $id)->first();
        return view('lokasi.edit', compact('lokasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'city' => 'required|max:255',
            'state' => 'required|max:255',
            'zip_code' => 'required|max:10',
        ]);

        // Update the data in the database
        DB::table('lokasi')->where('id', $id)->update([
            'name' => $request->name,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'zip_code' => $request->zip_code,
            'updated_at' => now(),
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('locations.index')->with('success', 'Location updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Delete the data from the database
        DB::table('lokasi')->where('id', $id)->delete();

        // Redirect to the index page with a success message
        return redirect()->route('lokasi.index')->with('success', 'Daftar Lokasi Bioskop deleted successfully.');
    }
    public function lokasiPDF()
    {
        $ar_lokasi = DB::table('lokasi')
            ->select(
                'lokasi.*',
                'lokasi.name AS nama',
                'lokasi.address AS address',
                'lokasi.city AS city',
                'lokasi.state AS state',
                'lokasi.link_maps AS link_maps',
                'lokasi.zip_code AS zip_code')
            ->get();
        $pdf = PDF::loadView('lokasi.lokasiPDF', ['ar_lokasi' => $ar_lokasi]); 
        return $pdf->download('dataLokasiBioskop.pdf');
    }
}