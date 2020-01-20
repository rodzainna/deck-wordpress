<template>
	<div class="flex border-b border-grey-light py-6">
        <a class="flex" :href="url">
            <div class="flex-initial px-4">
                <p class="font-oswald text-base text-grey">{{ postOrder }}</p>
            </div>
            <div class="flex-auto pr-4">
                <p>							
                    {{ title }}
                </p>
            </div>
        </a>
    </div>
</template>
<script>
export default{
	props: ['title', 'url', 'postOrder'],
	data(){
		return{
			nice: 'nice'
		}
	}
}
</script>