<?php
// Importar as dependências:
    require_once("../classes/Frase.class.php");
// Especificar que é um arquivo json:
    header('Content-Type: application/json');
    
// Receber o nome do filme por get e retornar o resultado em json:

// Verificar se o "q" está setado
    if(isset($_GET["q"])) {
        // Fazer a busca:
        $f = new Frase();
        $f->filme = $_GET['q'];

        // Buscar no BD:
        $r = $f->BuscarPorNomeFilme();
        echo json_encode($r);
    } else {
        // Retornar um erro:

        $arr = [];
        echo json_encode($arr);
    }
?>