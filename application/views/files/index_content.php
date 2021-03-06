<div id="myfiles_tabs">
	<ul>
		<li><a href="#uploaded-tab">Uploaded Files</a></li>
		<li><a href="#sharedwith-tab">Shared with Me</a></li>
		<li><a href="#sharedby-tab">Shared by Me</a></li>
	</ul>
	<div id="uploaded-tab">
		<?php if(!empty($uploaded_files)): ?>
		<span style="font-weight: bold">Uploaded Files</span><br /><br />
		<table id="uploaded_table" class="tablesorter">
		<thead>
		<tr>
			<th>Date</th>
			<th>Name</th>
			<th>Type</th>
			<th>Size (kb)</th>
			<th>Edit</th>
		</tr>
		</thead>

		<tbody>		
		<?php foreach($uploaded_files as $uf): ?>
			<tr>
				<td><?=mdate('%m/%d/%y, %H:%i', $uf->date_added)?></td>
				<td><?=$uf->orig_name?></td>
				<td><?=$uf->type?></td>
				<td><?=$uf->size_kb?></td>
				<td><a href="<?=base_url('files/edit/'.$uf->file_pk)?>"><span class="ui-icon ui-icon-arrowthick-1-e"></span></a></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
		</table>
		<?php endif; ?>
	</div>

	<div id="sharedwith-tab">
		<?php if(!empty($sharedwith_files)): ?>
		<span style="font-weight: bold">Shared with Me</span><br /><br />
		<table id="sharedwith_table" class="tablesorter">
		<thead>
		<tr>
			<th>Date</th>
			<th>Name</th>
			<th>Type</th>
			<th>Size (kb)</th>
			<th>Edit</th>
		</tr>
		</thead>

		<tbody>		
		<?php foreach($sharedwith_files as $uf): ?>
			<tr>
				<td><?=mdate('%m/%d/%y, %H:%i', $uf->date_added)?></td>
				<td><?=$uf->orig_name?></td>
				<td><?=$uf->type?></td>
				<td><?=$uf->size_kb?></td>
				<td><a href="<?=base_url('files/edit/'.$uf->file_pk)?>"><span class="ui-icon ui-icon-arrowthick-1-e"></span></a></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
		</table>
		<?php endif; ?>
	</div>

	<div id="sharedby-tab">
		<?php if(!empty($sharedby_files)): ?>
		<span style="font-weight: bold">Shared by Me</span><br /><br />
		<table id="sharedby_table" class="tablesorter">
		<thead>
		<tr>
			<th>Date</th>
			<th>Name</th>
			<th>Type</th>
			<th>Size (kb)</th>
			<th>Edit</th>
		</tr>
		</thead>

		<tbody>		
		<?php foreach($sharedby_files as $uf): ?>
			<tr>
				<td><?=mdate('%m/%d/%y, %H:%i', $uf->date_added)?></td>
				<td><?=$uf->orig_name?></td>
				<td><?=$uf->type?></td>
				<td><?=$uf->size_kb?></td>
				<td><a href="<?=base_url('files/edit/'.$uf->file_pk)?>"><span class="ui-icon ui-icon-arrowthick-1-e"></span></a></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
		</table>
		<?php endif; ?>
	</div>
</div>
