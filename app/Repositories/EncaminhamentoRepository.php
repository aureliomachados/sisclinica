<?php

namespace App\Repositories;

use App\Models\Encaminhamento;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EncaminhamentoRepository
 * @package App\Repositories
 * @version October 5, 2018, 11:37 am UTC
 *
 * @method Encaminhamento findWithoutFail($id, $columns = ['*'])
 * @method Encaminhamento find($id, $columns = ['*'])
 * @method Encaminhamento first($columns = ['*'])
*/
class EncaminhamentoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'paciente',
        'idade',
        'endereco',
        'diagnostico',
        'profissional',
        'saida',
        'chegada'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Encaminhamento::class;
    }
}
