<?php 
    if(isset($_POST['submit']))
    {
      /*
        print_r('Nome:' . $_POST['name']);
        print_r('<br>');
        print_r('Email:' . $_POST['email']);
        print_r('<br>');
        print_r('CPF:' . $_POST['cpf']);
        print_r('<br>');
        print_r('Celular:' . $_POST['phone']);
        print_r('<br>');
        print_r('Endereço:' . $_POST['endereco']);
        print_r('<br>');
        print_r('Estado:' . $_POST['country']);
    
    
    */
    include_once('config.php');

    $nome= $_POST['name'];
    $email= $_POST['email'];
    $cpf= $_POST['cpf'];
    $celular= $_POST['phone'];
    $endereco= $_POST['endereco'];
    $estado= $_POST['country'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,cpf,celular,endereco,estado)
    VALUES ('$nome','$email','$cpf','$celular','$endereco','$estado')"); //*
    }

?>

