<?php
    function getProducts($keywords) {
        // Replace whitespace so curl is happy
        $search = str_replace(' ', '%20', $keywords);
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://api.walmartlabs.com/v1/search?apiKey=m5ch8dt6d9965dh7tndage9w&query='$search'",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache"
          ),
        ));
        
        $jsonData = curl_exec($curl);
        $data = json_decode($jsonData, true);
        $items = $data['items'];
        
        return $items;
    }
?>