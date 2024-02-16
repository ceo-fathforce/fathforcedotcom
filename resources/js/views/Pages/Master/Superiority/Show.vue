<template>
  <PageHeader
    :title="
      $trans(route.meta.trans, {
        attribute: $trans(route.meta.label),
      })
    "
    :navs="[{ label: $trans('master.superiority.superiority'), path: 'SuperiorityList' }]"
  >
    <PageHeaderAction
      name="Superiority"
      :title="$trans('master.superiority.superiority')"
      :actions="['list']"
    />
  </PageHeader>

  <ParentTransition appear :visibility="true">
    <ShowItem
      :init-url="initUrl"
      :uuid="route.params.uuid"
      @setItem="setItem"
      @redirectTo="router.push({ name: 'Superiority' })"
    >
      <BaseCard v-if="superiority.uuid">
        <template #name>
          {{ superiority.name }}
        </template>
        <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
          <BaseDataView :label="$trans('master.superiority.props.name')">
            <div v-html="superiority.name"></div>
          </BaseDataView>

          <BaseDataView :label="$trans('master.superiority.props.description')">
            <div v-html="superiority.description"></div>
          </BaseDataView>

          <BaseDataView :label="$trans('general.created_at')">
            {{ superiority.createdAt }}
          </BaseDataView>

          <BaseDataView :label="$trans('general.updated_at')">
            {{ superiority.updatedAt }}
          </BaseDataView>
        </dl>
        <template #footer>
          <ShowButton>
            <BaseButton
              design="primary"
              @click="
                router.push({
                  name: 'SuperiorityEdit',
                  params: { uuid: superiority.uuid },
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
  name: "SuperiorityShow",
};
</script>

<script setup>
import { reactive } from "vue";
import { useRoute, useRouter } from "vue-router";

const route = useRoute();
const router = useRouter();

const initialSuperiority = {};

const initUrl = "master/superiority/";

const superiority = reactive({ ...initialSuperiority });

const setItem = (data) => {
  Object.assign(superiority, data);
};
</script>
