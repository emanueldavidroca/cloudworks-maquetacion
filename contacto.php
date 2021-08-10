<?php require_once("header.html"); ?>
<script src="js/slickslider.js" defer></script>

<div class="container-fluid contact-hero" id="section-carousel">
	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

	  <div class="carousel-inner">
	    <div class="carousel-item active carousel-1">
	      <!--<img src="images/header.png" class="d-block w-100" alt="...">-->
	      <div class="carousel-caption d-none d-md-block">
	      	<div class="text-start">
		        <h2 class="text-cloudworks fw-bold montserrat-bold mb-0">Contacto</h2>
	      	</div>
	      </div>
	    </div>
	  </div>

	</div>
</div>
<div class="container my-3 my-md-5 py-2 lato-regular" id="contact-form">
		<div class="row justify-content-center">
			<div class="col-md-5 mb-4">
				<input type="text" class="form-control py-2" placeholder="Nombre" name="nombre">
			</div>
			<div class="col-md-5 mb-4">
				<input type="text" class="form-control py-2" placeholder="Apellido" name="apellido">
			</div>
			<div class="col-md-5 mb-4">
				<input type="email" class="form-control py-2" placeholder="Correo electronico" name="email">
			</div>
			<div class="col-md-5 mb-4">
				<input type="number" class="form-control py-2" placeholder="Número de contacto" name="numero_contacto">
			</div>
			<div class="col-md-5 mb-4">
				<input type="text" class="form-control py-2" placeholder="Empresa" name="empresa">
			</div>
			<div class="col-md-5 mb-4">
				<input type="number" class="form-control py-2" placeholder="Cargo de empresa" name="cargo_empresa">
			</div>
			<div class="col-md-5 mb-4">
				<textarea name="mensaje" class="form-control" placeholder="Tu mensaje"></textarea>
			</div>
			<div class="col-md-5 mb-4">
				<div class="row">
					<div class="col-md-6">
						<p class="text-cloudworks fw-bold">Productos de interes</p>
						<div class="form-group d-flex align-items-center">
							<input class="form-control-checkbox ms-1" type="checkbox">
							<label class="text-cloudworks ms-2" for="">Google Workspace</label>
						</div>
						<div class="form-group d-flex align-items-center">
							<input class="form-control-checkbox ms-1" type="checkbox">
							<label class="text-cloudworks ms-2" for="">Microsoft Enterprise</label>
						</div>
						<div class="form-group d-flex align-items-center">
							<input class="form-control-checkbox ms-1" type="checkbox">
							<label class="text-cloudworks ms-2" for="">Tienda Online</label>
						</div>
						<div class="form-group d-flex align-items-center">
							<input class="form-control-checkbox ms-1" type="checkbox">
							<label class="text-cloudworks ms-2" for="">Cloud VPS</label>
						</div>
					</div>
					<div class="col-md-6">
						<p class="text-cloudworks fw-bold">Servicios de interés</p>
						<div class="form-group d-flex align-items-center">
							<input class="form-control-checkbox ms-1" type="checkbox">
							<label class="text-cloudworks ms-2" for="">Blockchain</label>
						</div>
						<div class="form-group d-flex align-items-center">
							<input class="form-control-checkbox ms-1" type="checkbox">
							<label class="text-cloudworks ms-2" for="">Desarrollo Web</label>
						</div>

						<div class="form-group d-flex align-items-center">
							<input class="form-control-checkbox ms-1" type="checkbox">
							<label class="text-cloudworks ms-2" for="">Desarrollo de apps</label>
						</div>

						<div class="form-group d-flex align-items-center">
							<input class="form-control-checkbox ms-1" type="checkbox">
							<label class="text-cloudworks ms-2" for="">Hosting</label>
						</div>

					</div>
				</div>
			</div>
			<div class="col-md-10 mb-4">
				<input type="text" class="form-control" name="como" placeholder="¿Cómo nos conociste?">
			</div>
			<div class="col-md-10 mb-4">
				<div class="d-inline-flex align-items-center">
					<input type="checkbox"  class="form-control-checkbox " name="newsletter">
					<span class="text-cloudworks fw-bold ms-2">Quiero suscribirme al newsletter para recibir novedades de servicio y tendencias de marketing digital</span>
				</div>
			</div>
			<div class="col-md-10">
				<button class="btn btn-cloudworks py-1 px-4" name="submit">Enviar</button>
			</div>
		</div>
</div>
<?php require_once("footer.html"); ?>
