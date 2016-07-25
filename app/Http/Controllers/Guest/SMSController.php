<?php
/**
 * Created by IntelliJ IDEA.
 * User: phompang
 * Date: 7/18/2016 AD
 * Time: 4:03 PM
 */

namespace App\Http\Controllers\Guest;


class SMSController
{
    var $api_url   = 'http://www.thsms.com/api/rest';
    var $username  = "ITOPH";
    var $password  = "316517";

    public function sendSMS($from, $to, $code, $type) {
        $params['method']   = 'send';
        $params['username'] = $this->username;
        $params['password'] = $this->password;

        $params['from'] = $from;
        $params['to']   = $to;



        $message = "ลงทะเบียนสำเร็จ แจ้งรหัส " . $type . str_pad($code,4,"0",STR_PAD_LEFT) . " ที่จุดลงทะเบียน IT Openhouse 26 ส.ค. 59";

        $params['message'] = $message;

        if (is_null( $params['to']) || is_null( $params['message']))
        {
            return FALSE;
        }

        $result = $this->curl( $params);
        $xml = @simplexml_load_string( $result);
        if (!is_object($xml))
        {
            return array( FALSE, 'Respond error');
        } else {
            if ($xml->send->status == 'success')
            {
                return array( TRUE, $xml->send->uuid);
            } else {
                return array( FALSE, $xml->send->message);
            }
        }
    }

    private function curl( $params=array())
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->api_url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query( $params));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $response  = curl_exec($ch);
        $lastError = curl_error($ch);
        $lastReq = curl_getinfo($ch);
        curl_close($ch);

        return $response;
    }
}
