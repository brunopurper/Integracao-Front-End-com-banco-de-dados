function validaDepartamento(){


    var nome = document.getElementById('nome');
    var sigla = document.getElementById('sigla');
    var erro = document.getElementById('erro');
    // por enquanto retorna sempre FALSE para evitar o envio do form

    if (nome.value == ''  && sigla.value == '') {
        erro.innerHTML='Preencha os campo nome e sigla!'
        erro.classList.remove('hidden');
        nome.focus();
        return false;
    }
    

    if (nome.value == '') {
        erro.innerHTML='Preencha o campo nome!'
        erro.classList.remove('hidden');
        nome.focus();
        return false;
    }

    if (sigla.value == '') {
        erro.innerHTML='Preencha o campo sigla!'
        erro.classList.remove('hidden');
        sigla.focus();
        return false;
    }
    
    


}


function validaExclusao(){


    excluir.onclick()
}