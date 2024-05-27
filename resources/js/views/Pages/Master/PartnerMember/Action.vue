<template>
  <PageHeader
    :title="
      $trans(route.meta.trans, {
        attribute: $trans(route.meta.label),
      })
    "
    :navs="[{ label: $trans('master.partnermember.partnermember'), path: 'PartnerMemberList' }]"
  >
    <PageHeaderAction
      name="PartnerMember"
      :title="$trans('master.partnermember.partnermember')"
      :actions="['list']"
    />
  </PageHeader>

  <ParentTransition appear :visibility="true">
    <PartnerMemberForm></PartnerMemberForm>
  </ParentTransition>
</template>

<script>
export default {
  name: "PartnerMemberAction",
};
</script>

<script setup>
import { useRoute } from "vue-router";
import PartnerMemberForm from "./Form.vue";

const route = useRoute();
</script>
