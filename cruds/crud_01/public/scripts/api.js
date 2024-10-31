const APIBASE = "http://localhost/php_em_10dias/cruds/crud_01/API"

async function apiListarUsuarios() {
  try {
   const response = await fetch(`${APIBASE}/usuarios/lista/`, {
     method: "GET",
   })

   const data = await response.json()
   return data 
  } catch (error) {
    console.error(error)
  }
}

async function apiListarUsuario(id) {
  try {
    const response = await fetch(`${APIBASE}/usuarios/lista/${id}`, {
      method: "GET",
    })

    const data = await response.json()
    return data
  } catch (error) {
    console.error(error)
  }
}

async function apiCadastrarUsuario(formulario) {
  try {
    const response = await fetch(`${APIBASE}/usuarios/adicionar/`, {
      method: "POST",
      body: formulario,
    })

    const data = await response.json()
    return data
  } catch (error) {
    console.error(error)
  }
}

async function apiModificarUsuario(id, formulario) {
  try {
    const response = await fetch(`${APIBASE}/usuarios/update/${id}`, {
      method: "POST",
      body: formulario,
    })

    const data = await response.json()
    return data
  } catch (error) {
    console.error(error)
  }
}
