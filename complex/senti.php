<?php
      function detect_sentiment($string){
      $string = urlencode($string);
      $api_key ="f3ca769c5c79916d788db28d76844d";
      $url = 'https://api.paysify.com/sentiment?api_key='.$api_key.'&string='.$string.'';
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $result = curl_exec($ch);
      $response = json_decode($result,true);
      curl_close($ch);
     
      return $response;
      }
	  
      $string = "you are bad boy";
      $data = detect_sentiment($string);

      foreach( $data as $items)
        {
                    echo $items['state'] ;
         }

      echo "</pre>";
?>
