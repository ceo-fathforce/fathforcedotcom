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
    <ShowItem
      :init-url="initUrl"
      :uuid="route.params.uuid"
      @setItem="setItem"
      @redirectTo="router.push({ name: 'PartnerMember' })"
    >
      <BaseCard v-if="partnermember.uuid">
        <template #name>
          {{ partnermember.name }}
        </template>
        <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
          <BaseDataView :label="$trans('master.partnermember.props.name')">
            <div v-html="partnermember.name"></div>
          </BaseDataView>

          <BaseDataView :label="$trans('master.partnermember.props.description')">
            <div v-html="partnermember.description"></div>
          </BaseDataView>

          <BaseDataView class="col-span-1 sm:col-span-2">
            <ListMedia
              :media="partnermember.media"
              :url="`/app/master/partnermembers/${partnermember.uuid}/`"
            />
          </BaseDataView>

          <BaseDataView :label="$trans('general.created_at')">
            {{ partnermember.createdAt }}
          </BaseDataView>

          <BaseDataView :label="$trans('general.updated_at')">
            {{ partnermember.updatedAt }}
          </BaseDataView>
        </dl>
        <template #footer>
          <ShowButton>
            <BaseButton
              design="primary"
              @click="
                router.push({
                  name: 'PartnerMemberEdit',
                  params: { uuid: partnermember.uuid },
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
  name: "PartnerMemberShow",
};
</script>

<script setup>
import { reactive } from "vue";
import { useRoute, useRouter } from "vue-router";

const route = useRoute();
const router = useRouter();

const initialPartnerMember = {};

const initUrl = "master/partnermember/";

const partnermember = reactive({ ...initialPartnerMember });

const setItem = (data) => {
  Object.assign(partnermember, data);
};
</script>
