import $ from "jquery";
import store from '@/store/index.js'
import Router from "vue-router";

import Dashboard from "@/views/Dashboard/Dashboard.vue";


const router = new Router({
    mode: "history",
    base: process.env.MIX_BASE_URL,
    routes: [
        {
            path: "/dashboard",
            name: "Dashboard",
            component: Dashboard,
        }
    ],
});

// 画面遷移前にCALLされる関数
router.beforeEach((to, from, next) => {
    setUserId(to, from, next);
    // コンテンツのリード権限があるかチェック
    isCheckReadContent();
    next();
})

/**
* jwtからuser_idを取得してmetaタグに入れる
* @param {*} to
* @param {*} from
* @param {*} next
*/
async function setUserId(to, from, next) {
    var user_id = '';
    // jwtのuser_idを取得
    if('jwt' in to.query){
        var user_id = 0;
        // パラメーターの値を取得
        let jwt = to.query['jwt'];
        // jwtのデコード
        const base64Url = jwt.split('.')[1];
        const base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
        const decodeJwt = JSON.parse(decodeURIComponent(escape(window.atob(base64))));
        user_id = decodeJwt['user_id'];
        //localStorageにuser_idを置く
        store.commit('role/setuserId', user_id);
    }
    //  開発環境であれば、管理者のuser_idを取得
    let env = $('meta[name="app-env"]').attr("content");
    if(env != 'production' && env != 'stage') {
        // 開発であれば自分のユーザーID
        user_id = 95;
        //localStorageにuser_idを置く
        store.commit('role/setuserId', user_id);
    }
}

/**
* 権限情報を設定
*/
async function isCheckReadContent() {
    store.dispatch('role/setRoleInfo');
}

export default router;