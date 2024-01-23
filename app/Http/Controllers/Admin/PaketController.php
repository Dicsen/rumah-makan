<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;
use App\Models\Paket;

class PaketController extends AdminController
{
    function index() {
        $items = Paket::get();
        return view('admin.paket.index',[
            'items'=>$items,
        ]);
    }
    function store(Request $request) {
        
        $validated = $request->validateWithBag('PaketCreate', [
            
            'name'=>['required'],
            'price'=>['required'],
            'detail'=>['required']
        ]);
        Paket::create($validated)->save();
        return back()->with('msg-success','Success Create Paket Makanan!');
    }
    function update(Request $request) {
        
        $validated = $request->validateWithBag('PaketUpdate', [
            'name'=>['required'],
            'price'=>['required'],
            'detail'=>['required']
        ]);
        Paket::findOrFail($request->id)->update($validated);
        return back()->with('msg-success','Success Update Paket Makanan!');
        
    }
    function destroy(Request $request){
        Paket::findOrFail($request->id)->delete();
        return back()->with('msg-success','Success Delete Paket Makanan!');
        
    }
    function fetch(Request $request) {
        $menu = Paket::find($request->id);
        if($menu){
            return response(['code'=>302,'message'=>'Found!','data'=>$menu]);
        }
        return response(['code'=>404,'message'=>'Data not found!','data'=>NULL]);
    }
/**
 * Another Function
 */
    
}
