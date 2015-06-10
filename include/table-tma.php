<div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Data Tinggi Muka Air</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="table" class="display striped">
                                        <thead>
                                            <tr>
                                                <th>PETUGAS</th>
                                                <th>TANGGAL</th>
                                                <th>WAKTU</th>
                                                <th>TINGGI MUKA AIR</th>
                                                <th>NAMA POS</th>
                                                <th>LOKASI</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                        	$tmaquery = "SELECT 
                                            petugas.nama_petugas,
                                            tma.tanggal,
                                            DATE_FORMAT(tma.waktu,'%H:%i') AS waktu,
                                            tma.tinggi,
                                            pos.nama,
                                            pos.lokasi
                                            FROM detail_tma 
                                            INNER JOIN petugas ON detail_tma.id_petugas = petugas.id_petugas
                                            INNER JOIN tma ON detail_tma.id_tma = tma.id_tma
                                            INNER JOIN pos ON petugas.id_petugas = pos.id_pos";
                                        	$query = mysql_query($tmaquery);
												while ($row = mysql_fetch_assoc($query)) {
														$data[] = $row;
													}

													foreach ($data as $tma) {
														?>
														<tr>
			                                                <td><?php echo $tma['nama_petugas'];?></td>
			                                                <td><?php echo $tma['tanggal'];?></td>
			                                                <td><?php echo $tma['waktu'];?></td>
			                                                <td><?php echo $tma['tinggi'];?> cm</td>
                                                            <td><?php echo $tma['nama'];?></td>
			                                                <td><?php echo $tma['lokasi'];?></td>
                                            			</tr>
														<?php
													}
                                        ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>PETUGAS</th>
                                                <th>TANGGAL</th>
                                                <th>WAKTU</th>
                                                <th>TINGGI MUKA AIR</th>
                                                <th>NAMA POS</th>
                                                <th>LOKASI</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->