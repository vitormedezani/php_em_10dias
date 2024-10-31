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

function botaoCadastrar(){
  const formulario = new FormData()
  formulario.append("nome", document.querySelector('input#nome').value)
  formulario.append("email", document.querySelector('input#email').value)
  formulario.append("cidade", document.querySelector('input#cidade').value)
  formulario.append("estado", document.querySelector('input#estado').value)
  formulario.append("telefone", document.querySelector('input#telefone').value)
  if (confirm(`Deseja realmente incluir o usuário ${formulario.get("nome")} ?`)) {
    cadastrarUsuario(formulario).then(res => {
      alert(res)
      limparFormulario()
      listarUsuarios()
    })
  } else {
    alert("Você cancelou a execução")
    limparFormulario()
  }
}
