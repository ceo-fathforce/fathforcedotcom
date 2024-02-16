<template>
    <PageHeader
        :title="
            $trans(route.meta.trans, {
                attribute: $trans(route.meta.label),
            })
        "
        :navs="[{ label: $trans('master.gallerycategory.gallerycategory'), path: 'GalleryCategoryList' }]"
    >
        <PageHeaderAction
            name="GalleryCategory"
            :title="$trans('master.gallerycategory.gallerycategory')"
            :actions="['list']"
        />
    </PageHeader>

    <ParentTransition appear :visibility="true">
        <ShowItem
            :init-url="initUrl"
            :uuid="route.params.uuid"
            @setItem="setItem"
            @redirectTo="router.push({name: 'GalleryCategory'})"
        >
            <BaseCard v-if="gallerycategory.uuid">
                <template #title>
                    {{gallerycategory.title}}
                </template>
                <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                    <BaseDataView class="col-span-1 sm:col-span-2" :label="$trans('gallerycategory.props.title')">
                        <div v-html="gallerycategory.title"></div>
                    </BaseDataView>

                    <BaseDataView :label="$trans('general.created_at')">
                        {{gallerycategory.createdAt}}
                    </BaseDataView>

                    <BaseDataView :label="$trans('general.updated_at')">
                        {{gallerycategory.updatedAt}}
                    </BaseDataView>
                </dl>
                <template #footer>
                    <ShowButton>
                        <BaseButton design="primary" @click="router.push({name: 'GalleryCategoryEdit', params: {uuid: gallerycategory.uuid}})">
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
    name: "GalleryCategoryShow"
}
</script>

<script setup>
import { reactive } from "vue";
import { useRoute, useRouter } from "vue-router";

const route = useRoute();
const router = useRouter();

const initialGalleryCategory = {};

const initUrl = "master/gallerycategory/"

const gallerycategory = reactive({ ...initialGalleryCategory });

const setItem = (data) => {
    Object.assign(gallerycategory, data);
};
</script>
