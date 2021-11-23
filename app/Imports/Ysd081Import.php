<?php

namespace App\Imports;

use App\Ysd081;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use DateTime;
use Carbon\Carbon;
class Ysd081Import implements ToModel, WithStartRow
{
    
    /**
     * @return int
     */
    public function startRow(): int
    {
        return 2;
    }
    
    
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Ysd081([
            'claPed'     => $row[1],
            'cliente' => $row[15],
            'razon_social' => $row[16],
            'descripcion_motivo' => $row[18],
            'fe_pref_entrg' => DateTime::createFromFormat('d.m.Y', $row[34])->format('Y-m-d'), 
            // 'fe_pref_entrg'=> Carbon::now(),
            'canPed_TM' => $row[37],
            'importe' => $row[38],
            
        ]);
    }
}
