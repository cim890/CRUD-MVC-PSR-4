		<!---View -->
	<table>
		<thead>
		    <tr>
		      <th>No</th>
		      <th>Judul</th>
		      <th>Isi Artikel</th>
		      <th>Aksi</th>
		    </tr>
		</thead>
		<?php foreach ($data_artikel as $row) { ?>
		<tbody>
		  	<tr>
				<td><?php echo $no_ket;?> <?php echo $no++; ?></td>
				<td><?php echo $row['judul'] ?></td>
				<td><?php echo $row['isi'] ?></td>
				<td><a href="#openModal/<?php echo $row['id']; ?>" class="btn btn-default"><i class="fa fa-pencil"></a></i> <a href="#deleteModal/<?php echo $row['id']; ?>" class="btn btn-default"><i class="fa fa-trash"></i></a>
				
				<!---Edit -->
				<div id="openModal/<?php echo $row['id']; ?>" class="modalDialog">
					<div><a href="#close" title="Close" class="close">X</a>
						<h3 class="judul">Form Edit Artikel</h3>
						<article id="artikel">
							<div id="form-edit">
								<form method="post">
									<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
									<div class="form-row">
										<label for="judul">Judul</label>
										<input type="text" name="judul" value="<?php echo $row['judul']; ?>">	
									</div>
									<div class="form-row">
										<label for="isi">Isi Artikel</label>
										<textarea name="isi"><?php echo $row['isi']; ?></textarea>
									</div>
									<button type="submit" name="update">Ubah</button>
									<a href="#close"><button type="button" class="cancel">Batal</button></a>
								</form>									
							</div>
						</article>
					</div>
				</div>

				<!---Delete -->
				<div id="deleteModal/<?php echo $row['id']; ?>" class="modalDelete">
					<div><a href="#close" title="Close" class="close">X</a>
						<h3 class="judul">Konfirmasi Hapus Artikel</h3>
						<article id="artikel_delete">
							<div id="form-edit">
								<form method="post">
									<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
									<h3>Apakah anda yakin akan menghapus artikel ini ?</h3>
									<button type="submit" name="hapus">Hapus</button>
									<a href="#close"><button type="button" class="cancel">Batal</button></a>
								</form>									
							</div>
						</article>
					</div>
				</div>
				</td>
			</tr>						
		</tbody>
		<?php } ?>
	</table>