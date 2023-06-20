<template>
    <v-textarea
        v-bind="{ ...$attrs }"
        v-on="$listeners"
        v-model="inputText"
        :label="label"
        outlined
        dense
        hide-details="auto"
        auto-grow
        class="base-textarea"
    >
        <template v-for="(_, scopedSlotName) in $scopedSlots" #[scopedSlotName]="slotData">
            <slot :name="scopedSlotName" v-bind="slotData" />
        </template>
        <template v-for="(_, slotName) in $slots" #[slotName]>
            <slot :name="slotName" />
        </template>
    </v-textarea>
</template>

<script>
export default {
    inheritAttrs: false,

    props: {
        value: { type: String, default: "" },
        label: { type: String, default: ""}
    },

    computed: {
        inputText: {
            get() {
                return this.value;
            },
            set(v) {
                this.$emit("input", v);
            }
        }
    }
};
</script>

<style>
.base-textarea textarea {
    padding-right: 12px;
    padding-bottom: 12px;
    box-sizing: content-box;
}
</style>