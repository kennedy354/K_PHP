<?php

$no = $_POST["no"];
$em = $_POST["em"];
$c1 = $_POST["c1"];
$c2 = $_POST["c2"];
$pr = $_POST["pr"];

if(isset($_POST['escola'])) {
    $es = $_POST["escola"];

    if($no==null || $em==null || $c1==null || $c2==null || $pr==null || $es==null){
        header('Location: index.php?erro=1');//Ir para outra página
    }
    else{
        echo '<table border="1">';
        echo "<tr>";
        echo "<td>Nome</td>";
        echo "<td>Email</td>";
        echo "<td>Tel.1</td>";
        echo "<td>Tel.2</td>";
        echo "<td>Profição</td>";
        echo "<td>Escolaridade</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>$no</td>";
        echo "<td>$em</td>";
        echo "<td>$c1</td>";
        echo "<td>$c2</td>";
        echo "<td>$pr</td>";
        echo "<td>$es</td>";
        echo "</tr>";
    echo "</table>";
    } 
}
else{
    header('Location: index.php?erro=1');
}
?>