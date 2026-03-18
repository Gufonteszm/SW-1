function calcularIMC(peso, altura) {

    const imc = peso / (altura * altura);
    

    return imc.toFixed(2);
}

const peso = 200; 
const altura = 2.10; 
const resultado = calcularIMC(peso, altura);

console.log("Seu IMC é: " + resultado); 

if (resultado < 18.5){
    console.log("magreza, grau: 0")
}
if (resultado >= 18.5 && resultado <= 24.9){
    console.log("normal, grau: 0")
}
if (resultado >= 25 && resultado <= 29.9){
    console.log("sobrepeso, grau: 1")
}
if (resultado >= 30 && resultado <= 39.9){
    console.log("obesidade, grau: 2")
}
if (resultado > 40){
    console.log("obesidade grave, grau: 3")
}