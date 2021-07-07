<?php
  session_start();
  require_once__DIR__. '/fb/autoload.php';
     $fb = new \fb\fb([
    'app_id' =>'375764237218249',
    'app_secret' => '8fba508c6e355b076de593d5a397d0eb', 
    'default_graph_version' =>'v11.0',
      ])
      $permissions =[];
      $helper = $fb->getRedirectLoginHelper();
      $accessToken = $helper->getAccessToken();

  if (isset($accessToken)){
    $url = curl -i -X GET \
 "https://graph.facebook.com/v11.0/me?fields=id%2Cname%2Cgender%2Cemail%2Cprofile_pic&access_token=EAAFVwW3g8ckBACTjXIdQhq8UAKSH8SYqjJS3CZAbNrgK1svZA34mUdvZCa7rfjPu0Mw5xuriBpIpZBxcjbnp7g54q96rMKDx1C9qdaqFsrN7q3mwxPCqWSl3V8Ye9JH4p9d7K1JL2pMa31gkavwP5BwhDq1sa6NHDUCN7mtHx4cZBGJyiklio1GZAqxR1gGt9BOT67ZB4UvinhYdvNuKJixU0yBalLhPnMZD"
    $headers = array("content-type: application/json");

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
    curl_setopt($ch, CURLOPT_URL,$URL);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
    curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);

    $st=curl_exec($ch);
    $result=json_decode($st,TRUE);
    echo $result['name'];
      } else {
   $loginUrl=$helper->getLoginUrl('http://',$permissions);
          }
  ?>