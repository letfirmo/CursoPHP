<?php

    require_once("globals.php");
    require_once("db.php");
    require_once("models/User.php");
    require_once("models/Message.php");
    require_once("dao/UserDAO.php");

    $message = new Message($BASE_URL);

    $userDao = new UserDAO($conn, $BASE_URL);

    //Resgata o tipo do formulário
    $type = filter_input(INPUT_POST, "type");

    //Verificação do tipo de formulario
    if($type === "register") {
        $name = filter_input(INPUT_POST, "name");
        $lastname = filter_input(INPUT_POST, "lastname");
        $email = filter_input(INPUT_POST, "email");
        $password = filter_input(INPUT_POST, "password");
        $confirmpassword = filter_input(INPUT_POST, "confirmpassword");

        //Verificação de dados minimos
        if($name && $lastname && $email && $password){

            //Verificar se as senhas batem
            if($password === $confirmpassword) {

                //verificar se o email já esta cadastrado no sistema
                if($userDao->findByEmail($email) == false){

                    $user = new User();

                    // Criação de token e senha
                    $userToken = $user->generateToken();
                    $finalPassword = $user->generatePassword($password);

                    $user->name = $name;
                    $user->lastname = $lastname;
                    $user->email = $email;
                    $user->password = $password;
                    $user->token = $userToken;
                    
                    $auth = true;

                    $userDao->create($user, $auth);

                } else{
                    //Enviar uma mensagem de erro, usuário já cadastrado
                    $message->setMessage("E-mail já cadastrado, faça o login", "error", "back");
                }
            } else{
                //Enviar uma mensagem de erro, de dados faltantes
                $message->setMessage("As senhas não são iguais", "error", "back");
            }

        }else {
            //Enviar uma mensagem de erro, senhas nao batem
            $message->setMessage("Por favor, preencha todos os campos.", "error", "back");
        }
    } else if($type === "login"){

    }