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
    <ShowItem
      :init-url="initUrl"
      :uuid="route.params.uuid"
      @setItem="setItem"
      @redirectTo="router.push({ name: 'PartnerCompany' })"
    >
      <BaseCard v-if="partnercompany.uuid">
        <template #name>
          {{ partnercompany.name }}
        </template>
        <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
          <BaseDataView :label="$trans('master.partnercompany.props.name')">
            <div v-html="partnercompany.name"></div>
          </BaseDataView>

          <BaseDataView :label="$trans('master.partnercompany.props.description')">
            <div v-html="partnercompany.description"></div>
          </BaseDataView>

          <BaseDataView class="col-span-1 sm:col-span-2">
            <ListMedia
              :media="partnercompany.media"
              :url="`/app/master/partnercompanys/${partnercompany.uuid}/`"
            />
          </BaseDataView>

          <BaseDataView :label="$trans('general.created_at')">
            {{ partnercompany.createdAt }}
          </BaseDataView>

          <BaseDataView :label="$trans('general.updated_at')">
            {{ partnercompany.updatedAt }}
          </BaseDataView>
        </dl>
        <template #footer>
          <ShowButton>
            <BaseButton
              design="primary"
              @click="
                router.push({
                  name: 'PartnerCompanyEdit',
                  params: { uuid: partnercompany.uuid },
                })
              "
            >
              {{ $trans("general.edit") }}
            </BaseButton>
          </ShowButton>
        </template>
      </BaseCard>
    </ShowItem>
  </ParentTransition>
</template>

<script>
export default {
  name: "PartnerCompanyShow",
};
</script>

<script setup>
import { reactive } from "vue";
import { useRoute, useRouter } from "vue-router";

const route = useRoute();
const router = useRouter();

const initialPartnerCompany = {};

const initUrl = "master/partnercompany/";

const partnercompany = reactive({ ...initialPartnerCompany });

const setItem = (data) => {
  Object.assign(partnercompany, data);
};
</script>
