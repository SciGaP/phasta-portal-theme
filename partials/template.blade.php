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
	<h1><img class="seagrid-logo" src="{{URL::to('/')}}/../themes/{{Session::get('theme')}}/assets/img/logo.png"/> Features</h1><br/>
	<p class="font-1-5">
		The Science and Engineering Applications Grid (SEAGrid) empowers researchers to easily use scientific applications deployed across a wide range of supercomputers, campus clusters, and computing cloud. SEAGrid features both a powerful desktop client and go-anywhere Web application. SEAGrid helps scientist create model inputs, simplifies access to computing resources, enables visualizations of outputs, and provides archives for simulation data.
	</p>
	<hr/>
	<div class="col-md-3">
		<span class="feature-icon-img"><img src="{{ URL::to('/') }}/../themes/{{Session::get('theme')}}/assets/img/chemistry.png"/></span>
		<h3>Computational Chemistry</h3>
		<p>Optimize and characterize molecular and periodic structures and predict thermodynamics and kinetics using computational chemistry applications using Ab initio, Semi-empirical, Force-field based codes such as Gaussian, Gamess, Tinker, DFTB+.</p>
	</div>
	<div class="col-md-3">
		<span class="feature-icon-img"><img src="{{ URL::to('/') }}/../themes/{{Session::get('theme')}}/assets/img/molecules.png"/></span>
		<h3>Molecular Dynamics (MD)</h3>
		<p>Time evolution of large material and biological systems to predict dynamic structural and energetic characteristics  using Applications such as Lammps, Amber, NAMD using mostly empirical force fields including reaction force fields.
		</p>
	</div>
	<div class="col-md-3">
		<span class="feature-icon-img"><img src="{{ URL::to('/') }}/../themes/{{Session::get('theme')}}/assets/img/mechanics.png"/></span>
		<h3>Structural Mechanics</h3>
		<p>
			Finite element analysis of engineering structures and components for modeling  static and low-speed dynamic events both in the time and frequency domain using applications such as Abaqus.
		</p>
	</div>
	<div class="col-md-3">
		<span class="feature-icon-img"><img src="{{ URL::to('/') }}/../themes/{{Session::get('theme')}}/assets/img/fluid.png"/></span>
		<h3>Fluid Dynamics  </h3>
		<p>
			Modeling flow of gases and liquids under various conditions using applications such as Nek5000 and OpenFOAM.
		</p>
	</div>

	<div class="col-md-12 well">
		For a full list of  current SEAGrid supported applications and computing resources, see <a href="#">here</a>.
	</div>
</div>

<div class="col-md-12 text-center seagrid-workflow darker-blue-bg">
	<h1><img class="seagrid-logo" src="{{URL::to('/')}}/../themes/{{Session::get('theme')}}/assets/img/logo.png"/> DNA</h1><br/>
	<div class="video-space">
		<img src="{{ URL::to('/') }}/../themes/{{Session::get('theme')}}/assets/img/workflow.png"/>
	</div>
</div>
<!--
<div class="col-md-12 text-center blue-bg" style="padding:2.5%">
	<a href="https://seagrid.org/jnlp/seagrid.jnlp">
	<button style="padding:2.5%;" class="btn btn-primary col-md-offset-4 col-md-4">Download Desktop App</button>
	</a>
</div>
-->