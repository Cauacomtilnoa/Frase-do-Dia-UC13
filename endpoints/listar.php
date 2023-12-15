<?php
// Especificar que é um arquivo json:
   header('Content-Type: application/json');
// Importar as dependências:
 require_once("../classes/Frase.class.php");


 // Instanciar um objeto do tipo frase:
 $f = new Frase();

// Verificar se aleatorio=1 ou listar todas:

    if(isset($_GET["aleatorio"]) && $_GET["aleatorio"] == 1){
        // Listar aleatório
        $r = $f->ListarAleatoria();
        echo json_encode($r);
    } else {
        // Listar tudo
        $r = $f->ListarTodas();
        echo json_encode($r);
    }
?>