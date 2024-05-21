<template>
    <PageHeader
        :title="
            $trans(route.meta.trans, {
                attribute: $trans(route.meta.label),
            })
        "
        :navs="[{ label: $trans('customize.companyimage.companyimage'), path: 'CompanyimageList' }]"
    >
        <PageHeaderAction
            name="Companyimage"
            :title="$trans('customize.companyimage.companyimage')"
            :actions="['list']"
        />
    </PageHeader>

    <ParentTransition appear :visibility="true">
        <CompanyimageForm></CompanyimageForm>
    </ParentTransition>
</template>

<script>
export default {
    name: "CompanyimageAction",
};
</script>

<script setup>
import { useRoute } from "vue-router";
import CompanyimageForm from "./Form.vue";

const route = useRoute();
</script>
