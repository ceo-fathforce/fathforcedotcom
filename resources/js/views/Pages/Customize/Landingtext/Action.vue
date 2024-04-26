<template>
  <PageHeader
    :title="
      $trans(route.meta.trans, {
        attribute: $trans(route.meta.label),
      })
    "
    :navs="[{ label: $trans('customize.landingtext.landingtext'), path: 'LandingtextList' }]"
  >
    <PageHeaderAction
      name="Landingtext"
      :title="$trans('customize.landingtext.landingtext')"
      :actions="['list']"
    />
  </PageHeader>

  <ParentTransition appear :visibility="true">
    <LandingtextForm></LandingtextForm>
  </ParentTransition>
</template>

<script>
export default {
  name: "LandingtextAction",
};
</script>

<script setup>
import { useRoute } from "vue-router";
import LandingtextForm from "./Form.vue";

const route = useRoute();
</script>
