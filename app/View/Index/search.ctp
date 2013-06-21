    <?php echo $this->element('menusite'); ?>
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
        <form>
	  		<fieldset>
	    		<legend>Busque su auto ¡aquí!</legend>
	    		<label>Ingrese el texto a buscar.</label>
	    		<input type="text" placeholder="Ej: Toyota yaris 2010">
	    		<span class="help-block">Opciones</span>
	    		<label class="checkbox"><input type="checkbox">Nuevo</label>
	    		<button type="submit" class="btn">Buscar</button>
	  		</fieldset>
		</form>
        </div><!--/span-->
        
        <div class="span9">
        	<div class="page-header">
  				<h1>Avisos destacados <small>revisa estas oportunidades</small></h1>
			</div>
          <div class="row-fluid">
          	
            <ul class="thumbnails">
            	<?php 
            	foreach($destacados as $cont => $anuncio) { 
            		//opendir('avisos/'.$anuncio['ANUNCIO']['ANU_IMG_DIR']);	
            	?>
  				<li class="span4">
    			<div class="thumbnail" style="background-color: rgb(255, 252, 187)">
    				<?php echo $this->Html->image('avisos/'.$anuncio['a']['ANU_IMG_DIR'].'/01.jpg', array('alt' => '300x200', 'data-src' => 'holder.js/300x200')); ?>
      				<img data-src="holder.js/300x200" alt="">
      				<h4><?php echo $anuncio['mca']['MCA_NOM'] .' - '.$anuncio['m']['MOD_NOM']?></h4>
      				<p>Precio: <?php echo $this->number->currency(intval( $anuncio['a']['ANU_MTO']), null, array('decimals' => ',', 'thousands' => '.','places' => 0)); ?></p>
      				<p>
      					<a href="#" class="btn btn-primary">Ver más</a>
      				</p>
    			</div>
  				</li>
  				
  				<?php } ?>
			</ul>
			
			<?php if(1==2) { ?>
			<div class="page-header">
  				<h1>Resultados <small>de tu búsqueda</small></h1>
			</div>
			<?php } ?>
          
        </div><!--/span-->
      </div><!--/row-->

      <hr>
      <footer>
        <p align="center">&copy; compramiauto.cl - Todos los derechos reservados</p>
      </footer>

    </div><!--/.fluid-container-->
    
