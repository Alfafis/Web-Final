window.onload = function(e) {
	fetch(
		'http://localhost/Web-Final/aluno', {		
		}).then(response => response.json())				
	.then(data => { 
		console.log(data);
		data.forEach(aluno => {  
			var table = document.getElementById("tableAluno");
			var row = table.insertRow(-1);
			var idColuna = row.insertCell(0);
			var nomeColuna = row.insertCell(1); 
			var cpfColuna = row.insertCell(2); 
			var idadeColuna = row.insertCell(3); 
			var cursoColuna = row.insertCell(4); 
			var sexoColuna = row.insertCell(5); 
			var matriculaColuna = row.insertCell(6); 
			idColuna.innerHTML = aluno.id;
			nomeColuna.innerHTML = aluno.nome;
			cpfColuna.innerHTML = aluno.cpf;
			idadeColuna.innerHTML = aluno.idade;
			cursoColuna.innerHTML = aluno.curso;
			sexoColuna.innerHTML = aluno.sexo;
			matriculaColuna.innerHTML = aluno.matricula;
		})
	}).catch(error => console.error(error))

	fetch(
		'http://localhost/Web-Final/empresa', {
    }).then(response => response.json())
	.then(data => { 
		console.log(data);
		data.forEach(empresa => {
			var table = document.querySelector('#tableEmpresa');
			var row = table.insertRow(-1);
			var idColuna = row.insertCell(0);
			var nomeColuna = row.insertCell(1); 
			var cnpjColuna = row.insertCell(2); 
			var areaColuna = row.insertCell(3);
			idColuna.innerHTML = empresa.id;
			nomeColuna.innerHTML = empresa.nome;
			cnpjColuna.innerHTML = empresa.cnpj;
			areaColuna.innerHTML = empresa.area;
		})
	}).catch(error => console.error(error))
}

function enviarForm() {
	var form = document.querySelector('#adicionarAluno');
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

function voltar() {
	window.history.back();
}

function go() {
	window.history.go();
}