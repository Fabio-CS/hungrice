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
// PEGA OS DADOS DO USU�RIO

$query = "SELECT * FROM tbl_usuarios where id = '$usuario_id'";
$resultado = mysql_query($query); 
	$campo = mysql_fetch_array ($resultado);
	$usuario_nome = $campo ['nome'];

?>

<HTML>

<HEAD>
<?=$icon?>
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



<SCRIPT src="imagens/extranet/jscripts.js"></SCRIPT>


<META content="MSHTML 6.00.2800.1543" name=GENERATOR><title><?=$title_adm?></title></HEAD>

<BODY bgColor=#6c6c7d leftMargin=0 topMargin=0>

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
                            <TD class=top1><SPAN class=nome><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif" size="2">Ol�</font> 
                              <font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
                              <? echo "$usuario_nome"; ?>
                              </font></SPAN><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;&nbsp;|&nbsp;&nbsp;VOC� 
                              EST� NA �REA DO ADMINISTRADOR </font></TD>
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
                        <div align="center"><span class=hm-tab1tx><font face="Verdana, Arial, Helvetica, sans-serif" size="1">Verefique 
                          abaixo as fotos cadastradas no sistema</font></span></div>
                      </TD>
                    </TR>
                    <TR> 
                      <TD> 
                        <TABLE class=textos cellSpacing=0 cellPadding=0 

                        width=747 border=0>
                          <FORM name=formident action="" method=get>
                            <TR> 
                              <TD vAlign=bottom 

                            background=imagens/extranet/barra_branco-bg.gif> 
                                <TABLE class=textos cellSpacing=0 cellPadding=0 

                              width="100%" bgColor=#000000 border=0>
                                  <TBODY> 
                                  <TR> 
                                    <TD width=10>&nbsp;</TD>
                                    <TD width=665><STRONG><FONT color=#ffffff> 
                                      <font face="Verdana, Arial, Helvetica, sans-serif" size="2">TODAS AS FOTOS</font> 
                                      </FONT></STRONG></TD>
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
                                      <table width="95%" border="0" align="center" cellpadding="1" cellspacing="1" class="textoVerdanaPreto">
                                        <tr> 
                                          <td valign="top"> 
                                            <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="textobold">
                                              <tr> 
                                                <td valign="top"> <font size="2" face="Verdana, Arial, Helvetica, sans-serif"><b> 
                                                  </b></font> 
                                                  <table width="99%" border="0" align="center" cellpadding="1" cellspacing="1" class="textoVerdanaPreto">
                                                    <tr> 
                                                      <td> 
                                                        <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="textobold">
                                                          <tr> 
                                                            <td> 
                                                              <table width="100%" border="0" cellpadding="2" cellspacing="2" class="textoVerdanaPreto">
                                                                <tr bgcolor="#DADADA"> 
                                                                  <td width="10%" bgcolor="#DADADA" > 
                                                                    <div align="left"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">T�tulo</font></div>
                                                                  </td>
																  <td width="10%" bgcolor="#DADADA" > 
                                                                    <div align="left"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Legenda</font></div>
                                                                  </td>
																  <td width="28%" bgcolor="#DADADA" > 
                                                                    <div align="left"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Foto</font></div>
                                                                  </td>
                                                                  <td width="13%" bgcolor="#DADADA"> 
                                                                    <div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Editar</font></div>
                                                                  </td>
                                                                  <td width="12%" bgcolor="#DADADA" > 
                                                                    <div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Excluir</font></div>
                                                                  </td>
                                                                </tr>
                                                                <?
$query = "select * from tbl_galeria order by id_galeria desc";
$rs= mysql_query($query);

while($row = mysql_fetch_array($rs)){
  ?>
                                                                <tr bgcolor="#F5F5F5"> 
                                                                  <td width="10%" bgcolor="#F5F5F5"> 
                                                                    <font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
                                                                    <?= $row["titulo"] ?>
                                                                    </font></td>
																	<td width="10%" bgcolor="#F5F5F5"> 
                                                                    <font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
                                                                    <?= $row["legenda"] ?>
                                                                    </font></td>
																	<td width="28%" bgcolor="#F5F5F5"> 
                                                                    <font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
                                                                    <?= $row["foto"] ?>
                                                                    </font></td>
                                                                  <td width="13%"> 
                                                                    <div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><a href="fotos_editar.php?id_galeria=<?= $row["id_galeria"] ?>"><img src="imagens/ed_refresh.png" width="16" height="16" border="0"></a></font></div>
                                                                  </td>
                                                                  <td width="12%"> 
                                                                    <div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><a href="script_noticias.php?acao=excluir_foto&id_galeria=<?= $row["id_galeria"] ?>"><img src="imagens/ed_delete.png" width="18" height="17" border="0"></a></font></div>
                                                                  </td>
                                                                </tr>
                                                                <?} ?>
                                                              </table>
                                                            </td>
                                                          </tr>
                                                          <tr> 
                                                            <td>&nbsp; </td>
                                                          </tr>
                                                        </table>
                                                      </td>
                                                    </tr>
                                                    <tr> 
                                                      <td></td>
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
                          </FORM>
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
        </TR></TBODY></TABLE></TD></TR></TBODY></TABLE></BODY></HTML>

