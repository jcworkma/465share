<h2>Download File: <?=$file->orig_name?></h2><br />

<div class="ui-widget-content ui-corner-all">
	<span style="font-weight: bold">Name:</span> <?=$file->orig_name?><br />
	<span style="font-weight: bold">Type:</span> <?=$file->type?><br />
	<span style="font-weight: bold">Size:</span> <?=$file->size_kb?> KB<br />
	<br />
	<?=form_open('files/download/'.$file->file_pk)?>
	<input id="download_button" type="submit" name="download_submit" value="Download" />
	<?=form_close()?>
</div>