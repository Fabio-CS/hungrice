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

<HTML>

<HEAD>
<?=$icon?>
<TITLE><?=$title_adm?></TITLE>

<META http-equiv=Content-Type content="text/html; charset=iso-8859-1"><LINK 

href="css/vpanel2.css" type=text/css rel=stylesheet><LINK 

href="css/vpainel.css" type=text/css rel=stylesheet>



<script language="JavaScript">

	function Abrir_Pagina(URL,Configuracao) {

	  window.open(URL,'',Configuracao);

	}

</script>

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

</HEAD>

<BODY bgColor=#6c6c7d leftMargin=0 topMargin=0>

<FORM name='formident' action="script_noticias.php?acao=editar_categoria" method='post'>

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
                    <div align="center"><?=$logo?></div>
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
                                ESTÁ NA ÁREA DO ADMINISTRADOR</font> </TD>
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
                          <div align="center"><span class=hm-tab1tx><font face="Verdana, Arial, Helvetica, sans-serif" size="1">Efetue 
                            abaixo a edi&ccedil;&atilde;o da categoria de not&iacute;cia.</font></span></div>
                        </TD>
                      </TR>
                      <TR> 
                        <TD> 
                          <TABLE class=textos cellSpacing=0 cellPadding=0 

                        width=747 border=0>
                            <TBODY> 
                            <TR> 
                              <TD vAlign=bottom 

                            background=imagens/extranet/barra_branco-bg.gif> 
                                <TABLE class=textos cellSpacing=0 cellPadding=0 

                              width="100%" bgColor=#000000 border=0>
                                  <TBODY> 
                                  <TR> 
                                    <TD width=10>&nbsp;</TD>
                                    <TD width=665><STRONG><FONT color=#ffffff> 
                                      <font face="Verdana, Arial, Helvetica, sans-serif" size="2">EDITAR 
                                      CATEGORIA DE NOT&Iacute;CIAS</font></FONT></STRONG></TD>
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
                                      <table width="95%" border="0" align="center" cellpadding="1" cellspacing="1" class="textoVerdanaPreto">
                                        <tr> 
                                          <td valign="top"> 
                                            <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="textobold">
                                              <tr> 
                                                <td valign="top"> 
                                                  <table width="600" border="0" align="center" cellpadding="3" cellspacing="3">
                                                    <tr> 
                                                      <td valign="top"> 
                                                        <?

                    $id_categoria_noticia = $_GET['id_categoria_noticia'];

					$query = "select * from tbl_categorias_noticias where id_categoria_noticia = '$id_categoria_noticia'";

					$rs = mysql_query($query);

					while ($campo = mysql_fetch_array($rs)){

					$id_categoria_noticia = $campo['id_categoria_noticia'];
					$categoria            = $campo['categoria'];


					}

				?>
                                                        <table width="500" border="0" align="center" cellpadding="3" cellspacing="3">
                                                          <tr> 
                                                            <td valign="top"> 
                                                              <table width="100%" border="0" cellpadding="3" class="textoPretoBold">
                                                                <tr bgcolor="#DADADA"> 
                                                                  <td width="62%" bgcolor="#DADADA" class="textoMenor"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Categoria</font></td>
                                                                </tr>
                                                                <tr bgcolor="#DADADA"> 
                                                                  <td bgcolor="#DADADA" class="texto" width="62%"> 
                                                                    <input name="categoria" type="text" class="formu" id="categoria" value="<?= $categoria; ?>" size="55">
                                                                  </td>
                                                                </tr>
                                                              </table>
                                                            </td>
                                                          </tr>
                                                          <tr> 
                                                            <td> 
                                                              <div align="center"> 
                                                                <input name="id_categoria_noticia" value="<?= $id_categoria_noticia; ?>" type="hidden">
                                                                <!--<INPUT type=image height=18 width=100 src="imagens/bt_confirmar3.gif" border=0 name='submit'>-->
																<input type="submit" value="Enviar" class="botaoenviar"/>
                                                              </div>
                                                            </td>
                                                          </tr>
                                                        </table>
                                                      </td>
                                                    </tr>
                                                  </table>
                                                </td>
                                              </tr>
                                              <tr> 
                                                <td> </td>
                                              </tr>
                                            </table>
                                          </td>
                                        </tr>
                                        <tr> 
                                          <td></td>
                                        </tr>
                                      </table>
                                    </TD>
                                  </TR>
                                  </TBODY> 
                                </TABLE>
                                <TABLE class=textosmedios cellSpacing=0 

                              cellPadding=0 width="100%" border=0>
                                  <TBODY> 
                                  <TR> 
                                    <TD>&nbsp; </TD>
                                  </TR>
                                  </TBODY> 
                                </TABLE>
                              </TD>
                            </TR>
                            <TR> 
                              <TD bgColor=#ffffff> 
                                <TABLE class=textos cellSpacing=0 cellPadding=0 

                              width="100%" border=0>
                                  <TBODY> 
                                  <TR> 
                                    <TD align=middle>&nbsp;</TD>
                                  </TR>
                                  <TR> 
                                    <TD 

                            align=middle>&nbsp;</TD>
                                  </TR>
                                  </TBODY> 
                                </TABLE>
                              </TD>
                            </TR>
                            </TBODY> 
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

