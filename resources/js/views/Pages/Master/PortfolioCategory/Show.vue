<template>
    <PageHeader
        :title="
            $trans(route.meta.trans, {
                attribute: $trans(route.meta.label),
            })
        "
        :navs="[{ label: $trans('master.portfoliocategory.portfoliocategory'), path: 'PortfolioCategoryList' }]"
    >
        <PageHeaderAction
            name="PortfolioCategory"
            :title="$trans('master.portfoliocategory.portfoliocategory')"
            :actions="['list']"
        />
    </PageHeader>

    <ParentTransition appear :visibility="true">
        <ShowItem
            :init-url="initUrl"
            :uuid="route.params.uuid"
            @setItem="setItem"
            @redirectTo="router.push({name: 'PortfolioCategory'})"
        >
            <BaseCard v-if="portfoliocategory.uuid">
                <template #title>
                    {{portfoliocategory.title}}
                </template>
                <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                    <BaseDataView class="col-span-1 sm:col-span-2" :label="$trans('portfoliocategory.props.title')">
                        <div v-html="portfoliocategory.title"></div>
                    </BaseDataView>

                    <BaseDataView :label="$trans('general.created_at')">
                        {{portfoliocategory.createdAt}}
                    </BaseDataView>

                    <BaseDataView :label="$trans('general.updated_at')">
                        {{portfoliocategory.updatedAt}}
                    </BaseDataView>
                </dl>
                <template #footer>
                    <ShowButton>
                        <BaseButton design="primary" @click="router.push({name: 'PortfolioCategoryEdit', params: {uuid: portfoliocategory.uuid}})">
                            {{$trans("general.edit")}}
                        </BaseButton>
                    </ShowButton>
                </template>
            </BaseCard>
        </ShowItem>
    </ParentTransition>
</template>

<script>
export default {
    name: "PortfolioCategoryShow"
}
</script>

<script setup>
import { reactive } from "vue";
import { useRoute, useRouter } from "vue-router";

const route = useRoute();
const router = useRouter();

const initialPortfolioCategory = {};

const initUrl = "master/portfoliocategory/"

const portfoliocategory = reactive({ ...initialPortfolioCategory });

const setItem = (data) => {
    Object.assign(portfoliocategory, data);
};
</script>
