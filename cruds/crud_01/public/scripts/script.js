listarUsuarios()

function abrirFormCadastrar() {
  document.querySelector("table#form").style.display = "table"
  document.querySelector("button#btnModificar").style.display = "none"
}

function limparFormulario() {
  document.querySelector("table#form").style.display = "none"
  document.querySelector("input#nome").value = ""
  document.querySelector("input#email").value = ""
  document.querySelector("input#cidade").value = ""
  document.querySelector("input#estado").value = ""
  document.querySelector("input#telefone").value = ""
  document.querySelector("button#btnCadastrar").style.display = "inherit"
  document.querySelector("button#btnModificar").style.display = "inherit"
}

function botaoCadastrar() {
  const formulario = new FormData()
  formulario.append("nome", document.querySelector("input#nome").value)
  formulario.append("email", document.querySelector("input#email").value)
  formulario.append("cidade", document.querySelector("input#cidade").value)
  formulario.append("estado", document.querySelector("input#estado").value)
  formulario.append("telefone", document.querySelector("input#telefone").value)
  if (
    confirm(`Deseja realmente incluir o usuário ${formulario.get("nome")} ?`)
  ) {
    cadastrarUsuario(formulario).then((res) => {
      alert(res)
      limparFormulario()
      listarUsuarios()
    })
  } else {
    alert("Você cancelou a execução")
    limparFormulario()
  }
}

function abrirFormModificar(id) {
  document.querySelector("table#form").style.display = "table"
  document.querySelector("button#btnCadastrar").style.display = "none"
  listarUsuario(id).then((res) => {
    document.querySelector("input#id").value = res.id
    document.querySelector("input#nome").value = res.nome
    document.querySelector("input#email").value = res.email
    document.querySelector("input#cidade").value = res.cidade
    document.querySelector("input#estado").value = res.estado
    document.querySelector("input#telefone").value = res.telefone
  })
}

function botaoModificar() {
  const id = document.querySelector("table#form input#id").value
  const formulario = new FormData()
  formulario.append("_method", "PUT")
  formulario.append("nome", document.querySelector("input#nome").value)
  formulario.append("email", document.querySelector("input#email").value)
  formulario.append("cidade", document.querySelector("input#cidade").value)
  formulario.append("estado", document.querySelector("input#estado").value)
  formulario.append("telefone", document.querySelector("input#telefone").value)

  if (confirm(`Deseja realmente modificar o usuário ${formulario.get("nome")} ?`)) {
    modificarUsuario(id, formulario).then((res) => {
      alert(res)
      limparFormulario()
      listarUsuarios()
    })
  } else {
    alert("Você cancelou a execução")
    limparFormulario()
  }
}

function botaoRemover(id) {
  listarUsuario(id).then((res) => {
    if (confirm(`Deseja realmente deletar o usuário ${res.nome} ?`)) {
      removerUsuario(id).then(res =>{
        alert(res)
        listarUsuarios()
      }
      )
      
    } else {
      alert("Você cancelou a execução")
      limparFormulario()
    }
  })
}
