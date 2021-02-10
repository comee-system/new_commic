<?php if($menuflag): ?>
<div class="col-md-2 visible-lg">
	<nav class="navbar navbar-expand-lg  navbar-info mb-3 " >
		
		<div class="collapse navbar-collapse py-4 " id="Navber" style="width:220px;">

			<ul class="h1 navbar-nav nav-justified flex-column ">
				<?php foreach($menu_list as $key=>$value):?>
					<li class="nav-item text-left">
						<a class="nav-link text-black-50" href="#"><span class="h6 d-block"><?=$value?></span> </a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<!-- /.navbar-collapse --> 
	</nav>
</div>
<?php endif; ?>
