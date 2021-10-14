<?php

/*
 * Add helper function
 */

if (!function_exists('fast2smsapi')) {

    /**
     * @param string $to
     * @param string $message
     * @param array $extra_params
     * @param array $headers
     * @return mixed
     */
    function fast2smsapi($to = null, $message = null, $extra_params = null, $headers = [])
    {
        $fast2smsapi = app('fast2smsapi');
        if (!(is_null($to) || is_null($message))) {
            return $fast2smsapi->sendMessage($to, $message, $extra_params, $headers);
        }
        return $fast2smsapi;
    }
}