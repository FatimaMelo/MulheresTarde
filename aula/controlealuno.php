<?php
    include_once 'conexao.php';

try{

    $dadoscad = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    var_dump($dadoscad);

    if (!empty($dadoscad['btncad'])) {
    
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
    $salvar->bindParam(':foto', $dadoscad['foto'], PDO::PARAM_STR);
    $salvar->bindParam(':email', $dadoscad['email'], PDO::PARAM_STR);
    $salvar->bindParam(':senha', $dadoscad['senha'], PDO::PARAM_STR);
    $salvar->execute();

    if ($salvar->rowCount()) {
        echo "Usuário cadastrado com sucesso!";
        unset($dadoscad);
    } else {
        echo "Usuário não cadastrado com sucesso!</p>";
    }

}

}
catch(PDOException $erro){
    echo $erro;

}

?>