<template>
  <PageHeader
    :title="
      $trans(route.meta.trans, {
        attribute: $trans(route.meta.label),
      })
    "
    :navs="[{ label: $trans('customize.servicetext.servicetext'), path: 'ServicetextList' }]"
  >
    <PageHeaderAction
      name="Servicetext"
      :title="$trans('customize.servicetext.servicetext')"
      :actions="['list']"
    />
  </PageHeader>

  <ParentTransition appear :visibility="true">
    <ShowItem
      :init-url="initUrl"
      :uuid="route.params.uuid"
      @setItem="setItem"
      @redirectTo="router.push({ name: 'Servicetext' })"
    >
      <BaseCard v-if="servicetext.uuid">
        <template #name>
          {{ servicetext.name }}
        </template>
        <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
          <BaseDataView :label="$trans('customize.servicetext.props.name')">
            <div v-html="servicetext.name"></div>
          </BaseDataView>

          <BaseDataView :label="$trans('general.created_at')">
            {{ servicetext.createdAt }}
          </BaseDataView>

          <BaseDataView :label="$trans('general.updated_at')">
            {{ servicetext.updatedAt }}
          </BaseDataView>
        </dl>
        <template #footer>
          <ShowButton>
            <BaseButton
              design="primary"
              @click="
                router.push({
                  name: 'ServicetextEdit',
                  params: { uuid: servicetext.uuid },
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
  name: "ServicetextShow",
};
</script>

<script setup>
import { reactive } from "vue";
import { useRoute, useRouter } from "vue-router";

const route = useRoute();
const router = useRouter();

const initialServicetext = {};

const initUrl = "customize/servicetext/";

const servicetext = reactive({ ...initialServicetext });

const setItem = (data) => {
  Object.assign(servicetext, data);
};
</script>
