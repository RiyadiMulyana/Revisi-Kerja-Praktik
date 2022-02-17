<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Data Kariawan</h6>
	</div>
	<div class="card-body">
		<a class="btn btn-primary" href="<?php echo base_url('infoperusahaan/tambah'); ?>"  role="button">Tambah</a>
		<br>
		<br>
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>no</th>
						<th>nama</th>
						<th>divisi</th>

						<th>AKSI</th>
					</tr>
				</thead>
				<tbody>
					<?php 
                     $no=1;
                     foreach($info_tabel as $info_tabel) {?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $info_tabel->nama; ?></td>
						<td><?php echo $info_tabel->divisi; ?></td>
 
						
						<td>
							<div class="btn-group">
								<a href="<?php echo base_url('infoperusahaan/info_tabel/' . $info_tabel->id_info); ?>" class="btn btn-group btn-primary"><i
										class="fas fa-edit"></i></a>
								<a href="<?php echo base_url('infoperusahaan/delete/' . $info_tabel->id_info); ?>" class="btn btn-group btn-danger"
									onclick="return confirm('Yakin Ingin Menghapus')"><i class="fas fa-trash"></i></a>
							</div>
						</td>
					</tr>
					<?php }?>
				</tbody>
			</table>
		</div>
	</div>
</div>

</div>
<!-- /.container-fluid -->
