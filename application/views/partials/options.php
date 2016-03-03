<!--============================= Options Modal =========================-->
<div class="row small">
	<div id="options" class="modal col s12 m8 offset-m2 l8 offset-l2">
		<div class="modal-content">
			<form action='options-form' method="post">
				<div class="row small">
					<div class="center">
						<h5 class="login-form-text center no-margin">Options</h5>
					</div>
				</div>

				<!-- search location -->
				<div class="row space">
					<div class="input-field col s12 no-margin">
						<i class="location-icon fa fa-location-arrow fa-2x"><span class=' options-label'> Search Location</span></i>
						<input class='small' type="text" id="start_location" name='start_location' placeholder="Enter a starting location">
					</div>
				</div>

				<!-- sliders -->
				<div class="row small">
					<div class="col s12 m12 l6 no-padding">
						<div class="col s12">
							<img class='range-img' src='/assets/userdot.png' alt='dot' style='float: left;'/>
							<span class='options-label'> Search Radius from Me (m)</span>
						</div>
						<div class="input-field col s12">
							<p class="range-field no-margin">
								<input type="range" id="radius_from_location" min="1000" step='100' max="15000"/>
							</p>
						</div>
					</div>
					<div class="col s12 m12 l6 no-padding">
						<div class="col s12">
							<img class='range-img' src='http://maps.google.com/mapfiles/ms/icons/red-dot.png' alt='marker' style='float: left;'/>
							<span class='options-label'> Search Radius from Results (m)</span>
						</div>
						<div class="input-field col s12">
							<p class="range-field no-margin">
								<input type="range" id="cluster_radius" min="100" step='10' max="2000"/>
							</p>
						</div>
					</div>
				</div>

				<!-- buttons -->
				<div class="row small">
					<?php if ($this->session->userdata('logged_in')){ ?>
						<div class="input-field col s4 m4 l2 right waves-effect waves-light no-margin">
							<input type="submit" class="btn orange col s12" value="SAVE">
						</div>
					<?php } else { ?>
						<div class="input-field col s4 m4 l2 right waves-effect waves-light no-margin">
							<input type="submit" class="btn blue col s12" value="APPLY">
						</div>
					<?php } ?>
					<?php if (!$this->session->userdata('logged_in')){ ?>
						<!-- <div class="input-field col s8 m8 l10 waves-effect waves-light">
							<p class="login-helper-link margin medium-small">
								<a href="#login-modal" class="modal-trigger modal-close"><strong>Log In</strong> to save your options!</a>
							</p>
						</div> -->
					<?php } ?>
				</div>

			</form>
		</div>
	</div>
</div>
