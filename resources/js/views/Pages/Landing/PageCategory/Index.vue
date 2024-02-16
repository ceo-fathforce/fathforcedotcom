<template>
    <ListItem :init-url="initUrl" @setItems="setItems">
        <template #header>
            <PageHeader :title="$trans('landing.pagecategory.pagecategory')">
                <PageHeaderAction url="landing/pagecategories/" name="PageCategory"
                    :title="$trans('landing.pagecategory.pagecategory')" :actions="actions"
                    :dropdown-actions="dropdownActions" @toggleFilter="showFilter = !showFilter"
                    @toggleImport="showImport = !showImport" />
            </PageHeader>
        </template>

        <template #import>
            <ParentTransition appear :visibility="showImport">
                <BaseImport path="landing/pagecategories/import" @cancelled="showImport = false" @hide="showImport = false"
                    @completed="emitter.emit('listItems')" />
            </ParentTransition>
        </template>

        <template #filter>
            <ParentTransition appear :visibility="showFilter">
                <FilterForm @refresh="emitter.emit('listItems')" @hide="showFilter = false"></FilterForm>
            </ParentTransition>
        </template>

        <ParentTransition appear :visibility="true">
            <DataTable :header="pagecategories.headers" :meta="pagecategories.meta" module="pagecategory"
                @refresh="emitter.emit('listItems')">
                <DataRow v-for="pagecategory in pagecategories.data" :key="pagecategory.uuid">
                    <DataCell name="title">
                        {{ pagecategory.title }}
                    </DataCell>
                    <DataCell name="action">
                        <DropdownMenu
                            v-if="pagecategory.isEditable || pagecategory.isDeletable || pagecategory.isReadtable || pagecategory.isCreatetable">
                            <DropdownItem pagecategory="fas fa-arrow-circle-right" v-if="pagecategory.isReadtable"
                                @click="router.push({ name: 'PageCategoryShow', params: { uuid: pagecategory.uuid } })">
                                {{ $trans('general.show') }}</DropdownItem>
                            <DropdownItem pagecategory="fas fa-edit" v-if="pagecategory.isEditable"
                                @click="router.push({ name: 'PageCategoryEdit', params: { uuid: pagecategory.uuid } })">
                                {{ $trans('general.edit') }}</DropdownItem>
                            <DropdownItem pagecategory="fas fa-copy" v-if="pagecategory.isCreatetable"
                                @click="router.push({ name: 'PageCategoryDuplicate', params: { uuid: pagecategory.uuid } })">
                                {{ $trans('general.duplicate') }}</DropdownItem>
                            <DropdownItem pagecategory="fas fa-trash" v-if="pagecategory.isDeletable" @click="emitter.emit('deleteItem', {
                                uuid: pagecategory.uuid
                            })">{{ $trans('general.delete') }}</DropdownItem>
                        </DropdownMenu>
                    </DataCell>
                </DataRow>
                <template #actionButton>
                    <BaseButton @click="router.push({ name: 'PageCategoryCreate' })" v-if="perform('pagecategory:create')">
                        {{ $trans('global.add', { attribute: $trans('landing.pagecategory.pagecategory') }) }}
                    </BaseButton>
                </template>
            </DataTable>
        </ParentTransition>
    </ListItem>
</template>

<script>
export default {
    name: 'PageCategoryList'
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
if (perform('pagecategory:create')) {
    actions.unshift('create')
}
let dropdownActions = [];
if (perform('pagecategory:export')) {
    dropdownActions = ['print', 'pdf', 'excel']
}

const initUrl = "landing/pagecategory/"
const showFilter = ref(false)
const showImport = ref(false)

const pagecategories = reactive({
    data: []
})

const setItems = (data) => {
    Object.assign(pagecategories, data)
}
</script>
