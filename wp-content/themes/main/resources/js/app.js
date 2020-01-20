import Vue from 'vue'

import HeaderMain from "./components/HeaderMain.vue"
import ArticlePost from "./components/ArticlePost.vue"
import NewsPost from "./components/NewsPost.vue"
import FeaturedPost from "./components/FeaturedPost.vue"
import Masonry from './components/Masonry.vue'
import BannerFlickity from './components/BannerFlickity.vue'
// import GoogleMaps from './components/GoogleMaps.vue'

Vue.component("header-main", HeaderMain)
Vue.component("article-post", ArticlePost)
Vue.component("featured-post", FeaturedPost)
Vue.component("masonry", Masonry)
Vue.component("banner-flickity", BannerFlickity)
Vue.component("news-post", NewsPost)
// Vue.component("contact-google-maps", GoogleMaps)

const app = new Vue({
    el: '#app',
    data: {

    },
    methods: {

    },
    mounted(){
        
    }
});