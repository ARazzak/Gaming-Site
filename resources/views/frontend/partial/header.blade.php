<header id="siteHeader" class="site-header">
			<div class="header-top bg-primary">
				<div class="container">
					<nav class="navbar navbar-expand-lg navbar-dark">
						<a href="https://www.bet3up.com" class="navbar-brand"><img
								src="https://www.bet3up.com/images/bet3up.svg" alt="Bet3Up" /></a>
						<div class="collapse show navbar-collapse navbar-common-navbar ml-auto" id="navbarCommonNavbar">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item animated-nav-item">
									<a class="nav-link" href="javascript:void(0);" data-toggle="modal"
										data-target="#registerPopupModal">
										<span class="material-icons">person_add</span>
										<span class="link-label">Register</span>
									</a>
								</li>
								<li id="liPopoverLogin" class="nav-item nav-popover-login">
									<a class="nav-link" href="#"><span class="material-icons">login</span> <span
											class="link-label">Login</span></a>
									<div id="popoverLogin" class="card card-popover-login">
										<div class="card-arrow"></div>
										<div class="card-header">User Login</div>
										<div class="card-body">
											<form id="frmPopoverLogin" action="https://www.bet3up.com/login"
												method="POST">
												<input type="hidden" name="_token"
													value="sh7IsQIPD0zUEGHkfz4wz2bWqCGOnhlCVIkT4QTR">
												<div class="form-group">
													<label for="popiUsername">ID, email, phone</label>
													<div class="input-group" style="margin-bottom:0;">
														<input id="popiUsername" type="text"
															class="form-control username " name="username" value=""
															required autocomplete="username" autofocus>
													</div>
												</div>
												<div class="form-group">
													<label for="popiPassword">Password</label>
													<div class="input-group" style="margin-bottom:0;">
														<input id="popiPassword" type="password"
															class="form-control password " name="password" required
															autocomplete="off">
														<span class="password-show-hide" title="Show password"><span
																class="material-icons">visibility_off</span></span>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" name="remember"
															id="remember"
															style="margin-top:0;width: 15px;height: 16px;">
														<label class="form-check-label" for="remember">
															Remember
														</label>
													</div>
													<a class="btn btn-link float-right"
														href="https://www.bet3up.com/password/reset"
														style="padding:0.1rem 0.25rem;font-size:13px;">
														Forgot Password?
													</a>
												</div>
												<div class="form-group mb-0">
													<button type="submit"
														class="btn btn-userlogin btn-warning btn-block">
														Login
													</button>
												</div>
											</form>
											<script>
												jQuery(document).ready(function ($) {
													$("#frmPopoverLogin").validate({
														rules: {
															username: {
																required: true
															},
															password: {
																required: true,
																minlength: 6
															}
														},
														messages: {
															username: "Please enter user login!",
															password: {
																required: "Please enter login password!",
																minlength: "Enter password at least 6 characters!"
															}
														}
													});
												});
											</script>
										</div>
										<div class="card-footer">
											<div class="social-items">
												<a class="nav-link link-whatsapp"
													href="https://api.whatsapp.com/send?phone=+8801972904020"
													target="_blank">
													<img src="https://www.bet3up.com/images/icon-whatsapp.png"
														width="32" alt="WhatsApp" />
													<span class="link-label">+8801972904020</span>
												</a>
											</div>
										</div>
									</div>
								</li>
								<li class="nav-item nav-item-menu">
									<button id="btnToggleHeaderNavbar" class="navbar-toggler ma5menu__toggle menu-menu"
										type="button" aria-label="Toggle Navigation">
										<span class="material-icons menu">sort</span>
									</button>
								</li>
							</ul>
						</div>
					</nav>
					<nav class="navbar navbar-collapse navbar-dark navbar-tabs">
						<ul class="navbar-nav navbar-tab-items">
							<li class="nav-item">
								<a class="nav-link  active " href="https://www.bet3up.com"><span
										class="material-icons">home</span><span class="link-label">Home</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link " href="https://www.bet3up.com/all-lottery"><span
										class="material-icons">dashboard</span><span
										class="link-label">Lotteries</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link " href="https://www.bet3up.com/buy-and-sell"><span
										class="material-icons">group</span> <span class="link-label">Buy Sell</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link " href="https://www.bet3up.com/all-result"><span
										class="material-icons">storefront</span> <span
										class="link-label">Results</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link " href="https://www.bet3up.com/winner-list"><span
										class="material-icons">emoji_events</span><span
										class="link-label">winners</span></a>
							</li>
						</ul>
					</nav>
					<ul id="navbar-ma5menu" class="navbar-ma5menu">
						<li class="nav-item ">
							<a class="nav-link" href="https://www.bet3up.com/register"><span
									class="material-icons">person_add</span> <span
									class="link-label">Register</span></a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="https://www.bet3up.com/login"><span
									class="material-icons">login</span><span class="link-label">Login</span></a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="https://www.bet3up.com/all-lottery"><span
									class="material-icons">dashboard</span><span class="link-label">Lottery</span></a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="https://www.bet3up.com/all-result"><span
									class="material-icons">view_list</span><span
									class="link-label">Result/Live</span></a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="https://www.bet3up.com/deposit"><span
									class="material-icons">library_add</span><span class="link-label">Deposit</span></a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="https://www.bet3up.com/withdraw"><span
									class="material-icons">payments</span> <span
									class="link-label">Withdrawal</span></a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="https://www.bet3up.com/winner-list"><span
									class="material-icons">emoji_events</span><span class="link-label">Winner
									List</span></a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="https://www.bet3up.com/withdrawal"><span
									class="material-icons">account_balance_wallet</span><span class="link-label">Payout
									List</span></a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="https://www.bet3up.com/buy-and-sell"><span
									class="material-icons">account_balance</span><span class="link-label">Buy &amp;
									Sell</span></a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="https://www.bet3up.com/upcoming"><span
									class="material-icons">live_tv</span><span class="link-label">Upcoming</span></a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="javascript:void(0)"><span
									class="material-icons">card_giftcard</span><span class="link-label">Bonus
									Offers</span></a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="https://www.bet3up.com/awards-prize"><span
									class="material-icons">loyalty</span><span class="link-label">Awards
									Prize</span></a>
						</li>
						<li class="nav-item live-chat">
							<a class="nav-link link-whatsapp" href="https://api.whatsapp.com/send?phone=+8801972904020"
								target="_blank">
								<img src="https://www.bet3up.com/images/icon-whatsapp.png" width="32" alt="WhatsApp" />
								<span class="link-label">+8801972904020</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div id="ma5menu-header" class="ma5menu__tools">
				<a class="ma5menu__home ma5menu_user" href="https://www.bet3up.com" tabindex="-1">
					<span class="user-photo">
						<span class="material-icons">account_circle</span>
					</span>
					<span class="link-label">User</span>
				</a>
			</div>
			<div id="ma5menu-footer" class="ma5menu__tools">
				<div class="current-datetime label-with-icons">
					<span class="material-icons">schedule</span>
					<span class="datetime-container label-text">
						<span class="datetime-text datetime-time"><span class="time">03:34 PM</span><span
								class="zone">(GMT+06:00)</span></span>
						<span class="datetime-text datetime-date">10.11.2021</span>
					</span>
				</div>
			</div>
			<div id="navbarToggleHeader" class="collapse navbar-collapse header-navbar bg-dark">
				<div class="close-navbar-icon bg-primary">
					<a href="https://www.bet3up.com" class="navbar-brand"><img
							src="https://www.bet3up.com/images/bet3up.svg" alt="" /></a>
					<button type="button" data-navbar="#navbarToggleHeader" class="close close-navbar"
						data-dismiss="alert"><span class="material-icons">cancel</span></button>
				</div>
				<div class="container">
					<nav class="navbar navbar-expand-lg navbar-dark">
						<ul class="navbar-nav navbar-toggle-header navbar-dark">
							<li class="nav-item">
								<a class="nav-link" href="https://www.bet3up.com"><span
										class="material-icons">home</span><span class="link-label">Home</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="https://www.bet3up.com/all-lottery"><span
										class="material-icons">dashboard</span><span
										class="link-label">Lotteries</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="https://www.bet3up.com/buy-and-sell"><span
										class="material-icons">group</span><span class="link-label">Buy &amp;
										Sell</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="https://www.bet3up.com/all-result"><span
										class="material-icons">storefront</span><span class="link-label">All
										Result</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="https://www.bet3up.com/deposit"><span
										class="material-icons">library_add</span><span
										class="link-label">Deposit</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="https://www.bet3up.com/winner-list"><span
										class="material-icons">emoji_events</span><span class="link-label">Winner
										List</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="https://www.bet3up.com/withdrawal"><span
										class="material-icons">account_balance_wallet</span><span
										class="link-label">Payout List</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="https://www.bet3up.com/offers"><span
										class="material-icons">card_giftcard</span><span class="link-label">Bonus
										Offers</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="https://www.bet3up.com/awards-prize"><span
										class="material-icons">loyalty</span><span class="link-label">Awards
										Prize</span></a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<div class="modal modal-custom modal-popup-userlogin fade" id="modalPopupUserLogin" tabindex="-1"
				role="dialog" aria-labelledby="modalLabelPopupUserLogin" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="modalLabelPopupUserLogin">User Login</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
									aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body">
							<div id="popoverLogin" class="card card-popover-login">
								<div class="card-arrow"></div>
								<div class="card-header">User Login</div>
								<div class="card-body">
									<form id="frmPopoverLogin" action="https://www.bet3up.com/login" method="POST">
										<input type="hidden" name="_token"
											value="sh7IsQIPD0zUEGHkfz4wz2bWqCGOnhlCVIkT4QTR">
										<div class="form-group">
											<label for="popiUsername">ID, email, phone</label>
											<div class="input-group" style="margin-bottom:0;">
												<input id="popiUsername" type="text" class="form-control username "
													name="username" value="" required autocomplete="username" autofocus>
											</div>
										</div>
										<div class="form-group">
											<label for="popiPassword">Password</label>
											<div class="input-group" style="margin-bottom:0;">
												<input id="popiPassword" type="password" class="form-control password "
													name="password" required autocomplete="off">
												<span class="password-show-hide" title="Show password"><span
														class="material-icons">visibility_off</span></span>
											</div>
										</div>
										<div class="form-group">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" name="remember"
													id="remember" style="margin-top:0;width: 15px;height: 16px;">
												<label class="form-check-label" for="remember">
													Remember
												</label>
											</div>
											<a class="btn btn-link float-right"
												href="https://www.bet3up.com/password/reset"
												style="padding:0.1rem 0.25rem;font-size:13px;">
												Forgot Password?
											</a>
										</div>
										<div class="form-group mb-0">
											<button type="submit" class="btn btn-userlogin btn-warning btn-block">
												Login
											</button>
										</div>
									</form>
									<script>
										jQuery(document).ready(function ($) {
											$("#frmPopoverLogin").validate({
												rules: {
													username: {
														required: true
													},
													password: {
														required: true,
														minlength: 6
													}
												},
												messages: {
													username: "Please enter user login!",
													password: {
														required: "Please enter login password!",
														minlength: "Enter password at least 6 characters!"
													}
												}
											});
										});
									</script>
								</div>
								<div class="card-footer">
									<div class="social-items">
										<a class="nav-link link-whatsapp"
											href="https://api.whatsapp.com/send?phone=+8801972904020" target="_blank">
											<img src="https://www.bet3up.com/images/icon-whatsapp.png" width="32"
												alt="WhatsApp" />
											<span class="link-label">+8801972904020</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal modal-userinfo fade" id="modalPopupRegByOneClick" tabindex="-1" role="dialog"
				aria-labelledby="modalLabelRegByOneClick" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="modalLabelRegByOneClick">Registration Successfull!</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
									aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body">
							<div class="modaltext-message">Please make a note of your username and password!</div>
							<div class="login-info-wrapper">
								<div class="form-group">
									<label for="labelUsername" class="col-form-label text-md-right">Username:</label>
									<div class="btn-group">
										<button type="button" class="btn btn-link btntext-username">username</button>
										<button type="button" class="btn btn-link btn-username js-copy"
											data-copy="username" title="Copy to clipboard">
											<span class="material-icons">content_copy</span>
										</button>
									</div>
								</div>
								<div class="form-group">
									<label for="labelPassword" class="col-form-label text-md-right">Password:</label>
									<div class="btn-group">
										<button type="button" class="btn btn-link btntext-password">password</button>
										<button type="button" class="btn btn-link btn-password js-copy"
											data-copy="password" title="Copy to clipboard">
											<span class="material-icons">content_copy</span>
										</button>
									</div>
								</div>
							</div>
							<div class="save-info-wrapper">
								<form id="frmSaveToEmail" method="POST">
									<input type="hidden" name="_token" value="sh7IsQIPD0zUEGHkfz4wz2bWqCGOnhlCVIkT4QTR">
									<div class="form-group row">
										<div id="colSaveAsFile" class="col-6"><a href="#" id="linkSaveAsFile"
												class="btn btn-primary">Save to file</a></div>
										<div id="colSaveToEmail" class="col-6">
											<div class="input-group">
												<input id="saveToEmail" type="email" class="form-control " name="email"
													value="" placeholder="user@example.com" required
													autocomplete="email" autofocus>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-6"><a href="#" id="linkSaveAsPicture"
												class="btn btn-primary">Save as picture</a></div>
										<div class="col-6">
											<div class="input-group">
												<button id="btnSaveToEmailClick" type="button" class="btn btn-primary">
													Send to e-mail
												</button>
												<input type="hidden" id="sendUsername" name="username" value="" />
												<input type="hidden" id="sendPassword" name="password" value="" />
											</div>
										</div>
									</div>
								</form>
								<script>
									jQuery(document).ready(function ($) {
										$(document).on('click', '#btnSaveToEmailClick', function (event) {
											var frmSaveToEmailClick = $("#frmSaveToEmail");
											if (frmSaveToEmailClick.valid()) {
												$.ajax({
													type: 'POST',
													url: "https://www.bet3up.com/send-login-email",
													data: frmSaveToEmailClick.serialize(),
													headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
													dataType: "json",
													success: function (data) {
														if (data) {
															if (data.status == 'success') {
																//console.log(data.gametype);
																$('.modal-userinfo').find('.modaltext-message').empty().html('<p class="title text-success">' + data.message + '</p>');
																$("#btnSaveToEmailClick").attr("disabled", true);
															} if (data.status == 'error') {
																$('.modal-userinfo').find('.modaltext-message').empty().html('<p class="title text-danger">' + data.message + '</p>');
															}
														}
													}
												});
												return false;
											}
											event.preventDefault();
										});

										$(document).on('click', '#linkSaveAsFile', function (event) {
											var username = $('#sendUsername').val();
											var password = $('#sendPassword').val();

											$.ajax({
												type: 'POST',
												url: "https://www.bet3up.com/save-login-file",
												data: { username: username, password: password },
												headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
												xhrFields: {
													responseType: 'blob'
												},
												dataType: "binary",
												success: function (blob, status, xhr) {
													// check for a filename
													var filename = "";
													var disposition = xhr.getResponseHeader('Content-Disposition');
													if (disposition && disposition.indexOf('attachment') !== -1) {
														var filenameRegex = /filename[^;=\n]*=((['"]).*?\2|[^;\n]*)/;
														var matches = filenameRegex.exec(disposition);
														if (matches != null && matches[1]) filename = matches[1].replace(/['"]/g, '');
													}

													if (typeof window.navigator.msSaveBlob !== 'undefined') {
														// IE workaround for "HTML7007: One or more blob URLs were revoked by closing the blob for which they were created. These URLs will no longer resolve as the data backing the URL has been freed."
														window.navigator.msSaveBlob(blob, filename);
													} else {
														var URL = window.URL || window.webkitURL;
														var downloadUrl = URL.createObjectURL(blob);

														if (filename) {
															// use HTML5 a[download] attribute to specify filename
															var a = document.createElement("a");
															// safari doesn't support this yet
															if (typeof a.download === 'undefined') {
																window.location.href = downloadUrl;
															} else {
																a.href = downloadUrl;
																a.download = filename;
																document.body.appendChild(a);
																a.click();
															}
														} else {
															window.location.href = downloadUrl;
														}

														setTimeout(function () { URL.revokeObjectURL(downloadUrl); }, 100); // cleanup
													}
												}
											});
											event.preventDefault();
										});

										$(document).on('click', '#linkSaveAsPicture', function (event) {
											var username = $('#sendUsername').val();
											var password = $('#sendPassword').val();

											$.ajax({
												type: 'POST',
												url: "https://www.bet3up.com/save-login-picture",
												data: { username: username, password: password },
												headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
												xhrFields: {
													responseType: 'blob'
												},
												dataType: "binary",
												success: function (blob, status, xhr) {
													// check for a filename
													var filename = "";
													var disposition = xhr.getResponseHeader('Content-Disposition');
													if (disposition && disposition.indexOf('attachment') !== -1) {
														var filenameRegex = /filename[^;=\n]*=((['"]).*?\2|[^;\n]*)/;
														var matches = filenameRegex.exec(disposition);
														if (matches != null && matches[1]) filename = matches[1].replace(/['"]/g, '');
													}

													if (typeof window.navigator.msSaveBlob !== 'undefined') {
														// IE workaround for "HTML7007: One or more blob URLs were revoked by closing the blob for which they were created. These URLs will no longer resolve as the data backing the URL has been freed."
														window.navigator.msSaveBlob(blob, filename);
													} else {
														var URL = window.URL || window.webkitURL;
														var downloadUrl = URL.createObjectURL(blob);

														if (filename) {
															// use HTML5 a[download] attribute to specify filename
															var a = document.createElement("a");
															// safari doesn't support this yet
															if (typeof a.download === 'undefined') {
																window.location.href = downloadUrl;
															} else {
																a.href = downloadUrl;
																a.download = filename;
																document.body.appendChild(a);
																a.click();
															}
														} else {
															window.location.href = downloadUrl;
														}

														setTimeout(function () { URL.revokeObjectURL(downloadUrl); }, 100); // cleanup
													}
												}
											});
											event.preventDefault();
										});
									});
								</script>
							</div>
						</div>
						<div class="modal-footer">
							<button id="btnPopupNextLogin" type="button"
								class="btn btn-nextlogin btn-warning btn-block">
								NEXT
							</button>
						</div>
					</div>
				</div>
			</div>
			<script>
				jQuery(document).ready(function ($) {
					$(document).on('click', '#btnPopupNextLogin', function (event) {
						var username = $('#modalPopupRegByOneClick').find('#sendUsername').val();
						var password = $('#modalPopupRegByOneClick').find('#sendPassword').val();
						$('#modalPopupRegByOneClick').modal('hide');
						$('#modalPopupUserLogin').on('show.bs.modal', function (event) {
							var modal = $(this)
							modal.find('#popiUsername').val(username);
							modal.find('#popiPassword').val(password);
						});
						$('#modalPopupUserLogin').modal('show');
					});
				});
			</script>
			<div class="modal modal-user-register fade" id="registerPopupModal" tabindex="-1" role="dialog"
				aria-labelledby="registerModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="registerModalLabel">Register and get first deposit bonus 5% now!
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="container">
								<div class="row justify-content-center">
									<div class="col-md-12">
										<ul class="nav nav-tabs register">
											<li class="nav-item"><a class="nav-link active" data-toggle="tab"
													href="#popupRegByOneClick"><span
														class="material-icons">flash_on</span><span
														class="link-label">One-click</span></a></li>
											<li class="nav-item"><a class="nav-link" data-toggle="tab"
													href="#popupRegByEmail"><span
														class="material-icons">email</span><span class="link-label">By
														e-Mail</span></a></li>
										</ul>
										<div id="popupTabContent" class="tab-content">
											<div class="tab-pane fade active show" id="popupRegByOneClick">
												<div class="card card-register">
													<div class="card-body">
														<form id="frmPopupUserRegByClick" method="POST"
															action="https://www.bet3up.com/register-by-click">
															<input type="hidden" name="_token"
																value="sh7IsQIPD0zUEGHkfz4wz2bWqCGOnhlCVIkT4QTR">
															<div class="form-group row justify-content-center">
																<div class="col-12 col-md-12">
																	<div class="input-group">
																		<select id="inputPopupOneClickCountry"
																			class="form-control custom-select selectpicker "
																			name="country">
																			<option data-icon="flag-icon-af" value="AF">
																				Afghanistan</option>
																			<option data-icon="flag-icon-al" value="AL">
																				Albania</option>
																			<option data-icon="flag-icon-aq" value="AQ">
																				Antarctica</option>
																			<option data-icon="flag-icon-dz" value="DZ">
																				Algeria</option>
																			<option data-icon="flag-icon-as" value="AS">
																				American Samoa</option>
																			<option data-icon="flag-icon-ad" value="AD">
																				Andorra</option>
																			<option data-icon="flag-icon-ao" value="AO">
																				Angola</option>
																			<option data-icon="flag-icon-ag" value="AG">
																				Antigua and Barbuda</option>
																			<option data-icon="flag-icon-az" value="AZ">
																				Azerbaijan</option>
																			<option data-icon="flag-icon-ar" value="AR">
																				Argentina</option>
																			<option data-icon="flag-icon-au" value="AU">
																				Australia</option>
																			<option data-icon="flag-icon-at" value="AT">
																				Austria</option>
																			<option data-icon="flag-icon-bs" value="BS">
																				Bahamas</option>
																			<option data-icon="flag-icon-bh" value="BH">
																				Bahrain</option>
																			<option data-icon="flag-icon-bd" value="BD"
																				selected="selected">Bangladesh</option>
																			<option data-icon="flag-icon-am" value="AM">
																				Armenia</option>
																			<option data-icon="flag-icon-bb" value="BB">
																				Barbados</option>
																			<option data-icon="flag-icon-be" value="BE">
																				Belgium</option>
																			<option data-icon="flag-icon-bm" value="BM">
																				Bermuda</option>
																			<option data-icon="flag-icon-bt" value="BT">
																				Bhutan</option>
																			<option data-icon="flag-icon-bo" value="BO">
																				Bolivia, Plurinational State of</option>
																			<option data-icon="flag-icon-ba" value="BA">
																				Bosnia and Herzegovina</option>
																			<option data-icon="flag-icon-bw" value="BW">
																				Botswana</option>
																			<option data-icon="flag-icon-bv" value="BV">
																				Bouvet Island</option>
																			<option data-icon="flag-icon-br" value="BR">
																				Brazil</option>
																			<option data-icon="flag-icon-bz" value="BZ">
																				Belize</option>
																			<option data-icon="flag-icon-io" value="IO">
																				British Indian Ocean Territory</option>
																			<option data-icon="flag-icon-sb" value="SB">
																				Solomon Islands</option>
																			<option data-icon="flag-icon-vg" value="VG">
																				Virgin Islands, British</option>
																			<option data-icon="flag-icon-bn" value="BN">
																				Brunei Darussalam</option>
																			<option data-icon="flag-icon-bg" value="BG">
																				Bulgaria</option>
																			<option data-icon="flag-icon-mm" value="MM">
																				Myanmar</option>
																			<option data-icon="flag-icon-bi" value="BI">
																				Burundi</option>
																			<option data-icon="flag-icon-by" value="BY">
																				Belarus</option>
																			<option data-icon="flag-icon-kh" value="KH">
																				Cambodia</option>
																			<option data-icon="flag-icon-cm" value="CM">
																				Cameroon</option>
																			<option data-icon="flag-icon-ca" value="CA">
																				Canada</option>
																			<option data-icon="flag-icon-cv" value="CV">
																				Cape Verde</option>
																			<option data-icon="flag-icon-ky" value="KY">
																				Cayman Islands</option>
																			<option data-icon="flag-icon-cf" value="CF">
																				Central African Republic</option>
																			<option data-icon="flag-icon-lk" value="LK">
																				Sri Lanka</option>
																			<option data-icon="flag-icon-td" value="TD">
																				Chad</option>
																			<option data-icon="flag-icon-cl" value="CL">
																				Chile</option>
																			<option data-icon="flag-icon-cn" value="CN">
																				China</option>
																			<option data-icon="flag-icon-tw" value="TW">
																				Taiwan, Province of China</option>
																			<option data-icon="flag-icon-cx" value="CX">
																				Christmas Island</option>
																			<option data-icon="flag-icon-cc" value="CC">
																				Cocos (Keeling) Islands</option>
																			<option data-icon="flag-icon-co" value="CO">
																				Colombia</option>
																			<option data-icon="flag-icon-km" value="KM">
																				Comoros</option>
																			<option data-icon="flag-icon-yt" value="YT">
																				Mayotte</option>
																			<option data-icon="flag-icon-cg" value="CG">
																				Congo</option>
																			<option data-icon="flag-icon-cd" value="CD">
																				Congo, the Democratic Republic of the
																			</option>
																			<option data-icon="flag-icon-ck" value="CK">
																				Cook Islands</option>
																			<option data-icon="flag-icon-cr" value="CR">
																				Costa Rica</option>
																			<option data-icon="flag-icon-hr" value="HR">
																				Croatia</option>
																			<option data-icon="flag-icon-cu" value="CU">
																				Cuba</option>
																			<option data-icon="flag-icon-cy" value="CY">
																				Cyprus</option>
																			<option data-icon="flag-icon-cz" value="CZ">
																				Czech Republic</option>
																			<option data-icon="flag-icon-bj" value="BJ">
																				Benin</option>
																			<option data-icon="flag-icon-dk" value="DK">
																				Denmark</option>
																			<option data-icon="flag-icon-dm" value="DM">
																				Dominica</option>
																			<option data-icon="flag-icon-do" value="DO">
																				Dominican Republic</option>
																			<option data-icon="flag-icon-ec" value="EC">
																				Ecuador</option>
																			<option data-icon="flag-icon-sv" value="SV">
																				El Salvador</option>
																			<option data-icon="flag-icon-gq" value="GQ">
																				Equatorial Guinea</option>
																			<option data-icon="flag-icon-et" value="ET">
																				Ethiopia</option>
																			<option data-icon="flag-icon-er" value="ER">
																				Eritrea</option>
																			<option data-icon="flag-icon-ee" value="EE">
																				Estonia</option>
																			<option data-icon="flag-icon-fo" value="FO">
																				Faroe Islands</option>
																			<option data-icon="flag-icon-fk" value="FK">
																				Falkland Islands (Malvinas)</option>
																			<option data-icon="flag-icon-gs" value="GS">
																				South Georgia and the South Sandwich
																				Islands</option>
																			<option data-icon="flag-icon-fj" value="FJ">
																				Fiji</option>
																			<option data-icon="flag-icon-fi" value="FI">
																				Finland</option>
																			<option data-icon="flag-icon-ax" value="AX">
																				Åland Islands</option>
																			<option data-icon="flag-icon-fr" value="FR">
																				France</option>
																			<option data-icon="flag-icon-gf" value="GF">
																				French Guiana</option>
																			<option data-icon="flag-icon-pf" value="PF">
																				French Polynesia</option>
																			<option data-icon="flag-icon-tf" value="TF">
																				French Southern Territories</option>
																			<option data-icon="flag-icon-dj" value="DJ">
																				Djibouti</option>
																			<option data-icon="flag-icon-ga" value="GA">
																				Gabon</option>
																			<option data-icon="flag-icon-ge" value="GE">
																				Georgia</option>
																			<option data-icon="flag-icon-gm" value="GM">
																				Gambia</option>
																			<option data-icon="flag-icon-ps" value="PS">
																				Palestinian Territory, Occupied</option>
																			<option data-icon="flag-icon-de" value="DE">
																				Germany</option>
																			<option data-icon="flag-icon-gh" value="GH">
																				Ghana</option>
																			<option data-icon="flag-icon-gi" value="GI">
																				Gibraltar</option>
																			<option data-icon="flag-icon-ki" value="KI">
																				Kiribati</option>
																			<option data-icon="flag-icon-gr" value="GR">
																				Greece</option>
																			<option data-icon="flag-icon-gl" value="GL">
																				Greenland</option>
																			<option data-icon="flag-icon-gd" value="GD">
																				Grenada</option>
																			<option data-icon="flag-icon-gp" value="GP">
																				Guadeloupe</option>
																			<option data-icon="flag-icon-gu" value="GU">
																				Guam</option>
																			<option data-icon="flag-icon-gt" value="GT">
																				Guatemala</option>
																			<option data-icon="flag-icon-gn" value="GN">
																				Guinea</option>
																			<option data-icon="flag-icon-gy" value="GY">
																				Guyana</option>
																			<option data-icon="flag-icon-ht" value="HT">
																				Haiti</option>
																			<option data-icon="flag-icon-hm" value="HM">
																				Heard Island and McDonald Islands
																			</option>
																			<option data-icon="flag-icon-va" value="VA">
																				Holy See (Vatican City State)</option>
																			<option data-icon="flag-icon-hn" value="HN">
																				Honduras</option>
																			<option data-icon="flag-icon-hk" value="HK">
																				Hong Kong</option>
																			<option data-icon="flag-icon-hu" value="HU">
																				Hungary</option>
																			<option data-icon="flag-icon-is" value="IS">
																				Iceland</option>
																			<option data-icon="flag-icon-in" value="IN">
																				India</option>
																			<option data-icon="flag-icon-id" value="ID">
																				Indonesia</option>
																			<option data-icon="flag-icon-ir" value="IR">
																				Iran, Islamic Republic of</option>
																			<option data-icon="flag-icon-iq" value="IQ">
																				Iraq</option>
																			<option data-icon="flag-icon-ie" value="IE">
																				Ireland</option>
																			<option data-icon="flag-icon-il" value="IL">
																				Israel</option>
																			<option data-icon="flag-icon-it" value="IT">
																				Italy</option>
																			<option data-icon="flag-icon-ci" value="CI">
																				Côte d'Ivoire</option>
																			<option data-icon="flag-icon-jm" value="JM">
																				Jamaica</option>
																			<option data-icon="flag-icon-jp" value="JP">
																				Japan</option>
																			<option data-icon="flag-icon-kz" value="KZ">
																				Kazakhstan</option>
																			<option data-icon="flag-icon-jo" value="JO">
																				Jordan</option>
																			<option data-icon="flag-icon-ke" value="KE">
																				Kenya</option>
																			<option data-icon="flag-icon-kp" value="KP">
																				Korea, Democratic People's Republic of
																			</option>
																			<option data-icon="flag-icon-kr" value="KR">
																				Korea, Republic of</option>
																			<option data-icon="flag-icon-kw" value="KW">
																				Kuwait</option>
																			<option data-icon="flag-icon-kg" value="KG">
																				Kyrgyzstan</option>
																			<option data-icon="flag-icon-la" value="LA">
																				Lao People's Democratic Republic
																			</option>
																			<option data-icon="flag-icon-lb" value="LB">
																				Lebanon</option>
																			<option data-icon="flag-icon-ls" value="LS">
																				Lesotho</option>
																			<option data-icon="flag-icon-lv" value="LV">
																				Latvia</option>
																			<option data-icon="flag-icon-lr" value="LR">
																				Liberia</option>
																			<option data-icon="flag-icon-ly" value="LY">
																				Libya</option>
																			<option data-icon="flag-icon-li" value="LI">
																				Liechtenstein</option>
																			<option data-icon="flag-icon-lt" value="LT">
																				Lithuania</option>
																			<option data-icon="flag-icon-lu" value="LU">
																				Luxembourg</option>
																			<option data-icon="flag-icon-mo" value="MO">
																				Macao</option>
																			<option data-icon="flag-icon-mg" value="MG">
																				Madagascar</option>
																			<option data-icon="flag-icon-mw" value="MW">
																				Malawi</option>
																			<option data-icon="flag-icon-my" value="MY">
																				Malaysia</option>
																			<option data-icon="flag-icon-mv" value="MV">
																				Maldives</option>
																			<option data-icon="flag-icon-ml" value="ML">
																				Mali</option>
																			<option data-icon="flag-icon-mt" value="MT">
																				Malta</option>
																			<option data-icon="flag-icon-mq" value="MQ">
																				Martinique</option>
																			<option data-icon="flag-icon-mr" value="MR">
																				Mauritania</option>
																			<option data-icon="flag-icon-mu" value="MU">
																				Mauritius</option>
																			<option data-icon="flag-icon-mx" value="MX">
																				Mexico</option>
																			<option data-icon="flag-icon-mc" value="MC">
																				Monaco</option>
																			<option data-icon="flag-icon-mn" value="MN">
																				Mongolia</option>
																			<option data-icon="flag-icon-md" value="MD">
																				Moldova, Republic of</option>
																			<option data-icon="flag-icon-me" value="ME">
																				Montenegro</option>
																			<option data-icon="flag-icon-ms" value="MS">
																				Montserrat</option>
																			<option data-icon="flag-icon-ma" value="MA">
																				Morocco</option>
																			<option data-icon="flag-icon-mz" value="MZ">
																				Mozambique</option>
																			<option data-icon="flag-icon-om" value="OM">
																				Oman</option>
																			<option data-icon="flag-icon-na" value="NA">
																				Namibia</option>
																			<option data-icon="flag-icon-nr" value="NR">
																				Nauru</option>
																			<option data-icon="flag-icon-np" value="NP">
																				Nepal</option>
																			<option data-icon="flag-icon-nl" value="NL">
																				Netherlands</option>
																			<option data-icon="flag-icon-cw" value="CW">
																				Curaçao</option>
																			<option data-icon="flag-icon-aw" value="AW">
																				Aruba</option>
																			<option data-icon="flag-icon-sx" value="SX">
																				Sint Maarten (Dutch part)</option>
																			<option data-icon="flag-icon-bq" value="BQ">
																				Bonaire, Sint Eustatius and Saba
																			</option>
																			<option data-icon="flag-icon-nc" value="NC">
																				New Caledonia</option>
																			<option data-icon="flag-icon-vu" value="VU">
																				Vanuatu</option>
																			<option data-icon="flag-icon-nz" value="NZ">
																				New Zealand</option>
																			<option data-icon="flag-icon-ni" value="NI">
																				Nicaragua</option>
																			<option data-icon="flag-icon-ne" value="NE">
																				Niger</option>
																			<option data-icon="flag-icon-ng" value="NG">
																				Nigeria</option>
																			<option data-icon="flag-icon-nu" value="NU">
																				Niue</option>
																			<option data-icon="flag-icon-nf" value="NF">
																				Norfolk Island</option>
																			<option data-icon="flag-icon-no" value="NO">
																				Norway</option>
																			<option data-icon="flag-icon-mp" value="MP">
																				Northern Mariana Islands</option>
																			<option data-icon="flag-icon-um" value="UM">
																				United States Minor Outlying Islands
																			</option>
																			<option data-icon="flag-icon-fm" value="FM">
																				Micronesia, Federated States of</option>
																			<option data-icon="flag-icon-mh" value="MH">
																				Marshall Islands</option>
																			<option data-icon="flag-icon-pw" value="PW">
																				Palau</option>
																			<option data-icon="flag-icon-pk" value="PK">
																				Pakistan</option>
																			<option data-icon="flag-icon-pa" value="PA">
																				Panama</option>
																			<option data-icon="flag-icon-pg" value="PG">
																				Papua New Guinea</option>
																			<option data-icon="flag-icon-py" value="PY">
																				Paraguay</option>
																			<option data-icon="flag-icon-pe" value="PE">
																				Peru</option>
																			<option data-icon="flag-icon-ph" value="PH">
																				Philippines</option>
																			<option data-icon="flag-icon-pn" value="PN">
																				Pitcairn</option>
																			<option data-icon="flag-icon-pl" value="PL">
																				Poland</option>
																			<option data-icon="flag-icon-pt" value="PT">
																				Portugal</option>
																			<option data-icon="flag-icon-gw" value="GW">
																				Guinea-Bissau</option>
																			<option data-icon="flag-icon-tl" value="TL">
																				Timor-Leste</option>
																			<option data-icon="flag-icon-pr" value="PR">
																				Puerto Rico</option>
																			<option data-icon="flag-icon-qa" value="QA">
																				Qatar</option>
																			<option data-icon="flag-icon-re" value="RE">
																				Réunion</option>
																			<option data-icon="flag-icon-ro" value="RO">
																				Romania</option>
																			<option data-icon="flag-icon-ru" value="RU">
																				Russian Federation</option>
																			<option data-icon="flag-icon-rw" value="RW">
																				Rwanda</option>
																			<option data-icon="flag-icon-bl" value="BL">
																				Saint Barthélemy</option>
																			<option data-icon="flag-icon-sh" value="SH">
																				Saint Helena, Ascension and Tristan da
																				Cunha</option>
																			<option data-icon="flag-icon-kn" value="KN">
																				Saint Kitts and Nevis</option>
																			<option data-icon="flag-icon-ai" value="AI">
																				Anguilla</option>
																			<option data-icon="flag-icon-lc" value="LC">
																				Saint Lucia</option>
																			<option data-icon="flag-icon-mf" value="MF">
																				Saint Martin (French part)</option>
																			<option data-icon="flag-icon-pm" value="PM">
																				Saint Pierre and Miquelon</option>
																			<option data-icon="flag-icon-vc" value="VC">
																				Saint Vincent and the Grenadines
																			</option>
																			<option data-icon="flag-icon-sm" value="SM">
																				San Marino</option>
																			<option data-icon="flag-icon-st" value="ST">
																				Sao Tome and Principe</option>
																			<option data-icon="flag-icon-sa" value="SA">
																				Saudi Arabia</option>
																			<option data-icon="flag-icon-sn" value="SN">
																				Senegal</option>
																			<option data-icon="flag-icon-rs" value="RS">
																				Serbia</option>
																			<option data-icon="flag-icon-sc" value="SC">
																				Seychelles</option>
																			<option data-icon="flag-icon-sl" value="SL">
																				Sierra Leone</option>
																			<option data-icon="flag-icon-sg" value="SG">
																				Singapore</option>
																			<option data-icon="flag-icon-sk" value="SK">
																				Slovakia</option>
																			<option data-icon="flag-icon-vn" value="VN">
																				Viet Nam</option>
																			<option data-icon="flag-icon-si" value="SI">
																				Slovenia</option>
																			<option data-icon="flag-icon-so" value="SO">
																				Somalia</option>
																			<option data-icon="flag-icon-za" value="ZA">
																				South Africa</option>
																			<option data-icon="flag-icon-zw" value="ZW">
																				Zimbabwe</option>
																			<option data-icon="flag-icon-es" value="ES">
																				Spain</option>
																			<option data-icon="flag-icon-ss" value="SS">
																				South Sudan</option>
																			<option data-icon="flag-icon-sd" value="SD">
																				Sudan</option>
																			<option data-icon="flag-icon-eh" value="EH">
																				Western Sahara</option>
																			<option data-icon="flag-icon-sr" value="SR">
																				Suriname</option>
																			<option data-icon="flag-icon-sj" value="SJ">
																				Svalbard and Jan Mayen</option>
																			<option data-icon="flag-icon-sz" value="SZ">
																				Swaziland</option>
																			<option data-icon="flag-icon-se" value="SE">
																				Sweden</option>
																			<option data-icon="flag-icon-ch" value="CH">
																				Switzerland</option>
																			<option data-icon="flag-icon-sy" value="SY">
																				Syrian Arab Republic</option>
																			<option data-icon="flag-icon-tj" value="TJ">
																				Tajikistan</option>
																			<option data-icon="flag-icon-th" value="TH">
																				Thailand</option>
																			<option data-icon="flag-icon-tg" value="TG">
																				Togo</option>
																			<option data-icon="flag-icon-tk" value="TK">
																				Tokelau</option>
																			<option data-icon="flag-icon-to" value="TO">
																				Tonga</option>
																			<option data-icon="flag-icon-tt" value="TT">
																				Trinidad and Tobago</option>
																			<option data-icon="flag-icon-ae" value="AE">
																				United Arab Emirates</option>
																			<option data-icon="flag-icon-tn" value="TN">
																				Tunisia</option>
																			<option data-icon="flag-icon-tr" value="TR">
																				Turkey</option>
																			<option data-icon="flag-icon-tm" value="TM">
																				Turkmenistan</option>
																			<option data-icon="flag-icon-tc" value="TC">
																				Turks and Caicos Islands</option>
																			<option data-icon="flag-icon-tv" value="TV">
																				Tuvalu</option>
																			<option data-icon="flag-icon-ug" value="UG">
																				Uganda</option>
																			<option data-icon="flag-icon-ua" value="UA">
																				Ukraine</option>
																			<option data-icon="flag-icon-mk" value="MK">
																				Macedonia, the former Yugoslav Republic
																				of</option>
																			<option data-icon="flag-icon-eg" value="EG">
																				Egypt</option>
																			<option data-icon="flag-icon-gb" value="GB">
																				United Kingdom</option>
																			<option data-icon="flag-icon-gg" value="GG">
																				Guernsey</option>
																			<option data-icon="flag-icon-je" value="JE">
																				Jersey</option>
																			<option data-icon="flag-icon-im" value="IM">
																				Isle of Man</option>
																			<option data-icon="flag-icon-tz" value="TZ">
																				Tanzania, United Republic of</option>
																			<option data-icon="flag-icon-us" value="US">
																				United States</option>
																			<option data-icon="flag-icon-vi" value="VI">
																				Virgin Islands, U.S.</option>
																			<option data-icon="flag-icon-bf" value="BF">
																				Burkina Faso</option>
																			<option data-icon="flag-icon-uy" value="UY">
																				Uruguay</option>
																			<option data-icon="flag-icon-uz" value="UZ">
																				Uzbekistan</option>
																			<option data-icon="flag-icon-ve" value="VE">
																				Venezuela, Bolivarian Republic of
																			</option>
																			<option data-icon="flag-icon-wf" value="WF">
																				Wallis and Futuna</option>
																			<option data-icon="flag-icon-ws" value="WS">
																				Samoa</option>
																			<option data-icon="flag-icon-ye" value="YE">
																				Yemen</option>
																			<option data-icon="flag-icon-zm" value="ZM">
																				Zambia</option>
																		</select>
																	</div>
																</div>
															</div>
															<div class="form-group row">
																<div class="col-12 col-md-12">
																	<div class="input-group">
																		<input id="inputPopupOneClickRef" type="number"
																			class="form-control regPopValidSponsor "
																			name="ref" value="" maxlength="8"
																			placeholder="Referral ID"
																			data-display="#oneClickPopupInfoRow"
																			autocomplete="off">
																	</div>
																</div>
															</div>
															<div id="oneClickPopupInfoRow"
																class="form-group regPopValidSponsorRow row"
																style="display:none;">
																<div class="col-12 col-md-12">
																	<div id="oneClickPopupInfoHtml"
																		class="userInfoHtml transfer-user-info"></div>
																</div>
															</div>
															<div class="form-group row">
																<div class="col-12 col-md-12">
																	<button id="btnPopupRegByOneClick" type="button"
																		class="btn btn-danger btn-user-register g-recaptcha btn-block">
																		Register Now
																	</button>
																	<input type="hidden" name="currency" value="USD" />
																	<input type="hidden" name="regby"
																		value="oneclick" />
																	<input type="hidden" name="recaptcha_response"
																		id="recaptchaResponsePopByRegOClick">
																</div>
															</div>
															<div class="form-group row justify-content-center mb-0">
																<div class="col-md-12">
																	<div class="form-check">
																		<input type="checkbox" class="form-check-input"
																			name="agree_privacy_terms"
																			id="privacyPolicyPopupByClick" />
																		<label class="form-check-label"
																			for="privacyPolicyPopupByClick">
																			<p>You confirm that you have read and agree
																				to the terms and conditions and privacy
																				policy of the company and confirm that
																				you are of legal age.</p>
																		</label>
																	</div>
																	<p style="margin-bottom:10px;" class="icons"><span
																			class="material-icons">monetization_on</span>
																		<span class="icon-label">Bet currency USD
																			(United state)</span>
																	</p>
																	<p style="margin-bottom:10px;"><a
																			href="https://www.bet3up.com/privacy-policy"
																			target="_blank" class="icons"><span
																				class="material-icons">info</span> <span
																				class="icon-label">Privacy
																				Policy</span></a></p>
																	<p style="margin-bottom:0;"><a
																			class="link-whatsapp icons"
																			href="https://api.whatsapp.com/send?phone=+8801972904020"
																			target="_blank"><img
																				src="https://www.bet3up.com/images/icon-whatsapp.png"
																				width="32" alt="WhatsApp" /> <span
																				class="icon-label">+8801972904020</span></a>
																	</p>
																</div>
															</div>
														</form>
														<script>
															jQuery(document).ready(function ($) {
																$('#inputPopupOneClickCountry').selectpicker({
																	iconBase: 'flag-icon',
																	liveSearch: true
																});

																$("#frmPopupUserRegByClick").validate({
																	rules: {
																		country: "required",
																		ref: {
																			required: false,
																			digits: true,
																			minlength: 8,
																			maxlength: 8,
																			regPopValidSponsor: true
																		},
																		agree_privacy_terms: "required"
																	},
																	messages: {
																		country: "Please select a country!",
																		ref: {
																			required: "Enter a valid sponsor ID!",
																			digits: "Only digit 1-9!",
																			minlength: "Minimum 8 digits!",
																			maxlength: "Maximum 8 digits!",
																			regPopValidSponsor: "Invalid sponsor ID!",
																		},
																		agree_privacy_terms: "Please read our privacy and conditions!"
																	}
																});
															});

															grecaptcha.ready(function () {
																grecaptcha.execute("6LcCNA8aAAAAAPucBgiU7e-Bmh5lR_1U6qRlHRd8", { action: 'registeroneclick' }).then(function (token) {
																	var recaptchaResponsePopByRegOClick = document.getElementById('recaptchaResponsePopByRegOClick');
																	recaptchaResponsePopByRegOClick.value = token;
																	// Add your logic to submit to your backend server here.
																	$(document).on('click', '#btnPopupRegByOneClick', function (event) {
																		event.preventDefault();
																		var frmPopupUserRegByClick = $("#frmPopupUserRegByClick");
																		if (frmPopupUserRegByClick.valid()) {
																			$.ajax({
																				type: 'POST',
																				url: "https://www.bet3up.com/register-by-click",
																				data: frmPopupUserRegByClick.serialize(),
																				headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
																				dataType: "json",
																				success: function (data) {
																					if (data) {
																						if (data.status == 'success') {
																							$("#frmPopupUserRegByClick")[0].reset();
																							$('#modalPopupRegByOneClick').on('show.bs.modal', function (event) {
																								var modal = $(this)
																								modal.find('.modaltext-message').empty().html('<p class="title">' + data.message + '</p>');
																								modal.find('.btntext-username').empty().text(data.username);
																								modal.find('.btntext-password').empty().text(data.password);
																								modal.find('.btn-username').attr('data-copy', data.username);
																								modal.find('#sendUsername').val(data.username);
																								modal.find('#sendPassword').val(data.password);
																								modal.find('.btn-password').attr('data-copy', data.password);
																								copyToClipboard(data.username, modal.find('.btn-username'));
																								copyToClipboard(data.password, modal.find('.btn-password'));
																							});

																							$('#registerPopupModal').modal('hide');
																							$('#modalPopupRegByOneClick').modal('show');
																						} if (data.status == 'error') {
																							swal({
																								title: "Oops!",
																								text: data.message,
																								icon: "error",
																								button: "Close"
																							});

																						}
																					}
																				}
																			});
																		}
																	});
																});
															});
														</script>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="popupRegByEmail">
												<div class="card card-register">
													<div class="card-body">
														<form id="frmPopupUserRegByEmail" method="POST"
															action="https://www.bet3up.com/register">
															<input type="hidden" name="_token"
																value="sh7IsQIPD0zUEGHkfz4wz2bWqCGOnhlCVIkT4QTR">
															<div class="form-group row">
																<div class="col-6 col-md-6">
																	<div class="input-group">
																		<select id="inputPopupByEmailCountry"
																			class="form-control custom-select selectpicker "
																			name="country">
																			<option data-icon="flag-icon-af" value="AF">
																				Afghanistan</option>
																			<option data-icon="flag-icon-al" value="AL">
																				Albania</option>
																			<option data-icon="flag-icon-aq" value="AQ">
																				Antarctica</option>
																			<option data-icon="flag-icon-dz" value="DZ">
																				Algeria</option>
																			<option data-icon="flag-icon-as" value="AS">
																				American Samoa</option>
																			<option data-icon="flag-icon-ad" value="AD">
																				Andorra</option>
																			<option data-icon="flag-icon-ao" value="AO">
																				Angola</option>
																			<option data-icon="flag-icon-ag" value="AG">
																				Antigua and Barbuda</option>
																			<option data-icon="flag-icon-az" value="AZ">
																				Azerbaijan</option>
																			<option data-icon="flag-icon-ar" value="AR">
																				Argentina</option>
																			<option data-icon="flag-icon-au" value="AU">
																				Australia</option>
																			<option data-icon="flag-icon-at" value="AT">
																				Austria</option>
																			<option data-icon="flag-icon-bs" value="BS">
																				Bahamas</option>
																			<option data-icon="flag-icon-bh" value="BH">
																				Bahrain</option>
																			<option data-icon="flag-icon-bd" value="BD"
																				selected="selected">Bangladesh</option>
																			<option data-icon="flag-icon-am" value="AM">
																				Armenia</option>
																			<option data-icon="flag-icon-bb" value="BB">
																				Barbados</option>
																			<option data-icon="flag-icon-be" value="BE">
																				Belgium</option>
																			<option data-icon="flag-icon-bm" value="BM">
																				Bermuda</option>
																			<option data-icon="flag-icon-bt" value="BT">
																				Bhutan</option>
																			<option data-icon="flag-icon-bo" value="BO">
																				Bolivia, Plurinational State of</option>
																			<option data-icon="flag-icon-ba" value="BA">
																				Bosnia and Herzegovina</option>
																			<option data-icon="flag-icon-bw" value="BW">
																				Botswana</option>
																			<option data-icon="flag-icon-bv" value="BV">
																				Bouvet Island</option>
																			<option data-icon="flag-icon-br" value="BR">
																				Brazil</option>
																			<option data-icon="flag-icon-bz" value="BZ">
																				Belize</option>
																			<option data-icon="flag-icon-io" value="IO">
																				British Indian Ocean Territory</option>
																			<option data-icon="flag-icon-sb" value="SB">
																				Solomon Islands</option>
																			<option data-icon="flag-icon-vg" value="VG">
																				Virgin Islands, British</option>
																			<option data-icon="flag-icon-bn" value="BN">
																				Brunei Darussalam</option>
																			<option data-icon="flag-icon-bg" value="BG">
																				Bulgaria</option>
																			<option data-icon="flag-icon-mm" value="MM">
																				Myanmar</option>
																			<option data-icon="flag-icon-bi" value="BI">
																				Burundi</option>
																			<option data-icon="flag-icon-by" value="BY">
																				Belarus</option>
																			<option data-icon="flag-icon-kh" value="KH">
																				Cambodia</option>
																			<option data-icon="flag-icon-cm" value="CM">
																				Cameroon</option>
																			<option data-icon="flag-icon-ca" value="CA">
																				Canada</option>
																			<option data-icon="flag-icon-cv" value="CV">
																				Cape Verde</option>
																			<option data-icon="flag-icon-ky" value="KY">
																				Cayman Islands</option>
																			<option data-icon="flag-icon-cf" value="CF">
																				Central African Republic</option>
																			<option data-icon="flag-icon-lk" value="LK">
																				Sri Lanka</option>
																			<option data-icon="flag-icon-td" value="TD">
																				Chad</option>
																			<option data-icon="flag-icon-cl" value="CL">
																				Chile</option>
																			<option data-icon="flag-icon-cn" value="CN">
																				China</option>
																			<option data-icon="flag-icon-tw" value="TW">
																				Taiwan, Province of China</option>
																			<option data-icon="flag-icon-cx" value="CX">
																				Christmas Island</option>
																			<option data-icon="flag-icon-cc" value="CC">
																				Cocos (Keeling) Islands</option>
																			<option data-icon="flag-icon-co" value="CO">
																				Colombia</option>
																			<option data-icon="flag-icon-km" value="KM">
																				Comoros</option>
																			<option data-icon="flag-icon-yt" value="YT">
																				Mayotte</option>
																			<option data-icon="flag-icon-cg" value="CG">
																				Congo</option>
																			<option data-icon="flag-icon-cd" value="CD">
																				Congo, the Democratic Republic of the
																			</option>
																			<option data-icon="flag-icon-ck" value="CK">
																				Cook Islands</option>
																			<option data-icon="flag-icon-cr" value="CR">
																				Costa Rica</option>
																			<option data-icon="flag-icon-hr" value="HR">
																				Croatia</option>
																			<option data-icon="flag-icon-cu" value="CU">
																				Cuba</option>
																			<option data-icon="flag-icon-cy" value="CY">
																				Cyprus</option>
																			<option data-icon="flag-icon-cz" value="CZ">
																				Czech Republic</option>
																			<option data-icon="flag-icon-bj" value="BJ">
																				Benin</option>
																			<option data-icon="flag-icon-dk" value="DK">
																				Denmark</option>
																			<option data-icon="flag-icon-dm" value="DM">
																				Dominica</option>
																			<option data-icon="flag-icon-do" value="DO">
																				Dominican Republic</option>
																			<option data-icon="flag-icon-ec" value="EC">
																				Ecuador</option>
																			<option data-icon="flag-icon-sv" value="SV">
																				El Salvador</option>
																			<option data-icon="flag-icon-gq" value="GQ">
																				Equatorial Guinea</option>
																			<option data-icon="flag-icon-et" value="ET">
																				Ethiopia</option>
																			<option data-icon="flag-icon-er" value="ER">
																				Eritrea</option>
																			<option data-icon="flag-icon-ee" value="EE">
																				Estonia</option>
																			<option data-icon="flag-icon-fo" value="FO">
																				Faroe Islands</option>
																			<option data-icon="flag-icon-fk" value="FK">
																				Falkland Islands (Malvinas)</option>
																			<option data-icon="flag-icon-gs" value="GS">
																				South Georgia and the South Sandwich
																				Islands</option>
																			<option data-icon="flag-icon-fj" value="FJ">
																				Fiji</option>
																			<option data-icon="flag-icon-fi" value="FI">
																				Finland</option>
																			<option data-icon="flag-icon-ax" value="AX">
																				Åland Islands</option>
																			<option data-icon="flag-icon-fr" value="FR">
																				France</option>
																			<option data-icon="flag-icon-gf" value="GF">
																				French Guiana</option>
																			<option data-icon="flag-icon-pf" value="PF">
																				French Polynesia</option>
																			<option data-icon="flag-icon-tf" value="TF">
																				French Southern Territories</option>
																			<option data-icon="flag-icon-dj" value="DJ">
																				Djibouti</option>
																			<option data-icon="flag-icon-ga" value="GA">
																				Gabon</option>
																			<option data-icon="flag-icon-ge" value="GE">
																				Georgia</option>
																			<option data-icon="flag-icon-gm" value="GM">
																				Gambia</option>
																			<option data-icon="flag-icon-ps" value="PS">
																				Palestinian Territory, Occupied</option>
																			<option data-icon="flag-icon-de" value="DE">
																				Germany</option>
																			<option data-icon="flag-icon-gh" value="GH">
																				Ghana</option>
																			<option data-icon="flag-icon-gi" value="GI">
																				Gibraltar</option>
																			<option data-icon="flag-icon-ki" value="KI">
																				Kiribati</option>
																			<option data-icon="flag-icon-gr" value="GR">
																				Greece</option>
																			<option data-icon="flag-icon-gl" value="GL">
																				Greenland</option>
																			<option data-icon="flag-icon-gd" value="GD">
																				Grenada</option>
																			<option data-icon="flag-icon-gp" value="GP">
																				Guadeloupe</option>
																			<option data-icon="flag-icon-gu" value="GU">
																				Guam</option>
																			<option data-icon="flag-icon-gt" value="GT">
																				Guatemala</option>
																			<option data-icon="flag-icon-gn" value="GN">
																				Guinea</option>
																			<option data-icon="flag-icon-gy" value="GY">
																				Guyana</option>
																			<option data-icon="flag-icon-ht" value="HT">
																				Haiti</option>
																			<option data-icon="flag-icon-hm" value="HM">
																				Heard Island and McDonald Islands
																			</option>
																			<option data-icon="flag-icon-va" value="VA">
																				Holy See (Vatican City State)</option>
																			<option data-icon="flag-icon-hn" value="HN">
																				Honduras</option>
																			<option data-icon="flag-icon-hk" value="HK">
																				Hong Kong</option>
																			<option data-icon="flag-icon-hu" value="HU">
																				Hungary</option>
																			<option data-icon="flag-icon-is" value="IS">
																				Iceland</option>
																			<option data-icon="flag-icon-in" value="IN">
																				India</option>
																			<option data-icon="flag-icon-id" value="ID">
																				Indonesia</option>
																			<option data-icon="flag-icon-ir" value="IR">
																				Iran, Islamic Republic of</option>
																			<option data-icon="flag-icon-iq" value="IQ">
																				Iraq</option>
																			<option data-icon="flag-icon-ie" value="IE">
																				Ireland</option>
																			<option data-icon="flag-icon-il" value="IL">
																				Israel</option>
																			<option data-icon="flag-icon-it" value="IT">
																				Italy</option>
																			<option data-icon="flag-icon-ci" value="CI">
																				Côte d'Ivoire</option>
																			<option data-icon="flag-icon-jm" value="JM">
																				Jamaica</option>
																			<option data-icon="flag-icon-jp" value="JP">
																				Japan</option>
																			<option data-icon="flag-icon-kz" value="KZ">
																				Kazakhstan</option>
																			<option data-icon="flag-icon-jo" value="JO">
																				Jordan</option>
																			<option data-icon="flag-icon-ke" value="KE">
																				Kenya</option>
																			<option data-icon="flag-icon-kp" value="KP">
																				Korea, Democratic People's Republic of
																			</option>
																			<option data-icon="flag-icon-kr" value="KR">
																				Korea, Republic of</option>
																			<option data-icon="flag-icon-kw" value="KW">
																				Kuwait</option>
																			<option data-icon="flag-icon-kg" value="KG">
																				Kyrgyzstan</option>
																			<option data-icon="flag-icon-la" value="LA">
																				Lao People's Democratic Republic
																			</option>
																			<option data-icon="flag-icon-lb" value="LB">
																				Lebanon</option>
																			<option data-icon="flag-icon-ls" value="LS">
																				Lesotho</option>
																			<option data-icon="flag-icon-lv" value="LV">
																				Latvia</option>
																			<option data-icon="flag-icon-lr" value="LR">
																				Liberia</option>
																			<option data-icon="flag-icon-ly" value="LY">
																				Libya</option>
																			<option data-icon="flag-icon-li" value="LI">
																				Liechtenstein</option>
																			<option data-icon="flag-icon-lt" value="LT">
																				Lithuania</option>
																			<option data-icon="flag-icon-lu" value="LU">
																				Luxembourg</option>
																			<option data-icon="flag-icon-mo" value="MO">
																				Macao</option>
																			<option data-icon="flag-icon-mg" value="MG">
																				Madagascar</option>
																			<option data-icon="flag-icon-mw" value="MW">
																				Malawi</option>
																			<option data-icon="flag-icon-my" value="MY">
																				Malaysia</option>
																			<option data-icon="flag-icon-mv" value="MV">
																				Maldives</option>
																			<option data-icon="flag-icon-ml" value="ML">
																				Mali</option>
																			<option data-icon="flag-icon-mt" value="MT">
																				Malta</option>
																			<option data-icon="flag-icon-mq" value="MQ">
																				Martinique</option>
																			<option data-icon="flag-icon-mr" value="MR">
																				Mauritania</option>
																			<option data-icon="flag-icon-mu" value="MU">
																				Mauritius</option>
																			<option data-icon="flag-icon-mx" value="MX">
																				Mexico</option>
																			<option data-icon="flag-icon-mc" value="MC">
																				Monaco</option>
																			<option data-icon="flag-icon-mn" value="MN">
																				Mongolia</option>
																			<option data-icon="flag-icon-md" value="MD">
																				Moldova, Republic of</option>
																			<option data-icon="flag-icon-me" value="ME">
																				Montenegro</option>
																			<option data-icon="flag-icon-ms" value="MS">
																				Montserrat</option>
																			<option data-icon="flag-icon-ma" value="MA">
																				Morocco</option>
																			<option data-icon="flag-icon-mz" value="MZ">
																				Mozambique</option>
																			<option data-icon="flag-icon-om" value="OM">
																				Oman</option>
																			<option data-icon="flag-icon-na" value="NA">
																				Namibia</option>
																			<option data-icon="flag-icon-nr" value="NR">
																				Nauru</option>
																			<option data-icon="flag-icon-np" value="NP">
																				Nepal</option>
																			<option data-icon="flag-icon-nl" value="NL">
																				Netherlands</option>
																			<option data-icon="flag-icon-cw" value="CW">
																				Curaçao</option>
																			<option data-icon="flag-icon-aw" value="AW">
																				Aruba</option>
																			<option data-icon="flag-icon-sx" value="SX">
																				Sint Maarten (Dutch part)</option>
																			<option data-icon="flag-icon-bq" value="BQ">
																				Bonaire, Sint Eustatius and Saba
																			</option>
																			<option data-icon="flag-icon-nc" value="NC">
																				New Caledonia</option>
																			<option data-icon="flag-icon-vu" value="VU">
																				Vanuatu</option>
																			<option data-icon="flag-icon-nz" value="NZ">
																				New Zealand</option>
																			<option data-icon="flag-icon-ni" value="NI">
																				Nicaragua</option>
																			<option data-icon="flag-icon-ne" value="NE">
																				Niger</option>
																			<option data-icon="flag-icon-ng" value="NG">
																				Nigeria</option>
																			<option data-icon="flag-icon-nu" value="NU">
																				Niue</option>
																			<option data-icon="flag-icon-nf" value="NF">
																				Norfolk Island</option>
																			<option data-icon="flag-icon-no" value="NO">
																				Norway</option>
																			<option data-icon="flag-icon-mp" value="MP">
																				Northern Mariana Islands</option>
																			<option data-icon="flag-icon-um" value="UM">
																				United States Minor Outlying Islands
																			</option>
																			<option data-icon="flag-icon-fm" value="FM">
																				Micronesia, Federated States of</option>
																			<option data-icon="flag-icon-mh" value="MH">
																				Marshall Islands</option>
																			<option data-icon="flag-icon-pw" value="PW">
																				Palau</option>
																			<option data-icon="flag-icon-pk" value="PK">
																				Pakistan</option>
																			<option data-icon="flag-icon-pa" value="PA">
																				Panama</option>
																			<option data-icon="flag-icon-pg" value="PG">
																				Papua New Guinea</option>
																			<option data-icon="flag-icon-py" value="PY">
																				Paraguay</option>
																			<option data-icon="flag-icon-pe" value="PE">
																				Peru</option>
																			<option data-icon="flag-icon-ph" value="PH">
																				Philippines</option>
																			<option data-icon="flag-icon-pn" value="PN">
																				Pitcairn</option>
																			<option data-icon="flag-icon-pl" value="PL">
																				Poland</option>
																			<option data-icon="flag-icon-pt" value="PT">
																				Portugal</option>
																			<option data-icon="flag-icon-gw" value="GW">
																				Guinea-Bissau</option>
																			<option data-icon="flag-icon-tl" value="TL">
																				Timor-Leste</option>
																			<option data-icon="flag-icon-pr" value="PR">
																				Puerto Rico</option>
																			<option data-icon="flag-icon-qa" value="QA">
																				Qatar</option>
																			<option data-icon="flag-icon-re" value="RE">
																				Réunion</option>
																			<option data-icon="flag-icon-ro" value="RO">
																				Romania</option>
																			<option data-icon="flag-icon-ru" value="RU">
																				Russian Federation</option>
																			<option data-icon="flag-icon-rw" value="RW">
																				Rwanda</option>
																			<option data-icon="flag-icon-bl" value="BL">
																				Saint Barthélemy</option>
																			<option data-icon="flag-icon-sh" value="SH">
																				Saint Helena, Ascension and Tristan da
																				Cunha</option>
																			<option data-icon="flag-icon-kn" value="KN">
																				Saint Kitts and Nevis</option>
																			<option data-icon="flag-icon-ai" value="AI">
																				Anguilla</option>
																			<option data-icon="flag-icon-lc" value="LC">
																				Saint Lucia</option>
																			<option data-icon="flag-icon-mf" value="MF">
																				Saint Martin (French part)</option>
																			<option data-icon="flag-icon-pm" value="PM">
																				Saint Pierre and Miquelon</option>
																			<option data-icon="flag-icon-vc" value="VC">
																				Saint Vincent and the Grenadines
																			</option>
																			<option data-icon="flag-icon-sm" value="SM">
																				San Marino</option>
																			<option data-icon="flag-icon-st" value="ST">
																				Sao Tome and Principe</option>
																			<option data-icon="flag-icon-sa" value="SA">
																				Saudi Arabia</option>
																			<option data-icon="flag-icon-sn" value="SN">
																				Senegal</option>
																			<option data-icon="flag-icon-rs" value="RS">
																				Serbia</option>
																			<option data-icon="flag-icon-sc" value="SC">
																				Seychelles</option>
																			<option data-icon="flag-icon-sl" value="SL">
																				Sierra Leone</option>
																			<option data-icon="flag-icon-sg" value="SG">
																				Singapore</option>
																			<option data-icon="flag-icon-sk" value="SK">
																				Slovakia</option>
																			<option data-icon="flag-icon-vn" value="VN">
																				Viet Nam</option>
																			<option data-icon="flag-icon-si" value="SI">
																				Slovenia</option>
																			<option data-icon="flag-icon-so" value="SO">
																				Somalia</option>
																			<option data-icon="flag-icon-za" value="ZA">
																				South Africa</option>
																			<option data-icon="flag-icon-zw" value="ZW">
																				Zimbabwe</option>
																			<option data-icon="flag-icon-es" value="ES">
																				Spain</option>
																			<option data-icon="flag-icon-ss" value="SS">
																				South Sudan</option>
																			<option data-icon="flag-icon-sd" value="SD">
																				Sudan</option>
																			<option data-icon="flag-icon-eh" value="EH">
																				Western Sahara</option>
																			<option data-icon="flag-icon-sr" value="SR">
																				Suriname</option>
																			<option data-icon="flag-icon-sj" value="SJ">
																				Svalbard and Jan Mayen</option>
																			<option data-icon="flag-icon-sz" value="SZ">
																				Swaziland</option>
																			<option data-icon="flag-icon-se" value="SE">
																				Sweden</option>
																			<option data-icon="flag-icon-ch" value="CH">
																				Switzerland</option>
																			<option data-icon="flag-icon-sy" value="SY">
																				Syrian Arab Republic</option>
																			<option data-icon="flag-icon-tj" value="TJ">
																				Tajikistan</option>
																			<option data-icon="flag-icon-th" value="TH">
																				Thailand</option>
																			<option data-icon="flag-icon-tg" value="TG">
																				Togo</option>
																			<option data-icon="flag-icon-tk" value="TK">
																				Tokelau</option>
																			<option data-icon="flag-icon-to" value="TO">
																				Tonga</option>
																			<option data-icon="flag-icon-tt" value="TT">
																				Trinidad and Tobago</option>
																			<option data-icon="flag-icon-ae" value="AE">
																				United Arab Emirates</option>
																			<option data-icon="flag-icon-tn" value="TN">
																				Tunisia</option>
																			<option data-icon="flag-icon-tr" value="TR">
																				Turkey</option>
																			<option data-icon="flag-icon-tm" value="TM">
																				Turkmenistan</option>
																			<option data-icon="flag-icon-tc" value="TC">
																				Turks and Caicos Islands</option>
																			<option data-icon="flag-icon-tv" value="TV">
																				Tuvalu</option>
																			<option data-icon="flag-icon-ug" value="UG">
																				Uganda</option>
																			<option data-icon="flag-icon-ua" value="UA">
																				Ukraine</option>
																			<option data-icon="flag-icon-mk" value="MK">
																				Macedonia, the former Yugoslav Republic
																				of</option>
																			<option data-icon="flag-icon-eg" value="EG">
																				Egypt</option>
																			<option data-icon="flag-icon-gb" value="GB">
																				United Kingdom</option>
																			<option data-icon="flag-icon-gg" value="GG">
																				Guernsey</option>
																			<option data-icon="flag-icon-je" value="JE">
																				Jersey</option>
																			<option data-icon="flag-icon-im" value="IM">
																				Isle of Man</option>
																			<option data-icon="flag-icon-tz" value="TZ">
																				Tanzania, United Republic of</option>
																			<option data-icon="flag-icon-us" value="US">
																				United States</option>
																			<option data-icon="flag-icon-vi" value="VI">
																				Virgin Islands, U.S.</option>
																			<option data-icon="flag-icon-bf" value="BF">
																				Burkina Faso</option>
																			<option data-icon="flag-icon-uy" value="UY">
																				Uruguay</option>
																			<option data-icon="flag-icon-uz" value="UZ">
																				Uzbekistan</option>
																			<option data-icon="flag-icon-ve" value="VE">
																				Venezuela, Bolivarian Republic of
																			</option>
																			<option data-icon="flag-icon-wf" value="WF">
																				Wallis and Futuna</option>
																			<option data-icon="flag-icon-ws" value="WS">
																				Samoa</option>
																			<option data-icon="flag-icon-ye" value="YE">
																				Yemen</option>
																			<option data-icon="flag-icon-zm" value="ZM">
																				Zambia</option>
																		</select>
																	</div>
																</div>
																<div class="col-6 col-md-6">
																	<div class="input-group">
																		<input id="inputCity" type="text"
																			class="form-control " name="city" value=""
																			placeholder="City" required
																			autocomplete="city" autofocus>
																	</div>
																</div>
															</div>
															<div class="form-group row">
																<div class="col-12 col-md-12">
																	<div class="input-group">
																		<input id="inputPopupByEmailPhone" type="tel"
																			class="form-control uniquePhone flag-phone "
																			name="phone" value="" required
																			autocomplete="phone" autofocus>
																	</div>
																</div>
															</div>
															<div class="form-group row">
																<div class="col-12 col-md-12">
																	<div class="input-group">
																		<input id="inputPopupByEmailEmail" type="email"
																			class="form-control uniqueEmail "
																			name="email" value=""
																			placeholder="user@example.com" required
																			autocomplete="email">
																	</div>
																</div>
															</div>
															<div class="form-group row">
																<div class="col-6 col-md-6">
																	<div class="input-group">
																		<input id="inputPopupByEmailFirstName"
																			type="text" class="form-control "
																			name="first_name" value=""
																			placeholder="First Name" required
																			autocomplete="first_name" autofocus>
																	</div>
																</div>
																<div class="col-6 col-md-6">
																	<div class="input-group">
																		<input id="inputPopupByEmailLastName"
																			type="text" class="form-control "
																			name="last_name" value=""
																			placeholder="Last Name" required
																			autocomplete="last_name">
																	</div>
																</div>
															</div>
															<div class="form-group row">
																<div class="col-6 col-sm-6 col-md-6">
																	<div class="input-group input-group-dob">
																		<select id="inputDobDay"
																			class="form-control dob-day " name="dobday"
																			required>
																			<option value="">dd</option>
																			<option value="01">01</option>
																			<option value="02">02</option>
																			<option value="03">03</option>
																			<option value="04">04</option>
																			<option value="05">05</option>
																			<option value="06">06</option>
																			<option value="07">07</option>
																			<option value="08">08</option>
																			<option value="09">09</option>
																			<option value="10">10</option>
																			<option value="11">11</option>
																			<option value="12">12</option>
																			<option value="13">13</option>
																			<option value="14">14</option>
																			<option value="15">15</option>
																			<option value="16">16</option>
																			<option value="17">17</option>
																			<option value="18">18</option>
																			<option value="19">19</option>
																			<option value="20">20</option>
																			<option value="21">21</option>
																			<option value="22">22</option>
																			<option value="23">23</option>
																			<option value="24">24</option>
																			<option value="25">25</option>
																			<option value="26">26</option>
																			<option value="27">27</option>
																			<option value="28">28</option>
																			<option value="29">29</option>
																			<option value="30">30</option>
																			<option value="31">31</option>
																		</select>
																		<select id="inputDobMonth"
																			class="form-control dob-month "
																			name="dobmonth" required>
																			<option value="">mm</option>
																			<option value="January">Jan</option>
																			<option value="February">Feb</option>
																			<option value="March">Mar</option>
																			<option value="April">Apr</option>
																			<option value="May">May</option>
																			<option value="June">Jun</option>
																			<option value="July">Jul</option>
																			<option value="August">Aug</option>
																			<option value="September">Sep</option>
																			<option value="October">Oct</option>
																			<option value="November">Nov</option>
																			<option value="December">Dec</option>
																		</select>
																		<select id="inputDobYear"
																			class="form-control dob-year "
																			name="dobyear" required>
																			<option value="">yyyy</option>
																			<option value="2008">2008</option>
																			<option value="2007">2007</option>
																			<option value="2006">2006</option>
																			<option value="2005">2005</option>
																			<option value="2004">2004</option>
																			<option value="2003">2003</option>
																			<option value="2002">2002</option>
																			<option value="2001">2001</option>
																			<option value="2000">2000</option>
																			<option value="1999">1999</option>
																			<option value="1998">1998</option>
																			<option value="1997">1997</option>
																			<option value="1996">1996</option>
																			<option value="1995">1995</option>
																			<option value="1994">1994</option>
																			<option value="1993">1993</option>
																			<option value="1992">1992</option>
																			<option value="1991">1991</option>
																			<option value="1990">1990</option>
																			<option value="1989">1989</option>
																			<option value="1988">1988</option>
																			<option value="1987">1987</option>
																			<option value="1986">1986</option>
																			<option value="1985">1985</option>
																			<option value="1984">1984</option>
																			<option value="1983">1983</option>
																			<option value="1982">1982</option>
																			<option value="1981">1981</option>
																			<option value="1980">1980</option>
																			<option value="1979">1979</option>
																			<option value="1978">1978</option>
																			<option value="1977">1977</option>
																			<option value="1976">1976</option>
																			<option value="1975">1975</option>
																			<option value="1974">1974</option>
																			<option value="1973">1973</option>
																			<option value="1972">1972</option>
																			<option value="1971">1971</option>
																			<option value="1970">1970</option>
																			<option value="1969">1969</option>
																			<option value="1968">1968</option>
																			<option value="1967">1967</option>
																			<option value="1966">1966</option>
																			<option value="1965">1965</option>
																			<option value="1964">1964</option>
																			<option value="1963">1963</option>
																			<option value="1962">1962</option>
																			<option value="1961">1961</option>
																			<option value="1960">1960</option>
																			<option value="1959">1959</option>
																			<option value="1958">1958</option>
																			<option value="1957">1957</option>
																			<option value="1956">1956</option>
																			<option value="1955">1955</option>
																			<option value="1954">1954</option>
																			<option value="1953">1953</option>
																			<option value="1952">1952</option>
																			<option value="1951">1951</option>
																			<option value="1950">1950</option>
																			<option value="1949">1949</option>
																			<option value="1948">1948</option>
																			<option value="1947">1947</option>
																			<option value="1946">1946</option>
																			<option value="1945">1945</option>
																			<option value="1944">1944</option>
																			<option value="1943">1943</option>
																			<option value="1942">1942</option>
																			<option value="1941">1941</option>
																		</select>
																	</div>
																</div>
																<div class="col-6 col-sm-6 col-md-6">
																	<div class="input-group">
																		<select id="inputPopupByEmailGender"
																			class="form-control " name="gender"
																			required>
																			<option value="Male" selected="selected">
																				Male</option>
																			<option value="Female">Female</option>
																			<option value="Others">Others</option>
																		</select>
																	</div>
																</div>
															</div>
															<div class="form-group row">
																<div class="col-6 col-md-6">
																	<div class="input-group">
																		<input id="inputPopupByEmailPassword"
																			type="password" class="form-control "
																			name="password" placeholder="Password"
																			required autocomplete="new-password">
																		<span class="password-show-hide"
																			title="Show password"><span
																				class="material-icons">visibility_off</span></span>
																	</div>
																</div>
																<div class="col-6 col-md-6">
																	<div class="input-group">
																		<input id="inputPopupByEmailRef" type="number"
																			class="form-control regPopValidSponsor "
																			name="ref" value="" maxlength="8"
																			placeholder="Referral ID"
																			data-display="#byEmailPopupInfoRow"
																			autocomplete="off">
																	</div>
																</div>
															</div>
															<div id="byEmailPopupInfoRow"
																class="form-group regPopValidSponsorRow row"
																style="display:none;">
																<div class="col-12 col-md-12">
																	<div id="byEmailPopupInfoHtml"
																		class="userInfoHtml transfer-user-info"></div>
																</div>
															</div>
															<div class="form-group row">
																<div class="col-12 col-md-12">
																	<button type="submit"
																		class="btn btn-danger btn-user-register btn-block">
																		Register Now
																	</button>
																	<input type="hidden" name="currency" value="USD" />
																	<input type="hidden" name="regby" value="email" />
																	<input type="hidden" name="recaptcha_response"
																		id="recaptchaResponsePopByRegEmail">
																</div>
															</div>
															<div class="form-group row justify-content-center mb-0">
																<div class="col-md-12">
																	<div class="form-check">
																		<input type="checkbox" class="form-check-input"
																			name="agree_privacy_terms"
																			id="privacyPolicyPopupByEmail" />
																		<label class="form-check-label"
																			for="privacyPolicyPopupByEmail">
																			<p>You confirm that you have read and agree
																				to the terms and conditions and privacy
																				policy of the company and confirm that
																				you are of legal age.</p>
																		</label>
																	</div>
																	<p style="margin-bottom:10px;" class="icons"><span
																			class="material-icons">monetization_on</span>
																		<span class="icon-label">Bet currency USD
																			(United state)</span>
																	</p>
																	<p style="margin-bottom:10px;"><a
																			href="https://www.bet3up.com/privacy-policy"
																			target="_blank" class="icons"><span
																				class="material-icons">info</span> <span
																				class="icon-label">Privacy
																				Policy</span></a></p>
																	<p style="margin-bottom:0;"><a
																			class="link-whatsapp icons"
																			href="https://api.whatsapp.com/send?phone=+8801972904020"
																			target="_blank"><img
																				src="https://www.bet3up.com/images/icon-whatsapp.png"
																				width="32" alt="WhatsApp" /> <span
																				class="icon-label">+8801972904020</span></a>
																	</p>
																</div>
															</div>
														</form>
														<script>
															grecaptcha.ready(function () {
																grecaptcha.execute("6LcCNA8aAAAAAPucBgiU7e-Bmh5lR_1U6qRlHRd8", { action: 'register' }).then(function (token) {
																	document.getElementById('recaptchaResponsePopByRegEmail').value = token;
																	// Add your logic to submit to your backend server here.
																});
															});

															jQuery(document).ready(function ($) {
																/*$("#inputPopupByEmailDob").datetimepicker({
																	timepicker:false,
																	format: 'd-m-Y'
																});
																
																$(document).on('click', '.popup-dob-calendar', function(event){
																	$("#inputPopupByEmailDob").focus();
																});*/

																$('#inputPopupByEmailCountry').selectpicker({
																	iconBase: 'flag-icon',
																	liveSearch: true
																});

																var inputPhone = document.querySelector("#inputPopupByEmailPhone"),
																	countryDropdown = document.querySelector("#inputPopupByEmailCountry");

																var iti = window.intlTelInput(inputPhone, {
																	formatOnDisplay: false,
																	separateDialCode: true,
																	hiddenInput: "international_phone",
																	initialCountry: 'BD',
																	utilsScript: "https://www.bet3up.com/js/utils.js"
																});

																// listen to the telephone input for changes
																inputPhone.addEventListener('countrychange', function (e) {
																	var countryCode = iti.getSelectedCountryData().iso2;
																	$('#inputPopupByEmailCountry').val(countryCode.toUpperCase());
																	$('#inputPopupByEmailCountry').selectpicker('refresh');
																});

																// listen to the address dropdown for changes
																countryDropdown.addEventListener('change', function () {
																	iti.setCountry(this.value);
																});

																var handleChange = function () {
																	$.validator.addMethod("flag-phone", function (value, element) {
																		return iti.isValidNumber() ? true : false;
																	}, "Please enter valid phone number!");
																};

																// listen to "keyup", but also "change" to update when the user selects a country
																inputPhone.addEventListener('change', handleChange);
																inputPhone.addEventListener('keyup', handleChange);

																$('#inputPopupByEmailEmail').focusin(function () {
																	$(this).one('focusout', function () {
																		var uniqueEmailVal = $(this).val();
																		if (uniqueEmailVal.length > 8) {
																			$.validator.addMethod("uniqueEmail", function (value, element) {
																				let result = false;
																				$.ajax({
																					type: 'POST',
																					url: "https://www.bet3up.com/check-email-exists",
																					data: { email: value },
																					headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
																					dataType: "json",
																					success: function (data) {
																						if (data === 1) {
																							if (iti.isValidNumber()) {
																								$(element).addClass('is-invalid');
																								result = false;
																							}
																						} else {
																							$(element).removeClass('is-invalid');
																							$(element).addClass('is-valid');
																							result = true;
																						}
																					},
																					async: false
																				});
																				return result;
																			});
																		}
																	});
																});

																$('#inputPopupByEmailPhone').focusin(function () {
																	$(this).one('focusout', function () {
																		var uniquePhoneVal = $(this).val();
																		if (uniquePhoneVal.length > 8) {
																			$.validator.addMethod("uniquePhone", function (value, element) {
																				let result = false;
																				$.ajax({
																					type: 'POST',
																					url: "https://www.bet3up.com/check-phone-exists",
																					data: { phone: value },
																					headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
																					dataType: "json",
																					success: function (data) {
																						if (data === 1) {
																							$(element).addClass('is-invalid');
																							result = false;
																						} else {
																							$(element).removeClass('is-invalid');
																							$(element).addClass('is-valid');
																							result = true;
																						}
																					},
																					async: false
																				});

																				return result;
																			});
																		}
																	});
																});

																$("#frmPopupUserRegByEmail").validate({
																	rules: {
																		city: "required",
																		phone: {
																			required: true,
																			uniquePhone: true
																		},
																		email: {
																			required: true,
																			email: true,
																			uniqueEmail: true
																		},
																		first_name: "required",
																		last_name: "required",
																		dob: "required",
																		gender: "required",
																		ref: {
																			required: false,
																			digits: true,
																			minlength: 8,
																			maxlength: 8,
																			regPopValidSponsor: true
																		},
																		password: {
																			required: true,
																			minlength: 6
																		},
																		agree_privacy_terms: "required"
																	},
																	messages: {
																		phone: {
																			required: "Enter your phone number!",
																			uniquePhone: "Phone number already exists!",
																		},
																		email: {
																			required: "Enter a valid email address!",
																			email: "Enter a valid email address!",
																			uniqueEmail: "Email already exists!",
																		},
																		ref: {
																			required: "Enter a valid sponsor ID!",
																			digits: "Only digit 1-9!",
																			minlength: "Minimum 8 digits!",
																			maxlength: "Maximum 8 digits!",
																			regPopValidSponsor: "Invalid sponsor ID!",
																		},
																		password: {
																			required: "This field is required.",
																			minlength: "Password must be at least 6 characters long!"
																		},
																		agree_privacy_terms: "Please read our privacy and conditions!"
																	}
																});
															});
														</script>
													</div>
												</div>
											</div>
										</div>
										<script>
											jQuery(document).ready(function ($) {
												var regPopRefSponsor = "";
												if ((regPopRefSponsor != "") && (regPopRefSponsor.length == 8)) {
													var inputFieldId = $('.regPopValidSponsor');
													var displayRowId = $('.regPopValidSponsorRow');
													$.ajax({
														type: 'GET',
														url: "https://www.bet3up.com/user-info",
														data: { user: regPopRefSponsor },
														headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
														dataType: "json",
														success: function (data) {
															var userHtml = "";
															if (data) {
																if (data.status == 'success') {
																	if (data.userInfo != "") {
																		$(inputFieldId).removeClass('is-invalid').addClass('is-valid');
																		userHtml += '<div class="user-info user-contacts"><div class="user-details"><span class="user-name">' + data.userInfo.first_name + ' ' + data.userInfo.last_name + '</span><span class="user-country label-with-icons"><span class="material-icons">place</span> <span class="label-text">' + data.userInfo.country + '</span></span></div><div class="user-status"><span class="user-id label-with-icons"><span class="material-icons">account_circle</span> <span class="label-text">' + data.userInfo.username + '</span></span><span class="user-match label-with-icons"><span class="material-icons">verified</span> <span class="label-text">User Match</span></span></div></div>';

																		$(displayRowId).find('.userInfoHtml').empty().html(userHtml);
																	}

																	$(displayRowId).show();
																} if (data.status == 'error') {
																	$(inputFieldId).removeClass('is-valid').addClass('is-invalid');
																	$(displayRowId).hide();
																	$(displayRowId).find('.userInfoHtml').empty().html('');
																}
															}
														}
													});
												}

												$(document).on('keypress', '.regPopValidSponsor', function (e) {
													if ($(e.target).prop('value').length >= 8) {
														return false;
													}
												});
												$.validator.addMethod("regPopValidSponsor", function (value, element) {
													return true;
												}, "Invalid sponsor ID!");

												$(document).on('change keyup', '.regPopValidSponsor', function (event) {
													var inputFieldId = $(this).attr('id');
													var sponsorId = $('#' + inputFieldId).val();
													var displayRowId = $('#' + inputFieldId).data('display');
													$('#' + inputFieldId).removeClass('is-invalid').removeClass('is-valid');
													if ((sponsorId != "") && (sponsorId.length == 8)) {
														$.validator.addMethod("regPopValidSponsor", function (value, element) {
															let result = false;
															if (value.length == 8) {
																$.ajax({
																	type: 'GET',
																	url: "https://www.bet3up.com/user-info",
																	data: { user: value },
																	headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
																	dataType: "json",
																	success: function (data) {
																		//console.log(data);
																		var userHtml = "";
																		if (data) {
																			if (data.status == 'success') {
																				if (data.userInfo != "") {
																					result = true;
																					$('#' + inputFieldId).removeClass('is-invalid').addClass('is-valid');
																					userHtml += '<div class="user-info user-contacts"><div class="user-details"><span class="user-name">' + data.userInfo.first_name + ' ' + data.userInfo.last_name + '</span><span class="user-country label-with-icons"><span class="material-icons">place</span> <span class="label-text">' + data.userInfo.country + '</span></span></div><div class="user-status"><span class="user-id label-with-icons"><span class="material-icons">account_circle</span> <span class="label-text">' + data.userInfo.username + '</span></span><span class="user-match label-with-icons"><span class="material-icons">verified</span> <span class="label-text">User Match</span></span></div></div>';

																					$(displayRowId).find('.userInfoHtml').empty().html(userHtml);
																				}

																				$(displayRowId).show();
																			} if (data.status == 'error') {
																				result = false;
																				$('#' + inputFieldId).removeClass('is-valid').addClass('is-invalid');
																				$(displayRowId).hide();
																				$(displayRowId).find('.userInfoHtml').empty().html('');
																			}
																		}
																	},
																	async: false
																});
															}

															return result;
														}, "Invalid sponsor ID!");
													}
												});
											});
										</script>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<div class="popup-payment-methods">
								<div class="payment-method mastercard"><img
										src="https://www.bet3up.com/images/payment-methods/mastercard.png"
										alt="mastercard" /></div>
								<div class="payment-method visacard"><img
										src="https://www.bet3up.com/images/payment-methods/visacard.png"
										alt="visacard" /></div>
								<div class="payment-method neteller"><img
										src="https://www.bet3up.com/images/payment-methods/neteller.png"
										alt="neteller" /></div>
								<div class="payment-method skrill"><img
										src="https://www.bet3up.com/images/payment-methods/skrill.png" alt="skrill" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<script>
				jQuery(document).ready(function ($) {
					var customClass = 'guest-user';

					ma5menu({
						menu: '.navbar-ma5menu',
						activeClass: 'active',
						customClass: customClass,
						header: '#ma5menu-header',
						footer: '#ma5menu-footer',
						position: 'right',
						closeOnBodyClick: true
					});

					$(document).on('click', '.ma5menu-notification', function (event) {
						event.preventDefault();
					});
				});
			</script>
		</header>