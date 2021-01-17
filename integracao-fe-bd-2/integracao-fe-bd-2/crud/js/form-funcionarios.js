console.log('oi');

function validaFuncionarios(){


    var nome = document.getElementById('nome');
    var dt_nascimento = document.getElementById('dt_nascimento');
    var dt_admissao = document.getElementById('dt_admissao');
    var genero = document.getElementById('genero');
    var salario = document.getElementById('salario');
    var departamento = document.getElementById('departamento');

    // por enquanto retorna sempre FALSE para evitar o envio do getElementById

        if (nome.value == '' && dt_nascimento.value == '' && dt_admissao.value == '' && genero.value == '' && salario.value =='' && departamento.value == '') {
        erro.innerHTML = 'Campo nome deve ser preenchido';
        erro.classList.remove('hidden');
        nome.focus
        return false;
    }

    if (nome.value == '') {
        erro.innerHTML = 'Campo nome deve ser preenchido';
        erro.classList.remove('hidden');
        nome.focus
        return false;
    }
    if (dt_nascimento.value == '') {
        erro.innerHTML = 'Data de nascimento deve ser preenchida';
        erro.classList.remove('hidden');
        dt_nascimento.focus
        return false;
    }
    if (dt_admissao.value == '') {
        erro.innerHTML = 'Data de admissão deve ser preenchida';
        erro.classList.remove('hidden');
        dt_admissao.focus
        return false;
    }
    if (genero.value == '') {
        erro.innerHTML = 'Campo genero deve ser preenchido';
        erro.classList.remove('hidden');
        genero.focus
        return false;
    }
    if (salario.value =='') {
        erro.innerHTML = 'Campo salário deve ser preenchido';
        erro.classList.remove('hidden');
        salario.focus
        return false;
    }
    if (departamento.value == '') {
        erro.innerHTML = 'Campo departamento deve ser preenchido';
        erro.classList.remove('hidden');
        departamento.focus
        return false;
    }else{
        return true;
    }

}


function validaExclusao(){


    excluir.onclick()
}