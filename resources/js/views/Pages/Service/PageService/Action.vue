<template>
  <PageServiceHeader
    :title="
      $trans(route.meta.trans, {
        attribute: $trans(route.meta.label),
      })
    "
    :navs="[{ label: $trans('service.pageservice.pageservice'), path: 'PageServiceList' }]"
  >
    <PageServiceHeaderAction
      name="PageService"
      :title="$trans('service.pageservice.pageservice')"
      :actions="['list']"
    />
  </PageServiceHeader>

  <ParentTransition appear :visibility="true">
    <PageServiceForm></PageServiceForm>
  </ParentTransition>
</template>

<script>
export default {
  name: "PageServiceAction",
};
</script>

<script setup>
import { useRoute } from "vue-router";
import PageServiceForm from "./Form.vue";

const route = useRoute();
</script>
