<?php

$caminho = "../../projeto/arquivos/";
$img = glob($caminho."*.{jpg,png,gif}", GLOB_BRACE);
$contador = count($img);



foreach($img as $img){
    echo ("<div class='col-6 col-sm-4' col-md-4 col-lg-3 col-xl-3>
            <div class='card'>
                <img class='card-img-top' height='180' src='".$img."' alt='Card image cap'>
                <div class='card-body'>
                    <h5 class='card-title'>Nome da Empresa</h5>
                    <p class='card-text'>Descrição da vaga, requisitos, benefícios, etc...</p>
                    <a href='#' class='btn btn-primary'>Enviar Currículo</a>
                    <form id='form-del' method='post' action='' enctype='multipart/form-data'>
                     <input type='hidden' name='arq' id='arq' value='$img'></input>
                     <button id='btn-del' type='button' onclick='teste()' class='btn btn-outline-danger btn-sm'>DEL</button>
                    </form>
                </div>
            </div>
            </div>");

}

// echo "Estou aqui";
// echo '<a href=""><img width="120" src="'.$img.'" /></a>';


?>