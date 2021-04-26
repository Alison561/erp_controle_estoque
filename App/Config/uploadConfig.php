<?php

namespace App\Config;

class uploadConfig{
    public function formato($file){
        if ($file['type']  == 'image/jpeg' || $file['type']  == 'image/jpg' || $file['type']  == 'image/png')
            return true;
        else
            return false;
    }

    public function upload($file){
        $formato = explode('.', $file['name']);
        $nome = 'IMG-'.uniqid().'.'.$formato[count($formato)-1];
        if(move_uploaded_file($file['tmp_name'], 'Public/Uploads/'.$nome))
            return $nome;
    }

    public function deleteFile($file){
        @unlink('Public/Uploads/'.$file);
    }
}