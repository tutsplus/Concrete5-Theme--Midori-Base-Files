<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php $this->inc('elements/header.php');?>

<div class="containerwrap">
		<div class="container">
			<div class="searchmenu row">
				<form action="#" method="post" name="search-form" class="search-form">
					<input type="text" name="search" class="search" value="" />
					<div class="clear"></div>
				</form>
			</div>
			<div class="row">
				<div class="span12">
					<img src="<?php echo $this->getThemePath(); ?>/images/1170x390.jpg" alt="" />
				</div>
			</div>
			<div class="row" style="height: 40px;"></div>
			<h3>Latest Blog Posts</h3>
			<div class="row">
				<div class="span12">        
				<!-- Content -->
					<div class="row">
						<div class="span3 blog-teaser">
							<img src="<?php echo $this->getThemePath(); ?>/images/275x160.jpg" alt="" />
							<h5>Blogpost With A Large Picture</h5>
							<div class="text">Amet dolor perspi ciatis undeno laudero antium, totam rem aperiam, eaque ipsa quae dolor illo inventore glavrida. [...]</div>
							<div class="link"><a href="#">Continue Reading ›</a></div>
						</div>
						<div class="span3 blog-teaser">
							<img src="<?php echo $this->getThemePath(); ?>/images/275x160.jpg" alt="" />
							<h5>Blogpost With A Large Picture</h5>
							<div class="text">Amet dolor perspi ciatis undeno laudero antium, totam rem aperiam, eaque ipsa quae dolor illo inventore glavrida. [...]</div>
							<div class="link"><a href="#">Continue Reading ›</a></div>
						</div>
						<div class="span3 blog-teaser">
							<img src="<?php echo $this->getThemePath(); ?>/images/275x160.jpg" alt="" />
							<h5>Blogpost With A Large Picture</h5>
							<div class="text">Amet dolor perspi ciatis undeno laudero antium, totam rem aperiam, eaque ipsa quae dolor illo inventore glavrida. [...]</div>
							<div class="link"><a href="#">Continue Reading ›</a></div>
						</div>
						<div class="span3 blog-teaser">
							<img src="<?php echo $this->getThemePath(); ?>/images/275x160.jpg" alt="" />
							<h5>Blogpost With A Large Picture</h5>
							<div class="text">Amet dolor perspi ciatis undeno laudero antium, totam rem aperiam, eaque ipsa quae dolor illo inventore glavrida. [...]</div>
							<div class="link"><a href="#">Continue Reading ›</a></div>
						</div>
					</div>    
				</div>        
            </div>
			<div class="row" style="height: 15px;"></div>
		</div>
	</div>
<?php $this->inc('elements/footer.php'); ?>