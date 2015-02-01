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
<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">

<script language="javascript" type="text/javascript" src="javascript.js"></script>

<SCRIPT src="javascript/jscripts.js"></SCRIPT>

<script type="text/javascript">
   _editor_url = "htmlarea/";
   _editor_lang = "en";
</script>
<script type="text/javascript" src="htmlarea.js"></script>
<STYLE type=text/css>.titulos {
	FONT-SIZE: 16px; COLOR: #b09014; FONT-FAMILY: Arial, Helvetica, sans-serif
}
</STYLE>

<title><?=$title_adm?></title></HEAD>

<BODY bgColor=#6c6c7d leftMargin=0 topMargin=0 onload="HTMLArea.replaceAll()">

<form action="script_noticias.php?acao=cadastrar_foto" Method="post" enctype="multipart/form-data">
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
                  <TD vAlign=middle width=145> 
                    <div align="center"><a href="principal.php" target="_top"><?=$logo?></a></div>
                  </TD>
                  <TD vAlign=bottom width=76>&nbsp;</TD>

                <TD>

                    <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                      <TBODY> 
                      <TR> 
                        <TD align=right height=36> 
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
                        <TD align=right>&nbsp; </TD>
                      </TR>
                      </TBODY>
                    </TABLE>
                  </TD></TR></TBODY></TABLE>

            <TABLE class=res-bg cellSpacing=0 cellPadding=0 width=775 border=0><TBODY>

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
                          <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="1">Efetue 
                            abaixo o cadastro de uma nova imagem.</font></div>
                        </TD>
                      </TR>
                      <TR> 
                        <TD> 
                          <TABLE cellSpacing=0 cellPadding=0 width=747 border=0>
                            <TR> 
                              <TD vAlign=bottom> 
                                <TABLE cellSpacing=0 cellPadding=0 width="100%" bgColor=#000000 border=0>
                                  <TBODY> 
                                  <TR> 
                                    <TD width=10>&nbsp;</TD>
                                    <TD width=665><STRONG><FONT color=#ffffff> 
                                      <font face="Verdana, Arial, Helvetica, sans-serif" size="2">CADASTRAR 
                                      FOTO </font></FONT></STRONG></TD>
                                    <TD align=right width=14>&nbsp;</TD>
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
                                      <table width="100%" border="0" cellpadding="2" cellspacing="2" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
                                        <tr bgcolor="#FFFFFF"> 
                                          <td width="17%"> 
                                            <div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><span class='TextoPretoPequeno'>T&iacute;tulo*:</span></font></div>
                                          </td>
                                          <td width="23%"><input name="titulo" type="text" id="titulo" size="20"></td>

                                        </tr>
                                        <tr bgcolor="#FFFFFF"> 
                                          <td width="17%"> 
                                            <div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Legenda*:</font></div>
                                          </td>
                                          <td width="23%"><input name="legenda" type="text" id="legenda" size="50"></td>

                                        </tr>
                                        <tr bgcolor="#FFFFFF"> 

                                        <tr bgcolor="#FFFFFF"> 

                                          <td width="22%"> 
                                            <div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Imagem*:</font></div>
                                          </td>
                                          <td width="38%"><input type="file" name="foto" id="foto"></td>
                                        </tr>

                                        <tr bgcolor="#FFFFFF"> 
                                          <td colspan="4"> 
                                            <div align="right"><font face="Arial, Helvetica, sans-serif" color=#002456 size=1>Os campos com * são de preenchimento 
                                              obrigatório</font></div>
                                          </td>
                                        </tr>
                                        <tr bgcolor="#FFFFFF"> 
                                          <td colspan="4"> 
                                            <div align="center"> 
                                              <input name="id_galeria" type="hidden" value="<? echo $id_galeria; ?>">
												<input type="submit" value="Enviar" class="botaoenviar"/>
											  </div>
                                          </td>
                                        </tr>
                                      </table>
                                    </TD>
                                  </TR>
                                  </TBODY> 
                                </TABLE>
                                <TABLE class=textosmedios cellSpacing=0 cellPadding=0 width="100%" border=0>
                                  <TBODY> 
                                  <TR> 
                                    <TD>&nbsp; </TD>
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
                    
                  </TD>
                </TR></TBODY></TABLE>

            </TD>
          </TR></TBODY></TABLE></TD></TR></TBODY></TABLE>
</form>
</BODY></HTML>

