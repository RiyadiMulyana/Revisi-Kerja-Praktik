<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Data Projek</h6>
	</div>
	<div class="card-body">
		<a class="btn btn-primary" href="<?php echo base_url('project/tambah'); ?>" role="button">Tambah</a>
		<br>
		<br>
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Divisi</th>
						<th>Mulai</th>
						<th>Berakhr</th>
						<th>Status</th>
						<th>Link</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($project as $project) { ?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $project->nama; ?></td>
							<td><?php echo $project->divisi; ?></td>
							<td><?php echo $project->start; ?></td>
							<td><?php echo $project->end; ?></td>
							<td><?php echo $project->status; ?></td>
							<?php if ($project->link) { ?>
								<td><a href="<?php echo $project->link ?>">Link ke dokumentasi</a></td>
							<?php } else { ?>
								<td><a href="<?php echo base_url('project/edit/' . $project->id_project); ?>">Tambah link laporan</a></td>
							<?php } ?>
							<td>
								<div class="btn-group">
									<a href="<?php echo base_url('project/edit/' . $project->id_project); ?>" class="btn btn-group btn-primary"><i class="fas fa-edit"></i></a>
									<a href="<?php echo base_url('project/delete/' . $project->id_project); ?>" class="btn btn-group btn-danger" onclick="return confirm('Yakin Ingin Menghapus')"><i class="fas fa-trash"></i></a>
									<a href="<?php echo base_url('subproject/list/' . $project->id_project); ?>" class="btn btn-group btn-primary"><i class="fas fa-eye"></i></a>
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