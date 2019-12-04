window.onload = function(e) {
	fetch(
		'http://localhost/Web-Final/aluno', {
    }).then(response => response.json())
	.then(data => { 
		console.log(data);
		data.forEach(aluno => {
			var table = document.getElementById("tabledados");
			var row = table.insertRow(-1);
			var idColuna = row.insertCell(0);
			var nomeColuna = row.insertCell(1); 
			var cpfColuna = row.insertCell(2); 
			var idadeColuna = row.insertCell(3); 
			var cursoColuna = row.insertCell(4); 
			var sexoColuna = row.insertCell(5); 
			var matriculaColuna = row.insertCell(5); 
			idColuna.innerHTML = pessoa.id;
			nomeColuna.innerHTML = pessoa.nome;
			cpfluna.innerHTML = pessoa.cpf;
			idadeColuna.innerHTML = pessoa.idade;
			cursoColuna.innerHTML = pessoa.curso;
			sexoColuna.innerHTML = pessoa.sexo;
			matriculaColuna.innerHTML = pessoa.matricula;
		})
	}).catch(error => console.error(error))
}

function adicionarAluno(){
  let form = document.querySelector('.formAluno');
 form.classList.toggle('formVisible');
}

function enviarForm() {
	var form = document.getElementById('adicionarAluno');
	var data = {};
	data['nome'] = form.nome.value
	data['cpf'] = form.cpf.value;
	data['idade'] = form.idade.value;
	data['curso'] = form.curso.value; 
	data['sexo'] = form.sexo.value;
	data['matricula'] = form.matricula.value;
	// console.log(JSON.stringify(data));
	fetch('http://localhost/Web-Final/aluno', {
		method: 'POST',       
		body: JSON.stringify(data)
	})
	.then((response) => {
		if (response.ok) {
			return response.json() 
		} else {
			return Promise.reject({ status: res.status, statusText: res.statusText });
		}   

	})
	.then((data) => console.log(data))
	.catch(err => console.log('Error message:', err.statusText));
}