<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script src="main.js"></script>
</head>
<body>
<?php 
        // echo "<h1> Bienvenue!!</h1>";
        //echo "<form action='index.php/Home/AfficherLesJeux' method='get'>";

    foreach($lesCateg as $uneCateg )
    {
        echo "<a href=''>".$uneCateg->nomCateg."</a>";
       // echo "<input type='radio' value= '". $uneCateg->idCateg."-".$uneCateg->nomCateg."'><p>".$uneCateg->idCateg."-".$uneCateg->nomCateg."</p><input type= 'submit' value='Afficher les jeux'>
    </p>";
    }
   // echo "</form>";
   
?>

</body>
</html>