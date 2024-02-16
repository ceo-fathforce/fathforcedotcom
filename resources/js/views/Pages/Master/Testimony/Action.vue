<template>
  <PageHeader
    :title="
      $trans(route.meta.trans, {
        attribute: $trans(route.meta.label),
      })
    "
    :navs="[{ label: $trans('master.testimony.testimony'), path: 'TestimonyList' }]"
  >
    <PageHeaderAction
      name="Testimony"
      :title="$trans('master.testimony.testimony')"
      :actions="['list']"
    />
  </PageHeader>

  <ParentTransition appear :visibility="true">
    <TestimonyForm></TestimonyForm>
  </ParentTransition>
</template>

<script>
export default {
  name: "TestimonyAction",
};
</script>

<script setup>
import { useRoute } from "vue-router";
import TestimonyForm from "./Form.vue";

const route = useRoute();
</script>
