function listarUsuarios() {
  apiListarUsuarios().then(total => {
    document.querySelectorAll('main div#lista table#lista tbody tr').forEach(linha => linha.remove())
    total.dados.map((item) => {
      var lista = document.querySelector('table#lista tbody')
      lista.innerHTML += `<tr>
      <td>${item.nome}</td>
      <td>${item.email}</td>
      <td>${item.cidade}</td>
      <td>${item.estado}</td>
      <td>${item.telefone}</td>
      <td>
        <button onClick=""><ion-icon name="trash-outline"></ion-icon></button>
        <button onClick=""><ion-icon name="create-outline"></ion-icon></button>
      </td>
      </tr>`
    })
  })
}

listarUsuarios();