<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Datatables\CollectionsDatatable;
use DB;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CollectionsDataTable $dataTable)
    {
        return $dataTable->render('koleksi.daftarKoleksi');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('koleksi.registrasi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate the request data
        $request->validate(
            [
                'namaKoleksi' => ['required', 'string', 'max:100'],
                'jenisKoleksi' => ['required', 'integer', 'max:4'],
                'jumlahKoleksi' => ['required', 'integer'],
                'namaPengarang' => ['required', 'string'],
                'tahunTerbit' => ['required', 'integer']
            ],
            [
                'nama.unique' => "Nama koleksi tersebut sudah ada!"
            ]
        );
        $collection = [
            'namaKoleksi' => $request->namaKoleksi,
            'jenisKoleksi' => $request->jenisKoleksi,
            'jumlahKoleksi' => $request->jumlahKoleksi,
            'namaPengarang' => $request->namaPengarang,
            'tahunTerbit' => $request->tahunTerbit
        ];

        DB::table('collections')->insert($collection);
        return redirect()->route('koleksi');
    }

    /**
     * Display the specified resource.
     */
    public function show(Collection $collection)
    {
        return view('koleksi.infoKoleksi', ['collection' => $collection]);
    }

    // Update data
    public function update(Request $request)
    {
        // Validate the request data
        $request->validate([
            'namaKoleksi' => ['required', 'string', 'max:100'],
            'jenisKoleksi' => ['required', 'integer', 'max:4'],
            'jumlahKoleksi' => ['required', 'integer'],
            'namaPengarang' => ['required', 'string'],
            'tahunTerbit' => ['required', 'integer']
        ]);

        DB::table('collections')
            ->where('id', $request->id)
            ->update([
                'namaKoleksi' => $request->namaKoleksi,
                'jenisKoleksi' => $request->jenisKoleksi,
                'jumlahKoleksi' => $request->jumlahKoleksi,
                'namaPengarang' => $request->namaPengarang,
                'tahunTerbit' => $request->tahunTerbit,
            ]);
        return redirect()->route('koleksi');
    }
}
