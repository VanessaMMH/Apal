<?php

namespace App\Imports;

use App\Ysd080;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use DateTime;
use Carbon\Carbon;
class Ysd080Import implements ToModel, WithStartRow
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

    public function transformDate($value, $format = 'Y-m-d')
{
    try {
        return \Carbon\Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value));
    } catch (\ErrorException $e) {
        return \Carbon\Carbon::createFromFormat($format, $value);
    }
}
    public function model(array $row)
    {
        return new Ysd080([
            'pedido'     => $row[0],
            // 'fecha_creacion'=> \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[3]),
            // 'fecha_creacion'=>$this->transformDate($row[3]),
            // 'fecha_creacion'=>  Carbon::now(),
            'fecha_creacion'=>  DateTime::createFromFormat('d.m.Y', $row[3])->format('Y-m-d'), 
            'cliente' => $row[15],
            'razon_social' => $row[16],
            'can_ped' => $row[36],
            'can_ped_tm' => $row[37],
            'importe' => $row[38],
            'region_distrito' => $row[86],
        ]);
    }
}
