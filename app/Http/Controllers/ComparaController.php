<?php

namespace App\Http\Controllers;

use App\Models\Compara;
use App\Models\Concursos;
use App\Models\Jogos;
use Illuminate\Http\Request;
use SebastianBergmann\Comparator\Comparator;

class ComparaController extends Controller
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
        $concursos = $this->repositoryConcurso->all();

        return view('pages.comparacao.index', compact('jogos'), compact('concursos'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show(Compara $compara, $id)
    {
        $jogo = Jogos::where('id', $id)->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit(Compara $compara)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compara $compara)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compara $compara)
    {
        //
    }
}
