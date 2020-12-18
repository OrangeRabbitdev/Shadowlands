<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\news;
use DB;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function newSend(Request $request){
        $this->validate($request,[
            'title'=>'requiried',
            'paragraph'=>'required'
            //'image'=>'required'
        ]);

        $new = new news;
        $new->titulo = $request->title;
        $new->parrafo = $request->paragraph;
        //$new->imagen = $request->image;
        $new->link = $request->link;
        $new->fecha = Carbon::now()->toTimeString();
        $new->save();

        if($new){
            $msg = "Noticia creada!";
            return view('admin.panel', ['msg'=>$msg]);
        }
    }

    public function panel(){
        return view('admin.panel');
    }

}
