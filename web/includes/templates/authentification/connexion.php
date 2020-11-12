<?php

    if(isset($_POST['username']) && isset($_POST['password']))
    {
        if($_POST['username'] != "" && $_POST['password'] != "")
        {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $requete = $usersDao->authentify_users($username, $password);

            if ($requete != null) 
            {
                $_SESSION['username'] = $username;

                $donnees = $usersDao->get_user_profil($username);

                $_SESSION['profil'] = $donnees[0]['profil'];

                header("Location: index.php");
            }
            else
            {
                header("Location: index.php?connexion=1?erreur=1");
            }
        }
        else
        {
            header("Location: index.php?connexion=1?erreur=2");      
        }
    }
    else
    {
?>

<div class="row">
    <div class="col-md-6 col-md-offset-3"> 
        <center>
            <h2>LOGIN</h2>
        </center>
        <br>

        <form action="" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" id="exampleInputEmail1" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>
<?php
    }
?>

