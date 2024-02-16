<template>
    <ListItem
        :init-url="initUrl"
        @setItems="setItems"
    >
        <template #header>
            <PageHeader
                :title="$trans('master.portfoliocategory.portfoliocategory')"
            >
                <PageHeaderAction
                    url="master/portfoliocategories/"
                    name="PortfolioCategory"
                    :title="$trans('master.portfoliocategory.portfoliocategory')"
                    :actions="actions"
                    :dropdown-actions="dropdownActions"
                    @toggleFilter="showFilter = ! showFilter"
                    @toggleImport="showImport = ! showImport"
                />
            </PageHeader>
        </template>

        <template #import>
            <ParentTransition appear :visibility="showImport">
                <BaseImport path="master/portfoliocategories/import" @cancelled="showImport = false" @hide="showImport = false" @completed="emitter.emit('listItems')" />
            </ParentTransition>
        </template>

        <template #filter>
            <ParentTransition appear :visibility="showFilter">
                <FilterForm @refresh="emitter.emit('listItems')" @hide="showFilter = false"></FilterForm>
            </ParentTransition>
        </template>

        <ParentTransition appear :visibility="true">
            <DataTable
                :header="portfoliocategories.headers"
                :meta="portfoliocategories.meta"
                module="portfoliocategory"
                @refresh="emitter.emit('listItems')"
            >
                <DataRow v-for="portfoliocategory in portfoliocategories.data" :key="portfoliocategory.uuid">
                    <DataCell name="title">
                        {{ portfoliocategory.title }}
                    </DataCell>
                    <DataCell name="action">
                        <DropdownMenu v-if="portfoliocategory.isEditable || portfoliocategory.isDeletable || portfoliocategory.isReadtable || portfoliocategory.isCreatetable">
                            <DropdownItem portfoliocategory="fas fa-arrow-circle-right" v-if="portfoliocategory.isReadtable" @click="router.push({name: 'PortfolioCategoryShow', params: {uuid: portfoliocategory.uuid}})">{{$trans('general.show')}}</DropdownItem>
                            <DropdownItem portfoliocategory="fas fa-edit" v-if="portfoliocategory.isEditable" @click="router.push({name: 'PortfolioCategoryEdit', params: {uuid: portfoliocategory.uuid}})">{{$trans('general.edit')}}</DropdownItem>
                            <DropdownItem portfoliocategory="fas fa-copy" v-if="portfoliocategory.isCreatetable" @click="router.push({name: 'PortfolioCategoryDuplicate', params: {uuid: portfoliocategory.uuid}})">{{$trans('general.duplicate')}}</DropdownItem>
                            <DropdownItem portfoliocategory="fas fa-trash" v-if="portfoliocategory.isDeletable" @click="emitter.emit('deleteItem', {
                                uuid: portfoliocategory.uuid
                            })">{{$trans('general.delete')}}</DropdownItem>
                        </DropdownMenu>
                    </DataCell>
                </DataRow>
                <template #actionButton>
                    <BaseButton @click="router.push({name: 'PortfolioCategoryCreate'})" v-if="perform('portfoliocategory:create')">
                        {{$trans('global.add', {attribute: $trans('master.portfoliocategory.portfoliocategory')})}}
                    </BaseButton>
                </template>
            </DataTable>
        </ParentTransition>
    </ListItem>
</template>

<script>
export default {
    name: 'PortfolioCategoryList'
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
if (perform('portfoliocategory:create')) {
    actions.unshift('create')
}
let dropdownActions = [];
if (perform('portfoliocategory:export')) {
    dropdownActions = ['print', 'pdf', 'excel']
}

const initUrl = "master/portfoliocategory/"
const showFilter = ref(false)
const showImport = ref(false)

const portfoliocategories = reactive({
    data: []
})

const setItems = (data) => {
    Object.assign(portfoliocategories, data)
}
</script>
