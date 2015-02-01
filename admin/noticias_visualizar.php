<?
session_start();
if (empty($_SESSION['usuario_id'])) {
 echo "Acesso negado!";
 exit;
}else{
include('config/conexao.php');
include('config/conf.php');

$usuario_id   = $_SESSION['usuario_id'];
$usuario_nome = $_SESSION['usuario_nome'];
}
?>
<?
// PEGA OS DADOS DO USUÁRIO

$query = "SELECT * FROM tbl_usuarios where id = '$usuario_id'";
$resultado = mysql_query($query); 
	$campo = mysql_fetch_array ($resultado);
	$usuario_nome = $campo ['nome'];

?>

</script>
<link href="css/style.css" rel="stylesheet" type="text/css">
<?=$icon?>
<script language="javascript" type="text/javascript" src="javascript/javascript.js"></script>
<body bgcolor="#FFFFFF">
<?

$id_noticia = $_GET['id_noticia'];
$query = "select * from tbl_noticias where id_noticia = '$id_noticia'";
$rs = mysql_query($query);
?>
<table width="100%" border="0" align="center" cellpadding="1" cellspacing="1" class="textoVerdanaPreto" bgcolor="#FFFFFF" bordercolor="#FFFFFF">
  <tr> 
    <td height="14" bgcolor="#FFFFFF" class="verdanaPretoBold"> 
      <div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><b> 
        <font color="#000000"> 
        <? 
while($row = mysql_fetch_array($rs)){

$id_categoria_noticia = $row['id_categoria_noticia'];
$titulo_noticia       = $row['titulo'];
$descricao            = $row['descricao'];
$destaque             = $row['destaque'];
$fotografo            = $row['fotografo'];
$legenda              = $row['legenda'];
$msg                  = $row['msg'];
$nome_arquivo         = $row['nome_arquivo'];
$data                 = $row['data'];
$status               = $row['status'];

}

$ativo = $status;
$data_publicacao = $data;

  ?>
        Not&iacute;cia Completa</font></b></font></div>
    </td>
  </tr>
  <tr> 
    <td> 
      <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#ffffff" class="textobold">
        <tr> 
          <td bgcolor="#FFFFFF"> 
            <table width="100%" border="0" cellpadding="2" cellspacing="2" class="textoVerdanaPreto" bgcolor="#FFFFFF">
              <tr bgcolor="#DADADA">
                <td bgcolor="#FFFFFF" height="20" ><b><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif">Data 
                  de Publica&ccedil;&atilde;o:</font></b> <font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
                  <?= $data_publicacao; ?>
                  </font></td>
              </tr>
              <tr bgcolor="#DADADA"> 
                <td bgcolor="#FFFFFF" height="20" > 
                  <div align="left"><b><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif">T&iacute;tulo:</font></b> 
                    <font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
                    <?= $titulo_noticia; ?>
                    </font><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
                    </font> </div>
                </td>
              </tr>
            </table>
            <table width="100%" border="0" cellpadding="2" cellspacing="2" class="textoVerdanaPreto" bgcolor="#FFFFFF">
              <tr bgcolor="#DADADA"> 
                <td bgcolor="#FFFFFF" > 
                  <div align="left"><b><font size="2" color="#000000" face="Verdana, Arial, Helvetica, sans-serif">Categoria:</font></b> 
                    <font size="2" color="#000000" face="Verdana, Arial, Helvetica, sans-serif"> 
                    <?
                  $query2 = "select categoria from tbl_categorias_noticias where id_categoria_noticia = '$id_categoria_noticia'";
                  $rs2 = mysql_query($query2);
                      while($row2 = mysql_fetch_array($rs2)){
					  if(isset($row2['categoria']))
                      $titulo_categoria_noticia     = $row2['categoria'];
                      }
 if(isset($titulo_categoria_noticia))
                  echo $titulo_categoria_noticia;

                  ?>
                    </font><font size="2" color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> 
                    </font> </div>
                </td>
              </tr>
              <tr bgcolor="#F5F5F5"> 
                <td bgcolor="#FFFFFF"> 
                  <div align="left"><b><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#000000">Descri&ccedil;&atilde;o:</font></b> 
                    <font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#000000"> 
                    <? echo $descricao; ?>
                    </font><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF"> 
                    </font> </div>
                </td>
              </tr>
            </table>
            <table width="100%" border="0" cellpadding="2" cellspacing="2" class="textoVerdanaPreto" bgcolor="#FFFFFF">
              <tr bgcolor="#DADADA"> 
                <td bgcolor="#FFFFFF" > 
                  <div align="left"><b><font size="2" color="#000000" face="Verdana, Arial, Helvetica, sans-serif">Mensagem: 
                    </font><font size="2" color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> 
                    </font></b></div>
                </td>
              </tr>
              <tr bgcolor="#F5F5F5">
                <td bgcolor="#FFFFFF"> 
                  <? echo $msg;?>
                </td>
              </tr>
              <tr bgcolor="#F5F5F5"> 
                <td bgcolor="#FFFFFF"> 
                  <div align="left"><b><font size="2" color="#000000" face="Verdana, Arial, Helvetica, sans-serif">SITUA&Ccedil;&Atilde;O:</font></b> 
                    <font size="2" color="RED" face="Verdana, Arial, Helvetica, sans-serif"> 
                    <? if ($ativo != '0'){ echo "Ativo";}else{echo "Inativo";} ?>
                    </font><font size="2" color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> 
                    </font> </div>
                </td>
              </tr>
            </table>
            <table width="100%" border="0" cellpadding="2" cellspacing="2" class="textoVerdanaPreto" bgcolor="#FFFFFF">
              <tr bgcolor="#F5F5F5"> 
                <td bgcolor="#FFFFFF"> 
                  <div align="left"><b><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#000000">Fonte:</font></b> 
                    <font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#000000"> 
                    <? echo $legenda; ?>
                    </font><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF"> 
                    </font> </div>
                </td>
              </tr>
            </table>
            <table width="100%" border="0" cellpadding="2" cellspacing="2" class="textoVerdanaPreto">
              <tr bgcolor="#DADADA"> 
                <td bgcolor="#FFFFFF" > 
                  <div align="center"><b><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif">Imagem</font></b></div>
                </td>
              </tr>
              <tr bgcolor="#F5F5F5"> 
                <td bgcolor="#FFFFFF"> 
                  <div align="center"> <img src="../imagens/noticias/<? if ($nome_arquivo != ""){echo $nome_arquivo;}else{ echo 'nao_disponivel.jpg';}?>"> 
                  </div>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr> 
          <td> 

          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr> 
    <td></td>
  </tr>
</table>
<p align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><b> 
  </b></font> </p>
<div align="center"></div>
