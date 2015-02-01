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
	$usuario_nome = $campo ['nome']

?>

<HTML>

<HEAD>

<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
<script language="javascript" type="text/javascript" src="javascript.js"></script>

<script type="text/javascript">

   _editor_url = "htmlarea/";

   _editor_lang = "en";

</script>

<script type="text/javascript" src="htmlarea.js"></script>    

<SCRIPT src="javascript/jscripts.js"></SCRIPT>

<STYLE type=text/css>.titulos {

	FONT-SIZE: 16px; COLOR: #b09014; FONT-FAMILY: Arial, Helvetica, sans-serif

}

</STYLE>

<LINK href="../css/area-restrita.css" type=text/css 

rel=stylesheet>

<SCRIPT language=JavaScript type=text/JavaScript>

<!--

function MM_jumpMenu(targ,selObj,restore){ //v3.0

  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");

  if (restore) selObj.selectedIndex=0;

}

//-->

</SCRIPT>



<SCRIPT src="imagens/extranet/jscripts.js"></SCRIPT>


<META content="MSHTML 6.00.2800.1543" name=GENERATOR><title><?=$title_adm?></title></HEAD>
<?=$icon?>
<BODY bgColor=#6c6c7d leftMargin=0 topMargin=0 onload="HTMLArea.replaceAll()">

<form action="script_noticias.php?acao=editar" Method="post" enctype="multipart/form-data">
<TABLE cellSpacing=1 cellPadding=0 width=777 align=center bgColor=#000000 

border=0>

  <TBODY>

  <TR>

    <TD bgColor=#DADADA>

      <TABLE cellSpacing=0 cellPadding=0 width=775 border=0>

        <TBODY>

        <TR>

          <TD>

            <TABLE cellSpacing=0 cellPadding=0 width=775 border=0>

              <TBODY>

              <TR>

                  <TD width=12>&nbsp;</TD>
                  <TD vAlign=middle width=145 

                background=imagens/extranet/res_05.gif>
                    <div align="center"><a href="principal.php" target="_top"><?=$logo?></a></div>
                  </TD>
                  <TD vAlign=bottom width=76 

                background=imagens/extranet/res_05.gif>&nbsp;</TD>

                <TD>

                    <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                      <TBODY> 
                      <TR> 
                        <TD align=right 

                      background=imagens/extranet/res_05.gif height=36> 
                          <TABLE cellSpacing=0 cellPadding=0 width=518 border=0>
                            <TBODY> 
                            <TR> 
                              <TD class=top1><SPAN class=nome><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif" size="2">Olá</font> 
                                <font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
                                <? echo "$usuario_nome"; ?>
                                </font></SPAN><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;&nbsp;|&nbsp;&nbsp;VOCÊ 
                                ESTÁ NA ÁREA DO ADMINISTRADOR </font></TD>
                              <TD ><a href='logout.php'><div class="botaosair">Sair</div></a></TD>
                            </TR>
                            </TBODY>
                          </TABLE>
                        </TD>
                      </TR>
                      <TR> 
                        <TD align=right 

                      background=imagens/extranet/res_07.gif>&nbsp; </TD>
                      </TR>
                      </TBODY>
                    </TABLE>
                  </TD></TR></TBODY></TABLE>

            <TABLE class=res-bg cellSpacing=0 cellPadding=0 width=775 

              border=0><TBODY>

              <TR>

                <TD align=middle>

                    <TABLE cellSpacing=0 cellPadding=0 width=747 border=0>
                      <TBODY> 
                      <TR> 
                        <TD><IMG height=2 

                        src="imagens/extranet/res_linhas.gif" 

                      width=747></TD>
                      </TR>
                      <TR> 
                        <TD align=middle height=30> 
                          <div align="center"><span class=hm-tab1tx><font face="Verdana, Arial, Helvetica, sans-serif" size="1">efetue 
                            abaixo a edi&ccedil;&atilde;o da not&iacute;cia cadastrada.</font></span></div>
                        </TD>
                      </TR>
                      <TR> 
                        <TD> 
                          <TABLE class=textos cellSpacing=0 cellPadding=0 

                        width=747 border=0>
                            <TR> 
                              <TD vAlign=bottom 

                            background=imagens/extranet/barra_branco-bg.gif> 
                                <TABLE class=textos cellSpacing=0 cellPadding=0 

                              width="100%" bgColor=#000000 border=0>
                                  <TBODY> 
                                  <TR> 
                                    <TD width=10>&nbsp;</TD>
                                    <TD width=665><STRONG><FONT color=#ffffff> 
                                      <font face="Verdana, Arial, Helvetica, sans-serif" size="2">CADASTRAR 
                                      NOT&Iacute;CIA </font></FONT></STRONG></TD>
                                  </TR>
                                  </TBODY> 
                                </TABLE>
                              </TD>
                            </TR>
                            <TR> 
                              <TD bgColor=#ffffff valign="top"> 
                                <TABLE class=textosmedios cellSpacing=0 

                              cellPadding=4 width="100%" border=0>
                                  <TBODY> 
                                  <TR> 
                                    <TD valign="top"> 
                                      <?

$id_noticia = $_GET['id_noticia'];
$query = "select * from tbl_noticias where id_noticia = '$id_noticia'";

$resultado = mysql_query($query);
$row = mysql_fetch_array($resultado);
$id_categoria_noticia         = $row['id_categoria_noticia'];
$titulo_noticia               = $row['titulo'];
$descricao                    = $row['descricao'];
$destaque                     = $row['destaque'];
$fotografo                    = $row['fotografo'];
$legenda                      = $row['legenda'];
$msg                          = $row['msg'];
$nome_arquivo                 = $row['nome_arquivo'];
$data                         = $row['data'];
$status                       = $row['status'];

?>
                                      <table width="100%" border="0" cellpadding="2" cellspacing="2" class="textoVerdanaPreto" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
                                        <tr bgcolor="#FFFFFF"> 
                                          <td width="17%"> 
                                            <div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><span class='TextoPretoPequeno'>T&iacute;tulo:</span></font></div>
                                          </td>
                                          <td width="23%"> <font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
                                            <input name="titulo_noticia" type="text" class='form-box2' id="titulo" size="20" value='<?= $titulo_noticia; ?>'>
                                            </font></td>
                                          <td width="22%"> 
                                            <!--<div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Categoria:</font></div>-->
                                          </td>
                                          <td width="38%"> <font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
                                            <!--<select name='id_categoria_noticia' class='form-box2' id='id_categoria_noticia'>-->
                                              <?
/*
$query1 = "select * from tbl_categorias_noticias where id_categoria_noticia = '$id_categoria_noticia'";
$rs1    = mysql_query($query1);
$row1 = mysql_fetch_array($rs1);
$id_categoria_noticia1  = $row1['id_categoria_noticia'];
$categoria_noticia1     = $row1['categoria'];
*/
   ?>
                                              <!--<option value="<?= $id_categoria_noticia1; ?>" selected> -->
                                              <? //= $categoria_noticia1; ?>
                                              <!-- </option> -->
                                              <?
/*
$query2 = "select * from tbl_categorias_noticias order by id_categoria_noticia";
$rs2    = mysql_query($query2);
while($row2 = mysql_fetch_array($rs2)){
$id_categoria_noticia2         = $row2['id_categoria_noticia'];
$categoria_noticia2            = $row2['categoria'];
*/
   ?>
                                              <?// if ($categoria_noticia2 != $categoria_noticia1){?>
                                              <!--<option value="<?echo $id_categoria_noticia2; ?>"> -->
                                              <?// = $categoria_noticia2; ?>
                                              <!--</option>-->
                                              <?//}?>
                                              <?//}?>
                                            <!--</select>-->
                                            </font></td>
                                        </tr>
                                        <tr bgcolor="#FFFFFF"> 
                                          <td width="17%"> 
                                            <div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><span class='TextoPretoPequeno'>Descri&ccedil;&atilde;o:</span></font></div>
                                          </td>
                                          <td width="23%"> <font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
                                            <input name="descricao" type="text" class='form-box2' id="descricao" size="20" value='<?= $descricao; ?>'>
                                            </font></td>
                                          <td width="22%"> 
                                            <div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Destaque:</font></div>
                                          </td>
                                          <td width="38%"> <font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
                                            <select name='destaque' class='form-box2' id='destaque'>
                                              <? if ($destaque != '1'){echo "<option value='0' selected>Não</option><option value='1'>Sim</option>";} 
											   else{echo "<option value='1' selected>Sim</option><option value='0'>Não</option>";} ?>
                                            </select>
                                            </font></td>
                                        </tr>
                                        <tr bgcolor="#FFFFFF"> 
                                          <td width="17%"> 
                                            <div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Mat&eacute;ria:</font></div>
                                          </td>
                                          <td colspan="3"> 
                                            <div align="center"> 
                                              <?/*
                                                                    <script language="JavaScript1.2" defer>                    
																		var config = new Object(); // create new config object 
																		config.bodyStyle = 'font-family: "Times New Roman";';  
																		editor_generate('msg', config);                        
																	</script>*/ ?>
                                              <script language="JavaScript1.2" defer>
																	     editor_generate('msg');
																     </script>
                                            </div>
                                            <div align="center"> 
                                              <textarea name="msg" cols="65" rows="15" class='formu' id="msg" border='1'><?= $msg; ?></textarea>
                                              <!--content ends here-->
                                            </div>
                                          </td>
                                        <tr bgcolor="#FFFFFF"> 
                                          <td width="17%"> 
                                            <div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Ativo:</font></div>
                                          </td>
                                          <td width="23%"> <font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
                                            <select name='status' class='form-box2' id='ativo'>
                                              <? if ($status != '1'){echo "<option value='0' selected>Não</option><option value='1'>Sim</option>";} 
											   else{echo "<option value='1' selected>Sim</option><option value='0'>Não</option>";} ?>
                                            </select>
                                            </font></td>
                                          <td width="22%"> 
                                            <div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Imagem:</font></div>
                                          </td>
                                          <td width="38%"> 
                                            <input type="file" name="nome_arquivo" class='form-box2'>
                                          </td>
                                        </tr>
                                        <tr bgcolor="#FFFFFF"> 
                                          <td width="17%"> 
                                            <div align="right"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Fonte:</font></div>
                                          </td>
                                          <td> <font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
                                            </font> 
                                            <div align="right"></div>
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
                                            <input name="legenda" type="text" class='form-box2' id="subtitulo" size="30" value="<?= $legenda; ?>">
                                            </font></td>
                                          <td> 
                                            <div align="right"> </div>
                                          </td>
                                          <td>&nbsp;</td>
                                        </tr>
                                        <tr bgcolor="#FFFFFF"> 
                                          <td colspan="4"> 
                                            <div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"></font><font face="Verdana, Arial, Helvetica, sans-serif" size="2"></font><font face="Verdana, Arial, Helvetica, sans-serif" size="2"></font><font 

                                face="Arial, Helvetica, sans-serif" 

                                color=#002456 size=1>Os campos com * são de preenchimento 
                                              obrigatório</font><font face="Verdana, Arial, Helvetica, sans-serif" size="2"></font></div>
                                          </td>
                                        </tr>
                                        <tr bgcolor="#FFFFFF"> 
                                          <td colspan="4"> 
                                            <div align="center"> 
                                              <input name="id_noticia" type="hidden" id="id_noticia" value="<?= $id_noticia; ?>">
                                              <input type="submit" value="Enviar" class="botaoenviar"/>
                                            </div>
                                          </td>
                                        </tr>
                                      </table>
                                    </TD>
                                  </TR>
                                  </TBODY> 
                                </TABLE>
                              </TD>
                            </TR>
                          </TABLE>
                        </TD>
                      </TR>
                      <TR> 
                        <TD></TD>
                      </TR>
                      </TBODY>
                    </TABLE>
                    <BR></TD></TR></TBODY></TABLE>

            </TD>
          </TR></TBODY></TABLE></TD></TR></TBODY></TABLE>
</form>
</BODY></HTML>
