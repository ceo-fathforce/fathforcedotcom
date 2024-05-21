<template>
  <PageHeader
    :title="
      $trans(route.meta.trans, {
        attribute: $trans(route.meta.label),
      })
    "
    :navs="[{ label: $trans('customize.generaltext.generaltext'), path: 'GeneraltextList' }]"
  >
    <PageHeaderAction
      name="Generaltext"
      :title="$trans('customize.generaltext.generaltext')"
      :actions="['list']"
    />
  </PageHeader>

  <ParentTransition appear :visibility="true">
    <ShowItem
      :init-url="initUrl"
      :uuid="route.params.uuid"
      @setItem="setItem"
      @redirectTo="router.push({ name: 'Generaltext' })"
    >
      <BaseCard v-if="generaltext.uuid">
        <template #name>
          {{ generaltext.name }}
        </template>
        <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
          <BaseDataView :label="$trans('customize.generaltext.props.name')">
            <div v-html="generaltext.name"></div>
          </BaseDataView>

          <BaseDataView :label="$trans('general.created_at')">
            {{ generaltext.createdAt }}
          </BaseDataView>

          <BaseDataView :label="$trans('general.updated_at')">
            {{ generaltext.updatedAt }}
          </BaseDataView>
        </dl>
        <template #footer>
          <ShowButton>
            <BaseButton
              design="primary"
              @click="
                router.push({
                  name: 'GeneraltextEdit',
                  params: { uuid: generaltext.uuid },
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
  name: "GeneraltextShow",
};
</script>

<script setup>
import { reactive } from "vue";
import { useRoute, useRouter } from "vue-router";

const route = useRoute();
const router = useRouter();

const initialGeneraltext = {};

const initUrl = "customize/generaltext/";

const generaltext = reactive({ ...initialGeneraltext });

const setItem = (data) => {
  Object.assign(generaltext, data);
};
</script>
