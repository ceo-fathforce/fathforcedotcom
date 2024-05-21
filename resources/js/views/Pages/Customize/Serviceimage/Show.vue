<template>
  <PageHeader
    :title="
      $trans(route.meta.trans, {
        attribute: $trans(route.meta.label),
      })
    "
    :navs="[{ label: $trans('customize.serviceimage.serviceimage'), path: 'ServiceimageList' }]"
  >
    <PageHeaderAction
      name="Serviceimage"
      :title="$trans('customize.serviceimage.serviceimage')"
      :actions="['list']"
    />
  </PageHeader>

  <ParentTransition appear :visibility="true">
    <ShowItem
      :init-url="initUrl"
      :uuid="route.params.uuid"
      @setItem="setItem"
      @redirectTo="router.push({ name: 'Serviceimage' })"
    >
      <BaseCard v-if="serviceimage.uuid">
        <template #name>
          {{ serviceimage.name }}
        </template>
        <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
          <BaseDataView class="col-span-1 sm:col-span-2">
            <ListMedia
              :media="serviceimage.media"
              :url="`/app/customize/serviceimages/${serviceimage.uuid}/`"
            />
          </BaseDataView>

          <BaseDataView :label="$trans('general.created_at')">
            {{ serviceimage.createdAt }}
          </BaseDataView>

          <BaseDataView :label="$trans('general.updated_at')">
            {{ serviceimage.updatedAt }}
          </BaseDataView>
        </dl>
        <template #footer>
          <ShowButton>
            <BaseButton
              design="primary"
              @click="
                router.push({
                  name: 'ServiceimageEdit',
                  params: { uuid: serviceimage.uuid },
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
  name: "ServiceimageShow",
};
</script>

<script setup>
import { reactive } from "vue";
import { useRoute, useRouter } from "vue-router";

const route = useRoute();
const router = useRouter();

const initialServiceimage = {};

const initUrl = "customize/serviceimage/";

const serviceimage = reactive({ ...initialServiceimage });

const setItem = (data) => {
  Object.assign(serviceimage, data);
};
</script>
