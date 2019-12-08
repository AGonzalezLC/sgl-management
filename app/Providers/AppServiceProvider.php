<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
    public function mapApiRoutes()
    {
        Route::group([
            'middleware' => ['api', 'cors'],
            'namespace' => $this->namespace,
            'prefix' => 'api',
        ], function ($router) {
            Route::apiResource('/categoria', 'CategoriaController@index');
            Route::apiResource('/categoria/registrar', 'CategoriaController@store');
            Route::apiResource('/categoria/actualizar', 'CategoriaController@update');
            Route::apiResource('/categoria/desactivar', 'CategoriaController@desactivar');
            Route::apiResource('/categoria/activar', 'CategoriaController@activar');
            Route::apiResource('/categoria/selectCategoria', 'CategoriaController@selectCategoria');
    
            Route::apiResource('/articulo', 'ArticuloController@index');
            Route::apiResource('/articulo/registrar', 'ArticuloController@store');
            Route::apiResource('/articulo/actualizar', 'ArticuloController@update');
            Route::apiResource('/articulo/desactivar', 'ArticuloController@desactivar');
            Route::apiResource('/articulo/activar', 'ArticuloController@activar');
            Route::apiResource('/articulo/buscarArticulo', 'ArticuloController@buscarArticulo');
            Route::apiResource('/articulo/listarArticulo', 'ArticuloController@listarArticulo');
            Route::apiResource('/articulo/buscarArticuloVenta', 'ArticuloController@buscarArticuloVenta');
            Route::apiResource('/articulo/listarArticuloVenta', 'ArticuloController@listarArticuloVenta');
            Route::apiResource('/articulo/listarPdf','ArticuloController@listarPdf')->name('articulos_pdf');
    
            Route::apiResource('/proveedor', 'ProveedorController@index');
            Route::apiResource('/proveedor/registrar', 'ProveedorController@store');
            Route::apiResource('/proveedor/actualizar', 'ProveedorController@update');
            Route::apiResource('/proveedor/selectProveedor', 'ProveedorController@selectProveedor');
    
            Route::apiResource('/ingreso', 'IngresoController@index');
            Route::apiResource('/ingreso/registrar', 'IngresoController@store');
            Route::apiResource('/ingreso/desactivar', 'IngresoController@desactivar');
            Route::apiResource('/ingreso/obtenerCabecera', 'IngresoController@obtenerCabecera');
            Route::apiResource('/ingreso/obtenerDetalles', 'IngresoController@obtenerDetalles');
            
            Route::apiResource('/cliente', 'ClienteController@index');
            Route::apiResource('/cliente/registrar', 'ClienteController@store');
            Route::apiResource('/cliente/actualizar', 'ClienteController@update');
            Route::apiResource('/cliente/selectCliente', 'ClienteController@selectCliente');
    
            Route::apiResource('/venta', 'VentaController@index');
            Route::apiResource('/venta/registrar', 'VentaController@store');
            Route::apiResource('/venta/desactivar', 'VentaController@desactivar');
            Route::apiResource('/venta/obtenerCabecera', 'VentaController@obtenerCabecera');
            Route::apiResource('/venta/obtenerDetalles', 'VentaController@obtenerDetalles');
            Route::apiResource('/venta/pdf/{id}','VentaController@pdf')->name('venta_pdf');
    
            Route::apiResource('/rol', 'RolController@index');
            Route::apiResource('/rol/selectRol', 'RolController@selectRol');
            
            Route::apiResource('/user', 'UserController@index');
            Route::apiResource('/user/registrar', 'UserController@store');
            Route::apiResource('/user/actualizar', 'UserController@update');
            Route::apiResource('/user/desactivar', 'UserController@desactivar');
            Route::apiResource('/user/activar', 'UserController@activar');
        });
    }
    
}
