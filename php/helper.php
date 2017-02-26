<?php
$index_page = "main.php";


function NavigationGet(){

$nav='<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-2 text-left">
					<div id="fh5co-logo"><a href="main"><img class="" src="images/logo_w.png" height="50"/></a></div>
				</div>
				<div class="col-xs-10 text-right menu-1">
					<ul>
						<li class="active"><a href="main">Home</a></li>
						<li class="has-dropdown">
							<a href="courses">Cursos</a>
							<ul class="dropdown">
								<li><a href="#">Por distrito</a></li>
								<li><a href="#">Por categoria</a></li>
							</ul>
						</li>
						<li><a href="products">Perfil</a></li>
						<li><a href="contact">Contactos</a></li>
						<li><button type="button" data-toggle="modal" data-target="#loginModal"  class="btn btn-primary">Acceder</button></li>
					</ul>
				</div>
			</div>

		</div>
	</nav>';

return $nav;


}



 ?>
