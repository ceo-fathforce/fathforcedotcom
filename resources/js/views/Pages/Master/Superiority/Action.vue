<template>
  <PageHeader
    :title="
      $trans(route.meta.trans, {
        attribute: $trans(route.meta.label),
      })
    "
    :navs="[{ label: $trans('master.superiority.superiority'), path: 'SuperiorityList' }]"
  >
    <PageHeaderAction
      name="Superiority"
      :title="$trans('master.superiority.superiority')"
      :actions="['list']"
    />
  </PageHeader>

  <ParentTransition appear :visibility="true">
    <SuperiorityForm></SuperiorityForm>
  </ParentTransition>
</template>

<script>
export default {
  name: "SuperiorityAction",
};
</script>

<script setup>
import { useRoute } from "vue-router";
import SuperiorityForm from "./Form.vue";

const route = useRoute();
</script>
