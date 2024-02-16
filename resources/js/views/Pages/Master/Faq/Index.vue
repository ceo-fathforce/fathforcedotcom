@ -0,0 +1,102 @@
<template>
    <ListItem :init-url="initUrl" @setItems="setItems">
        <template #header>
            <PageHeader :title="$trans('master.faq.faq')">
                <PageHeaderAction url="master/faqfaqs/" name="Faq"
                    :title="$trans('master.faq.faq')" :actions="actions"
                    :dropdown-actions="dropdownActions" @toggleFilter="showFilter = !showFilter"
                    @toggleImport="showImport = !showImport" />
            </PageHeader>
        </template>

        <template #import>
            <ParentTransition appear :visibility="showImport">
                <BaseImport path="master/faqs/import" @cancelled="showImport = false" @hide="showImport = false"
                    @completed="emitter.emit('listItems')" />
            </ParentTransition>
        </template>

        <template #filter>
            <ParentTransition appear :visibility="showFilter">
                <FilterForm @refresh="emitter.emit('listItems')" @hide="showFilter = false"></FilterForm>
            </ParentTransition>
        </template>

        <ParentTransition appear :visibility="true">
            <DataTable :header="faqs.headers" :meta="faqs.meta" module="Faq"
                @refresh="emitter.emit('listItems')">
                <DataRow v-for="faq in faqs.data" :key="faq.uuid">
                    <DataCell name="name">
                        {{ faq.name }}
                    </DataCell>
                    <DataCell name="description">
                        {{ faq.description }}
                    </DataCell>
                    <DataCell name="action">
                        <DropdownMenu
                            v-if="faq.isEditable || faq.isDeletable || faq.isReadtable || faq.isCreatetable">
                            <DropdownItem faq="fas fa-arrow-circle-right" v-if="faq.isReadtable"
                                @click="router.push({ name: 'FaqShow', params: { uuid: faq.uuid } })">
                                {{ $trans('general.show') }}</DropdownItem>
                            <DropdownItem faq="fas fa-edit" v-if="faq.isEditable"
                                @click="router.push({ name: 'FaqEdit', params: { uuid: faq.uuid } })">
                                {{ $trans('general.edit') }}</DropdownItem>
                            <DropdownItem faq="fas fa-copy" v-if="faq.isCreatetable"
                                @click="router.push({ name: 'FaqDuplicate', params: { uuid: faq.uuid } })">
                                {{ $trans('general.duplicate') }}</DropdownItem>
                            <DropdownItem faq="fas fa-trash" v-if="faq.isDeletable" @click="emitter.emit('deleteItem', {
                                uuid: faq.uuid
                            })">{{ $trans('general.delete') }}</DropdownItem>
                        </DropdownMenu>
                    </DataCell>
                </DataRow>
                <template #actionButton>
                    <BaseButton @click="router.push({ name: 'FaqCreate' })"
                        v-if="perform('faq:create')">
                        {{ $trans('global.add', { attribute: $trans('master.faq.faq') }) }}
                    </BaseButton>
                </template>
            </DataTable>
        </ParentTransition>
    </ListItem>
</template>

<script>
export default {
    name: 'FaqList'
}
</script>

<script setup>
import { ref, reactive, inject } from "vue"
import { useRouter } from "vue-router"
import { perform } from "@core/helpers/action"
import FilterForm from './Filter.vue'

const router = useRouter()

const emitter = inject('emitter')

let actions = ['filter']
if (perform('faq:create')) {
    actions.unshift('create')
}
let dropdownActions = [];
if (perform('faq:export')) {
    dropdownActions = ['print', 'pdf', 'excel']
}

const initUrl = "master/faq/"
const showFilter = ref(false)
const showImport = ref(false)

const faqs = reactive({
    data: []
})

const setItems = (data) => {
    Object.assign(faqs, data)
}
</script>