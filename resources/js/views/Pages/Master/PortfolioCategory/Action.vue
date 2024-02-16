<template>
    <PageHeader
        :title="
            $trans(route.meta.trans, {
                attribute: $trans(route.meta.label),
            })
        "
        :navs="[{ label: $trans('master.portfoliocategory.portfoliocategory'), path: 'PortfolioCategoryList' }]"
    >
        <PageHeaderAction
            name="PortfolioCategory"
            :title="$trans('master.portfoliocategory.portfoliocategory')"
            :actions="['list']"
        />
    </PageHeader>

    <ParentTransition appear :visibility="true">
        <PortfolioCategoryForm></PortfolioCategoryForm>
    </ParentTransition>
</template>

<script>
export default {
    name: "PortfolioCategoryAction",
};
</script>

<script setup>
import { useRoute } from "vue-router";
import PortfolioCategoryForm from "./Form.vue";

const route = useRoute();
</script>
