<?php

#cabeçalho
include 'header.php';

$pagina = $_GET['aaa'];

switch ($pagina) {

    case 'vendas': include 'views/vendas.php'; break;
    case 'contatos': include 'views/contacts.php'; break;
    default: include 'views/home.php'; 
    break;
}


echo "VAI CORINTHIANS";

#rodapé
include 'footer.php'; ?>

