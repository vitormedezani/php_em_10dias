<h1>Editar Usuário</h1>
<?php
  //comando mysql selecionar os campos específicos do usuários de acordo com seu id
  $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];

  $res = $conexao->query($sql);
  $row = $res->fetch_object();
?>
<form action="?page=data-saving" method="POST">
  <!-- passando as info de qual usuário será alterado com base no id -->
  <input type="hidden" name="crud_action" value="updating">
  <!-- passando as info de qual usuário será alterado com base no id -->
  <input type="hidden" name="id" value="<?php echo "$row->id"; ?>">
  <label>Nome</label>
  <input type="text" name="nome" value="<?php echo "$row->nome"; ?>">
  <!--  -->
  <label>E-mail</label>
  <input type="email" name="email" value="<?php echo "$row->email"; ?>">
  <!--  -->
  <label>Senha</label>
  <input type="password" name="senha" required>
  <!--  -->
  <label>Data de Nascimento</label>
  <input type="date" name="data_nasc" value="<?php echo "$row->data_nasc"; ?>">
  <!--  -->
  <button type="submit">Enviar</button>
</form>