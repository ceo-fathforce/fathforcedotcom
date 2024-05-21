<template>
  <PageHeader
    :title="
      $trans(route.meta.trans, {
        attribute: $trans(route.meta.label),
      })
    "
    :navs="[{ label: $trans('customize.companytext.companytext'), path: 'CompanytextList' }]"
  >
    <PageHeaderAction
      name="Companytext"
      :title="$trans('customize.companytext.companytext')"
      :actions="['list']"
    />
  </PageHeader>

  <ParentTransition appear :visibility="true">
    <CompanytextForm></CompanytextForm>
  </ParentTransition>
</template>

<script>
export default {
  name: "CompanytextAction",
};
</script>

<script setup>
import { useRoute } from "vue-router";
import CompanytextForm from "./Form.vue";

const route = useRoute();
</script>
