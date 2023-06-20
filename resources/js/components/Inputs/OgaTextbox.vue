<template>
    <v-text-field
        v-bind="{ ...$attrs }"
        v-on="$listeners"
        v-model="inputText"
        :label="label"
        outlined
        dense
        hide-details="auto"
    >
        <template v-for="(_, scopedSlotName) in $scopedSlots" #[scopedSlotName]="slotData">
            <slot :name="scopedSlotName" v-bind="slotData" />
        </template>
        <template v-for="(_, slotName) in $slots" #[slotName]>
            <slot :name="slotName" />
        </template>
    </v-text-field>
</template>

<script>
export default {
    inheritAttrs: false,

    props: {
        value: { type: [String, Number], default: "" },
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