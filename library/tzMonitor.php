<?php

/*
 * define check api interface methods
 */

namespace tz;

/**
 * Description of tzMonitor
 *
 * @author lgz
 */
class tzMonitor {
    public static function httpRequest($url, $data){
        $cp = curl_init($url);
        $options = array(CURLOPT_POST => 1,
                        CURLOPT_RETURNTRANSFER =>1,
                        CURLOPT_POSTFIELDS => http_build_query($data));
        curl_setopt_array($cp, $options);
        $result = curl_exec($cp);
        curl_close($cp);
        $result = json_decode($result, TRUE);
        return $result;
    }
}
