<?php

namespace App\Http\Controllers;

use App\Models\Conteudo;
use App\Models\Upload;
use Illuminate\Http\Request;

//use Illuminate\Support\Facades\Storage;

class ConteudoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('conteudos.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $conteudo = Conteudo::orderBy('id','desc')->get();

        $data = [
            'titulo' => "Funcionários",
            'menu' => "Funcionários",
            'submenu' => "Listar Inativos",
            'tipo' => "view",
            'getConteudo' => $conteudo
        ];

        return view('conteudos.list', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $request->validate([
                'titulo' => 'titulo',
            ]);

               $summernote = new Conteudo;
               $summernote->titulo = $request->titulo;
               $summernote->save();

            if ($request->uploads) {
                $uploads = explode(";", $request->uploads);
                if (count($uploads)) {
                    foreach ($uploads as $upload) {
                        if ($upload) {
                            Upload::find($upload)->update([
                                "id_processos" => $summernote->id
                            ]);
                        }
                    }
                }
            }
            //Conteudo::create($request->all());

            return redirect()->route('conteudos.create')
                            ->with('success','Cadastro realizado com sucesso...');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Conteudo  $conteudo
     * @return \Illuminate\Http\Response
     */
    public function show(Conteudo $conteudo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Conteudo  $conteudo
     * @return \Illuminate\Http\Response
     */
    public function edit(Conteudo $conteudo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Conteudo  $conteudo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conteudo $conteudo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Conteudo  $conteudo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conteudo $conteudo)
    {
        //
    }
}
