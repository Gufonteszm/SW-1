// Função auxiliar para capturar o valor e exibir o alerta
function processarValidacao() {
    const valorInput = document.getElementById('cpfInput').value;
    const ehValido = validarCPF(valorInput);
 
    if (ehValido) {
    alert("O CPF " + valorInput + "é VÁLIDO!");
    } else {
    alert("O CPF + valorInput + é INVÁLIDO.");
   
    }
    
    }

    function soma(){
        
        const valorInput = document.getElementById('cpfInput').value;
       
        const ValorNome = document.getElementById('nameInput').value;
       
        alert("Olá "+ValorNome+" SEu cpf é: "+valorInput);
      
       
        }

    function validarCPF (cpf) {

        cpf = cpf.replace(/[^\d]+/g,'');
   

        if (cpf.length !== 11 || !! cpf.match(/(\d)\1{10}/)) {
 
        return false;
  
        }

        const digitos = cpf.split('').map(el => +el);}