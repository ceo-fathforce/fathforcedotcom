<template>
  <PageHeader
    :title="
      $trans(route.meta.trans, {
        attribute: $trans(route.meta.label),
      })
    "
    :navs="[{ label: $trans('master.servicelist.servicelist'), path: 'ServicelistList' }]"
  >
    <PageHeaderAction
      name="Servicelist"
      :title="$trans('master.servicelist.servicelist')"
      :actions="['list']"
    />
  </PageHeader>

  <ParentTransition appear :visibility="true">
    <ShowItem
      :init-url="initUrl"
      :uuid="route.params.uuid"
      @setItem="setItem"
      @redirectTo="router.push({ name: 'Servicelist' })"
    >
      <BaseCard v-if="servicelist.uuid">
        <template #name>
          {{ servicelist.name }}
        </template>
        <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
          <BaseDataView :label="$trans('master.servicelist.props.name')">
            <div v-html="servicelist.name"></div>
          </BaseDataView>

          <BaseDataView :label="$trans('master.servicelist.props.description')">
            <div v-html="servicelist.description"></div>
          </BaseDataView>

          <BaseDataView class="col-span-1 sm:col-span-2">
            <ListMedia
              :media="servicelist.media"
              :url="`/app/master/servicelists/${servicelist.uuid}/`"
            />
          </BaseDataView>

          <BaseDataView :label="$trans('general.created_at')">
            {{ servicelist.createdAt }}
          </BaseDataView>

          <BaseDataView :label="$trans('general.updated_at')">
            {{ servicelist.updatedAt }}
          </BaseDataView>
        </dl>
        <template #footer>
          <ShowButton>
            <BaseButton
              design="primary"
              @click="
                router.push({
                  name: 'ServicelistEdit',
                  params: { uuid: servicelist.uuid },
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
  name: "ServicelistShow",
};
</script>

<script setup>
import { reactive } from "vue";
import { useRoute, useRouter } from "vue-router";

const route = useRoute();
const router = useRouter();

const initialServicelist = {};

const initUrl = "master/servicelist/";

const servicelist = reactive({ ...initialServicelist });

const setItem = (data) => {
  Object.assign(servicelist, data);
};
</script>
