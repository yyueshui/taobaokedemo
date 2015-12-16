<?php

class Ajax {

    public static $ajaxData = array(
        'code'=>200,
        'data'=>array(),
        'msg'=>''
    );

    public static function ajaxReturn($data=array('data'=>array())) {
        header('Content-Type:application/json;charset=utf-8');
        exit(json_encode($data));
    }

    public static function error($msg){
        Ajax::ajaxReturn(array(
            'code'=>-1,
            'msg'=>$msg
        ));
    }

    public static function go($data){
        Ajax::ajaxReturn(array(
            'data'=>$data
        ));
    }
} 