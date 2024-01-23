<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem;
use App\Models\MenuCategory;
use App\Models\Paket;

class PortalController extends Controller
{
    function welcome(){
        $items = MenuItem::paginate(5);
        return view('welcome',['items'=>$items]);   
    }
    function menu(){
        

        $menus = MenuCategory::where('name' ,'lauk')->get();
        $sayurs = MenuCategory::where('name' ,'sayur')->get();
        $minumans = MenuCategory::where('name' ,'minuman')->get();
        return view('menu',[
            'sayurs'=>$sayurs,
            'menus'=>$menus,
            'minumans'=>$minumans
        ]);

        
    }
    public function catering(){
        $pakets = Paket::get();
        return view('catering',['pakets'=>$pakets]);
        
    }
}
