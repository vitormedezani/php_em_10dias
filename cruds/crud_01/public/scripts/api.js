const APIBASE = "http://localhost/php_em_10dias/cruds/crud_01/API"

async function apiListarUsuarios() {
  try {
   const response = await fetch(APIBASE+"/usuarios/lista/", {
     method: "GET",
   })

   const data = await response.json()
   return data 
  } catch (error) {
    console.error(error)
  }
}