<?php echo $this->element('menusite'); ?>
<div class="container">
	<h2>Ingrese los datos para crear su anuncio</h2>
	<?php
			echo $this->Form->create('Anuncio');
			?>
			<fieldset>
			<?php
			echo $this->Form->input('ANU_DES', array('label' => 'Descripción del anuncio', 'class' => 'input-xxlarge'));
			?>
			<br>
			<?php echo $this->Js->submit('Guardar', array(
			'class' => 'btn',
			'update' => '#mensaje',
			'url' => array('controller' => 'mantenedores', 'action' => 'addComuna'),
			'before' => $this->Js->get('#divEspera')->effect('fadeIn', array('buffer' => false)),
    		'complete' => $this->Js->get('#divEspera')->effect('fadeOut', array('buffer' => false))
	)); ?>
	</fieldset>
	<?php echo $this->Form->end(); ?>
</div>