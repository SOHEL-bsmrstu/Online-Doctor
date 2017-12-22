<?php

class Session {
public static function init() {
        session_start();
    }
    
    
    public static function  set($key,$value){
        $_SESSION['$key']=$value;
    }
    public static function get($key){
        if(isset($_SESSION['$key'])){
            return $_SESSION['$key'];
        } else {
            FALSE;
        }
    }
    public static function checkSession(){
        self::init();
        if (self::get('login')!=TRUE){
            session_destroy();
               header("location:logIn.php");
        } 
    }
    public static function destory(){
        session_destroy();
            header("location:logIn.php");
        
    }
}
