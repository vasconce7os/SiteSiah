
<div class="container">
	<h1>
		<?php
		echo($title_for_layout);
		?>
	</h1>
	<p>
		Status: 
		<?php
		echo(utf8_encode($chamado['Chamado']['status']));
		?>
	</p>
	<?php
	//pr($chamado);
	foreach ($chamado['Chamadomsg'] as $key => $chamadomsg)
	{
		
		?>

		<div class="chamadomsg">
			<p>
  				<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
				<?php
				echo($chamadomsg['Chamadomsg']['msg']);
				?>
			</p>
			<p>
				<time>
					<?php
					$created = DateTime::createFromFormat('Y-m-d H:i:s', $chamadomsg['Chamadomsg']['created']);
					//echo($created-> format('Y/m/d \a\s H:i'));
					?>
				</time>
			</p>
		</div>

		<?php
	}
	?>

	<footer>
		<p>
			ver todos os seus  
			<a href="<?php echo($this-> request-> base); ?>/suporte/chamados/lista_por_cliente.html">
				chamados
			</a>
		</p>
	</footer>















    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" media="all" rel="stylesheet">
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" media="all" rel="stylesheet">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.1/modernizr.min.js"></script>



    <div class="timeline animated">
      <div class="timeline-row">
        <div class="timeline-time">
          <small>Oct 30</small>4:53 PM
        </div>
        <div class="timeline-icon">
          <div class="bg-primary">
            <i class="fa fa-pencil"></i>
          </div>
        </div>
        <div class="panel timeline-content">
          <div class="panel-body">
            <h2>
              This is a title for this timeline post
            </h2>
            <p>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.
            </p>
          </div>
        </div>
      </div>
      <div class="timeline-row">
        <div class="timeline-time">
          <small>Oct 25</small>6:14 PM
        </div>
        <div class="timeline-icon">
          <div class="bg-warning">
            <i class="fa fa-quote-right"></i>
          </div>
        </div>
        <div class="panel timeline-content">
          <div class="panel-body">
            <blockquote>
              <p>
                Lorem ipsum velit ullamco anim pariatur proident eu deserunt laborum. Lorem ipsum ad in nostrud adipisicing cupidatat anim officia ad id cupidatat veniam quis elit ullamco.
              </p>
              <small>John Smith</small></blockquote>
          </div>
        </div>
      </div>
      <div class="timeline-row">
        <div class="timeline-time">
          <small>Oct 16</small>9:00 AM
        </div>
        <div class="timeline-icon">
          <div class="bg-info">
            <i class="fa fa-camera"></i>
          </div>
        </div>
        <div class="panel timeline-content">
          <div class="panel-body">
            <h2>
              This is an image posted on my timeline
            </h2>
            <img class="img-responsive" src="https://lorempixel.com/output/nature-q-c-640-480-10.jpg" />
            <p>
              Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.
            </p>
          </div>
        </div>
      </div>
      <div class="timeline-row">
        <div class="timeline-time">
          <small>Oct 12</small>1:14 PM
        </div>
        <div class="timeline-icon">
          <div class="bg-primary">
            <i class="fa fa-video-camera"></i>
          </div>
        </div>
        <div class="panel timeline-content">
          <div class="panel-body">
            <h2>
              This is a title for this timeline post
            </h2>
            <div class="video-container">
              <iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/16202331?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.
            </p>
          </div>
        </div>
      </div>
      <div class="timeline-row">
        <div class="timeline-time">
          <small>Oct 10</small>4:53 PM
        </div>
        <div class="timeline-icon">
          <div class="bg-primary">
            <i class="fa fa-pencil"></i>
          </div>
        </div>
        <div class="panel timeline-content">
          <div class="panel-body">
            <h2>
              This is a title for this timeline post
            </h2>
            <p>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.
            </p>
          </div>
        </div>
      </div>
      <div class="timeline-row">
        <div class="timeline-time">
          <small>Oct 9</small>6:14 PM
        </div>
        <div class="timeline-icon">
          <div class="bg-warning">
            <i class="fa fa-quote-right"></i>
          </div>
        </div>
        <div class="panel timeline-content">
          <div class="panel-body">
            <blockquote>
              <p>
                Lorem ipsum velit ullamco anim pariatur proident eu deserunt laborum. Lorem ipsum ad in nostrud adipisicing cupidatat anim officia ad id cupidatat veniam quis elit ullamco.
              </p>
              <small>John Smith</small></blockquote>
          </div>
        </div>
      </div>
      <div class="timeline-row">
        <div class="timeline-time">
          <small>Oct 6</small>9:00 AM
        </div>
        <div class="timeline-icon">
          <div class="bg-info">
            <i class="fa fa-camera"></i>
          </div>
        </div>
        <div class="panel timeline-content">
          <div class="panel-body">
            <h2>
              This is an image posted on my timeline
            </h2>
            <img class="img-responsive" src="https://lorempixel.com/output/nature-q-c-640-480-10.jpg" />
            <p>
              Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.
            </p>
          </div>
        </div>
      </div>
      <div class="timeline-row">
        <div class="timeline-time">
          <small>Oct 2</small>1:14 PM
        </div>
        <div class="timeline-icon">
          <div class="bg-primary">
            <i class="fa fa-video-camera"></i>
          </div>
        </div>
        <div class="panel timeline-content">
          <div class="panel-body">
            <h2>
              This is a title for this timeline post
            </h2>
            <div class="video-container">
              <iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/16202331?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.
            </p>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    
</div>
