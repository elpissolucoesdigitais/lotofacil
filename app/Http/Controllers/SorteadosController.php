<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSorteadosRequest;
use App\Models\Sorteados;
use Illuminate\Http\Request;

class SorteadosController extends Controller
{
    private $repository;
    public function __construct(Sorteados $sorteado)
    {
        $this->repository = $sorteado;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sorteados = $this->repository->all();

        return view('pages.numerossorteados.index', compact('sorteados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.numerossorteados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSorteadosRequest $request)
    {
        $sorteados = $request->all();
        Sorteados::create($sorteados);
        //$cartoes = Cartoes::create($request->all());
        //dd($cartoes);

        return redirect()
                    ->route('cartoes.index')
                    ->with('message', 'Cartão atualizado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
