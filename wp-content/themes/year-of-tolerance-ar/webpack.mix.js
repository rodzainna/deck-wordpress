let mix = require("laravel-mix");

mix
    .less('resources/less/rtl.less', '')
    .options({
        processCssUrls: false
    })
;
	