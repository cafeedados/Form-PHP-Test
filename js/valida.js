var form = document.getElementById('form'),
	nome = document.getElementById('nome');

form.onsubmit = function validar(){

  var nome = document.getElementById("nome").value;
  var sobrenome = document.getElementById("sobrenome").value;

  var padrao = /[^a-zà-ú]/gi;

  var padrao2 = /[^a-z à-ú]/gi;

  var valida_nome = nome.match(padrao);
  var valida_sobrenome = sobrenome.match(padrao2);

  if( valida_nome || !nome ){
     alert('Nome possui caracteres inválidos ou é vazio')
     return false;
  }else{

  }

  if( valida_sobrenome || !sobrenome ){
     alert('Sobrenome possui caracteres inválidos ou é vazio')
     return false;
  }else{

  }

  if(form.nome.value.length > 10){
    alert('Nome não pode ser maior que 10 caracteres!');
    return false;
  }

  if(form.sobrenome.value.length > 20){
    alert('Sobrenome não pode ser maior que 20 caracteres!');
    return false;
  }

  if(form.convidados.value == ""){
    alert('O campo Convidados não pode ficar vazio!');
    return false;
  }else{
    
  }

    var integer = parseInt(form.convidados.value, 10);
    res = Number.isInteger(integer)

  if(res === false){
    alert('O Campo Convidados Tem que ser Inteiro!')
    return false;
  }else{
    
  }

}