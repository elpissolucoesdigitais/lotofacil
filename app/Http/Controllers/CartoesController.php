<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCadRequest;
use App\Models\Cartoes;
use Illuminate\Http\Request;

class CartoesController extends Controller
{
    private $repository;
    public function __construct(Cartoes $cartao)
    {
        $this->repository = $cartao;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartoes = $this->repository->all();

        return view('pages.numerosjogados.index', compact('cartoes'));


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
    public function store(StoreCadRequest $request)
    {
        $cartoes = $request->all();
        Cartoes::create($cartoes);
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
        // $cartao = Cartoes::where('id', $id)->first();

        $cartao = Cartoes::find($id);

        // return redirect()->route('cartoes.show', compact('cartao'));

        return view('pages.numerosjogados.show', compact('cartao'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //if(!$cartao = $this->repository->find($id))
        //    return redirect()->back();

        if(!$cartao = Cartoes::find($id)){
            return redirect()->route('cartoes.index');
        }

        return view('pages.numerosjogados.edit', compact('cartao'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCadRequest $request, $id)
    {
        //if (!$cartao = $this->repository->find($id))
        //   return redirect()->back();

        if(!$cartao = Cartoes::find($id)){
            return redirect()->back();
        }
        $cartao->update($request->all());

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

       $cartao = Cartoes::find($id);

        $cartao->delete();

        return redirect()
            ->route('cartoes.index')
            ->with('message', 'Cartão deletado com sucesso');
    }

    public function search(Request $request){
        $cartoes = Cartoes::where('identificador', 'LIKE', "%{$request->search}%")
                            ->paginate();

        return view('pages.numerosjogados.index', compact('cartoes'));
    }
}
