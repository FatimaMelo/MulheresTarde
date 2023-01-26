<?php  
  require_once 'head.php';
  include_once 'conexao.php';
  session_start();
  ob_start();

  $id = filter_input(INPUT_GET, "matricula", FILTER_SANITIZE_NUMBER_INT);

  if (empty($id)) {
      $_SESSION['msg'] = "Erro: Aluno não encontrado!";
      header("Location: relalunos.php");
      exit();
  }


  //EXCLUSÃO PERMANENTE
 /* $sql = "DELETE from aluno where matricula = $id LIMIT 1";
  $resultado= $conn->prepare($sql);
  $resultado->execute(); */

  //INATIVANDO O ALUNO
  $sql = "UPDATE aluno set status='I' where matricula = $id LIMIT 1";
  $resultado= $conn->prepare($sql);
  $resultado->execute();



  if(($resultado) AND ($resultado->rowCount() != 0)){
    echo "<script>
    alert('Aluno excluido com sucesso!');
    parent.location = 'relalunos.php';
    </script>";

  }else{
    echo "<script>
    alert('Exclusão não realizada!');
    parent.location = 'relalunos.php';
    </script>";
  }

?>


