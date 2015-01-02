<?php if(empty($object->see)) return; ?>
<div class="SeeAlso">
<h4>请参阅</h4>
<ul>
<?php foreach($object->see as $url): ?>
	<li><?php echo $url; ?></li>
<?php endforeach; ?>
</ul>
</div>
