<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Encaminhamento
 * @package App\Models
 * @version October 5, 2018, 11:37 am UTC
 *
 * @property string paciente
 * @property string idade
 * @property string endereco
 * @property string diagnostico
 * @property string profissional
 * @property string saida
 * @property string chegada
 */
class Encaminhamento extends Model
{
    use SoftDeletes;

    public $table = 'encaminhamentos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'paciente',
        'idade',
        'endereco',
        'diagnostico',
        'profissional',
        'saida',
        'chegada'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'paciente' => 'string',
        'idade' => 'string',
        'endereco' => 'string',
        'diagnostico' => 'string',
        'profissional' => 'string',
        'saida' => 'string',
        'chegada' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'paciente' => 'required',
        'idade' => 'required',
        'endereco' => 'required',
        'diagnostico' => 'required'
    ];

    
}
