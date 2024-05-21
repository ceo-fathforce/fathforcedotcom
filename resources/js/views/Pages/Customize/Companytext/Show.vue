<template>
  <PageHeader
    :title="
      $trans(route.meta.trans, {
        attribute: $trans(route.meta.label),
      })
    "
    :navs="[{ label: $trans('customize.companytext.companytext'), path: 'CompanytextList' }]"
  >
    <PageHeaderAction
      name="Companytext"
      :title="$trans('customize.companytext.companytext')"
      :actions="['list']"
    />
  </PageHeader>

  <ParentTransition appear :visibility="true">
    <ShowItem
      :init-url="initUrl"
      :uuid="route.params.uuid"
      @setItem="setItem"
      @redirectTo="router.push({ name: 'Companytext' })"
    >
      <BaseCard v-if="companytext.uuid">
        <template #name>
          {{ companytext.name }}
        </template>
        <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
          <BaseDataView :label="$trans('customize.companytext.props.name')">
            <div v-html="companytext.name"></div>
          </BaseDataView>

          <BaseDataView :label="$trans('general.created_at')">
            {{ companytext.createdAt }}
          </BaseDataView>

          <BaseDataView :label="$trans('general.updated_at')">
            {{ companytext.updatedAt }}
          </BaseDataView>
        </dl>
        <template #footer>
          <ShowButton>
            <BaseButton
              design="primary"
              @click="
                router.push({
                  name: 'CompanytextEdit',
                  params: { uuid: companytext.uuid },
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
  name: "CompanytextShow",
};
</script>

<script setup>
import { reactive } from "vue";
import { useRoute, useRouter } from "vue-router";

const route = useRoute();
const router = useRouter();

const initialCompanytext = {};

const initUrl = "customize/companytext/";

const companytext = reactive({ ...initialCompanytext });

const setItem = (data) => {
  Object.assign(companytext, data);
};
</script>
