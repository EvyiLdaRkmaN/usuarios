<?php

namespace App\Http\Controllers;
use App\Models\Marry;
use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\StoreUsuario;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;

class MarryController extends Controller
{
    public function index(){
        $marrys = Marry::with('user','user2')->paginate();
        
        return view('marry.index', compact('marrys'));
    }
    
}
