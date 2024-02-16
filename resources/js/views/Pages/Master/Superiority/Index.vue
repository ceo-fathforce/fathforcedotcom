@ -0,0 +1,102 @@
<template>
    <ListItem :init-url="initUrl" @setItems="setItems">
        <template #header>
            <PageHeader :title="$trans('master.superiority.superiority')">
                <PageHeaderAction url="master/superioritycompanys/" name="Superiority"
                    :title="$trans('master.superiority.superiority')" :actions="actions"
                    :dropdown-actions="dropdownActions" @toggleFilter="showFilter = !showFilter"
                    @toggleImport="showImport = !showImport" />
            </PageHeader>
        </template>

        <template #import>
            <ParentTransition appear :visibility="showImport">
                <BaseImport path="master/superioritys/import" @cancelled="showImport = false" @hide="showImport = false"
                    @completed="emitter.emit('listItems')" />
            </ParentTransition>
        </template>

        <template #filter>
            <ParentTransition appear :visibility="showFilter">
                <FilterForm @refresh="emitter.emit('listItems')" @hide="showFilter = false"></FilterForm>
            </ParentTransition>
        </template>

        <ParentTransition appear :visibility="true">
            <DataTable :header="superioritys.headers" :meta="superioritys.meta" module="Superiority"
                @refresh="emitter.emit('listItems')">
                <DataRow v-for="superiority in superioritys.data" :key="superiority.uuid">
                    <DataCell name="name">
                        {{ superiority.name }}
                    </DataCell>
                    <DataCell name="description">
                        {{ superiority.description }}
                    </DataCell>
                    <DataCell name="action">
                        <DropdownMenu
                            v-if="superiority.isEditable || superiority.isDeletable || superiority.isReadtable || superiority.isCreatetable">
                            <DropdownItem superiority="fas fa-arrow-circle-right" v-if="superiority.isReadtable"
                                @click="router.push({ name: 'SuperiorityShow', params: { uuid: superiority.uuid } })">
                                {{ $trans('general.show') }}</DropdownItem>
                            <DropdownItem superiority="fas fa-edit" v-if="superiority.isEditable"
                                @click="router.push({ name: 'SuperiorityEdit', params: { uuid: superiority.uuid } })">
                                {{ $trans('general.edit') }}</DropdownItem>
                            <DropdownItem superiority="fas fa-copy" v-if="superiority.isCreatetable"
                                @click="router.push({ name: 'SuperiorityDuplicate', params: { uuid: superiority.uuid } })">
                                {{ $trans('general.duplicate') }}</DropdownItem>
                            <DropdownItem superiority="fas fa-trash" v-if="superiority.isDeletable" @click="emitter.emit('deleteItem', {
                                uuid: superiority.uuid
                            })">{{ $trans('general.delete') }}</DropdownItem>
                        </DropdownMenu>
                    </DataCell>
                </DataRow>
                <template #actionButton>
                    <BaseButton @click="router.push({ name: 'SuperiorityCreate' })"
                        v-if="perform('superiority:create')">
                        {{ $trans('global.add', { attribute: $trans('master.superiority.superiority') }) }}
                    </BaseButton>
                </template>
            </DataTable>
        </ParentTransition>
    </ListItem>
</template>

<script>
export default {
    name: 'SuperiorityList'
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
if (perform('superiority:create')) {
    actions.unshift('create')
}
let dropdownActions = [];
if (perform('superiority:export')) {
    dropdownActions = ['print', 'pdf', 'excel']
}

const initUrl = "master/superiority/"
const showFilter = ref(false)
const showImport = ref(false)

const superioritys = reactive({
    data: []
})

const setItems = (data) => {
    Object.assign(superioritys, data)
}
</script>