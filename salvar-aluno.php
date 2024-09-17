<?php
    switch ($_REQUEST["acao"]){
        case 'cadastrar':
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $email = $_POST["email"];
        $data_nasc = $_POST["data_nasc"];
        $sexo = $_POST["sexo"];
        $curso = $_POST["curso"];

    
            $sql = "INSERT INTO usuarios (nome, sobrenome, email, data_nasc, sexo, curso) VALUES ('$nome', '$sobrenome', '$email', '$data_nasc', '$sexo', '$curso')";

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Aluno cadastrado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível realizar o cadastro');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
        
            case 'editar':
                $nome = $_POST["nome"];
                $sobrenome = $_POST["sobrenome"];
                $email = $_POST["email"];                
                $sexo = $_POST["sexo"];
                $data_nasc = $_POST["data_nasc"];
                $curso = $_POST["curso"];

                $sql = "UPDATE usuarios SET
                            nome='{$nome}',
                            sobrenome='{$sobrenome}',
                            email='{$email}',
                            sexo='{$sexo}',
                            data_nasc='{$data_nasc}',
                            curso='{$curso}'
                        WHERE
                            id=".$_REQUEST["id"];

                $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Aluno editado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível editar o cadastro');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

                break;

        case 'excluir':
        $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Excluído com sucesso.');</script>";
            print "<script>location.href='?page=listar';</script>";
        }else{
            print "<script>alert('Não foi possível excluir.');</script>";
            print "<script>location.href='?page=listar';</script>";
        }

        break;
    }