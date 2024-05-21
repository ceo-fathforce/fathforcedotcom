<template>
  <PageHeader
    :title="
      $trans(route.meta.trans, {
        attribute: $trans(route.meta.label),
      })
    "
    :navs="[{ label: $trans('customize.companyimage.companyimage'), path: 'CompanyimageList' }]"
  >
    <PageHeaderAction
      name="Companyimage"
      :title="$trans('customize.companyimage.companyimage')"
      :actions="['list']"
    />
  </PageHeader>

  <ParentTransition appear :visibility="true">
    <ShowItem
      :init-url="initUrl"
      :uuid="route.params.uuid"
      @setItem="setItem"
      @redirectTo="router.push({ name: 'Companyimage' })"
    >
      <BaseCard v-if="companyimage.uuid">
        <template #name>
          {{ companyimage.name }}
        </template>
        <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
          <BaseDataView class="col-span-1 sm:col-span-2">
            <ListMedia
              :media="companyimage.media"
              :url="`/app/customize/companyimages/${companyimage.uuid}/`"
            />
          </BaseDataView>

          <BaseDataView :label="$trans('general.created_at')">
            {{ companyimage.createdAt }}
          </BaseDataView>

          <BaseDataView :label="$trans('general.updated_at')">
            {{ companyimage.updatedAt }}
          </BaseDataView>
        </dl>
        <template #footer>
          <ShowButton>
            <BaseButton
              design="primary"
              @click="
                router.push({
                  name: 'CompanyimageEdit',
                  params: { uuid: companyimage.uuid },
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
  name: "CompanyimageShow",
};
</script>

<script setup>
import { reactive } from "vue";
import { useRoute, useRouter } from "vue-router";

const route = useRoute();
const router = useRouter();

const initialCompanyimage = {};

const initUrl = "customize/companyimage/";

const companyimage = reactive({ ...initialCompanyimage });

const setItem = (data) => {
  Object.assign(companyimage, data);
};
</script>
