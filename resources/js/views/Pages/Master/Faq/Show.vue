<template>
  <PageHeader
    :title="
      $trans(route.meta.trans, {
        attribute: $trans(route.meta.label),
      })
    "
    :navs="[{ label: $trans('master.faq.faq'), path: 'FaqList' }]"
  >
    <PageHeaderAction
      name="Faq"
      :title="$trans('master.faq.faq')"
      :actions="['list']"
    />
  </PageHeader>

  <ParentTransition appear :visibility="true">
    <ShowItem
      :init-url="initUrl"
      :uuid="route.params.uuid"
      @setItem="setItem"
      @redirectTo="router.push({ name: 'Faq' })"
    >
      <BaseCard v-if="faq.uuid">
        <template #name>
          {{ faq.name }}
        </template>
        <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
          <BaseDataView :label="$trans('master.faq.props.name')">
            <div v-html="faq.name"></div>
          </BaseDataView>

          <BaseDataView :label="$trans('master.faq.props.description')">
            <div v-html="faq.description"></div>
          </BaseDataView>

          <BaseDataView :label="$trans('general.created_at')">
            {{ faq.createdAt }}
          </BaseDataView>

          <BaseDataView :label="$trans('general.updated_at')">
            {{ faq.updatedAt }}
          </BaseDataView>
        </dl>
        <template #footer>
          <ShowButton>
            <BaseButton
              design="primary"
              @click="
                router.push({
                  name: 'FaqEdit',
                  params: { uuid: faq.uuid },
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
  name: "FaqShow",
};
</script>

<script setup>
import { reactive } from "vue";
import { useRoute, useRouter } from "vue-router";

const route = useRoute();
const router = useRouter();

const initialFaq = {};

const initUrl = "master/faq/";

const faq = reactive({ ...initialFaq });

const setItem = (data) => {
  Object.assign(faq, data);
};
</script>
