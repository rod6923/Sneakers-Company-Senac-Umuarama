<?php
    require "../conexao.php";

    function insertsneakerscompany($nome, $email, $senha, $senhaconfirm){
        global $conn;
        try {
            $stmt = $conn->prepare("INSERT INTO `sneakerscompany`
    (`nome`, `sobrenome`, `email`, `senha)
            VALUES (\"$nome\" , \"$sobrenome\", \"$email\", \"$senha\")");
            $stmt->execute();
            echo json_encode(['nome' => $nome , 'sobrenome' => $sobrenome , 'email' => $email , 'senha' => $senha]);
        } catch (PDOException $e) {
            echo json_encode(['error' => $e->getmessage()]);
        }
    }
    ?>