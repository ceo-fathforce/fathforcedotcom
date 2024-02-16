@ -0,0 +1,102 @@
<template>
    <ListItem :init-url="initUrl" @setItems="setItems">
        <template #header>
            <PageHeader :title="$trans('master.partnerschool.partnerschool')">
                <PageHeaderAction url="master/partnerschoolpartnerschools/" name="PartnerSchool"
                    :title="$trans('master.partnerschool.partnerschool')" :actions="actions"
                    :dropdown-actions="dropdownActions" @toggleFilter="showFilter = !showFilter"
                    @toggleImport="showImport = !showImport" />
            </PageHeader>
        </template>

        <template #import>
            <ParentTransition appear :visibility="showImport">
                <BaseImport path="master/partnerschools/import" @cancelled="showImport = false" @hide="showImport = false"
                    @completed="emitter.emit('listItems')" />
            </ParentTransition>
        </template>

        <template #filter>
            <ParentTransition appear :visibility="showFilter">
                <FilterForm @refresh="emitter.emit('listItems')" @hide="showFilter = false"></FilterForm>
            </ParentTransition>
        </template>

        <ParentTransition appear :visibility="true">
            <DataTable :header="partnerschools.headers" :meta="partnerschools.meta" module="PartnerSchool"
                @refresh="emitter.emit('listItems')">
                <DataRow v-for="partnerschool in partnerschools.data" :key="partnerschool.uuid">
                    <DataCell name="name">
                        {{ partnerschool.name }}
                    </DataCell>
                    <DataCell name="description">
                        {{ partnerschool.description }}
                    </DataCell>
                    <DataCell name="action">
                        <DropdownMenu
                            v-if="partnerschool.isEditable || partnerschool.isDeletable || partnerschool.isReadtable || partnerschool.isCreatetable">
                            <DropdownItem partnerschool="fas fa-arrow-circle-right" v-if="partnerschool.isReadtable"
                                @click="router.push({ name: 'PartnerSchoolShow', params: { uuid: partnerschool.uuid } })">
                                {{ $trans('general.show') }}</DropdownItem>
                            <DropdownItem partnerschool="fas fa-edit" v-if="partnerschool.isEditable"
                                @click="router.push({ name: 'PartnerSchoolEdit', params: { uuid: partnerschool.uuid } })">
                                {{ $trans('general.edit') }}</DropdownItem>
                            <DropdownItem partnerschool="fas fa-copy" v-if="partnerschool.isCreatetable"
                                @click="router.push({ name: 'PartnerSchoolDuplicate', params: { uuid: partnerschool.uuid } })">
                                {{ $trans('general.duplicate') }}</DropdownItem>
                            <DropdownItem partnerschool="fas fa-trash" v-if="partnerschool.isDeletable" @click="emitter.emit('deleteItem', {
                                uuid: partnerschool.uuid
                            })">{{ $trans('general.delete') }}</DropdownItem>
                        </DropdownMenu>
                    </DataCell>
                </DataRow>
                <template #actionButton>
                    <BaseButton @click="router.push({ name: 'PartnerSchoolCreate' })"
                        v-if="perform('partnerschool:create')">
                        {{ $trans('global.add', { attribute: $trans('master.partnerschool.partnerschool') }) }}
                    </BaseButton>
                </template>
            </DataTable>
        </ParentTransition>
    </ListItem>
</template>

<script>
export default {
    name: 'PartnerSchoolList'
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
if (perform('partnerschool:create')) {
    actions.unshift('create')
}
let dropdownActions = [];
if (perform('partnerschool:export')) {
    dropdownActions = ['print', 'pdf', 'excel']
}

const initUrl = "master/partnerschool/"
const showFilter = ref(false)
const showImport = ref(false)

const partnerschools = reactive({
    data: []
})

const setItems = (data) => {
    Object.assign(partnerschools, data)
}
</script>