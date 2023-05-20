<?php
if (isset($_GET['url'])) {
	$url = $_GET['url'];
	$html = file_get_contents($url);

	// Creamos un nuevo DOMDocument y cargamos el HTML
	$dom = new DOMDocument();
	@$dom->loadHTML($html);

	// Obtenemos el texto de las etiquetas H1
	$h1_tags = $dom->getElementsByTagName('h1');
	$h1_text = array();
	foreach ($h1_tags as $tag) {
		$h1_text[] = $tag->nodeValue;
	}

	// Obtenemos el contenido de los elementos span con class="caption-text"
	$caption_tags = $dom->getElementsByTagName('span');
	$caption_text = array();
	foreach ($caption_tags as $tag) {
		if ($tag->getAttribute('class') == 'caption-text') {
			$caption_text[] = $tag->nodeValue;
		}
	}

	// Obtenemos los enlaces externos
	$external_links = array();
	$link_tags = $dom->getElementsByTagName('a');
	foreach ($link_tags as $tag) {
		$href = $tag->getAttribute('href');
		if (filter_var($href, FILTER_VALIDATE_URL) && !preg_match('!^' . $url . '!', $href)) {
			$external_links[] = $href;
		}
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Robot de búsqueda</title>
</head>

<body>
	<h1>Robot de búsqueda</h1>
	<?php if (isset($h1_text)) : ?>
		<h2>Etiquetas H1 encontradas:</h2>
		<ul>
			<?php foreach ($h1_text as $text) : ?>
				<li><?php echo $text; ?></li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>

	<?php if (isset($caption_text)) : ?>
		<h2>Contenido de elementos span con class="caption-text" encontrados:</h2>
		<ul>
			<?php foreach ($caption_text as $text) : ?>
				<li><?php echo $text; ?></li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>

	<?php if (isset($external_links)) : ?>
		<h2>Enlaces externos encontrados:</h2>
		<ul>
			<?php foreach ($external_links as $link) : ?>
				<li><a href="<?php echo $link; ?>"><?php echo $link; ?></a></li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>
	<form method="get" action="robot.php">
		<label for="url">Ingrese la URL de la página a analizar:</label><br>
		<input type="text" id="url" name="url"><br>
		<input type="submit" value="Analizar">
	</form>
</body>

</html>