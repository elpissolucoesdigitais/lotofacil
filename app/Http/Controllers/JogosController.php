<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJogosRequest;
use App\Models\Concursos;
use App\Models\Jogos;
use Illuminate\Http\Request;

class JogosController extends Controller
{
    private $repositoryJogo;
    private $repositoryConcurso;
    public function __construct(Jogos $jogo, Concursos $concurso)
    {
        $this->repositoryJogo = $jogo;
        $this->repositoryConcurso = $concurso;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jogos = $this->repositoryJogo->all();
        $concurso = $this->repositoryConcurso->all();

        return view('pages.numerosjogados.index', compact('jogos'));


    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('pages.numerosjogados.home');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.numerosjogados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\StoreCadRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJogosRequest $request)
    {

        $jogos = new Jogos();
        $jogos->identificador_jogo = request('identificador_jogo');
        $jogos->numerojogado = request('numerojogado');
        $jogos->save();


        //$cartoes = Cartoes::create($request->all());
        //dd($cartoes);

        return redirect()
                    ->route('cartoes.create')
                    ->with('message', 'Cartão cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $jogo = Cartoes::where('id', $id)->first();

        $jogo = Jogos::find($id);

        // return redirect()->route('cartoes.show', compact('jogo'));

        return view('pages.numerosjogados.show', compact('jogo'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //if(!$jogo = $this->repository->find($id))
        //    return redirect()->back();

        if(!$jogo = Jogos::find($id)){
            return redirect()->route('cartoes.index');
        }

        return view('pages.numerosjogados.edit', compact('jogo'));
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
        //if (!$jogo = $this->repository->find($id))
        //   return redirect()->back();

        $this->validate($request, array(
            'identificador_jogo' => "required|min:1|max:10|unique:jogos,identificador_jogo,$id",
        ));

        $jogos = new Jogos();

        if(!$jogo = Jogos::find($id)){
            return redirect()->back();
        }
        $jogos = Jogos::findOrFail($id);
        $jogos->identificador_jogo = request('identificador_jogo');
        $jogos->numerojogado = request('numerojogado');

        $jogos->update($request->all());

        return redirect()
                ->route('cartoes.index')
                ->with('message', 'Cartão atualizado com sucesso');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

       $jogo = Jogos::find($id);

        $jogo->delete();

        return redirect()
            ->route('cartoes.index')
            ->with('message', 'Cartão deletado com sucesso');
    }

    public function search(Request $request){
        $jogos = Jogos::where('identificador_jogo', 'LIKE', "%{$request->search}%")
                            ->paginate();

        return view('pages.numerosjogados.index', compact('jogos'));
    }
}
