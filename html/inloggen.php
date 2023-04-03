
 <?php
 //Set the correct username and password
 session_start();
$username = "hussein";
$password = "1234";
if(isset($_POST['inloggen'])){
    if(empty($_POST['pas']) && empty($_POST['naam']))
    {
       echo"
      
       ";
    }
    else{
        if($_POST['pas'] == $password && $_POST['naam'] == $username ){
            $_SESSION['username'] = $username;
            $_SESSION['logged_in'] = true;
            header('location: admin.php');
        }
    }  
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styleinlog.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/styleinlog.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Inloggen</title>
</head>
<body>
<main class="main">
    <!--Hier komt de header en de nav en zit in alle links naar andere paginas -->
    <header>
        <nav>
            <h2>Hethalvehert.nl</h2>
            <ul>
                <li><a href="index.php">Home</a></li>
            
            </ul>
        </nav>
    </header>
    <!--Hier komt stuke tekst over het resuatrant en een knop om te bestellen-->
   <div class="form">
    <form class="inlog" action="" method="POST">
        <h2>Inloggen</h2>
        <label>Gebruik Naam</label>
        <input type="text" name="naam" autocomplete="off" id="userinput">
        <label>Wachtwoord</label>
        <input type="password" name="pas" autocomplete="off" id="userpas"> 
        <input type="submit" id="admin" name="inloggen" value="inloggen">    
    </form>
   </div>
</main>
<script src="/javascript/inlog.js"></script>

</body>
</html>


