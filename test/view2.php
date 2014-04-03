<?php
require_once 'core/init.php';
require_once 'core/common.inc.php';


displayPageHeader();

?>
<style type="text/css">
#news-container {
	width: 400px; 
	margin: auto;
	margin-top: 30px;
	border: 5px solid #333333;
}
</style>
<script type="text/javascript">
	$(function(){
	$('#news-container').vTicker({ 
		speed: 500,
		pause: 3000,
		animation: 'fade',
		mousePause: false,
		showItems: 2
	});
});
</script>

<div id="news-container">
	<ul>
		<li>
			<div>
				<h2>Lorem ipsum dolor sit </h2>
				<p>amet, porta at, imperdiet id neque. more info</p>	
			</div>
		</li>
		<li>
			<div>
				<h2>Lorem ipsum dolor sit </h2>
				<p>amet, porta at, imperdiet id neque. more info</p>	
			</div>
		</li>
		<li>
			<div>
				<h2>Lorem ipsum dolor sit </h2>
				<p>amet, porta at, imperdiet id neque. more info</p>	
			</div>
		</li>
		<li>
			<div>
				<h2>Lorem ipsum dolor sit </h2>
				<p>amet, porta at, imperdiet id neque. more info</p>	
			</div>
		</li>		
	</ul>
	
</div>


<?php displayPageFooter(); ?>
