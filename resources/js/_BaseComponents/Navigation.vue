<template>
    <v-app>
        <!-- サイドメニュー -->
        <v-navigation-drawer app dark v-model="drawer" :mini-variant.sync="mini" :expand-on-hover="expandOnHover" color="primary" width="260">
            <v-list>
                <v-list-item >
                    <v-list-item-title class="white--text">
                        <img src="">
                    </v-list-item-title>
                </v-list-item>
            </v-list>

            <v-divider class="mt-0"></v-divider>
            <v-list nav>
                <v-list-item-group mandatory active-class="navi-active">
                    <v-list-item link v-for="(item, i) in menus" :key="i" @click="jump(item.link)">
                        <v-list-item-icon class="">
                            <v-icon v-text="item.icon"></v-icon>
                        </v-list-item-icon>

                        <v-list-item-content class="">
                            <v-list-item-title class="font-weight-bold" v-text="item.name"></v-list-item-title>
                        </v-list-item-content>
                    </v-list-item>
                </v-list-item-group>
            </v-list>
        </v-navigation-drawer>

        <!-- ヘッダー -->
        <v-app-bar app flat class="px-10">
            <v-btn
                color="#FFFFFF"
                fab
                small
                @click.stop="changeMiniHover"
                elevation="3"
            >
                <v-icon>fa-solid fa-ellipsis-vertical</v-icon>
            </v-btn>
            <v-toolbar-title
                class="font-weight-bold pl-5"
                v-text="$route.name"
            />
            <v-snackbar id="snackbar" top absolute :timeout="timeout" v-model="$store.state.msg.snackbar" :color="$store.state.msg.color">
                <strong>{{ $store.state.msg.text }}</strong>
                <template v-slot:action="{ attrs, on }">
                    <v-btn color="white" text v-bind="attrs" v-on="on" @click="closeSnackbar">
                    Close
                    </v-btn>
                </template>
            </v-snackbar>
        </v-app-bar>

        <!-- メイン -->
        <v-main style="background-color:#f5f5f5">
            <v-container fluid class="px-14 py-0">
                <router-view />
            </v-container>
        </v-main>
    </v-app>
</template>
<script>
import { mapActions , mapGetters  } from "vuex";
export default {
    data() {
        return {
            drawer: true,
            menus:[
                {id:1,name:'ダッシュボード',link:'/dashboard',icon:'fa-solid fa-table-list'},
            ],
            timeout: 3000,
            mini: false,
            expandOnHover: false,
        };
    },

    watch: {
        // スナックバーのクリア
        '$store.state.msg.snackbar': function() {
            setTimeout(() => {
                this.closeSnackbar();
            }, this.timeout);
        }
    },

    methods: {
        ...mapActions("msg", ["openSnackbar", "closeSnackbar"]),
        jump(url) {
            this.$router.push(url);
        },

        changeMiniHover() {
            this.mini = !this.mini
            this.expandOnHover = !this.expandOnHover
        }
    },
};
</script>
<style src="@/_CommonCss/Common.css"></style>
<style>
/* #snackbar>.v-snack__wrapper {
    right: -300% !important;
} */

/* 選択時の色設定------------ */
.navi-active {
    background-color: #369F74;
    color: #ffffff;
}
.navi-active::before {
    opacity: 0 !important;
}
/** ---------------------- */
</style>