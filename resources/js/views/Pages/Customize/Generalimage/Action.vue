<template>
    <PageHeader
        :title="
            $trans(route.meta.trans, {
                attribute: $trans(route.meta.label),
            })
        "
        :navs="[{ label: $trans('customize.generalimage.generalimage'), path: 'GeneralimageList' }]"
    >
        <PageHeaderAction
            name="Generalimage"
            :title="$trans('customize.generalimage.generalimage')"
            :actions="['list']"
        />
    </PageHeader>

    <ParentTransition appear :visibility="true">
        <GeneralimageForm></GeneralimageForm>
    </ParentTransition>
</template>

<script>
export default {
    name: "GeneralimageAction",
};
</script>

<script setup>
import { useRoute } from "vue-router";
import GeneralimageForm from "./Form.vue";

const route = useRoute();
</script>
