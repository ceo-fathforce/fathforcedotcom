@ -0,0 +1,102 @@
<template>
    <ListItem :init-url="initUrl" @setItems="setItems">
        <template #header>
            <PageHeader :title="$trans('customize.companytext.companytext')">
                <PageHeaderAction url="customize/companytextcompanytexts/" name="Companytext"
                    :title="$trans('customize.companytext.companytext')" :actions="actions"
                    :dropdown-actions="dropdownActions" @toggleFilter="showFilter = !showFilter"
                    @toggleImport="showImport = !showImport" />
            </PageHeader>
        </template>

        <template #import>
            <ParentTransition appear :visibility="showImport">
                <BaseImport path="customize/companytexts/import" @cancelled="showImport = false" @hide="showImport = false"
                    @completed="emitter.emit('listItems')" />
            </ParentTransition>
        </template>

        <template #filter>
            <ParentTransition appear :visibility="showFilter">
                <FilterForm @refresh="emitter.emit('listItems')" @hide="showFilter = false"></FilterForm>
            </ParentTransition>
        </template>

        <ParentTransition appear :visibility="true">
            <DataTable :header="companytexts.headers" :meta="companytexts.meta" module="Companytext"
                @refresh="emitter.emit('listItems')">
                <DataRow v-for="companytext in companytexts.data" :key="companytext.uuid">
                    <DataCell name="name">
                        {{ companytext.name }}
                    </DataCell>
                    <DataCell name="action">
                        <DropdownMenu
                            v-if="companytext.isEditable || companytext.isDeletable || companytext.isReadtable || companytext.isCreatetable">
                            <DropdownItem companytext="fas fa-arrow-circle-right" v-if="companytext.isReadtable"
                                @click="router.push({ name: 'CompanytextShow', params: { uuid: companytext.uuid } })">
                                {{ $trans('general.show') }}</DropdownItem>
                            <DropdownItem companytext="fas fa-edit" v-if="companytext.isEditable"
                                @click="router.push({ name: 'CompanytextEdit', params: { uuid: companytext.uuid } })">
                                {{ $trans('general.edit') }}</DropdownItem>
                            <!-- <DropdownItem companytext="fas fa-copy" v-if="companytext.isCreatetable"
                                @click="router.push({ name: 'CompanytextDuplicate', params: { uuid: companytext.uuid } })">
                                {{ $trans('general.duplicate') }}</DropdownItem>
                            <DropdownItem companytext="fas fa-trash" v-if="companytext.isDeletable" @click="emitter.emit('deleteItem', {
                                uuid: companytext.uuid
                            })">{{ $trans('general.delete') }}</DropdownItem> -->
                        </DropdownMenu>
                    </DataCell>
                </DataRow>
                <template #actionButton>
                    <BaseButton @click="router.push({ name: 'CompanytextCreate' })"
                        v-if="perform('companytext:create')">
                        {{ $trans('global.add', { attribute: $trans('customize.companytext.companytext') }) }}
                    </BaseButton>
                </template>
            </DataTable>
        </ParentTransition>
    </ListItem>
</template>

<script>
export default {
    name: 'CompanytextList'
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
if (perform('companytext:create')) {
    actions.unshift('create')
}
let dropdownActions = [];
if (perform('companytext:export')) {
    dropdownActions = ['print', 'pdf', 'excel']
}

const initUrl = "customize/companytext/"
const showFilter = ref(false)
const showImport = ref(false)

const companytexts = reactive({
    data: []
})

const setItems = (data) => {
    Object.assign(companytexts, data)
    companytexts.data.sort((a, b) => {
        return new Date(a.createdAt) - new Date(b.createdAt);
    });
}

</script>