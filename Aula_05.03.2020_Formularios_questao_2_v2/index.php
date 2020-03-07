<?php
echo '<h1>Cadastro de Usuários</h1>
<form action="bemvindo.php" method="post">
	Nome<br><input type="text" name="no"><br>
    Email<br><input type="text" name="em"><br>
    Tel.1<br><input type="num" name="c1"><br>
    Tel.2<br><input type="num" name="c2"><br>

    <label for="prof">Profição</label><br>
    <select name="pr[]" id="prof">
    <option value="Estudante">Estudante</option>
    <option value="Programador">Programador</option>
    <option value="Outro">Outro</option>
    </select><br>

    Escolaridade<br>
    <input type="radio" id="sup" name="escola" value="Superior">
    <label for="sup">Superior</label>
    <input type="radio" id="med" name="escola" value="Médio">
    <label for="med">Médio</label>
    <input type="radio" id="fun" name="escola" value="Fundamental">
    <label for="fun">Fundamental</label><br><br>

    <input type="checkbox" id="termo" name="termo">
    <label for="termo">Aceito os termos de contrato</label><br>

    <button>Salvar</button>
    <input type="reset" value="Limpar">

</form>';

if(isset($_GET['erro'])){//isset serve para ver se $_GET[erro] existe
	echo "<h4>Erro";
}
?> 