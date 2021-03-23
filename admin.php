<?php
require_once('front.php');


class Admin extends Front{

    // protected $util;

    function __construct(){
        session_start();
        // Smarty
        parent::__construct();
        
        /**
         * 継続的認証の実行
         */
        if(!$this->util->is_auth()){
            header('Location: /login.php');
            exit;
        }
        /*親が既にグローバル変数＄smartyを持っているので
         * 引数に使えるオブジェクﾄが↑のコンストラクタで既に存在する
         * Utilityクラスでもsmartyが使えるようになる
         * 尚引数は[,]で何個でも渡せる
         * （例）
         * $this->util=new Utility($this->smarty,"あいうえお");
         * Utilityクラス↓
         * public function __construct(Smarty $smarty,String $sample){
         * ｝
         */
        // $this->util=new Utility($this->smarty);
    }







}
// $admin = new Admin();
// $admin->is_auth();