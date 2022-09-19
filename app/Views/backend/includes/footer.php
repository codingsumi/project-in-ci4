<!-- footer  -->
<div class="hk-footer-wrap container">
    <footer class="footer">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <p>Powered by<a href="http://gautamtech.com/" class="text-dark" target="_blank">Gautam Tech Solutions Pvt. Ltd.</a> © <?= date("Y"); ?></p>
            </div>
            <div class="col-md-6 col-sm-12">
                <p class="d-inline-block">Follow Me</p>
                <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
            </div>
        </div>
    </footer>
</div>
</div>
<script src="<?= base_url('assets/vendors/jquery/dist/jquery.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendors/popper.js/dist/umd/popper.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendors/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
<script src="<?= base_url('assets/dist/js/jquery.slimscroll.js'); ?>"></script>
<script src="<?= base_url('assets/vendors/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendors/datatables.net-dt/js/dataTables.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendors/datatables.net-buttons/js/buttons.flash.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendors/jszip/dist/jszip.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendors/pdfmake/build/pdfmake.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendors/pdfmake/build/vfs_fonts.js'); ?>"></script>
<script src="<?= base_url('assets/vendors/datatables.net-buttons/js/buttons.html5.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendors/datatables.net-buttons/js/buttons.print.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js'); ?>"></script>
<script src="<?= base_url('assets/dist/js/dataTables-data.js'); ?>"></script>
<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        CKEDITOR.replaceAll('desc');
        CKEDITOR.replace('desc_gal');
        CKEDITOR.replace('desc_infrastructure');
        CKEDITOR.replace('desc_announcement');
        CKEDITOR.replace('desc_notice');
        CKEDITOR.replace('desc_activity');
        CKEDITOR.replace('desc_faculty');
        CKEDITOR.replace('desc_vehicle');
        CKEDITOR.replace('user_review');
        CKEDITOR.replace('review_trans');
    });
</script>
<script src="<?= base_url('assets/dist/js/feather.min.js'); ?>"></script>
<script src="<?= base_url('assets/dist/js/jquery.validate.min.js'); ?>"></script>
<script src="<?= base_url('assets/dist/js/dropdown-bootstrap-extended.js'); ?>"></script>
<script src="<?= base_url('assets/vendors/jquery-toggles/toggles.min.js'); ?>"></script>
<script src="<?= base_url('assets/dist/js/toggle-data.js'); ?>"></script>
<script src="<?= base_url('assets/dist/js/init.js'); ?>"></script>
<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

</body>