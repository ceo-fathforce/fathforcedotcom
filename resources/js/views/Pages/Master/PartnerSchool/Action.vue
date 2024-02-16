<template>
  <PageHeader
    :title="
      $trans(route.meta.trans, {
        attribute: $trans(route.meta.label),
      })
    "
    :navs="[{ label: $trans('master.partnerschool.partnerschool'), path: 'PartnerSchoolList' }]"
  >
    <PageHeaderAction
      name="PartnerSchool"
      :title="$trans('master.partnerschool.partnerschool')"
      :actions="['list']"
    />
    </PageHeader>

  <ParentTransition appear :visibility="true">
    <PartnerSchoolForm></PartnerSchoolForm>
  </ParentTransition>
</template>

<script>
export default {
  name: "PartnerSchoolAction",
};
</script>

<script setup>
import { useRoute } from "vue-router";
import PartnerSchoolForm from "./Form.vue";

const route = useRoute();
</script>
