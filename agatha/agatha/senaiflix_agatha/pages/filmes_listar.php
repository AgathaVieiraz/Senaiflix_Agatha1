<?php
include 'conexao.php';

$sql = "SELECT * FROM filmes ";

$resultado = $conn->query($sql);


?>

<table border="1" widht='50%' class="table table-sm">
    <thead class="table-danger">
        <tr>
            <th>id</th>   
            <th>Titulo do filme</th>
            <th>Foto</th>
            <th>Descrição</th>
            <th>Genero</th> 
            <th>Classificação</th>
            <th>Editar</th>
            <th>Remover</th>   
        </tr>
    </thead>
    <a href="index.php?pagina=filmes_cadastro" target = "">Cadastar novo filme.</a>

<?php
while($linha = $resultado->fetch_assoc()){
    echo"<tr>
        <td>".$linha['id']."</td>
        <td>".$linha['titulo']."</td>
        <td><img src='uploads/".$linha['foto']."' height = '100px' width = '100px' ></td>
        <td>".$linha['descricao']."</td>
        <td>".$linha['genero']."</td>
        <td>".$linha['classificacao']."</td>
        <td><a href = 'index.php?pagina=filmes_editar&id=".$linha['id']."'>Editar</td>
        <td><a href = 'pages/filmes_remover.php?id=".$linha['id']."'>Remover</a></td>
        </tr>
    
    ";
}
?>

</table>