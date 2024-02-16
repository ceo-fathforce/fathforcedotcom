<template>
    <ListItem :init-url="initUrl" @setItems="setItems">
        <template #header>
            <PageServiceHeader :title="$trans('service.pageservicecategory.pageservicecategory')">
                <PageServiceHeaderAction url="service/pageservicecategories/" name="PageServiceCategory"
                    :title="$trans('service.pageservicecategory.pageservicecategory')" :actions="actions"
                    :dropdown-actions="dropdownActions" @toggleFilter="showFilter = !showFilter"
                    @toggleImport="showImport = !showImport" />
            </PageServiceHeader>
        </template>

        <template #import>
            <ParentTransition appear :visibility="showImport">
                <BaseImport path="service/pageservicecategories/import" @cancelled="showImport = false" @hide="showImport = false"
                    @completed="emitter.emit('listItems')" />
            </ParentTransition>
        </template>

        <template #filter>
            <ParentTransition appear :visibility="showFilter">
                <FilterForm @refresh="emitter.emit('listItems')" @hide="showFilter = false"></FilterForm>
            </ParentTransition>
        </template>

        <ParentTransition appear :visibility="true">
            <DataTable :header="pageservicecategories.headers" :meta="pageservicecategories.meta" module="pageservicecategory"
                @refresh="emitter.emit('listItems')">
                <DataRow v-for="pageservicecategory in pageservicecategories.data" :key="pageservicecategory.uuid">
                    <DataCell name="title">
                        {{ pageservicecategory.title }}
                    </DataCell>
                    <DataCell name="action">
                        <DropdownMenu
                            v-if="pageservicecategory.isEditable || pageservicecategory.isDeletable || pageservicecategory.isReadtable || pageservicecategory.isCreatetable">
                            <DropdownItem pageservicecategory="fas fa-arrow-circle-right" v-if="pageservicecategory.isReadtable"
                                @click="router.push({ name: 'PageServiceCategoryShow', params: { uuid: pageservicecategory.uuid } })">
                                {{ $trans('general.show') }}</DropdownItem>
                            <DropdownItem pageservicecategory="fas fa-edit" v-if="pageservicecategory.isEditable"
                                @click="router.push({ name: 'PageServiceCategoryEdit', params: { uuid: pageservicecategory.uuid } })">
                                {{ $trans('general.edit') }}</DropdownItem>
                            <DropdownItem pageservicecategory="fas fa-copy" v-if="pageservicecategory.isCreatetable"
                                @click="router.push({ name: 'PageServiceCategoryDuplicate', params: { uuid: pageservicecategory.uuid } })">
                                {{ $trans('general.duplicate') }}</DropdownItem>
                            <DropdownItem pageservicecategory="fas fa-trash" v-if="pageservicecategory.isDeletable" @click="emitter.emit('deleteItem', {
                                uuid: pageservicecategory.uuid
                            })">{{ $trans('general.delete') }}</DropdownItem>
                        </DropdownMenu>
                    </DataCell>
                </DataRow>
                <template #actionButton>
                    <BaseButton @click="router.push({ name: 'PageServiceCategoryCreate' })" v-if="perform('pageservicecategory:create')">
                        {{ $trans('global.add', { attribute: $trans('service.pageservicecategory.pageservicecategory') }) }}
                    </BaseButton>
                </template>
            </DataTable>
        </ParentTransition>
    </ListItem>
</template>

<script>
export default {
    name: 'PageServiceCategoryList'
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
if (perform('pageservicecategory:create')) {
    actions.unshift('create')
}
let dropdownActions = [];
if (perform('pageservicecategory:export')) {
    dropdownActions = ['print', 'pdf', 'excel']
}

const initUrl = "service/pageservicecategory/"
const showFilter = ref(false)
const showImport = ref(false)

const pageservicecategories = reactive({
    data: []
})

const setItems = (data) => {
    Object.assign(pageservicecategories, data)
}
</script>
