<template>
  <PageHeader :title="$trans(route.meta.trans, {
    attribute: $trans(route.meta.label),
  })
    " :navs="[{ label: $trans('master.partnerschool.partnerschool'), path: 'PartnerSchoolList' }]">
    <PageHeaderAction name="PartnerSchool" :title="$trans('master.partnerschool.partnerschool')" :actions="['list']" />
  </PageHeader>

  <ParentTransition appear :visibility="true">
    <ShowItem :init-url="initUrl" :uuid="route.params.uuid" @setItem="setItem"
      @redirectTo="router.push({ name: 'PartnerSchool' })">
      <BaseCard v-if="partnerschool.uuid">
        <template #name>
          {{ partnerschool.name }}
        </template>
        <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
          <BaseDataView :label="$trans('master.partnerschool.props.name')">
            <div v-html="partnerschool.name"></div>
          </BaseDataView>

          <BaseDataView :label="$trans('master.partnerschool.props.description')">
            <div v-html="partnerschool.description"></div>
          </BaseDataView>

          <BaseDataView class="col-span-1 sm:col-span-2">
            <ListMedia :media="partnerschool.media" :url="`/app/master/partnerschools/${partnerschool.uuid}/`" />
          </BaseDataView>

          <BaseDataView :label="$trans('general.created_at')">
            {{ partnerschool.createdAt }}
          </BaseDataView>

          <BaseDataView :label="$trans('general.updated_at')">
            {{ partnerschool.updatedAt }}
          </BaseDataView>
        </dl>
        <template #footer>
          <ShowButton>
            <BaseButton design="primary" @click="
              router.push({
                name: 'PartnerSchoolEdit',
                params: { uuid: partnerschool.uuid },
              })
              ">
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
  name: "PartnerSchoolShow",
};
</script>

<script setup>
import { reactive } from "vue";
import { useRoute, useRouter } from "vue-router";

const route = useRoute();
const router = useRouter();

const initialPartnerSchool = {};

const initUrl = "master/partnerschool/";

const partnerschool = reactive({ ...initialPartnerSchool });

const setItem = (data) => {
  Object.assign(partnerschool, data);
};
</script>
