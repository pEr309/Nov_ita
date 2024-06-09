<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductoCollection;
use App\Http\Responses\ApiResponse;
use App\Models\Producto;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            //$producto = new ProductoCollection(Producto::all());
            $productos = Producto::with('user', 'compra')->get();
            return ApiResponse::success('Listado de productos', 200,$productos);
        }catch (Exception $e){
            Return ApiResponse::error('No se encontraron los productos', 404);
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
            $producto = new ProductoCollection(Producto::query()->where('id',$id)->get());
            if ($producto->isEmpty()) throw new ModelNotFoundException();
            return ApiResponse::success("Produto obtenido", 200, $producto);
        }catch (ModelNotFoundException $e){
            return ApiResponse::error('El producto no existe', 404);

        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
