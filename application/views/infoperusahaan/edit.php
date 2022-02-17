<!-- Nested Row within Card Body -->
<div class="col-10 align-center">
	<div class="card">
		<!-- /.card-header -->
		<div class="card-body">

			<div class="row">
				<div class="col-lg-12">
					<div class="p-5">
						<div class="text-center">
							<h1 class="h4 text-gray-900 mb-4">Edit User</h1>
						</div>
						<?php echo form_open(base_url('user/edit/' . $user->id_user)); ?>
						<div class="form-group row">
							<div class="col-sm-6 mb-3 mb-sm-0">
								<input type="hidden" name="id_user" class="form-control form-control-user" id="exampleFirstName"
							placeholder="id_user" value="<?php echo $user->id_user ?>">
						<input type="text" name="nama" class="form-control form-control-user" id="exampleFirstName"
							placeholder="nama" value="<?php echo $user->nama ?>">
							</div>
							<div class="col-sm-6">
								<input type="text" name="username" class="form-control form-control-user"
									id="exampleFirstName" placeholder="username"
									value="<?php echo $user->username ?>">
							</div>
						</div>
						<div class="form-group">
							<input type="email" name="email" class="form-control form-control-user"
								id="exampleFirstName" placeholder="email" value="<?php echo $user->email ?>">
						</div>
						<div class="form-group row">
							<div class="col-sm-6 mb-3 mb-sm-0">
								<input type="password" name="password" class="form-control form-control-user"
									id="exampleFirstName" placeholder="password"
									value="<?php echo $this->input->post('password') ?>">
							</div>
							<div class="col-sm-6">
								<input type="password" name="konfirmasi" class="form-control form-control-user"
									id="exampleFirstName" placeholder="konfirmasi"
									value="<?php echo $this->input->post('konfirmasi') ?>">
							</div>
						</div>
						<div class="form-group">
                        <select name="akses_level" class="form-control" id="exampleInputLevel">
						<?php $akses_level = $this->input->post('akses_level') ? $this->input->post('akses_level') : $user->akses_level ?>
						<option value="Admin">Admin</option>
						<option value="User" <?= $akses_level == 'User' ? 'selected' : null ?>>User</option>
					</select>
						</div>
						<button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
							Register Account
						</button>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

