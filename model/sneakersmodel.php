<?php
    require "../service/conexao.php";

    function insertcadastro($nome, $sobrenome, $email, $senha){
        global $conn;
        try {
            $stmt = $conn->prepare("INSERT INTO `cadastro`
    (`nome`, `sobrenome`, `email`, `senha)
            VALUES (\"$nome\" , \"$sobrenome\", \"$email\", \"$senha\")");
            $stmt->execute();
            echo json_encode(['nome' => $nome , 'sobrenome' => $sobrenome , 'email' => $email , 'senha' => $senha]);
        } catch (PDOException $e) {
            echo json_encode(['error' => $e->getmessage()]);
        }
    }
    ?>