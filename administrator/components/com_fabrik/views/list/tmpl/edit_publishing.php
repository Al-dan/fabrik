<?php
/**
 * Admin List Edit:publishing Tmpl
 *
 * @package     Joomla.Administrator
 * @subpackage  Fabrik
 * @copyright   Copyright (C) 2005 Fabrik. All rights reserved.
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * @since       3.0
 */

// No direct access
defined('_JEXEC') or die;
?>
<?php echo JHtml::_('tabs.panel', JText::_('COM_FABRIK_GROUP_LABEL_PUBLISHING_DETAILS'), 'list-publishing-panel');?>
<?php echo JHtml::_('sliders.start','table-sliders-'.$this->item->id, array('useCookie'=>1)); ?>

<?php echo JHtml::_('sliders.panel',JText::_('COM_FABRIK_GROUP_LABEL_PUBLISHING_DETAILS'), 'publishing-details'); ?>
	<fieldset class="panelform">
	<ul class="panelformlist">
		<?php foreach($this->form->getFieldset('publishing-details') as $field): ?>
			<li>
				<?php if (!$field->hidden): ?>
					<?php echo $field->label; ?>
				<?php endif; ?>
				<?php echo $field->input; ?>
			</li>
		<?php endforeach; ?>
		</ul>
	</fieldset>

<?php echo JHtml::_('sliders.panel',JText::_('COM_FABRIK_GROUP_LABEL_RSS'), 'rss'); ?>
	<fieldset class="panelform">
		<ul class="panelformlist">
			<?php foreach($this->form->getFieldset('rss') as $field): ?>
				<?php if (!$field->hidden): ?>
					<li><?php echo $field->label; ?></li>
				<?php endif; ?>
				<li><?php echo $field->input; ?></li>
			<?php endforeach; ?>
		</ul>
	</fieldset>

	<?php echo JHtml::_('sliders.panel',JText::_('COM_FABRIK_GROUP_LABEL_CSV'), 'csv'); ?>
	<fieldset class="panelform">
	<?php $fieldsets = array('csv', 'csvauto');
	foreach ($fieldsets as $fieldset) {?>
		<ul class="panelformlist">
			<?php foreach($this->form->getFieldset($fieldset) as $field): ?>
				<?php if (!$field->hidden): ?>
					<li><?php echo $field->label; ?></li>
				<?php endif; ?>
				<li><?php echo $field->input; ?></li>
			<?php endforeach; ?>
		</ul>
	<?php }?>
	</fieldset>

	<?php echo JHtml::_('sliders.panel',JText::_('COM_FABRIK_GROUP_LABEL_SEARCH'), 'search'); ?>
	<fieldset class="panelform">
		<ul class="panelformlist">
			<?php foreach($this->form->getFieldset('search') as $field): ?>
				<?php if (!$field->hidden): ?>
					<li><?php echo $field->label; ?></li>
				<?php endif; ?>
				<li><?php echo $field->input; ?></li>
			<?php endforeach; ?>
		</ul>
	</fieldset>


<?php echo JHtml::_('sliders.end'); ?>
