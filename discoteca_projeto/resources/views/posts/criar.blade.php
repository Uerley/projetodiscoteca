@extends('layouts.main')
@section('title', 'Adicionar Disco')
@section('content')
   	<div class="container-login100">
		<form class="logincadastrodisco validate-form">
			<span class="login100-form-title p-b-43">
				Cadastre seu Disco
			</span>

			<div class="row">

				<div class="col-md-6 col-xs-7">
					<div class="form-group">
						<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
							<input class="input100" type="text" name="nome">
							<span class="focus-input100"></span>
							<span class="label-input100">Nome</span>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-xs-7">
					<div class="form-group">
						<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
							<input class="input100" type="text" name="artista">
							<span class="focus-input100"></span>
							<span class="label-input100">Artista</span>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 col-xs-6">
					<div class="form-group">
						<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
							<input class="input100" type="text" name="email">
							<span class="focus-input100"></span>
							<span class="label-input100">Email</span>
						</div>
					</div>
				</div>


				<div class="col-md-6 col-xs-6">
					<div class="form-group">
						<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
							<input class="input100" type="text" name="ano">
							<span class="focus-input100"></span>
							<span class="label-input100">Ano</span>
						</div>
					</div>
				</div>
			</div>
			<div class="row">

				<div class="col-md-6 col-xs-7">
					<div class="form-group">
						<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
							<input class="input100" type="text" name="valor">

							<span class="focus-input100"></span>
							<span class="label-input100">Valor</span>

						</div>

					</div>
				</div>
				<div class="col-md-2 col-xs-7">
					<div class="form-group">

						<div class="max-width">
							<div class="ImageContainer">
								<img src="photo.png" id="image" alt="selecione uma imagem">
							</div>
						</div>

						<input type="file" name="file" id="flimage" accept="image/*">

					</div>

				</div>
			</div>


			<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
				<input class="input100" type="text" name="ano">
				<span class="focus-input100"></span>
				<span class="label-input100">Descrição</span>
			</div>
			<div class="flex-sb-m w-full p-t-3 p-b-32">
			</div>
			<div class="container-login100-form-btn">
				<button class="login100-form-btn">
					Cadastrar
				</button>
			</div>
		</form>
	</div>

@endsection
