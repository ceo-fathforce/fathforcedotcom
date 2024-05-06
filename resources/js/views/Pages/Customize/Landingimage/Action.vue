<template>
    <PageHeader
        :title="
            $trans(route.meta.trans, {
                attribute: $trans(route.meta.label),
            })
        "
        :navs="[{ label: $trans('customize.landingimage.landingimage'), path: 'LandingimageList' }]"
    >
        <PageHeaderAction
            name="Landingimage"
            :title="$trans('customize.landingimage.landingimage')"
            :actions="['list']"
        />
    </PageHeader>

    <ParentTransition appear :visibility="true">
        <LandingimageForm></LandingimageForm>
    </ParentTransition>
</template>

<script>
export default {
    name: "LandingimageAction",
};
</script>

<script setup>
import { useRoute } from "vue-router";
import LandingimageForm from "./Form.vue";

const route = useRoute();
</script>
