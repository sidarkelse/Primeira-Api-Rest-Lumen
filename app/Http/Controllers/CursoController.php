<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cursos;

class CursoController extends Controller
{
    private $cursos;

    /**
     * Create a new controller instance.  
     *
     * @return void
     */
    public function __construct(Cursos $cursos)
    {
        $this->cursos = $cursos;
    }

     public function index()
     {
         return $this->cursos->paginate(10);

     }
     public function show($cursos)
     {
         return $this->cursos->find0rFail($cursos);
     }
     public function store(Request $request)
     {
        $this->cursos->create($request->all());

        //mensagem de crianção.....\Usando método JAYZON
        return response()->json(['data'=>['message'=>'O curso de 5k foi criado com sucesso!']]);
     }
     public function update($cursos,Request $request)
     {
         $cursos = $this->cursos->find($cursos);

         $cursos->update($request->all());
         return response()
         ->json([
             'data'=>[
                 'message'=>'O curso foi atualizado com sucesso!'
                 ]
                 ]);
     }
     public function destroy($cursos)
     {
        $cursos = $this->cursos->find($cursos);

        $cursos->delete ();
        return response()
        ->json([
            'data'=>[
                'message'=>'O curso foi Deletado com sucesso!'
                ]
                ]);
         
     }
}
