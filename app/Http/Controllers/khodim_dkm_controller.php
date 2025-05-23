<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//import validator
use Illuminate\Support\Facades\Validator;

//import Model "khodim_dkm_model" dari folder models
use App\Models\khodim_dkm_model;

//import Model "bidang_khodim_model" dari folder models
use App\Models\bidang_khodim_model;

//return type View
use Illuminate\View\View;

//import method export PDF
use PDF;

//import class Session
use Illuminate\Support\Facades\Session;

class khodim_dkm_controller extends Controller
{

    public function khodim_dkm_index(Request $request)
    {
        /*
        $khodim_dkm_data pernyataan variabel
        khodim_dkm_model diambil dari folder model
        latest()->paginate(5); membatasi 5 data baru yang tampil
        */
        $khodim_dkm_data = khodim_dkm_model::orderBy('Nama_Khodim', 'asc')
            ->paginate(5);


        // memanggil data gedung yang ada di table khodim_dkm
        $khodim_dkm_data = khodim_dkm_model::with('ambil_kode_bidang_khodim')->paginate(5);

        //syntax search data
        $searchQuery = $request->input('search');

        if ($request->has('search')) {
            $khodim_dkm_data = khodim_dkm_model::where(function ($query) use ($searchQuery) {
                $query->where('Nama_Khodim', 'LIKE', '%' . $searchQuery . '%')
                    ->orWhere('Kode_Khodim', 'LIKE', '%' . $searchQuery . '%');
            })->paginate(5);
            Session::put('page_url', request()->fullUrl());
        } else {
            $khodim_dkm_data = khodim_dkm_model::orderBy('Nama_Khodim', 'asc')->paginate(5);
            Session::put('page_url', request()->fullUrl());
        }

        return view('khodim_dkm_data', [
            'khodim_dkm_data' => $khodim_dkm_data,
            'searchQuery' => $searchQuery,
        ]);

        /*
        view 'khodim_dkm_data' diambil dari khodim_dkm_data.blade.php, compact 'khodim_dkm_data', diambil dari variabel $khodim_dkm_data
        */
        return view('khodim_dkm_data', compact('khodim_dkm_data'));
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function khodim_dkm_create()
    {

        // $bidang_khodim_option
        // bidang_Khodim_model::pluck('Nama_bidang_Khodim', 'Kode_bidang_Khodim'); = mengambil nama bidang_Khodim berdasarkan kode bidang_Khodim yang ada di table bidang_Khodim

        $Bidang_Khodim_Options = bidang_Khodim_model::pluck('Nama_Bidang_Khodim', 'Kode_Bidang_Khodim');
        return view('khodim_dkm_create', compact('Bidang_Khodim_Options'));
    }

    public function khodim_dkm_insert(Request $request)
    {

        $validator = Validator::make($request->all(), [
            // 'Jabatan_Khodim' => 'required',
            'Nama_Khodim' => 'required',
            'Kontak_Khodim' => 'required',
            'Alamat_Khodim' => 'required',
            'Status_Khodim' => 'required',
        ]);

        if ($validator->passes()) {

            // Create a new instance of khodim_dkm_model
            $khodim_dkm_data = new khodim_dkm_model();

            // Fill the model with form data (excluding updated_by)
            $khodim_dkm_data->fill($request->except(['updated_by']));

            // Set the updated_by field to null initially
            $khodim_dkm_data->updated_by = null;

            // Assign the input 'Jabatan_Khodim' value to the 'Jabatan_Khodim' property
            $khodim_dkm_data->Jabatan_Khodim = $request->input('Jabatan_Khodim');

            // Check if 'Foto_Khodim' file is present in the request
            if ($request->hasFile('Foto_Khodim')) {
                $filename1 = date('Y-m-d') . '_' . $request->file('Foto_Khodim')->getClientOriginalName();
                $request->file('Foto_Khodim')->move(public_path('Data_Khodim/Foto_Khodim'), $filename1);
                $khodim_dkm_data->Foto_Khodim = $filename1;
            }

            // Check if 'Identitas_Khodim' file is present in the request
            if ($request->hasFile('Identitas_Khodim')) {
                $filename2 = date('Y-m-d') . '_' . $request->file('Identitas_Khodim')->getClientOriginalName();
                $request->file('Identitas_Khodim')->move(public_path('Data_Khodim/Identitas_Khodim'), $filename2);
                $khodim_dkm_data->Identitas_Khodim = $filename2;
            }

            // Save the updated files
            $khodim_dkm_data->save();

            return redirect()->route('khodim_dkm_index')->with('success', 'Data Berhasil Dimasukan');

        } else {

            // Validation failed, redirect back with errors
            return redirect()->back()->withErrors($validator)->withInput();

        }


    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    public function khodim_dkm_edit($id_khodim)
    {
        //dd($id_khodim);

        // $bidang_khodim_option
        // bidang_Khodim_model::pluck('Nama_bidang_Khodim', 'Kode_bidang_Khodim'); = mengambil nama bidang_Khodim berdasarkan kode bidang_Khodim yang ada di table bidang_Khodim
        $khodim_dkm_data = khodim_dkm_model::findOrFail($id_khodim);

        $Bidang_Khodim_Options = bidang_Khodim_model::pluck('Nama_Bidang_Khodim', 'Kode_Bidang_Khodim');

        return view('khodim_dkm_edit', compact('khodim_dkm_data', 'Bidang_Khodim_Options'));
    }

    public function khodim_dkm_update(Request $request, $id_khodim)
    {
        $khodim_dkm_data = khodim_dkm_model::findOrFail($id_khodim);
        $khodim_dkm_data->Jabatan_Khodim = $request->input('Jabatan_Khodim');

        // Update the data with new values from the request
        $khodim_dkm_data->fill($request->all());

        $khodim_dkm_data->update($request->all());

        if ($request->hasFile('Foto_Khodim')) {
            $filename1 = date('Y-m-d') . '_' . $request->file('Foto_Khodim')->getClientOriginalName();
            $request->file('Foto_Khodim')->move(public_path('Data_Khodim/Foto_Khodim'), $filename1);
            $khodim_dkm_data->Foto_Khodim = $filename1;
        }

        if ($request->hasFile('Identitas_Khodim')) {
            $filename2 = date('Y-m-d') . '_' . $request->file('Identitas_Khodim')->getClientOriginalName();
            $request->file('Identitas_Khodim')->move(public_path('Data_Khodim/Identitas_Khodim'), $filename2);
            $khodim_dkm_data->Identitas_Khodim = $filename2;
        }

        $khodim_dkm_data->save();


        // Redirect or return response as needed
        if (session('page_url')) {
            return redirect(session('page_url'))->with('success_edit', 'Data Berhasil Diubah');
        }

        return redirect()->route('khodim_dkm_index')->with('success_edit', 'Data Berhasil Diubah');
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function khodim_dkm_export_pdf()
    {
        $khodim_dkm_data = khodim_dkm_model::orderBy('Nama_Khodim', 'asc')->get();

        view()->share('khodim_dkm_data', $khodim_dkm_data);
        $khodim_dkm_pdf = PDF::loadview('khodim_dkm_export-pdf');
        return $khodim_dkm_pdf->download('data_khodim_dkm.pdf');
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // untuk lihat data uji berfungsi untuk melihat 1 data
    public function khodim_dkm_view($id_khodim)
    {

        $khodim_dkm_data = khodim_dkm_model::find($id_khodim);
        return view('khodim_dkm_view', compact('khodim_dkm_data'));
    }


}
