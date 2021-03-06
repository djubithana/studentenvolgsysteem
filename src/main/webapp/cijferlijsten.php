<?php  include'inc/head.php';?>
<div class="container-fluid">
	<div class="row">
		<?php  include'inc/sidebar.php';?>
		<div class="main col-md-10">
			<section class="jumbotron text-center header-jumbo">
				<div class="container">
					<h4 class="jumbotron-heading">Cijferlijst <span id="kwartalen"></span></h4>
					<button class="btn_dark_bg">Toevoegen</button>
				</div>
            </section>
            <div class="content">
                <div class="row">
                    <ul class="nav nav-pills col-md-12 cijfer_kwartalen_menu">
                        <li class="active col-md-3"><a data-toggle="pill" href="#kwartaal1"><i class="fas fa-book-open"></i> Kwartaal 1</a></li>
                        <li class="col-md-3"><a data-toggle="pill" href="#kwartaal2"><i class="fas fa-book-open"></i> Kwartaal 2</a></li>
                        <li class="col-md-3"><a data-toggle="pill" href="#kwartaal3"><i class="fas fa-book-open"></i> Kwartaal 3</a></li>
                        <li class="col-md-3"><a data-toggle="pill" href="#eindcijfer"><i class="fas fa-book-open"></i> EindCijfer</a></li>
                    </ul>
                </div>
                <div class="row">
                    <div class="tab-content  col-md-12">
                        <div id="kwartaal1" class="tab-pane fade in active">
                            <div class="col-md-12">
                                <div class="mdc-layout-grid">
                                    <div class="mdc-layout-grid__inner">
                                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                            <div class="mdc-card">
                                                <section class="mdc-card__primary">
                                                    <h1 class="mdc-card__title mdc-card__title--large">Kwartaal 1   </h1>
                                                </section>
                                                <div class="template-demo">
                                                    <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <th class="text-left">Vaknaam</th>
                                                            <th>1</th>
                                                            <th>2</th>
                                                            <th>3</th>
                                                            <th>4</th>
                                                            <th>5</th>
                                                            <th>6</th>
                                                            <th>7</th>
                                                            <th>Eind Cijfer</th>
                                                            <th>Bewerken</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td class="text-left">Nederlands</td>
                                                            <td>1.59</td>
                                                            <td>6.0</td>
                                                            <td>50</td>
                                                            <td>4.0</td>
                                                            <td>87</td>
                                                            <td>20</td>
                                                            <td>4</td>
                                                            <td> </td>
                                                            <td>
                                                                <div class="btn-group btn-group-xs">
                                                                    <a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
                                                                    <a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- einde kwartaal1 -->
                        <div id="kwartaal2" class="tab-pane fade">
                            <div class="col-md-12">
                                <div class="mdc-layout-grid">
                                    <div class="mdc-layout-grid__inner">
                                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                            <div class="mdc-card">
                                                <section class="mdc-card__primary">
                                                    <h1 class="mdc-card__title mdc-card__title--large">Kwartaal 2</h1>
                                                </section>
                                                <div class="template-demo">
                                                    <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <th class="text-left">Vaknaam</th>
                                                            <th>1</th>
                                                            <th>2</th>
                                                            <th>3</th>
                                                            <th>4</th>
                                                            <th>5</th>
                                                            <th>6</th>
                                                            <th>7</th>
                                                            <th>Eind Cijfer</th>
                                                            <th>Bewerken</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td class="text-left">Nederlands</td>
                                                            <td>1.59</td>
                                                            <td>6.0</td>
                                                            <td>50</td>
                                                            <td>4.0</td>
                                                            <td>87</td>
                                                            <td>20</td>
                                                            <td>4</td>
                                                            <td> </td>
                                                            <td>
                                                                <div class="btn-group btn-group-xs">
                                                                    <a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
                                                                    <a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                                                </div>
                                                            </td>

                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- einde kwartaal2 -->
                        <div id="kwartaal3" class="tab-pane fade">
                            <div class="col-md-12">
                                <div class="mdc-layout-grid">
                                    <div class="mdc-layout-grid__inner">
                                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                            <div class="mdc-card">
                                                <section class="mdc-card__primary">
                                                    <h1 class="mdc-card__title mdc-card__title--large">Kwartaal 3</h1>
                                                </section>
                                                <div class="template-demo">
                                                    <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <th class="text-left">Vaknaam</th>
                                                            <th>1</th>
                                                            <th>2</th>
                                                            <th>3</th>
                                                            <th>4</th>
                                                            <th>5</th>
                                                            <th>6</th>
                                                            <th>7</th>
                                                            <th>Eind Cijfer</th>
                                                            <th>Bewerken</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td class="text-left">Nederlands</td>
                                                            <td>1.59</td>
                                                            <td>6.0</td>
                                                            <td>50</td>
                                                            <td>4.0</td>
                                                            <td>87</td>
                                                            <td>20</td>
                                                            <td>4</td>
                                                            <td> </td>
                                                            <td>
                                                                <div class="btn-group btn-group-xs">
                                                                    <a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
                                                                    <a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                                                </div>
                                                            </td>

                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- einde kwartaal3 -->
                        <div id="eindcijfer" class="tab-pane fade">
                            <div class="col-md-12">
                                <div class="mdc-layout-grid">
                                    <div class="mdc-layout-grid__inner">
                                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                            <div class="mdc-card">
                                                <section class="mdc-card__primary">
                                                    <h1 class="mdc-card__title mdc-card__title--large">Eindcijfer</h1>
                                                </section>
                                                <div class="template-demo">
                                                    <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <th class="text-left">Vaknaam</th>
                                                            <th>1</th>
                                                            <th>2</th>
                                                            <th>3</th>
                                                            <th>4</th>
                                                            <th>5</th>
                                                            <th>6</th>
                                                            <th>7</th>
                                                            <th>Eind Cijfer</th>
                                                            <th>Bewerken</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td class="text-left">Nederlands</td>
                                                            <td>1.59</td>
                                                            <td>6.0</td>
                                                            <td>50</td>
                                                            <td>4.0</td>
                                                            <td>87</td>
                                                            <td>20</td>
                                                            <td>4</td>
                                                            <td> </td>
                                                            <td>
                                                                <div class="btn-group btn-group-xs">
                                                                    <a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
                                                                    <a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                                                </div>
                                                            </td>

                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- einde eindcijfer -->
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
            <?php  include'inc/bottom.php';?>