<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use App\Models\Film;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { {
        $ar_film = DB::table('film')
        ->select(
            'film.*',
            'film.nama AS nama',
            'film.sutradara AS sutradara',
            'film.genre AS genre',
            'film.release_date AS release_date',
            'film.rating AS rating',
            'film.foto AS foto')        
        ->get();
        //arahkan data ke view film 
        return view('film.index',compact('ar_film'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('film.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!empty($request->foto)) {
            $request->validate([
                'foto' => 'image|mimes:jpg,jpeg,png,giff|max:10048',
            ]);
            $fileName = $request->nama . '.' . $request->foto->extension();
            $request->foto
                ->move(public_path('images'), $fileName);
        } else {
            $fileName = '';
        }
        //1. proses validasi data
        $validasi = $request->validate(
            [
                'nama' => 'required|max:50',
                'genre' => 'required|max:50',
                'rating' => 'required',
            ],
            //2. menampilkan pesan kesalahan
            [            
                'nama.required' => 'Nama Wajib di Isi',
                'genre.required' => 'Genre Wajib di Isi',
                'genre.regex' => 'Harus berformat huruf',
                'rating.required' => 'Berikan Rating ',
            ],
        );
        //2. processing form
        DB::table('film')->insert(
            [
                'nama' => $request->nama,
                'sutradara' => $request->sutradara,
                'genre' => $request->genre,
                'release_date' => $request->release_date,
                'rating' => $request->rating,
                'foto' => $fileName,
            ]
        );
        //4.setelah input arahkan ke /film
        return redirect()->route('film.index')->with('success', 'Data film berhasil ditambahkan');
    }


    

    /**
     * Display the specified resource.
     */
  public function show($id)
{
    $film = DB::table('film')
        ->select(
            'film.*',
            'film.nama AS nama',
            'film.sutradara AS sutradara',
            'film.genre AS genre',
            'film.release_date AS release_date',
            'film.rating AS rating',
            'film.foto AS foto')
        ->where('id', $id)
        ->first();
    return view('film.show', compact('film'));
}
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $film = DB::table('film')
            ->where('id', '=', $id)
            ->first();
        return view('film.edit', compact('film'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = [
            'nama' => $request->nama,
            'sutradara' => $request->sutradara,
            'genre' => $request->genre,
            'release_date' => $request->release_date,
            'rating' => $request->rating,
            'updated_at' => now(),
        ];

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $data['foto'] = $filename;
        }

        DB::table('film')->where('id', $id)->update($data);
        return redirect()->route('film.index')->with('success', 'Film updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //menghapus data
        DB::table('film')->where('id', $id)->delete();
        return redirect()->route('film.index')->with('success', 'Film deleted successfully');
}
public function filmPDF()
    {
        $ar_film = DB::table('film')
            ->select(
                'film.*',
                'film.nama AS nama',
                'film.sutradara AS sutradara',
                'film.genre AS genre',
                'film.release_date AS release_date',
                'film.rating AS rating',
                'film.foto AS foto')        
            ->get();
        $pdf = PDF::loadView('film.filmPDF', ['ar_film' => $ar_film]); 
        return $pdf->download('dataFilm.pdf');
    }
}