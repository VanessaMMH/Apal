<?php

namespace App\Imports;

use App\Clientes;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use DateTime;

class ClientesImport implements ToModel, WithStartRow
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
        return new Clientes([
            'ciudad'=> $row[0],
            'codigo'=> $row[1],
            'nombre'=> $row[2],
            'direccion' => $row[3],
            'distrito' => $row[4],
            'dni_ruc' => $row[5],
            'giro_negocio' => $row[6],
            'subcanal' => $row[7],
            'segmento' => $row[8],
            'telefono01' => $row[9],
            'telefono02' => $row[10],
            'telefono03' => $row[ 11],
            'ruta_llamada' => $row[12 ],
            'dia_llamada' => $row[13 ],
            'frecuencia' => $row[ 14],
            'ruta_vista' => $row[ 15],
            'dia_vista' => $row[ 16],
            'frecuencia_vista' => $row[17 ],
            'secuencia_vista' => $row[ 18],
            'longitud' => $row[ 19],
            'latitud' => $row[20 ],
            // 'fecha_alta'    =>  \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[20]),

            'fecha_alta' => DateTime::createFromFormat('Y-m-d', $row[21])->format('Y-m-d'), 
            'cod_dist' => $row[ 22],
        ]);
    }
}
