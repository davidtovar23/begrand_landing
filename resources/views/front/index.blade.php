@extends("layouts.front")

@section("css") 
	<link rel="stylesheet" href="{{ asset("/css/main.css") }}?{{ date("YmdHis") }}">
@stop

@section("content")
	<section class="home">
    	<div class="top200">
    		<div class="row" style="margin-left: initial !important; margin-right: initial !important;">
		        <div class="col-sm-3"></div>
		        <div class="col-sm-3 anchoEspecial">
		            <img src="{{ asset('/images/logoFondo.png') }}" alt="">
		            <br><br>
		            <div style="color: #fff; text-align: justify;">
		            	Downtown Reforma es un proyecto de alto nivel de oficinas corporativas con uso mixto. Está diseñado con los más altos estándares internacionales de calidad, ofreciendo espacios corporativos AAA.
		            </div>
		        </div>
		        <div class="col-sm-3"></div>
		        <div class="col-sm-3"></div>
		    </div>
        </div>
	</section>

	<section class="proyecto">
		<div class="row">
			<div class="content_proyecto">
				<div class="blanco1"></div>
				<div class="foto1" style="background-image: url({{ asset('/images/foto1.png') }});"></div>
				<div class="texto1">
					<div class="content_texto">
						Ubicado a escasos metros de la avenida más importante y emblemática de la Ciudad de México, su diseño arquitectónico logra un equilibrio entre lo contemporáneo y lo sustentable, permitiendo ofrecer un proyecto de alto nivel y máxima calidad en sus sistemas, funcionamiento y diseño.
					</div>
				</div>
				<div class="texto2">
					<div class="content_texto">
						En Downtown Reforma encontrarás el espacio ideal para tu oficina o negocio al contar con la posibilidad de desarrollar los interiores de acuerdo a tus necesidades y requerimientos.
					</div>
				</div>
				<div class="foto2" style="background-image: url({{ asset('/images/foto2.png') }});"></div>
				<div class="blanco2"></div>
			</div>
		</div>
	</section>

	<section class="ubicacion">
		<div class="row justify-content-center">
			<div class="col-md-3">
				<h2>Ubicación.</h2>
				<div>
					<p>
						Cerca de Downtown Reforma se encuentran no sólo monumentos icónicos de la capital de México, sino diversos edificios de los principales grupos financieros del país y América Latina.
					</p>
					<p>
						Su ubicación, servicios, transporte público y accesibilidad hacen de Downtown Reforma una excelente opción para los intereses de las pequeñas, medianas y grandes empresas de nuestro país.
					</p>
					<p>
						Este proyecto cuenta con la precertificación LEED® for Building Design and Construction: Core and Shell Development (LEED® BD+C: Core and Shell)”.
					</p>
					<p>
						“La marca de certificación LEED es propiedad del U.S. Green Building Council y se utiliza con permiso”.
					</p>
				</div>
				<ul>
					<li>10 plantas de Oficinas Corporativas</li>
					<li>Desde 160 m2 con altura de entrepiso de 4.20 metros.</li>
					<li>Lobby en planta baja con 1,000 m2 de área comercial.</li>
					<li>Sky lobby con salas de juntas, cafetería y terraza.</li>
					<li>7 plantas de estacionamiento (exclusivo de oficinas)</li>
					<li>Un cajón de estacionamiento por cada 30 m2.</li>
				</ul>
			</div>
			<div class="col-md-3">
				ss
			</div>
		</div>
	</section>

	<section class="galeria">
		<div class="row">
			<div class="col"></div>
		</div>
	</section>

	<section class="calidad">
		<div class="row" style="margin-left: initial !important; margin-right: initial !important;">
	        <div class="col-sm-6 offset-sm-3">
	        	<h2>Calidad y seguridad.</h2>
	        	<ul>
	        		<li>Sistema de control de acceso peatonal y vehicular, un solo acceso con apertura a dos salidas diferentes.</li>
	        		<li>Sistema de circuito cerrado de televisión (Cctv) en lobby, elevadores y estacionamientos.</li>
					<li>Seguridad en cada uno de los accesos al conjunto y cada torre los 365 días del año, las 24 horas del día.</li>
					<li>Sistema contra incendios en áreas comunes y preparaciones para los inquilinos de acuerdo a los estándares NFPA (National Fire Protection Association).</li>
					<li>6 Elevadores de última generación. 1 Montacargas.</li>
	        	</ul>
	        </div>
	    </div>
	</section>

	<section class="contacto">
		<div class="row" style="margin-left: initial !important; margin-right: initial !important;">
	        <div class="col-sm-6"></div>
	        <div class="col-sm-6">
	        	<h2>Contacto.</h2>
	        	<div class="content_items">
	        		<div class="item">
	        			<div class="icon-location"></div>
        				<a href="#">
        					Paseo de la Reforma #95, Colonia Tabacalera, 06030 Ciudad de México.
        				</a>
	        		</div>
	        		<div class="item">
	        			<div class="icon-tel"></div>
        				<a href="#">
        					Tel. 47 47 47 10
        				</a>
	        		</div>
	        		<div class="item">
	        			<div class="icon-email"></div>
        				<a href="#">
        					belen.garcia@idu.mx 
        				</a>
	        		</div>
	        	</div>
	        </div>
	    </div>
	</section>

	<section class="interesa">
		<div class="row justify-content-center" style="margin-left: initial !important; margin-right: initial !important;">
	        <div class="col-md-3">
	        	<h2>Me interesa.</h2>
	        	<p>
	        		Si estás interesado en alguno de nuestros departamentos, déjanos tus datos y nos pondremos en contacto contigo
	        	</p>
	        	<form>
					<div class="form-group">
						<label for="inputNombre">Nombre</label>
						<input type="text" class="form-control" id="inputNombre">
					</div>
					<div class="form-group">
						<label for="inputMail">Mail</label>
						<input type="email" class="form-control" id="inputMail">
					</div>
					<div class="form-group">
						<label for="inputTel">Teléfono</label>
						<input type="tel" class="form-control" id="inputTel">
					</div>
					<div class="form-group">
						<label for="selectEnteraste">¿Cómo te enteraste de nosotros?</label>
					 	<select class="form-control" id="selectEnteraste">
				      		<option>Elije una opción</option>
					    </select>
					</div>
					<button type="submit" class="btn btn-primary">Enviar</button>
				</form>
	        </div>
	    </div>
	</section>
@stop