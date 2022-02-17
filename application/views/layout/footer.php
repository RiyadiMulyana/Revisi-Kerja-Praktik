<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="login">Logout</a>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('asset/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url('asset/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('asset/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('asset/'); ?>js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<!-- <script src="<?php echo base_url('asset/'); ?>vendor/chart.js/Chart.min.js"></script> -->

<!-- Page level custom scripts -->
<!-- <script src="<?php echo base_url('asset/'); ?>js/demo/chart-area-demo.js"></script> -->
<!-- <script src="<?php echo base_url('asset/'); ?>js/demo/chart-pie-demo.js"></script> -->

<!-- SCRIPT KALENDER -->
<script src="<?php echo base_url('asset/'); ?>kalender/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url('asset/'); ?>kalender/js/popper.min.js"></script>
<script src="<?php echo base_url('asset/'); ?>kalender/js/bootstrap.min.js"></script>

<script src='<?php echo base_url('asset/'); ?>kalender/fullcalendar/packages/core/main.js'></script>
<script src='<?php echo base_url('asset/'); ?>kalender/fullcalendar/packages/interaction/main.js'></script>
<script src='<?php echo base_url('asset/'); ?>kalender/fullcalendar/packages/daygrid/main.js'></script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: ['interaction', 'dayGrid'],
      defaultDate: '2021-07-01',
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        <?php
        for ($i = 0; $i < 5; $i++) { ?> {
            title: 'asd',
            start: '2021-07-01',
            end: '2021-07-04'
          },
        <?php } ?>
      ]
    });

    calendar.render();
  });
</script>

<script src="<?php echo base_url('asset/'); ?>kalender/js/main.js"></script>


</body>

</html>