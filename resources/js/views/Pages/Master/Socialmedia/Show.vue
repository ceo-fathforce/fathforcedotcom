<template>
    <PageHeader
        :title="
            $trans(route.meta.trans, {
                attribute: $trans(route.meta.label),
            })
        "
        :navs="[{ label: $trans('master.socialmedia.socialmedia'), path: 'SocialmediaList' }]"
    >
        <PageHeaderAction
            name="Socialmedia"
            :title="$trans('master.socialmedia.socialmedia')"
            :actions="['list']"
        />
    </PageHeader>

    <ParentTransition appear :visibility="true">
        <ShowItem
            :init-url="initUrl"
            :uuid="route.params.uuid"
            @setItem="setItem"
            @redirectTo="router.push({name: 'Socialmedia'})"
        >
            <BaseCard v-if="socialmedia.uuid">
                <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                    <BaseDataView class="col-span-1 sm:col-span-2" :label="$trans('master.socialmedia.props.facebook')">
                        <div v-html="socialmedia.facebook"></div>
                    </BaseDataView>

                    <BaseDataView class="col-span-1 sm:col-span-2" :label="$trans('master.socialmedia.props.instagram')">
                        <div v-html="socialmedia.instagram"></div>
                    </BaseDataView>

                    <BaseDataView class="col-span-1 sm:col-span-2" :label="$trans('master.socialmedia.props.youtube')">
                        <div v-html="socialmedia.youtube"></div>
                    </BaseDataView>

                    <BaseDataView class="col-span-1 sm:col-span-2" :label="$trans('master.socialmedia.props.twitter')">
                        <div v-html="socialmedia.twitter"></div>
                    </BaseDataView>

                    <BaseDataView class="col-span-1 sm:col-span-2" :label="$trans('master.socialmedia.props.telegram')">
                        <div v-html="socialmedia.telegram"></div>
                    </BaseDataView>

                    <BaseDataView :label="$trans('general.created_at')">
                        {{socialmedia.createdAt}}
                    </BaseDataView>

                    <BaseDataView :label="$trans('general.updated_at')">
                        {{socialmedia.updatedAt}}
                    </BaseDataView>
                </dl>
                <template #footer>
                    <ShowButton>
                        <BaseButton design="primary" @click="router.push({name: 'SocialmediaEdit', params: {uuid: socialmedia.uuid}})">
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
    name: "SocialmediaShow"
}
</script>

<script setup>
import { reactive } from "vue";
import { useRoute, useRouter } from "vue-router";

const route = useRoute();
const router = useRouter();

const initialSocialmedia = {};

const initUrl = "master/socialmedia/"

const socialmedia = reactive({ ...initialSocialmedia });

const setItem = (data) => {
    Object.assign(socialmedia, data);
};
</script>
