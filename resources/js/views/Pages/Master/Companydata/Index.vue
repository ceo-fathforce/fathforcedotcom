<template>
    <ListItem
        :init-url="initUrl"
        @setItems="setItems"
    >
        <template #header>
            <PageHeader
                :title="$trans('master.companydata.companydata')"
            >
                <PageHeaderAction
                    url="master/companydatas/"
                    name="Companydata"
                    :title="$trans('master.companydata.companydata')"
                    :actions="actions"
                    :dropdown-actions="dropdownActions"
                    @toggleFilter="showFilter = ! showFilter"
                    @toggleImport="showImport = ! showImport"
                />
            </PageHeader>
        </template>

        <template #import>
            <ParentTransition appear :visibility="showImport">
                <BaseImport path="master/companydatas/import" @cancelled="showImport = false" @hide="showImport = false" @completed="emitter.emit('listItems')" />
            </ParentTransition>
        </template>

        <template #filter>
            <ParentTransition appear :visibility="showFilter">
                <FilterForm @refresh="emitter.emit('listItems')" @hide="showFilter = false"></FilterForm>
            </ParentTransition>
        </template>

        <ParentTransition appear :visibility="true">
            <DataTable
                :header="companydatas.headers"
                :meta="companydatas.meta"
                module="companydata"
                @refresh="emitter.emit('listItems')"
            >
                <DataRow v-for="companydata in companydatas.data" :key="companydata.uuid">
                    <DataCell name="completedprojects">
                        {{ companydata.completedprojects }}
                    </DataCell>
                    <DataCell name="totalproducts">
                        {{ companydata.totalproducts }}
                    </DataCell>
                    <DataCell name="satisfiedcostumers">
                        {{ companydata.satisfiedcostumers }}
                    </DataCell>
                    <DataCell name="employees">
                        {{ companydata.employees }}
                    </DataCell>
                    <DataCell name="action">
                        <DropdownMenu v-if="companydata.isEditable || companydata.isDeletable || companydata.isReadtable || companydata.isCreatetable">
                            <DropdownItem companydata="fas fa-arrow-circle-right" v-if="companydata.isReadtable" @click="router.push({name: 'CompanydataShow', params: {uuid: companydata.uuid}})">{{$trans('general.show')}}</DropdownItem>
                            <DropdownItem companydata="fas fa-edit" v-if="companydata.isEditable" @click="router.push({name: 'CompanydataEdit', params: {uuid: companydata.uuid}})">{{$trans('general.edit')}}</DropdownItem>
                            <DropdownItem companydata="fas fa-copy" v-if="companydata.isCreatetable" @click="router.push({name: 'CompanydataDuplicate', params: {uuid: companydata.uuid}})">{{$trans('general.duplicate')}}</DropdownItem>
                            <DropdownItem companydata="fas fa-trash" v-if="companydata.isDeletable" @click="emitter.emit('deleteItem', {
                                uuid: companydata.uuid
                            })">{{$trans('general.delete')}}</DropdownItem>
                        </DropdownMenu>
                    </DataCell>
                </DataRow>
                <template #actionButton>
                    <BaseButton @click="router.push({name: 'CompanydataCreate'})" v-if="perform('companydata:create')">
                        {{$trans('global.add', {attribute: $trans('master.companydata.companydata')})}}
                    </BaseButton>
                </template>
            </DataTable>
        </ParentTransition>
    </ListItem>
</template>

<script>
export default {
    name: 'CompanydataList'
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
if (perform('companydata:create')) {
    actions.unshift('create')
}
let dropdownActions = [];
if (perform('companydata:export')) {
    dropdownActions = ['print', 'pdf', 'excel']
}

const initUrl = "master/companydata/"
const showFilter = ref(false)
const showImport = ref(false)

const companydatas = reactive({
    data: []
})

const setItems = (data) => {
    Object.assign(companydatas, data)
}
</script>
