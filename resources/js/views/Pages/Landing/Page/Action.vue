<template>
  <PageHeader
    :title="
      $trans(route.meta.trans, {
        attribute: $trans(route.meta.label),
      })
    "
    :navs="[{ label: $trans('landing.page.page'), path: 'PageList' }]"
  >
    <PageHeaderAction
      name="Page"
      :title="$trans('landing.page.page')"
      :actions="['list']"
    />
  </PageHeader>

  <ParentTransition appear :visibility="true">
    <PageForm></PageForm>
  </ParentTransition>
</template>

<script>
export default {
  name: "PageAction",
};
</script>

<script setup>
import { useRoute } from "vue-router";
import PageForm from "./Form.vue";

const route = useRoute();
</script>
