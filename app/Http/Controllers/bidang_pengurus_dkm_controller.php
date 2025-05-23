<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//import validator
use Illuminate\Support\Facades\Validator;

//import Model "bidang_pengurus_dkm_model" dari folder models
use App\Models\bidang_pengurus_dkm_model;

//return type View
use Illuminate\View\View;

//import method export PDF
use PDF;

//import class Session
use Illuminate\Support\Facades\Session;

class bidang_pengurus_dkm_controller extends Controller
{
    public function bidang_pengurus_dkm_index(Request $request)
    {
        /*
        $bidang_pengurus_dkm_data pernyataan variabel
        bidang_pengurus_dkm_model diambil dari folder model
        latest()->paginate(5); membatasi 5 data baru yang tampil
        */
        $bidang_pengurus_dkm_data = bidang_pengurus_dkm_model::orderBy('Nama_Bidang_Pengurus_DKM', 'asc')
            ->paginate(5);

        //syntax search data
        $searchQuery = $request->input('search');

        if ($request->has('search')) {
            $bidang_pengurus_dkm_data = bidang_pengurus_dkm_model::where(function ($query) use ($searchQuery) {
                $query->where('Nama_Bidang_Pengurus_DKM', 'LIKE', '%' . $searchQuery . '%')
                    ->orWhere('Kode_Bidang_Pengurus_DKM', 'LIKE', '%' . $searchQuery . '%');
            })->paginate(5);
            Session::put('page_url', request()->fullUrl());
        } else {
            $bidang_pengurus_dkm_data = bidang_pengurus_dkm_model::orderBy('Nama_Bidang_Pengurus_DKM', 'asc')->paginate(5);
            Session::put('page_url', request()->fullUrl());
        }

        return view('bidang_pengurus_dkm_data', [
            'bidang_pengurus_dkm_data' => $bidang_pengurus_dkm_data,
            'searchQuery' => $searchQuery,
        ]);

        /*
        view 'bidang_pengurus_dkm_data' diambil dari bidang_pengurus_dkm_data.blade.php, compact 'bidang_pengurus_dkm_data', diambil dari variabel $bidang_pengurus_dkm_data
        */
        return view('bidang_pengurus_dkm_data', compact('bidang_pengurus_dkm_data'));

    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function bidang_pengurus_dkm_create()
    {

        return view('bidang_pengurus_dkm_create');

    }


    public function bidang_pengurus_dkm_insert(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'Nama_Bidang_Pengurus_DKM' => 'required',
            'Status_Bidang_Pengurus_DKM' => 'required',
        ]);

        if ($validator->passes()) {

            //dd($request->all());

            // Create a new instance of bidang_pengurus
            $bidang_pengurus_dkm_data = new bidang_pengurus_dkm_model();
            //pengisian model table dengan pengecualian 'updated_by'
            $bidang_pengurus_dkm_data->fill($request->except('updated_by'));

            // mengatur updated email utk menghindari isi otomatis di fungsi insert
            $bidang_pengurus_dkm_data->updated_by = null;


            $bidang_pengurus_dkm_data = bidang_pengurus_dkm_model::create($request->all());

            $bidang_pengurus_dkm_data->save();

            return redirect()->route('bidang_pengurus_dkm_index')->with('success', 'Data Berhasil Dimasukan');

        } else {

            // Validation failed, redirect back with errors
            return redirect()->back()->withErrors($validator)->withInput();

        }


    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function bidang_pengurus_dkm_edit($id_bidang_pengurus_dkm)
    {

        $bidang_pengurus_dkm_data = bidang_pengurus_dkm_model::find($id_bidang_pengurus_dkm);

        return view('bidang_pengurus_dkm_edit', compact('bidang_pengurus_dkm_data'));
    }


    public function bidang_pengurus_dkm_update(Request $request, $id_bidang_pengurus_dkm)
    {

        $bidang_pengurus_dkm_data = bidang_pengurus_dkm_model::findOrFail($id_bidang_pengurus_dkm); // Assuming you have the ID of the row you want to update

        $bidang_pengurus_dkm_data->update($request->all());

        $bidang_pengurus_dkm_data->save();

        if (session('page_url')) {
            return redirect(session('page_url'))->with('success_edit', 'Data Berhasil Diubah');
        }

        return redirect()->route('bidang_pengurus_dkm_index')->with('success_edit', 'Data Berhasil Diubah');


    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function bidang_pengurus_dkm_export_pdf()
    {
        $bidang_pengurus_dkm_data = bidang_pengurus_dkm_model::orderBy('Nama_Bidang_Pengurus_DKM', 'asc')->get();

        view()->share('bidang_pengurus_dkm_data', $bidang_pengurus_dkm_data);
        $bidang_pengurus_dkm_pdf = PDF::loadview('bidang_pengurus_dkm_export-pdf');
        return $bidang_pengurus_dkm_pdf->download('data_bidang_pengurus_dkm.pdf');


    }
}
