<?php

namespace App\Http\Controllers;

use App\DataTables\EncaminhamentoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateEncaminhamentoRequest;
use App\Http\Requests\UpdateEncaminhamentoRequest;
use App\Repositories\EncaminhamentoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class EncaminhamentoController extends AppBaseController
{
    /** @var  EncaminhamentoRepository */
    private $encaminhamentoRepository;

    public function __construct(EncaminhamentoRepository $encaminhamentoRepo)
    {
        $this->encaminhamentoRepository = $encaminhamentoRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the Encaminhamento.
     *
     * @param EncaminhamentoDataTable $encaminhamentoDataTable
     * @return Response
     */
    public function index(EncaminhamentoDataTable $encaminhamentoDataTable)
    {
        return $encaminhamentoDataTable->render('encaminhamentos.index');
    }

    /**
     * Show the form for creating a new Encaminhamento.
     *
     * @return Response
     */
    public function create()
    {
        return view('encaminhamentos.create');
    }

    /**
     * Store a newly created Encaminhamento in storage.
     *
     * @param CreateEncaminhamentoRequest $request
     *
     * @return Response
     */
    public function store(CreateEncaminhamentoRequest $request)
    {
        $input = $request->all();

        $encaminhamento = $this->encaminhamentoRepository->create($input);

        Flash::success('Encaminhamento adicionado com sucesso!.');

        return redirect(route('encaminhamentos.index'));
    }

    /**
     * Display the specified Encaminhamento.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $encaminhamento = $this->encaminhamentoRepository->findWithoutFail($id);

        if (empty($encaminhamento)) {
            Flash::error('Encaminhamento não encontrado');

            return redirect(route('encaminhamentos.index'));
        }

        return view('encaminhamentos.show')->with('encaminhamento', $encaminhamento);
    }

    /**
     * Show the form for editing the specified Encaminhamento.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $encaminhamento = $this->encaminhamentoRepository->findWithoutFail($id);

        if (empty($encaminhamento)) {
            Flash::error('Encaminhamento não encontrado');

            return redirect(route('encaminhamentos.index'));
        }

        return view('encaminhamentos.edit')->with('encaminhamento', $encaminhamento);
    }

    /**
     * Update the specified Encaminhamento in storage.
     *
     * @param  int              $id
     * @param UpdateEncaminhamentoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEncaminhamentoRequest $request)
    {
        $encaminhamento = $this->encaminhamentoRepository->findWithoutFail($id);

        if (empty($encaminhamento)) {
            Flash::error('Encaminhamento não encontrado');

            return redirect(route('encaminhamentos.index'));
        }

        $encaminhamento = $this->encaminhamentoRepository->update($request->all(), $id);

        Flash::success('Encaminhamento atualizado com sucesso.');

        return redirect(route('encaminhamentos.index'));
    }

    /**
     * Remove the specified Encaminhamento from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $encaminhamento = $this->encaminhamentoRepository->findWithoutFail($id);

        if (empty($encaminhamento)) {
            Flash::error('Encaminhamento não encontrado');

            return redirect(route('encaminhamentos.index'));
        }

        $this->encaminhamentoRepository->delete($id);

        Flash::success('Encaminhamento deletado com sucesso.');

        return redirect(route('encaminhamentos.index'));
    }
}
