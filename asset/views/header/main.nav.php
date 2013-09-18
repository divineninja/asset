<?php
	$navigation = new navigation;
	// located in paths.php
?>
<div class="navbar">
  <div class="navbar-inner">
	<div class="container main-nav">
	<a class="brand" href="<?php echo URL; ?>">Network</a>
		<ul class="nav">
			<?php foreach( $navigation->navigation as $navigation ){ ?>
				<li class="<?php echo ($navigation['is_active']) ? 'active': ''; ?>"><a href="<?php echo $navigation['link']; ?>"><?php echo $navigation['value']; ?></a></li>
			<?php } ?>
		</ul>
	</div>
  </div>
</div>			