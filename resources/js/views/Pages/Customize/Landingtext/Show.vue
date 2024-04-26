<template>
  <PageHeader
    :title="
      $trans(route.meta.trans, {
        attribute: $trans(route.meta.label),
      })
    "
    :navs="[{ label: $trans('customize.landingtext.landingtext'), path: 'LandingtextList' }]"
  >
    <PageHeaderAction
      name="Landingtext"
      :title="$trans('customize.landingtext.landingtext')"
      :actions="['list']"
    />
  </PageHeader>

  <ParentTransition appear :visibility="true">
    <ShowItem
      :init-url="initUrl"
      :uuid="route.params.uuid"
      @setItem="setItem"
      @redirectTo="router.push({ name: 'Landingtext' })"
    >
      <BaseCard v-if="landingtext.uuid">
        <template #name>
          {{ landingtext.name }}
        </template>
        <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
          <BaseDataView :label="$trans('customize.landingtext.props.name')">
            <div v-html="landingtext.name"></div>
          </BaseDataView>

          <BaseDataView :label="$trans('general.created_at')">
            {{ landingtext.createdAt }}
          </BaseDataView>

          <BaseDataView :label="$trans('general.updated_at')">
            {{ landingtext.updatedAt }}
          </BaseDataView>
        </dl>
        <template #footer>
          <ShowButton>
            <BaseButton
              design="primary"
              @click="
                router.push({
                  name: 'LandingtextEdit',
                  params: { uuid: landingtext.uuid },
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
  name: "LandingtextShow",
};
</script>

<script setup>
import { reactive } from "vue";
import { useRoute, useRouter } from "vue-router";

const route = useRoute();
const router = useRouter();

const initialLandingtext = {};

const initUrl = "customize/landingtext/";

const landingtext = reactive({ ...initialLandingtext });

const setItem = (data) => {
  Object.assign(landingtext, data);
};
</script>
