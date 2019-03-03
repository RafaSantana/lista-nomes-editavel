<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style type="text/css">
    table, th, td {
    border: 0;
    width: 100%;
    }

    th, td{
    width: auto;
    }

    th{
    text-align: left;
    }
    </style>
    <title>Manipulação de lista básico</title>
  </head>
  <body>
    <?php
      require 'config.php';
     ?>
    <a href="adicionar.php">Adicionar novo usuário</a>
    <table>
      <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>
      </tr>
      <?php
        $sql = "SELECT * FROM usuarios";
        $sql = $pdo->query($sql);
        if ($sql->RowCount()>0){
          foreach ($sql->fetchAll() as $usuario) {
            echo '<tr>';
            echo '<td>'.$usuario['nome'].'</td>';
            echo '<td>'.$usuario['email'].'</td>';
            echo '<td><a href="editar.php?id='.$usuario['id'].'">Editar</a> - <a href="excluir.php?id='.$usuario['id'].'">Excluir</a></td>';
            echo '</tr>';
          }
        }
      ?>
    </table>
  </body>
</html>
