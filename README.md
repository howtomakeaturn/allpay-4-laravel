#Allpay SDK wrapper for Laravel 4

Allpay-4-laravel是一個將歐付寶官方提供的SDK包裝好的Service Provider。

讓開發人員省去一再初始化SDK、輸入設定值的麻煩。

歐付寶官方SDK請見[全方位金流SDK技術文件下載](http://www.allpay.com.tw/Service/Appcntr_Dwnld?Anchor=AnchorDoc)



---
 
## 安裝

將allpay-4-laravel加到你的 composer.json:

```
"require": {
  "howtomakeaturn/allpay-4-laravel": "0.1.0"
}
```

接著用 composer 安裝：

```
$ composer update
```

### 登記 Package

將 service provider 登記在 ```app/config/app.php```內的 ```providers``` 陣列 :

```php
'providers' => array(
	// ...
	
    'Howtomakeaturn\Allpay\AllpayServiceProvider',
    
)
```

將類別縮寫登記在 ```app/config/app.php```內的```aliases``` 陣列 :


```php
'aliases' => array(
	// ...
    'Allpay' => 'Howtomakeaturn\Allpay\Facade\Allpay',
)
```

## 設定


在config資料夾新增 ``app/config/allpay-4-laravel.php`` ，然後加入以下code：

```php
<?php
return array( 
	
    'ServiceURL' => "https://payment.allpay.com.tw/Cashier/AioCheckOut",
    'HashKey' => "您的hashkey",
    'HashIV' => "您的hashiv",
    'MerchantID' => "您的merchantid"

);
```

## 用法

由於allpay-4-laravel只是將歐付寶官方提供的SDK類別初始化之後加以包裝，實際上您還是在操作SDK類別物件。

歐付寶官方SDK請見[全方位金流SDK技術文件下載](http://www.allpay.com.tw/Service/Appcntr_Dwnld?Anchor=AnchorDoc)


## 使用範例

###官方文件範例

官方SDK文件一般訂單範例如下：

```php
$oPayment = new AllInOne();
/* 服務參數 */
$oPayment->ServiceURL ="<<您要呼叫的服務位址>>";
$oPayment->HashKey = "<<AllPay提供給您的Hash Key>>";
$oPayment->HashIV = "<<AllPay提供給您的Hash IV>>";
$oPayment->MerchantID ="<<AllPay提供給您的特店編號>>";
/* 基本參數 */
$oPayment->Send['ReturnURL'] = "<<您要收到付款完成通知的伺服器端網址>>";
$oPayment->Send['ClientBackURL'] = "<<您要歐付寶返回按鈕導向的瀏覽器端網址>>";
$oPayment->Send['OrderResultURL'] = "<<您要收到付款完成通知的瀏覽器端網址>>";
$oPayment->Send['ChoosePayment'] = PaymentMethod::ALL;
// blah blah
array_push($oPayment->Send['Items'], array('Name' => "<<產品C>>", 'Price' => (int)"<<單價>>",
'Currency' => "<<幣別>>", 'Quantity' => (int) "<<數量>>", 'URL' => "<<產品說明位址>>"));

/* 產生訂單 */
$oPayment->CheckOut();
```

使用allpay-4-laravel，程式碼這樣寫即可：

```php
Allpay::instance()->Send['ReturnURL'] = "<<您要收到付款完成通知的伺服器端網址>>";
Allpay::instance()->Send['ClientBackURL'] = "<<您要歐付寶返回按鈕導向的瀏覽器端網址>>";
Allpay::instance()->Send['OrderResultURL'] = "<<您要收到付款完成通知的瀏覽器端網址>>";
Allpay::instance()->Send['ChoosePayment'] = PaymentMethod::ALL;
// blah blah
array_push(Allpay::instance()->Send['Items'], array('Name' => "<<產品C>>", 'Price' => (int)"<<單價>>",
'Currency' => "<<幣別>>", 'Quantity' => (int) "<<數量>>", 'URL' => "<<產品說明位址>>"));

/* 產生訂單 */
Allpay::instance()->CheckOut();

```

## 進階用法

若您覺得``Allpay::instance()``字很多，可以使用縮寫``Allpay::i()``。
