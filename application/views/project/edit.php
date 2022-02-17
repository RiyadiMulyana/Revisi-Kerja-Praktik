<!-- Nested Row within Card Body -->
<div class="col-12 align-center">
	<div class="card">
		<!-- /.card-header -->
		<div class="card-body">
			<form action="<?php echo base_url('project/proses_edit') ?>" method="post">
			<input type="hidden" name="id_project" value="<?php echo $id_project ?>">
			<div class="row">
				<div class="col-lg-12">
					<div class="p-5">
						<div class="text-center">
							<h1 class="h4 text-gray-900 mb-4">Edit Project</h1>
						</div>
						<?php echo form_open(base_url('project/tambah')); ?>

						<div class="form-group">
							<input type="text" name="nama" class="form-control form-control-user" id="exampleFirstName"
								placeholder="nama project" value="<?php echo $project->nama ?>">
						</div>
						<div class="form-group">
							<input type="text" name="divisi" class="form-control form-control-user"
								id="exampleFirstName" placeholder="divisi project"
								value="<?php echo $project->divisi ?>">
						</div>
						

						<div class="form-group">
							<label for="agenda">Dateline</label>
							<div class="container">
								Start Date: <input id="startDate" width="276" name="start" />
								End Date: <input id="endDate" width="276" name="end" />
							</div>
							<script>
								// var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
								var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());

								$('#startDate').datepicker({
									format: 'yyyy-mm-dd',
									uiLibrary: 'bootstrap4',
									iconsLibrary: 'fontawesome',
									minDate: today,
									maxDate: function() {
										return $('#endDate').val();
									}
								});
								$('#endDate').datepicker({
									uiLibrary: 'bootstrap4',
									format: 'yyyy-mm-dd',
									iconsLibrary: 'fontawesome',
									minDate: function() {
										return $('#startDate').val();
									}
								});
							</script>
							<!-- <div class="mb-3">
								<textarea name="agenda_project" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" value="<?php echo set_value('agenda_project') ?>"></textarea>
							</div> -->
						</div>

						<div class="form-group">
							<select name="status" class="form-control" id="exampleInputLevel">
								<option value="">- Pilih -</option>
								<option value="akan dikerjakan"
									<?= $project->status == 'akan dikerjakan' ? "selected" : null ?>>
									akan dikerjakan</option>
								<option value="sedang dikerjakan"
									<?= $project->status == 'sedang dikerjakan' ? "selected" : null ?>>sedang
									dikerjakan
								</option>
								<option value="selsai dikerjakan"
									<?= $project->status == 'selsai dikerjakan' ? "selected" : null ?>>selesai
									dikerjakan
								</option>
							</select>
						</div>
						<div class="form-group">
							<input type="text" name="link" class="form-control form-control-user" id="exampleFirstName"
								placeholder="tambahkan link dokumentasi" value="<?php echo $project->link ?>">
						</div>
						<button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
							simpan
						</button>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
			</form>