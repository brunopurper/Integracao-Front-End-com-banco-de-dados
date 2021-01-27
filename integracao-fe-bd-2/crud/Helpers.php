<?php


class Helpers{
    public function dd($valor){
        var_dump($valor);die;
    }

    public function dateToBR($date){
    return implode('/',array_reverse(explode('-', $date)));
    }
}


