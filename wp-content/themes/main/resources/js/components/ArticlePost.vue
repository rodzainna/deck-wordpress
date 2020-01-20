<template>
	<a class="flex relative" v-bind:href="url">
		<img class="w-full object-cover h-small" alt="" :src="image">

		<div class="flex flex-wrap absolute">
			<div>
				<div class="bg-pink my-6 px-4 py-2 uppercase text-xs tracking-wider font-oswald text-white">{{ category }}</div>
			</div>
			<div>
				<h2 class="lg:w-90p px-4 text-2xl lg:text-xl xl:text-2xl">{{ title }}</h2>
			</div>
		</div>

		<div class="flex justify-start absolute -mx-3 w-full pin-b mb-6">
			<div class="flex px-5">
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

					<span class="px-2 text-white text-2xs">{{ sharesCount }}</span>
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

					<span class="px-2 text-white text-2xs">{{ viewsCount }}</span>
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

					<span class="px-2 text-white text-2xs">{{ commentsCount }}</span>
				</div>
				<!-- End Comments -->
			</div>
		</div>
	</a>
</template>
<script>
export default{
	props: ['title', 'category', 'sharesCount', 'viewsCount', 'commentsCount', 'image', 'url'],
	data(){
		return{
			nice: 'nice'
		}
	}
}
</script>