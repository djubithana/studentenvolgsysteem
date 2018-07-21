<?php  include'inc/head.php';?>
<div class="container-fluid">
	<div class="row">
		<?php  include'inc/sidebar.php';?>
		<div class="main col-md-10">
		<section class="jumbotron text-center header-jumbo">
			<div class="container">
				<h4 class="jumbotron-heading">Docenten Overzicht</h4>
				<button type="button" class="btn_dark_bg" data-toggle="modal" data-target="#docentenToevoegen">Toevoegen</button>
			</div>
		</section>
		<div class="content">
			<div class="row">
		<table class="table table-condensed">
		  <thead>
			<tr>
			    <th scope="col">Voornaam</th>
			    <th scope="col">Achternaam</th>
                <th scope="col">Email</th>
                <th scope="col">Mobiel</th>
                <th scope="col">Gender</th>
                <th scope="col">Status</th>
			</tr>
		  </thead>
		  <tbody>
			<tr>
			    <td scope="row">2014-2015</td>
                <td scope="row">2014-2015</td>
                <td scope="row">2014-2015</td>
                <td scope="row">2014-2015</td>
                <td scope="row">2014-2015</td>
                <td scope="row">2014-2015</td>
			  <td><button class="btn_tabel"><i class="fas fa-edit fa-1x"></i></button><button class="btn_tabel"><i class="fas fa-trash-alt fa-1x"></i></button></td>
			</tr>
		  </tbody>
		</table>
			</div>
		</div>
		</div>
	</div>
</div>

<div id="docentenToevoegen" tabindex="-1" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Docent Toevoegen</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="/action_page.php">
                    <div class="form-group">
                        <div class="offset-md-2 col-md-8">
                            <input type="text" class="form-control" id="voornaam" placeholder="Voornaam">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="offset-md-2 col-md-8">
                            <input type="text" class="form-control" id="achternaam" placeholder="Achternaam">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="offset-md-2 col-md-8">
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="offset-md-2 col-md-8">
                            <input type="number" class="form-control" id="telefoon" placeholder="Telefoon">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="offset-md-2 col-md-8">
                            <input type="number" class="form-control" id="mobiel" placeholder="Mobiel">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="offset-md-2 col-md-8">
                            <select type="text" class="form-control" id="gender">
                                <option value="" disabled>Gender</option>
                                <option value="0">Man</option>
                                <option value="1">Vrouw</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Toevoegen</button>
            </div>
        </div>

    </div>
</div>

<?php  include'inc/bottom.php';?>


