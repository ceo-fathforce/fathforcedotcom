<template>
  <PageHeader
    :title="
      $trans(route.meta.trans, {
        attribute: $trans(route.meta.label),
      })
    "
    :navs="[{ label: $trans('master.partnercompany.partnercompany'), path: 'PartnerCompanyList' }]"
  >
    <PageHeaderAction
      name="PartnerCompany"
      :title="$trans('master.partnercompany.partnercompany')"
      :actions="['list']"
    />
  </PageHeader>

  <ParentTransition appear :visibility="true">
    <PartnerCompanyForm></PartnerCompanyForm>
  </ParentTransition>
</template>

<script>
export default {
  name: "PartnerCompanyAction",
};
</script>

<script setup>
import { useRoute } from "vue-router";
import PartnerCompanyForm from "./Form.vue";

const route = useRoute();
</script>
