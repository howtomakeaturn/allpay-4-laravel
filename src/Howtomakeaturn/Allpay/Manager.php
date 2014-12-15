<?php

namespace Howtomakeaturn\Allpay;

use \Config;

class Manager{

    protected $allInOne;
    protected $helper;
    
    public function __construct()
    {
        $this->allInOne = new \AllInOne();
        $this->helper = new Helper();
    }
    
    public function instance()
    {
        return $this->allInOne;
    }
    
    public function i()
    {
        return $this->allInOne;
    }
    
    public function deadline($date)
    {
        return $this->helper->deadline($date);
    }
    
    public function loadConfigs()
    {
        $this->allInOne->ServiceURL = Config::get('allpay-4-laravel.ServiceURL');
        $this->allInOne->HashKey = Config::get('allpay-4-laravel.HashKey');
        $this->allInOne->HashIV = Config::get('allpay-4-laravel.HashIV');
        $this->allInOne->MerchantID = Config::get('allpay-4-laravel.MerchantID');
    }
    
    public function loadTestingConfigs()
    {
        /* 服務參數 */
        $this->allInOne->ServiceURL ="http://payment-stage.allpay.com.tw/Cashier/AioCheckOut";
        $this->allInOne->HashKey = "5294y06JbISpM5x9";
        $this->allInOne->HashIV = "v77hoKGq4kWxNNIS";
        $this->allInOne->MerchantID = "2000132";
        /* 基本參數 */
        $this->allInOne->Send['ReturnURL'] = "localhost";
        $this->allInOne->Send['ClientBackURL'] = "localhost";
        $this->allInOne->Send['MerchantTradeNo'] = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 20);;
        $this->allInOne->Send['MerchantTradeDate'] = date('Y/m/d H:i:s');
        $this->allInOne->Send['TotalAmount'] = (int) "1330";
        $this->allInOne->Send['TradeDesc'] = "這是一筆測試交易";
        array_push($this->allInOne->Send['Items'], array('Name' => "測試產品", 'Price' => (int)"1330",
        'Currency' => "元", 'Quantity' => (int) "1", 'URL' => "localhost"));
    }
    
}
