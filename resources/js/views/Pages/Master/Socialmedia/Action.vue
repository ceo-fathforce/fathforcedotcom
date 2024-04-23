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
        <SocialmediaForm></SocialmediaForm>
    </ParentTransition>
</template>

<script>
export default {
    name: "SocialmediaAction",
};
</script>

<script setup>
import { useRoute } from "vue-router";
import SocialmediaForm from "./Form.vue";

const route = useRoute();
</script>
