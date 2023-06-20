/**
 * ogaland HTML生成用JSファイル（Vue.js）
 */

window.Vue = require("vue");

import Vuetify from "vuetify";
import "vuetify/dist/vuetify.min.css";
import ja from "vuetify/es5/locale/ja.js";
import VueRouter from "vue-router";
import router from "@/router/router.js";
import "@mdi/font/css/materialdesignicons.css";
// import "@fortawesome/fontawesome-free/css/all.css";

import AxiosPlugin from "./plugins/axios"; // axiosの自作プラグイン読込
import store from "@/store/index.js";
import { Utils } from "./plugins/utils.js"; // axiosの自作プラグイン読込

//Vue.js拡張ライブラリの追加
Vue.use(Vuetify);
Vue.use(VueRouter);
Vue.use(AxiosPlugin, { store, router });

Vue.prototype.$Utils = Utils;

//利用コンポーネントの登録(ベースコンポーネント)
 Vue.component('navi-component', require('@/_BaseComponents/Navigation.vue').default);

//利用コンポーネントの登録(共通コンポーネント)
Vue.component('o-text', require('@/components/Inputs/OgaTextbox.vue').default);
Vue.component('o-textarea', require('@/components/Inputs/OgaTextarea.vue').default);
Vue.component('o-btn', require('@/components/Buttons/OgaButton.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.config.productionTip = false;

const app = new Vue({
    el: "#app",
    router,
    store: store,
    vuetify: new Vuetify({
        customVariables: ["@/_CommonCss/variables.scss"],
        treeShake: true,
        defaultAssets: {
            font: {
                family: "Noto Sans JP",
            },
        },
        lang: {
            locales: { ja },
            current: "ja",
        },
        icons: {
            iconfont: "mdi", // default - only for display purposes
        },
        theme: {
            themes: {
                light: {
                    primary: '#1976D2',
                    secondary: '#424242',
                    accent: '#82B1FF',
                    error: '#FF5252',
                    info: '#2196F3',
                    success: '#4CAF50',
                    warning: '#FFC107',
                },
            },
            options: { customProperties: true },
        },
    }),
});