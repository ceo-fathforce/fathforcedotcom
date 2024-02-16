<template>
  <PageHeader
    :title="
      $trans(route.meta.trans, {
        attribute: $trans(route.meta.label),
      })
    "
    :navs="[{ label: $trans('master.gallery.gallery'), path: 'GalleryList' }]"
  >
    <PageHeaderAction
      name="Gallery"
      :title="$trans('master.gallery.gallery')"
      :actions="['list']"
    />
  </PageHeader>

  <ParentTransition appear :visibility="true">
    <ShowItem
      :init-url="initUrl"
      :uuid="route.params.uuid"
      @setItem="setItem"
      @redirectTo="router.push({ name: 'Gallery' })"
    >
      <BaseCard v-if="gallery.uuid">
        <template #name>
          {{ gallery.name }}
        </template>
        <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
          <BaseDataView :label="$trans('master.gallery.props.name')">
            <div v-html="gallery.name"></div>
          </BaseDataView>
          <BaseDataView
            :label="$trans('master.gallerycategory.gallerycategory')"
          >
            <div v-html="gallery.gallerycategorytitle"></div>
          </BaseDataView>

          <BaseDataView class="col-span-1 sm:col-span-2">
            <ListMedia
              :media="gallery.media"
              :url="`/app/master/gallerys/${gallery.uuid}/`"
            />
          </BaseDataView>

          <BaseDataView :label="$trans('general.created_at')">
            {{ gallery.createdAt }}
          </BaseDataView>

          <BaseDataView :label="$trans('general.updated_at')">
            {{ gallery.updatedAt }}
          </BaseDataView>
        </dl>
        <template #footer>
          <ShowButton>
            <BaseButton
              design="primary"
              @click="
                router.push({
                  name: 'GalleryEdit',
                  params: { uuid: gallery.uuid },
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
  name: "GalleryShow",
};
</script>

<script setup>
import { reactive } from "vue";
import { useRoute, useRouter } from "vue-router";

const route = useRoute();
const router = useRouter();

const initialGallery = {};

const initUrl = "master/gallery/";

const gallery = reactive({ ...initialGallery });

const setItem = (data) => {
  Object.assign(gallery, data);
};
</script>
