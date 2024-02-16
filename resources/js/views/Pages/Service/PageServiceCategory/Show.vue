<template>
    <PageServiceHeader
        :title="
            $trans(route.meta.trans, {
                attribute: $trans(route.meta.label),
            })
        "
        :navs="[{ label: $trans('service.pageservicecategory.pageservicecategory'), path: 'PageServiceCategoryList' }]"
    >
        <PageServiceHeaderAction
            name="PageServiceCategory"
            :title="$trans('service.pageservicecategory.pageservicecategory')"
            :actions="['list']"
        />
    </PageServiceHeader>

    <ParentTransition appear :visibility="true">
        <ShowItem
            :init-url="initUrl"
            :uuid="route.params.uuid"
            @setItem="setItem"
            @redirectTo="router.push({name: 'PageServiceCategory'})"
        >
            <BaseCard v-if="pageservicecategory.uuid">
                <template #title>
                    {{pageservicecategory.title}}
                </template>
                <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                    <BaseDataView class="col-span-1 sm:col-span-2" :label="$trans('pageservicecategory.props.title')">
                        <div v-html="pageservicecategory.title"></div>
                    </BaseDataView>

                    <BaseDataView :label="$trans('general.created_at')">
                        {{pageservicecategory.createdAt}}
                    </BaseDataView>

                    <BaseDataView :label="$trans('general.updated_at')">
                        {{pageservicecategory.updatedAt}}
                    </BaseDataView>
                </dl>
                <template #footer>
                    <ShowButton>
                        <BaseButton design="primary" @click="router.push({name: 'PageServiceCategoryEdit', params: {uuid: pageservicecategory.uuid}})">
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
    name: "PageServiceCategoryShow"
}
</script>

<script setup>
import { reactive } from "vue";
import { useRoute, useRouter } from "vue-router";

const route = useRoute();
const router = useRouter();

const initialPageServiceCategory = {};

const initUrl = "service/pageservicecategory/"

const pageservicecategory = reactive({ ...initialPageServiceCategory });

const setItem = (data) => {
    Object.assign(pageservicecategory, data);
};
</script>
