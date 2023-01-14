<?php

namespace App\Http\Controllers;

use App\Http\Requests\Bahan\BahanAddReq;
use App\Http\Requests\Bahan\BahanCountReq;
use App\Models\Bahan;
use App\Models\Produk;
use App\Models\ProdukBahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class BahanController extends Controller
{
    public function add()
    {
       
        return view('bahan.add');
    }

    public function doAdd(BahanAddReq $request)
    {

        $request->validated();
        if(Bahan::where('user_id',Auth::id())->count() === 3){
            Alert::error('Oppss','bahan dah banyak bang');
            return redirect()->to('/bahan/list');
        }
        Bahan::create([
            'user_id' => Auth::id(),
            'name' => $request->post('name')
        ]);
        Alert::success('Sukses', 'Sukses tambah produk');

        return redirect()->back();
    }

    public function reset(){

        $bahans =  Bahan::where('user_id',Auth::id())->get();
        foreach ($bahans as $key => $value) {
            ProdukBahan::where('bahan_id',$value->id)->delete();
        }
        Bahan::where('user_id',Auth::id())->delete();
        Alert::success('Sukses','Sukses bang');
        return redirect()->to('/bahan/list');

    }

    public function count()
    {
        
        $bahans  = Bahan::get();
        $count = 0;
        foreach ($bahans as $key => $value) {
            $count += ProdukBahan::where('bahan_id',$value->id)->count();
        }

        if($count !== 9){
            Alert::error('Oppss','Gak cukup bang');
            return redirect()->to('/');
        }
        return view('bahan.count', compact('bahans'));
    }

    public function doCount(BahanCountReq $request)
    {

        $request->validated();
        $tersedia = [];
        $index = 0;
        foreach ($request->all() as $key => $value) {
            if (preg_match('/bahan_[0-9]+/', $key)) {
                $id = explode("_", $key)[1];

                $tersedia[$index]['id'] = $id;
                $tersedia[$index]['name'] = Bahan::where('id',$id)->first()->name;
                $tersedia[$index]['value'] = $value;
                $index++;
            }
        }

        $id = array_column($tersedia, 'id');

        array_multisort($id, SORT_DESC, $tersedia);

        // dd($tersedia);

        // -----------------------------------------------

        $produkBahan = [];
        $formatProduk = [];

        foreach ($tersedia as $key => $value) {
            $temp = [];
            $index1 = 0;
            $arr = ProdukBahan::where('bahan_id',$value['id'])->get();

            foreach ($arr as $value1) {
                $temp[$index1]['produk_id'] = $value1->produk_id; 
                $temp[$index1]['name'] = Produk::where('id',$value1->produk_id)->first()->name; 
                $temp[$index1]['value'] = $value1->value;
                $index1++; 
            }

            $id2 = array_column($temp, 'produk_id');

        array_multisort($id2, SORT_ASC, $temp);

        foreach ($temp as $key1 => $value2) {
            $produkBahan[$key][$key1] =  $value2['value'];
        }
        $formatProduk[$key] = $temp;
        
        $produkBahan[$key][3] =  $value['value'];

        }

    //   -----------------------------------------------
        $produkBahan1 = [];
        $divide = $produkBahan[0][0];
        foreach ($produkBahan[0] as $key => $value) {
            $produkBahan1[0][$key] = (float) $value / (float) $divide; 
        }

        foreach ($produkBahan as $key => $value) {
            if($key != 0){
                $produkBahan1[$key] = $value;
            }
        }

        // ------------------------------------------

        $ping =  - ((float) $produkBahan1[1][0]);
      
        $produkBahan2 = [];

        foreach ($produkBahan1 as $key => $value) {
            if($key == 0){
                $produkBahan2[$key] = $value;
            }
        }
        foreach ($produkBahan1[1] as $key => $value) {
            $produkBahan2[1][$key] = $value + ($ping * $produkBahan1[0][$key]);
        }

        foreach ($produkBahan1 as $key => $value) {
            if($key == 2){
                $produkBahan2[$key] = $value;
            }
        }

        // -------------------------------------------------------

        $ping1 = - ((float) $produkBahan2[2][0]);
        $produkBahan3 = [];

        foreach ($produkBahan2 as $key => $value) {
            if($key == 0){
                $produkBahan3[$key] = $value;
            }
        }

        foreach ($produkBahan2 as $key => $value) {
            if($key == 1){
                $produkBahan3[$key] = $value;
            }
        }

        foreach ($produkBahan2[2] as $key => $value) {
            $produkBahan3[2][$key] = $value + ($ping1 * $produkBahan2[0][$key]);
        }

        // ------------------------------------------------------
        
        $produkBahan4 = [];
        $divide1 = $produkBahan3[1][1];

        foreach ($produkBahan3 as $key => $value) {
            if($key == 0){
                $produkBahan4[$key] = $value;
            }
        }

        foreach ($produkBahan3[1] as $key => $value) {
            $produkBahan4[1][$key] = (float) $value / (float) $divide1; 
        }

        foreach ($produkBahan3 as $key => $value) {
            if($key == 2){
                $produkBahan4[$key] = $value;
            }
        }

        // ----------------------------------------------
        $produkBahan5 = [];
        $ping2 =  - ((float) $produkBahan4[0][1]);
        foreach ($produkBahan4[0] as $key => $value) {
            $produkBahan5[0][$key] = $value + ($ping2 * $produkBahan4[1][$key]);
        }
        foreach ($produkBahan4 as $key => $value) {
            if($key != 0){
                $produkBahan5[$key] = $value;
            }
        }
        // --------------------------------------------
        $produkBahan6= [];
        $ping3 = - ((float) $produkBahan5[2][1]);
        foreach ($produkBahan5 as $key => $value) {
            if($key == 0){
                $produkBahan6[$key] = $value;
            }
        }
        foreach ($produkBahan5 as $key => $value) {
            if($key == 1){
                $produkBahan6[$key] = $value;
            }
        }
        foreach ($produkBahan5[2] as $key => $value) {
            $produkBahan6[2][$key] = $value + ($ping3 * $produkBahan5[1][$key]);
        }
        // ------------------------------------------------

        $divide2 = $produkBahan6[2][2];
        $produkBahan7 = [];
        foreach ($produkBahan6 as $key => $value) {
            if($key == 0){
                $produkBahan7[$key] = $value;
            }
        }
        foreach ($produkBahan6 as $key => $value) {
            if($key == 1){
                $produkBahan7[$key] = $value;
            }
        }
        foreach ($produkBahan6[2] as $key => $value) {
            $produkBahan7[2][$key] = (float) $value / (float) $divide2; 
        }

        // --------------------------------------------

        $produkBahan8 = [];
        $ping4 = - ((float) $produkBahan7[1][2]);
        foreach ($produkBahan7 as $key => $value) {
            if($key == 0){
                $produkBahan8[$key] = $value;
            }
        }
        foreach ($produkBahan7[1] as $key => $value) {
            $produkBahan8[1][$key] = $value + ($ping4 * $produkBahan7[2][$key]);
        }

        foreach ($produkBahan7 as $key => $value) {
            if($key == 2){
                $produkBahan8[$key] = $value;
            }
        }
        
        // ----------------------------------------------

        $ping5 = - ((float) $produkBahan8[0][2]);
        $produkBahan9 = [];
        foreach ($produkBahan8[0] as $key => $value) {
            $produkBahan9[0][$key] = $value + ($ping5 * $produkBahan8[2][$key]);
        }
        foreach ($produkBahan8 as $key => $value) {
            if($key != 0){
                $produkBahan9[$key] = $value;
            }
        }

        return view('user.final',compact(['formatProduk','tersedia','produkBahan','produkBahan1','produkBahan2','produkBahan3','produkBahan4','produkBahan5','produkBahan6','produkBahan7','produkBahan8','produkBahan9']));
    }

    public function list(){
        $bahans = Bahan::where('user_id',Auth::id())->get();
        return view('bahan.list',compact('bahans'));
    }
}
