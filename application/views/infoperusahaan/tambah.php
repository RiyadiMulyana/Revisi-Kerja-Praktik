		<!-- Nested Row within Card Body -->
		<div class="col-10 align-center">
			<div class="card">
				<!-- /.card-header -->
				<div class="card-body">

					<div class="row">
						<div class="col-lg-12">
							<div class="p-5">
								<div class="text-center">
									<h1 class="h4 text-gray-900 mb-4">Input user</h1>
								</div>
								<?php echo form_open(base_url('user/tambah')); ?>
								<div class="form-group">
									<!-- <div class="col-sm-6"> -->
										<h6>Nama Lengkap </h6>
										<input type="text" name="nama" class="form-control form-control-user"
											id="exampleFirstName" placeholder="Nama Lengkap"
											value="<?php echo set_value('nama') ?>">
									<!-- </div> -->
									
								</div>
								<div class="form-group row">
									<div class="col-sm-6 mb-3 mb-sm-0">	
										<h6>Username </h6>										
										<input type="text" name="username" class="form-control form-control-user"
											id="exampleFirstName" placeholder="Username"
											value="<?php echo set_value('username') ?>">

										</div>
									<div class="col-sm-6">
										<h6>Email </h6>
										<input type="email" name="email" class="form-control form-control-user"
											id="exampleFirstName" placeholder="Email" value="<?php echo set_value('email') ?>">
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-6 mb-3 mb-sm-0">
										<h6>Password </h6> 
										<input type="password" name="password" class="form-control form-control-user"
											id="exampleFirstName" placeholder="Password"
											value="<?php echo set_value('password') ?>">
									</div>
									<div class="col-sm-6">
										<h6>Konfirmasi </h6>
										<input type="password" name="konfirmasi" class="form-control form-control-user"
											id="exampleFirstName" placeholder="konfirmasi"
											value="<?php echo set_value('password') ?>">
									</div>
								</div>
								<div class="form-group">
									<h6>Konfirmasi </h6>
									<select name="akses_level" class="form-control" id="exampleInputLevel">
										<option value="">- Pilih -</option>
										<option value="Admin" <?= set_value('akses_level') == 'Admin' ? "selected" : null ?>>
											Admin</option>
										<option value="User" <?= set_value('akses_level') == 'User' ? "selected" : null ?>>User
										</option>
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
