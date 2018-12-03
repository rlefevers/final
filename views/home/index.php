<?php
include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
		<h1>Welcome!</h1>
	</div>
	<div class="row">
		<div id="image">
			<center><img src="homeimage.png"></center>
		</div>
		<p>
			<a href="<?php echo BASE_URL;?>blog/index">Check out the blog!</a>
		</p>
		<br>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce placerat augue ex, ultrices consequat neque venenatis et.
			Aliquam erat volutpat. Donec mollis non metus in blandit. Etiam vitae ullamcorper justo, nec volutpat lectus.
			Donec dapibus tortor justo, ut pellentesque arcu feugiat at. Proin pretium facilisis enim. Vestibulum eu metus sit amet quam
			 aliquam rutrum. Curabitur dignissim, nulla ut auctor aliquet, neque tortor rhoncus nulla, sed commodo ante mi ac turpis.
			 Quisque imperdiet nec eros in cursus. Donec id erat velit. Nam ut metus eget orci convallis iaculis. Nulla dictum purus
			  eget tincidunt convallis. Donec egestas iaculis tortor. Interdum et malesuada fames ac ante ipsum primis in faucibus.
				Cras tempus felis at libero blandit gravida.
		</p>
</div>
	<div class="page-header">
    <h2>Latest News from <?php echo $title;?></h2>
  </div>
    <?php
    echo $data;
    ?>
</div>
<?php include('views/elements/footer.php');?>
