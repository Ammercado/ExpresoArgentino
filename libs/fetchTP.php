<?php
    /*define('JSON', 'https://script.google.com/macros/s/AKfycbzU3KFdvEG-1JVx7fZASkUCy09D80ROiY3UJ9t12-QquEIlbZI/exec');
    if ($data = @file_get_contents(JSON)) {
        $items = json_decode($data, true);
        $json_data = json_encode($items); 
        file_put_contents('libs/members.json', $json_data); 
    }*/


function getNews(){
    define('JSON', 'https://api.truckersmp.com/v2/vtc/11143/news');
    // leer JSON validamos si el fichero online e accesible y si no abrimos el json local
    if ($data = @file_get_contents(JSON)) {
    $items = json_decode($data, true);
    }
    //lista de items a recorrer
    $listaItems = $items["response"]["news"];

    //bucle para recorrer los elementos del array
    for ($i = 0; $i < count($listaItems); $i++) {
        $tmp_url = "https://truckersmp.com/vtc/11143/news/{$listaItems[$i]["id"]}";
        echo ' <div class="ts-item">
                    <div class="rating">
                        <h4>'.$listaItems[$i]["title"].'</h4>
                    </div>
                        <p class="long-details">'.$listaItems[$i]["content_summary"].'</p>
                    <div class="author-pic">
                        <a href="' .$tmp_url.'" target="_blank" class="primary-btn class-btn">Ver Noticia</a>
                    </div>
                </div>
            ';
    } //cerramos bucle
}

function getMembers(){
    define('M', 'https://script.google.com/macros/s/AKfycbzU3KFdvEG-1JVx7fZASkUCy09D80ROiY3UJ9t12-QquEIlbZI/exec');
// leer JSON validamos si el fichero online e accesible y si no abrimos el json local
if ($data = @file_get_contents(M)) {
  $items = json_decode($data, true);
}

//lista de items a recorrer
$listMembers = $items["user"];

//bucle para recorrer los elementos del array
for ($i = 0; $i < count($listMembers); $i++) {
    //$mp_url = "https://truckersmp.com/user/{$listMembers[$i]["tmp"]}";
    //$st_url = "https://steamcommunity.com/profiles/{$listMembers[$i]["steam"]}";
    if(strpos($listMembers[$i]["name"], '[EXP ARG]') !== false){
        echo '
        <div class="col-lg-3 col-sm-6 mix '.$listMembers[$i]["rol"].' workout">
            <div class="trainer-item">
                    <div class="ti-pic">
                        <img src="img/trainer/trainer-2.jpg" alt="">
                            <div class="ti-links">
                                <a href="' .$listMembers[$i]["tmp"].'" target="_blank"><i class="fa fa-truck"></i></a>
                                <a href="' .$listMembers[$i]["steam"].'" target="_blank"><i class="fa fa-steam"></i></a>
                            </div>
                            <div class="trainer-text">
                                <h5>'.$listMembers[$i]["name"].'</h5>
                            </div>
                    </div>
                </div>
        </div>
            ';
    }
    
}
}
?>
