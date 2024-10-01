<?php
include_once "header.php"
?>
<form action="cadastrar.php" method="post">
    <label>NAME:</label><input type="text" name="txt_nome" required maxlenght="100"><br>
    <label>LOGIN:</label><input type="text" name="txt_login" required maxlenght="100"><br>
    <label>SENHA:</label><input type="password" name="txt_senha" required maxlenght="100"><br>
    <label>CPF:</label><input type="text" name="txt_cpf" required maxlenght="11"><br>
    <label>DATA_NASC:</label><input type="date" name="dt_date" required><br>
    <label>ENDEREÇO:</label><input type="text" name ="txt_end" required maxlenght="100"><br>
    <label>BAIRRO:</label><input type="text" name="txt_bairro" required maxlenght="50"><br>
    <label>CIDADE:</label><input type="text" name="txt_cidade" required maxlenght="50"><br>
    <input type="submit" value="cadastrar">


</form>

<?php
include_once "footer.php"
?>