<template>
    <PageHeader
        :title="
            $trans(route.meta.trans, {
                attribute: $trans(route.meta.label),
            })
        "
        :navs="[{ label: $trans('customize.serviceimage.serviceimage'), path: 'ServiceimageList' }]"
    >
        <PageHeaderAction
            name="Serviceimage"
            :title="$trans('customize.serviceimage.serviceimage')"
            :actions="['list']"
        />
    </PageHeader>

    <ParentTransition appear :visibility="true">
        <ServiceimageForm></ServiceimageForm>
    </ParentTransition>
</template>

<script>
export default {
    name: "ServiceimageAction",
};
</script>

<script setup>
import { useRoute } from "vue-router";
import ServiceimageForm from "./Form.vue";

const route = useRoute();
</script>
