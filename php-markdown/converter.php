<?php

# Install PSR-0-compatible class autoloader
spl_autoload_register(function($class){
	require preg_replace('{\\\\|_(?!.*\\\\)}', DIRECTORY_SEPARATOR, ltrim($class, '\\')).'.php';
});

use \Michelf\Markdown;

$indexEntries = "";

$dir = new DirectoryIterator('../basic-guide/');
foreach ($dir as $fileinfo) {
    if ($fileinfo->isFile() && pathinfo($fileinfo->getFilename(), PATHINFO_EXTENSION) == "md") {
		$filenameWithoutExtension = basename($fileinfo->getFilename(), ".md");
		mountHtml('../basic-guide/', $filenameWithoutExtension);
		addEntryToIndex($indexEntries, '../basic-guide/', $filenameWithoutExtension);
    }
}

function mountHtml($filepath, $filename) {
	$text = file_get_contents($filepath.$filename.".md");
	$htmlText = Markdown::defaultTransform($text);
	$html = '<!DOCTYPE html>
						<html>
							<head>
								<meta charset="UTF-8">
								<link href="../github.css" rel="stylesheet"/>
								<title>'.$filename.'</title>
							</head>
							<body>'.
								$htmlText
							.'</body>
						</html>';
	writeFile($html, $filepath, $filename);	
}

function writeFile($html, $filepath, $filename) {
	$fh = fopen($filepath.$filename.".html", 'w') or die("can't open file");
	fwrite($fh, $html);
	fclose($fh);
}

function addEntryToIndex(&$indexEntries, $filepath, $filename) {
	$indexEntries .= '<div>';
	$indexEntries .= '<a href="'.$filepath.$filename.'.html" >'.formatChapterName($filename).'</a>';
	$indexEntries .= '</div>';
}

function formatChapterName($name) {
	//$splitted = preg_split('/-/', $name);
	//return $splitted[0].' '.ucfirst($splitted[1]);
	return $name;
}

?>
<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8">
		<link href="../github.css" rel="stylesheet"/>
        <title>Manual</title>
    </head>
    <body>
		<h1>Índice</h1>
		<?php
			echo $indexEntries;
		?>
    </body>
</html>
