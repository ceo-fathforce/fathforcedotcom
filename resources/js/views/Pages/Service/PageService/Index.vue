@ -0,0 +1,102 @@
<template>
    <ListItem :init-url="initUrl" @setItems="setItems">
        <template #header>
            <PageServiceHeader :title="$trans('service.pageservice.pageservice')">
                <PageServiceHeaderAction url="service/pageservicepageservices/" name="PageService" :title="$trans('service.pageservice.pageservice')"
                    :actions="actions" :dropdown-actions="dropdownActions" @toggleFilter="showFilter = !showFilter"
                    @toggleImport="showImport = !showImport" />
            </PageServiceHeader>
        </template>

        <template #import>
            <ParentTransition appear :visibility="showImport">
                <BaseImport path="service/pageservices/import" @cancelled="showImport = false" @hide="showImport = false"
                    @completed="emitter.emit('listItems')" />
            </ParentTransition>
        </template>

        <template #filter>
            <ParentTransition appear :visibility="showFilter">
                <FilterForm @refresh="emitter.emit('listItems')" @hide="showFilter = false"></FilterForm>
            </ParentTransition>
        </template>

        <ParentTransition appear :visibility="true">
            <DataTable :header="pageservices.headers" :meta="pageservices.meta" module="PageService" @refresh="emitter.emit('listItems')">
                <DataRow v-for="pageservice in pageservices.data" :key="pageservice.uuid">
                    <DataCell name="name">
                        {{ pageservice.name }}
                    </DataCell>
                    <DataCell name="pageservicecategory">
                        {{ pageservice.pageservicecategorytitle }}
                    </DataCell>
                    <DataCell name="action">
                        <DropdownMenu v-if="pageservice.isEditable || pageservice.isDeletable || pageservice.isReadtable || pageservice.isCreatetable">
                            <DropdownItem pageservice="fas fa-arrow-circle-right" v-if="pageservice.isReadtable"
                                @click="router.push({ name: 'PageServiceShow', params: { uuid: pageservice.uuid } })">
                                {{ $trans('general.show') }}</DropdownItem>
                            <DropdownItem pageservice="fas fa-edit" v-if="pageservice.isEditable"
                                @click="router.push({ name: 'PageServiceEdit', params: { uuid: pageservice.uuid } })">
                                {{ $trans('general.edit') }}</DropdownItem>
                            <DropdownItem pageservice="fas fa-copy" v-if="pageservice.isCreatetable"
                                @click="router.push({ name: 'PageServiceDuplicate', params: { uuid: pageservice.uuid } })">
                                {{ $trans('general.duplicate') }}</DropdownItem>
                            <DropdownItem pageservice="fas fa-trash" v-if="pageservice.isDeletable" @click="emitter.emit('deleteItem', {
                                uuid: pageservice.uuid
                            })">{{ $trans('general.delete') }}</DropdownItem>
                        </DropdownMenu>
                    </DataCell>
                </DataRow>
                <template #actionButton>
                    <BaseButton @click="router.push({ name: 'PageServiceCreate' })" v-if="perform('pageservice:create')">
                        {{ $trans('global.add', { attribute: $trans('service.pageservice.pageservice') }) }}
                    </BaseButton>
                </template>
            </DataTable>
        </ParentTransition>
    </ListItem>
</template>

<script>
export default {
    name: 'PageServiceList'
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
if (perform('pageservice:create')) {
    actions.unshift('create')
}
let dropdownActions = [];
if (perform('pageservice:export')) {
    dropdownActions = ['print', 'pdf', 'excel']
}

const initUrl = "service/pageservice/"
const showFilter = ref(false)
const showImport = ref(false)

const pageservices = reactive({
    data: []
})

const setItems = (data) => {
    Object.assign(pageservices, data)
}
</script>