<?php
    echo '<form action="#" method="POST" enctype="multipart/form-data">
            <input type="file" name="fileupload">
            <input type="submit" value="Enviar">
        </form>';

    if (isset($_FILES["fileupload"])){
        $name   = $_FILES["fileupload"]["name"];
        $dir    = "uploads/";//Esse diretorio deve estar na mesma pasta que o arquivo .php

        move_uploaded_file($_FILES["fileupload"]["tmp_name"], $dir.$name);

        echo "<img src='$dir/$name'>";
    }
?>