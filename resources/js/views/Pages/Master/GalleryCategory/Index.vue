<template>
    <ListItem
        :init-url="initUrl"
        @setItems="setItems"
    >
        <template #header>
            <PageHeader
                :title="$trans('master.gallerycategory.gallerycategory')"
            >
                <PageHeaderAction
                    url="master/gallerycategories/"
                    name="GalleryCategory"
                    :title="$trans('master.gallerycategory.gallerycategory')"
                    :actions="actions"
                    :dropdown-actions="dropdownActions"
                    @toggleFilter="showFilter = ! showFilter"
                    @toggleImport="showImport = ! showImport"
                />
            </PageHeader>
        </template>

        <template #import>
            <ParentTransition appear :visibility="showImport">
                <BaseImport path="master/gallerycategories/import" @cancelled="showImport = false" @hide="showImport = false" @completed="emitter.emit('listItems')" />
            </ParentTransition>
        </template>

        <template #filter>
            <ParentTransition appear :visibility="showFilter">
                <FilterForm @refresh="emitter.emit('listItems')" @hide="showFilter = false"></FilterForm>
            </ParentTransition>
        </template>

        <ParentTransition appear :visibility="true">
            <DataTable
                :header="gallerycategories.headers"
                :meta="gallerycategories.meta"
                module="gallerycategory"
                @refresh="emitter.emit('listItems')"
            >
                <DataRow v-for="gallerycategory in gallerycategories.data" :key="gallerycategory.uuid">
                    <DataCell name="title">
                        {{ gallerycategory.title }}
                    </DataCell>
                    <DataCell name="action">
                        <DropdownMenu v-if="gallerycategory.isEditable || gallerycategory.isDeletable || gallerycategory.isReadtable || gallerycategory.isCreatetable">
                            <DropdownItem gallerycategory="fas fa-arrow-circle-right" v-if="gallerycategory.isReadtable" @click="router.push({name: 'GalleryCategoryShow', params: {uuid: gallerycategory.uuid}})">{{$trans('general.show')}}</DropdownItem>
                            <DropdownItem gallerycategory="fas fa-edit" v-if="gallerycategory.isEditable" @click="router.push({name: 'GalleryCategoryEdit', params: {uuid: gallerycategory.uuid}})">{{$trans('general.edit')}}</DropdownItem>
                            <DropdownItem gallerycategory="fas fa-copy" v-if="gallerycategory.isCreatetable" @click="router.push({name: 'GalleryCategoryDuplicate', params: {uuid: gallerycategory.uuid}})">{{$trans('general.duplicate')}}</DropdownItem>
                            <DropdownItem gallerycategory="fas fa-trash" v-if="gallerycategory.isDeletable" @click="emitter.emit('deleteItem', {
                                uuid: gallerycategory.uuid
                            })">{{$trans('general.delete')}}</DropdownItem>
                        </DropdownMenu>
                    </DataCell>
                </DataRow>
                <template #actionButton>
                    <BaseButton @click="router.push({name: 'GalleryCategoryCreate'})" v-if="perform('gallerycategory:create')">
                        {{$trans('global.add', {attribute: $trans('master.gallerycategory.gallerycategory')})}}
                    </BaseButton>
                </template>
            </DataTable>
        </ParentTransition>
    </ListItem>
</template>

<script>
export default {
    name: 'GalleryCategoryList'
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
if (perform('gallerycategory:create')) {
    actions.unshift('create')
}
let dropdownActions = [];
if (perform('gallerycategory:export')) {
    dropdownActions = ['print', 'pdf', 'excel']
}

const initUrl = "master/gallerycategory/"
const showFilter = ref(false)
const showImport = ref(false)

const gallerycategories = reactive({
    data: []
})

const setItems = (data) => {
    Object.assign(gallerycategories, data)
}
</script>
