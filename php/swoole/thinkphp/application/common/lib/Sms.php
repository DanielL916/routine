<?php

namespace app\common\lib;

use Yunpian\Sdk\YunpianClient;

ini_set("display_errors", "on");

require_once APP_PATH . '/../extend/yunpian-php-sdk/vendor/autoload.php';

class Sms
{
    static $API_KEY = '6c85e785699ed73a7ab135f7bf27c85b';

    public static function sendSms($phone_num, $code)
    {
        //初始化client,apikey作为所有请求的默认值
        $client = YunpianClient::create(static::$API_KEY);
        $param = [
            YunpianClient::MOBILE => $phone_num,
            YunpianClient::TEXT => '【PHP基础网】您的验证码是' . $code . '。如非本人操作，请忽略本短信。'
        ];
        return $client->sms()->single_send($param);
    }
}