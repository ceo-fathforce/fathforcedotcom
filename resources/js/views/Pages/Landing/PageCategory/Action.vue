<template>
    <PageHeader :title="$trans(route.meta.trans, {
        attribute: $trans(route.meta.label),
    })
        " :navs="[{ label: $trans('landing.pagecategory.pagecategory'), path: 'PageCategoryList' }]">
        <PageHeaderAction name="PageCategory" :title="$trans('landing.pagecategory.pagecategory')" :actions="['list']" />
    </PageHeader>

    <ParentTransition appear :visibility="true">
        <PageCategoryForm></PageCategoryForm>
    </ParentTransition>
</template>

<script>
export default {
    name: "PageCategoryAction",
};
</script>

<script setup>
import { useRoute } from "vue-router";
import PageCategoryForm from "./Form.vue";

const route = useRoute();
</script>
