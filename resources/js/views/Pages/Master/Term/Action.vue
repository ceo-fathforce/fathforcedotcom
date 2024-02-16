<template>
  <PageHeader
    :title="
      $trans(route.meta.trans, {
        attribute: $trans(route.meta.label),
      })
    "
    :navs="[{ label: $trans('master.term.term'), path: 'TermList' }]"
  >
    <PageHeaderAction
      name="Term"
      :title="$trans('master.term.term')"
      :actions="['list']"
    />
  </PageHeader>

  <ParentTransition appear :visibility="true">
    <TermForm></TermForm>
  </ParentTransition>
</template>

<script>
export default {
  name: "TermAction",
};
</script>

<script setup>
import { useRoute } from "vue-router";
import TermForm from "./Form.vue";

const route = useRoute();
</script>
