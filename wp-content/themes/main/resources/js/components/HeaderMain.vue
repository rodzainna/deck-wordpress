<script>

export default {
	data() {
		return {
			scrolled: false,
			burger: false,
		}
	},
	methods: {
		onScroll() {
			return window.pageYOffset > this.$el.offsetHeight ? 
			this.scrolled = true : this.scrolled = false
		},
		toggleNav(){
			if (this.burger == false){
				this.burger = true;
			} 
			else{
				this.burger = false;
			}
		},
	},
	created() {
		window.addEventListener('scroll', this.onScroll)
	},
	destroyed() {
		window.removeEventListener('scroll', this.onScroll)
	}

}

</script>