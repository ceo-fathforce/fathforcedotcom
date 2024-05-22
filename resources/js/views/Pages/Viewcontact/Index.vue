<template>
    <ListItem
        :init-url="initUrl"
        @setItems="setItems"
    >
        <template #header>
            <PageHeader
                :title="$trans('viewcontact.viewcontact')"
            >
                <PageHeaderAction
                    url="viewcontacts/"
                    name="Viewcontact"
                    :title="$trans('viewcontact.viewcontact')"
                    :actions="actions"
                    :dropdown-actions="dropdownActions"
                    @toggleFilter="showFilter = ! showFilter"
                    @toggleImport="showImport = ! showImport"
                />
            </PageHeader>
        </template>

        <template #import>
            <ParentTransition appear :visibility="showImport">
                <BaseImport path="viewcontacts/import" @cancelled="showImport = false" @hide="showImport = false" @completed="emitter.emit('listItems')" />
            </ParentTransition>
        </template>

        <template #filter>
            <ParentTransition appear :visibility="showFilter">
                <FilterForm @refresh="emitter.emit('listItems')" @hide="showFilter = false"></FilterForm>
            </ParentTransition>
        </template>

        <ParentTransition appear :visibility="true">
            <DataTable
                :header="viewcontacts.headers"
                :meta="viewcontacts.meta"
                module="viewcontact"
                @refresh="emitter.emit('listItems')"
            >
                <DataRow v-for="viewcontact in viewcontacts.data" :key="viewcontact.uuid">
                    <DataCell name="first">
                        {{ viewcontact.first }}
                    </DataCell>
                    <DataCell name="last">
                        {{ viewcontact.last }}
                    </DataCell>
                    <DataCell name="email">
                        {{ viewcontact.email }}
                    </DataCell>
                    <DataCell name="department">
                        {{ viewcontact.department }}
                    </DataCell>
                    <DataCell name="message">
                        {{ viewcontact.message }}
                    </DataCell>
                    <DataCell name="action">
                        <DropdownMenu v-if="viewcontact.isEditable || viewcontact.isDeletable || viewcontact.isReadtable || viewcontact.isCreatetable">
                            <DropdownItem viewcontact="fas fa-arrow-circle-right" v-if="viewcontact.isReadtable" @click="router.push({name: 'ViewcontactShow', params: {uuid: viewcontact.uuid}})">{{$trans('general.show')}}</DropdownItem>
                            <DropdownItem viewcontact="fas fa-edit" v-if="viewcontact.isEditable" @click="router.push({name: 'ViewcontactEdit', params: {uuid: viewcontact.uuid}})">{{$trans('general.edit')}}</DropdownItem>
                            <DropdownItem viewcontact="fas fa-copy" v-if="viewcontact.isCreatetable" @click="router.push({name: 'ViewcontactDuplicate', params: {uuid: viewcontact.uuid}})">{{$trans('general.duplicate')}}</DropdownItem>
                            <DropdownItem viewcontact="fas fa-trash" v-if="viewcontact.isDeletable" @click="emitter.emit('deleteItem', {
                                uuid: viewcontact.uuid
                            })">{{$trans('general.delete')}}</DropdownItem>
                        </DropdownMenu>
                    </DataCell>
                </DataRow>
                <template #actionButton>
                    <BaseButton @click="router.push({name: 'ViewcontactCreate'})" v-if="perform('viewcontact:create')">
                        {{$trans('global.add', {attribute: $trans('viewcontact.viewcontact')})}}
                    </BaseButton>
                </template>
            </DataTable>
        </ParentTransition>
    </ListItem>
</template>

<script>
export default {
    name: 'ViewcontactList'
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
if (perform('viewcontact:create')) {
    actions.unshift('create')
}
let dropdownActions = [];
if (perform('viewcontact:export')) {
    dropdownActions = ['print', 'pdf', 'excel']
}

const initUrl = "viewcontact/"
const showFilter = ref(false)
const showImport = ref(false)

const viewcontacts = reactive({
    data: []
})

const setItems = (data) => {
    Object.assign(viewcontacts, data)
}
</script>
