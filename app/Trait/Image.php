<?php

namespace App\Trait;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

trait Image
{


    function AddImage($img){
        $path = Str::random(10).".".$img->getClientOriginalExtension();
        $img->storeAs('/images/',$path,'public');
        return $path;
    }


    function ModifierImage($img,$new){

        if($this->deleteImage($img)){
            return  $this->AddImage($new);
        }
        return $img;
    }


    function deleteImage($img){
        if(Storage::exists('public/images/'.$img)){
            Storage::delete('public/images/'.$img);
            return  true;
        }
        return false;
    }


}
