<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Data Sub Projek</h6>
	</div>
	<div class="card-body">
		<a class="btn btn-primary" href="<?php echo base_url('subproject/tambah/'.$id_project); ?>" role="button">Tambah Tugas</a>
		<br>
		<br>
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>No</th>
						<th>Tugas</th>
						<th>Tanggal Mulai</th>
						<th>Tanggal Selesai</th>
						<th>Penanggung Jawab</th>
						<th>Status</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($project as $project) { ?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $project['tugas']; ?></td>
							<td><?php echo $project['start']; ?></td>
							<td><?php echo $project['end']; ?></td>
							<td><?php echo $project['pj_project']; ?></td>
							<td>
							<?php if ($project['selesai'] == 1) { ?>
								<a class="btn btn-success">Selesai</a>						
							<?php } else { ?>
								<a class="btn btn-danger">Belum selesai</a>
							<?php } ?>
							</td>
							<td>
								<div class="btn-group">
									<a href="<?php echo base_url('subproject/edit/' . $project['id_subproject']); ?>" class="btn btn-group btn-primary"><i class="fas fa-edit"></i></a>
									<a href="<?php echo base_url('subproject/delete/' . $project['id_subproject']); ?>" class="btn btn-group btn-danger" onclick="return confirm('Yakin Ingin Menghapus')"><i class="fas fa-trash"></i></a>
								</div>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

</div>
<!-- /.container-fluid -->