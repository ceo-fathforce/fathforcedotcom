<template>
  <PageHeader
    :title="
      $trans(route.meta.trans, {
        attribute: $trans(route.meta.label),
      })
    "
    :navs="[{ label: $trans('master.faq.faq'), path: 'FaqList' }]"
  >
    <PageHeaderAction
      name="Faq"
      :title="$trans('master.faq.faq')"
      :actions="['list']"
    />
  </PageHeader>

  <ParentTransition appear :visibility="true">
    <FaqForm></FaqForm>
  </ParentTransition>
</template>

<script>
export default {
  name: "FaqAction",
};
</script>

<script setup>
import { useRoute } from "vue-router";
import FaqForm from "./Form.vue";

const route = useRoute();
</script>
