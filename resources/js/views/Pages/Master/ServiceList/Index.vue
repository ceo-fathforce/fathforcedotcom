@ -0,0 +1,102 @@
<template>
    <ListItem :init-url="initUrl" @setItems="setItems">
        <template #header>
            <PageHeader :title="$trans('master.servicelist.servicelist')">
                <PageHeaderAction url="master/servicelistservicelists/" name="Servicelist"
                    :title="$trans('master.servicelist.servicelist')" :actions="actions"
                    :dropdown-actions="dropdownActions" @toggleFilter="showFilter = !showFilter"
                    @toggleImport="showImport = !showImport" />
            </PageHeader>
        </template>

        <template #import>
            <ParentTransition appear :visibility="showImport">
                <BaseImport path="master/servicelists/import" @cancelled="showImport = false" @hide="showImport = false"
                    @completed="emitter.emit('listItems')" />
            </ParentTransition>
        </template>

        <template #filter>
            <ParentTransition appear :visibility="showFilter">
                <FilterForm @refresh="emitter.emit('listItems')" @hide="showFilter = false"></FilterForm>
            </ParentTransition>
        </template>

        <ParentTransition appear :visibility="true">
            <DataTable :header="servicelists.headers" :meta="servicelists.meta" module="Servicelist"
                @refresh="emitter.emit('listItems')">
                <DataRow v-for="servicelist in servicelists.data" :key="servicelist.uuid">
                    <DataCell name="name">
                        {{ servicelist.name }}
                    </DataCell>
                    <DataCell name="description">
                        {{ servicelist.description }}
                    </DataCell>
                    <DataCell name="action">
                        <DropdownMenu
                            v-if="servicelist.isEditable || servicelist.isDeletable || servicelist.isReadtable || servicelist.isCreatetable">
                            <DropdownItem servicelist="fas fa-arrow-circle-right" v-if="servicelist.isReadtable"
                                @click="router.push({ name: 'ServicelistShow', params: { uuid: servicelist.uuid } })">
                                {{ $trans('general.show') }}</DropdownItem>
                            <DropdownItem servicelist="fas fa-edit" v-if="servicelist.isEditable"
                                @click="router.push({ name: 'ServicelistEdit', params: { uuid: servicelist.uuid } })">
                                {{ $trans('general.edit') }}</DropdownItem>
                            <DropdownItem servicelist="fas fa-copy" v-if="servicelist.isCreatetable"
                                @click="router.push({ name: 'ServicelistDuplicate', params: { uuid: servicelist.uuid } })">
                                {{ $trans('general.duplicate') }}</DropdownItem>
                            <DropdownItem servicelist="fas fa-trash" v-if="servicelist.isDeletable" @click="emitter.emit('deleteItem', {
                                uuid: servicelist.uuid
                            })">{{ $trans('general.delete') }}</DropdownItem>
                        </DropdownMenu>
                    </DataCell>
                </DataRow>
                <template #actionButton>
                    <BaseButton @click="router.push({ name: 'ServicelistCreate' })"
                        v-if="perform('servicelist:create')">
                        {{ $trans('global.add', { attribute: $trans('master.servicelist.servicelist') }) }}
                    </BaseButton>
                </template>
            </DataTable>
        </ParentTransition>
    </ListItem>
</template>

<script>
export default {
    name: 'ServicelistList'
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
if (perform('servicelist:create')) {
    actions.unshift('create')
}
let dropdownActions = [];
if (perform('servicelist:export')) {
    dropdownActions = ['print', 'pdf', 'excel']
}

const initUrl = "master/servicelist/"
const showFilter = ref(false)
const showImport = ref(false)

const servicelists = reactive({
    data: []
})

const setItems = (data) => {
    Object.assign(servicelists, data)
}
</script>