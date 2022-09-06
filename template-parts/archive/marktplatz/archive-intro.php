<div id="section-markt-intro" class="section section-markt-intro">
	<div class="custom-container">
		<div class="row markt-intro__row">
			<div class="col-12 col-sm-10 col-md-8 col-lg-8 col-xl-8 p-0">
				<div class="markt-intro__text"><?php 
				$pagemarkt = get_posts([
					'name'      => 'marktplatz',
					'post_type' => 'page'
				]);
				if ( $pagemarkt )
				{echo $pagemarkt[0]->post_content;}
				 ?></div>
			</div>
		</div>
	</div>
</div>
