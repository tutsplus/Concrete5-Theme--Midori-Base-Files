<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<div class="footerwrap">
		<div class="container">
			<div class="row">
				<div class="span12">        
				<!-- Content -->
					<div class="row">
						<div class="span3">
							<img src="<?php echo $this->getThemePath(); ?>/images/logo.png" alt="" />
							<br /><br /><br /><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
						</div>
						<div class="span3">
							<h5>Latest Blog Posts</h5>
							<ul class="pagelist">
								<li><a href="#"><span>›</span>Brand new design online</a></li>
								<li><a href="#"><span>›</span>Take a look at the sldier</a></li>
								<li><a href="#"><span>›</span>Follow us at twitter</a></li>
							</ul>
						</div>
						<div class="span3">
							<h5>Twitter</h5>
						</div>
						<div class="span3">
							<h5>Tags</h5>
							<div class="tagcloud">
								<a href="#">news</a>
								<a href="#">video</a>
								<a href="#">special</a>
								<a href="#">whatever</a>
								<a href="#">design</a>
								<a href="#">twitter</a>
								<a href="#">facebook</a>
								<a href="#">google+</a>
								<a href="#">youtube</a>
							</div>
						</div>
					</div>    
				</div>        
			</div>
		</div>
	</div>
<?php Loader::element('footer_required'); ?>
</body></html>