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
  				<li class="span4">
    			<div class="thumbnail">
    				<?php echo $this->Html->image('avisos/test/01.jpg', array('alt' => '300x200', 'data-src' => 'holder.js/300x200')); ?>
      				<img data-src="holder.js/300x200" alt="">
      				<h4>Corsa sedán 2010</h4>
      				<p>Vendo en excelente estado este chevrolet corsa con 23000km.</p>
      				<p>
      					<a href="#" class="btn btn-primary">Ver más</a>
      				</p>
    			</div>
  				</li>
			</ul>
			<div class="page-header">
  				<h1>Resultados <small>de tu búsqueda</small></h1>
			</div>
          <div class="row-fluid">
            <div class="span4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
        </div><!--/span-->
      </div><!--/row-->

      <hr>
      <footer>
        <p align="center">&copy; compramiauto.cl - Todos los derechos reservados</p>
      </footer>

    </div><!--/.fluid-container-->
    
