<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateJogo;
use App\Models\Concurso;
use App\Models\Jogo;
use Illuminate\Http\Request;

class JogoController extends Controller
{
    private $repositoryJogo;
    private $repositoryConcurso;
    public function __construct(Jogo $jogo, Concurso $concurso)
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
        //fazer o caminho reverso para mostrar o concurso de cada jogo
        $jogos = $this->repositoryJogo->all();
        $concursos = $this->repositoryConcurso->all();

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
        $concursos = Concurso::all();
        return view('pages.numerosjogados.create', compact('concursos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateJogo $request)
    {

        $jogoscad = $this->repositoryJogo->all();
        $concursoscad = Concurso::all();

        if(!$jogos = request('concurso_id')){
            return redirect()
                    ->back()
                    ->with('message', 'Insira um concurso');
        }

        $jogos = new Jogo();

        $jogos->concurso_id = $request->concurso_id;
        $jogos->identificador_jogo = $request->identificador_jogo;
        $jogos->numerojogado = $request->numerojogado;

        foreach($concursoscad as $concursocad){
            if($concursocad->id == $jogos->concurso_id ){
                foreach($jogoscad as $jogocad){

                    $soma = 0;
                    for($i=0; $i < 20; $i++){
                        for ($j=0; $j < 20; $j++){
                            if($jogos->numerojogado[$j] == $jogocad->numerojogado[$i]){
                                $soma++;
                            }
                        }
                    }

                    if($soma == 20 && $concursocad->id == $jogos->concurso_id && $jogocad->concurso_id == $concursocad->id){

                        return redirect()
                                ->route('jogo.create')
                                ->with('message', 'Você ja cadastrou outro cartão com esses valores');
                    }
                }
            }
        }
        $jogos->save();


        //$cartoes = Cartoes::create($request->all());
        //dd($cartoes);

        return redirect()
                    ->route('jogo.create')
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

        $jogo = Jogo::find($id);

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
        $concursos = Concurso::all();

        if(!$jogo = Jogo::find($id)){
            return redirect()->route('jogo.index');
        }

        return view('pages.numerosjogados.edit', compact('jogo'), compact('concursos'));
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
        $this->validate($request, array(
            'identificador_jogo' => "required|min:1|max:10|unique:jogos,identificador_jogo,$id",
        ));

        $jogos = new Jogo();
        if(!$jogo = Jogo::find($id)){
            return redirect()->back();
        }
        elseif(!$jogos = request('concurso_id')){
            return redirect()
                    ->back()
                    ->with('message', 'Insira um concurso');
        }

        $jogos = Jogo::findOrFail($id);
        $jogos->identificador_jogo = request('identificador_jogo');
        $jogos->numerojogado = request('numerojogado');

        $jogos->update($request->all());

        return redirect()
                ->route('jogo.index')
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

       $jogo = Jogo::find($id);

        $jogo->delete();

        return redirect()
            ->route('jogo.index')
            ->with('message', 'Cartão deletado com sucesso');
    }

    public function search(Request $request){
        $jogos = Jogo::where('identificador_jogo', 'LIKE', "%{$request->search}%")
                            ->paginate();

        return view('pages.numerosjogados.index', compact('jogos'));
    }
}
