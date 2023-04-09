<?php 
require_once './conff.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
</head>
<body>
<input type="button"  class="btn" name="btn-commence" value="Commencer">
<br>
<input type="text"  class="btn" name="btn-perso" value="Personnage" readonly>
<br>
<input type="text"  class="btn" name="btn-action" value="Action"readonly>
<br>
<input type="text"  class="btn" name="btn-lieu" value="Lieu"readonly>

<?php
    if(isset($_POST['action'])){
        switch($_POST['action']){
            case 'getPerso':
                echo json_encode(getPerso());
                break;
            case 'getAction':
                echo json_encode(getAction());
                break;
            case 'getLieu':
                echo json_encode(getLieu());
                break;
            default:
                break;
        }
    }
?>
<script src="./ajaxreq.js" async></script>
</body>
</html>