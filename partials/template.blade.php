<div class="col-md-12 hero-unit">
	<!--
	<h1>Hero Image</h1>
	<h2>This is a simple hero unit, a simple jumbotron-style component for calling extra 7
	attention to featured content or information.</h2>
	<p><a class="btn btn-primary btn-large">Learn more</a></p>
	-->
</div>

<div class="col-md-12 darker-blue-bg text-center">
	<span class="glyphicon glyphicon-chevron-down floating" style="font-size:5em; color: #20b2aa;"></span>
</div>

<div class="col-md-12 text-center breathing-space seagrid-info">
	<h1><img class="phasta-logo" src="{{URL::to('/')}}/themes/{{Session::get('theme')}}/assets/img/phasta-logo.png"/> Features</h1><br/>
	<p class="font-1-5">
		The Parallel Hierarchic Adaptive Stabilized Transient Analysis, PHASTA, software supports modeling compressible or incompressible, laminar or turbulent, steady or unsteady flows in 3D, using unstructured grids. The PHASTA portal enables researchers to easily execute workflows on the TACC Stampede and RPI CCI AMOS systems.
	</p>
	<hr/>
	<div class="col-md-12 well">
		 For a full list of current PHASTA supported applications and computing resources, see <a target="_blank" href="https://github.com/PHASTA/phasta">here</a>.
	</div>
</div>

<div class="col-md-12 text-center seagrid-workflow darker-blue-bg">
	<h1><img class="phasta-logo" src="{{URL::to('/')}}/themes/{{Session::get('theme')}}/assets/img/phasta-logo.png"/> PHASTA Portal Architecture</h1><br/>
	<div class="video-space">
		<img src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/phasta-workflow.png"/>
	</div>
</div>
<!--
<div class="col-md-12 text-center blue-bg" style="padding:2.5%">
	<a href="https://seagrid.org/jnlp/seagrid.jnlp">
	<button style="padding:2.5%;" class="btn btn-primary col-md-offset-4 col-md-4">Download Desktop App</button>
	</a>
</div>
-->
