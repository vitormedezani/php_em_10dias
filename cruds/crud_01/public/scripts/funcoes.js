function listarUsuarios() {
  apiListarUsuarios().then(total => {
    console.log(total)
  })
}

listarUsuarios();