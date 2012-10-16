<?php
// $Id: views-view-fields.tpl.php,v 1.6 2008/09/24 22:48:21 merlinofchaos Exp $
/**
 * @file views-view-fields.tpl.php
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->separator: an optional separator that may appear before a field.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
<ul class="billet <?php if ($fields['sticky']->content == 'Oui') echo "premium"; ?>">
	<li class="thumb"><?php if($fields['field_image_fid']) echo $fields['field_image_fid']->content ?></li>
	<li class="infos">
		<ul>
			<li class="title"><h3><?php echo $fields['field_lieu_value']->content ?></h3></li>
			<li class="lieu"><?php echo $fields['field_salle_value']->content ?> (<?php echo $fields['field_ville_value']->content ?>)</li>
			<li class="type">
				<img src="<?php print base_path() . path_to_theme() ?>/images/type_parcexpo.png" alt="PARC|EXPO" width="69" height="16"/>
				<?php if($fields['field_loisir_value']) : ?>
				<span><?php echo $fields['field_loisir_value']->content; ?></span>
				<?php endif;?>
			</li>
			<li class="publication"><?php echo $fields['created']->content ?></li>
		</ul>
	</li>
	<li class="date">
		<?php if($fields['field_date_value']->content == $fields['field_date_value2']->content) : ?>
		<?php echo $fields['field_date_value']->content ?><br /><?php echo $fields['field_date_value_1']->content ?> &rsaquo; <?php echo $fields['field_date_value2_1']->content ?>
		<?php else : ?>
		<?php echo $fields['field_date_value']->content ?> &rsaquo; <?php echo $fields['field_date_value_1']->content ?><br /><?php echo $fields['field_date_value2']->content ?> &rsaquo; <?php echo $fields['field_date_value2_1']->content ?>
		<?php endif; ?>
	</li>
	<li class="prix">
		<ul>
			<li class="value"><?php echo $fields['field_revente_value']->content ?></li>
			<li class="remise"><?php echo $fields['field_remise_value']->content ?>% d'économie</li>
		</ul>
	</li>
	<li class="add"><?php echo $fields['view_node']->content;?></li>
</ul>