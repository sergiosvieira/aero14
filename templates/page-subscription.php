<script type="text/javascript">

  window.onload = function() {
      new dgCidadesEstados({
        estado: document.getElementById('state'),
        cidade: document.getElementById('city')
      });

    $("#phone").mask("(99)9999-9999");
    $("#mobile").mask("(99)9999-9999");
    $("#cpf").mask("999.999.999-99");
    $("#cep").mask("99999-999");
    $("#btn-submit").click(function(){
      $.validateEmail($("#email").val());
    });
  }
  $.validateEmail = function(email) {
    er = /^[a-zA-Z0-9][a-zA-Z0-9\._-]+@([a-zA-Z0-9\._-]+\.)[a-zA-Z-0-9]{2}/;
    if (er.exec(email)) {
      return true;
    } else {
      return false;
    }
  };

</script>

<a name="inscription"></a>
<form class="form-horizontal" id="myForm" method="POST" action="<?php echo get_option('siteurl'); ?>/wp-content/plugins/wp-bravo-inscription/wp-save-post.php" accept-charset="utf-8">
  <legend>
    Formulário de Inscrição
  </legend>
  <div class="control-group">
    <div class="control-group">
      <label class="control-label" for="inputEmail">Nome</label>
      <div class="controls">
        <input type="text" name="name" placeholder="Digite seu nome">
      </div>
    </div>
    <div class="control-group">
    <label class="control-label" for="inputEmail">BRA</label>
    <div class="controls">
      <input type="text" id="bra" name="bra" placeholder="Digite seu BRA, se tiver">
    </div>
    </div>    
    <label class="control-label" for="inputEmail">CPF</label>
    <div class="controls">
      <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Endereço</label>
    <div class="controls">
      <input type="text" name="address" placeholder="Digite seu endereço">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Estado</label>
    <div class="controls">
      <select id="state" name="state">
      </select>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Cidade</label>
    <div class="controls">
      <select id="city" name="city">
      </select>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Telefone</label>
    <div class="controls">
      <input type="text" id="phone" name="phone" placeholder="Digite o número do seu telefone">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Celular</label>
    <div class="controls">
      <input type="text" id="mobile" name="mobile" placeholder="Digite o número do seu celular">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Email</label>
    <div class="controls">
      <input type="text" name="email" placeholder="Digite seu email">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Resolva o problema para enviar a inscrição</label>
    <div class="controls">
    <?php if( function_exists( 'cptch_display_captcha_custom' ) ) { echo "<input type='hidden' name='cntctfrm_contact_action' value='true' />"; echo cptch_display_captcha_custom(); } ?> 
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" id="btn-submit" class="btn">
        Enviar Inscrição
      </button>
    </div>
  </div>
</form>
