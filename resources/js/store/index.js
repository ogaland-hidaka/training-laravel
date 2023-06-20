import Vue from "vue";
import Vuex from "vuex";

import { msg, role } from './modules';

import createPersistedState from "vuex-persistedstate";

Vue.use(Vuex);

// TODO 各アプリ名でKEYを更新する
export default new Vuex.Store({
    modules: {
        msg,
        role
    },
    plugins: [createPersistedState({
        key: '@app',
        storage: window.localStorage,
    })]
});