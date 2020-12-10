<?php
if (session_status() !== PHP_SESSION_ACTIVE) {//Verificar se a sessão não já está aberta.
  session_start();
}
//
require_once('../login/verifica_sessao.php');
//
require_once('../config.php');
require_once(HEADER_TEMPLATE);
?>
<form class="text-center" id="usuarios-form" method="post" action="javascript:void(0)">
<div class="row d-flex justify-content-center">
		<div class="col-md-6 text-center">
			<legend>Cadastro</legend>
		</div>
		<div class="col-md-6 text-center">
			<a class="btn btn-sm btn-secondary" href="./">
				<i class="fas fa-list"></i> Lista de Usiários
			</a>
		</div>
        </div>
        <div id="mensagem"></div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 text-left">
			<div class="form-group">
				<label class="control-label" for="nome">Nome Completo: </label>
				<span class="r">*</span>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-user"></i>
						</div>
					</div>
					<input type="text" class="rounded form-control" name="nome" id="nome" placeholder="Nome Completo" />
					<div class="valid-feedback feedback-icon">
						<i class="fas fa-check"></i>
					</div>
					<div class="invalid-feedback feedback-icon">
						<i class="fas fa-times"></i>
					</div>
				</div>
				<span class="help-block r" id="error"></span>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label class="control-label">CPF/CNPJ: </label>
					<span class="r">*</span>
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text">
								<i class="fas fa-id-card"></i>
							</div>
						</div>
						<input type="text" class="mask-cpfcnpj rounded form-control" name="cpfcnpj" id="cpfcnpj" placeholder="CPF/CNPJ"/>
						<div class="valid-feedback feedback-icon">
							<i class="fas fa-check"></i>
						</div>
						<div class="invalid-feedback feedback-icon">
							<i class="fas fa-times"></i>
						</div>
					</div>
					<span class="help-block r" id="error"></span>
				</div>
				<div class="form-group col-md-6">
					<label class="control-label">CEP: </label>
					<span class="r">*</span>
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text">
								<i class="fas fa-home"></i>
							</div>
						</div>
						<input type="text" class="mask-cep rounded form-control" name="cep" id="cep" placeholder="CEP" />
						<div class="valid-feedback feedback-icon">
							<i class="fas fa-check"></i>
						</div>
						<div class="invalid-feedback feedback-icon">
							<i class="fas fa-times"></i>
						</div>
					</div>
					<span class="help-block r" id="error"></span>
				</div>
			</div>

			<div class="form-row">
				<div class="form-group col-md-6">
					<label class="control-label">Estado: </label>
					<span class="r">*</span>
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text">
								<i class="fas fa-home"></i>
							</div>
						</div>
						<input type="text" class="rounded form-control" name="uf" id="uf" placeholder="Estado" />
						<div class="valid-feedback feedback-icon">
							<i class="fas fa-check"></i>
						</div>
						<div class="invalid-feedback feedback-icon">
							<i class="fas fa-times"></i>
						</div>
					</div>
					<span class="help-block r" id="error"></span>
				</div>
				<div class="form-group col-md-6">
					<label class="control-label">Cidade: </label>
					<span class="r">*</span>
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text">
								<i class="fas fa-home"></i>
							</div>
						</div>
						<input type="text" class="rounded form-control" name="cidade" id="cidade" placeholder="Cidade" />
						<div class="valid-feedback feedback-icon">
							<i class="fas fa-check"></i>
						</div>
						<div class="invalid-feedback feedback-icon">
							<i class="fas fa-times"></i>
						</div>
					</div>
					<span class="help-block r" id="error"></span>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-8">
					<label class="control-label">Endere&ccedil;o: </label>
					<span class="r">*</span>
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text">
								<i class="fas fa-home"></i>
							</div>
						</div>
						<input type="text" class="rounded form-control" name="rua" id="rua" placeholder="Endere&ccedil;o" />
						<div class="valid-feedback feedback-icon">
							<i class="fas fa-check"></i>
						</div>
						<div class="invalid-feedback feedback-icon">
							<i class="fas fa-times"></i>
						</div>
					</div>
					<span class="help-block r" id="error"></span>
				</div>
				<div class="form-group col-md-4">
					<label class="control-label">N&uacute;mero: </label>
					<span class="r">*</span>
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text">
								<i class="fas fa-home"></i>
							</div>
						</div>
						<input type="text" class="rounded form-control" name="numero" id="numero" placeholder="N&uacute;mero" />
						<div class="valid-feedback feedback-icon">
							<i class="fas fa-check"></i>
						</div>
						<div class="invalid-feedback feedback-icon">
							<i class="fas fa-times"></i>
						</div>
					</div>
					<span class="help-block r" id="error"></span>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-8">
					<label class="control-label">Bairro: </label>
					<span class="r">*</span>
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text">
								<i class="fas fa-home"></i>
							</div>
						</div>
						<input type="text" class="rounded form-control" name="bairro" id="bairro" placeholder="Bairro" />
						<div class="valid-feedback feedback-icon">
							<i class="fas fa-check"></i>
						</div>
						<div class="invalid-feedback feedback-icon">
							<i class="fas fa-times"></i>
						</div>
					</div>
					<span class="help-block r" id="error"></span>
				</div>
				<div class="form-group col-md-4">
					<label class="control-label">Complemento: </label>
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text">
								<i class="fas fa-home"></i>
							</div>
						</div>
						<input type="text" class="rounded form-control" name="complemento" id="complemento" placeholder="Complemento" />
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label">E-Mail: </label>
				<span class="r">*</span>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-envelope"></i>
						</div>
					</div>
					<input type="email" class="rounded form-control" name="email" id="email" placeholder="E-Mail" />
					<div class="valid-feedback feedback-icon">
						<i class="fas fa-check"></i>
					</div>
					<div class="invalid-feedback feedback-icon">
						<i class="fas fa-times"></i>
					</div>
				</div>
				<span class="help-block r" id="error"></span>
			</div>
			<div class="form-group">
				<label class="control-label">Confirme o E-Mail: </label>
				<span class="r">*</span>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-envelope"></i>
						</div>
					</div>
					<input type="email" class="rounded form-control" name="cemail" id="cemail" placeholder="Confirme o E-Mail" />
					<div class="valid-feedback feedback-icon">
						<i class="fas fa-check"></i>
					</div>
					<div class="invalid-feedback feedback-icon">
						<i class="fas fa-times"></i>
					</div>
				</div>
				<span class="help-block r" id="error"></span>
			</div>

			<div class="form-row">
				<div class="form-group col-md-6">
					<label class="control-label">Senha: </label>
					<span class="r">*</span>
				<div class="input-group" id="show_hide_password">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-lock"></i>
						</div>
					</div>
					<input type="password" class="rounded form-control" name="senha" id="senha" placeholder="Nova senha" />
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-eye-slash"></i>
                            </span>
                        </div>
				</div>
					<span class="help-block r" id="error"></span>
				</div>
				
				<div class="form-group col-md-6">
					<label class="control-label">Confirme sua Senha: </label>
					<span class="r">*</span>
					<div class="input-group" id="show_password">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-lock"></i>
						</div>
					</div>
						<input type="password" class="rounded form-control" name="csenha" id="csenha" placeholder="Confirme sua Senha"/>
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-eye-slash"></i>
                            </span>
                        </div>
					</div>
					<span class="help-block r" id="error"></span>
				</div>
			</div>

			<div class="form-row">
				<div class="form-group col-md-6">
					<label class="control-label">Telefone Fixo: </label>
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text">
								<i class="fas fa-phone"></i>
							</div>
						</div>
						<input type="text" class="mask-telefone rounded form-control" name="telefone" id="telefone" placeholder="Telefone Fixo" />
					</div>
				</div>
				<div class="form-group col-md-6">
					<label class="control-label">Telefone Celular: </label>
					<span class="r">*</span>
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text">
								<i class="fas fa-mobile"></i>
							</div>
						</div>
						<input type="text" class="mask-cel rounded form-control" name="celular" id="celular" placeholder="Telefone Celular" />
						<div class="valid-feedback feedback-icon">
							<i class="fas fa-check"></i>
						</div>
						<div class="invalid-feedback feedback-icon">
							<i class="fas fa-times"></i>
						</div>
					</div>
					<span class="help-block r" id="error"></span>
				</div>
			</div>
			
            <div class="form-row">
				<div class="form-group col-md-6">
					<label class="control-label">Perfil: </label>
					<span class="r">*</span>
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text">
								<i class="fas fa-id-card-alt"></i>
							</div>
						</div>
						<select for="perfil" class="custom-select rounded" name="perfil" id="perfil">
							<option value="" selected="selected">-- Selecione --</option>
							<option value="adm">Administrativo</option>
							<option value="con">Consultor</option>
							<option value="jur">Jur&#237;dico</option>
							<option value="mst">Master</option>
						</select>
						<div class="valid-feedback feedback-icon">
							<i class="fas fa-check"></i>
						</div>
						<div class="invalid-feedback feedback-icon">
							<i class="fas fa-times"></i>
						</div>
					</div>
					<span class="help-block r" id="error"></span>
				</div>
				<div class="form-group col-md-6">
					<label class="control-label">Ativo: </label>
					<span class="r">*</span>
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text">
								<i class="fas fa-link"></i>
							</div>
						</div>
						<select for="active" class="custom-select" name="active" id="active">
							<option value="" selected="selected">-- Selecione --</option>
							<option value="1">Sim</option>
							<option value="0">Não</option>
						</select>
						<div class="valid-feedback feedback-icon">
							<i class="fas fa-check"></i>
						</div>
						<div class="invalid-feedback feedback-icon">
							<i class="fas fa-times"></i>
						</div>
					</div>
					<span class="help-block r" id="error"></span>
				</div>
			</div>
			
			<div class="form-row">
			    <div class="form-group col-md-12">
					    <input type="hidden" class="rounded form-control" name="acao" id="acao" value="Adicionar" />
			    </div>
			</div>
          <div class="form-row">
            <div class="form-group col-md-4">
                    <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
            </div>
            <div class="form-group col-md-4">
                    <input type="hidden" name="action" value="clientes">
            </div>
         </div>
			<center>
				<div class="form-group col-md-12">
						<span style="font-size: 11px">
							<span class="r">*</span>
							<i>Campos de preenchimento obrigat&oacute;rio</i>
						</span>
					</p>
					<button type="submit" name="send_form" id="send_form" class="btn btn-success">Cadastrar</button>
				</div>
			</center>
		</div>
    </div>
</form>
<?php require_once(FOOTER_TEMPLATE); ?>