<template>
    <ListItem
        :init-url="initUrl"
        @setItems="setItems"
    >
        <template #header>
            <PageHeader
                :title="$trans('customize.companyimage.companyimage')"
            >
                <PageHeaderAction
                    url="customize/companyimages/"
                    name="Companyimage"
                    :title="$trans('customize.companyimage.companyimage')"
                    :actions="actions"
                    :dropdown-actions="dropdownActions"
                    @toggleFilter="showFilter = ! showFilter"
                    @toggleImport="showImport = ! showImport"
                />
            </PageHeader>
        </template>

        <template #import>
            <ParentTransition appear :visibility="showImport">
                <BaseImport path="customize/companyimages/import" @cancelled="showImport = false" @hide="showImport = false" @completed="emitter.emit('listItems')" />
            </ParentTransition>
        </template>

        <template #filter>
            <ParentTransition appear :visibility="showFilter">
                <FilterForm @refresh="emitter.emit('listItems')" @hide="showFilter = false"></FilterForm>
            </ParentTransition>
        </template>

        <ParentTransition appear :visibility="true">
            <DataTable
                :header="companyimages.headers"
                :meta="companyimages.meta"
                module="companyimage"
                @refresh="emitter.emit('listItems')"
            >
                <DataRow v-for="companyimage in companyimages.data" :key="companyimage.uuid">
                    <DataCell name="name">
                        {{ companyimage.name }}
                    </DataCell>
                    <DataCell name="action">
                        <DropdownMenu v-if="companyimage.isEditable || companyimage.isDeletable || companyimage.isReadtable || companyimage.isCreatetable">
                            <DropdownItem companyimage="fas fa-arrow-circle-right" v-if="companyimage.isReadtable" @click="router.push({name: 'CompanyimageShow', params: {uuid: companyimage.uuid}})">{{$trans('general.show')}}</DropdownItem>
                            <DropdownItem companyimage="fas fa-edit" v-if="companyimage.isEditable" @click="router.push({name: 'CompanyimageEdit', params: {uuid: companyimage.uuid}})">{{$trans('general.edit')}}</DropdownItem>
                            <DropdownItem companyimage="fas fa-copy" v-if="companyimage.isCreatetable" @click="router.push({name: 'CompanyimageDuplicate', params: {uuid: companyimage.uuid}})">{{$trans('general.duplicate')}}</DropdownItem>
                            <DropdownItem companyimage="fas fa-trash" v-if="companyimage.isDeletable" @click="emitter.emit('deleteItem', {
                                uuid: companyimage.uuid
                            })">{{$trans('general.delete')}}</DropdownItem>
                        </DropdownMenu>
                    </DataCell>
                </DataRow>
                <template #actionButton>
                    <BaseButton @click="router.push({name: 'CompanyimageCreate'})" v-if="perform('companyimage:create')">
                        {{$trans('global.add', {attribute: $trans('customize.companyimage.companyimage')})}}
                    </BaseButton>
                </template>
            </DataTable>
        </ParentTransition>
    </ListItem>
</template>

<script>
export default {
    name: 'CompanyimageList'
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
if (perform('companyimage:create')) {
    actions.unshift('create')
}
let dropdownActions = [];
if (perform('companyimage:export')) {
    dropdownActions = ['print', 'pdf', 'excel']
}

const initUrl = "customize/companyimage/"
const showFilter = ref(false)
const showImport = ref(false)

const companyimages = reactive({
    data: []
})

const setItems = (data) => {
    Object.assign(companyimages, data)
}
</script>
