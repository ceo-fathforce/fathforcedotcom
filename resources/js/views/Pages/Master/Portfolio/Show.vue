<template>
  <PageHeader :title="$trans(route.meta.trans, {
    attribute: $trans(route.meta.label),
  })
    " :navs="[{ label: $trans('master.portfolio.portfolio'), path: 'PortfolioList' }]">
    <PageHeaderAction name="Portfolio" :title="$trans('master.portfolio.portfolio')" :actions="['list']" />
  </PageHeader>

  <ParentTransition appear :visibility="true">
    <ShowItem :init-url="initUrl" :uuid="route.params.uuid" @setItem="setItem"
      @redirectTo="router.push({ name: 'Portfolio' })">
      <BaseCard v-if="portfolio.uuid">
        <template #name>
          {{ portfolio.name }}
        </template>
        <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
          <BaseDataView :label="$trans('master.portfolio.props.name')">
            <div v-html="portfolio.name"></div>
          </BaseDataView>

          <BaseDataView :label="$trans('master.portfolio.props.description')">
            <div v-html="portfolio.description"></div>
          </BaseDataView>

          <BaseDataView :label="$trans('master.portfoliocategory.portfoliocategory')">
            <div v-html="portfolio.portfoliocategorytitle"></div>
          </BaseDataView>

          <BaseDataView class="col-span-1 sm:col-span-2">
            <ListMedia :media="portfolio.media" :url="`/app/master/portfolios/${portfolio.uuid}/`" />
          </BaseDataView>

          <BaseDataView :label="$trans('general.created_at')">
            {{ portfolio.createdAt }}
          </BaseDataView>

          <BaseDataView :label="$trans('general.updated_at')">
            {{ portfolio.updatedAt }}
          </BaseDataView>
        </dl>
        <template #footer>
          <ShowButton>
            <BaseButton design="primary" @click="
              router.push({
                name: 'PortfolioEdit',
                params: { uuid: portfolio.uuid },
              })
              ">
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
  name: "PortfolioShow",
};
</script>

<script setup>
import { reactive } from "vue";
import { useRoute, useRouter } from "vue-router";

const route = useRoute();
const router = useRouter();

const initialPortfolio = {};

const initUrl = "master/portfolio/";

const portfolio = reactive({ ...initialPortfolio });

const setItem = (data) => {
  Object.assign(portfolio, data);
};
</script>
