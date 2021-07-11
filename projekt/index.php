<!DOCTYPE html>
<html lang="cz">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="buttons">
            <button class="button" onclick="Memisek()">Akce 1 </button>
            <button class="button" onclick="Names()">Akce 2</button>
            <button class="button" onclick="Numbers()">Akce 3</button>
            <button class="button" onclick="DateComp()">Akce 4</button>
            <button class="button" onclick="Calcul()">Akce 5</button>
    </div>

    <div id="content">
    </div>
    
</body>
</html>
<script>
function Memisek(){
    $.ajax({url:"scripts/memisek.php", success:function(result){
    $("#content").html(result);}
})
} 
function Names(){
    $.ajax({url:"scripts/jmena.php", success:function(result){
    $("#content").html(result);}    
})
} 
function Calcul(){
    $.ajax({url:"scripts/calcul.php", success:function(result){
    $("#content").html(result);}
})
} 
function DateComp(){
    $.ajax({url:"scripts/datum.php", success:function(result){
    $("#content").html(result);}
})
} 
function Numbers(){
    $.ajax({url:"scripts/numbers.php", success:function(result){
    $("#content").html(result);}
})
} 
</script>