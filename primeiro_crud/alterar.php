<?php
    $id = filter_input(INPUT_GET, "id");
    $nome = filter_input(INPUT_GET, "nome");
    $telefone = filter_input(INPUT_GET, "telefone");

    $link = mysqli_connect("localhost", "root", "", "agenda_telefonica");


    if(!empty($nome) && !empty($telefone)){
    if($link) {
        $query = mysqli_query($link, "update contato set nome='$nome', telefone='$telefone' where id='$id';");
            if($query){
                header("Location: index.php");
            }else{
                die("Erro: ". mysqli_error($link));
            }
    }else{
        die("Erro: ". mysqli_error($link));
    }
}else {
    echo("Por favor insira nome e telefone.");
    die();
}
?>
