<?php

namespace App\Http\Controllers;

use App\Http\Requests\Produk\ProdukAddReq as ProdukProdukAddReq;
use App\Http\Requests\Produk\ProdukChooseReq;
use App\Http\Requests\ProdukAddReq;
use App\Models\Bahan;
use App\Models\Produk;
use App\Models\ProdukBahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ProdukController extends Controller
{
    public function add(){
        return view('produk.add');
    }

    public function doAdd(ProdukProdukAddReq $request){

        $request->validated();
        
        if(Produk::where('user_id',Auth::id())->count() === 3){
            Alert::error('Oppss','produk dah banyak bang');
            return redirect()->back();
        }

        Produk::create([
            'user_id' => Auth::id(),
            'name' => $request->post('name')
        ]);
        Alert::success('Sukses','Sukses tambah produk');

        return redirect()->back();



    }

    public function list()
    {

        $produks = Produk::where('user_id',Auth::id())->get();
        
        return view('produk.list',compact('produks'));

    }

    public function choose($id){

       $bahans =  Bahan::where('user_id',Auth::id())->get();
       $produk =  Produk::where('id',$id)->first();
        if(count($bahans) < 3){
            Alert::error('Oppsss','Bahan kurang');

            return redirect()->back();
        }else{
            return view('produk.choose',compact(['bahans','produk']));
        }
    }

    public function doChoose(ProdukChooseReq $request){

        $request->validated();

        ProdukBahan::where('produk_id',$request->post('id'))->delete();

        foreach ($request->all() as $key => $value) {
            if(preg_match('/bahan_[0-9]+/',$key)){
                $id = explode("_",$key)[1];
                
                        ProdukBahan::create([
                            'produk_id' => $request->post('id'),
                            'bahan_id' => $id,
                            'value' => $value
                        ]);
            }
        }
        Alert::success('Sukses','Sukses bang');

        return redirect()->to('/produk/list');


    }
    public function detail($id){
        $pb = ProdukBahan::Where('produk_id',$id)->get();
        
        if(count($pb) == 0){
            Alert::error('Oppss','Belum ada data bang');

            return redirect()->to('/produk/list');
        }

        return view('produk.detail',compact('pb'));
        
    }

    public function reset(){
        
       $produks =  Produk::where('user_id',Auth::id())->get();
        foreach ($produks as $key => $value) {
            ProdukBahan::where('produk_id',$value->id)->delete();
        }
        Produk::where('user_id',Auth::id())->delete();
        Alert::success('Sukses','Sukses bang');
        return redirect()->to('/produk/list');
    }

    public function resetDetail($id){
        ProdukBahan::where('produk_id',$id)->delete();
        Alert::success('Sukses','Sukses bang');
        return redirect()->to('/produk/list');

    }
}
