<template>
    <ListItem
        :init-url="initUrl"
        @setItems="setItems"
    >
        <template #header>
            <PageHeader
                :title="$trans('customize.serviceimage.serviceimage')"
            >
                <PageHeaderAction
                    url="customize/serviceimages/"
                    name="Serviceimage"
                    :title="$trans('customize.serviceimage.serviceimage')"
                    :actions="actions"
                    :dropdown-actions="dropdownActions"
                    @toggleFilter="showFilter = ! showFilter"
                    @toggleImport="showImport = ! showImport"
                />
            </PageHeader>
        </template>

        <template #import>
            <ParentTransition appear :visibility="showImport">
                <BaseImport path="customize/serviceimages/import" @cancelled="showImport = false" @hide="showImport = false" @completed="emitter.emit('listItems')" />
            </ParentTransition>
        </template>

        <template #filter>
            <ParentTransition appear :visibility="showFilter">
                <FilterForm @refresh="emitter.emit('listItems')" @hide="showFilter = false"></FilterForm>
            </ParentTransition>
        </template>

        <ParentTransition appear :visibility="true">
            <DataTable
                :header="serviceimages.headers"
                :meta="serviceimages.meta"
                module="serviceimage"
                @refresh="emitter.emit('listItems')"
            >
                <DataRow v-for="serviceimage in serviceimages.data" :key="serviceimage.uuid">
                    <DataCell name="name">
                        {{ serviceimage.name }}
                    </DataCell>
                    <DataCell name="action">
                        <DropdownMenu v-if="serviceimage.isEditable || serviceimage.isDeletable || serviceimage.isReadtable || serviceimage.isCreatetable">
                            <DropdownItem serviceimage="fas fa-arrow-circle-right" v-if="serviceimage.isReadtable" @click="router.push({name: 'ServiceimageShow', params: {uuid: serviceimage.uuid}})">{{$trans('general.show')}}</DropdownItem>
                            <DropdownItem serviceimage="fas fa-edit" v-if="serviceimage.isEditable" @click="router.push({name: 'ServiceimageEdit', params: {uuid: serviceimage.uuid}})">{{$trans('general.edit')}}</DropdownItem>
                            <DropdownItem serviceimage="fas fa-copy" v-if="serviceimage.isCreatetable" @click="router.push({name: 'ServiceimageDuplicate', params: {uuid: serviceimage.uuid}})">{{$trans('general.duplicate')}}</DropdownItem>
                            <DropdownItem serviceimage="fas fa-trash" v-if="serviceimage.isDeletable" @click="emitter.emit('deleteItem', {
                                uuid: serviceimage.uuid
                            })">{{$trans('general.delete')}}</DropdownItem>
                        </DropdownMenu>
                    </DataCell>
                </DataRow>
                <template #actionButton>
                    <BaseButton @click="router.push({name: 'ServiceimageCreate'})" v-if="perform('serviceimage:create')">
                        {{$trans('global.add', {attribute: $trans('customize.serviceimage.serviceimage')})}}
                    </BaseButton>
                </template>
            </DataTable>
        </ParentTransition>
    </ListItem>
</template>

<script>
export default {
    name: 'ServiceimageList'
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
if (perform('serviceimage:create')) {
    actions.unshift('create')
}
let dropdownActions = [];
if (perform('serviceimage:export')) {
    dropdownActions = ['print', 'pdf', 'excel']
}

const initUrl = "customize/serviceimage/"
const showFilter = ref(false)
const showImport = ref(false)

const serviceimages = reactive({
    data: []
})

const setItems = (data) => {
    Object.assign(serviceimages, data)
}
</script>
