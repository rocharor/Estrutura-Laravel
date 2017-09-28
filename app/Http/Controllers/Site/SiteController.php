<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\UploadImagem;

class SiteController extends Controller
{
    use UploadImagem;

    public function index()
    {
        return view('site/home',[]);
    }

    public function uploadImagem(Request $request)
    {
        $retorno = $this->put($request->imagem);

        if($retorno){
            return redirect()->route('site.home')->with('sucesso','OK');
        }

        return redirect()->route('site.home')->with('erro','ERRO');
    }

    public function uploadResize(Request $request)
    {
        $retorno = $this->putResize($request->imagem,$request->w,$request->h);

        if($retorno){
            return redirect()->route('site.home')->with('sucesso','Resize OK');
        }

        return redirect()->route('site.home')->with('erro','Resize ERRO');
    }

    public function uploadCrop(Request $request)
    {
        $retorno = $this->putCrop($request->imagem,$request->w,$request->h,$request->x,$request->y);

        if($retorno){
            return redirect()->route('site.home')->with('sucesso','Crop OK');
        }

        return redirect()->route('site.home')->with('erro','Crop ERRO');
    }
}
