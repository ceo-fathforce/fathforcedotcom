<template>
  <PageHeader
    :title="
      $trans(route.meta.trans, {
        attribute: $trans(route.meta.label),
      })
    "
    :navs="[{ label: $trans('customize.generalimage.generalimage'), path: 'GeneralimageList' }]"
  >
    <PageHeaderAction
      name="Generalimage"
      :title="$trans('customize.generalimage.generalimage')"
      :actions="['list']"
    />
  </PageHeader>

  <ParentTransition appear :visibility="true">
    <ShowItem
      :init-url="initUrl"
      :uuid="route.params.uuid"
      @setItem="setItem"
      @redirectTo="router.push({ name: 'Generalimage' })"
    >
      <BaseCard v-if="generalimage.uuid">
        <template #name>
          {{ generalimage.name }}
        </template>
        <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
          <BaseDataView class="col-span-1 sm:col-span-2">
            <ListMedia
              :media="generalimage.media"
              :url="`/app/customize/generalimages/${generalimage.uuid}/`"
            />
          </BaseDataView>

          <BaseDataView :label="$trans('general.created_at')">
            {{ generalimage.createdAt }}
          </BaseDataView>

          <BaseDataView :label="$trans('general.updated_at')">
            {{ generalimage.updatedAt }}
          </BaseDataView>
        </dl>
        <template #footer>
          <ShowButton>
            <BaseButton
              design="primary"
              @click="
                router.push({
                  name: 'GeneralimageEdit',
                  params: { uuid: generalimage.uuid },
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
  name: "GeneralimageShow",
};
</script>

<script setup>
import { reactive } from "vue";
import { useRoute, useRouter } from "vue-router";

const route = useRoute();
const router = useRouter();

const initialGeneralimage = {};

const initUrl = "customize/generalimage/";

const generalimage = reactive({ ...initialGeneralimage });

const setItem = (data) => {
  Object.assign(generalimage, data);
};
</script>
