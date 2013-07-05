<?php //debug($anuncio) ?>
<div class="row-fluid">
<li class="span4">
	<div class="thumbnail" style="background-color: rgb(255, 252, 187)">
		<?php echo $this->Html->image('avisos/'.$anuncio[0]['a']['ANU_IMG_DIR'].'/01.jpg', array('alt' => '300x200', 'data-src' => 'holder.js/300x200', 'style' => 'width: 300px; height: 200px;')); ?>
      	
	</div>
</li>
<li class="span8">
	<h3><?php echo $anuncio[0]['mca']['MCA_NOM'] .' - '.$anuncio[0]['m']['MOD_NOM']?></h3>
	<button class="btn btn-warning" title="Añadir a favoritos"><i class="icon-star"></i></button>
	<button class="btn btn-primary"><i class="icon-arrow-right icon-white"></i>  Contactar al vendedor</button>
	<br>
	<br>
	<p><?php echo $anuncio[0]['a']['ANU_DES'] ?></p>
	<p>Precio: <strong><?php echo $this->number->currency(intval( $anuncio[0]['a']['ANU_MTO']), null, array('decimals' => ',', 'thousands' => '.','places' => 0)); ?></strong></p>
	<p>Contacto: <?php echo $anuncio[0]['p']['PER_NOM']." ".$anuncio[0]['p']['PER_APE'] ?></p>
	<p>Fono: <?php echo $anuncio[0]['p']['PER_TEL1'] ?></p>
	
	<button class="btn"><i class="icon-search"></i>  Consultar registro civil</button>
	<button class="btn"><i class="icon-plus"></i>  Info</button>
	
</li>
</div>
<br>
<br>