@extends('backend.layouts.master')
@section('content')

<main id="siteMain" class="site-main">
    
			<section id="sectionBannerSlider" class="page-section section-banner-slider">
				<div id="blockBannerSlider" class="page-block block-banner-slider bg-dark py-0 px-0">
					<div class="home-banner-slider">
						<div class="slide"
							style="background-image:url('https://www.bet3up.com/uploads/images/banners//banner-05.jpg')">
							<img class="slide-image" src="https://www.bet3up.com/uploads/images/banners//banner-05.jpg"
								alt="5" />
							<div class="container">
								<div class="caption">
									<h2 class="animate__animated animate__backInDown">5</h2>
									<div class="animate__animated animate__fadeInUp"></div>
								</div>
							</div>
						</div>
						<div class="slide"
							style="background-image:url('https://www.bet3up.com/uploads/images/banners//banner-04.jpg')">
							<img class="slide-image" src="https://www.bet3up.com/uploads/images/banners//banner-04.jpg"
								alt="4" />
							<div class="container">
								<div class="caption">
									<h2 class="animate__animated animate__backInDown">4</h2>
									<div class="animate__animated animate__fadeInUp"></div>
								</div>
							</div>
						</div>
						<div class="slide"
							style="background-image:url('https://www.bet3up.com/uploads/images/banners/banner-03.jpg')">
							<img class="slide-image" src="https://www.bet3up.com/uploads/images/banners/banner-03.jpg"
								alt="Banner Football" />
							<div class="container">
								<div class="caption">
									<h2 class="animate__animated animate__backInDown">Banner Football</h2>
									<div class="animate__animated animate__fadeInUp">
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
										</p>
									</div>
									<a class="btn btn-outline-primary animate__fadeInUp animate__animated"
										href="https://www.google.com/">Get Started</a>
								</div>
							</div>
						</div>
					</div>
					<script>
						jQuery(document).ready(function ($) {
							$('.home-banner-slider').slick({
								slidesToShow: 1,
								slidesToScroll: 1,
								autoplay: true,
								autoplaySpeed: 4000,
								dots: false,
								arrows: true,
								infinite: true,
								speed: 500,
								fade: true,
								cssEase: 'linear',
								responsive: [
									{
										breakpoint: 639,
										settings: {
											slidesToShow: 1,
											slidesToScroll: 1,
											arrows: false,
											dots: true
										}
									}
								]
							});
						});
						$('.home-banner-slider').on("beforeChange", function () {
							$('.caption>h2').removeClass('animate__animated animate__backInDown').hide();
							$('.caption>div').removeClass('animate__animated animate__fadeInUp').hide();
							$('.caption>.btn').removeClass('animate__animated animate__fadeInUp').hide();
							setTimeout(() => {
								$('.caption>h2').addClass('animate__animated animate__backInDown').show();
								$('.caption>div').addClass('animate__animated animate__fadeInUp').show();
								$('.caption>.btn').addClass('animate__animated animate__fadeInUp').show();
							}, 600);
						});
					</script>
				</div>
			</section>
			<section id="sectionGameSlider" class="page-section section-game-slider">
				<div class="container">
					<div class="tabs-all-games">
						<div class="tab-item  active ">
							<a class="btn btn-link tabs-link" data-toggle="tab" data-identifier=".thailottery"
								href="#tabthailottery">
								<span class="game-icon icon-thailottery"><img
										src="https://www.bet3up.com/public/uploads/games/thailottery.png" width="33"
										alt="Thai Lottery" /></span>
								<span class="game-text">Thai Lottery</span>
								<span class="game-count">12</span>
							</a>
						</div>
						<div class="tab-item ">
							<a class="btn btn-link tabs-link" data-toggle="tab" data-identifier=".2dlotto"
								href="#tab2dlotto">
								<span class="game-icon icon-2dlotto"><img
										src="https://www.bet3up.com/public/uploads/games/2dlotto.png" width="33"
										alt="PCSO 2D LOTTO" /></span>
								<span class="game-text">PCSO 2D LOTTO</span>
								<span class="game-count">7</span>
							</a>
						</div>
						<div class="tab-item ">
							<a class="btn btn-link tabs-link" data-toggle="tab" data-identifier=".3dlotto"
								href="#tab3dlotto">
								<span class="game-icon icon-3dlotto"><img
										src="https://www.bet3up.com/public/uploads/games/3dlotto.png" width="33"
										alt="PCSO 3D LOTTO" /></span>
								<span class="game-text">PCSO 3D LOTTO</span>
								<span class="game-count">10</span>
							</a>
						</div>
						<div class="tab-item ">
							<a class="btn btn-link tabs-link" data-toggle="tab" data-identifier=".toto4d"
								href="#tabtoto4d">
								<span class="game-icon icon-toto4d"><img
										src="https://www.bet3up.com/public/uploads/games/toto4d.png" width="33"
										alt="Toto 4D" /></span>
								<span class="game-text">Toto 4D</span>
								<span class="game-count">0</span>
							</a>
						</div>
						<div class="tab-item ">
							<a class="btn btn-link tabs-link" data-toggle="tab" data-identifier=".toto6d"
								href="#tabtoto6d">
								<span class="game-icon icon-toto6d"><img
										src="https://www.bet3up.com/public/uploads/games/toto6d.png" width="33"
										alt="Toto 6D" /></span>
								<span class="game-text">Toto 6D</span>
								<span class="game-count">0</span>
							</a>
						</div>
						<div class="tab-item ">
							<a class="btn btn-link tabs-link" data-toggle="tab" data-identifier=".bingolotto"
								href="#tabbingolotto">
								<span class="game-icon icon-bingolotto"><img
										src="https://www.bet3up.com/public/uploads/games/bingo3d.png" width="33"
										alt="BINGO LOTTO" /></span>
								<span class="game-text">BINGO LOTTO</span>
								<span class="game-count">0</span>
							</a>
						</div>
						<div class="tab-item ">
							<a class="btn btn-link tabs-link" data-toggle="tab" data-identifier=".pick3"
								href="#tabpick3">
								<span class="game-icon icon-pick3"><img
										src="https://www.bet3up.com/public/uploads/games/pick3.png" width="33"
										alt="Pick 3" /></span>
								<span class="game-text">Pick 3</span>
								<span class="game-count">0</span>
							</a>
						</div>
						<div class="tab-item ">
							<a class="btn btn-link tabs-link" data-toggle="tab" data-identifier=".boxing"
								href="#tabboxing">
								<span class="game-icon icon-boxing"><img
										src="https://www.bet3up.com/public/uploads/games/boxing.png" width="33"
										alt="Boxing" /></span>
								<span class="game-text">Boxing</span>
								<span class="game-count">0</span>
							</a>
						</div>
					</div>
					<div class="games-filters-info bg-primary">All Games (0)</div>
					<div class="tabs-game-contents">
						<div id="tabthailottery" class="tab-game-content thailottery" data-category="transition">
							<div class="game-content-title title-thailottery">
								<div class="game-winning-info">
									<h2 class="game-winning-header">Government Thai Lottery</h2>
									<div class="game-winning-numbers-wrapper">
										<div class="game-winning-numbers-col game-thailottery">
											<div class="game-winning-numbers-title">
												PRIZE RESULT<br>
												<time datetime="11/01/2021">(11/01/2021)</time>
											</div>
											<div class="game-numbers">
												<span><i class="gr-item-1">0</i></span>
												<span><i class="gr-item-2">4</i></span>
												<span><i class="gr-item-3">5</i></span>
												<span><i class="gr-item-4">0</i></span>
												<span><i class="gr-item-5">3</i></span>
												<span><i class="gr-item-6">7</i></span>
											</div>
										</div>
										<div class="game-winning-numbers-col game-thailottery">
											<div class="game-winning-numbers-title">
												DOWN GAME<br>
												<time datetime="11/01/2021">(11/01/2021)</time>
											</div>
											<div class="game-numbers">
												<span><i class="gr-item-1">9</i></span>
												<span><i class="gr-item-2">5</i></span>
											</div>
										</div>
									</div>
								</div>
								<div class="game-winning-next-draw game-thailottery">
									<div class="game-winning-next-draw-title">NEXT DRAW</div>
									<div class="game-winning-next-draw-date">
										<time datetime="Tuesday 11/16/2021">TUESDAY 11/16/2021</time>
										<div class="game-winning-next-draw-time">MIDDAY DRAW</div>
									</div>
								</div>
							</div>
							<div class="game-content content-thailottery">
								<div class="sport-table">
									<ul class="nav nav-tabs nav-justified tabs-thailottery">
										<li class="nav-item"><a class="nav-link" data-toggle="tab"
												data-isotopetab="#tabthailottery"
												href="#tabTLWinningNumbersthailottery">Winning Numbers</a></li>
										<li class="nav-item"><a class="nav-link active" data-toggle="tab"
												data-isotopetab="#tabthailottery" href="#tabTLHowToPlaythailottery">How
												To Play</a></li>
										<li class="nav-item"><a class="nav-link" data-toggle="tab"
												data-isotopetab="#tabthailottery"
												href="#tabTLOddsAndPrizesthailottery">Odds and Prizes</a></li>
										<li class="nav-item"><a class="nav-link" data-toggle="tab"
												data-isotopetab="#tabthailottery"
												href="#tabTLWatchDrawingsthailottery">Watch Drawings</a></li>
									</ul>
									<div id="thailotteryTabContent" class="tab-content">
										<div class="tab-pane fade" id="tabTLWinningNumbersthailottery">
											<div class="row justify-content-center">
												<div class="col-12 col-sm-12 col-md-10 col-lg-9 col-xl-8">
													<div class="card card-custom card-game-results bg-white">
														<div class="card-body">
															<div id="gameResultContainer-thailottery"
																class="game-results">
																fdgdfg
															</div>
															<script>
																jQuery(document).ready(function ($) {
																	$.ajax({
																		type: 'POST',
																		url: "https://www.bet3up.com/get-schedules",
																		data: { game: 1 },
																		headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
																		success: function (data) {
																			if (data.status == 'success') {
																				if (data.html != "") {
																					$('#gameResultContainer-thailottery').empty().html(data.html);
																				} else {
																					var notFoundHtml = '<h3 class="text-danger" style="font-size:20px;padding:0 10px;text-align: center;">Data not found!</h3>';
																					$('#gameResultContainer-thailottery').empty().html(notFoundHtml);
																				}
																			}
																		}
																	});
																});
															</script>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade active show" id="tabTLHowToPlaythailottery">
											<div class="row">
												<div class="col-md-9 col-sm-12 col-xs-12">
													<div class="section-tab-content">
														<div class="card card-how-to-play">
															<div class="card-body">
																<h3>How to Play Thai Lottery</h3>
																<div class="how-to-play-video"><iframe
																		allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
																		allowfullscreen="" frameborder="0" height="480"
																		src="https://www.youtube.com/embed/PmSW-yzILnY"
																		width="760"></iframe></div>
															</div>
														</div>
													</div>
													<div class="section-tab-content">
														<h3>Thai Lottery Number Generator</h3>
														<p>Need help selecting your Thai Lottery numbers? Give our
															number generator a shot! Simply click the &#39;Generate&#39;
															button to randomly select your next set of numbers!*</p>
													</div>
													<div class="section-tab-content">
														<h3>Twice a manth, Thai Lottery with&nbsp;brings you fun,
															excitement&hellip;and prizes.</h3>
														<p>Thai Lottery numbers between 0-9.</p>
														<p>Thai Lottery with 3up drawings are held twice a month at
															approximately 02:00&nbsp;pm</p>
													</div>
													<div class="section-tab-content">
														<div class="card bg-white">
															<div class="card-body">
																<h3>&nbsp;</h3>
																<div class="row">
																	<div class="col-md-12">
																		<ol class="number-list-item">
																			<li><span class="number">1</span>Thai
																				Lottery numbers between 0-9 or select
																				Quick Pick (QP) for the Lottery computer
																				to randomly select your numbers.</li>
																			<li><span class="number">2</span>Select a
																				bet type. There are five different ways
																				to play Thai Lottery. To learn more, go
																				to the <a
																					href="https://www.bet3up.com/awards-prize">Odds
																					and Prizes</a> tab.</li>
																			<li><span class="number">3</span>Select the
																				amount you&rsquo;d like to wager from
																				$.1&nbsp;to $100.</li>
																			<li><span class="number">4</span>Select
																				which drawing you&rsquo;d like to play
																				either Midday, Evening, or both.</li>
																			<li><span class="number">5</span>Multi Draw
																				(optional): Want to place the same
																				wagers for multiple drawings?&nbsp;</li>
																		</ol>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-3 col-sm-12 col-xs-12">
													<div class="card card-howtoplay-sidebar">
														<div class="card-body">
															<div class="how-to-play-image"><a
																	href="https://www.bet3up.com/bet-submit?id=1&amp;type=lottery"><img
																		alt="Play Thai Lottery Online"
																		src="https://www.bet3up.com/public/images/play-thai-lottery-bet3up.jpg" /></a>
															</div>
															<div class="how-to-play-text">Buying Draw Games can be as
																simple as these three little
																words&hellip;<strong>&quot;Play It Again&quot;!</strong>
																<a href="https://www.bet3up.com#tabthailottery">Learn
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="tabTLOddsAndPrizesthailottery">
											<div class="card card-custom card-awards-prize">
												<div class="card-body bg-white">
													<div class="table-responsive">
														<table id="tableAwardsPrize"
															class="table table-bordered table-awards-prize mb-0">
															<thead>
																<tr>
																	<th scope="col" class="bg-light text-center">Betting
																		category</th>
																	<th scope="col" class="bg-light text-center">
																		Straight prize</th>
																	<th scope="col" class="bg-light text-center">Rumble
																		prize</th>
																	<th scope="col" class="bg-light text-center"
																		style="width:80px">Discount prize</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<th scope="row" class="bg-light text-center">3up
																		Game</th>
																	<td class="text-center"><span
																			class="unit-prize text-success">$1</span> x
																		<span class="prize-amount">400</span>
																	</td>
																	<td class="text-center">
																		<span class="unit-prize text-success">$1</span>
																		x <span class="prize-amount">80</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="prize-discount text-warning">20.00%</span>
																	</td>
																</tr>
																<tr>
																	<th scope="row" class="bg-light text-center">2up
																		Game</th>
																	<td class="text-center"><span
																			class="unit-prize text-success">$1</span> x
																		<span class="prize-amount">80</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="unit-prize unit-prize-no text-danger">NO</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="prize-discount text-warning">10.00%</span>
																	</td>
																</tr>
																<tr>
																	<th scope="row" class="bg-light text-center">Down
																		Game</th>
																	<td class="text-center"><span
																			class="unit-prize text-success">$1</span> x
																		<span class="prize-amount">80</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="unit-prize unit-prize-no text-danger">NO</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="prize-discount text-warning">10.00%</span>
																	</td>
																</tr>
																<tr>
																	<th scope="row" class="bg-light text-center">3 Font
																		Game A</th>
																	<td class="text-center"><span
																			class="unit-prize text-success">$1</span> x
																		<span class="prize-amount">200</span>
																	</td>
																	<td class="text-center">
																		<span class="unit-prize text-success">$1</span>
																		x <span class="prize-amount">50</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="prize-discount text-warning">20.00%</span>
																	</td>
																</tr>
																<tr>
																	<th scope="row" class="bg-light text-center">3 After
																		Game A</th>
																	<td class="text-center"><span
																			class="unit-prize text-success">$1</span> x
																		<span class="prize-amount">200</span>
																	</td>
																	<td class="text-center">
																		<span class="unit-prize text-success">$1</span>
																		x <span class="prize-amount">50</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="prize-discount text-warning">20.00%</span>
																	</td>
																</tr>
																<tr>
																	<th scope="row" class="bg-light text-center">3up
																		Single Digit</th>
																	<td class="text-center"><span
																			class="unit-prize text-success">$1</span> x
																		<span class="prize-amount">3</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="unit-prize unit-prize-no text-danger">NO</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="prize-discount prize-discount-no text-danger">NO</span>
																	</td>
																</tr>
																<tr>
																	<th scope="row" class="bg-light text-center">Down
																		Single Digit</th>
																	<td class="text-center"><span
																			class="unit-prize text-success">$1</span> x
																		<span class="prize-amount">3</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="unit-prize unit-prize-no text-danger">NO</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="prize-discount prize-discount-no text-danger">NO</span>
																	</td>
																</tr>
																<tr>
																	<th scope="row" class="bg-light text-center">3up
																		Game Total</th>
																	<td class="text-center"><span
																			class="unit-prize text-success">$1</span> x
																		<span class="prize-amount">3</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="unit-prize unit-prize-no text-danger">NO</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="prize-discount prize-discount-no text-danger">NO</span>
																	</td>
																</tr>
																<tr>
																	<th scope="row" class="bg-light text-center">2up
																		Game Total</th>
																	<td class="text-center"><span
																			class="unit-prize text-success">$1</span> x
																		<span class="prize-amount">3</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="unit-prize unit-prize-no text-danger">NO</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="prize-discount prize-discount-no text-danger">NO</span>
																	</td>
																</tr>
																<tr>
																	<th scope="row" class="bg-light text-center">Down
																		Game Total</th>
																	<td class="text-center"><span
																			class="unit-prize text-success">$1</span> x
																		<span class="prize-amount">3</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="unit-prize unit-prize-no text-danger">NO</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="prize-discount prize-discount-no text-danger">NO</span>
																	</td>
																</tr>
																<tr>
																	<th scope="row" class="bg-light text-center">3 Font
																		Game B</th>
																	<td class="text-center"><span
																			class="unit-prize text-success">$1</span> x
																		<span class="prize-amount">200</span>
																	</td>
																	<td class="text-center">
																		<span class="unit-prize text-success">$1</span>
																		x <span class="prize-amount">50</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="prize-discount text-warning">20.00%</span>
																	</td>
																</tr>
																<tr>
																	<th scope="row" class="bg-light text-center">3 After
																		Game B</th>
																	<td class="text-center"><span
																			class="unit-prize text-success">$1</span> x
																		<span class="prize-amount">200</span>
																	</td>
																	<td class="text-center">
																		<span class="unit-prize text-success">$1</span>
																		x <span class="prize-amount">50</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="prize-discount text-warning">20.00%</span>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="tabTLWatchDrawingsthailottery">
											<div class="section-tab-content">
												<div class="card card-watch-drawings">
													<div class="card-body">
														<h3>Draw Time: 01 November 2021</h3>
														<div class="how-to-play-video">
															<iframe width="728" height="480"
																src="https://www.youtube.com/embed/HFDOLhO-jg0"
																frameborder="0"
																allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
																allowfullscreen></iframe>
														</div>
													</div>
												</div>
												<div class="card card-watch-drawings">
													<div class="card-body">
														<h3>Draw Time: 01 August 2021</h3>
														<div class="how-to-play-video">
															<iframe width="728" height="480"
																src="https://www.youtube.com/embed/dyrhpnoCFWE"
																frameborder="0"
																allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
																allowfullscreen></iframe>
														</div>
													</div>
												</div>
												<div class="card card-watch-drawings">
													<div class="card-body">
														<h3>Draw Time: 01 June 2021</h3>
														<div class="how-to-play-video">
															<iframe width="728" height="480"
																src="https://www.youtube.com/embed/NpDBNkm-Hhc"
																frameborder="0"
																allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
																allowfullscreen></iframe>
														</div>
													</div>
												</div>
												<div class="card card-watch-drawings">
													<div class="card-body">
														<h3>Draw Time: 16 May 2021</h3>
														<div class="how-to-play-video">
															<iframe width="728" height="480"
																src="https://www.youtube.com/embed/6raygFpmj7g"
																frameborder="0"
																allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
																allowfullscreen></iframe>
														</div>
													</div>
												</div>
												<div class="card card-watch-drawings">
													<div class="card-body">
														<h3>Draw Time: 02 May 2021</h3>
														<div class="how-to-play-video">
															<iframe width="728" height="480"
																src="https://www.youtube.com/embed/iWmepQ3HiNU"
																frameborder="0"
																allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
																allowfullscreen></iframe>
														</div>
													</div>
												</div>
												<div class="card card-watch-drawings">
													<div class="card-body">
														<h3>Draw Time: 16 April 2021</h3>
														<div class="how-to-play-video">
															<iframe width="728" height="480"
																src="https://www.youtube.com/embed/uNS-PPsD-_c"
																frameborder="0"
																allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
																allowfullscreen></iframe>
														</div>
													</div>
												</div>
												<div class="card card-watch-drawings">
													<div class="card-body">
														<h3>Draw Time: 01 April 2021</h3>
														<div class="how-to-play-video">
															<iframe width="728" height="480"
																src="https://www.youtube.com/embed/8qEaQMO941E"
																frameborder="0"
																allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
																allowfullscreen></iframe>
														</div>
													</div>
												</div>
												<div class="card card-watch-drawings">
													<div class="card-body">
														<h3>Draw Time: 16 March 2021</h3>
														<div class="how-to-play-video">
															<iframe width="728" height="480"
																src="https://www.youtube.com/embed/xcoCl3U2Awo"
																frameborder="0"
																allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
																allowfullscreen></iframe>
														</div>
													</div>
												</div>
												<div class="card card-watch-drawings">
													<div class="card-body">
														<h3>Draw Time: 01 March 2021</h3>
														<div class="how-to-play-video">
															<iframe width="728" height="480"
																src="https://www.youtube.com/embed/PpVr4tLDlDA"
																frameborder="0"
																allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
																allowfullscreen></iframe>
														</div>
													</div>
												</div>
												<div class="card card-watch-drawings">
													<div class="card-body">
														<h3>Draw Time: 16 February 2021</h3>
														<div class="how-to-play-video">
															<iframe width="728" height="480"
																src="https://www.youtube.com/embed/tPEF1VMbFI4"
																frameborder="0"
																allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
																allowfullscreen></iframe>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="tab2dlotto" class="tab-game-content 2dlotto" data-category="transition">
							<div class="game-content-title title-2dlotto">
								<div class="game-winning-info">
									<h2 class="game-winning-header">The Philippine Charity Sweepstakes Office PCSO</h2>
									<div class="game-winning-numbers-wrapper">
										<div class="game-winning-numbers-col game-2dlotto">
											<div class="game-winning-numbers-title">
												2D LOTTO<br>
												<time datetime="11/10/2021">Result at 12:00 PM</time>
											</div>
											<div class="game-numbers">
												<span><i class="gr-item-1">13</i></span>
												<span><i class="gr-item-2">05</i></span>
											</div>
										</div>
										<div class="game-winning-numbers-col game-2dlotto">
											<div class="game-winning-numbers-title">
												UP CONNING<br>
												<time datetime="07:00 PM">07:00 PM</time>
											</div>
											<div class="game-numbers">
												<span><i class="gr-item-0">??</i></span>
												<span><i class="gr-item-0">??</i></span>
											</div>
										</div>
									</div>
								</div>
								<div class="game-winning-next-draw game-2dlotto">
									<div class="game-winning-numbers-title">
										EVENING DRAW<br>
										07:00 PM<br>
										<div class="game-numbers">
											<span><i class="gr-item-0">??</i></span>
											<span><i class="gr-item-0">??</i></span>
										</div>
									</div>
								</div>
							</div>
							<div class="game-content content-2dlotto">
								<div class="sport-table">
									<ul class="nav nav-tabs nav-justified tabs-2dlotto">
										<li class="nav-item"><a class="nav-link" data-toggle="tab"
												data-isotopetab="#tab2dlotto" href="#tabTLWinningNumbers2dlotto">Winning
												Numbers</a></li>
										<li class="nav-item"><a class="nav-link active" data-toggle="tab"
												data-isotopetab="#tab2dlotto" href="#tabTLHowToPlay2dlotto">How To
												Play</a></li>
										<li class="nav-item"><a class="nav-link" data-toggle="tab"
												data-isotopetab="#tab2dlotto" href="#tabTLOddsAndPrizes2dlotto">Odds and
												Prizes</a></li>
										<li class="nav-item"><a class="nav-link" data-toggle="tab"
												data-isotopetab="#tab2dlotto" href="#tabTLWatchDrawings2dlotto">Watch
												Drawings</a></li>
									</ul>
									<div id="thailotteryTabContent" class="tab-content">
										<div class="tab-pane fade" id="tabTLWinningNumbers2dlotto">
											<div class="row justify-content-center">
												<div class="col-12 col-sm-12 col-md-10 col-lg-9 col-xl-8">
													<div class="card card-custom card-game-results bg-white">
														<div class="card-body">
															<div id="gameResultContainer-2dlotto" class="game-results">
																fdgdfg
															</div>
															<script>
																jQuery(document).ready(function ($) {
																	$.ajax({
																		type: 'POST',
																		url: "https://www.bet3up.com/get-schedules",
																		data: { game: 11 },
																		headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
																		success: function (data) {
																			if (data.status == 'success') {
																				if (data.html != "") {
																					$('#gameResultContainer-2dlotto').empty().html(data.html);
																				} else {
																					var notFoundHtml = '<h3 class="text-danger" style="font-size:20px;padding:0 10px;text-align: center;">Data not found!</h3>';
																					$('#gameResultContainer-2dlotto').empty().html(notFoundHtml);
																				}
																			}
																		}
																	});
																});
															</script>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade active show" id="tabTLHowToPlay2dlotto">
											<div class="row">
												<div class="col-md-9 col-sm-12 col-xs-12">
													<div class="section-tab-content">
														<div class="card card-how-to-play">
															<div class="card-body">
																<h3>How to Play 2D Lotto Lottery</h3>
																<div class="how-to-play-video"><iframe
																		allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
																		allowfullscreen="" frameborder="0" height="480"
																		src="https://www.youtube.com/embed/hYV3d-dFXbU"
																		width="760"></iframe></div>
																<p>It&rsquo;s&nbsp;<strong>2D</strong>&nbsp;Play!
																	Learning how to play 2D Lotto is easy and gives you
																	the chance to win three times every day.</p>
																<p>How to Play</p>
																<p>Using the 2D Lotto playslip, select a set of two (2)
																	numbers from a field
																	of&nbsp;<strong>1</strong>&nbsp;to&nbsp;<strong>3</strong>.
																	You may also play the Lucky Pick
																	(<strong>LP</strong>) if you do not have any number
																	in mind. After marking your chosen numbers, mark the
																	amount that you&rsquo;re going to play for each
																	combination. Play amount varies from PhP12.00 to
																	PhP600.00 inclusive of 20% Documentary Stamp Tax
																	(DST).</p>
																<p>You can also
																	mark&nbsp;<strong>&ldquo;Rambolito&rdquo;</strong>&nbsp;if
																	you want to play the 2D Lotto System bet. The
																	minimum play amount
																	is&nbsp;<strong>12.00</strong>&nbsp;per 2-number
																	combination.</p>
																<p>In playing via Advance Draws, mark how many
																	consecutive draws you want to play in
																	the&nbsp;<strong>DRAW</strong>&nbsp;panel. You can
																	play the same numbers and play type for six (6)
																	consecutive draws. Pay&nbsp;12.00&nbsp;for each play
																	per draw.</p>
																<p>You win&nbsp;<strong>4,000.00</strong>&nbsp;for
																	every&nbsp;12.00&nbsp;play, if your selected
																	2-number combination match the winning 2-number
																	combination in exact order. If you have selected the
																	winning 2-number combination and have chosen the
																	&ldquo;Rambolito&rdquo; game, you
																	win&nbsp;<strong>2,000.00</strong>&nbsp;for
																	every&nbsp;12.00&nbsp;play.</p>
																<table>
																	<thead>
																		<tr>
																			<th>GAME TYPE</th>
																			<th>PRIZES</th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<td>Standard Play (getting&nbsp;<strong>all
																					Two</strong>&nbsp;numbers drawn in
																				exact order)</td>
																			<td>4,000.00</td>
																		</tr>
																		<tr>
																			<td>Rambolito</td>
																			<td>2,000.00</td>
																		</tr>
																	</tbody>
																</table>
																<p>Remember to win in the 2D Lotto, ALL of your numbers
																	must match ALL of the winning combination
																	in&nbsp;<strong>EXACT ORDER</strong>.</p>
																<p>Just like 3D Lotto, 2D Lotto has three (3) draws each
																	day. The first draw starts
																	at&nbsp;<strong>11AM</strong>&nbsp;followed
																	by&nbsp;<strong>4PM</strong>&nbsp;and the evening
																	draws at&nbsp;<strong>9PM</strong>.</p>
																<p><strong>Drawn daily every 11:00AM, 4:00PM and 9:00PM,
																		televised live over PTV4.</strong></p>
																<p><strong>Reminders!</strong></p>
																<ul>
																	<li>You must be 18 years old or older to buy 2D
																		Lotto Tickets or claim your 2D Lotto winnings.
																	</li>
																	<li>The&nbsp;12.00&nbsp;play amount is inclusive of
																		20% Documentary Stamp Tax (DST)</li>
																	<li>Players have the sole responsibility for
																		checking the accuracy of the data printed on
																		your ticket(s) including bet type, bet amount,
																		the draw date you want to enter and the numbers
																		you want to play.</li>
																</ul>
																<p>Where to Claim Prize/s</p>
																<table>
																	<thead>
																		<tr>
																			<th>PRIZE</th>
																			<th>VALIDATE AND CLAIM</th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<td>*&nbsp;10,001.00&nbsp;and up excluding
																				the Jackpot Prize</td>
																			<td>PCSO Branch Offices in your area or at
																				the PCSO Head Office,&nbsp;</td>
																		</tr>
																		<tr>
																			<td>24.00&nbsp;up to&nbsp;10,000.00</td>
																			<td>Any authorized Lotto outlet or at the
																				PCSO Branch Offices in your area</td>
																		</tr>
																	</tbody>
																</table>
																<p>*Prizes above&nbsp;10,000.00&nbsp;are subject to 20%
																	tax pursuant to TRAIN Law.</p>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-3 col-sm-12 col-xs-12">
													<div class="card card-howtoplay-sidebar">
														<div class="card-body">
															<div class="how-to-play-image"><a
																	href="https://www.bet3up.com/bet-submit?id=11&amp;type=lottery"><img
																		alt="Play Thai Lottery Online"
																		src="https://www.bet3up.com/public/images/play-thai-lottery-bet3up.jpg" /></a>
															</div>
															<div class="how-to-play-text">Buying Draw Games can be as
																simple as these three little
																words&hellip;<strong>&quot;Play It Again&quot;!</strong>
																<a href="https://www.bet3up.com#tab2dlotto">Learn
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="tabTLOddsAndPrizes2dlotto">
											<div class="card card-custom card-awards-prize">
												<div class="card-body bg-white">
													<div class="table-responsive">
														<table id="tableAwardsPrize"
															class="table table-bordered table-awards-prize mb-0">
															<thead>
																<tr>
																	<th scope="col" class="bg-light text-center">Betting
																		category</th>
																	<th scope="col" class="bg-light text-center">
																		Straight prize</th>
																	<th scope="col" class="bg-light text-center">Rumble
																		prize</th>
																	<th scope="col" class="bg-light text-center"
																		style="width:80px">Discount prize</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<th scope="row" class="bg-light text-center">2D
																		Lotto open</th>
																	<td class="text-center"><span
																			class="unit-prize text-success">$1</span> x
																		<span class="prize-amount">15</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="unit-prize unit-prize-no text-danger">NO</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="prize-discount prize-discount-no text-danger">NO</span>
																	</td>
																</tr>
																<tr>
																	<th scope="row" class="bg-light text-center">2D
																		Lotto close</th>
																	<td class="text-center"><span
																			class="unit-prize text-success">$1</span> x
																		<span class="prize-amount">15</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="unit-prize unit-prize-no text-danger">NO</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="prize-discount prize-discount-no text-danger">NO</span>
																	</td>
																</tr>
																<tr>
																	<th scope="row" class="bg-light text-center">2D
																		Lotto Single Digit</th>
																	<td class="text-center"><span
																			class="unit-prize text-success">$1</span> x
																		<span class="prize-amount">2</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="unit-prize unit-prize-no text-danger">NO</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="prize-discount prize-discount-no text-danger">NO</span>
																	</td>
																</tr>
																<tr>
																	<th scope="row" class="bg-light text-center">2D
																		Lotto open Digit</th>
																	<td class="text-center"><span
																			class="unit-prize text-success">$1</span> x
																		<span class="prize-amount">2</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="unit-prize unit-prize-no text-danger">NO</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="prize-discount prize-discount-no text-danger">NO</span>
																	</td>
																</tr>
																<tr>
																	<th scope="row" class="bg-light text-center">2D
																		Lotto close Digit</th>
																	<td class="text-center"><span
																			class="unit-prize text-success">$1</span> x
																		<span class="prize-amount">2</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="unit-prize unit-prize-no text-danger">NO</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="prize-discount prize-discount-no text-danger">NO</span>
																	</td>
																</tr>
																<tr>
																	<th scope="row" class="bg-light text-center">2D
																		Lotto Open Pair Total</th>
																	<td class="text-center"><span
																			class="unit-prize text-success">$1</span> x
																		<span class="prize-amount">2</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="unit-prize unit-prize-no text-danger">NO</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="prize-discount prize-discount-no text-danger">NO</span>
																	</td>
																</tr>
																<tr>
																	<th scope="row" class="bg-light text-center">2D
																		Lotto close pair Total</th>
																	<td class="text-center"><span
																			class="unit-prize text-success">$1</span> x
																		<span class="prize-amount">2</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="unit-prize unit-prize-no text-danger">NO</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="prize-discount prize-discount-no text-danger">NO</span>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="tabTLWatchDrawings2dlotto">
											<div class="section-tab-content">
												<div class="card card-watch-drawings">
													<div class="card-body">
														<h3>Draw Time: 10 November 2021</h3>
														<div class="how-to-play-video">
															<iframe width="728" height="480"
																src="https://www.youtube.com/embed/KRUF6zm7lt4"
																frameborder="0"
																allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
																allowfullscreen></iframe>
														</div>
													</div>
												</div>
												<div class="card card-watch-drawings">
													<div class="card-body">
														<h3>Draw Time: 09 November 2021</h3>
														<div class="how-to-play-video">
															<iframe width="728" height="480"
																src="https://www.youtube.com/embed/cIZafTQHAyo"
																frameborder="0"
																allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
																allowfullscreen></iframe>
														</div>
													</div>
												</div>
												<div class="card card-watch-drawings">
													<div class="card-body">
														<h3>Draw Time: 09 November 2021</h3>
														<div class="how-to-play-video">
															<iframe width="728" height="480"
																src="https://www.youtube.com/embed/KU244GTKmiU"
																frameborder="0"
																allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
																allowfullscreen></iframe>
														</div>
													</div>
												</div>
												<div class="card card-watch-drawings">
													<div class="card-body">
														<h3>Draw Time: 09 November 2021</h3>
														<div class="how-to-play-video">
															<iframe width="728" height="480"
																src="https://www.youtube.com/embed/Ccvmq6dE2HM"
																frameborder="0"
																allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
																allowfullscreen></iframe>
														</div>
													</div>
												</div>
												<div class="card card-watch-drawings">
													<div class="card-body">
														<h3>Draw Time: 08 November 2021</h3>
														<div class="how-to-play-video">
															<iframe width="728" height="480"
																src="https://www.youtube.com/embed/9QwiWtFu9U8"
																frameborder="0"
																allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
																allowfullscreen></iframe>
														</div>
													</div>
												</div>
												<div class="card card-watch-drawings">
													<div class="card-body">
														<h3>Draw Time: 08 November 2021</h3>
														<div class="how-to-play-video">
															<iframe width="728" height="480"
																src="https://www.youtube.com/embed/Ci22ZAllxMs"
																frameborder="0"
																allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
																allowfullscreen></iframe>
														</div>
													</div>
												</div>
												<div class="card card-watch-drawings">
													<div class="card-body">
														<h3>Draw Time: 08 November 2021</h3>
														<div class="how-to-play-video">
															<iframe width="728" height="480"
																src="https://www.youtube.com/embed/TdLSex04nCk"
																frameborder="0"
																allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
																allowfullscreen></iframe>
														</div>
													</div>
												</div>
												<div class="card card-watch-drawings">
													<div class="card-body">
														<h3>Draw Time: 07 November 2021</h3>
														<div class="how-to-play-video">
															<iframe width="728" height="480"
																src="https://www.youtube.com/embed/b0qaMBsB64Y"
																frameborder="0"
																allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
																allowfullscreen></iframe>
														</div>
													</div>
												</div>
												<div class="card card-watch-drawings">
													<div class="card-body">
														<h3>Draw Time: 07 November 2021</h3>
														<div class="how-to-play-video">
															<iframe width="728" height="480"
																src="https://www.youtube.com/embed/Q1uLEvfxiCo"
																frameborder="0"
																allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
																allowfullscreen></iframe>
														</div>
													</div>
												</div>
												<div class="card card-watch-drawings">
													<div class="card-body">
														<h3>Draw Time: 07 November 2021</h3>
														<div class="how-to-play-video">
															<iframe width="728" height="480"
																src="https://www.youtube.com/embed/ygTXjS6ubGY"
																frameborder="0"
																allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
																allowfullscreen></iframe>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="tab3dlotto" class="tab-game-content 3dlotto" data-category="transition">
							<div class="game-content-title title-3dlotto">
								<div class="game-winning-info">
									<h2 class="game-winning-header">The Philippine Charity Sweepstakes Office PCSO</h2>
									<div class="game-winning-numbers-wrapper">
										<div class="game-winning-numbers-col game-3dlotto">
											<div class="game-winning-numbers-title">
												3D LOTTO<br>
												<time datetime="11/10/2021">Result at 12:00 PM</time>
											</div>
											<div class="game-numbers">
												<span><i class="gr-item-1">1</i></span>
												<span><i class="gr-item-2">9</i></span>
												<span><i class="gr-item-3">0</i></span>
											</div>
										</div>
										<div class="game-winning-numbers-col game-3dlotto">
											<div class="game-winning-numbers-title">
												UP CONNING<br>
												<time datetime="07:00 PM">07:00 PM</time>
											</div>
											<div class="game-numbers">
												<span><i class="gr-item-0">?</i></span>
												<span><i class="gr-item-0">?</i></span>
												<span><i class="gr-item-0">?</i></span>
											</div>
										</div>
									</div>
								</div>
								<div class="game-winning-next-draw game-3dlotto">
									<div class="game-winning-numbers-title">
										EVENING DRAW<br>
										07:00 PM<br>
										<div class="game-numbers">
											<span><i class="gr-item-0">?</i></span>
											<span><i class="gr-item-0">?</i></span>
											<span><i class="gr-item-0">?</i></span>
										</div>
									</div>
								</div>
							</div>
							<div class="game-content content-3dlotto">
								<div class="sport-table">
									<ul class="nav nav-tabs nav-justified tabs-3dlotto">
										<li class="nav-item"><a class="nav-link" data-toggle="tab"
												data-isotopetab="#tab3dlotto" href="#tabTLWinningNumbers3dlotto">Winning
												Numbers</a></li>
										<li class="nav-item"><a class="nav-link active" data-toggle="tab"
												data-isotopetab="#tab3dlotto" href="#tabTLHowToPlay3dlotto">How To
												Play</a></li>
										<li class="nav-item"><a class="nav-link" data-toggle="tab"
												data-isotopetab="#tab3dlotto" href="#tabTLOddsAndPrizes3dlotto">Odds and
												Prizes</a></li>
										<li class="nav-item"><a class="nav-link" data-toggle="tab"
												data-isotopetab="#tab3dlotto" href="#tabTLWatchDrawings3dlotto">Watch
												Drawings</a></li>
									</ul>
									<div id="thailotteryTabContent" class="tab-content">
										<div class="tab-pane fade" id="tabTLWinningNumbers3dlotto">
											<div class="row justify-content-center">
												<div class="col-12 col-sm-12 col-md-10 col-lg-9 col-xl-8">
													<div class="card card-custom card-game-results bg-white">
														<div class="card-body">
															<div id="gameResultContainer-3dlotto" class="game-results">
																fdgdfg
															</div>
															<script>
																jQuery(document).ready(function ($) {
																	$.ajax({
																		type: 'POST',
																		url: "https://www.bet3up.com/get-schedules",
																		data: { game: 12 },
																		headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
																		success: function (data) {
																			if (data.status == 'success') {
																				if (data.html != "") {
																					$('#gameResultContainer-3dlotto').empty().html(data.html);
																				} else {
																					var notFoundHtml = '<h3 class="text-danger" style="font-size:20px;padding:0 10px;text-align: center;">Data not found!</h3>';
																					$('#gameResultContainer-3dlotto').empty().html(notFoundHtml);
																				}
																			}
																		}
																	});
																});
															</script>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade active show" id="tabTLHowToPlay3dlotto">
											<div class="row">
												<div class="col-md-9 col-sm-12 col-xs-12">
													<div class="section-tab-content">
														<div class="card card-how-to-play">
															<div class="card-body">
																<h3>How to Play 3D Lotto Lottery</h3>
																<div class="how-to-play-video"><iframe
																		allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
																		allowfullscreen="" frameborder="0" height="480"
																		src="https://www.youtube.com/embed/ByVK8Rd7UTY"
																		width="760"></iframe></div>
															</div>
															<p>Playing&nbsp;<strong>3D</strong>&nbsp;Lotto is easy. You
																can win a First Prize
																of&nbsp;<strong>4,500.00</strong>&nbsp;for
																every&nbsp;<strong>12.00</strong>&nbsp;that you play or
																increase your chances of winning with
																a&nbsp;<strong>Rambolito</strong>&nbsp;play.</p>
															<p>How to Play</p>
															<p>Simply select your lucky numbers and play it your way,
																three (3) times a day. First draw starts
																at&nbsp;<strong>11AM</strong>&nbsp;followed
																by&nbsp;<strong>4PM</strong>&nbsp;and the evening draws
																at&nbsp;<strong>9PM</strong>.</p>
															<p>Select one number
																(from&nbsp;<strong>0</strong>&nbsp;to&nbsp;<strong>9</strong>)
																from each column for a total of three digits, or mark
																the Lucky Pick (<strong>LP</strong>) box and let the
																terminal randomly pick your number.</p>
															<p>You may also want to play
																the&nbsp;<strong>Rambolito</strong>. Select a 3-digit
																number combination and the system will automatically
																permutate and generate all its possible combinations. If
																the selected&nbsp;<strong>3-digit combination has no
																	repeating digits</strong>, e.g.123, the number
																of&nbsp;<strong>combinations generated will be six
																	(6)</strong>. If the selected&nbsp;<strong>3-digit
																	combination has two (2) repeating digits</strong>,
																e.g. 122, the number of&nbsp;<strong>combinations
																	generated will be three (3)</strong>. Lucky Pick is
																also available in the Rambolito System Play, but the
																option of repeating digits is not applicable.</p>
															<p>Matching all your numbers with the winning combination in
																exact order gives
																you&nbsp;<strong>4,500.00</strong>&nbsp;for
																every&nbsp;<strong>12.00</strong>&nbsp;play. If you have
																picked the correct 3-number and have chosen the
																&ldquo;Rambolito&rdquo; game, you win:</p>
															<table>
																<thead>
																	<tr>
																		<th>RAMBOLITO SELECTION</th>
																		<th>NO. OF COMBINATION</th>
																		<th>PRIZES<br />
																			(per&nbsp;12.00&nbsp;play)</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>3 different digits</td>
																		<td>6</td>
																		<td>750.00</td>
																	</tr>
																	<tr>
																		<td>1 pair of the same digit and 2 different
																			digits</td>
																		<td>3</td>
																		<td>1,500.00</td>
																	</tr>
																</tbody>
															</table>
															<p>Results of the 3D Lotto draws are broadcasted over PTV4
																at 11:00AM, 4:00PM and 9:00PM.</p>
															<p><strong>Drawn daily every 11:00AM, 4:00PM and 9:00PM,
																	televised live over PTV4.</strong></p>
															<p><strong>Reminders!</strong></p>
															<ul>
																<li>You must be 18 years old or older to buy 3D Tickets
																	or claim your 3D winnings.</li>
																<li>The&nbsp;12.00&nbsp;play amount is inclusive of 20%
																	Documentary Stamp Tax (DST)</li>
																<li>Players have the sole responsibility for checking
																	the accuracy of the data printed on your ticket(s)
																	including bet type, bet amount, the draw date you
																	want to enter and the numbers you want to play.</li>
															</ul>
															<p>Where to Claim Prize/s</p>
															<table>
																<thead>
																	<tr>
																		<th>PRIZE</th>
																		<th>VALIDATE AND CLAIM</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>*&nbsp;10,001.00&nbsp;and up excluding the
																			Jackpot Prize</td>
																		<td>PCSO Branch Offices in your area or at the
																			PCSO Main Office, 2nd Floor</td>
																	</tr>
																	<tr>
																		<td>24.00&nbsp;up to&nbsp;10,000.00</td>
																		<td>Any authorized Lotto outlet or at the PCSO
																			Branch Offices in your area</td>
																	</tr>
																</tbody>
															</table>
															<p>*Prizes above&nbsp;10,000.00&nbsp;are subject to 20% tax
																pursuant to TRAIN Law.</p>
															<p>&nbsp;</p>
														</div>
													</div>
													<p>&nbsp;</p>
												</div>
												<div class="col-md-3 col-sm-12 col-xs-12">
													<div class="card card-howtoplay-sidebar">
														<div class="card-body">
															<div class="how-to-play-image"><a
																	href="https://www.bet3up.com/bet-submit?id=12&amp;type=lottery"><img
																		alt="Play Thai Lottery Online"
																		src="https://www.bet3up.com/public/images/play-thai-lottery-bet3up.jpg" /></a>
															</div>
															<div class="how-to-play-text">Buying Draw Games can be as
																simple as these three little
																words&hellip;<strong>&quot;Play It Again&quot;!</strong>
																<a href="https://www.bet3up.com#tab3dlotto">Learn
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="tabTLOddsAndPrizes3dlotto">
											<div class="card card-custom card-awards-prize">
												<div class="card-body bg-white">
													<div class="table-responsive">
														<table id="tableAwardsPrize"
															class="table table-bordered table-awards-prize mb-0">
															<thead>
																<tr>
																	<th scope="col" class="bg-light text-center">Betting
																		category</th>
																	<th scope="col" class="bg-light text-center">
																		Straight prize</th>
																	<th scope="col" class="bg-light text-center">Rumble
																		prize</th>
																	<th scope="col" class="bg-light text-center"
																		style="width:80px">Discount prize</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<th scope="row" class="bg-light text-center">3D
																		Lotto Game</th>
																	<td class="text-center"><span
																			class="unit-prize text-success">$1</span> x
																		<span class="prize-amount">100</span>
																	</td>
																	<td class="text-center">
																		<span class="unit-prize text-success">$1</span>
																		x <span class="prize-amount">50</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="prize-discount text-warning">20.00%</span>
																	</td>
																</tr>
																<tr>
																	<th scope="row" class="bg-light text-center">3D
																		Lotto Open Pair</th>
																	<td class="text-center"><span
																			class="unit-prize text-success">$1</span> x
																		<span class="prize-amount">35</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="unit-prize unit-prize-no text-danger">NO</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="prize-discount text-warning">10.00%</span>
																	</td>
																</tr>
																<tr>
																	<th scope="row" class="bg-light text-center">3D
																		Lotto Close Pair</th>
																	<td class="text-center"><span
																			class="unit-prize text-success">$1</span> x
																		<span class="prize-amount">35</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="unit-prize unit-prize-no text-danger">NO</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="prize-discount text-warning">10.00%</span>
																	</td>
																</tr>
																<tr>
																	<th scope="row" class="bg-light text-center">3D
																		Lotto Single Digit</th>
																	<td class="text-center"><span
																			class="unit-prize text-success">$1</span> x
																		<span class="prize-amount">3</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="unit-prize unit-prize-no text-danger">NO</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="prize-discount prize-discount-no text-danger">NO</span>
																	</td>
																</tr>
																<tr>
																	<th scope="row" class="bg-light text-center">3D
																		Lotto Open Digit</th>
																	<td class="text-center"><span
																			class="unit-prize text-success">$1</span> x
																		<span class="prize-amount">5</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="unit-prize unit-prize-no text-danger">NO</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="prize-discount prize-discount-no text-danger">NO</span>
																	</td>
																</tr>
																<tr>
																	<th scope="row" class="bg-light text-center">3D
																		Lotto Middle Digit</th>
																	<td class="text-center"><span
																			class="unit-prize text-success">$1</span> x
																		<span class="prize-amount">5</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="unit-prize unit-prize-no text-danger">NO</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="prize-discount prize-discount-no text-danger">NO</span>
																	</td>
																</tr>
																<tr>
																	<th scope="row" class="bg-light text-center">3D
																		Lotto Close Digit</th>
																	<td class="text-center"><span
																			class="unit-prize text-success">$1</span> x
																		<span class="prize-amount">5</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="unit-prize unit-prize-no text-danger">NO</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="prize-discount prize-discount-no text-danger">NO</span>
																	</td>
																</tr>
																<tr>
																	<th scope="row" class="bg-light text-center">3D
																		Lotto Game Total</th>
																	<td class="text-center"><span
																			class="unit-prize text-success">$1</span> x
																		<span class="prize-amount">5</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="unit-prize unit-prize-no text-danger">NO</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="prize-discount prize-discount-no text-danger">NO</span>
																	</td>
																</tr>
																<tr>
																	<th scope="row" class="bg-light text-center">3D
																		Lotto Open Pair Total</th>
																	<td class="text-center"><span
																			class="unit-prize text-success">$1</span> x
																		<span class="prize-amount">5</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="unit-prize unit-prize-no text-danger">NO</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="prize-discount prize-discount-no text-danger">NO</span>
																	</td>
																</tr>
																<tr>
																	<th scope="row" class="bg-light text-center">3D
																		Lotto Close Pair Total</th>
																	<td class="text-center"><span
																			class="unit-prize text-success">$1</span> x
																		<span class="prize-amount">5</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="unit-prize unit-prize-no text-danger">NO</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="prize-discount prize-discount-no text-danger">NO</span>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="tabTLWatchDrawings3dlotto">
											<div class="section-tab-content">
												<div class="card card-watch-drawings">
													<div class="card-body">
														<h3>Draw Time: 10 November 2021</h3>
														<div class="how-to-play-video">
															<iframe width="728" height="480"
																src="https://www.youtube.com/embed/KRUF6zm7lt4"
																frameborder="0"
																allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
																allowfullscreen></iframe>
														</div>
													</div>
												</div>
												<div class="card card-watch-drawings">
													<div class="card-body">
														<h3>Draw Time: 09 November 2021</h3>
														<div class="how-to-play-video">
															<iframe width="728" height="480"
																src="https://www.youtube.com/embed/cIZafTQHAyo"
																frameborder="0"
																allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
																allowfullscreen></iframe>
														</div>
													</div>
												</div>
												<div class="card card-watch-drawings">
													<div class="card-body">
														<h3>Draw Time: 09 November 2021</h3>
														<div class="how-to-play-video">
															<iframe width="728" height="480"
																src="https://www.youtube.com/embed/KU244GTKmiU"
																frameborder="0"
																allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
																allowfullscreen></iframe>
														</div>
													</div>
												</div>
												<div class="card card-watch-drawings">
													<div class="card-body">
														<h3>Draw Time: 09 November 2021</h3>
														<div class="how-to-play-video">
															<iframe width="728" height="480"
																src="https://www.youtube.com/embed/Ccvmq6dE2HM"
																frameborder="0"
																allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
																allowfullscreen></iframe>
														</div>
													</div>
												</div>
												<div class="card card-watch-drawings">
													<div class="card-body">
														<h3>Draw Time: 08 November 2021</h3>
														<div class="how-to-play-video">
															<iframe width="728" height="480"
																src="https://www.youtube.com/embed/9QwiWtFu9U8"
																frameborder="0"
																allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
																allowfullscreen></iframe>
														</div>
													</div>
												</div>
												<div class="card card-watch-drawings">
													<div class="card-body">
														<h3>Draw Time: 08 November 2021</h3>
														<div class="how-to-play-video">
															<iframe width="728" height="480"
																src="https://www.youtube.com/embed/Ci22ZAllxMs"
																frameborder="0"
																allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
																allowfullscreen></iframe>
														</div>
													</div>
												</div>
												<div class="card card-watch-drawings">
													<div class="card-body">
														<h3>Draw Time: 08 November 2021</h3>
														<div class="how-to-play-video">
															<iframe width="728" height="480"
																src="https://www.youtube.com/embed/TdLSex04nCk"
																frameborder="0"
																allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
																allowfullscreen></iframe>
														</div>
													</div>
												</div>
												<div class="card card-watch-drawings">
													<div class="card-body">
														<h3>Draw Time: 07 November 2021</h3>
														<div class="how-to-play-video">
															<iframe width="728" height="480"
																src="https://www.youtube.com/embed/b0qaMBsB64Y"
																frameborder="0"
																allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
																allowfullscreen></iframe>
														</div>
													</div>
												</div>
												<div class="card card-watch-drawings">
													<div class="card-body">
														<h3>Draw Time: 07 November 2021</h3>
														<div class="how-to-play-video">
															<iframe width="728" height="480"
																src="https://www.youtube.com/embed/Q1uLEvfxiCo"
																frameborder="0"
																allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
																allowfullscreen></iframe>
														</div>
													</div>
												</div>
												<div class="card card-watch-drawings">
													<div class="card-body">
														<h3>Draw Time: 07 November 2021</h3>
														<div class="how-to-play-video">
															<iframe width="728" height="480"
																src="https://www.youtube.com/embed/ygTXjS6ubGY"
																frameborder="0"
																allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
																allowfullscreen></iframe>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="tabtoto4d" class="tab-game-content toto4d" data-category="transition">
							<div class="game-content-title title-toto4d">
								<div class="game-winning-info">
									<h2 class="game-winning-header">Toto 4D</h2>
									<div class="game-winning-numbers-wrapper">
										<div class="game-winning-numbers-col game-toto4d">
											<div class="game-winning-numbers-title">
												PRIZE RESULT<br>
												<time datetime="00/00/0000">(00/00/0000)</time>
											</div>
											<div class="game-numbers">
												<span><i class="gr-item-0">0</i></span>
												<span><i class="gr-item-0">0</i></span>
												<span><i class="gr-item-0">0</i></span>
												<span><i class="gr-item-0">0</i></span>
												<span><i class="gr-item-0">0</i></span>
												<span><i class="gr-item-0">0</i></span>
											</div>
										</div>
										<div class="game-winning-numbers-col game-toto4d">
											<div class="game-winning-numbers-title">
												DOWN GAME<br>
												<time datetime="00/00/0000">(00/00/0000)</time>
											</div>
											<div class="game-numbers">
												<span><i class="gr-item-0">0</i></span>
												<span><i class="gr-item-0">0</i></span>
												<span><i class="gr-item-0">0</i></span>
											</div>
										</div>
									</div>
								</div>
								<div class="game-winning-next-draw game-toto4d">
									<div class="game-winning-next-draw-title">NEXT DRAW</div>
									<div class="game-winning-next-draw-date">
										<time datetime="DAY 00/00/0000">DAY 00/00/0000</time>
										<div class="game-winning-next-draw-time">----- DRAW</div>
									</div>
								</div>
							</div>
							<div class="game-content content-toto4d">
								<div class="sport-table">
									<ul class="nav nav-tabs nav-justified tabs-toto4d">
										<li class="nav-item"><a class="nav-link" data-toggle="tab"
												data-isotopetab="#tabtoto4d" href="#tabTLWinningNumberstoto4d">Winning
												Numbers</a></li>
										<li class="nav-item"><a class="nav-link active" data-toggle="tab"
												data-isotopetab="#tabtoto4d" href="#tabTLHowToPlaytoto4d">How To
												Play</a></li>
										<li class="nav-item"><a class="nav-link" data-toggle="tab"
												data-isotopetab="#tabtoto4d" href="#tabTLOddsAndPrizestoto4d">Odds and
												Prizes</a></li>
										<li class="nav-item"><a class="nav-link" data-toggle="tab"
												data-isotopetab="#tabtoto4d" href="#tabTLWatchDrawingstoto4d">Watch
												Drawings</a></li>
									</ul>
									<div id="thailotteryTabContent" class="tab-content">
										<div class="tab-pane fade" id="tabTLWinningNumberstoto4d">
											<div class="row justify-content-center">
												<div class="col-12 col-sm-12 col-md-10 col-lg-9 col-xl-8">
													<div class="card card-custom card-game-results bg-white">
														<div class="card-body">
															<div id="gameResultContainer-toto4d" class="game-results">
																fdgdfg
															</div>
															<script>
																jQuery(document).ready(function ($) {
																	$.ajax({
																		type: 'POST',
																		url: "https://www.bet3up.com/get-schedules",
																		data: { game: 3 },
																		headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
																		success: function (data) {
																			if (data.status == 'success') {
																				if (data.html != "") {
																					$('#gameResultContainer-toto4d').empty().html(data.html);
																				} else {
																					var notFoundHtml = '<h3 class="text-danger" style="font-size:20px;padding:0 10px;text-align: center;">Data not found!</h3>';
																					$('#gameResultContainer-toto4d').empty().html(notFoundHtml);
																				}
																			}
																		}
																	});
																});
															</script>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade active show" id="tabTLHowToPlaytoto4d">
											<div class="row">
												<div class="col-md-9 col-sm-12 col-xs-12">
													<div class="section-tab-content">
														<div class="card card-how-to-play">
															<div class="card-body">
																<h3>How to Play TOTO 4D Lottery</h3>
																<div class="how-to-play-video"><iframe
																		allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
																		allowfullscreen="" frameborder="0" height="480"
																		src="https://www.youtube.com/embed/ZoBcuLZTl1s"
																		width="760"></iframe></div>
															</div>
														</div>
													</div>
													<div class="section-tab-content">
														<div class="table-responsive">
															<table>
																<thead>
																	<tr>
																		<th scope="col">Prize</th>
																		<th scope="col">Number of 4-digit Prize Winning
																			Numbers</th>
																		<th scope="col">Prize Amount (for every $1
																			stake)</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<th scope="row">1st Prize</th>
																		<td>one number</td>
																		<td>$2,000</td>
																	</tr>
																	<tr>
																		<th scope="row">2nd Prize</th>
																		<td>one number</td>
																		<td>$1,000</td>
																	</tr>
																	<tr>
																		<th scope="row">3rd Prize</th>
																		<td>one number</td>
																		<td>$490</td>
																	</tr>
																	<tr>
																		<th scope="row">Starter Prizes</th>
																		<td>ten numbers</td>
																		<td>$250</td>
																	</tr>
																	<tr>
																		<th scope="row">Consolation Prizes</th>
																		<td>ten numbers</td>
																		<td>$60</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
													<div class="section-tab-content">
														<h3>1. Prize Amounts and Winning Numbers for 4D Game (Small)
														</h3>
														<div class="table-responsive">
															<table>
																<thead>
																	<tr>
																		<th scope="col">Prize</th>
																		<th scope="col">Number of 4-digit Winning
																			Numbers&#39;</th>
																		<th scope="col">Prize Amount (for every $1
																			stake)&#39;</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<th scope="row">1st Prize</th>
																		<td>one number</td>
																		<td>$3,000</td>
																	</tr>
																	<tr>
																		<th scope="row">2nd Prize</th>
																		<td>one number</td>
																		<td>$2,000</td>
																	</tr>
																	<tr>
																		<th scope="row">3rd Prize</th>
																		<td>one number</td>
																		<td>$800</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<p>There shall be no starter prize or consolation prize for 4D
															Game (Small).</p>
													</div>
													<div class="section-tab-content">
														<h3>Prize Structure for I Bet Entry</h3>
														<h3>2. Prize Amounts and Winning Numbers for 4D Game (Big) -
															applicable to iBet Entry</h3>
														<div class="table-responsive">
															<table>
																<thead>
																	<tr>
																		<th scope="col">Prize</th>
																		<th scope="col">Number of 4-digit Winning
																			Numbers</th>
																		<th colspan="4" scope="row">Prize Amount (for
																			every $1 stake)</th>
																	</tr>
																	<tr>
																		<th scope="col">&nbsp;</th>
																		<th scope="col">&nbsp;</th>
																		<th scope="row">4 different digits e.g. 1234
																		</th>
																		<th scope="row">2 same digits e.g. 1134</th>
																		<th scope="row">2 pairs e.g. 1122</th>
																		<th scope="row">3 same digits e.g. 1112</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<th scope="row">1st Prize</th>
																		<td>one number</td>
																		<td>$83</td>
																		<td>$166</td>
																		<td>$335</td>
																		<td>$500</td>
																	</tr>
																	<tr>
																		<th scope="row">2nd Prize</th>
																		<td>one number</td>
																		<td>$41</td>
																		<td>$83</td>
																		<td>$168</td>
																		<td>$250</td>
																	</tr>
																	<tr>
																		<th scope="row">3rd Prize</th>
																		<td>one number</td>
																		<td>$20</td>
																		<td>$40</td>
																		<td>$85</td>
																		<td>$127</td>
																	</tr>
																	<tr>
																		<th scope="row">Starter Prizes</th>
																		<td>ten numbers</td>
																		<td>$10</td>
																		<td>$20</td>
																		<td>$41</td>
																		<td>$62</td>
																	</tr>
																	<tr>
																		<th scope="row">Consolation Prizes</th>
																		<td>ten numbers</td>
																		<td>$3</td>
																		<td>$6</td>
																		<td>$10</td>
																		<td>$15</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
													<div class="section-tab-content">
														<h3>3. Prize Amounts and Winning Numbers for 4D Game (Small) -
															applicable to iBet Entry</h3>
														<div class="table-responsive">
															<table>
																<thead>
																	<tr>
																		<th scope="col">Prize</th>
																		<th scope="col">Number of 4-digit Winning
																			Numbers</th>
																		<th colspan="4" scope="row">Prize Amount (for
																			every $1 stake)</th>
																	</tr>
																	<tr>
																		<th scope="col">&nbsp;</th>
																		<th scope="col">&nbsp;</th>
																		<th scope="row">4 different digits e.g. 1234
																		</th>
																		<th scope="row">2 same digits e.g. 1134</th>
																		<th scope="row">2 pairs e.g. 1122</th>
																		<th scope="row">3 same digits e.g. 1112</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<th scope="row">1st Prize</th>
																		<td>one number</td>
																		<td>$125</td>
																		<td>$250</td>
																		<td>$500</td>
																		<td>$750</td>
																	</tr>
																	<tr>
																		<th scope="row">2nd Prize</th>
																		<td>one number</td>
																		<td>$83</td>
																		<td>$167</td>
																		<td>$333</td>
																		<td>$500</td>
																	</tr>
																	<tr>
																		<th scope="row">3rd Prize</th>
																		<td>one number</td>
																		<td>$33</td>
																		<td>$66</td>
																		<td>$133</td>
																		<td>$200</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<p>There shall be no starter prize or consolation prize for 4D
															Game (Small).</p>
													</div>
													<div class="section-tab-content">
														<p>The prizes, winning numbers and the prize amounts for the 4D
															Game under these 4D Game Rules (General), where the Company
															adopts the last four digits of the winning numbers of The
															Singapore Sweep Lottery for the Relevant Draw, shall be as
															follows:-</p>
														<h3>Prize Structure for Ordinary, 4D Roll and System Entries
														</h3>
														<h3>1. Prize Amounts and Winning Numbers for 4D Game (Big) -
															applicable to Ordinary Entry, 4D Roll Entry and System Entry
														</h3>
														<div class="table-responsive">
															<table>
																<thead>
																	<tr>
																		<th scope="col">Prize</th>
																		<th scope="col">Number of 4-digit Winning
																			Numbers</th>
																		<th scope="col">Prize Amount (for every $1
																			stake)</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<th scope="row">1st Prize</th>
																		<td>one number based on the 1st Prize winning
																			number of The Singapore Sweep Lottery</td>
																		<td>$2,000</td>
																	</tr>
																	<tr>
																		<th scope="row">2nd Prize</th>
																		<td>one number based on the 2nd Prize winning
																			number of The Singapore Sweep Lottery</td>
																		<td>$1,000</td>
																	</tr>
																	<tr>
																		<th scope="row">3rd Prize</th>
																		<td>one number based on the 3rd Prize winning
																			number of The Singapore Sweep Lottery</td>
																		<td>$490</td>
																	</tr>
																	<tr>
																		<th scope="row">Starter Prize</th>
																		<td>Ten numbers based on the Jackpot Prize
																			winning numbers of The Singapore Sweep
																			Lottery</td>
																		<td>$250</td>
																	</tr>
																	<tr>
																		<th scope="row">Consolation Prize</th>
																		<td>Ten numbers based on the Lucky Prize winning
																			numbers of The Singapore Sweep Lottery</td>
																		<td>$60</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<h3>2. Prize Amounts and Winning Numbers for 4D Game (Small) -
															applicable to Ordinary Entry, 4D Roll Entry and System Entry
														</h3>
														<div class="table-responsive">
															<table>
																<thead>
																	<tr>
																		<th scope="col">Prize</th>
																		<th scope="col">Number of 4-digit Winning
																			Numbers</th>
																		<th scope="col">Prize Amount (for every $1
																			stake)</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<th scope="row">1st Prize</th>
																		<td>one number based on the 1st Prize winning
																			number of The Singapore Sweep Lottery</td>
																		<td>$3,000</td>
																	</tr>
																	<tr>
																		<th scope="row">2nd Prize</th>
																		<td>one number based on the 2nd Prize winning
																			number of The Singapore Sweep Lottery</td>
																		<td>$2,000</td>
																	</tr>
																	<tr>
																		<th scope="row">3rd Prize</th>
																		<td>one number based on the 3rd Prize winning
																			number of The Singapore Sweep Lottery</td>
																		<td>$800</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<p>There shall be no starter prize or consolation prize for 4D
															Game (Small).</p>
														<h3>Prize Structure for iBet Entry</h3>
														<h3>3. Prize Amounts and Winning Numbers for 4D Game (Big) -
															applicable to iBet Entry</h3>
														<div class="table-responsive">
															<table>
																<thead>
																	<tr>
																		<th scope="col">Prize</th>
																		<th scope="col">Number of 4-digit Winning
																			Numbers</th>
																		<th colspan="4" scope="row">Prize Amount (for
																			every $1 stake)</th>
																	</tr>
																	<tr>
																		<th scope="col">&nbsp;</th>
																		<th scope="col">&nbsp;</th>
																		<th scope="row">4 different digits e.g. 1234
																		</th>
																		<th scope="row">2 same digits e.g. 1134</th>
																		<th scope="row">2 pairs e.g. 1122</th>
																		<th scope="row">3 same digits e.g. 1112</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<th scope="row">1st Prize</th>
																		<td>one number based on the 1st Prize winning
																			number of The Singapore Sweep Lottery</td>
																		<td>$83</td>
																		<td>$166</td>
																		<td>$335</td>
																		<td>$500</td>
																	</tr>
																	<tr>
																		<th scope="row">2nd Prize</th>
																		<td>one number based on the 2nd Prize winning
																			number of The Singapore Sweep Lottery</td>
																		<td>$41</td>
																		<td>$83</td>
																		<td>$168</td>
																		<td>$250</td>
																	</tr>
																	<tr>
																		<th scope="row">3rd Prize</th>
																		<td>one number based on the 3rd Prize winning
																			number of The Singapore Sweep Lottery</td>
																		<td>$20</td>
																		<td>$40</td>
																		<td>$85</td>
																		<td>$127</td>
																	</tr>
																	<tr>
																		<th scope="row">Starter Prizes</th>
																		<td>ten number based on the Jackpot Prize
																			winning numbers of The Singapore Sweep
																			Lottery</td>
																		<td>$10</td>
																		<td>$20</td>
																		<td>$41</td>
																		<td>$62</td>
																	</tr>
																	<tr>
																		<th scope="row">Consolation Prizes</th>
																		<td>ten number based on the Lucky Prize winning
																			numbers of The Singapore Sweep Lottery</td>
																		<td>$3</td>
																		<td>$6</td>
																		<td>$10</td>
																		<td>$15</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<h3>4. Prize Amounts and Winning Numbers for 4D Game (Small) -
															applicable to iBet Entry</h3>
														<div class="table-responsive">
															<table>
																<thead>
																	<tr>
																		<th scope="col">Prize</th>
																		<th scope="col">Number of 4-digit Winning
																			Numbers</th>
																		<th colspan="4" scope="row">Prize Amount (for
																			every $1 stake)</th>
																	</tr>
																	<tr>
																		<th scope="col">&nbsp;</th>
																		<th scope="col">&nbsp;</th>
																		<th scope="row">4 different digits e.g. 1234
																		</th>
																		<th scope="row">2 same digits e.g. 1134</th>
																		<th scope="row">2 pairs e.g. 1122</th>
																		<th scope="row">3 same digits e.g. 1112</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<th scope="row">1st Prize</th>
																		<td>one number based on the 1st Prize winning
																			number of The Singapore Sweep Lottery</td>
																		<td>$125</td>
																		<td>$250</td>
																		<td>$500</td>
																		<td>$750</td>
																	</tr>
																	<tr>
																		<th scope="row">2nd Prize</th>
																		<td>one number based on the 2nd Prize winning
																			number of The Singapore Sweep Lottery</td>
																		<td>$83</td>
																		<td>$167</td>
																		<td>$333</td>
																		<td>$500</td>
																	</tr>
																	<tr>
																		<th scope="row">3rd Prize</th>
																		<td>one number based on the 3rd Prize winning
																			number of The Singapore Sweep Lottery</td>
																		<td>$33</td>
																		<td>$66</td>
																		<td>$133</td>
																		<td>$200</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</div>
												<div class="col-md-3 col-sm-12 col-xs-12">
													<div class="card card-howtoplay-sidebar">
														<div class="card-body">
															<div class="how-to-play-image"><a
																	href="https://www.bet3up.com/bet-submit?id=3&amp;type=lottery"><img
																		alt="Play Thai Lottery Online"
																		src="https://www.bet3up.com/public/images/play-thai-lottery-bet3up.jpg" /></a>
															</div>
															<div class="how-to-play-text">Buying Draw Games can be as
																simple as these three little
																words&hellip;<strong>&quot;Play It Again&quot;!</strong>
																<a href="https://www.bet3up.com#tabtoto4d">Learn
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="tabTLOddsAndPrizestoto4d">
											<div class="card card-custom card-awards-prize">
												<div class="card-body bg-white">
													<div class="awards-prize-image"><img
															src="https://www.bet3up.com/images/awardsPrize_toto4d.jpeg"
															alt="Prize Toto 4d" /></div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="tabTLWatchDrawingstoto4d">
											<div class="section-tab-content">
												<div class="card card-watch-drawings">
													<div class="card-body">
														<h3>Draw Time: 30 November 2020</h3>
														<div class="how-to-play-video">
															<iframe width="728" height="480"
																src="https://www.youtube.com/embed/ZoBcuLZTl1s"
																frameborder="0"
																allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
																allowfullscreen></iframe>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="tabtoto6d" class="tab-game-content toto6d" data-category="transition">
							<div class="game-content-title title-toto6d">
								<div class="game-winning-info">
									<h2 class="game-winning-header">Toto 6D</h2>
									<div class="game-winning-numbers-wrapper">
										<div class="game-winning-numbers-col game-toto6d">
											<div class="game-winning-numbers-title">
												PRIZE RESULT<br>
												<time datetime="00/00/0000">(00/00/0000)</time>
											</div>
											<div class="game-numbers">
												<span><i class="gr-item-0">0</i></span>
												<span><i class="gr-item-0">0</i></span>
												<span><i class="gr-item-0">0</i></span>
												<span><i class="gr-item-0">0</i></span>
												<span><i class="gr-item-0">0</i></span>
												<span><i class="gr-item-0">0</i></span>
											</div>
										</div>
										<div class="game-winning-numbers-col game-toto6d">
											<div class="game-winning-numbers-title">
												DOWN GAME<br>
												<time datetime="00/00/0000">(00/00/0000)</time>
											</div>
											<div class="game-numbers">
												<span><i class="gr-item-0">0</i></span>
												<span><i class="gr-item-0">0</i></span>
												<span><i class="gr-item-0">0</i></span>
											</div>
										</div>
									</div>
								</div>
								<div class="game-winning-next-draw game-toto6d">
									<div class="game-winning-next-draw-title">NEXT DRAW</div>
									<div class="game-winning-next-draw-date">
										<time datetime="DAY 00/00/0000">DAY 00/00/0000</time>
										<div class="game-winning-next-draw-time">----- DRAW</div>
									</div>
								</div>
							</div>
							<div class="game-content content-toto6d">
								<div class="sport-table">
									<ul class="nav nav-tabs nav-justified tabs-toto6d">
										<li class="nav-item"><a class="nav-link" data-toggle="tab"
												data-isotopetab="#tabtoto6d" href="#tabTLWinningNumberstoto6d">Winning
												Numbers</a></li>
										<li class="nav-item"><a class="nav-link active" data-toggle="tab"
												data-isotopetab="#tabtoto6d" href="#tabTLHowToPlaytoto6d">How To
												Play</a></li>
										<li class="nav-item"><a class="nav-link" data-toggle="tab"
												data-isotopetab="#tabtoto6d" href="#tabTLOddsAndPrizestoto6d">Odds and
												Prizes</a></li>
										<li class="nav-item"><a class="nav-link" data-toggle="tab"
												data-isotopetab="#tabtoto6d" href="#tabTLWatchDrawingstoto6d">Watch
												Drawings</a></li>
									</ul>
									<div id="thailotteryTabContent" class="tab-content">
										<div class="tab-pane fade" id="tabTLWinningNumberstoto6d">
											<div class="row justify-content-center">
												<div class="col-12 col-sm-12 col-md-10 col-lg-9 col-xl-8">
													<div class="card card-custom card-game-results bg-white">
														<div class="card-body">
															<div id="gameResultContainer-toto6d" class="game-results">
																fdgdfg
															</div>
															<script>
																jQuery(document).ready(function ($) {
																	$.ajax({
																		type: 'POST',
																		url: "https://www.bet3up.com/get-schedules",
																		data: { game: 4 },
																		headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
																		success: function (data) {
																			if (data.status == 'success') {
																				if (data.html != "") {
																					$('#gameResultContainer-toto6d').empty().html(data.html);
																				} else {
																					var notFoundHtml = '<h3 class="text-danger" style="font-size:20px;padding:0 10px;text-align: center;">Data not found!</h3>';
																					$('#gameResultContainer-toto6d').empty().html(notFoundHtml);
																				}
																			}
																		}
																	});
																});
															</script>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade active show" id="tabTLHowToPlaytoto6d">
											<div class="row">
												<div class="col-md-9 col-sm-12 col-xs-12">
													<div class="section-tab-content">
														<div class="card card-how-to-play">
															<div class="card-body">
																<p>Comming soon...</p>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-3 col-sm-12 col-xs-12">
													<div class="card card-howtoplay-sidebar">
														<div class="card-body">
															<div class="how-to-play-image"><a
																	href="https://www.bet3up.com/bet-submit?id=4&type=lottery"><img
																		src="https://www.bet3up.com/public/images/play-thai-lottery-bet3up.jpg"
																		alt="Play Thai Lottery Online" /></a></div>
															<div class="how-to-play-text">Buying Draw Games can be as
																simple as these three little words…<strong>"Play It
																	Again"!</strong> <a
																	href="https://www.bet3up.com#tabtoto6d">Learn
																	More</a></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="tabTLOddsAndPrizestoto6d">
											<div class="card card-custom card-awards-prize">
												<div class="card-body bg-white">
													<div class="awards-prize-image"><img
															src="https://www.bet3up.com/images/awardsPrize_toto6d.jpeg"
															alt="Prize Toto 4d" /></div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="tabTLWatchDrawingstoto6d">
											<div class="section-tab-content">
												<h3 class="text-danger"
													style="font-size:20px;padding:0 10px;text-align: center;">Watch
													drawings not found!</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="tabbingolotto" class="tab-game-content bingolotto" data-category="transition">
							<div class="game-content-title title-bingolotto">
								<div class="game-winning-info">
									<h2 class="game-winning-header">Bingo 2D Three Times a Day</h2>
									<div class="game-winning-numbers-wrapper">
										<div class="game-winning-numbers-col game-bingolotto">
											<div class="game-winning-numbers-title">
												BINGO LOTTO<br>
												<time datetime="07/26/2021">Result at 03:00 PM</time>
											</div>
											<div class="game-numbers">
												<span><i class="gr-item-1">88</i></span>
												<span><i class="gr-item-2">49</i></span>
											</div>
										</div>
										<div class="game-winning-numbers-col game-bingolotto">
											<div class="game-winning-numbers-title">
												UP CONNING<br>
												<time datetime="00:00 AM">02:00 PM</time>
											</div>
											<div class="game-numbers">
												<span><i class="gr-item-0">??</i></span>
												<span><i class="gr-item-0">??</i></span>
											</div>
										</div>
									</div>
								</div>
								<div class="game-winning-next-draw game-bingolotto">
									<div class="game-winning-numbers-title">
										EVENING DRAW<br>
										07:00 PM<br>
										<div class="game-numbers">
											<span><i class="gr-item-0">??</i></span>
											<span><i class="gr-item-0">??</i></span>
										</div>
									</div>
								</div>
							</div>
							<div class="game-content content-bingolotto">
								<div class="sport-table">
									<ul class="nav nav-tabs nav-justified tabs-bingolotto">
										<li class="nav-item"><a class="nav-link" data-toggle="tab"
												data-isotopetab="#tabbingolotto"
												href="#tabTLWinningNumbersbingolotto">Winning Numbers</a></li>
										<li class="nav-item"><a class="nav-link active" data-toggle="tab"
												data-isotopetab="#tabbingolotto" href="#tabTLHowToPlaybingolotto">How To
												Play</a></li>
										<li class="nav-item"><a class="nav-link" data-toggle="tab"
												data-isotopetab="#tabbingolotto"
												href="#tabTLOddsAndPrizesbingolotto">Odds and Prizes</a></li>
										<li class="nav-item"><a class="nav-link" data-toggle="tab"
												data-isotopetab="#tabbingolotto"
												href="#tabTLWatchDrawingsbingolotto">Watch Drawings</a></li>
									</ul>
									<div id="thailotteryTabContent" class="tab-content">
										<div class="tab-pane fade" id="tabTLWinningNumbersbingolotto">
											<div class="row justify-content-center">
												<div class="col-12 col-sm-12 col-md-10 col-lg-9 col-xl-8">
													<div class="card card-custom card-game-results bg-white">
														<div class="card-body">
															<div id="gameResultContainer-bingolotto"
																class="game-results">
																fdgdfg
															</div>
															<script>
																jQuery(document).ready(function ($) {
																	$.ajax({
																		type: 'POST',
																		url: "https://www.bet3up.com/get-schedules",
																		data: { game: 7 },
																		headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
																		success: function (data) {
																			if (data.status == 'success') {
																				if (data.html != "") {
																					$('#gameResultContainer-bingolotto').empty().html(data.html);
																				} else {
																					var notFoundHtml = '<h3 class="text-danger" style="font-size:20px;padding:0 10px;text-align: center;">Data not found!</h3>';
																					$('#gameResultContainer-bingolotto').empty().html(notFoundHtml);
																				}
																			}
																		}
																	});
																});
															</script>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade active show" id="tabTLHowToPlaybingolotto">
											<div class="row">
												<div class="col-md-9 col-sm-12 col-xs-12">
													<div class="section-tab-content">
														<div class="card card-how-to-play">
															<div class="card-body">
																<p>Comming soon...</p>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-3 col-sm-12 col-xs-12">
													<div class="card card-howtoplay-sidebar">
														<div class="card-body">
															<div class="how-to-play-image"><a
																	href="https://www.bet3up.com/bet-submit?id=7&amp;type=lottery"><img
																		alt="Play Thai Lottery Online"
																		src="https://www.bet3up.com/public/images/play-thai-lottery-bet3up.jpg" /></a>
															</div>
															<div class="how-to-play-text">Buying Draw Games can be as
																simple as these three little
																words&hellip;<strong>&quot;Play It Again&quot;!</strong>
																<a href="https://www.bet3up.com#tabbingo3d">Learn
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="tabTLOddsAndPrizesbingolotto">
											<div class="card card-custom card-awards-prize">
												<div class="card-body bg-white">
													<div class="table-responsive">
														<table id="tableAwardsPrize"
															class="table table-bordered table-awards-prize mb-0">
															<thead>
																<tr>
																	<th scope="col" class="bg-light text-center">Betting
																		category</th>
																	<th scope="col" class="bg-light text-center">
																		Straight prize</th>
																	<th scope="col" class="bg-light text-center">Rumble
																		prize</th>
																	<th scope="col" class="bg-light text-center"
																		style="width:80px">Discount prize</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<th scope="row" class="bg-light text-center">Bingo
																		Lotto Open Game</th>
																	<td class="text-center"><span
																			class="unit-prize text-success">$1</span> x
																		<span class="prize-amount">35</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="unit-prize unit-prize-no text-danger">NO</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="prize-discount prize-discount-no text-danger">NO</span>
																	</td>
																</tr>
																<tr>
																	<th scope="row" class="bg-light text-center">Bingo
																		Lotto Close Game</th>
																	<td class="text-center"><span
																			class="unit-prize text-success">$1</span> x
																		<span class="prize-amount">35</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="unit-prize unit-prize-no text-danger">NO</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="prize-discount prize-discount-no text-danger">NO</span>
																	</td>
																</tr>
																<tr>
																	<th scope="row" class="bg-light text-center">Bingo
																		Lotto Single Digit</th>
																	<td class="text-center"><span
																			class="unit-prize text-success">$1</span> x
																		<span class="prize-amount">2</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="unit-prize unit-prize-no text-danger">NO</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="prize-discount prize-discount-no text-danger">NO</span>
																	</td>
																</tr>
																<tr>
																	<th scope="row" class="bg-light text-center">Bingo
																		Lotto Open Digit</th>
																	<td class="text-center"><span
																			class="unit-prize text-success">$1</span> x
																		<span class="prize-amount">3</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="unit-prize unit-prize-no text-danger">NO</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="prize-discount prize-discount-no text-danger">NO</span>
																	</td>
																</tr>
																<tr>
																	<th scope="row" class="bg-light text-center">Bingo
																		Lotto Close Digit</th>
																	<td class="text-center"><span
																			class="unit-prize text-success">$1</span> x
																		<span class="prize-amount">3</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="unit-prize unit-prize-no text-danger">NO</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="prize-discount prize-discount-no text-danger">NO</span>
																	</td>
																</tr>
																<tr>
																	<th scope="row" class="bg-light text-center">Bingo
																		Lotto Open Pair Total</th>
																	<td class="text-center"><span
																			class="unit-prize text-success">$1</span> x
																		<span class="prize-amount">3</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="unit-prize unit-prize-no text-danger">NO</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="prize-discount prize-discount-no text-danger">NO</span>
																	</td>
																</tr>
																<tr>
																	<th scope="row" class="bg-light text-center">Bingo
																		Lotto Close Pair Total</th>
																	<td class="text-center"><span
																			class="unit-prize text-success">$1</span> x
																		<span class="prize-amount">3</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="unit-prize unit-prize-no text-danger">NO</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="prize-discount prize-discount-no text-danger">NO</span>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="tabTLWatchDrawingsbingolotto">
											<div class="section-tab-content">
												<h3 class="text-danger"
													style="font-size:20px;padding:0 10px;text-align: center;">Watch
													drawings not found!</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="tabpick3" class="tab-game-content pick3" data-category="transition">
							<div class="game-content-title title-pick3">
								<div class="game-winning-info">
									<h2 class="game-winning-header">Pick 3 With Fireball</h2>
									<div class="game-winning-numbers-wrapper">
										<div class="game-winning-numbers-col game-pick3">
											<div class="game-winning-numbers-title">
												PRIZE RESULT<br>
												<time datetime="00/00/0000">(00/00/0000)</time>
											</div>
											<div class="game-numbers">
												<span><i class="gr-item-0">0</i></span>
												<span><i class="gr-item-0">0</i></span>
												<span><i class="gr-item-0">0</i></span>
												<span><i class="gr-item-0">0</i></span>
												<span><i class="gr-item-0">0</i></span>
												<span><i class="gr-item-0">0</i></span>
											</div>
										</div>
										<div class="game-winning-numbers-col game-pick3">
											<div class="game-winning-numbers-title">
												DOWN GAME<br>
												<time datetime="00/00/0000">(00/00/0000)</time>
											</div>
											<div class="game-numbers">
												<span><i class="gr-item-0">0</i></span>
												<span><i class="gr-item-0">0</i></span>
												<span><i class="gr-item-0">0</i></span>
											</div>
										</div>
									</div>
								</div>
								<div class="game-winning-next-draw game-pick3">
									<div class="game-winning-next-draw-title">NEXT DRAW</div>
									<div class="game-winning-next-draw-date">
										<time datetime="DAY 00/00/0000">DAY 00/00/0000</time>
										<div class="game-winning-next-draw-time">----- DRAW</div>
									</div>
								</div>
							</div>
							<div class="game-content content-pick3">
								<div class="sport-table">
									<ul class="nav nav-tabs nav-justified tabs-pick3">
										<li class="nav-item"><a class="nav-link" data-toggle="tab"
												data-isotopetab="#tabpick3" href="#tabTLWinningNumberspick3">Winning
												Numbers</a></li>
										<li class="nav-item"><a class="nav-link active" data-toggle="tab"
												data-isotopetab="#tabpick3" href="#tabTLHowToPlaypick3">How To Play</a>
										</li>
										<li class="nav-item"><a class="nav-link" data-toggle="tab"
												data-isotopetab="#tabpick3" href="#tabTLOddsAndPrizespick3">Odds and
												Prizes</a></li>
										<li class="nav-item"><a class="nav-link" data-toggle="tab"
												data-isotopetab="#tabpick3" href="#tabTLWatchDrawingspick3">Watch
												Drawings</a></li>
									</ul>
									<div id="thailotteryTabContent" class="tab-content">
										<div class="tab-pane fade" id="tabTLWinningNumberspick3">
											<div class="row justify-content-center">
												<div class="col-12 col-sm-12 col-md-10 col-lg-9 col-xl-8">
													<div class="card card-custom card-game-results bg-white">
														<div class="card-body">
															<div id="gameResultContainer-pick3" class="game-results">
																fdgdfg
															</div>
															<script>
																jQuery(document).ready(function ($) {
																	$.ajax({
																		type: 'POST',
																		url: "https://www.bet3up.com/get-schedules",
																		data: { game: 2 },
																		headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
																		success: function (data) {
																			if (data.status == 'success') {
																				if (data.html != "") {
																					$('#gameResultContainer-pick3').empty().html(data.html);
																				} else {
																					var notFoundHtml = '<h3 class="text-danger" style="font-size:20px;padding:0 10px;text-align: center;">Data not found!</h3>';
																					$('#gameResultContainer-pick3').empty().html(notFoundHtml);
																				}
																			}
																		}
																	});
																});
															</script>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade active show" id="tabTLHowToPlaypick3">
											<div class="row">
												<div class="col-md-9 col-sm-12 col-xs-12">
													<div class="section-tab-content">
														<div class="card card-how-to-play">
															<div class="card-body">
																<h3>How to Play PICK3 Lottery</h3>
																<div class="how-to-play-video"><iframe
																		allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
																		allowfullscreen="" frameborder="0" height="480"
																		src="https://www.youtube.com/embed/M-8-XJlSXrA"
																		width="760"></iframe></div>
															</div>
														</div>
													</div>
													<div class="section-tab-content">
														<h3>Thai Lottery Number Generator</h3>
														<p>Need help selecting your Thai Lottery numbers? Give our
															number generator a shot! Simply click the &#39;Generate&#39;
															button to randomly select your next set of numbers!*</p>
													</div>
													<div class="section-tab-content">
														<h3>Twice a day, Thai Lottery with FIREBALL brings you fun,
															excitement&hellip;and prizes.</h3>
														<p>Pick three(3) numbers between 0-9.</p>
														<p>Thai Lottery with FIREBALL drawings are held every day at
															approximately 12:59 pm &amp; 10:57 pm.</p>
														<p>Purchase your Thai Lottery tickets prior to 12:53 pm for the
															Midday drawings &amp; 10:53 pm for the Evening drawings.</p>
														<p>Enhance your Thai Lottery play with the optional FIREBALL.
														</p>
													</div>
													<div class="section-tab-content">
														<div class="card bg-white">
															<div class="card-body">
																<h3>Twice a day, Thai Lottery with FIREBALL brings you
																	fun, excitement&hellip;and prizes.</h3>
																<div class="row">
																	<div class="col-md-12">
																		<ol class="number-list-item">
																			<li><span class="number">1</span>Pick
																				three(3) numbers between 0-9 or select
																				Quick Pick (QP) for the Lottery computer
																				to randomly select your numbers.</li>
																			<li><span class="number">2</span>Select a
																				bet type. There are five different ways
																				to play Pick-3 with FIREBALL. To learn
																				more, go to the <a href="#">Odds and
																					Prizes</a> tab.</li>
																			<li><span class="number">3</span>Select the
																				amount you&rsquo;d like to wager from
																				$0.50 to $5.</li>
																			<li><span class="number">4</span>Select
																				which drawing you&rsquo;d like to play
																				either Midday, Evening, or both.</li>
																			<li><span class="number">5</span>Multi Draw
																				(optional): Want to place the same
																				wagers for multiple drawings? Select up
																				to 7 drawings to play the same numbers
																				for up to 7 days.</li>
																			<li><span class="number">6</span>FIREBALL
																				(optional): Adding FIREBALL doubles the
																				cost of your plays.&nbsp; With FIREBALL,
																				you can replace one of the Lottery drawn
																				Pick-3 winning numbers with the FIREBALL
																				number for more ways to win. Match your
																				numbers to the new FIREBALL winning
																				combinations, win a prize!&nbsp;For more
																				information see the <a href="#"
																					target="_blank">FIREBALL FAQ.</a>
																			</li>
																			<li><span class="number">7</span>Instant
																				Match (optional): For $1 extra per play,
																				you can add <a href="#">Instant
																					Match</a> for a chance to win up to
																				$500 instantly!</li>
																			<li><span class="number">8</span>Give your
																				play slip to your retailer, or insert it
																				into a Lottery self-service machine.
																			</li>
																		</ol>
																		<p>For more information, see the Pick-3 Game
																			Rules and the Pick-3 FIREBALL Addendum
																			Rules.</p>
																		<p>As with all Lottery tickets, care should be
																			taken not to damage the ticket&#39;s
																			barcode. An unreadable barcode could delay
																			payout of a winning ticket if it cannot be
																			scanned.</p>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="section-tab-content">
														<p>*These number selections are randomly generated. Each time
															numbers are generated, a new set of numbers is chosen at
															random. These numbers are provided for entertainment
															purposes only. The numbers provided are not connected to any
															official New Jersey Lottery or Multistate Lottery drawing.
															In the event a player elects to play the numbers randomly
															generated in connection with any New Jersey Lottery or
															Multistate Lottery game, there is no guarantee that such
															player will win a prize in connection with that game.</p>
													</div>
												</div>
												<div class="col-md-3 col-sm-12 col-xs-12">
													<div class="card card-howtoplay-sidebar">
														<div class="card-body">
															<div class="how-to-play-image"><a
																	href="https://www.bet3up.com/bet-submit?id=2&amp;type=lottery"><img
																		alt="Play Thai Lottery Online"
																		src="https://www.bet3up.com/public/images/play-thai-lottery-bet3up.jpg" /></a>
															</div>
															<div class="how-to-play-text">Buying Draw Games can be as
																simple as these three little
																words&hellip;<strong>&quot;Play It Again&quot;!</strong>
																<a href="https://www.bet3up.com#tabpick3">Learn More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="tabTLOddsAndPrizespick3">
											<div class="card card-custom card-awards-prize">
												<div class="card-body bg-white">
													<div class="table-responsive">
														<table id="tableAwardsPrize"
															class="table table-bordered table-awards-prize mb-0">
															<thead>
																<tr>
																	<th scope="col" class="bg-light text-center">Betting
																		category</th>
																	<th scope="col" class="bg-light text-center">
																		Straight prize</th>
																	<th scope="col" class="bg-light text-center">Rumble
																		prize</th>
																	<th scope="col" class="bg-light text-center"
																		style="width:80px">Discount prize</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<th scope="row" class="bg-light text-center">3up
																		Game</th>
																	<td class="text-center"><span
																			class="unit-prize text-success">$1</span> x
																		<span class="prize-amount">100</span>
																	</td>
																	<td class="text-center">
																		<span class="unit-prize text-success">$1</span>
																		x <span class="prize-amount">3</span>
																	</td>
																	<td class="text-center">
																		<span
																			class="prize-discount text-warning">10.00%</span>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="tabTLWatchDrawingspick3">
											<div class="section-tab-content">
												<h3 class="text-danger"
													style="font-size:20px;padding:0 10px;text-align: center;">Watch
													drawings not found!</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="tabboxing" class="tab-game-content boxing" data-category="transition">
							<div class="game-content-title title-boxing">
								<div class="game-winning-info">
									<h2 class="game-winning-header">Comming soon...</h2>
								</div>
							</div>
							<div class="game-content content-boxing">
								<div class="section-tab-content">
									<div class="card card-how-to-play">
										<div class="card-body">
											<p>Comming soon...</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<script>
					jQuery(document).ready(function ($) {
						var $gameTabs = $('.tabs-game-contents').isotope({
							itemSelector: '.tab-game-content',
							layoutMode: 'fitRows',
							resizesContainer: false,
							getSortData: {
								name: '.game-content-title>h2',
								category: '[data-category]'
							}
						});

						//Default Game tab
						$gameTabs.isotope({ filter: '.thailottery' });
						var itemText = $('.tabs-all-games>.active').find('.game-text').text();
						var itemCount = $('.tabs-all-games>.active').find('.game-count').text();
						$('.games-filters-info').empty().html(itemText + ' (' + itemCount + ')');

						$('.tabs-all-games .slick-slide').first().find('.tab-item').addClass('active');
						$(document).on('click', '.tabs-link', function (e) {
							e.preventDefault();
							var contentId = $(this).attr('href');
							var itemText = $(this).find('.game-text').text();
							var itemCount = $(this).find('.game-count').text();
							$('.tab-item').removeClass('active');
							$(this).parent('.tab-item').toggleClass('active');

							$('.games-filters-info').empty().html(itemText + ' (' + itemCount + ')');

							var filterValue = $(this).attr('data-identifier');
							$gameTabs.isotope({ filter: filterValue });
						});

						$(document).on('click', '.nav-tabs>.nav-item>.nav-link', function (e) {
							var tabId = $(this).attr('href');
							var tabContentsHeight = $(".tabs-game-contents").outerHeight();
							var tabContentTitleHeight = $($(this).attr('data-isotopetab') + ' .game-content-title').outerHeight();
							var tabContentTabsHeight = $($(this).attr('data-isotopetab') + ' .game-content .nav-tabs').outerHeight();
							var tabContentContentHeight = $(tabId).outerHeight();
							tabContentsHeight = (tabContentTitleHeight + tabContentTabsHeight + tabContentContentHeight) + 30;
							console.log("tabContentContentHeight: " + tabContentTitleHeight);
							console.log("tabContentContentHeight: " + tabContentContentHeight);
							console.log("tabContentsHeight: " + tabContentsHeight);
							$(".tabs-game-contents").css("height", tabContentsHeight + "px");
						});
					});
				</script>
			</section>
		</main>

@endsection()