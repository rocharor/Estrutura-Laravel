<?php

namespace App\Services;

use Illuminate\Http\Request;
use Image;
use File;

trait UploadImagem
{
    public $path = 'image/';
    public $w = 0;
    public $h = 0;
    public $x = 0;
    public $y = 0;

    public function put($file)
    {
        $fileName = $fileName  = time() . '_' . $file->hashName();
        $path = public_path($this->path . $fileName);
        $retorno = Image::make($file->getRealPath())->save($path);

        if ($retorno) {
            return $fileName;
        }

        return false;
    }

    public function putResize($file,$w,$h)
    {
        $fileName = $fileName  = time() . '_' . $file->hashName();
        $path = public_path($this->path . $fileName);
        $retorno = Image::make($file->getRealPath())->resize($w, $h)->save($path);

        if ($retorno) {
            return $fileName;
        }

        return false;
    }

    public function putCrop($file,$w,$h,$x,$y)
    {
        $fileName = $fileName  = time() . '_' . $file->hashName();
        $path = public_path($this->path . $fileName);
        $retorno = Image::make($file->getRealPath())->crop($w, $h, $x, $y)->save($path);

        if ($retorno) {
            return $fileName;
        }

        return false;
    }




    public function validaExtImagem($extensao){
        return  in_array(strtolower($extensao), $this->extencoesImagem);
    }

    public function deleteImagemProduto($nomeImagem)
    {
        $filename200 = $this->pathProduto . $nomeImagem;
        $filename900 = $this->pathProdutoGG . $nomeImagem;
        return $this->deleteImagem([$filename200, $filename900]);
    }

    public function deleteImagemPerfil($nomeImagem)
    {
        $filename = $this->pathPerfil . $nomeImagem;
        return $this->deleteImagem($filename);
    }

    private function deleteImagem($fileName)
    {
        if (is_array($fileName)) {
            foreach ($fileName as $file) {
                $retorno = File::delete($file);
            }
            return $retorno;
        }

        return File::delete($fileName);
    }

}
