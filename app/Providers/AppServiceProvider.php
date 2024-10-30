<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Productstype;
use App\Models\Cart;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('header',function($view){
            $loai_sp = Productstype::all();
            $view->with('loai_sp', $loai_sp);
        });
        // view()->composer('header', function($view){
        //     if(Session('cart')){
        //         $oldCart = Session::get('cart');
        //         $cart = new Cart($oldCart); 
        //         $view->with(['cart'=>Session::get('cart'),'product_card'=>$cart->items, 'totalPrice'=>$cart->totalPrice, 'totalQty'=>$cart->totalQty]);

        //     }
        // });

    }
}
