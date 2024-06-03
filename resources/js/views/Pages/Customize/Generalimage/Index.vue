<template>
    <ListItem
        :init-url="initUrl"
        @setItems="setItems"
    >
        <template #header>
            <PageHeader
                :title="$trans('customize.generalimage.generalimage')"
            >
                <PageHeaderAction
                    url="customize/generalimages/"
                    name="Generalimage"
                    :title="$trans('customize.generalimage.generalimage')"
                    :actions="actions"
                    :dropdown-actions="dropdownActions"
                    @toggleFilter="showFilter = ! showFilter"
                    @toggleImport="showImport = ! showImport"
                />
            </PageHeader>
        </template>

        <template #import>
            <ParentTransition appear :visibility="showImport">
                <BaseImport path="customize/generalimages/import" @cancelled="showImport = false" @hide="showImport = false" @completed="emitter.emit('listItems')" />
            </ParentTransition>
        </template>

        <template #filter>
            <ParentTransition appear :visibility="showFilter">
                <FilterForm @refresh="emitter.emit('listItems')" @hide="showFilter = false"></FilterForm>
            </ParentTransition>
        </template>

        <ParentTransition appear :visibility="true">
            <DataTable
                :header="generalimages.headers"
                :meta="generalimages.meta"
                module="generalimage"
                @refresh="emitter.emit('listItems')"
            >
                <DataRow v-for="generalimage in generalimages.data" :key="generalimage.uuid">
                    <DataCell name="name">
                        {{ generalimage.name }}
                    </DataCell>
                    <DataCell name="action">
                        <DropdownMenu v-if="generalimage.isEditable || generalimage.isReadtable">
                            <DropdownItem generalimage="fas fa-arrow-circle-right" v-if="generalimage.isReadtable" @click="router.push({name: 'GeneralimageShow', params: {uuid: generalimage.uuid}})">{{$trans('general.show')}}</DropdownItem>
                            <DropdownItem generalimage="fas fa-edit" v-if="generalimage.isEditable" @click="router.push({name: 'GeneralimageEdit', params: {uuid: generalimage.uuid}})">{{$trans('general.edit')}}</DropdownItem>
                            <!-- <DropdownItem generalimage="fas fa-copy" v-if="generalimage.isCreatetable" @click="router.push({name: 'GeneralimageDuplicate', params: {uuid: generalimage.uuid}})">{{$trans('general.duplicate')}}</DropdownItem>
                            <DropdownItem generalimage="fas fa-trash" v-if="generalimage.isDeletable" @click="emitter.emit('deleteItem', {
                                uuid: generalimage.uuid
                            })">{{$trans('general.delete')}}</DropdownItem> -->
                        </DropdownMenu>
                    </DataCell>
                </DataRow>
                <template #actionButton>
                    <BaseButton @click="router.push({name: 'GeneralimageCreate'})" v-if="perform('generalimage:create')">
                        {{$trans('global.add', {attribute: $trans('customize.generalimage.generalimage')})}}
                    </BaseButton>
                </template>
            </DataTable>
        </ParentTransition>
    </ListItem>
</template>

<script>
export default {
    name: 'GeneralimageList'
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
if (perform('generalimage:create')) {
    actions.unshift('create')
}
let dropdownActions = [];
if (perform('generalimage:export')) {
    dropdownActions = ['print', 'pdf', 'excel']
}

const initUrl = "customize/generalimage/"
const showFilter = ref(false)
const showImport = ref(false)

const generalimages = reactive({
    data: []
})

const setItems = (data) => {
    Object.assign(generalimages, data)
}
</script>
