<?php
    include_once 'conexao.php';
    

    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }    


    try{

    $dadoscad = filter_input_array(INPUT_POST, FILTER_DEFAULT);

   // var_dump($dadoscad);


    if(isset($_FILES['foto'])){
        $arquivo = ($_FILES['foto']);
        

        if($arquivo['error']){
            echo 'Erro ao carregar arquivo';
            header ("Location: frmaluno.php");
        }

        $pasta = "fotos/";
        $nomearquivo = $arquivo['name'];
        $novonome = uniqid();
        $extensao = strtolower(pathinfo($nomearquivo, PATHINFO_EXTENSION));

        if($extensao!="jpg" && $extensao!="png"){
            die("Tipo não aceito");
        }
        else{
            $salvaimg = move_uploaded_file($arquivo['tmp_name'], $pasta . $novonome . "." . $extensao);

             if($salvaimg){
                 $path = $pasta . $novonome . "." . $extensao;
                 echo "ok";
             }

        }


    }

  
    if (!empty($dadoscad['btncad'])) {

        $vazio = false;

        $dadoscad = array_map('trim', $dadoscad);
        if (in_array("", $dadoscad)) {
            $vazio = true;
           
            echo "<script>
        alert('Preencher todos os campos!!!');
        parent.location = 'frmaluno.php';
        </script>";

        } else if(!filter_var($dadoscad['email'], FILTER_VALIDATE_EMAIL)) {
            $vazio = true;

            echo "<script>
            alert('Informe um e-mail válido!!');
            parent.location = 'frmaluno.php';
            </script>";
            
            
        }
    

if (!$vazio) {


    $senha = password_hash($dadoscad['senha'], PASSWORD_DEFAULT);

    $sql = "insert into aluno(nome,sexo,datanascimento,
    telefone,cpf,rg,cep,numerocasa,complemento,foto,email,senha)
    values(:nome,:sexo,:datanascimento,:telefone,:cpf,:rg,:cep,
    :numerocasa,:complemento,:foto,:email,:senha)";

    $salvar= $conn->prepare($sql);
    $salvar->bindParam(':nome', $dadoscad['nome'], PDO::PARAM_STR);
    $salvar->bindParam(':sexo', $dadoscad['sexo'], PDO::PARAM_STR);
    $salvar->bindParam(':datanascimento', $dadoscad['dn'], PDO::PARAM_STR);
    $salvar->bindParam(':telefone', $dadoscad['telefone'], PDO::PARAM_STR);
    $salvar->bindParam(':cpf', $dadoscad['cpf'], PDO::PARAM_STR);
    $salvar->bindParam(':rg', $dadoscad['rg'], PDO::PARAM_STR);
    $salvar->bindParam(':cep', $dadoscad['cep'], PDO::PARAM_STR);
    $salvar->bindParam(':numerocasa', $dadoscad['numero'], PDO::PARAM_INT);
    $salvar->bindParam(':complemento', $dadoscad['complemento'], PDO::PARAM_STR);
    $salvar->bindParam(':foto',  $path, PDO::PARAM_STR);
    $salvar->bindParam(':email', $dadoscad['email'], PDO::PARAM_STR);
    $salvar->bindParam(':senha', $senha, PDO::PARAM_STR);
    $salvar->execute();

    if ($salvar->rowCount()) {
        
        echo "<script>
        alert('Usuário cadastrado com sucesso!!');
        parent.location = 'frmaluno.php';
        </script>";

        unset($dadoscad);
    } else {
        echo "<script>
        alert('Usuário não cadastrado!');
        parent.location = 'frmaluno.php';
        </script>";
        
    }

}

}


if (!empty($dadoscad['btneditar'])) {

    $dadoscad = array_map('trim', $dadoscad);

    if(!filter_var($dadoscad['email'], FILTER_VALIDATE_EMAIL)) {
        $vazio = true;

        echo "<script>
        alert('Informe um e-mail válido!!');
        parent.location = 'frmaluno.php';
        </script>";
        
        
    }

    $sql = "UPDATE aluno set nome=:nome,sexo=:sexo,datanascimento=:datanascimento,
    telefone=:telefone,cpf=:cpf,rg=:rg,cep=:cep,numerocasa=:numerocasa,
    complemento=:complemento,foto=:foto,email=:email WHERE matricula =:matricula";

    $salvar= $conn->prepare($sql);
    $salvar->bindParam(':nome', $dadoscad['nome'], PDO::PARAM_STR);
    $salvar->bindParam(':sexo', $dadoscad['sexo'], PDO::PARAM_STR);
    $salvar->bindParam(':datanascimento', $dadoscad['dn'], PDO::PARAM_STR);
    $salvar->bindParam(':telefone', $dadoscad['telefone'], PDO::PARAM_STR);
    $salvar->bindParam(':cpf', $dadoscad['cpf'], PDO::PARAM_STR);
    $salvar->bindParam(':rg', $dadoscad['rg'], PDO::PARAM_STR);
    $salvar->bindParam(':cep', $dadoscad['cep'], PDO::PARAM_STR);
    $salvar->bindParam(':numerocasa', $dadoscad['numero'], PDO::PARAM_INT);
    $salvar->bindParam(':complemento', $dadoscad['complemento'], PDO::PARAM_STR);
    $salvar->bindParam(':foto', $path , PDO::PARAM_STR);
    $salvar->bindParam(':email', $dadoscad['email'], PDO::PARAM_STR);
    $salvar->bindParam(':matricula', $dadoscad['matricula'], PDO::PARAM_INT);
    $salvar->execute();

    if ($salvar->rowCount()) {
        
        echo "<script>
        alert('Dados Atualizadoscom sucesso!!');
        parent.location = 'relalunos.php';
        </script>";

        unset($dadoscad);
    } else {
        echo "<script>
        alert('Aluno não cadastrado!');
        parent.location = 'relalunos.php';
        </script>";
        
    }





}

}
catch(PDOException $erro){
    echo $erro;

}

?>