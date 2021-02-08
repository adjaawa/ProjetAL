<?php

    if(isset($_POST['username']) && isset($_POST['password']))
    {
        if($_POST['username'] != "" && $_POST['password'] != "")
        {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $requete = $usersDao->authentify_users($username, $password);

            if ($requete != false) 
            {
                $_SESSION['username'] = $username;

                $donnees = $usersDao->get_user_profil($username);

                $_SESSION['profil'] = $donnees[0]['profil'];
                $_SESSION['id'] = $donnees[0]['id'];
                $profil = $_SESSION['username'];

                header("Location: index.php?");
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
    <div class="col-md-4 col-md-offset-4"> 
        <center>
            <h2 style="font-weight: 800;">LOGIN</h2>
        </center>
        <br>
        <br>
        <form action="" method="POST">
            <div class="form-group">
                <input type="text" class="form-control fc" id="exampleInputEmail1" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control fc" id="exampleInputPassword1" name="password" placeholder="Password">
            </div>
            <br>
            <!-- <div class="col-md-12"> -->
                <button type="submit" class="btn btn-primary btn-con">LOG IN</button>
            <!-- </div>    -->
        </form>

    </div>
</div>
<?php
    }
?>

