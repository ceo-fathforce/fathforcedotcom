<template>
  <PageHeader
    :title="
      $trans(route.meta.trans, {
        attribute: $trans(route.meta.label),
      })
    "
    :navs="[{ label: $trans('master.gallery.gallery'), path: 'GalleryList' }]"
  >
    <PageHeaderAction
      name="Gallery"
      :title="$trans('master.gallery.gallery')"
      :actions="['list']"
    />
  </PageHeader>

  <ParentTransition appear :visibility="true">
    <GalleryForm></GalleryForm>
  </ParentTransition>
</template>

<script>
export default {
  name: "GalleryAction",
};
</script>

<script setup>
import { useRoute } from "vue-router";
import GalleryForm from "./Form.vue";

const route = useRoute();
</script>
