<?= $this->extend('frontend/layouts/app'); ?>
<?= $this->section('title'); ?>
Photo
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<!-- main content -->
<section class="breadcrumbs overlay">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2>Photo DPS-N</h2>
				<ul class="bread-list">
					<li><a href="javascript:void(0)">Gallery<i class="fa fa-angle-right"></i></a></li>
					<li class="active"><a href="javascript:void(0);">Photo</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="team-style2 section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h2>Image Gallery <span>DPS-N</span></h2>
					<p>D. P. Singh Institute of Education (nursing) shares some of the magnificient gallery images.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<?php foreach($photos as $photo): ?>
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Single Team -->
				<div class="single-team">
					<div class="image">
						<img src="<?= base_url($photo->img_gal_file);?>" class="d-flex" alt="#">
						<a href="<?= base_url($photo->img_gal_file);?>" data-fancybox="photo"><i class="fa fa-search"></i></a>
					</div>
					<!--team-content -->
				</div>
				<!--/ End Single Team -->
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<!-- main content -->
<?= $this->endSection(); ?>