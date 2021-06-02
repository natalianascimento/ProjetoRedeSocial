<?php
### FOTOS PARA FEED
require_once '../Model/ServicePostagem.php';
$service = new PostagemService;
$album = $service->consultarPostagem();

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Feed</title>
</head>

<body>
	<h1>Sew</h1>
	<h3>Feed</h3>
	<br>

	<form action="../Control/ControlPostagem.php" method="post" enctype="multipart/form-data">
        
        <label for="titulo">Título</label>
        <input type="text" id="titulo" name="titulo">

        <label for="conteudo">Conteúdo</label>
        <textarea id="conteudo" name="conteudo" cols="30" rows="3"></textarea>


        <label for="foto">Arquivo</label>
        <input type="file" id="arquivo" name="arquivo">

        <button name="btnPostagem">Postar</button>

    </form>	

	<table>
		<tr> 
			<?php foreach ($album as $fotos){
			    			
			?>
			<td>
				<img src="<?php echo "./imagem" ?>" width="260" height="200"/>			
			</td>
			<?php } ?>
		</tr>
	</table>
</body>

</html>