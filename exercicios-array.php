<?php include "cabecalho.php"; ?>
                          0         1         2
        $frutas = array("maçã", "laranja", "banana");

        print_r($frutas);//Escreve na tela os dados básicos

        var_dump($frutas); //Detalha os dados do array
            
        echo count($frutas); //Escreve na tela a quantidade de itens que o array possui

        array_push($frutas, "kiwi"); //Adiciona um novo item ao array

        foreach($frutas as $fruta){
            echo $fruta;
        }

        Exercício
        Gere um Array que cada índice desse array receba um novo array com as chaves Nome, idade email com seus 
        respectivos valores inventados aleatoriamente
        
        <?php
            $pessoas = array(
                array(
                    "Nome" => "Marcos",
                    "Idade" => 18,
                    "Email" => "marcosvinicius@example.com"
                ),
                array(
                    "Nome" => "Jonas",
                    "Idade" => 17,
                    "Email" => "jonassouza@example.com"
                ),
                array(
                    "Nome" => "João",
                    "Idade" => 16,
                    "Email" => "joaovitor@example.com"
                ),
                array(
                    "Nome" => "Fabiano",
                    "Idade" => 29,
                    "Email" => "fabianocardoso@example.com"
                ),
                array(
                    "Nome" => "Raphael",
                    "Idade" => 27,
                    "Email" => "raphaelveiga@example.com"
                ),
                array(
                    "Nome" => "Leonardo",
                    "Idade" => 17,
                    "Email" => "leonardoforty@example.com"
                ),
                array(
                    "Nome" => "Marcos Neris",
                    "Idade" => 40,
                    "Email" => "marcosneris@example.com"
                ),
                array(
                    "Nome" => "Viviane",
                    "Idade" => 36,
                    "Email" => "vivianedefatima@example.com"
                ),
                array(
                    "Nome" => "Mariani",
                    "Idade" => 10,
                    "Email" => "marianisanches@example.com"
                ),
                array(
                    "Nome" => "Luíz Otavio",
                    "Idade" => 9,
                    "Email" => "luizotavio@example.com"
                ),
            );
            echo "<table border = '5'>";
            echo "<tr>";
            echo "<td>Nome</td>";
            echo "<td>Idade</td>";
            echo "<td>Email</td>";
            echo "</tr>";
            for($i = 0; $i < count($pessoas); $i++) {
                echo "<tr>";
                echo "<td>".$pessoas[$i]["Nome"]."</td>";
                echo "<td>".$pessoas[$i]["Idade"]."</td>";
                echo "<td>".$pessoas[$i]["Email"]."</td>";
                echo "</tr>";
            }
            echo "</table>";

            echo "<table border = '5'>";
            echo "<tr>";
            echo "<td>Nome</td>";
            echo "<td>Idade</td>";
            echo "<td>Email</td>";
            echo "</tr>";
            foreach($pessoas as $itemLista) {
                echo "<tr>";
                echo "<td>".$itemLista["Nome"]."</td>";
                echo "<td>".$itemLista["Idade"]."</td>";
                echo "<td>".$itemLista["Email"]."</td>";
                echo "</tr>";
            }
            echo "</table>";
        ?>
<?php include "rodape.php"; ?>