<template>
  <PageHeader
    :title="
      $trans(route.meta.trans, {
        attribute: $trans(route.meta.label),
      })
    "
    :navs="[{ label: $trans('customize.landingimage.landingimage'), path: 'LandingimageList' }]"
  >
    <PageHeaderAction
      name="Landingimage"
      :title="$trans('customize.landingimage.landingimage')"
      :actions="['list']"
    />
  </PageHeader>

  <ParentTransition appear :visibility="true">
    <ShowItem
      :init-url="initUrl"
      :uuid="route.params.uuid"
      @setItem="setItem"
      @redirectTo="router.push({ name: 'Landingimage' })"
    >
      <BaseCard v-if="landingimage.uuid">
        <template #name>
          {{ landingimage.name }}
        </template>
        <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
          <BaseDataView class="col-span-1 sm:col-span-2">
            <ListMedia
              :media="landingimage.media"
              :url="`/app/customize/landingimages/${landingimage.uuid}/`"
            />
          </BaseDataView>

          <BaseDataView :label="$trans('general.created_at')">
            {{ landingimage.createdAt }}
          </BaseDataView>

          <BaseDataView :label="$trans('general.updated_at')">
            {{ landingimage.updatedAt }}
          </BaseDataView>
        </dl>
        <template #footer>
          <ShowButton>
            <BaseButton
              design="primary"
              @click="
                router.push({
                  name: 'LandingimageEdit',
                  params: { uuid: landingimage.uuid },
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
  name: "LandingimageShow",
};
</script>

<script setup>
import { reactive } from "vue";
import { useRoute, useRouter } from "vue-router";

const route = useRoute();
const router = useRouter();

const initialLandingimage = {};

const initUrl = "customize/landingimage/";

const landingimage = reactive({ ...initialLandingimage });

const setItem = (data) => {
  Object.assign(landingimage, data);
};
</script>
