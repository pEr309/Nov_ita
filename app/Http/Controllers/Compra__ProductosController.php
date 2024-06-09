<?php

namespace App\Http\Controllers;

use App\Http\Responses\ApiResponse;
use App\Models\Compra__Productos;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class Compra__ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $compra__productos =  Compra__Productos::with('compra','producto')->get();
            return ApiResponse::success('Listado de compra de productos', 200, $compra__productos);
        }catch(Exception $e){
                return ApiResponse::error('No se encontro la compra como el producto');
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
            $Compra__Productos =  new Compra__Productos(Compra__Productos::query()->where('id',$id)->get);
            if($Compra__Productos->isEmpty())throw new ModelNotFoundException();
            return ApiResponse::success("Compra del producto obtenido",200, $Compra__Productos);
        }catch (ModelNotFoundException $e){
            return ApiResponse::error('La compra del producto no existe', 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
