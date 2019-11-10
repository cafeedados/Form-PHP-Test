<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Convidados</title>
    <link rel="stylesheet" type="text/css" href="/css/index.css">
</head>
<body>
<div class="conteudo">
    <div class="table">
        <div class="dados input button btn">
            <form id='form' action="?m=recebeForm&p" method="POST">
                Nome:<br>
                <input type="text" id="nome" name="nome"><br>
                Sobrenome:<br>
                <input type="text" id="sobrenome"  name="sobrenome"><br>
                Convidados:<br>
                <input type="text" id="convidados"  name="convidados"><br>
                Status:<br>
                <select name="status">
                    <option value="Sim" selected>Sim</option> 
                    <option value="Nao">Não</option>
                </select><br><br>
                <input onclick="validar()" type="submit" value="Enviar">
            </form>
        </div>
    </div>

<br><br><br>

    <div class="customers datatable form">
        <table border=1>
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Convidados</th>
                <th>Status</th>
                <th>-</th>
            </tr>
            <?php
                foreach($resultado as $resultado) {?>

                <tr>
                    <td><?php echo $resultado['Nome']; ?></td>
                    <td><?php echo $resultado['Sobrenome']; ?></td>
                    <td><?php echo $resultado['Convidados']; ?></td>
                    <td><?php echo $resultado['Status']; ?></td>
                    <td> <a href="?m=exclui&p&ID=<?php echo $resultado['ID'] ?> ">Excluir</a> </td>
                </tr>
            
            <?php }?>
    </div>
</div>
<script type="text/javascript" src="js/valida.js"></script>
</body>
</html>