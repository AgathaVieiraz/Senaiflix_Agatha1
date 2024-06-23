<?php
include 'conexao.php';

$sql = "SELECT * FROM assinaturas";

$resultado = $conn->query($sql);

?>



<table border="1" widht='50%' class="table table-sm">
    <thead class="table-danger">
        <tr>
            <th>id</th>   
            <th>Plano</th>
            <th>Data inicio</th>
            <th>Data fim</th> 
            <th>Editar</th>
            <th>Remover</th>    
        </tr>
    </thead>
<a href="index.php?pagina=assinaturas_cadastro" target = "">Cadastar nova assinatura. </a>

<?php


while($linha = $resultado->fetch_assoc()){
    echo"   
        <tr>
        <td>".$linha['id']."</td>
        <td>".$linha['plano']."</td>
        <td>".$linha['data_inicio']."</td>
        <td>".$linha['data_fim']."</td>
        <td><a href = 'index.php?pagina=assinaturas_editar&id=".$linha['id']."'>Editar</td>
        <td><a href = 'index.php?pagina=assinaturas_remover&id=".$linha['id']."'>Remover</a></td>
        </tr>
    
    ";
}
?>

</table>