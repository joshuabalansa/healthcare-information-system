<?php

class SMS
{

    /**
     * Send SMS function
     *
     * @param string $key
     * @param string $recepients
     * @param string $message
     * @param string $senderName
     * @param string $endpoint
     * @return void
     */
    public static function sendMessageNotification($key, $recepients, $message, $senderName, $endpoint)
    {

        $ch = curl_init();

        $parameters = array(
            'apikey' => $key,
            'number' => $recepients,
            'message' => $message,
            'sendername' => $senderName
        );
        curl_setopt($ch, CURLOPT_URL, $endpoint);

        curl_setopt($ch, CURLOPT_POST, 1);

        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($parameters));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $output = curl_exec($ch);

        curl_close($ch);
    }
}
