<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3 ">
		<h6 class="m-0 font-weight-bold text-primary" >Data User</h6>
	</div>

	<div class="card-body">
	<a class="btn btn-primary" href="<?php echo base_url('user/tambah' ); ?>"  role="button">Tambah</a>
	<br>
	<br>
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Akses</th>
						<th>Akses level</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
                     $no=1;
                     foreach($user as $user) {?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $user->nama; ?></td>
						<td><?php echo $user->email; ?></td>
						<td><?php echo $user->username; ?></td>
						<td><?php echo $user->akses_level; ?></td>
						<td>
							<div class="btn-group">
								<a href="<?php echo base_url('user/edit/' . $user->id_user); ?>" class="btn btn-group btn-primary"><i
										class="fas fa-edit"></i></a>
								<a href="<?php echo base_url('user/delete/' . $user->id_user); ?>" class="btn btn-group btn-danger"
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
