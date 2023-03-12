<?php
function getfiles(){
    $dir = opendir("./cdn");
    while($dir = readdir()){ 
        //Never wanted to show another directories
        if(is_dir($dir)){
           continue; 
        }
        echo "<li><a href='https://vzondev.cf/files/cdn/" . $dir . "'>" . $dir . "</a></li>";
    }
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
                  getfiles();
                ?>
                </ul>
            </section>
        </main>
    </body>
</html>
