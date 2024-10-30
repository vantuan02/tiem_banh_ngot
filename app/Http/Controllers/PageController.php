<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use App\Models\Slide;
use App\Models\Product;
use App\Models\Productstype;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;

class PageController extends Controller
{
    public function getIndex(){
        $slide = Slide::all();
        $new_product = Product::where('new',1)->get();
        $sale_product = Product::where('promotion_price','<>',0)->get();
        return view('page.trangchu',compact('slide','new_product', 'sale_product'));
    }
    public function mainIndex(){
        $slide = Slide::all();
        $new_product = Product::where('new',1)->get();
        $sale_product = Product::where('promotion_price','<>',0)->get();
        return view('page.mainindex',compact('slide','new_product', 'sale_product'));
    }
    public function getLoaiSp($type){
        $sp_theoloai = Product::where('id_type',$type)->get();
        $loai = Productstype::all();
        $loai_sp = Productstype::where('id',$type)->first();
        return view('page.loai_sp', compact('sp_theoloai','loai','loai_sp'));
    }
    public function getChiTiet(Request $req){
        $sanpham = Product::where('id',$req->id)->first();
        $sp_tuongtu = Product::where('id_type', $sanpham->id_type)->paginate(3);
        return view('page.detail',compact('sanpham','sp_tuongtu'));
    }
    // public function getAddtoCart(Request $req, $id){
    //     $product = Product::find($id);
    //     $oldCart = Session('cart')?Session::get('cart'):null;
    //     $cart = new Cart($oldCart);
    //     $cart->add($product, $id);
    //     $req->session()->put('cart',$cart);
    //     return redirect()->back();
    // }
}
