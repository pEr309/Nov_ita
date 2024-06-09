<?php

namespace App\Http\Controllers;

use App\Http\Resources\CompraCollection;
use App\Http\Responses\ApiResponse;
use App\Models\Compra;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $compra = new CompraCollection(Compra::all());
            return ApiResponse::success('Listado de usuarios',200,$compra);

        }catch (Exception $e){
            return ApiResponse::error('Error en la consulta',404);

        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try{
            $compra = new CompraCollection(Compra::query()->where('id',$id)->get());
            if ($compra->isEmpty()) throw new ModelNotFoundException("Compra no encontrado");
            return ApiResponse::success("Información de la compra",200,$compra);
        }catch (ModelNotFoundException $e){
            return ApiResponse::error('No se encuentra el articulo',404);   
        }     
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id){
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Compra $compra)
    {
        //
    }
}
