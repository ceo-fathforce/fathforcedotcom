<template>
  <PageHeader
    :title="
      $trans(route.meta.trans, {
        attribute: $trans(route.meta.label),
      })
    "
    :navs="[{ label: $trans('master.testimony.testimony'), path: 'TestimonyList' }]"
  >
    <PageHeaderAction
      name="Testimony"
      :title="$trans('master.testimony.testimony')"
      :actions="['list']"
    />
  </PageHeader>

  <ParentTransition appear :visibility="true">
    <ShowItem
      :init-url="initUrl"
      :uuid="route.params.uuid"
      @setItem="setItem"
      @redirectTo="router.push({ name: 'Testimony' })"
    >
      <BaseCard v-if="testimony.uuid">
        <template #name>
          {{ testimony.name }}
        </template>
        <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
          <BaseDataView :label="$trans('master.testimony.props.name')">
            <div v-html="testimony.name"></div>
          </BaseDataView>

          <BaseDataView :label="$trans('master.testimony.props.description')">
            <div v-html="testimony.description"></div>
          </BaseDataView>

          <BaseDataView class="col-span-1 sm:col-span-2">
            <ListMedia
              :media="testimony.media"
              :url="`/app/master/testimonys/${testimony.uuid}/`"
            />
          </BaseDataView>

          <BaseDataView :label="$trans('general.created_at')">
            {{ testimony.createdAt }}
          </BaseDataView>

          <BaseDataView :label="$trans('general.updated_at')">
            {{ testimony.updatedAt }}
          </BaseDataView>
        </dl>
        <template #footer>
          <ShowButton>
            <BaseButton
              design="primary"
              @click="
                router.push({
                  name: 'TestimonyEdit',
                  params: { uuid: testimony.uuid },
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
  name: "TestimonyShow",
};
</script>

<script setup>
import { reactive } from "vue";
import { useRoute, useRouter } from "vue-router";

const route = useRoute();
const router = useRouter();

const initialTestimony = {};

const initUrl = "master/testimony/";

const testimony = reactive({ ...initialTestimony });

const setItem = (data) => {
  Object.assign(testimony, data);
};
</script>
