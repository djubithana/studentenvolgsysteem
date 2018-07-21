<?php  include'inc/head.php';?>
<div class="container-fluid">
	<div class="row">
		<?php  include'inc/sidebar.php';?>
		<div class="main col-md-10">
			<section class="jumbotron text-center header-jumbo">
				<div class="container">
					<h4 class="jumbotron-heading">Vakken Overzicht</h4>
					<button class="btn_dark_bg">Toevoegen</button>
				</div>
			</section>
			<div class="content">
				<div class="row">
				<!-- content komt hier -->


				<!-- table 3-->

                                                   <div class="col-md-12">
                                                   <div class="widget">
                                    							<div class="widget-header transparent">
                                    								<h2><strong>Vakken</strong> Overzicht </h2>
                                    								<div class="additional-btn">
                                    									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    									<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                    								</div>
                                    							</div>
                                    							<div class="widget-content">

                                    								<div class="table-responsive">
                                    									<table data-sortable="" class="table table-hover" data-sortable-initialized="true">
                                    										<thead>
                                    											<tr>
                                    												<th>No</th>
                                    												<th style="width: 30px" data-sortable="false"><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></th>
                                    												<th>Vak Naam</th>
                                    												<th>Schooljaar</th>
                                    												<th>Richting</th>
                                    												<th>Aantal Klassen</th>
                                    												<th>Status</th>
                                    												<th data-sortable="false">Bewerken</th>
                                    											</tr>
                                    										</thead>

                                    										<tbody>
                                    											<tr>
                                    												<td>1</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td>
                                    												<td><strong>Wiskunde</strong></td>
                                    												<td>2018</td>
                                    												<td>P1</td>
                                    												<td>25</td>
                                    					                            <td><span class="label label-success">Active</span></td>

                                    					                            <td>
                                                                                                                                                        <div class="btn-group btn-group-xs">
                                                                                                                                                        <a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
                                                                                                                                                        <a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                                                                                                                                        </div>
                                                                                                                                                        </td>
                                    											</tr>
                                    											<tr>
                                    												<td>2</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td><td><strong>Natuurkunde</strong></td>
                                    												<td>2018</td>
                                    												<td>R</td>
                                                                                    <td>12</td>
                                    												<td><span class="label label-success">Active</span></td>

                                    												<td>
                                                                                                                                                        <div class="btn-group btn-group-xs">
                                                                                                                                                        <a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
                                                                                                                                                        <a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                                                                                                                                        </div>
                                                                                                                                                        </td>
                                    											</tr>
                                    											<tr>
                                    												<td>3</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td><td><strong>Biologie</strong></td>
                                    												<td>2018</td>
                                    												<td>Q1</td>
                                                                                    <td>30</td>
                                    												<td><span class="label label-success">Active</span></td>
                                    												<td>
                                                                                                                                                        <div class="btn-group btn-group-xs">
                                                                                                                                                        <a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
                                                                                                                                                        <a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                                                                                                                                        </div>
                                                                                                                                                        </td>
                                    											</tr>
                                    											<tr>
                                    												<td>4</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td><td><strong>Scheikunde</strong></td>
                                    												<td>2018</td>
                                    												<td>P</td>
                                                                                    <td>15</td>
                                    												<td><span class="label label-success">Active</span></td>

                                    												<td>
                                                                                                                                                        <div class="btn-group btn-group-xs">
                                                                                                                                                        <a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
                                                                                                                                                        <a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                                                                                                                                        </div>
                                                                                                                                                        </td>
                                    											</tr>
                                    											<tr>
                                    												<td>5</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td><td><strong>Maatschappyleer</strong></td>
                                    												<td>2018</td>
                                    												<td>R</td>
                                                                                    <td>11</td>
                                    												<td><span class="label label-danger">Suspended</span></td>
                                    												<td>
                                                                                                                                                        <div class="btn-group btn-group-xs">
                                                                                                                                                        <a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
                                                                                                                                                        <a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                                                                                                                                        </div>
                                                                                                                                                        </td>
                                    											</tr>
                                    											<tr>
                                    												<td>6</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td><td><strong>Nederlands</strong></td>
                                    												<td>2018</td>
                                    												<td>R</td>
                                                                                   	<td>24</td>
                                    												<td><span class="label label-success">Active</span></td>
                                                                                     <td>
                                                                                    <div class="btn-group btn-group-xs">
                                                                                    <a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
                                                                                    <a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                                                                    </div>
                                                                                    </td>

                                    											</tr>
                                    											<tr>
                                    												<td>7</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td><td><strong>Spaans</strong></td>
                                    												<td>2018</td>
                                    												<td>Q1</td>
                                                                                    <td>6</td>
                                    												<td><span class="label label-success">Active</span></td>
                                    												<td>
                                                                                                                                                        <div class="btn-group btn-group-xs">
                                                                                                                                                        <a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
                                                                                                                                                        <a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                                                                                                                                        </div>
                                                                                                                                                        </td>
                                    											</tr>
                                    											<tr>
                                    												<td>8</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td><td><strong>Gym</strong></td>
                                    												<td>2018</td>
                                    												<td>Q2</td>
                                                                                    <td>22</td>

                                    												<td><span class="label label-warning">Deactivated</span></td>
                                    												<td>

                                                                                                                                                                                                                           	<div class="btn-group btn-group-xs">
                                                                                                                                                                                                                            <a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
                                                                                                                                                                                                                            <a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                                                                                                                                                                                     </div>
                                                                                                                                                                                                                            </td>
                                    											</tr>
                                    											<tr>
                                    												<td>9</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td><td><strong>Geschiedenis</strong></td>
                                    												<td>2018</td>
                                    												<td>Q1</td>
                                                                                    <td>25</td>
                                    												<td><span class="label label-success">Active</span></td>
                                    												<td>
                                                                                    <div class="btn-group btn-group-xs">
                                                                                    <a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
                                                                                    <a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                                                                    </div>
                                                                                    </td>

                                    											</tr>
                                    											<tr>
                                    												<td>10</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td><td><strong>Aardrijkskunde</strong></td>
                                    												<td>2018</td>
                                    												<td>P2</td>
                                                                                    <td>13</td>
                                    												<td><span class="label label-success">Active</span></td>
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
                                    				<!-- einde table 3-->




				</div>
			</div>
		</div>
	</div>
</div>

<?php  include'inc/bottom.php';?>