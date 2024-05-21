<template>
  <PageHeader
    :title="
      $trans(route.meta.trans, {
        attribute: $trans(route.meta.label),
      })
    "
    :navs="[{ label: $trans('customize.generaltext.generaltext'), path: 'GeneraltextList' }]"
  >
    <PageHeaderAction
      name="Generaltext"
      :title="$trans('customize.generaltext.generaltext')"
      :actions="['list']"
    />
  </PageHeader>

  <ParentTransition appear :visibility="true">
    <GeneraltextForm></GeneraltextForm>
  </ParentTransition>
</template>

<script>
export default {
  name: "GeneraltextAction",
};
</script>

<script setup>
import { useRoute } from "vue-router";
import GeneraltextForm from "./Form.vue";

const route = useRoute();
</script>
