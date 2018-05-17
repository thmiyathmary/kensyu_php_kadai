<?php
    class Session {
        public function __construct(){
            session_start();
            return $this;
        }
        public function getAttribute($key){
            return $_SESSION[$key];
        }
        public function setAttribute($key, $value){
            $_SESSION[$key] = $value;
        }
        public function removeAttribute($key){
            unset($_SESSION[$key]);
        }
        public function invalidate(){
            session_destroy();
        }
        public function regenerate(){
            session_regenerate_id();
            return session_id();
        }
    }