<template>
    <v-btn
        v-bind="{ ...$attrs }"
        v-on="$listeners"
    >
        <v-icon small dark class="pr-3">{{ icon }}</v-icon>
        {{ name }}
        <template v-for="(_, scopedSlotName) in $scopedSlots" #[scopedSlotName]="slotData">
            <slot :name="scopedSlotName" v-bind="slotData" />
        </template>
        <template v-for="(_, slotName) in $slots" #[slotName]>
            <slot :name="slotName" />
        </template>
    </v-btn>
</template>

<script>
export default {
    inheritAttrs: false,

    props: {
        name: { type: String, default: ""},
        icon: { type: String, default: ""}
    },
}
</script>