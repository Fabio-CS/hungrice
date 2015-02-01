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
    $resultado = mysql_query ($query);
	$campo = mysql_fetch_array ($resultado);   
	$usuario_nome = $campo ['nome'];  

?>

<?

$acao = $_GET['acao'];

switch ($acao) {

case 'cadastrar_categoria':

$categoria = $_POST['categoria'];

$query = "insert into tbl_categorias_noticias(categoria) values ('$categoria')";
$rs= mysql_query($query);

?>

<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"> alert ("NOTÍCIAS\nCadastro de categoria efetuado com sucesso")</SCRIPT>
<SCRIPT language="JavaScript">window.location.href="noticias_categoria_listar.php";</SCRIPT>

<?

break;

case 'cadastrar_foto_pet':

function trocar_acentos ($foto)
{
		$foto = str_replace(' ','_',$foto);
		$foto = str_replace('á','a',$foto);
		$foto = str_replace('Á','a',$foto);
		$foto = str_replace('é','e',$foto);
		$foto = str_replace('É','e',$foto);
		$foto = str_replace('í','i',$foto);
		$foto = str_replace('Í','i',$foto);
		$foto = str_replace('ó','o',$foto);
		$foto = str_replace('Ó','o',$foto);
		$foto = str_replace('ú','u',$foto);
		$foto = str_replace('Ú','u',$foto);
		$foto = strtolower($foto);

		return $foto;
}



$foto = trocar_acentos ($_FILES['foto']['name']);
$nome_arquivo_extensao = substr($foto,strpos($foto,'.')+1,strlen($foto)-strpos($foto,'.'));
$nome_arquivo_tamanho = $_FILES['foto']['size'];
if(isset($_POST['nome_arquivo_descricao']))
$nome_arquivo_descricao = $_POST['nome_arquivo_descricao'];
$nome_arquivo_data = date('d/m/Y');


		$uploaddir = "../imagens/galeria_pet/";
		$data = time();

        if ($foto != ""){
		if (file_exists($uploaddir.$foto))
		{
			$foto = time()."_".$foto;
		}
		}



           move_uploaded_file($_FILES['foto']['tmp_name'], $uploaddir . $foto);
		   

if(!isset($titulo))
$titulo = '';

if(!isset($legenda))
$legenda = '';
		   
		   
if(isset($_POST['titulo']))
$titulo                  = $_POST['titulo'];
if(isset($_POST['legenda']))
$legenda               = $_POST['legenda'];


$query = "insert into tbl_galeria_pet(titulo, legenda, foto) values ('$titulo', '$legenda', '$foto')";
$rs= mysql_query($query);

?>

<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"> alert ("IMAGEM\nImagem cadastrada com sucesso!")</SCRIPT>
<SCRIPT language="JavaScript">window.location.href="fotos_pet_listar.php";</SCRIPT>

<?

break;

case 'cadastrar_foto':

function trocar_acentos ($foto)
{
		$foto = str_replace(' ','_',$foto);
		$foto = str_replace('á','a',$foto);
		$foto = str_replace('Á','a',$foto);
		$foto = str_replace('é','e',$foto);
		$foto = str_replace('É','e',$foto);
		$foto = str_replace('í','i',$foto);
		$foto = str_replace('Í','i',$foto);
		$foto = str_replace('ó','o',$foto);
		$foto = str_replace('Ó','o',$foto);
		$foto = str_replace('ú','u',$foto);
		$foto = str_replace('Ú','u',$foto);
		$foto = strtolower($foto);

		return $foto;
}



$foto = trocar_acentos ($_FILES['foto']['name']);
$nome_arquivo_extensao = substr($foto,strpos($foto,'.')+1,strlen($foto)-strpos($foto,'.'));
$nome_arquivo_tamanho = $_FILES['foto']['size'];
if(isset($_POST['nome_arquivo_descricao']))
$nome_arquivo_descricao = $_POST['nome_arquivo_descricao'];
$nome_arquivo_data = date('d/m/Y');


		$uploaddir = "../imagens/galeria/";
		$data = time();

        if ($foto != ""){
		if (file_exists($uploaddir.$foto))
		{
			$foto = time()."_".$foto;
		}
		}



           move_uploaded_file($_FILES['foto']['tmp_name'], $uploaddir . $foto);
		   

if(!isset($titulo))
$titulo = '';

if(!isset($legenda))
$legenda = '';
		   
		   
if(isset($_POST['titulo']))
$titulo                  = $_POST['titulo'];
if(isset($_POST['legenda']))
$legenda               = $_POST['legenda'];


$query = "insert into tbl_galeria(titulo, legenda, foto) values ('$titulo', '$legenda', '$foto')";
$rs= mysql_query($query);

?>

<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"> alert ("IMAGEM\nImagem cadastrada com sucesso!")</SCRIPT>
<SCRIPT language="JavaScript">window.location.href="fotos_listar.php";</SCRIPT>

<?

break;


case 'cadastrar':

if(!isset($id_categoria_noticia))
$id_categoria_noticia = 4;

if(isset($_POST['id_categoria_noticia']))
$id_categoria_noticia    = 4;

$i=0;

$query="select * from tbl_noticias where id_categoria_noticia=$id_categoria_noticia";

$rs = mysql_query($query);
while($row = mysql_fetch_array($rs)){
$i++;
}

if($i>=3){

?>

<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"> alert ("NOTÍCIAS\nVocê não pode inserir mais de 3 notícias nos paineis frontais e laterais!\nExclua uma notícia do painel antes de inserir!")</SCRIPT>
<SCRIPT language="JavaScript">history.back(); </SCRIPT>

<?
break;
}

function trocar_acentos ($nome_arquivo)
{
		$nome_arquivo = str_replace(' ','_',$nome_arquivo);
		$nome_arquivo = str_replace('á','a',$nome_arquivo);
		$nome_arquivo = str_replace('Á','a',$nome_arquivo);
		$nome_arquivo = str_replace('é','e',$nome_arquivo);
		$nome_arquivo = str_replace('É','e',$nome_arquivo);
		$nome_arquivo = str_replace('í','i',$nome_arquivo);
		$nome_arquivo = str_replace('Í','i',$nome_arquivo);
		$nome_arquivo = str_replace('ó','o',$nome_arquivo);
		$nome_arquivo = str_replace('Ó','o',$nome_arquivo);
		$nome_arquivo = str_replace('ú','u',$nome_arquivo);
		$nome_arquivo = str_replace('Ú','u',$nome_arquivo);
		$nome_arquivo = strtolower($nome_arquivo);

		return $nome_arquivo;
}



$nome_arquivo = trocar_acentos ($_FILES['nome_arquivo']['name']);
$nome_arquivo_extensao = substr($nome_arquivo,strpos($nome_arquivo,'.')+1,strlen($nome_arquivo)-strpos($nome_arquivo,'.'));
$nome_arquivo_tamanho = $_FILES['nome_arquivo']['size'];
if(isset($_POST['nome_arquivo_descricao']))
$nome_arquivo_descricao = $_POST['nome_arquivo_descricao'];
$nome_arquivo_data = date('d/m/Y');


		$uploaddir = "../imagens/noticias/";
		$data = time();

        if ($nome_arquivo != ""){
		if (file_exists($uploaddir.$nome_arquivo))
		{
			$nome_arquivo = time()."_".$nome_arquivo;
		}
		}



           move_uploaded_file($_FILES['nome_arquivo']['tmp_name'], $uploaddir . $nome_arquivo);
		   


if(!isset($titulo))
$titulo = '';

if(!isset($descricao))
$descricao = '';

if(!isset($destaque))
$destaque = '';

if(!isset($fotografo))
$fotografo = '';

if(!isset($legenda))
$legenda = '';

if(!isset($status))
$status = '';

if(!isset($msg))
$msg = '';


		   
		   
if(isset($_POST['titulo']))
$titulo                  = $_POST['titulo'];
if(isset($_POST['descricao']))
$descricao               = $_POST['descricao'];
if(isset($_POST['destaque']))
$destaque                = $_POST['destaque'];
if(isset($_POST['fotografo']))
$fotografo               = $_POST['fotografo'];
if(isset($_POST['legenda']))
$legenda                 = $_POST['legenda'];
if(isset($_POST['status']))
$status                  = $_POST['status'];
if(isset($_POST['msg']))
$msg                     = $_POST['msg'];
$msg                     = preg_replace("#\n#","<br>",$msg);
$data_publicacao         = date("d/m/Y");

$query = "insert into tbl_noticias(id_categoria_noticia, titulo, descricao, destaque, fotografo, legenda, msg, nome_arquivo, data, status) values ('4', '$titulo', '$descricao', '$destaque', '$fotografo', '$legenda', '$msg', '$nome_arquivo', '$data_publicacao', '$status')";
$rs= mysql_query($query);

?>

<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"> alert ("NOTÍCIAS\nNotícia cadastrada com sucesso")</SCRIPT>
<SCRIPT language="JavaScript">window.location.href="noticias_listar.php";</SCRIPT>

<?

break;

case 'editar_foto_pet':

if(!isset($id_galeria))
$id_galeria = '';

if(!isset($titulo))
$titulo = '';

if(!isset($legenda))
$legenda = '';

if(isset($_POST['id_galeria']))
$id_galeria               = $_POST['id_galeria'];
if(isset($_POST['titulo']))
$titulo                  = $_POST['titulo'];
if(isset($_POST['legenda']))
$legenda               = $_POST['legenda'];


$query2 = "update tbl_galeria_pet SET legenda = '$legenda' where id_galeria = '$id_galeria'";
$rs= mysql_query($query2);
$query2 = "update tbl_galeria_pet SET titulo = '$titulo' where id_galeria = '$id_galeria'";
$rs= mysql_query($query2);


?>

<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"> alert ("IMAGEM\nEdição de imagem efetuada com sucesso")</SCRIPT>
<SCRIPT language="JavaScript">window.location.href="fotos_pet_listar.php";</SCRIPT>

<?

break;

case 'editar_foto':

if(!isset($id_galeria))
$id_galeria = '';

if(!isset($titulo))
$titulo = '';

if(!isset($legenda))
$legenda = '';

if(isset($_POST['id_galeria']))
$id_galeria               = $_POST['id_galeria'];
if(isset($_POST['titulo']))
$titulo                  = $_POST['titulo'];
if(isset($_POST['legenda']))
$legenda               = $_POST['legenda'];


$query2 = "update tbl_galeria SET legenda = '$legenda' where id_galeria = '$id_galeria'";
$rs= mysql_query($query2);
$query2 = "update tbl_galeria SET titulo = '$titulo' where id_galeria = '$id_galeria'";
$rs= mysql_query($query2);


?>

<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"> alert ("IMAGEM\nEdição de imagem efetuada com sucesso")</SCRIPT>
<SCRIPT language="JavaScript">window.location.href="fotos_listar.php";</SCRIPT>

<?

break;


case 'editar_categoria':

if(!isset($id_categoria_noticia))
$id_categoria_noticia = '';

if(!isset($categoria))
$categoria = '';

if(isset($_POST['id_categoria_noticia']))
$id_categoria_noticia               = $_POST['id_categoria_noticia'];
if(isset($_POST['categoria']))
$categoria                  = $_POST['categoria'];

$id_categoria_noticia = $_POST['id_categoria_noticia'];
$categoria             = $_POST['categoria'];

$query2 = "update tbl_categorias_noticias SET categoria = '$categoria' where id_categoria_noticia = '$id_categoria_noticia'";
$rs= mysql_query($query2);


?>

<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"> alert ("NOTÍCIAS\nEdição de categoria efetuada com sucesso")</SCRIPT>
<SCRIPT language="JavaScript">window.location.href="noticias_categoria_listar.php";</SCRIPT>

<?

break;



case 'editar':

if(!isset($id_noticia))
$id_noticia = '';

if(!isset($id_categoria_noticia))
$id_categoria_noticia = '';

if(!isset($titulo))
$titulo = 'Teste';

if(!isset($descricao))
$descricao = '';

if(!isset($destaque))
$destaque = '';

if(!isset($fotografo))
$fotografo = '';

if(!isset($legenda))
$legenda = '';

if(!isset($status))
$status = '';

if(!isset($msg))
$msg = '';

if(!isset($data))
$data = '';

if(isset($_POST['id_noticia']))
$id_noticia           = $_POST['id_noticia'];
if(isset($_POST['id_categoria_noticia']))
$id_categoria_noticia = $_POST['id_categoria_noticia'];
if(isset($_POST['titulo_noticia']))
$titulo_noticia       = $_POST['titulo_noticia'];
if(isset($_POST['descricao']))
$descricao            = $_POST['descricao'];
if(isset($_POST['destaque']))
$destaque             = $_POST['destaque'];
if(isset($_POST['fotografo']))
$fotografo            = $_POST['fotografo'];
if(isset($_POST['legenda']))
$legenda              = $_POST['legenda'];
if(isset($_POST['msg']))
$msg                  = $_POST['msg'];
$msg                  = preg_replace("#\n#","<br>",$msg);
if(isset($_POST['data']))
$data                 = $_POST['data'];
if(isset($_POST['status']))
$status               = $_POST['status'];
//$nome_arquivo         = $HTTP_POST_FILES['nome_arquivo'];


$nome_arquivo_file = $_FILES['nome_arquivo'];
$contar = count($nome_arquivo_file['name']);
$ok = 0;
$erro = 0;
for($i = 0; $i < $contar; $i++){
if(isset($nome_arquivo))
$nome_arquivo = $nome_arquivo_file['name'][$i];
if(isset($tmp))
$tmp = $nome_arquivo_file['tmp_name'][$i];
if(!empty($nome_arquivo)){




        function trocar_acentos2 ($nome_arquivo){
		$nome_arquivo = str_replace(' ','_',$nome_arquivo);
		$nome_arquivo = str_replace('á','a',$nome_arquivo);
		$nome_arquivo = str_replace('Á','a',$nome_arquivo);
		$nome_arquivo = str_replace('é','e',$nome_arquivo);
		$nome_arquivo = str_replace('É','e',$nome_arquivo);
		$nome_arquivo = str_replace('í','i',$nome_arquivo);
		$nome_arquivo = str_replace('Í','i',$nome_arquivo);
		$nome_arquivo = str_replace('ó','o',$nome_arquivo);
		$nome_arquivo = str_replace('Ó','o',$nome_arquivo);
		$nome_arquivo = str_replace('ô','o',$nome_arquivo);
        $nome_arquivo = str_replace('Ô','o',$nome_arquivo);
		$nome_arquivo = str_replace('ú','u',$nome_arquivo);
		$nome_arquivo = str_replace('Ú','u',$nome_arquivo);
		$nome_arquivo = strtolower($nome_arquivo);

		return $nome_arquivo;
		}



        $nome_arquivo = trocar_acentos2 ($_FILES['nome_arquivo']['name']);
        $nome_arquivo_extensao = substr($nome_arquivo,strpos($nome_arquivo,'.')+1,strlen($nome_arquivo)-strpos($nome_arquivo,'.'));
        $nome_arquivo_tamanho = $_FILES['nome_arquivo']['size'];
        $nome_arquivo_descricao = $_POST['nome_arquivo_descricao'];
        $nome_arquivo_data = date('d/m/Y');

		$querydel = "select * from tbl_noticias where id_noticia='$id_noticia'";
        $rsdel = mysql_query ($querydel);

        $campodel = mysql_fetch_array($rsdel);
        $nome_arquivo_antigo = $campodel['nome_arquivo'];

        if ($rsdel){
        $uploaddir_antigo = "../imagens/noticias/";

    	if ($nome_arquivo_antigo != ""){
    	if (file_exists($uploaddir_antigo.$nome_arquivo_antigo)){
        unlink ($uploaddir_antigo.$nome_arquivo_antigo);
        }
        }
        }

         copy($_FILES['nome_arquivo']['tmp_name'], $uploaddir_antigo . $nome_arquivo);
         $query = "update tbl_noticias SET nome_arquivo = '$nome_arquivo' where id_noticia='$id_noticia'";
         $rs= mysql_query ($query);
        }
}
        
$data = date('d/m/Y');

$query2 = "update tbl_noticias SET
           id_categoria_noticia = '4',
           titulo               = '$titulo_noticia',
           descricao            = '$descricao',
           destaque             = '$destaque',
           fotografo            = '$fotografo',
           legenda              = '$legenda',
           msg                  = '$msg',
           data                 = '$data',
           status               = '$status'
           
           where id_noticia='$id_noticia'";
           
$rs2    = mysql_query($query2);

?>

<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"> alert ("NOTÍCIAS\nEdição de notícia efetuada com sucesso")</SCRIPT>
<SCRIPT language="JavaScript">window.location.href="noticias_listar.php";</SCRIPT>

<?


break;

case 'excluir_foto_pet':
$id_galeria = $_GET['id_galeria'];

$query="DELETE from tbl_galeria_pet where id_galeria ='$id_galeria'";
$rs= mysql_query($query);

?>

<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"> alert ("NOTÍCIAS\nExclusão de imagem efetuada com sucesso")</SCRIPT>
<SCRIPT language="JavaScript">window.location.href="fotos_pet_listar.php";</SCRIPT>

<?

break;

case 'excluir_foto':
$id_galeria = $_GET['id_galeria'];

$query="DELETE from tbl_galeria where id_galeria ='$id_galeria'";
$rs= mysql_query($query);

?>

<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"> alert ("NOTÍCIAS\nExclusão de imagem efetuada com sucesso")</SCRIPT>
<SCRIPT language="JavaScript">window.location.href="fotos_listar.php";</SCRIPT>

<?

break;


case 'excluir_categoria':
$id_categoria_noticia = $_GET['id_categoria_noticia'];

$query="DELETE from tbl_categorias_noticias where id_categoria_noticia ='$id_categoria_noticia'";
$rs= mysql_query($query);

?>

<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"> alert ("NOTÍCIAS\nExclusão de categoria efetuada com sucesso")</SCRIPT>
<SCRIPT language="JavaScript">window.location.href="noticias_categoria_listar.php";</SCRIPT>

<?

break;


case 'excluir':

$id_noticia = $_GET['id_noticia'];

$query="select * from tbl_noticias where id_noticia ='$id_noticia'";
$rs = mysql_query($query);
while($row = mysql_fetch_array($rs)){
$nome_arquivo = $row['nome_arquivo'];
}

$query2 = "delete from tbl_noticias where id_noticia = '$id_noticia'";
$rs    = mysql_query($query2);

if ($rs){
	$uploaddir = "../imagens/noticias/";

	if ($nome_arquivo != "") {unlink ($uploaddir.$nome_arquivo);}

?>

<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"> alert ("NOTÍCIAS\nNotícia excluída com sucesso")</SCRIPT>
<SCRIPT language="JavaScript">window.location.href="noticias_listar.php";</SCRIPT>

<?
     
}
break;
}

?>
