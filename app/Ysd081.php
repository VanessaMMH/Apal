<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ysd081 extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
        'id', 'claPed', 'cliente','razon_social', 'descripcion_motivo','fe_pref_entrg','canPed_TM','importe'
    ];
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'table_ysd081';


}
