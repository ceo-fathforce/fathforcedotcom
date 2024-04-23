<template>
    <PageHeader
        :title="
            $trans(route.meta.trans, {
                attribute: $trans(route.meta.label),
            })
        "
        :navs="[{ label: $trans('master.companydata.companydata'), path: 'CompanydataList' }]"
    >
        <PageHeaderAction
            name="Companydata"
            :title="$trans('master.companydata.companydata')"
            :actions="['list']"
        />
    </PageHeader>

    <ParentTransition appear :visibility="true">
        <CompanydataForm></CompanydataForm>
    </ParentTransition>
</template>

<script>
export default {
    name: "CompanydataAction",
};
</script>

<script setup>
import { useRoute } from "vue-router";
import CompanydataForm from "./Form.vue";

const route = useRoute();
</script>
