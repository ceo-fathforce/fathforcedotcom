<template>
    <PageServiceHeader :title="$trans(route.meta.trans, {
        attribute: $trans(route.meta.label),
    })
        " :navs="[{ label: $trans('service.pageservicecategory.pageservicecategory'), path: 'PageServiceCategoryList' }]">
        <PageServiceHeaderAction name="PageServiceCategory" :title="$trans('service.pageservicecategory.pageservicecategory')" :actions="['list']" />
    </PageServiceHeader>

    <ParentTransition appear :visibility="true">
        <PageServiceCategoryForm></PageServiceCategoryForm>
    </ParentTransition>
</template>

<script>
export default {
    name: "PageServiceCategoryAction",
};
</script>

<script setup>
import { useRoute } from "vue-router";
import PageServiceCategoryForm from "./Form.vue";

const route = useRoute();
</script>
