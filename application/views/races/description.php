<?php 
	//echo html::script('js/circuit_time_left.js');
?>

<div class="circuit">
	<div class="column2">
		<?= $race->circuit->image('thumbmail') ?>
	</div>
		
	<div class="column2">
		<div class="title"><?php //echo $race->display_race('zone'); ?></div>
		<table class="circuitInside">
			<tr>
				<td class="icon">
					<?= html::image("images/icons/cup0.png") ?>
				</td>
				<td>
					<?= $race->circuit->name() ?>
				</td>
			</tr>
			<tr>
				<td class="icon">
					<?= html::image("images/icons/distance.png") ?>
				</td>
				<td>
					<?= $race->circuit->length.' kms' ?>
				</td>
			</tr>
			<tr>
				<td class="icon">
					<?= html::image("images/icons/hour.png") ?>
				</td>
				<td>
					<b><span style="display: inline;" id="<?= $race->id ?>">--:--</span></b>
				</td>
			</tr>
		</table>
		<script language=JavaScript>
			$(document).ready(function() {
				decompte(
					'<?= $race->id ?>', 
					'<?= ($race->start - time()) ?>', 
					'<?= Kohana::lang('race.index.finished') ?>',
					true
				);
			});
		</script>
	</div>
			
	<div class="column2">
		<div class="title"><?= Kohana::lang('race.description.strategy') ?></div>
	</div>
		
	<div class="column2">
		<div class="title"><?= Kohana::lang('race.description.gains') ?></div>
		<table class="circuitInside">
			<?php
			/*switch ($circuit->race) {
				case 0:
					?>
					<tr>
						<td class="icons"><?= html::image('images/icons/exp.png') ?></td>
						<td><?= Kohana::lang('race.description.exp') ?></td>
					</tr>
					<tr>
						<td class="icons"><?= html::image('images/icons/skills.png') ?></td>
						<td><?= Kohana::lang('race.description.apt') ?></td>
					</tr>
					<?php 
					break;
				case 1:
					?>
					<tr>
						<td class="icons"><?= html::image('images/icons/cel.png') ?></td>
						<td>Côte</td>
					</tr>
					<tr>
						<td class="icons"><?= html::image('images/icons/gils.png') ?></td>
						<td>Argent</td>
					</tr>
					<tr>
						<td class="icons"><?= html::image('images/icons/items.png') ?></td>
						<td>Objets</td>
					</tr>
					<?php
					break;
				case 2:
					?>
					<tr>
						<td class="icons"><?= html::image('images/icons/pl.png') ?></td>
						<td>Souffle</td>
					</tr>
					<tr>
						<td class="icons"><?= html::image('images/icons/energy.png') ?></td>
						<td>Energie</td>
					</tr>
					<tr>
						<td class="icons"><?= html::image('images/icons/moral.png') ?></td>
						<td>Moral</td>
					</tr>
					<?php
					break;
			}*/
			?>
		</table>
	</div>

	<div class="clearBoth"></div>
	
</div>
