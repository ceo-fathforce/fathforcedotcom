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
        <ViewcontactForm></ViewcontactForm>
    </ParentTransition>
</template>

<script>
export default {
    name: "ViewcontactAction",
};
</script>

<script setup>
import { useRoute } from "vue-router";
import ViewcontactForm from "./Form.vue";

const route = useRoute();
</script>
