<template>
  <PageHeader
    :title="
      $trans(route.meta.trans, {
        attribute: $trans(route.meta.label),
      })
    "
    :navs="[{ label: $trans('master.servicelist.servicelist'), path: 'ServicelistList' }]"
  >
    <PageHeaderAction
      name="Servicelist"
      :title="$trans('master.servicelist.servicelist')"
      :actions="['list']"
    />
  </PageHeader>

  <ParentTransition appear :visibility="true">
    <ServicelistForm></ServicelistForm>
  </ParentTransition>
</template>

<script>
export default {
  name: "ServicelistAction",
};
</script>

<script setup>
import { useRoute } from "vue-router";
import ServicelistForm from "./Form.vue";

const route = useRoute();
</script>
