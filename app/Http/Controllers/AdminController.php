<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Http\Requests\updateSPRequest;
use App\Models\Product;
use App\Models\Productstype;
use App\Models\Slide;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //product
    public function index()
    {
        $data = Product::query()->get();
        return view('admin.page.trangchu',compact('data'));
    }
    public function listSP(){
        $data = Product::query()->get();
        return view('admin.sanpham.list',compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function createSP()
    {
        $loai = Productstype::query()->pluck('name', 'id')->all();
        return view('admin.sanpham.create', compact('loai'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeSP(Request $request)
    {
        $loai = Productstype::query()->pluck('name', 'id')->all();
//        xử lý ảnh
        if ($request->hasFile('image')) {
            $url = Storage::put('public', $request->file('image'));
        } else {
            $url = '';
        }
        DB::table('products')->insert([
            'name' => $request->name,
            'id_type' => $request->id_type,
            'description' => $request->description,
            'unit_price' => $request->unit_price,
            'promotion_price'=> $request->promotion_price,
            'image'=> $url,
            'unit' => $request->unit,
            'new'=> $request->new,
            'created_at' => Carbon::now()
        ]);
        return redirect()->route('admin.index');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function editSP(Product $sp, $product)
    {
        $loai = Productstype::query()->pluck('name', 'id')->all();
        return view('admin.sanpham.edit', compact('loai', 'sp','product'));    
    }
    public function updateSP(updateSPRequest $request, Product $product)
    {
        $data = $request->except('image');
        if ($request->hasFile('image')) {
            $data['image'] = Storage::put('products', $request->file('image'));
            // Xóa ảnh cũ trong storage đi
            if (!empty($product->image) && Storage::exists($product->image)) {
                Storage::delete($product->image);
            }
        } else {
            $data['image'] = $product->image;
        }
//        dd($data);
        $product->update($data);
        return redirect()->route('admin.page.trangchu', compact('product'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $pro)
    {
        $pro->delete();
        return back();
    }
    //login admin
    public function log()
    {
        return view('admin.log');
    }
    public function logAdmin(Request $request){
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password, 'type'=>"admin"])){
            return redirect()->route('admin.index');
        }
        return redirect()->back()->with('error', 'Đây không phải admin!');
    }
    public function signout()
    {
        Auth::logout();
        return redirect()->route('log');
    }
    //banner
    public function getBanner()
    {
        $data = Slide::query()->get();
        return view('admin.banner.list',compact('data'));
    }
    public function createSL()
    {
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeSL(Request $request)
    {
        if ($request->hasFile('image')) {
            $url = Storage::put('public', $request->file('image'));
        } else {
            $url = '';
        }
        DB::table('slide')->insert([
            'name' => $request->name,
            'image'=> $url
        ]);
        return redirect()->route('admin.banner');
    }
}
