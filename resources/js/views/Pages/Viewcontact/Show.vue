<template>
    <PageHeader
        :title="
            $trans(route.meta.trans, {
                attribute: $trans(route.meta.label),
            })
        "
        :navs="[{ label: $trans('viewcontact.viewcontact'), path: 'ViewcontactList' }]"
    >
        <PageHeaderAction
            name="Viewcontact"
            :title="$trans('viewcontact.viewcontact')"
            :actions="['list']"
        />
    </PageHeader>

    <ParentTransition appear :visibility="true">
        <ShowItem
            :init-url="initUrl"
            :uuid="route.params.uuid"
            @setItem="setItem"
            @redirectTo="router.push({name: 'Viewcontact'})"
        >
            <BaseCard v-if="viewcontact.uuid">
                <template #title>
                    {{viewcontact.first}}
                </template>
                <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                    <BaseDataView class="col-span-1 sm:col-span-2" :label="$trans('viewcontact.props.last')">
                        <div v-html="viewcontact.last"></div>
                    </BaseDataView>

                    <BaseDataView class="col-span-1 sm:col-span-2" :label="$trans('viewcontact.props.email')">
                        <div v-html="viewcontact.email"></div>
                    </BaseDataView>

                    <BaseDataView class="col-span-1 sm:col-span-2" :label="$trans('viewcontact.props.department')">
                        <div v-html="viewcontact.department"></div>
                    </BaseDataView>

                    <BaseDataView class="col-span-1 sm:col-span-2" :label="$trans('viewcontact.props.message')">
                        <div v-html="viewcontact.message"></div>
                    </BaseDataView>

                    <BaseDataView class="col-span-1 sm:col-span-2">
                        <ListMedia :media="viewcontact.media" :url="`/app/viewcontacts/${viewcontact.uuid}/`" />
                    </BaseDataView>

                    <BaseDataView :label="$trans('general.created_at')">
                        {{viewcontact.createdAt}}
                    </BaseDataView>

                    <BaseDataView :label="$trans('general.updated_at')">
                        {{viewcontact.updatedAt}}
                    </BaseDataView>
                </dl>
                <template #footer>
                    <ShowButton>
                        <BaseButton design="primary" @click="router.push({name: 'ViewcontactEdit', params: {uuid: viewcontact.uuid}})">
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
    name: "ViewcontactShow"
}
</script>

<script setup>
import { reactive } from "vue";
import { useRoute, useRouter } from "vue-router";

const route = useRoute();
const router = useRouter();

const initialViewcontact = {};

const initUrl = "viewcontact/"

const viewcontact = reactive({ ...initialViewcontact });

const setItem = (data) => {
    Object.assign(viewcontact, data);
};
</script>
