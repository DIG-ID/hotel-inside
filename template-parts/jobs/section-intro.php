<section class="section section-intro">
	<div class="custom-container">
		<div class="row justify-content-center align-items-center">
			<div class="col-12 col-sm-10 col-md-8 col-lg-8 col-xl-8 text-center">
				<p>
				<div class="markt-intro__text"><?php 
				$pagejobs = get_posts([
					'name'      => 'top-jobs',
					'post_type' => 'page'
				]);
				if ( $pagejobs )
				{echo $pagejobs[0]->post_content;}
				 ?></div>
				</p>
			</div>
		</div>
	</div>
</section>