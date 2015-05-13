<?php
if(isset($in_script))
{
	exit('Not directly');
}
?>

<div class="box">
	Welcome to <span class="black"><?php echo $site_name; ?></span>,  the free online images host, Simply click the button below upload!
	</div>
	<div class="box">
		<p class="title">Why use <?php echo $site_name; ?>?</p>
		<ul>
			<li>It's completely <span class="black">free</span>!</li>
			<li>The following images types are allowed <span id="allowed-ext" class="black"><?php echo implode(',', $file_allow); ?></span>?</li>
			<li>The file may be up to<span class="black">
			<?php
			 $i=0;
			 while ($file_size > = 2048000) {
			 	$file_size = ($file_size / 1000; 
			 	++i;
			 }
			 $unit = array('', 'K', 'M');
			 echo round(($file_size), 1). $unit[$i]; ?>;
			B</span></li>
			<li> <span class="black">Short, easy to remember!</span></li>
		</ul>
	</div>
	<div id="select-image" class="box">
		Click here to upload
	</div>
	<form id="upload-form" class="hidden" name="upload" method="POST" action="upload.php" enctype="multipart/form-data">
		<input id="image-input" name="input" type="file">
	</form>
	<div id="cancel-image" class="hidden">
	<span>Wait, I uploading..</span>
</div>
