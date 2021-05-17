<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConcursosRequest;
use App\Models\Concursos;
use Illuminate\Http\Request;

class ConcursosController extends Controller
{
    private $repository;
    public function __construct(Concursos $concurso)
    {
        $this->repository = $concurso;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $concursos = $this->repository->all();

        return view('pages.numerossorteados.index', compact('concursos'));
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
    public function store(StoreConcursosRequest $request)
    {
        $concursos = new Concursos();

        $concursos->identificador_concurso = request('identificador_concurso');
        $concursos->numerosorteado = request('numerosorteado');
        $concursos->save();
        //$concursos = conc$concursos::create($request->all());
        //dd($concursos);

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
        // $concurso = Concursos::where('id', $id)->first();

        $concurso = Concursos::find($id);

        // return redirect()->route('cartoes.show', compact('cartao'));

        return view('pages.numerossorteados.show', compact('concurso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //if(!$concurso = $this->repository->find($id))
        //    return redirect()->back();
        $concurso = Concursos::findOrFail($id);
        if(!$concurso = Concursos::find($id)){
            return redirect()->route('sorteados.index');
        }

        return view('pages.numerossorteados.edit', compact('concurso'));


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
        //if (!$sorteado = $this->repository->find($id))
        //   return redirect()->back();

        $this->validate($request, array(
            'identificador_concurso' => "required|min:1|max:10|unique:concursos,identificador_concurso,$id",
        ));

        if(!$concurso = Concursos::find($id)){
            return redirect()->back();
        }
        $concurso = new Concursos();
        $concurso = Concursos::findOrFail($id);
        $concurso->identificador_concurso = request('identificador_concurso');
        $concurso->numerosorteado = request('numerosorteado');

        $concurso->update($request->all());


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
        $concurso = Concursos::find($id);

        $concurso->delete();

        return redirect()
            ->route('sorteados.index')
            ->with('message', 'Cartão deletado com sucesso');
    }

    public function search(Request $request){
        $concursos = Concursos::where('identificador_concurso', 'LIKE', "%{$request->search}%")
                            ->paginate();

        return view('pages.numerossorteados.index', compact('concursos'));
    }
}
