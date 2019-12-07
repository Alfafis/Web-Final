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

	fetch(
		'http://localhost/Web-Final/aluno', {
    }).then(response => response.json())
	.then(data => { 
		console.log(data);
		data.forEach(empresa => {
			var table = document.querySelector('#tableAlterAluno');
			var row = table.insertRow(-1);
			var labelColuna = row.insertCell(0);
			var nomeColuna = row.insertCell(1); 
			var optionColuna = row.insertCell(2);
			labelColuna.innerHTML = '<span>&nbsp</span>';
			nomeColuna.innerHTML = empresa.nome;
			optionColuna.innerHTML = '<div class="form-group"><button>alterar</button><button>deletar</button></div>';
		})
	}).catch(error => console.error(error))
	fetch(
		'http://localhost/Web-Final/empresa', {
    }).then(response => response.json())
	.then(data => { 
		console.log(data);
		data.forEach(empresa => {
			var table = document.querySelector('#tableAlterEmpresa');
			var row = table.insertRow(-1);
			var labelColuna = row.insertCell(0);
			var nomeColuna = row.insertCell(1); 
			var optionColuna = row.insertCell(2);
			labelColuna.innerHTML = '<span>&nbsp</span>';
			nomeColuna.innerHTML = empresa.nome;
			optionColuna.innerHTML = '<div class="form-group"><button>alterar</button><button>deletar</button></div>';
		})
	}).catch(error => console.error(error))
}

function postFormAluno() {
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

function postFormEmpresa() {
	var form = document.querySelector('#adicionarEmpresa');
	var data = {};
	data['nome'] = form.nome.value
	data['cnpj'] = form.cnpj.value;
	data['area'] = form.area.value;
	// console.log(JSON.stringify(data));
	fetch('http://localhost/Web-Final/empresa', {
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