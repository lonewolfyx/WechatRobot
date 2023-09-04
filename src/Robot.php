<?php
/**
 * Robot
 *
 * @author 骚气靓丽的仔仔 < 我就丶是逗比 >
 * @mail   olddrivero.king@qq.com
 */

declare( strict_types=1 );

namespace WechatRobot;

class Robot
{
    private string $key;

    /**
     * 发送消息
     *
     * @param array $content
     * @return bool|string
     */
    public function sendMessage(array $content)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://qyapi.weixin.qq.com/cgi-bin/webhook/send?key=' . $this->key,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($content),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }

    /**
     * 设置机器人 key
     *
     * @param string $key
     */
    public function setRobotKey(string $key)
    {
        $this->key = $key;
    }
}