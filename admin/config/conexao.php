<?
   
$database="dbmy0056.whservidor.com"; // SERVIDOR E PORTA UTILIZADA   
$dbname="bichosdosu2"; // BASE DE DADOS 
$usuario="bichosdosu2"; // USU�RIO DO MYSQL
$dbsenha="B1chosDoSu1"; // SENHA DO MYSQL

$conexao=mysql_connect ($database, $usuario, $dbsenha);
if($conexao){
      if (mysql_select_db($dbname, $conexao)){ print "";
      }else{ print "N�o foi poss�vel selecionar o Banco de Dados"; }
}else{ print "Erro ao conectar o MySQL"; }
?>
