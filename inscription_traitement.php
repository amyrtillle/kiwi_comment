<?php 
    require_once 'config.php'; 

    if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_retype'] && !empty($_POST['centres_interets'])))
    {
	$nom = htmlspecialchars($_POST['nom']);
	$prenom = htmlspecialchars($_POST['prenom']);
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $password_retype = htmlspecialchars($_POST['password_retype']);
        $centres_interets = htmlspecialchars($_POST['centres_interets']);

        $email = strtolower($email);
        
        $check = $bdd->prepare('SELECT pseudo, email, password, nom, prenom, centres_interets FROM utilisateurs WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();


        if($row == 0){ 
            if(strlen($pseudo) <= 100){ // On verifie que la longueur du pseudo <= 100
                if(strlen($email) <= 100){ // On verifie que la longueur du mail <= 100
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // Si l'email est de la bonne forme
                        if($password === $password_retype){ // si les deux mdp saisis sont bon

                            $cost = ['cost' => 12];
                            $password = password_hash($password, PASSWORD_BCRYPT, $cost);
                            
                            
                            $ip = $_SERVER['REMOTE_ADDR']; 


                            $insert = $bdd->prepare('INSERT INTO utilisateurs(nom, prenom, pseudo, email, password, centres_interets, ip, token) 
                                                                    VALUES(:nom, :prenom, :pseudo, :email, :password, :centres_interets, :ip, :token)');
                            $insert->execute(array(
                                'nom' => $nom,
                                'prenom' => $prenom,
                                'pseudo' => $pseudo,
                                'email' => $email,
                                'password' => $password,
                                'centres_interets' => $centres_interets,

				                'ip' => $ip,
				                'token' => bin2hex(openssl_random_pseudo_bytes(64)),
                            ));
                            //echo $insert->debugDumpParams();
                            //exit();
                            header('Location:inscription.php?reg_err=success');

                        }else header('Location: inscription.php?reg_err=password');
                    }else header('Location: inscription.php?reg_err=email');
                }else header('Location: inscription.php?reg_err=email_length');
            }else header('Location: inscription.php?reg_err=pseudo_length');
        }else header('Location: inscription.php?reg_err=already');
    }

   ?>
