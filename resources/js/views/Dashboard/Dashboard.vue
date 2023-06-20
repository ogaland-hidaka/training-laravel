<template>
    <div>
        Dashboard
        <div class="pa-3">
            <div>
                <o-text v-model="text01" label="テキストボックスコンポーネント" />
                テキストボックス：{{ text01 }}
            </div>
            <v-divider></v-divider>
            <div>
                <o-btn name="新規作成" icon="fa-solid fa-pen" color="primary" />
            </div>
            <v-divider></v-divider>
            <div>
                <o-textarea v-model="textarea01" label="エリアコンポーネント" />
                テキストエリア： {{ textarea01 }}
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            text01: "",
            textarea01: "",
        }
    }
}
</script>