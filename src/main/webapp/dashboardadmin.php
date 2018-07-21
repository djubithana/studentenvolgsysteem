<?php  include'inc/head.php';?>
<div class="container-fluid">
	<div class="row">
		<?php  include'inc/sidebar.php';?>
		<div class="main col-md-10">
			<section class="jumbotron text-center header-jumbo">
				<div class="container">
					<h6 class="jumbotron-heading">Welkom Admin Mike</h6>
					<div class="row" style="margin-top: 50px;">
							<div class="col-md-3">
								<div class="dashoard_box">
									<div class="left_box"><i class="fas fa-user fa-4x"></i></div>
									<div class="right_box"><h3>10</h3><h5>Docent(en)</h5></div>
								</div>
							</div>
						<div class="col-md-3"><div class="dashoard_box">
									<div class="left_box"><i class="fas fa-book fa-4x"></i></div>
									<div class="right_box"><h3>10</h3><h5>Klassen</h5></div>
								</div></div>
						<div class="col-md-3"><div class="dashoard_box">
									<div class="left_box"><i class="fas fa-book-open fa-4x"></i></div>
									<div class="right_box"><h3>10</h3><h5>Vakken</h5></div>
								</div></div>
						<div class="col-md-3"><div class="dashoard_box">
									<div class="left_box"><i class="fas fa-user-graduate fa-4x"></i></div>
									<div class="right_box"><h3>10</h3><h5>Student(en)</h5></div>
								</div></div>
					</div>
				</div>
			</section>
			<div class="content">
				<div class="row">
				<!-- content komt hier -->


						<!-- table 1-->

					<div class="col-md-12">
						<div class="widget">
							<div class="widget-header transparent">
								<h2><strong>Docenten </strong> Table</h2>
								<div class="additional-btn">
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
								</div>
							</div>
							<div class="widget-content">
								<div class="table-responsive">
									<table data-sortable="" class="table" data-sortable-initialized="true">
										<thead>
											<tr>
												<th>No</th>
												<th style="width: 30px" data-sortable="false"><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></th>
												<th>Volledige naam</th>
												<th>Username</th>
												<th>Password</th>
												<th>Email</th>
												<th data-sortable="false">ID</th>
												<th>Status</th>
												<th data-sortable="false">Bewerken</th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<td>1</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td><td><strong>John Doe</strong></td>
												<td>JD</td><td>JD1023</td><td><a href="mailto:#">name@domain.com</a></td>
												<td>123</td><td><span class="label label-success">Active</span></td>
												<td>
													<div class="btn-group btn-group-xs">
														<a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
														<a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td>2</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td><td><strong>Rusmanovski</strong></td>
												<td>RSK</td><td>RSK1024</td><td><a href="mailto:#">name@domain.com</a></td>
												<td>124</td><td><span class="label label-success">Active</span></td>
												<td>
													<div class="btn-group btn-group-xs">
														<a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
														<a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td>3</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td><td><strong>Annisa Jumpa </strong></td>
												<td>AN</td><td>ANktyu</td><td><a href="mailto:#">name@domain.com</a></td>
												<td>125</td><td><span class="label label-success">Active</span></td>
												<td>
													<div class="btn-group btn-group-xs">
														<a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
														<a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td>4</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td><td><strong>Ari Rusmanto</strong></td>
												<td>JakIn</td><td>011990</td><td><a href="mailto:#">name@domain.com</a></td>
												<td>126</td><td><span class="label label-success">Active</span></td>
												<td>
													<div class="btn-group btn-group-xs">
														<a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
														<a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td>5</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td><td><strong>Jenny Doe</strong></td>
												<td>NewYk</td><td>111975</td><td><a href="mailto:#">name@domain.com</a></td>
												<td>127</td><td><span class="label label-danger">Suspended</span></td>
												<td>
													<div class="btn-group btn-group-xs">
														<a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
														<a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td>6</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td><td><strong>Hana Sartika</strong></td>
												<td>SemInd</td><td>231991</td><td><a href="mailto:#">name@domain.com</a></td>
												<td>128</td><td><span class="label label-success">Active</span></td>
												<td>
													<div class="btn-group btn-group-xs">
														<a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
														<a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td>7</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td><td><strong>Tukimin</strong></td>
												<td>SuraInd</td><td>1745</td><td><a href="mailto:#">name@domain.com</a></td>
												<td>129</td><td><span class="label label-success">Active</span></td>
												<td>
													<div class="btn-group btn-group-xs">
														<a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
														<a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td>8</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td><td><strong>Johnny Depp</strong></td>
												<td>PariFr</td><td> 30972</td><td><a href="mailto:#">name@domain.com</a></td>
												<td>130</td><td><span class="label label-warning">Deactivated</span></td>
												<td>
													<div class="btn-group btn-group-xs">
														<a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
														<a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td>9</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td><td><strong>Mas Arie</strong></td>
												<td>BoyoIndo</td><td>01990</td><td><a href="mailto:#">name@domain.com</a></td>
												<td>131</td><td><span class="label label-success">Active</span></td>
												<td>
													<div class="btn-group btn-group-xs">
														<a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
														<a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td>10</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td><td><strong>Rusmanto</strong></td>
												<td>BdungIndon</td><td>281992</td><td><a href="mailto:#">name@domain.com</a></td>
												<td>132</td><td><span class="label label-success">Active</span></td>
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

                    <!-- ceinde table 1 -->

                                    <!-- table 2-->
                                   <div class="col-md-12">
                                   <div class="widget">
                    							<div class="widget-header transparent">
                    								<h2><strong>Klassen</strong> Klassen actief </h2>
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
                    												<th>Klas</th>
                    												<th>Schooljaar</th>
                    												<th>Richting</th>
                    												<th>Studenten</th>
                    												<th>Status</th>
                    												<th data-sortable="false">Bewerken</th>
                    											</tr>
                    										</thead>

                    										<tbody>
                    											<tr>
                    												<td>1</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td>
                    												<td><strong>406</strong></td>
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
                    												<td>2</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td><td><strong>407</strong></td>
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
                    												<td>3</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td><td><strong>408</strong></td>
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
                    												<td>4</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td><td><strong>409</strong></td>
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
                    												<td>5</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td><td><strong>301</strong></td>
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
                    												<td>6</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td><td><strong>302</strong></td>
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
                    												<td>7</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td><td><strong>303</strong></td>
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
                    												<td>8</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td><td><strong>304</strong></td>
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
                    												<td>9</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td><td><strong>201</strong></td>
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
                    												<td>10</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td><td><strong>202</strong></td>
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

                    						<!-- table 2-->


                    					<!-- table 3-->


                                   <div class="col-md-12">
                                   <div class="widget">
                    							<div class="widget-header transparent">
                    								<h2><strong>Klassen</strong> Vakken actief </h2>
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


                    <!-- Begin table 4-->

					<div class="col-md-12">
						<div class="widget">
							<div class="widget-header transparent">
								<h2><strong>Studenten </strong> Table</h2>
								<div class="additional-btn">
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
								</div>
							</div>
							<div class="widget-content">
								<div class="table-responsive">
									<table data-sortable="" class="table" data-sortable-initialized="true">
										<thead>
											<tr>
												<th>No</th>
												<th style="width: 30px" data-sortable="false"><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></th>
												<th>Volledige naam</th>
												<th>Adress</th>
												<th>Richting</th>
												<th>Klas</th>
												<th data-sortable="false">ID</th>
												<th>Status</th>
												<th data-sortable="false">Bewerken</th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<td>1</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td><td><strong>John Doe</strong></td>
												<td>Kakkerlaklaan 10</td><td>P1</td><td>103</td>
												<td>123</td><td><span class="label label-success">Active</span></td>
												<td>
													<div class="btn-group btn-group-xs">
														<a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
														<a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td>2</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td><td><strong>Rusmanovski</strong></td>
												<td>Riekelaan 20</td><td>P1</td><td>103</a></td>
												<td>124</td><td><span class="label label-success">Active</span></td>
												<td>
													<div class="btn-group btn-group-xs">
														<a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
														<a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td>3</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td><td><strong>Annisa Jumpa </strong></td>
												<td>Schilpadstraat 10</td><td>Q1</td><td>204</td>
												<td>125</td><td><span class="label label-success">Active</span></td>
												<td>
													<div class="btn-group btn-group-xs">
														<a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
														<a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td>4</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td><td><strong>Ari Rusmanto</strong></td>
												<td>BlauwStraat 11</td><td>Q1</td><td>211</td>
												<td>126</td><td><span class="label label-success">Active</span></td>
												<td>
													<div class="btn-group btn-group-xs">
														<a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
														<a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td>5</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td><td><strong>Jenny Doe</strong></td>
												<td>Sekestraat 10</td><td>Q1</td><td>206</td>
												<td>127</td><td><span class="label label-danger">Suspended</span></td>
												<td>
													<div class="btn-group btn-group-xs">
														<a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
														<a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td>6</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td><td><strong>Hana Sartika</strong></td>
												<td>Kokulustraat 12</td><td>R</td><td>206</td>
												<td>128</td><td><span class="label label-success">Active</span></td>
												<td>
													<div class="btn-group btn-group-xs">
														<a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
														<a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td>7</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td><td><strong>Tukimin</strong></td>
												<td>Bigiedestraat 14</td><td>R</td><td>104</td>
												<td>129</td><td><span class="label label-success">Active</span></td>
												<td>
													<div class="btn-group btn-group-xs">
														<a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
														<a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td>8</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td><td><strong>Johnny Depp</strong></td>
												<td>Langatabikistraat 29</td><td>R</td><td>103</td>
												<td>130</td><td><span class="label label-warning">Deactivated</span></td>
												<td>
													<div class="btn-group btn-group-xs">
														<a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
														<a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td>9</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td><td><strong>Mas Arie</strong></td>
												<td>Sekepatustraat 15</td><td>R</td><td>204</td>
												<td>131</td><td><span class="label label-success">Active</span></td>
												<td>
													<div class="btn-group btn-group-xs">
														<a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
														<a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td>10</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td><td><strong>Rusmanto</strong></td>
												<td>Godoulostraat 27</td><td>R</td><td>401</td>
												<td>132</td><td><span class="label label-success">Active</span></td>
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
	</div>
</div>


<?php  include'inc/bottom.php';?>