<?php

/**
 * 付款方式。
 */
abstract class PaymentMethod {

    /**
     * 不指定付款方式。
     */
    const ALL = 'ALL';

    /**
     * 信用卡付費。
     */
    const Credit = 'Credit';

    /**
     * 網路 ATM。
     */
    const WebATM = 'WebATM';

    /**
     * 自動櫃員機。
     */
    const ATM = 'ATM';

    /**
     * 超商代碼。
     */
    const CVS = 'CVS';

    /**
     * 超商條碼。
     */
    const BARCODE = 'BARCODE';

    /**
     * 支付寶。
     */
    const Alipay = 'Alipay';

    /**
     * 財付通。
     */
    const Tenpay = 'Tenpay';

    /**
     * 儲值消費。
     */
    const TopUpUsed = 'TopUpUsed';

}

/**
 * 付款方式子項目。
 */
abstract class PaymentMethodItem {

    /**
     * 不指定。
     */
    const None = '';
    // WebATM 類(001~100)
    /**
     * 台新銀行。
     */
    const WebATM_TAISHIN = 'TAISHIN';

    /**
     * 玉山銀行。
     */
    const WebATM_ESUN = 'ESUN';

    /**
     * 華南銀行。
     */
    const WebATM_HUANAN = 'HUANAN';

    /**
     * 台灣銀行。
     */
    const WebATM_BOT = 'BOT';

    /**
     * 台北富邦。
     */
    const WebATM_FUBON = 'FUBON';

    /**
     * 中國信託。
     */
    const WebATM_CHINATRUST = 'CHINATRUST';

    /**
     * 第一銀行。
     */
    const WebATM_FIRST = 'FIRST';

    /**
     * 國泰世華。
     */
    const WebATM_CATHAY = 'CATHAY';

    /**
     * 兆豐銀行。
     */
    const WebATM_MEGA = 'MEGA';

    /**
     * 元大銀行。
     */
    const WebATM_YUANTA = 'YUANTA';

    /**
     * 土地銀行。
     */
    const WebATM_LAND = 'LAND';
    // ATM 類(101~200)
    /**
     * 台新銀行。
     */
    const ATM_TAISHIN = 'TAISHIN';

    /**
     * 玉山銀行。
     */
    const ATM_ESUN = 'ESUN';

    /**
     * 華南銀行。
     */
    const ATM_HUANAN = 'HUANAN';

    /**
     * 台灣銀行。
     */
    const ATM_BOT = 'BOT';

    /**
     * 台北富邦。
     */
    const ATM_FUBON = 'FUBON';

    /**
     * 中國信託。
     */
    const ATM_CHINATRUST = 'CHINATRUST';

    /**
     * 第一銀行。
     */
    const ATM_FIRST = 'FIRST';
    // 超商類(201~300)
    /**
     * 超商代碼繳款。
     */
    const CVS = 'CVS';

    /**
     * OK超商代碼繳款。
     */
    const CVS_OK = 'OK';

    /**
     * 全家超商代碼繳款。
     */
    const CVS_FAMILY = 'FAMILY';

    /**
     * 萊爾富超商代碼繳款。
     */
    const CVS_HILIFE = 'HILIFE';

    /**
     * 7-11 ibon代碼繳款。
     */
    const CVS_IBON = 'IBON';
    // 其他第三方支付類(301~400)
    /**
     * 支付寶。
     */
    const Alipay = 'Alipay';

    /**
     * 財付通。
     */
    const Tenpay = 'Tenpay';
    // 儲值/餘額消費類(401~500)
    /**
     * 儲值/餘額消費(歐付寶)
     */
    const TopUpUsed_AllPay = 'AllPay';

    /**
     * 儲值/餘額消費(玉山)
     */
    const TopUpUsed_ESUN = 'ESUN';
    // 其他類(901~999)
    /**
     * 超商條碼繳款。
     */
    const BARCODE = 'BARCODE';

    /**
     * 信用卡(MasterCard/JCB/VISA)。
     */
    const Credit = 'Credit';

    /**
     * 貨到付款。
     */
    const COD = 'COD';

}

/**
 * 額外付款資訊。
 */
abstract class ExtraPaymentInfo {

    /**
     * 需要額外付款資訊。
     */
    const Yes = 'Y';

    /**
     * 不需要額外付款資訊。
     */
    const No = 'N';

}

/**
 * 額外付款資訊。
 */
abstract class DeviceType {

    /**
     * 桌機版付費頁面。
     */
    const PC = 'P';

    /**
     * 行動裝置版付費頁面。
     */
    const Mobile = 'M';

}

/**
 * 信用卡訂單處理動作資訊。
 */
abstract class ActionType {

    /**
     * 關帳
     */
    const C = 'C';

    /**
     * 退刷
     */
    const R = 'R';

    /**
     * 取消
     */
    const E = 'E';

    /**
     * 放棄
     */
    const N = 'N';

}

abstract class PeriodType {

    /**
     * 無
     */
    const None = '';

    /**
     * 年
     */
    const Year = 'Y';

    /**
     * 月
     */
    const Month = 'M';

    /**
     * 日
     */
    const Day = 'D';

}

/**
 * AllInOne short summary.
 *
 * AllInOne description.
 *
 * @version 1.0
 * @author andy.chao
 */
class AllInOne {

    public $ServiceURL = 'ServiceURL';
    public $ServiceMethod = 'ServiceMethod';
    public $HashKey = 'HashKey';
    public $HashIV = 'HashIV';
    public $MerchantID = 'MerchantID';
    public $PaymentType = 'PaymentType';
    public $Send = 'Send';
    public $SendExtend = 'SendExtend';
    public $Query = 'Query';
    public $Action = 'Action';
    public $ChargeBack = 'ChargeBack';

    function __construct() {
        $this->AllInOne();
        $this->PaymentType = 'aio';
        $this->Send = array(
            "ReturnURL" => '',
            "ClientBackURL" => '',
            "OrderResultURL" => '',
            "MerchantTradeNo" => '',
            "MerchantTradeDate" => '',
            "PaymentType" => 'aio',
            "TotalAmount" => '',
            "TradeDesc" => '',
            "ChoosePayment" => PaymentMethod::ALL,
            "Remark" => '',
            "ChooseSubPayment" => PaymentMethodItem::None,
            "NeedExtraPaidInfo" => ExtraPaymentInfo::No,
            "DeviceSource" => DeviceType::PC,
            "IgnorePayment" => '',
            "Items" => array()
        );
        $this->SendExtend = array(
            // ATM 延伸參數。
            "ExpireDate" => 3,
            // CVS, BARCODE 延伸參數。
            "Desc_1" => '', "Desc_2" => '', "Desc_3" => '', "Desc_4" => '',
            // ATM, CVS, BARCODE 延伸參數。
            "ClientRedirectURL" => '',
            // Alipay 延伸參數。
            "Email" => '', "PhoneNo" => '', "UserName" => '',
            // Tenpay 延伸參數。
            "ExpireTime" => '',
            // Credit 分期延伸參數。
            "CreditInstallment" => 0, "InstallmentAmount" => 0, "Redeem" => FALSE, "UnionPay" => FALSE,
            // Credit 定期定額延伸參數。
            "PeriodAmount" => '', "PeriodType" => '', "Frequency" => '', "ExecTimes" => '',
            // 回傳網址的延伸參數。
            "PaymentInfoURL" => '', "PeriodReturnURL" => ''
        );
        $this->Query = array(
            'MerchantTradeNo' => '', 'TimeStamp' => ''
        );
        $this->Action = Array(
            'MerchantTradeNo' => '', 'TradeNo' => '', 'Action' => ActionType::C, 'TotalAmount' => 0
        );
        $this->ChargeBack = Array(
            'MerchantTradeNo' => '', 'TradeNo' => '', 'ChargeBackTotalAmount' => 0, 'Remark' => ''
        );
    }

    function AllInOne() {
        
    }

    function CheckOut($target = "_self") {
        $szHtml = $this->CheckOutString(null, $target);

        print $szHtml;

        exit();
        die();
        flush();

        return;
    }

    function CheckOutString($paymentButton, $target = "_self") {
        // 變數宣告。
        $arErrors = array();
        $szHtml = '';
        $arParameters = null;

        $szItemName = '';
        $szAlipayItemName = '';
        $szAlipayItemCounts = '';
        $szAlipayItemPrice = '';
        // 檢查資料。
        if (strlen($this->ServiceURL) == 0) {
            array_push($arErrors, 'ServiceURL is required.');
        }
        if (strlen($this->ServiceURL) > 200) {
            array_push($arErrors, 'ServiceURL max langth as 200.');
        }
        if (strlen($this->HashKey) == 0) {
            array_push($arErrors, 'HashKey is required.');
        }
        if (strlen($this->HashIV) == 0) {
            array_push($arErrors, 'HashIV is required.');
        }
        if (strlen($this->MerchantID) == 0) {
            array_push($arErrors, 'MerchantID is required.');
        }
        if (strlen($this->MerchantID) > 10) {
            array_push($arErrors, 'MerchantID max langth as 10.');
        }

        if (strlen($this->Send['ReturnURL']) == 0) {
            array_push($arErrors, 'ReturnURL is required.');
        }
        if (strlen($this->Send['ClientBackURL']) > 200) {
            array_push($arErrors, 'ClientBackURL max langth as 10.');
        }
        if (strlen($this->Send['OrderResultURL']) > 200) {
            array_push($arErrors, 'OrderResultURL max langth as 10.');
        }

        if (strlen($this->Send['MerchantTradeNo']) == 0) {
            array_push($arErrors, 'MerchantTradeNo is required.');
        }
        if (strlen($this->Send['MerchantTradeNo']) > 20) {
            array_push($arErrors, 'MerchantTradeNo max langth as 20.');
        }
        if (strlen($this->Send['MerchantTradeDate']) == 0) {
            array_push($arErrors, 'MerchantTradeDate is required.');
        }
        if (strlen($this->Send['TotalAmount']) == 0) {
            array_push($arErrors, 'TotalAmount is required.');
        }
        if (strlen($this->Send['TradeDesc']) == 0) {
            array_push($arErrors, 'TradeDesc is required.');
        }
        if (strlen($this->Send['TradeDesc']) > 200) {
            array_push($arErrors, 'TradeDesc max langth as 200.');
        }
        if (strlen($this->Send['ChoosePayment']) == 0) {
            array_push($arErrors, 'ChoosePayment is required.');
        }
        if (strlen($this->Send['NeedExtraPaidInfo']) == 0) {
            array_push($arErrors, 'NeedExtraPaidInfo is required.');
        }
        if (strlen($this->Send['DeviceSource']) == 0) {
            array_push($arErrors, 'DeviceSource is required.');
        }
        if (sizeof($this->Send['Items']) == 0) {
            array_push($arErrors, 'Items is required.');
        }
        // 檢查 Alipay 條件。
        if ($this->Send['ChoosePayment'] == PaymentMethod::Alipay) {
            if (strlen($this->SendExtend['Email']) == 0) {
                array_push($arErrors, "Email is required.");
            }
            if (strlen($this->SendExtend['Email']) > 200) {
                array_push($arErrors, "Email max langth as 200.");
            }
            if (strlen($this->SendExtend['PhoneNo']) == 0) {
                array_push($arErrors, "PhoneNo is required.");
            }
            if (strlen($this->SendExtend['PhoneNo']) > 20) {
                array_push($arErrors, "PhoneNo max langth as 20.");
            }
            if (strlen($this->SendExtend['UserName']) == 0) {
                array_push($arErrors, "UserName is required.");
            }
            if (strlen($this->SendExtend['UserName']) > 20) {
                array_push($arErrors, "UserName max langth as 20.");
            }
        }
        // 檢查產品名稱。
        if (sizeof($this->Send['Items']) > 0) {
            foreach ($this->Send['Items'] as $keys => $value) {
                $szItemName .= vsprintf('#%s %d %s x %u', $this->Send['Items'][$keys]);
                $szAlipayItemName .= sprintf('#%s', $this->Send['Items'][$keys]['Name']);
                $szAlipayItemCounts .= sprintf('#%u', $this->Send['Items'][$keys]['Quantity']);
                $szAlipayItemPrice .= sprintf('#%d', $this->Send['Items'][$keys]['Price']);

                if (!array_key_exists('ItemURL', $this->Send)) {
                    $this->Send['ItemURL'] = $this->Send['Items'][$keys]['URL'];
                }
            }

            if (strlen($szItemName) > 0) {
                $szItemName = mb_substr($szItemName, 1, 200);
            }
            if (strlen($szAlipayItemName) > 0) {
                $szAlipayItemName = mb_substr($szAlipayItemName, 1, 200);
            }
            if (strlen($szAlipayItemCounts) > 0) {
                $szAlipayItemCounts = mb_substr($szAlipayItemCounts, 1, 100);
            }
            if (strlen($szAlipayItemPrice) > 0) {
                $szAlipayItemPrice = mb_substr($szAlipayItemPrice, 1, 20);
            }
        } else {
            array_push($arErrors, "Goods information not found.");
        }
        // 輸出表單字串。
        if (sizeof($arErrors) == 0) {
            $arParameters = array('MerchantID' => $this->MerchantID, 'PaymentType' => $this->PaymentType, 'ItemName' => $szItemName, 'ItemURL' => $this->Send['ItemURL']);
            $arParameters = array_merge($arParameters, $this->Send);
            $arParameters = array_merge($arParameters, $this->SendExtend);
            // 整理全功能參數。
            if ($this->Send['ChoosePayment'] == PaymentMethod::ALL) {
                unset($arParameters['CreditInstallment']);
                unset($arParameters['ExecTimes']);
                unset($arParameters['Frequency']);
                unset($arParameters['InstallmentAmount']);
                unset($arParameters['PeriodAmount']);
                unset($arParameters['PeriodReturnURL']);
                unset($arParameters['PeriodType']);
                unset($arParameters['Redeem']);
                unset($arParameters['UnionPay']);

                if (!$this->Send['IgnorePayment']) { unset($arParameters['IgnorePayment']); }
                if (!$this->SendExtend['ClientRedirectURL']) { unset($arParameters['ClientRedirectURL']); }
            }
            // 整理 Alipay 參數。
            if ($this->Send['ChoosePayment'] == PaymentMethod::Alipay) {
                $arParameters = array_merge($arParameters, array(
                    'AlipayItemName' => $szAlipayItemName,
                    'AlipayItemCounts' => $szAlipayItemCounts,
                    'AlipayItemPrice' => $szAlipayItemPrice
                ));

                unset($arParameters['CreditInstallment']);
                unset($arParameters['Desc_1']);
                unset($arParameters['Desc_2']);
                unset($arParameters['Desc_3']);
                unset($arParameters['Desc_4']);
                unset($arParameters['ExecTimes']);
                unset($arParameters['ExpireDate']);
                unset($arParameters['ExpireTime']);
                unset($arParameters['Frequency']);
                unset($arParameters['InstallmentAmount']);
                unset($arParameters['PaymentInfoURL']);
                unset($arParameters['PeriodAmount']);
                unset($arParameters['PeriodReturnURL']);
                unset($arParameters['PeriodType']);
                unset($arParameters['Redeem']);
                unset($arParameters['UnionPay']);

                unset($arParameters['IgnorePayment']);
                unset($arParameters['ClientRedirectURL']);
            }
            // 整理 Tenpay 參數。
            if ($this->Send['ChoosePayment'] == PaymentMethod::Tenpay) {
                unset($arParameters['CreditInstallment']);
                unset($arParameters['Desc_1']);
                unset($arParameters['Desc_2']);
                unset($arParameters['Desc_3']);
                unset($arParameters['Desc_4']);
                unset($arParameters['Email']);
                unset($arParameters['ExecTimes']);
                unset($arParameters['ExpireDate']);
                unset($arParameters['Frequency']);
                unset($arParameters['InstallmentAmount']);
                unset($arParameters['PaymentInfoURL']);
                unset($arParameters['PeriodAmount']);
                unset($arParameters['PeriodReturnURL']);
                unset($arParameters['PeriodType']);
                unset($arParameters['PhoneNo']);
                unset($arParameters['Redeem']);
                unset($arParameters['UnionPay']);
                unset($arParameters['UserName']);

                unset($arParameters['IgnorePayment']);
                unset($arParameters['ClientRedirectURL']);
            }
            // 整理 ATM 參數。
            if ($this->Send['ChoosePayment'] == PaymentMethod::ATM) {
                unset($arParameters['CreditInstallment']);
                unset($arParameters['Desc_1']);
                unset($arParameters['Desc_2']);
                unset($arParameters['Desc_3']);
                unset($arParameters['Desc_4']);
                unset($arParameters['Email']);
                unset($arParameters['ExecTimes']);
                unset($arParameters['ExpireTime']);
                unset($arParameters['Frequency']);
                unset($arParameters['InstallmentAmount']);
                unset($arParameters['PeriodAmount']);
                unset($arParameters['PeriodReturnURL']);
                unset($arParameters['PeriodType']);
                unset($arParameters['PhoneNo']);
                unset($arParameters['Redeem']);
                unset($arParameters['UnionPay']);
                unset($arParameters['UserName']);

                unset($arParameters['IgnorePayment']);
                if (!$this->SendExtend['ClientRedirectURL']) { unset($arParameters['ClientRedirectURL']); }
            }
            // 整理 BARCODE OR CVS 參數。
            if ($this->Send['ChoosePayment'] == PaymentMethod::BARCODE || $this->Send['ChoosePayment'] == PaymentMethod::CVS) {
                unset($arParameters['CreditInstallment']);
                unset($arParameters['Email']);
                unset($arParameters['ExecTimes']);
                unset($arParameters['ExpireDate']);
                unset($arParameters['ExpireTime']);
                unset($arParameters['Frequency']);
                unset($arParameters['InstallmentAmount']);
                unset($arParameters['PeriodAmount']);
                unset($arParameters['PeriodReturnURL']);
                unset($arParameters['PeriodType']);
                unset($arParameters['PhoneNo']);
                unset($arParameters['Redeem']);
                unset($arParameters['UnionPay']);
                unset($arParameters['UserName']);

                unset($arParameters['IgnorePayment']);
                if (!$this->SendExtend['ClientRedirectURL']) { unset($arParameters['ClientRedirectURL']); }
            }
            // 整理全功能、WebATM OR TopUpUsed 參數。
            if ($this->Send['ChoosePayment'] == PaymentMethod::WebATM || $this->Send['ChoosePayment'] == PaymentMethod::TopUpUsed) {
                unset($arParameters['CreditInstallment']);
                unset($arParameters['Desc_1']);
                unset($arParameters['Desc_2']);
                unset($arParameters['Desc_3']);
                unset($arParameters['Desc_4']);
                unset($arParameters['Email']);
                unset($arParameters['ExecTimes']);
                unset($arParameters['ExpireDate']);
                unset($arParameters['ExpireTime']);
                unset($arParameters['Frequency']);
                unset($arParameters['InstallmentAmount']);
                unset($arParameters['PaymentInfoURL']);
                unset($arParameters['PeriodAmount']);
                unset($arParameters['PeriodReturnURL']);
                unset($arParameters['PeriodType']);
                unset($arParameters['PhoneNo']);
                unset($arParameters['Redeem']);
                unset($arParameters['UnionPay']);
                unset($arParameters['UserName']);

                unset($arParameters['IgnorePayment']);
                unset($arParameters['ClientRedirectURL']);
            }
            // 整理 Credit 參數。
            if ($this->Send['ChoosePayment'] == PaymentMethod::Credit) {
                // Credit 分期。
                $arParameters['Redeem'] = ($arParameters['Redeem'] ? 'Y' : '');
                $arParameters['UnionPay'] = ($arParameters['UnionPay'] ? 1 : 0);

                unset($arParameters['Desc_1']);
                unset($arParameters['Desc_2']);
                unset($arParameters['Desc_3']);
                unset($arParameters['Desc_4']);
                unset($arParameters['Email']);
                unset($arParameters['ExpireDate']);
                unset($arParameters['ExpireTime']);
                unset($arParameters['PaymentInfoURL']);
                unset($arParameters['PhoneNo']);
                unset($arParameters['UserName']);

                unset($arParameters['IgnorePayment']);
                unset($arParameters['ClientRedirectURL']);
            }

            unset($arParameters['Items']);
            ksort($arParameters);

            $szCheckMacValue = "HashKey=$this->HashKey";
            foreach ($arParameters as $key => $value) {
                $szCheckMacValue .= "&$key=$value";
            }
            $szCheckMacValue .= "&HashIV=$this->HashIV";
            $szCheckMacValue = strtolower(urlencode($szCheckMacValue));
            // 取代為與 dotNet 相符的字元
            $szCheckMacValue = str_replace('%2d', '-', $szCheckMacValue);
            $szCheckMacValue = str_replace('%5f', '_', $szCheckMacValue);
            $szCheckMacValue = str_replace('%2e', '.', $szCheckMacValue);
            $szCheckMacValue = str_replace('%21', '!', $szCheckMacValue);
            $szCheckMacValue = str_replace('%2a', '*', $szCheckMacValue);
            $szCheckMacValue = str_replace('%28', '(', $szCheckMacValue);
            $szCheckMacValue = str_replace('%29', ')', $szCheckMacValue);
            // Customize for Magento
            $szCheckMacValue = str_replace('%3f___sid%3d' . session_id(), '', $szCheckMacValue);
            $szCheckMacValue = str_replace('%3f___sid%3du', '', $szCheckMacValue);
            $szCheckMacValue = str_replace('%3f___sid%3ds', '', $szCheckMacValue);
            // MD5 編碼
            $szCheckMacValue = md5($szCheckMacValue);

            $szHtml = '<div style="text-align:center;" ><form id="__allpayForm" method="post" target="' . $target . '" action="' . $this->ServiceURL . '">';
            foreach ($arParameters as $keys => $value) {
                $szHtml .="<input type='hidden' name='$keys' value='$value' />";
            }
            $szHtml .= '<input type="hidden" name="CheckMacValue" value="' . $szCheckMacValue . '" />';
            // 手動或自動送出表單。
            if (!isset($paymentButton)) {
                $szHtml .= '<script type="text/javascript">document.getElementById("__allpayForm").submit();</script>';
            } else {
                $szHtml .= '<input type="submit" id="__paymentButton" value="' . $paymentButton . '" />';
            }
            $szHtml .= '</form></div>';
        }

        if (sizeof($arErrors) > 0) {
            throw new Exception(join('- ', $arErrors));
        }

        return $szHtml;
    }

    function CheckOutFeedback() {
        // 變數宣告。
        $arErrors = array();
        $arParameters = array();
        $arFeedback = array();
        $szCheckMacValue = '';
        // 重新整理回傳參數。
        foreach ($_POST as $keys => $value) {
            if ($keys != 'CheckMacValue') {
                if ($keys == 'PaymentType') {
                    $value = str_replace('_CVS', '', $value);
                    $value = str_replace('_BARCODE', '', $value);
                    $value = str_replace('_Alipay', '', $value);
                    $value = str_replace('_Tenpay', '', $value);
                    $value = str_replace('_CreditCard', '', $value);
                }
                if ($keys == 'PeriodType') {
                    $value = str_replace('Y', 'Year', $value);
                    $value = str_replace('M', 'Month', $value);
                    $value = str_replace('D', 'Day', $value);
                }
                $arFeedback[$keys] = $value;
            } else {
                $szCheckMacValue = $value;
            }
        }
        // 回傳參數鍵值轉小寫。
        foreach ($_POST as $keys => $value) {
            $arParameters[strtolower($keys)] = $value;
        }
        unset($arParameters['checkmacvalue']);
        ksort($arParameters);
        // 驗證檢查碼。
        if (sizeof($arFeedback) > 0) {
            $szConfirmMacValue = "HashKey=$this->HashKey";
            foreach ($arParameters as $key => $value) {
                $szConfirmMacValue .= "&$key=$value";
            }
            $szConfirmMacValue .= "&HashIV=$this->HashIV";
            $szConfirmMacValue = strtolower(urlencode($szConfirmMacValue));
            // 取代為與 dotNet 相符的字元
            $szConfirmMacValue = str_replace('%2d', '-', $szConfirmMacValue);
            $szConfirmMacValue = str_replace('%5f', '_', $szConfirmMacValue);
            $szConfirmMacValue = str_replace('%2e', '.', $szConfirmMacValue);
            $szConfirmMacValue = str_replace('%21', '!', $szConfirmMacValue);
            $szConfirmMacValue = str_replace('%2a', '*', $szConfirmMacValue);
            $szConfirmMacValue = str_replace('%28', '(', $szConfirmMacValue);
            $szConfirmMacValue = str_replace('%29', ')', $szConfirmMacValue);
            // MD5 編碼
            $szConfirmMacValue = md5($szConfirmMacValue);

            if ($szCheckMacValue != strtoupper($szConfirmMacValue)) {
                array_push($arErrors, 'CheckMacValue verify fail.');
            }
        }

        if (sizeof($arErrors) > 0) {
            throw new Exception(join('- ', $arErrors));
        }

        return $arFeedback;
    }

    function QueryTradeInfo() {
        // 變數宣告。
        $arErrors = array();
        $this->Query['TimeStamp'] = time();
        $arFeedback = array();
        $arConfirmArgs = array();
        // 檢查資料。
        if (strlen($this->ServiceURL) == 0) {
            array_push($arErrors, 'ServiceURL is required.');
        }
        if (strlen($this->ServiceURL) > 200) {
            array_push($arErrors, 'ServiceURL max langth as 200.');
        }
        if (strlen($this->HashKey) == 0) {
            array_push($arErrors, 'HashKey is required.');
        }
        if (strlen($this->HashIV) == 0) {
            array_push($arErrors, 'HashIV is required.');
        }
        if (strlen($this->MerchantID) == 0) {
            array_push($arErrors, 'MerchantID is required.');
        }
        if (strlen($this->MerchantID) > 10) {
            array_push($arErrors, 'MerchantID max langth as 10.');
        }

        if (strlen($this->Query['MerchantTradeNo']) == 0) {
            array_push($arErrors, 'MerchantTradeNo is required.');
        }
        if (strlen($this->Query['MerchantTradeNo']) > 20) {
            array_push($arErrors, 'MerchantTradeNo max langth as 20.');
        }
        if (strlen($this->Query['TimeStamp']) == 0) {
            array_push($arErrors, 'TimeStamp is required.');
        }
        // 呼叫查詢。
        if (sizeof($arErrors) == 0) {
            $arParameters = array("MerchantID" => $this->MerchantID);
            $arParameters = array_merge($arParameters, $this->Query);
            // 資料排序。
            ksort($arParameters);
            // 產生檢查碼。
            $szCheckMacValue = "HashKey=$this->HashKey";
            foreach ($arParameters as $key => $value) {
                $szCheckMacValue .= "&$key=$value";
            }
            $szCheckMacValue .= "&HashIV=$this->HashIV";
            $szCheckMacValue = strtolower(urlencode($szCheckMacValue));
            // 取代為與 dotNet 相符的字元
            $szCheckMacValue = str_replace('%2d', '-', $szCheckMacValue);
            $szCheckMacValue = str_replace('%5f', '_', $szCheckMacValue);
            $szCheckMacValue = str_replace('%2e', '.', $szCheckMacValue);
            $szCheckMacValue = str_replace('%21', '!', $szCheckMacValue);
            $szCheckMacValue = str_replace('%2a', '*', $szCheckMacValue);
            $szCheckMacValue = str_replace('%28', '(', $szCheckMacValue);
            $szCheckMacValue = str_replace('%29', ')', $szCheckMacValue);
            // Customize for Magento
            $szCheckMacValue = str_replace('%3f___sid%3d' . session_id(), '', $szCheckMacValue);
            $szCheckMacValue = str_replace('%3f___sid%3du', '', $szCheckMacValue);
            $szCheckMacValue = str_replace('%3f___sid%3ds', '', $szCheckMacValue);
            // MD5 編碼
            $szCheckMacValue = md5($szCheckMacValue);

            $arParameters["CheckMacValue"] = $szCheckMacValue;
            // 送出查詢並取回結果。
            $szResult = $this->ServerPost($arParameters);
            // 轉結果為陣列。
            parse_str($szResult, $arParameters);
            // 重新整理回傳參數。
            foreach ($arParameters as $keys => $value) {
                if ($keys == 'CheckMacValue') {
                    $szCheckMacValue = $value;
                } else {
                    $arFeedback[$keys] = $value;
                    $arConfirmArgs[strtolower($keys)] = $value;
                }
            }

            ksort($arConfirmArgs);
            // 驗證檢查碼。
            if (sizeof($arFeedback) > 0) {
                $szConfirmMacValue = "HashKey=$this->HashKey";
                foreach ($arConfirmArgs as $key => $value) {
                    $szConfirmMacValue .= "&$key=$value";
                }
                $szConfirmMacValue .= "&HashIV=$this->HashIV";
                $szConfirmMacValue = strtolower(urlencode($szConfirmMacValue));
                // 取代為與 dotNet 相符的字元
                $szConfirmMacValue = str_replace('%2d', '-', $szConfirmMacValue);
                $szConfirmMacValue = str_replace('%5f', '_', $szConfirmMacValue);
                $szConfirmMacValue = str_replace('%2e', '.', $szConfirmMacValue);
                $szConfirmMacValue = str_replace('%21', '!', $szConfirmMacValue);
                $szConfirmMacValue = str_replace('%2a', '*', $szConfirmMacValue);
                $szConfirmMacValue = str_replace('%28', '(', $szConfirmMacValue);
                $szConfirmMacValue = str_replace('%29', ')', $szConfirmMacValue);
                // MD5 編碼
                $szConfirmMacValue = md5($szConfirmMacValue);

                if ($szCheckMacValue != strtoupper($szConfirmMacValue)) {
                    array_push($arErrors, 'CheckMacValue verify fail.');
                }
            }
        }

        if (sizeof($arErrors) > 0) {
            throw new Exception(join('- ', $arErrors));
        }

        return $arFeedback;
    }

    function DoAction() {
        // 變數宣告。
        $arErrors = array();
        $arFeedback = array();
        // 檢查資料。
        if (strlen($this->ServiceURL) == 0) {
            array_push($arErrors, 'ServiceURL is required.');
        }
        if (strlen($this->ServiceURL) > 200) {
            array_push($arErrors, 'ServiceURL max langth as 200.');
        }
        if (strlen($this->HashKey) == 0) {
            array_push($arErrors, 'HashKey is required.');
        }
        if (strlen($this->HashIV) == 0) {
            array_push($arErrors, 'HashIV is required.');
        }
        if (strlen($this->MerchantID) == 0) {
            array_push($arErrors, 'MerchantID is required.');
        }
        if (strlen($this->MerchantID) > 10) {
            array_push($arErrors, 'MerchantID max langth as 10.');
        }

        if (strlen($this->Action['MerchantTradeNo']) == 0) {
            array_push($arErrors, 'MerchantTradeNo is required.');
        }
        if (strlen($this->Action['MerchantTradeNo']) > 20) {
            array_push($arErrors, 'MerchantTradeNo max langth as 20.');
        }
        if (strlen($this->Action['TradeNo']) == 0) {
            array_push($arErrors, 'TradeNo is required.');
        }
        if (strlen($this->Action['TradeNo']) > 20) {
            array_push($arErrors, 'TradeNo max langth as 20.');
        }
        if (strlen($this->Action['Action']) == 0) {
            array_push($arErrors, 'Action is required.');
        }
        if (strlen($this->Action['Action']) > 1) {
            array_push($arErrors, 'Action max length as 1.');
        }
        if (strlen($this->Action['TotalAmount']) == 0) {
            array_push($arErrors, 'TotalAmount is required.');
        }
        // 呼叫信用卡訂單處理。
        if (sizeof($arErrors) == 0) {
            $arParameters = array("MerchantID" => $this->MerchantID);
            $arParameters = array_merge($arParameters, $this->Action);
            // 資料排序。
            ksort($arParameters);
            // 產生檢查碼。
            $szCheckMacValue = "HashKey=$this->HashKey";
            foreach ($arParameters as $key => $value) {
                $szCheckMacValue .= "&$key=$value";
            }
            $szCheckMacValue .= "&HashIV=$this->HashIV";
            $szCheckMacValue = strtolower(urlencode($szCheckMacValue));
            // 取代為與 dotNet 相符的字元
            $szCheckMacValue = str_replace('%2d', '-', $szCheckMacValue);
            $szCheckMacValue = str_replace('%5f', '_', $szCheckMacValue);
            $szCheckMacValue = str_replace('%2e', '.', $szCheckMacValue);
            $szCheckMacValue = str_replace('%21', '!', $szCheckMacValue);
            $szCheckMacValue = str_replace('%2a', '*', $szCheckMacValue);
            $szCheckMacValue = str_replace('%28', '(', $szCheckMacValue);
            $szCheckMacValue = str_replace('%29', ')', $szCheckMacValue);
            // Customize for Magento
            $szCheckMacValue = str_replace('%3f___sid%3d' . session_id(), '', $szCheckMacValue);
            $szCheckMacValue = str_replace('%3f___sid%3du', '', $szCheckMacValue);
            $szCheckMacValue = str_replace('%3f___sid%3ds', '', $szCheckMacValue);
            // MD5 編碼
            $szCheckMacValue = md5($szCheckMacValue);

            $arParameters["CheckMacValue"] = $szCheckMacValue;
            // 送出查詢並取回結果。
            $szResult = $this->ServerPost($arParameters);
            // 轉結果為陣列。
            parse_str($szResult, $arParameters);
            // 重新整理回傳參數。
            foreach ($arParameters as $keys => $value) {
                if ($keys == 'CheckMacValue') {
                    $szCheckMacValue = $value;
                } else {
                    $arFeedback[$keys] = $value;
                }
            }

            if (array_key_exists('RtnCode', $arFeedback) && $arFeedback['RtnCode'] != '1') {
                array_push($arErrors, sprintf('#%s: %s', array($arFeedback['RtnCode'], $arFeedback['RtnMsg'])));
            }
        }

        if (sizeof($arErrors) > 0) {
            throw new Exception(join('- ', $arErrors));
        }

        return $arFeedback;
    }

    function AioChargeback() {
        // 變數宣告。
        $arErrors = array();
        $arParameters = array("MerchantID" => $this->MerchantID);
        $arParameters = array_merge($arParameters, $this->ChargeBack);
        $arFeedback = array();
        // 檢查資料。
        if (strlen($this->ServiceURL) == 0) {
            array_push($arErrors, 'ServiceURL is required.');
        }
        if (strlen($this->ServiceURL) > 200) {
            array_push($arErrors, 'ServiceURL max langth as 200.');
        }
        if (strlen($this->HashKey) == 0) {
            array_push($arErrors, 'HashKey is required.');
        }
        if (strlen($this->HashIV) == 0) {
            array_push($arErrors, 'HashIV is required.');
        }
        if (strlen($this->MerchantID) == 0) {
            array_push($arErrors, 'MerchantID is required.');
        }
        if (strlen($this->MerchantID) > 10) {
            array_push($arErrors, 'MerchantID max langth as 10.');
        }

        if (strlen($this->ChargeBack['MerchantTradeNo']) == 0) {
            array_push($arErrors, 'MerchantTradeNo is required.');
        }
        if (strlen($this->ChargeBack['MerchantTradeNo']) > 20) {
            array_push($arErrors, 'MerchantTradeNo max langth as 20.');
        }
        if (strlen($this->ChargeBack['TradeNo']) == 0) {
            array_push($arErrors, 'TradeNo is required.');
        }
        if (strlen($this->ChargeBack['TradeNo']) > 20) {
            array_push($arErrors, 'TradeNo max langth as 20.');
        }
        if (strlen($this->ChargeBack['ChargeBackTotalAmount']) == 0) {
            array_push($arErrors, 'ChargeBackTotalAmount is required.');
        }
        if (strlen($this->ChargeBack['Remark']) > 200) {
            array_push($arErrors, 'Remark max length as 200.');
        }
        // 資料排序。
        ksort($arParameters);
        // 產生檢查碼。
        $szCheckMacValue = "HashKey=$this->HashKey";
        foreach ($arParameters as $key => $value) {
            $szCheckMacValue .= "&$key=$value";
        }
        $szCheckMacValue .= "&HashIV=$this->HashIV";
        $szCheckMacValue = strtolower(urlencode($szCheckMacValue));
        // 取代為與 dotNet 相符的字元
        $szCheckMacValue = str_replace('%2d', '-', $szCheckMacValue);
        $szCheckMacValue = str_replace('%5f', '_', $szCheckMacValue);
        $szCheckMacValue = str_replace('%2e', '.', $szCheckMacValue);
        $szCheckMacValue = str_replace('%21', '!', $szCheckMacValue);
        $szCheckMacValue = str_replace('%2a', '*', $szCheckMacValue);
        $szCheckMacValue = str_replace('%28', '(', $szCheckMacValue);
        $szCheckMacValue = str_replace('%29', ')', $szCheckMacValue);
        // Customize for Magento
        $szCheckMacValue = str_replace('%3f___sid%3d' . session_id(), '', $szCheckMacValue);
        $szCheckMacValue = str_replace('%3f___sid%3du', '', $szCheckMacValue);
        $szCheckMacValue = str_replace('%3f___sid%3ds', '', $szCheckMacValue);
        // MD5 編碼
        $szCheckMacValue = md5($szCheckMacValue);

        $arParameters["CheckMacValue"] = $szCheckMacValue;
        // 送出查詢並取回結果。
        $szResult = $this->ServerPost($arParameters);
        // 檢查結果資料。
        if ($szResult == '1|OK') {
            $arFeedback['RtnCode'] = '1';
            $arFeedback['RtnMsg'] = 'OK';
        } else {
            array_push($arErrors, str_replace('-', ': ', $szResult));
        }

        if (sizeof($arErrors) > 0) {
            throw new Exception(join('- ', $arErrors));
        }

        return $arFeedback;
    }

    private function ServerPost($parameters) {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $this->ServiceURL);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($parameters));
        $rs = curl_exec($ch);

        curl_close($ch);

        return $rs;
    }

}
