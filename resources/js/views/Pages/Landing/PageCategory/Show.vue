<template>
    <PageHeader
        :title="
            $trans(route.meta.trans, {
                attribute: $trans(route.meta.label),
            })
        "
        :navs="[{ label: $trans('landing.pagecategory.pagecategory'), path: 'PageCategoryList' }]"
    >
        <PageHeaderAction
            name="PageCategory"
            :title="$trans('landing.pagecategory.pagecategory')"
            :actions="['list']"
        />
    </PageHeader>

    <ParentTransition appear :visibility="true">
        <ShowItem
            :init-url="initUrl"
            :uuid="route.params.uuid"
            @setItem="setItem"
            @redirectTo="router.push({name: 'PageCategory'})"
        >
            <BaseCard v-if="pagecategory.uuid">
                <template #title>
                    {{pagecategory.title}}
                </template>
                <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                    <BaseDataView class="col-span-1 sm:col-span-2" :label="$trans('pagecategory.props.title')">
                        <div v-html="pagecategory.title"></div>
                    </BaseDataView>

                    <BaseDataView :label="$trans('general.created_at')">
                        {{pagecategory.createdAt}}
                    </BaseDataView>

                    <BaseDataView :label="$trans('general.updated_at')">
                        {{pagecategory.updatedAt}}
                    </BaseDataView>
                </dl>
                <template #footer>
                    <ShowButton>
                        <BaseButton design="primary" @click="router.push({name: 'PageCategoryEdit', params: {uuid: pagecategory.uuid}})">
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
    name: "PageCategoryShow"
}
</script>

<script setup>
import { reactive } from "vue";
import { useRoute, useRouter } from "vue-router";

const route = useRoute();
const router = useRouter();

const initialPageCategory = {};

const initUrl = "landing/pagecategory/"

const pagecategory = reactive({ ...initialPageCategory });

const setItem = (data) => {
    Object.assign(pagecategory, data);
};
</script>
