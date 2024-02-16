<template>
  <PageServiceHeader
    :title="
      $trans(route.meta.trans, {
        attribute: $trans(route.meta.label),
      })
    "
    :navs="[{ label: $trans('service.pageservice.pageservice'), path: 'PageServiceList' }]"
  >
    <PageServiceHeaderAction
      name="PageService"
      :title="$trans('service.pageservice.pageservice')"
      :actions="['list']"
    />
  </PageServiceHeader>

  <ParentTransition appear :visibility="true">
    <ShowItem
      :init-url="initUrl"
      :uuid="route.params.uuid"
      @setItem="setItem"
      @redirectTo="router.push({ name: 'PageService' })"
    >
      <BaseCard v-if="pageservice.uuid">
        <template #name>
          {{ pageservice.name }}
        </template>
        <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
          <BaseDataView :label="$trans('service.pageservice.props.name')">
            <div v-html="pageservice.name"></div>
          </BaseDataView>

          <BaseDataView :label="$trans('service.pageservice.props.description')">
            <div v-html="pageservice.description"></div>
          </BaseDataView>

          <BaseDataView
            :label="$trans('service.pageservicecategory.pageservicecategory')"
          >
            <div v-html="pageservice.pageservicecategorytitle"></div>
          </BaseDataView>

          <BaseDataView class="col-span-1 sm:col-span-2">
            <ListMedia
              :media="pageservice.media"
              :url="`/app/service/pageservices/${pageservice.uuid}/`"
            />
          </BaseDataView>

          <BaseDataView :label="$trans('general.created_at')">
            {{ pageservice.createdAt }}
          </BaseDataView>

          <BaseDataView :label="$trans('general.updated_at')">
            {{ pageservice.updatedAt }}
          </BaseDataView>
        </dl>
        <template #footer>
          <ShowButton>
            <BaseButton
              design="primary"
              @click="
                router.push({
                  name: 'PageServiceEdit',
                  params: { uuid: pageservice.uuid },
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
  name: "PageServiceShow",
};
</script>

<script setup>
import { reactive } from "vue";
import { useRoute, useRouter } from "vue-router";

const route = useRoute();
const router = useRouter();

const initialPageService = {};

const initUrl = "service/pageservice/";

const pageservice = reactive({ ...initialPageService });

const setItem = (data) => {
  Object.assign(pageservice, data);
};
</script>
