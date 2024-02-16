<template>
    <PageHeader
        :title="
            $trans(route.meta.trans, {
                attribute: $trans(route.meta.label),
            })
        "
        :navs="[{ label: $trans('master.gallerycategory.gallerycategory'), path: 'GalleryCategoryList' }]"
    >
        <PageHeaderAction
            name="GalleryCategory"
            :title="$trans('master.gallerycategory.gallerycategory')"
            :actions="['list']"
        />
    </PageHeader>

    <ParentTransition appear :visibility="true">
        <GalleryCategoryForm></GalleryCategoryForm>
    </ParentTransition>
</template>

<script>
export default {
    name: "GalleryCategoryAction",
};
</script>

<script setup>
import { useRoute } from "vue-router";
import GalleryCategoryForm from "./Form.vue";

const route = useRoute();
</script>
