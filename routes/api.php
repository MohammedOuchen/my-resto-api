<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\ApiAuthController;
use App\Http\Controllers\Api\V1\OrderController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('V1')->name('api.v1')->group(function(){

        Route::post('/login', [ApiAuthController::class,'login']);
        Route::post('/logout', [ApiAuthController::class,'logout'])->middleware('auth:sanctum');
        Route::apiResource('/order', OrderController::class)->middleware('auth:sanctum');
        // Route::apiResource('/status', CommandeController::class);
        // Route::get('/commande/{id}', [CommandeController::class, 'commandeClient']);
        // Route::apiResource('/utilisateur', AdminController::class);
        // Route::apiResource('/commerciale', CommercantController::class);
        // Route::post('/update-quantite-product', [CommandeController::class, 'updateProductQuantity']);
        // Route::post('/delete-product-order', [CommandeController::class, 'deleteProduct']);
        // Route::get('/search/{produit}', [ProduitController::class, 'search']);
        Route::get('/utilisateur-profil', [ApiAuthController::class,'userProfile'] )->middleware('auth:sanctum');
        // Route::post('/add-product', [CommandeController::class, 'addNewProduct']);

});
