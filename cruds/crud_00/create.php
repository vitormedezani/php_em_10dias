<h1>Novo Usuário</h1>
<form action="?page=update" method="POST">
  <!-- enviando o ação do CRUD de forma oculta -->
  <input type="hidden" name="crud_action" value="creating">
  <label>Nome</label>
  <input type="text" name="nome">
  <!--  -->
  <label>E-mail</label>
  <input type="email" name="email">
  <!--  -->
  <label>Senha</label>
  <input type="password" name="senha">
  <!--  -->
  <label>Data de Nascimento</label>
  <input type="date" name="data_nasc">
  <!--  -->
  <button type="submit">Enviar</button>
</form>