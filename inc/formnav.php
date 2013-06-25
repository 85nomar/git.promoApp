<div class="span3 bs-docs-sidebar">
	<ul class="nav nav-list bs-docs-sidenav" data-spy="affix" data-offset-top="20">
		<?php 
		$thisNav = $this->formNav;
		
		foreach($thisNav as $pageName => $page) : 

		$thisURL = $page['url']; 
		$isActive = $this->formNav == $thisURL ?>

		<li <?php echo $isActive ? ' class="active"' : '' ?> >
			<a href="<?php echo $thisURL?>"><i class="icon-chevron-right"></i><?php echo $pageName ?></a>
		</li>

		<?php endforeach ?>
	</ul>
</div>

