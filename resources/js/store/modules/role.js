import { $WebAPI } from "@/_CommonJs/WebAPI.js";

const getters = {
    getRoleInfo: state    => state.roleInfo,
    existsRoleInfo: state => state.roleInfo !== {},
    getuserId: state    => state.userId,
    existsuserId: state => state.userId !== {},
};

const state = {
    roleInfo:{},
    userId:{}
};

const mutations = {
    setRoleInfo(state, roleInfoObj) {
        state.roleInfo = roleInfoObj;
    },
    clearRoleInfo(state) {
        state.roleInfo = {};
    },
    setuserId(state, userId) {
        state.userId = userId;
    },
    clearuserId(state) {
        state.userId = {};
    }
};
// TODO ローカルストレージのKEYを更新する（@appのところ）
const actions = {
    async setRoleInfo({ commit }) {
        //ogaAuthから権限を取得
        let url = "/api/oga_auth/public/app_role/";
        let userId = JSON.parse(localStorage.getItem('@app')).role.userId;
        let param = {
            content_id: process.env.MIX_OGA_CONTENT_ID,
            user_id: userId,
        };
        await $WebAPI.PostOgaAuthAPI(url, param)
        .then((res) => {
            let datas = res.data.dataArray;
            commit("setRoleInfo", datas);
        }).catch((error) => {
            console.error(error);
            this.commit("msg/setSnackbar", { text: '権限取得失敗', color: "error" });
        });
    }
};

export default {
    namespaced: true,
    getters,
    state,
    mutations,
    actions,
};