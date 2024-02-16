<template>
    <PageHeader
        :title="
            $trans(route.meta.trans, {
                attribute: $trans(route.meta.label),
            })
        "
        :navs="[{ label: $trans('master.portfolio'), path: 'PortfolioList' }]"
    >
        <PageHeaderAction
            name="Portfolio"
            :title="$trans('master.portfolio')"
            :actions="['list']"
        />
    </PageHeader>

    <ParentTransition appear :visibility="true">
        <PortfolioForm></PortfolioForm>
    </ParentTransition>
</template>

<script>
export default {
    name: "PortfolioAction",
};
</script>

<script setup>
import { useRoute } from "vue-router";
import PortfolioForm from "./Form.vue";

const route = useRoute();
</script>
