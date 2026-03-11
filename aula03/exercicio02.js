function somar() {

    var numero1 = parseFloat(document.getElementById("num1").value);
    var numero2 = parseFloat(document.getElementById("num2").value);

    var soma = numero1 + numero2;

    document.getElementById("resultado").innerText = "Resultado: " + soma;
}
