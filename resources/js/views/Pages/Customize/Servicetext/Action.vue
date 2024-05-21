<template>
  <PageHeader
    :title="
      $trans(route.meta.trans, {
        attribute: $trans(route.meta.label),
      })
    "
    :navs="[{ label: $trans('customize.servicetext.servicetext'), path: 'ServicetextList' }]"
  >
    <PageHeaderAction
      name="Servicetext"
      :title="$trans('customize.servicetext.servicetext')"
      :actions="['list']"
    />
  </PageHeader>

  <ParentTransition appear :visibility="true">
    <ServicetextForm></ServicetextForm>
  </ParentTransition>
</template>

<script>
export default {
  name: "ServicetextAction",
};
</script>

<script setup>
import { useRoute } from "vue-router";
import ServicetextForm from "./Form.vue";

const route = useRoute();
</script>
