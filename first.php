<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/app.css">
    <title>Document</title>
</head>
<body>
    <h1> UZDUOTIS</h1>
<form action="" method="post">
Jūsų vardas
<input type="text" name="vardas" value="">
<br>
Jūsų el. pašto adresas:
<input type="text" name="elpastas" value="">
<input type="submit" value="Išsiųsti">
</form>
<?php 
if(isset($_POST['vardas'])){
echo "<p>Jūsų vardas: <b>" .$_POST['vardas']. "</b></p>";
} 

if(isset($_POST['elpastas'])){
    echo "<p>Jūsų elpastas: <b>" .$_POST['elpastas']. "</b></p>";
    }
?>
<hr>
<h1>1  UZDUOTIS</h1>
<form action="" method="get">
X: <input type="number" name="x"> 
<br>
Y: <input type="number"  name="y"> 
<br>
<input type="submit" value="Sumuoti">
</form>
<?php
if(isset($_GET['x']) || isset($_GET['y'])){
    $sum =  ($_GET['x']) +  ($_GET['y']);
    echo "<p> Suma yra : " .$sum. "</p>";
    } 
?>
<hr>
<h1>2  UZDUOTIS</h1>
<h2> Apklausa </h2>
<br>
<div class="apklausa">
<img src="./dingas.jpg" alt="">
<div class="apklausos_forma">
<p> Koks tai gyvunas?</p>
<form action="" method="get">
    <div>
    <input  type="radio" name="Gyvunas" value="Suo">
    <label for="Suo">Šuo</label><br>
    <input type="radio" name="Gyvunas" value="Vilkas">
    <label for="Suo">Vilkas</label><br> 
    <input type="radio" name="Gyvunas" value="Dingas">
    <label for="Dingas">Dingas</label><br> 
    <input type="radio" name="Gyvunas" value="Kojotas">
    <label for="Suo">Kojotas</label><br>
</div>
    <button class="s" type="submit">Spėk</button>
</form>
<?php   
if(!isset($_GET['Gyvunas'])){
    echo '<p class="red">Nera pasirinktas gyvunas</p>';
    } else {
    if(($_GET['Gyvunas']) == 'Dingas'){
    echo '<p class="green">Jūsų atsakymas teisingas, tai yra DINGAS</p>';
    } else {
        echo '<p class="red">Jūsų atsakymas neteisingas, TRY AGAIN</p>';
    }
    }
?>
</div>
</div>

<hr>
<h1>3  UZDUOTIS</h1>
    <?php 
    $counter=0;
    if(isset($_GET['Gyvunas1']) && isset($_GET['Gyvunas2']) && isset($_GET['Gyvunas3'])){
    if(($_GET['Gyvunas1']) == 'Dingas'){
        $counter ++;}
        if(($_GET['Gyvunas2']) == 'Koala'){
            $counter ++;}
            if(($_GET['Gyvunas3']) == 'Echnitas'){
                $counter++;
                    }
                    echo '<p class="pra">Jus atsakete i ' .$counter. " klausimu is 3 ir surinkote " . ($counter/3)*100 . '%</p>';
                }
    ?>
<div class="apklausa">
<img src="./dingas.jpg" alt="">
<div class="apklausos_forma">
<p> Koks tai gyvunas?</p>
<form action="" method="get">
    <div>
    <input  type="radio" name="Gyvunas1" value="Suo">
    <label for="Suo">Šuo</label><br>
    <input type="radio" name="Gyvunas1" value="Vilkas">
    <label for="Suo">Vilkas</label><br> 
    <input type="radio" name="Gyvunas1" value="Dingas">
    <label for="Dingas">Dingas</label><br> 
    <input type="radio" name="Gyvunas1" value="Kojotas">
    <label for="Suo">Kojotas</label><br>
</div>
<?php   
if(!isset($_GET['Gyvunas1'])){
    echo '<p class="red">Nera pasirinktas Gyvunas</p>';
    } else {
    if(($_GET['Gyvunas1']) == 'Dingas'){
    echo '<p class="green">Jūsų atsakymas teisingas</p>';

    } else {
        echo '<p class="red">Jūsų atsakymas neteisingas</p>';
    }
    }
?>
</div>  
</div>
<div class="apklausa">
<img src="./koala.jpg" alt="">
<div class="apklausos_forma">
<p> Koks tai gyvunas?</p>
    <div>
    <input  type="radio" name="Gyvunas2" value="Lape">
    <label for="Lape">Lape</label><br>
    <input type="radio" name="Gyvunas2" value="Mesknas">
    <label for="Mesknas">Meskinas</label><br> 
    <input type="radio" name="Gyvunas2" value="Panda">
    <label for="Panda">Panda</label><br> 
    <input type="radio" name="Gyvunas2" value="Koala">
    <label for="Koala">Koala</label><br>
</div>
<?php   
if(!isset($_GET['Gyvunas2'])){
    echo '<p class="red">Nera pasirinktas Gyvunas</p>';
    } else {
    if(($_GET['Gyvunas2']) == 'Koala'){
    echo '<p class="green">Jūsų atsakymas teisingas</p>';

    } else {
        echo '<p class="red">Jūsų atsakymas neteisingas</p>';
    }
    }
?>
</div>
</div>
<div class="apklausa">
<img src="./echnida.jpg" alt="">
<div class="apklausos_forma">
<p> Koks tai gyvunas?</p>
    <div>
    <input  type="radio" name="Gyvunas3" value="Echnitas">
    <label for="Echnitas">Echnitas</label><br>
    <input type="radio" name="Gyvunas3" value="Ezys">
    <label for="Ezys">Ezys</label><br> 
    <input type="radio" name="Gyvunas3" value="Kurmis">
    <label for="Kurmis">Kurmis</label><br> 
    <input type="radio" name="Gyvunas3" value="Zvirblis">
    <label for="Zvirblis">Zvirblis</label><br>
</div>
<?php   
if(!isset($_GET['Gyvunas3'])){
    echo '<p class="red">Nera pasirinktas Gyvunas</p>';
    } else {
    if(($_GET['Gyvunas3']) == 'Echnitas'){
    echo '<p class="green">Jūsų atsakymas teisingas</p>';
        } else {
        echo '<p class="red">Jūsų atsakymas neteisingas</p>';
    }
    }
?>
<button class="s" type="submit">Spėk</button>
</form>
</div>
</div>

<hr>
<h1>4  UZDUOTIS</h1>
<div class="catch">
    <form action="" method="post">
<div class="header">
<p>Select all images below that match this one:</p>
<?php
$masyvas = array(


    "<input class='body_img' type='radio' name='t2' value='tigras' id='t2'>
    <label class='body_label' for='t2'><img src='./t2.jpg' /></label>" ,
    
    "<input class='body_img' type='radio' name='t1'  value=tigras' id='t1'>
    <label class='body_label' for='t1'><img src='./t1.jpg' /></label>" ,
    
    "<input class='body_img' type='radio' name='t3' value='tigras' id='t3'>
    <label class='body_label' for='t3'><img src='./t3.jpg' /></label>" ,
    
    "<input class='body_img' type='radio' name='t4' value='tigras' id='t4'>
    <label class='body_label' for='t4'><img src='./t4.jpg' /></label>" ,
    
    "<input class='body_img' type='radio' name='t5' value='tigras' id='t5'>
    <label class='body_label' for='t5'><img src='./t5.jpg' /></label>" ,
    
    "<input class='body_img' type='radio' name='c1' value='cat' id='c1'>
    <label class='body_label' for='c1'><img src='./cat1.jpg' /></label>" ,
    
    "<input class='body_img' type='radio' name='vv' value='cat' id='c2'>
    <label class='body_label' for='c2'><img src='./cat2.jpg' /></label>" ,
    
    "<input class='body_img' type='radio' name='c3' value='cat' id='c3'>
    <label class='body_label' for='c3'><img src='./cat3.jpg' /></label>" ,
    
    "<input class='body_img' type='radio' name='c4' value='cat' id='c4'>
    <label class='body_label' for='c4'><img src='./cat4.jpg' /></label>", 
    
    "<input class='body_img' type='radio' name='c5' value='cat' id='c5'>
    <label class='body_label' for='c5'><img src='./cat5.jpg' /></label>");

    $length = count($masyvas);
error_reporting ( E_ALL );
ini_set ( 'display_errors', 1 );

$max = 9;
$list = range(0, $max);

$output = array();
while ( count($list) > 0 )  {
    $rnd = rand(0,count($list)-1);
    $output[] = $list[$rnd];
    unset($list[$rnd]);
    $list = array_values($list);
}
    echo $masyvas[$output[0]];
    $pirmas = $masyvas[$output[0]];
    array_splice($output, 0 , 1);
    $pirmas1 = explode(" ", $pirmas); 
?>
</div>
<div class="form_body">
    <?php 
for ($z=0; $z < count($output); $z++) { 
    echo $masyvas[$output[$z]];
}
    ?>
<button class="sub" type="submit">Verify</button>
</div>
</form>
<?php 

if($pirmas1[4] == "value='cat'") {
    if(isset($_POST['t1']) or isset($_POST['t2']) or isset($_POST['t3']) or isset($_POST['t4']) or isset($_POST['t5'])){
        echo '<p class="red">TU  ROBOTAS</p>';
    } else {
        echo '<p class="green">TU  ZMOGUS</p>';
    }  
}

if($pirmas1[4] == "value='tigras'") {
    if(isset($_POST['c1']) or isset($_POST['c2']) or isset($_POST['c3']) or isset($_POST['c4']) or isset($_POST['c5'])){
        echo '<p class="red">TU  ROBOTAS</p>';
    } else {
        echo '<p class="green">TU  ZMOGUS</p>';
    }   
}

?>
</body>
</html>