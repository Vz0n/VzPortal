<?php
function getfiles(){
    $dir = opendir("./cdn");
    $arr = array();
    $counter = 0;
    while($stream = readdir($dir)){ 
        if($stream == "." || $stream == ".."){
           continue; 
        }
        $arr[$counter] = $stream;
        $counter += 1;
    }
    return $arr;
}

//Descriptor function
function getFileDesc($file){
    $handle = fopen($file, "r");
    $content = fread($handle, filesize($handle));
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Archivos</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/assets/files.css">
    </head>
    <body>
        <embed src="../assets/background.jpg">
        <header class="header">
            <h1 style="text-align: center;">Archivos de Vz0n.</h1>
        </header>
        <main id="main">  
            <section class="files-section">
                <p>Esto es el repositorio de Vz0n. Clickea uno de los archivos
                    en el listado para descargarlo o ver su contenido (txt).
                </p>
                <ul class="files" title="Archivos para descargar.">
                <?php
                   $arr = getfiles();
                   for($i = 0;$i < sizeof($arr);$i++){
                       echo "<li><a href='https://vzondev.cf/files/cdn/" . $arr[$i] . "'>" . $arr[$i] . "</a></li>";
                   } 
                ?>
                </ul>
            </section>
        </main>
    </body>
</html>
