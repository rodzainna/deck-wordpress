<?php
/**
 * The template for displaying home page
 *
 * @package main
 */

get_header();

?>
<div class="container text-black py-4 relative">
			
	<div class="-mx-4">
		<masonry inline-template>
			<div v-masonry transition-duration="0.5s" 
				item-selector=".item" 
				origin-left="true"
				stamp=".stamp">
				<!-- Slider -->
				<div v-masonry-tile  class="stamp w-full lg:w-3/4 px-4 py-4">
					<banner-flickity inline-template>
						<div class="relative">

							<div class="flex absolute z-75 h-full w-full items-center">
								<button @click="previous()" class="absolute hidden md:block p-4 bg-black hover:bg-pink cursor-pointer">		
									<svg width="16px" height="13px" viewBox="0 0 16 13" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
										<g id="1.-Desktop" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<g id="2-—-Homepage-B" transform="translate(-57.000000, -415.000000)" fill="#FFFFFF" fill-rule="nonzero">
												<g id="Card" transform="translate(40.000000, 130.000000)">
													<g id="Left" transform="translate(0.000000, 266.000000)">
														<path d="M31.8080432,24.2856153 L31.8325349,24.2909729 L21.3335038,24.2909729 L24.6340157,20.98319 C24.7956354,20.8216978 24.8842903,20.6029308 24.8842903,20.3733211 C24.8842903,20.1437114 24.7956354,19.9264751 24.6340157,19.7646003 L24.1204553,19.2507848 C23.9589632,19.0892927 23.7437679,19 23.5142857,19 C23.284676,19 23.0693532,19.0886549 22.907861,19.250147 L17.2501504,24.9073473 C17.0880205,25.0694773 16.9993656,25.285438 17.0000034,25.5151752 C16.9993656,25.7461881 17.0880205,25.9622763 17.2501504,26.1241512 L22.907861,31.7818618 C23.0693532,31.9432263 23.2845485,32.0320088 23.5142857,32.0320088 C23.7437679,32.0320088 23.9589632,31.9430988 24.1204553,31.7818618 L24.6340157,31.2680463 C24.7956354,31.1068092 24.8842903,30.8914864 24.8842903,30.6618767 C24.8842903,30.4323945 24.7956354,30.2284246 24.6340157,30.06706 L21.296256,26.7407808 L31.8197788,26.7407808 C32.2926472,26.7407808 32.6899996,26.3332236 32.6899996,25.8606103 L32.6899996,25.1338956 C32.6899996,24.6612823 32.2809116,24.2856153 31.8080432,24.2856153 Z" id="Arrow"></path>
													</g>
												</g>
											</g>
										</g>
									</svg>
								</button>

								<button @click="next()" class="absolute hidden md:block p-4 bg-black hover:bg-pink pin-r cursor-pointer">					
									<svg width="16px" height="13px" viewBox="0 0 16 13" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
										<g id="1.-Desktop" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<g id="2-—-Homepage-B" transform="translate(-1019.000000, -415.000000)" fill="#FFFFFF" fill-rule="nonzero">
												<g id="Card" transform="translate(40.000000, 130.000000)">
													<g id="Right" transform="translate(962.000000, 266.000000)">
														<path d="M31.8080432,24.2856153 L31.8325349,24.2909729 L21.3335038,24.2909729 L24.6340157,20.98319 C24.7956354,20.8216978 24.8842903,20.6029308 24.8842903,20.3733211 C24.8842903,20.1437114 24.7956354,19.9264751 24.6340157,19.7646003 L24.1204553,19.2507848 C23.9589632,19.0892927 23.7437679,19 23.5142857,19 C23.284676,19 23.0693532,19.0886549 22.907861,19.250147 L17.2501504,24.9073473 C17.0880205,25.0694773 16.9993656,25.285438 17.0000034,25.5151752 C16.9993656,25.7461881 17.0880205,25.9622763 17.2501504,26.1241512 L22.907861,31.7818618 C23.0693532,31.9432263 23.2845485,32.0320088 23.5142857,32.0320088 C23.7437679,32.0320088 23.9589632,31.9430988 24.1204553,31.7818618 L24.6340157,31.2680463 C24.7956354,31.1068092 24.8842903,30.8914864 24.8842903,30.6618767 C24.8842903,30.4323945 24.7956354,30.2284246 24.6340157,30.06706 L21.296256,26.7407808 L31.8197788,26.7407808 C32.2926472,26.7407808 32.6899996,26.3332236 32.6899996,25.8606103 L32.6899996,25.1338956 C32.6899996,24.6612823 32.2809116,24.2856153 31.8080432,24.2856153 Z" id="Arrow" transform="translate(24.845000, 25.516004) scale(-1, 1) translate(-24.845000, -25.516004) "></path>
													</g>
												</g>
											</g>
										</g>
									</svg>
								</button>
							</div>

							<flickity ref="flickity" :options="flickityOptions" class="carousel">
								<a class="carousel-cell w-full" href="#">
									<div class="flex relative items-center w-full">
										<img class="w-full object-cover h-bannersm md:h-banner" alt="" src="<?php echo get_template_directory_uri(); ?>/public/images/banner.jpg">

										<div class="flex flex-wrap justify-center absolute text-center">
											<div class="bg-pink px-4 py-2 uppercase text-xs tracking-wider font-oswald text-white">Finance</div>

											<h1 class="mx-8 md:mx-32 text-white mt-12 mb-6 text-3xl lg:text-xxl w-full">This tie brand is bucking the retail apocalypse with a massive store expansion</h1>

											<p class="hidden md:block mx-32 text-base text-grey-lightest">
												There is a lot of exciting stuff going on in the stars above us that make astronomy so much fun. The truth is the universe is a constantly changing, moving.
											</p>
										</div>

										<div class="flex items-end justify-center absolute pin-b mb-6 w-full">
											<div class="flex">
												<!-- Share -->
												<div class="flex items-center px-2">

													<svg width="18px" height="15px" viewBox="0 0 18 15" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
														<g id="1.-Desktop" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<g id="2-—-Homepage-B" transform="translate(-454.000000, -659.000000)" fill="#FFFFFF">
																<g id="Card" transform="translate(40.000000, 130.000000)">
																	<g id="Footer" transform="translate(414.000000, 521.000000)">
																		<g id="share">
																			<path d="M7,12 L7,8 L0,15 L7,22 L7,17.9 C12,17.9 15.5,19.5 18,23 C17,18 14,13 7,12 L7,12 Z" id="Icon" transform="translate(9.000000, 15.500000) scale(-1, 1) translate(-9.000000, -15.500000) "></path>
																		</g>
																	</g>
																</g>
															</g>
														</g>
													</svg>
								
													<span class="px-2 text-white text-2xs">123</span>
												</div>
												<!-- End Share -->

												<!-- View -->
												<div class="flex items-center px-2">

													<svg width="22px" height="16px" viewBox="0 0 22 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
														<g id="1.-Desktop" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<g id="2-—-Homepage-B" transform="translate(-522.000000, -659.000000)" fill="#FFFFFF">
																<g id="Card" transform="translate(40.000000, 130.000000)">
																	<g id="Footer" transform="translate(414.000000, 521.000000)">
																		<g id="views" transform="translate(68.000000, 0.000000)">
																			<path d="M11,8.5 C6,8.5 1.73,11.61 0,16 C1.73,20.39 6,23.5 11,23.5 C16,23.5 20.27,20.39 22,16 C20.27,11.61 16,8.5 11,8.5 L11,8.5 Z M11,21 C8.24,21 6,18.76 6,16 C6,13.24 8.24,11 11,11 C13.76,11 16,13.24 16,16 C16,18.76 13.76,21 11,21 L11,21 Z M11,13 C9.34,13 8,14.34 8,16 C8,17.66 9.34,19 11,19 C12.66,19 14,17.66 14,16 C14,14.34 12.66,13 11,13 L11,13 Z" id="Icon"></path>
																		</g>
																	</g>
																</g>
															</g>
														</g>
													</svg>
								
													<span class="px-2 text-white text-2xs">32</span>
												</div>
												<!-- End View -->

												<!-- Comments -->
												<div class="flex items-center px-2">

													<svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
														<g id="1.-Desktop" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<g id="2-—-Homepage-B" transform="translate(-593.000000, -657.000000)" fill="#FFFFFF">
																<g id="Card" transform="translate(40.000000, 130.000000)">
																	<g id="Footer" transform="translate(414.000000, 521.000000)">
																		<g id="comments" transform="translate(139.000000, 0.000000)">
																			<path d="M19,10 L17,10 L17,19 L4,19 L4,21 C4,21.55 4.45,22 5,22 L16,22 L20,26 L20,11 C20,10.45 19.55,10 19,10 L19,10 Z M15,16 L15,7 C15,6.45 14.55,6 14,6 L1,6 C0.45,6 0,6.45 0,7 L0,21 L4,17 L14,17 C14.55,17 15,16.55 15,16 L15,16 Z" id="Icon"></path>
																		</g>
																	</g>
																</g>
															</g>
														</g>
													</svg>
								
													<span class="px-2 text-white text-2xs">12</span>
												</div>
												<!-- End Comments -->
											</div>
										</div>
									</div>
								</a> 
 
								<a class="carousel-cell w-full" href="#">
									<div class="flex relative items-center w-full bg-pink">
										<img class="w-full object-cover h-bannersm md:h-banner" alt="" src="<?php echo get_template_directory_uri(); ?>/public/images/banner.jpg">

										<div class="flex flex-wrap justify-center absolute text-center">
											<div class="bg-pink px-4 py-2 uppercase text-xs tracking-wider font-oswald text-white">Entertainment</div>

											<h1 class="mx-8 md:mx-32 text-white mt-12 mb-6 text-3xl lg:text-xxl w-full">This is the second slider</h1>

											<p class="hidden md:block mx-32 text-base text-grey-lightest">
												Description for the second slider.
											</p>
										</div>

										<div class="flex items-end justify-center absolute pin-b mb-6 w-full">
											<div class="flex">
												<!-- Share -->
												<div class="flex items-center px-2">

													<svg width="18px" height="15px" viewBox="0 0 18 15" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
														<g id="1.-Desktop" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<g id="2-—-Homepage-B" transform="translate(-454.000000, -659.000000)" fill="#FFFFFF">
																<g id="Card" transform="translate(40.000000, 130.000000)">
																	<g id="Footer" transform="translate(414.000000, 521.000000)">
																		<g id="share">
																			<path d="M7,12 L7,8 L0,15 L7,22 L7,17.9 C12,17.9 15.5,19.5 18,23 C17,18 14,13 7,12 L7,12 Z" id="Icon" transform="translate(9.000000, 15.500000) scale(-1, 1) translate(-9.000000, -15.500000) "></path>
																		</g>
																	</g>
																</g>
															</g>
														</g>
													</svg>
								
													<span class="px-2 text-white text-2xs">123</span>
												</div>
												<!-- End Share -->

												<!-- View -->
												<div class="flex items-center px-2">

													<svg width="22px" height="16px" viewBox="0 0 22 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
														<g id="1.-Desktop" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<g id="2-—-Homepage-B" transform="translate(-522.000000, -659.000000)" fill="#FFFFFF">
																<g id="Card" transform="translate(40.000000, 130.000000)">
																	<g id="Footer" transform="translate(414.000000, 521.000000)">
																		<g id="views" transform="translate(68.000000, 0.000000)">
																			<path d="M11,8.5 C6,8.5 1.73,11.61 0,16 C1.73,20.39 6,23.5 11,23.5 C16,23.5 20.27,20.39 22,16 C20.27,11.61 16,8.5 11,8.5 L11,8.5 Z M11,21 C8.24,21 6,18.76 6,16 C6,13.24 8.24,11 11,11 C13.76,11 16,13.24 16,16 C16,18.76 13.76,21 11,21 L11,21 Z M11,13 C9.34,13 8,14.34 8,16 C8,17.66 9.34,19 11,19 C12.66,19 14,17.66 14,16 C14,14.34 12.66,13 11,13 L11,13 Z" id="Icon"></path>
																		</g>
																	</g>
																</g>
															</g>
														</g>
													</svg>
								
													<span class="px-2 text-white text-2xs">32</span>
												</div>
												<!-- End View -->

												<!-- Comments -->
												<div class="flex items-center px-2">

													<svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
														<g id="1.-Desktop" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<g id="2-—-Homepage-B" transform="translate(-593.000000, -657.000000)" fill="#FFFFFF">
																<g id="Card" transform="translate(40.000000, 130.000000)">
																	<g id="Footer" transform="translate(414.000000, 521.000000)">
																		<g id="comments" transform="translate(139.000000, 0.000000)">
																			<path d="M19,10 L17,10 L17,19 L4,19 L4,21 C4,21.55 4.45,22 5,22 L16,22 L20,26 L20,11 C20,10.45 19.55,10 19,10 L19,10 Z M15,16 L15,7 C15,6.45 14.55,6 14,6 L1,6 C0.45,6 0,6.45 0,7 L0,21 L4,17 L14,17 C14.55,17 15,16.55 15,16 L15,16 Z" id="Icon"></path>
																		</g>
																	</g>
																</g>
															</g>
														</g>
													</svg>
								
													<span class="px-2 text-white text-2xs">12</span>
												</div>
												<!-- End Comments -->
											</div>
										</div>
									</div>
								</a>
							</flickity>
							
							
							
						</div>
					</banner-flickity>
				</div>

				<!-- 1/4 Box top -->
				<div v-masonry-tile class="item w-full md:w-1/2 lg:w-1/4 px-4 py-4">
					<article-post
						url="https://www.mesasix.com"
						category="Finance"
						title="Unmatched Toner Cartridge Quality: 20% Less than OEM Price"
						image="<?php echo get_template_directory_uri(); ?>/public/images/finance.jpg"
						shares-count="14"
						views-count="23"
						comments-count="36"
					></article-post>
				</div>

				<!-- 1/4 rectangle pink box -->
				<div v-masonry-tile class="item w-full md:w-1/2 lg:w-1/4 px-4 py-4">
					<div class="bg-pink">
						<div class="flex flex-wrap relative">
							<div class="flex flex-wrap px-6 py-9 xl:py-12">
								<h2 class="uppercase font-oswald leading-normal text-2xl lg:text-xl xl:text-2xl">This tie brand is bucking the retail apocalypse with a massive store expansion</h2>

								<p class="text-base text-white py-11">The universe is constantly changing, moving. Some would say it’s a “living” thing because you never know what you are going to see on any given night.</p>

								
								<div class="flex justify-start lg:justify-center w-full">
									<a class="bg-pink hover:bg-white px-4 py-2 uppercase text-xs font-oswald text-white hover:text-pink border-white border-1/2 border-b-2 py-4 px-10">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Featured Stories -->
				<div v-masonry-tile class="item w-full md:w-1/2 lg:w-1/4 px-4 py-4">
					<div class="bg-white">
						<h4 class="font-oswald pt-8 pl-4 text-black text-xs tracking-wider">Featured stories</h4>

						<featured-post
							url="https://facebook.com"
							title="Compare Prices: Find The Best Computer Accessory"
							post-order="1"
						></featured-post>


						<featured-post
							url="https://facebook.com"
							title="Why You Should Use In-House IT Support"
							post-order="2"
						></featured-post>

						<featured-post
							url="https://facebook.com"
							title="Why You Should Use External IT Support"
							post-order="3"
						></featured-post>

						<featured-post
							url="https://facebook.com"
							title="Choosing The Best Audio Player Software"
							post-order="4"
						></featured-post>

						<featured-post
							url="https://facebook.com"
							title="Addiction When Gambling Becomes A Problem"
							post-order="5"
						></featured-post>
					</div>
				</div>

				<!-- 1/2 Box -->
				<div v-masonry-tile class="item w-full md:w-1/2 px-4 py-4">
					<article-post
						url="https://www.mesasix.com"
						category="Entertainment"
						title="Here’s The Difference Between Used, Refurbished, Remarketed, And Rebuilt Electronic Equipment"
						image="<?php echo get_template_directory_uri(); ?>/public/images/entertainment.jpg"
						shares-count="14"
						views-count="23"
						comments-count="36"
					></article-post>
				</div>
				
				<!-- 1/4 Box Bottom -->
				<div v-masonry-tile class="item w-full md:w-1/2 lg:w-1/4 px-4 py-4">
					<article-post
						url="https://www.mesasix.com"
						category="Finance"
						title="Optimize Your PC’s Performance With These 3 Programs"
						image="<?php echo get_template_directory_uri(); ?>/public/images/finance.jpg"
						shares-count="1"
						views-count="2"
						comments-count="3"
					></article-post>
				</div>

				<!-- 1/4 Box Bottom -->
				<div v-masonry-tile class="item w-full md:w-1/2 lg:w-1/4 px-4 py-4">
					<article-post
						url="https://www.mesasix.com"
						category="Gaming"
						title="Search Engine Optimization And Advertising"
						image="<?php echo get_template_directory_uri(); ?>/public/images/gaming.jpg"
						shares-count="12"
						views-count="23"
						comments-count="34"
					></article-post>
				</div>

				<!-- 1/4 Box Bottom -->
				<div v-masonry-tile class="item w-full md:w-1/2 lg:w-1/4 px-4 py-4">
					<article-post
						url="https://www.mesasix.com"
						category="Technology"
						title="Where To Find Unique Myspace Layouts"
						image="<?php echo get_template_directory_uri(); ?>/public/images/technology.jpg"
						shares-count="55"
						views-count="44"
						comments-count="77"
					></article-post>
				</div>
			</div>
		</masonry>
	</div>
</div>

<?php
/**
 * Home hero template
 */
// get_template_part('template-parts/home', 'hero');

/**
 * Home about template
 */
// get_template_part('template-parts/home', 'about');

/**
 * Home about logo template
 */
// get_template_part('template-parts/home', 'about-logo');

/**
 * Home objectives template
 */
// get_template_part('template-parts/home', 'objectives');

/**
 * Home social template
 */
// get_template_part('template-parts/home', 'social');

get_footer();