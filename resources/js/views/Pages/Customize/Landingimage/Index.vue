<template>
    <ListItem
        :init-url="initUrl"
        @setItems="setItems"
    >
        <template #header>
            <PageHeader
                :title="$trans('customize.landingimage.landingimage')"
            >
                <PageHeaderAction
                    url="customize/landingimages/"
                    name="Landingimage"
                    :title="$trans('customize.landingimage.landingimage')"
                    :actions="actions"
                    :dropdown-actions="dropdownActions"
                    @toggleFilter="showFilter = ! showFilter"
                    @toggleImport="showImport = ! showImport"
                />
            </PageHeader>
        </template>

        <template #import>
            <ParentTransition appear :visibility="showImport">
                <BaseImport path="customize/landingimages/import" @cancelled="showImport = false" @hide="showImport = false" @completed="emitter.emit('listItems')" />
            </ParentTransition>
        </template>

        <template #filter>
            <ParentTransition appear :visibility="showFilter">
                <FilterForm @refresh="emitter.emit('listItems')" @hide="showFilter = false"></FilterForm>
            </ParentTransition>
        </template>

        <ParentTransition appear :visibility="true">
            <DataTable
                :header="landingimages.headers"
                :meta="landingimages.meta"
                module="landingimage"
                @refresh="emitter.emit('listItems')"
            >
                <DataRow v-for="landingimage in landingimages.data" :key="landingimage.uuid">
                    <DataCell name="name">
                        {{ landingimage.name }}
                    </DataCell>
                    <DataCell name="action">
                        <DropdownMenu v-if="landingimage.isEditable || landingimage.isDeletable || landingimage.isReadtable || landingimage.isCreatetable">
                            <DropdownItem landingimage="fas fa-arrow-circle-right" v-if="landingimage.isReadtable" @click="router.push({name: 'LandingimageShow', params: {uuid: landingimage.uuid}})">{{$trans('general.show')}}</DropdownItem>
                            <DropdownItem landingimage="fas fa-edit" v-if="landingimage.isEditable" @click="router.push({name: 'LandingimageEdit', params: {uuid: landingimage.uuid}})">{{$trans('general.edit')}}</DropdownItem>
                            <!-- <DropdownItem landingimage="fas fa-copy" v-if="landingimage.isCreatetable" @click="router.push({name: 'LandingimageDuplicate', params: {uuid: landingimage.uuid}})">{{$trans('general.duplicate')}}</DropdownItem>
                            <DropdownItem landingimage="fas fa-trash" v-if="landingimage.isDeletable" @click="emitter.emit('deleteItem', {
                                uuid: landingimage.uuid
                            })">{{$trans('general.delete')}}</DropdownItem> -->
                        </DropdownMenu>
                    </DataCell>
                </DataRow>
                <template #actionButton>
                    <BaseButton @click="router.push({name: 'LandingimageCreate'})" v-if="perform('landingimage:create')">
                        {{$trans('global.add', {attribute: $trans('customize.landingimage.landingimage')})}}
                    </BaseButton>
                </template>
            </DataTable>
        </ParentTransition>
    </ListItem>
</template>

<script>
export default {
    name: 'LandingimageList'
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
if (perform('landingimage:create')) {
    actions.unshift('create')
}
let dropdownActions = [];
if (perform('landingimage:export')) {
    dropdownActions = ['print', 'pdf', 'excel']
}

const initUrl = "customize/landingimage/"
const showFilter = ref(false)
const showImport = ref(false)

const landingimages = reactive({
    data: []
})

const setItems = (data) => {
    Object.assign(landingimages, data)
}
</script>
