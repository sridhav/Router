<?php
/**
 * Created by PhpStorm.
 * User: sridhav
 * Date: 12/2/2014
 * Time: 7:59 PM
 */

class Router {
    protected $uri=[];

    function add($uri,$callback,$get=null,$post=null){
        $temp=new URI($uri,$callback,$get,$post);
        array_push($this->uri,$temp);
    }

    function run(){
        foreach($this->uri as $temp){
            $temp->run();
        }
    }
}

class URI{
    protected $uri;
    protected $callback;
    protected $get;
    protected $post;


    function __construct($uri,$callback,$get,$post){
        $this->uri=$uri;
        $this->callback=$callback;
    }

    function run(){
        if(is_callable($this->callback)){
            call_user_func($this->callback);
        }
        else{
            echo "HELLEEEEE";
        }
    }


}