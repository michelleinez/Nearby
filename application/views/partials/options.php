<!--============================= Options Modal =========================-->
<div class="row small">
	<div id="options" class="modal col s12 m8 offset-m2 l8 offset-l2">
		<div class="modal-content">
			<form action='options-form' method="post">
				<div class="row small">
					<div class="input-field center">
						<h5 class="login-form-text center">Options</h5>
					</div>
				</div>
				<div class="row small">
					<div class="input-field col s12">
						<i class="location-icon fa fa-location-arrow fa-lg prefix"></i>
						<input type="text" id="start_location" name='start_location'>
						<label for="start_location">Starting Location</label>
					</div>
				</div>

				<!-- ranges for med and small -->
				<div class="hide-on-large-only">
					<div class="row small">
						<div class="input-field col s12">
							<img src='/assets/userdot.png' alt='user dot' style='float: left;'/>
							<span class='radius-label'> Search Radius from Me (in m)</span>
						</div>
					</div>
					<div class="row small">
						<div class="input-field col s12">
							<p class="range-field no-margin">
								<input type="range" id="search_radius" min="100" max="5000" />
							</p>
						</div>
					</div>
					<div class="row small">
						<div class="input-field col s12">
							<img src='http://maps.google.com/mapfiles/ms/icons/red-dot.png' alt='result marker' style='float: left;'/>
							<span class='radius-label'> Search Radius from Result (in m)</span>
						</div>
					</div>
					<div class="row small">
						<div class="input-field col s12">
							<p class="range-field no-margin">
								<input type="range" id="search_radius" min="1000" max="10000" />
							</p>
						</div>
					</div>
				</div>

				<!-- ranges for large -->
				<div class="hide-on-med-and-down">
					<div class="row small">
						<div class="input-field col s6">
							<img src='/assets/userdot.png' alt='user dot' style='float: left;'/>
							<span class='radius-label'> Search Radius from Me (in m)</span>
						</div>
						<div class="input-field col s6">
							<img src='http://maps.google.com/mapfiles/ms/icons/red-dot.png' alt='result marker' style='float: left;'/>
							<span class='radius-label'>Search Radius from Result (in m)</span>
						</div>
					</div>
					<div class="row small">
						<div class="input-field col s6">
							<p class="range-field no-margin">
								<input type="range" id="search_radius" min="1000" max="10000" />
							</p>
						</div>
						<div class="input-field col s6">
							<p class="range-field no-margin">
								<input type="range" id="search_radius" min="100" max="5000" />
							</p>
						</div>
					</div>
				</div>

					<!-- buttons -->
				<div class="row small">
					<?php if ($this->session->userdata('logged_in')){ ?>
						<div class="input-field col s4 m4 l2 right waves-effect waves-light">
							<input type="submit" class="btn orange col s12" value="SAVE">
						</div>
					<?php } ?>
					<div class="input-field col s4 m4 l2 right waves-effect waves-light">
						<input type="submit" class="btn blue col s12" value="APPLY">
					</div>
					<?php if (!$this->session->userdata('logged_in')){ ?>
						<div class="input-field col s8 m8 l10 waves-effect waves-light">
							<p class="login-helper-link margin medium-small">
								<a href="#login-modal" class="modal-trigger modal-close"><strong>Log In</strong> to save your options!</a>
							</p>
						</div>
					<?php } ?>
				</div>

			</form>
		</div>
	</div>
</div>
