<?php
    class Cookie{
        const EXPIRE_DEFAULT = "7";
        const EXPIRE_BROWSER = "0";
        const COOKIE_NAME = "ka5";
        private $exp = 0;
        
        public function __construct($expire = Cookie::EXPIRE_DEFAULT){
            if($expire === self::EXPIRE_BROWSER){
                $this->exp = 0;
            } else {
                $this->exp = time() + 60 * 60 * 24 * $expire;
            }
            $this->exp = $expire;
            return $this;
        }
        public function getAttribute($key) {
            return $_COOKIE[$key];
        }
        public function setAttribute($key, $value) {
            setcookie($key, $value, $this->exp);
        }
        public function removeAttribute($key) {
            // unset($_COOKIE[$key]);
            setcookie($key, '', time() - 1800);
        }
    }