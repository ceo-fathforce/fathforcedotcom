<template>
  <PageHeader
    :title="
      $trans(route.meta.trans, {
        attribute: $trans(route.meta.label),
      })
    "
    :navs="[{ label: $trans('master.term.term'), path: 'TermList' }]"
  >
    <PageHeaderAction
      name="Term"
      :title="$trans('master.term.term')"
      :actions="['list']"
    />
  </PageHeader>

  <ParentTransition appear :visibility="true">
    <ShowItem
      :init-url="initUrl"
      :uuid="route.params.uuid"
      @setItem="setItem"
      @redirectTo="router.push({ name: 'Term' })"
    >
      <BaseCard v-if="term.uuid">
        <template #name>
          {{ term.name }}
        </template>
        <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
          <BaseDataView :label="$trans('master.term.props.name')">
            <div v-html="term.name"></div>
          </BaseDataView>

          <BaseDataView :label="$trans('master.term.props.description')">
            <div v-html="term.description"></div>
          </BaseDataView>

          <BaseDataView :label="$trans('general.created_at')">
            {{ term.createdAt }}
          </BaseDataView>

          <BaseDataView :label="$trans('general.updated_at')">
            {{ term.updatedAt }}
          </BaseDataView>
        </dl>
        <template #footer>
          <ShowButton>
            <BaseButton
              design="primary"
              @click="
                router.push({
                  name: 'TermEdit',
                  params: { uuid: term.uuid },
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
  name: "TermShow",
};
</script>

<script setup>
import { reactive } from "vue";
import { useRoute, useRouter } from "vue-router";

const route = useRoute();
const router = useRouter();

const initialTerm = {};

const initUrl = "master/term/";

const term = reactive({ ...initialTerm });

const setItem = (data) => {
  Object.assign(term, data);
};
</script>
