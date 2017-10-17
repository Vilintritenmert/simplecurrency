<?php

class SimpleCurrency
{
    /**
    * Get List of currencies 
    */
    public function get() 
    {
        $api_url = 'http://api.fixer.io/latest?base=usd';
        $response = @file_get_contents($api_url);
        
        if(!$response) throw new Exception('Problem with connection');
        
        $decoded_response = json_decode($response, true);
        $currencies = $decoded_response['rates'];
        $currencies['USD']=(float)1;

        return $currencies;
    }
}
