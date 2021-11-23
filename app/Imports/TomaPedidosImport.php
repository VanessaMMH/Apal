<?php

namespace App\Imports;

use App\TomaPedidos;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use DateTime;
use Carbon\Carbon;

class TomaPedidosImport implements ToModel, WithStartRow
{
 /**
     * @return int
     */
    public function startRow(): int
    {
        return 5;
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
   
        //dd($row[0]);
    
        
        return new TomaPedidos([            
            'fecha_creacion'    =>  \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[0]),
            //'fecha_creacion' =>$this->transformDate($row[0]),
            //'fecha_creacion' => DateTime::createFromFormat('Y-m-d', $row[0])->format('Y-m-d'), 
            'numero_de_pedido' => $row[1],
            'codigo_de_cliente'=> $row[2],
            'nombre_de_cliente'=> $row[3],
            'direccion'=> $row[4],
            'distrito'=> $row[5],
            'ruta_de_campo'=> $row[6],
            'ruta_de_llamada'=> $row[7], // debe permitirse ser null
            'importe_de_venta'=> $row[8],
            'usuario_inicial'=> $row[9],
            'usuario_final'=> $row[10],
        ]);
    }
}
