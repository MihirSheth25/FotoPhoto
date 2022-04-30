<?php if($_settings->chk_flashdata('success')): ?>
<script>
	alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
</script>
<?php endif;?>
<h1 class="">Welcome to <?php echo $_settings->info('name') ?></h1>
<hr>
<div class="row justify-content-center">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-images"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Albums</span>
                <span class="info-box-number">
                  <?php echo $conn->query("SELECT * FROM album_list where delete_f = 0 and user_id = '{$_settings->userdata('id')}'")->num_rows ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-image"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Images</span>
                <span class="info-box-number">
                <?php echo $conn->query("SELECT * FROM `images` where delete_f = 0 and user_id = '{$_settings->userdata('id')}'")->num_rows ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

        </div>
