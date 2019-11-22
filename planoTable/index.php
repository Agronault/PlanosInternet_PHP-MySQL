<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Planos Table</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="style.css"/>
    </head>

    <body>

        <?php
            require_once "includes/banco.php";
        ?>

        <div id="body">

            <h1>Planos de Internet</h1>
            <table class="list">
                <?php 
                    $buscaPlanos = $banco->query("select * from planos order by nome");

                    if(!$buscaPlanos){
                        echo "<tr><td>Houve um erro ao acessar o banco de planos :(";
                    }else{
                        if($buscaPlanos->num_rows == 0){
                            echo "<tr><td>Nenhum plano encontrado :/";
                        }else{
                            while($reg = $buscaPlanos->fetch_object()){
                                echo "<tr><td>$reg->thumbnail<td>$reg->nome";
                                echo "<td>ADM";
                            }
                        }
                    }

                ?>
            </table>

        </div>

        <?php $banco->close(); ?>

    </body>
</html>