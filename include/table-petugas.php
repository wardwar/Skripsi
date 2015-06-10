<div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Data Petugas</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="table" class="display striped">
                                        <thead>
                                            <tr>
                                                <th>ID PETUGAS</th>
                                                <th>NAMA</th>
                                                <th>USERNAME</th>
                                                <th>NAMA POS</th>
                                                <th>LOKASI POS</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                        	$petugasquery = "SELECT * FROM petugas INNER JOIN pos ON petugas.id_pos = pos.id_pos";
                                        	$query = mysql_query($petugasquery);
												while ($row = mysql_fetch_assoc($query)) {
														$data[] = $row;
													}

													foreach ($data as $petugas) {
														?>
														<tr>
			                                                <td><?php echo $petugas['id_petugas'];?></td>
			                                                <td><?php echo $petugas['nama_petugas'];?></td>
			                                                <td><?php echo $petugas['username'];?></td>
			                                                <td><?php echo $petugas['nama'];?></td>
			                                                <td><?php echo $petugas['lokasi'];?></td>
			                                                <td>
			                                                <a href="#"><i class="mdi-editor-border-color"></i></a>
			                                                <a href="#"><i class="mdi-action-delete"></i></a>
			                                                </td>
                                            			</tr>
														<?php
													}
                                        ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID PETUGAS</th>
                                                <th>NAMA</th>
                                                <th>USERNAME</th>
                                                <th>NAMA POS</th>
                                                <th>LOKASI POS</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->