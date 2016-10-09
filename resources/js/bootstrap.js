

const bootstrap = function (Vue) {

    // to fix webpack chunk urls
    __webpack_public_path__ = BUTTER.plugin_url + "/public/js/";

    // init vue resource
    require('vue-resource');

    // init sass
    require("../sass/app.scss");
};

export {bootstrap}