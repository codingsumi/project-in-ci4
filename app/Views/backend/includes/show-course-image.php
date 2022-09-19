<div class="modal fade" id="course<?= $course->course_id;?>">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><?= ucwords($course->course_name); ?></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <img src="<?= base_url($course->course_file); ?>" class="img-fluid mx-auto w-100" alt="">
      </div>

      <!-- Modal footer -->

    </div>
  </div>
</div>