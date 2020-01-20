<script>
    import Vue from 'vue'
    import { VueMasonryPlugin } from 'vue-masonry'

    Vue.use(VueMasonryPlugin)

    export default{
        mounted(){
            setTimeout(function(){
                if (typeof this.$redrawVueMasonry === 'function') {
                    this.$redrawVueMasonry()
                }
            }, 5000);
        }
    }
</script>