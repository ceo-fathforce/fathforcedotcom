<template>
  <PageHeader
    :title="
      $trans(route.meta.trans, {
        attribute: $trans(route.meta.label),
      })
    "
    :navs="[{ label: $trans('landing.page.page'), path: 'PageList' }]"
  >
    <PageHeaderAction
      name="Page"
      :title="$trans('landing.page.page')"
      :actions="['list']"
    />
  </PageHeader>

  <ParentTransition appear :visibility="true">
    <ShowItem
      :init-url="initUrl"
      :uuid="route.params.uuid"
      @setItem="setItem"
      @redirectTo="router.push({ name: 'Page' })"
    >
      <BaseCard v-if="page.uuid">
        <template #name>
          {{ page.name }}
        </template>
        <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
          <BaseDataView :label="$trans('landing.page.props.name')">
            <div v-html="page.name"></div>
          </BaseDataView>

          <BaseDataView :label="$trans('landing.page.props.description')">
            <div v-html="page.description"></div>
          </BaseDataView>

          <BaseDataView
            :label="$trans('landing.pagecategory.pagecategory')"
          >
            <div v-html="page.pagecategorytitle"></div>
          </BaseDataView>

          <BaseDataView class="col-span-1 sm:col-span-2">
            <ListMedia
              :media="page.media"
              :url="`/app/landing/pages/${page.uuid}/`"
            />
          </BaseDataView>

          <BaseDataView :label="$trans('general.created_at')">
            {{ page.createdAt }}
          </BaseDataView>

          <BaseDataView :label="$trans('general.updated_at')">
            {{ page.updatedAt }}
          </BaseDataView>
        </dl>
        <template #footer>
          <ShowButton>
            <BaseButton
              design="primary"
              @click="
                router.push({
                  name: 'PageEdit',
                  params: { uuid: page.uuid },
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
  name: "PageShow",
};
</script>

<script setup>
import { reactive } from "vue";
import { useRoute, useRouter } from "vue-router";

const route = useRoute();
const router = useRouter();

const initialPage = {};

const initUrl = "landing/page/";

const page = reactive({ ...initialPage });

const setItem = (data) => {
  Object.assign(page, data);
};
</script>
