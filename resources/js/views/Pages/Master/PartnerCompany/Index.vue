@ -0,0 +1,102 @@
<template>
    <ListItem :init-url="initUrl" @setItems="setItems">
        <template #header>
            <PageHeader :title="$trans('master.partnercompany.partnercompany')">
                <PageHeaderAction url="master/partnercompanycompanys/" name="PartnerCompany"
                    :title="$trans('master.partnercompany.partnercompany')" :actions="actions"
                    :dropdown-actions="dropdownActions" @toggleFilter="showFilter = !showFilter"
                    @toggleImport="showImport = !showImport" />
            </PageHeader>
        </template>

        <template #import>
            <ParentTransition appear :visibility="showImport">
                <BaseImport path="master/partnercompanys/import" @cancelled="showImport = false" @hide="showImport = false"
                    @completed="emitter.emit('listItems')" />
            </ParentTransition>
        </template>

        <template #filter>
            <ParentTransition appear :visibility="showFilter">
                <FilterForm @refresh="emitter.emit('listItems')" @hide="showFilter = false"></FilterForm>
            </ParentTransition>
        </template>

        <ParentTransition appear :visibility="true">
            <DataTable :header="partnercompanys.headers" :meta="partnercompanys.meta" module="PartnerCompany"
                @refresh="emitter.emit('listItems')">
                <DataRow v-for="partnercompany in partnercompanys.data" :key="partnercompany.uuid">
                    <DataCell name="name">
                        {{ partnercompany.name }}
                    </DataCell>
                    <DataCell name="description">
                        {{ partnercompany.description }}
                    </DataCell>
                    <DataCell name="action">
                        <DropdownMenu
                            v-if="partnercompany.isEditable || partnercompany.isDeletable || partnercompany.isReadtable || partnercompany.isCreatetable">
                            <DropdownItem partnercompany="fas fa-arrow-circle-right" v-if="partnercompany.isReadtable"
                                @click="router.push({ name: 'PartnerCompanyShow', params: { uuid: partnercompany.uuid } })">
                                {{ $trans('general.show') }}</DropdownItem>
                            <DropdownItem partnercompany="fas fa-edit" v-if="partnercompany.isEditable"
                                @click="router.push({ name: 'PartnerCompanyEdit', params: { uuid: partnercompany.uuid } })">
                                {{ $trans('general.edit') }}</DropdownItem>
                            <DropdownItem partnercompany="fas fa-copy" v-if="partnercompany.isCreatetable"
                                @click="router.push({ name: 'PartnerCompanyDuplicate', params: { uuid: partnercompany.uuid } })">
                                {{ $trans('general.duplicate') }}</DropdownItem>
                            <DropdownItem partnercompany="fas fa-trash" v-if="partnercompany.isDeletable" @click="emitter.emit('deleteItem', {
                                uuid: partnercompany.uuid
                            })">{{ $trans('general.delete') }}</DropdownItem>
                        </DropdownMenu>
                    </DataCell>
                </DataRow>
                <template #actionButton>
                    <BaseButton @click="router.push({ name: 'PartnerCompanyCreate' })"
                        v-if="perform('partnercompany:create')">
                        {{ $trans('global.add', { attribute: $trans('master.partnercompany.partnercompany') }) }}
                    </BaseButton>
                </template>
            </DataTable>
        </ParentTransition>
    </ListItem>
</template>

<script>
export default {
    name: 'PartnerCompanyList'
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
if (perform('partnercompany:create')) {
    actions.unshift('create')
}
let dropdownActions = [];
if (perform('partnercompany:export')) {
    dropdownActions = ['print', 'pdf', 'excel']
}

const initUrl = "master/partnercompany/"
const showFilter = ref(false)
const showImport = ref(false)

const partnercompanys = reactive({
    data: []
})

const setItems = (data) => {
    Object.assign(partnercompanys, data)
}
</script>