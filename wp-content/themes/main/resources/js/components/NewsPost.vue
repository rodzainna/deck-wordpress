<template>
    <a class="flex flex-wrap" v-bind:href="url">
        <div class="relative">
            <img class="w-full object-cover h-auto" :src="image" alt="This is an alt text">

            <div class="absolute bg-pink px-4 py-3 text-white uppercase -mt-16 -ml-1 font-oswald">{{ category }}</div>
        </div>
        <h2 class="text-black py-2">{{ title }}</h2>
        <p>{{ desc }}</p>
        
    </a>
</template>

<script>
export default {
    props: ['title', 'category', 'desc', 'image', 'url'],
	data(){
		return{
			nice: 'nice'
		}
	}
}
</script>

