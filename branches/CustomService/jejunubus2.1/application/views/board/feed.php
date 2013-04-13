<div class="viewform"> 
	<div class="name"> 작성자 : <?php echo $name;?> </div>
	<div class="content"> 
		<?php echo $content;?> <br/>
		<?php 
			if($comment != null){
				echo "-답변: ".$comment;
			}
		?>
	</div>
</div>
