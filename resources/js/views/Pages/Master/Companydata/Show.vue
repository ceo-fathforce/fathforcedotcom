<template>
    <PageHeader
        :title="
            $trans(route.meta.trans, {
                attribute: $trans(route.meta.label),
            })
        "
        :navs="[{ label: $trans('master.companydata.companydata'), path: 'CompanydataList' }]"
    >
        <PageHeaderAction
            name="Companydata"
            :title="$trans('master.companydata.companydata')"
            :actions="['list']"
        />
    </PageHeader>

    <ParentTransition appear :visibility="true">
        <ShowItem
            :init-url="initUrl"
            :uuid="route.params.uuid"
            @setItem="setItem"
            @redirectTo="router.push({name: 'Companydata'})"
        >
            <BaseCard v-if="companydata.uuid">
                <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                    <BaseDataView class="col-span-1 sm:col-span-2" :label="$trans('master.companydata.props.completedprojects')">
                        <div v-html="companydata.completedprojects"></div>
                    </BaseDataView>

                    <BaseDataView class="col-span-1 sm:col-span-2" :label="$trans('master.companydata.props.totalproducts')">
                        <div v-html="companydata.totalproducts"></div>
                    </BaseDataView>

                    <BaseDataView class="col-span-1 sm:col-span-2" :label="$trans('master.companydata.props.satisfiedcostumers')">
                        <div v-html="companydata.satisfiedcostumers"></div>
                    </BaseDataView>

                    <BaseDataView class="col-span-1 sm:col-span-2" :label="$trans('master.companydata.props.employees')">
                        <div v-html="companydata.employees"></div>
                    </BaseDataView>

                    <BaseDataView :label="$trans('general.created_at')">
                        {{companydata.createdAt}}
                    </BaseDataView>

                    <BaseDataView :label="$trans('general.updated_at')">
                        {{companydata.updatedAt}}
                    </BaseDataView>
                </dl>
                <template #footer>
                    <ShowButton>
                        <BaseButton design="primary" @click="router.push({name: 'CompanydataEdit', params: {uuid: companydata.uuid}})">
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
    name: "CompanydataShow"
}
</script>

<script setup>
import { reactive } from "vue";
import { useRoute, useRouter } from "vue-router";

const route = useRoute();
const router = useRouter();

const initialCompanydata = {};

const initUrl = "master/companydata/"

const companydata = reactive({ ...initialCompanydata });

const setItem = (data) => {
    Object.assign(companydata, data);
};
</script>
