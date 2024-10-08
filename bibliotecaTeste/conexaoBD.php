<?php
   $dbHost = 'Localhost';
   $dbUsername = 'root';
   $dbPassword = '';
   $dbName = 'biblioteca_tcc';

   $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName );


   //verificando conexão com banco de dados
   
   // if ($conexao->connect_errno){
   //    echo "Erro";
   // }   

   // else{
   //    echo "Conexão Efetuada com Sucesso";
   // }

?>