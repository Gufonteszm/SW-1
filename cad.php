 <?php
    
        $_nome = $_POST["nome"];
        $_sobrenome = $_POST["sobrenome"];
        $_m1 = $_POST["m1"];
        $_m2 = $_POST["m2"];
        $_m3 = $_POST["m3"];
        $_media= (($_m1+$_m2+$_m3)/3);

        if ($_media >=9) {
echo "MB";
}

if ($_media < 8 && $_media >= 7) {
echo "B";
}

if ($_media < 7 && $_media >= 4) {
echo "R";
}

if ($_media < 4 && $_media >=1) {
echo "I";
}
if ($_media <=0 ) {
echo "N/A";
}

echo "É um prazer te conhecer $_nome $_sobrenome <br>";
echo "Sua média é: $_media";
?>
