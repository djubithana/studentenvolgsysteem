<?php  include'inc/head.php';?>
<div class="container-fluid">
	<div class="row">
		<?php  include'inc/sidebar.php';?>
		<div class="main col-md-10">
		<section class="jumbotron text-center header-jumbo">
			<div class="container">
				<h4 class="jumbotron-heading">Schooljaar Overzicht</h4>
				<button class="btn_dark_bg">Toevoegen</button>
			</div>
		</section>
		<div class="content">
			<div class="row">
		<table class="table table-condensed">
		  <thead>
			<tr>
			  <th scope="col">Schooljaar</th>
			  <th scope="col">Status</th>
			  <th scope="col">Aangemaakt</th>
			  <th scope="col">Afgemaakt</th>
			  <th scope="col"></th>
			</tr>
		  </thead>
		  <tbody>
			<tr>
			  <th scope="row">2014-2015</th>
			  <td>Gestart</td>
			  <td>31 augustus 2014</td>
			  <td>Nog niet afgemaakt</td>
			  <td><button class="btn_tabel"><i class="fas fa-edit fa-1x"></i></button><button class="btn_tabel"><i class="fas fa-trash-alt fa-1x"></i></button></td>
			</tr>
		  </tbody>
		</table>
			</div>
		</div>
		</div>
	</div>
</div>

<?php  include'inc/bottom.php';?>