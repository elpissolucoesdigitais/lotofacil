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
        $sorteados = new Sorteados();

        $sorteados->identificador = request('identificador');
        $sorteados->numerosorteado = request('numerosorteado');
        $sorteados->save();
        //$sorteados = Sorteados::create($request->all());
        //dd($sorteados);

        return redirect()
                    ->route('sorteados.index')
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
        // $sorteado = Sorteados::where('id', $id)->first();

        $sorteado = Sorteados::find($id);

        // return redirect()->route('cartoes.show', compact('cartao'));

        return view('pages.numerossorteados.show', compact('sorteado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //if(!$sorteado = $this->repository->find($id))
        //    return redirect()->back();

        if(!$sorteado = Sorteados::find($id)){
            return redirect()->route('sorteados.index');
        }

        return view('pages.numerossorteados.edit', compact('sorteado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreSorteadosRequest $request, $id)
    {
        //if (!$sorteado = $this->repository->find($id))
        //   return redirect()->back();

        if(!$sorteado = Sorteados::find($id)){
            return redirect()->back();
        }
        $sorteados = new Sorteados();

        $sorteados->identificador = request('identificador');
        $sorteados->numerosorteado = request('numerosorteado');
        $sorteados->save();


        return redirect()
                ->route('sorteados.index')
                ->with('message', 'Cartão Sorteado atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sorteado = Sorteados::find($id);

        $sorteado->delete();

        return redirect()
            ->route('sorteados.index')
            ->with('message', 'Cartão deletado com sucesso');
    }

    public function search(Request $request){
        $sorteados = Sorteados::where('identificador', 'LIKE', "%{$request->search}%")
                            ->paginate();

        return view('pages.numerossorteados.index', compact('sorteados'));
    }
}
