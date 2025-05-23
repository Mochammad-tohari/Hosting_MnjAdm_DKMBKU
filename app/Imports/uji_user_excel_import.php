<?php

namespace App\Imports;

use App\Models\uji_user_model;
use Maatwebsite\Excel\Concerns\ToModel;

class uji_user_excel_import implements ToModel
{

    /*
           syntax membuat file import excel, nama model harus sesuai dengan yang ada di folder Models

           php artisan make:import uji_user_excel_import  --model=uji_user_model
       */

    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new uji_user_model([

            'Kode_Uji_User' => $row[1],
            'Nama_Uji_User' => $row[3],
            'Password_Uji_User' => bcrypt($row[4]), // Hash the password
            'Tanggal_Uji_User' => $row[5],
            'Status_Uji_User' => $row[9],

        ]);
    }
}
