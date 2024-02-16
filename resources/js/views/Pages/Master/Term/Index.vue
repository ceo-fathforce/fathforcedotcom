@ -0,0 +1,102 @@
<template>
    <ListItem :init-url="initUrl" @setItems="setItems">
        <template #header>
            <PageHeader :title="$trans('master.term.term')">
                <PageHeaderAction url="master/termcompanys/" name="Term"
                    :title="$trans('master.term.term')" :actions="actions"
                    :dropdown-actions="dropdownActions" @toggleFilter="showFilter = !showFilter"
                    @toggleImport="showImport = !showImport" />
            </PageHeader>
        </template>

        <template #import>
            <ParentTransition appear :visibility="showImport">
                <BaseImport path="master/terms/import" @cancelled="showImport = false" @hide="showImport = false"
                    @completed="emitter.emit('listItems')" />
            </ParentTransition>
        </template>

        <template #filter>
            <ParentTransition appear :visibility="showFilter">
                <FilterForm @refresh="emitter.emit('listItems')" @hide="showFilter = false"></FilterForm>
            </ParentTransition>
        </template>

        <ParentTransition appear :visibility="true">
            <DataTable :header="terms.headers" :meta="terms.meta" module="Term"
                @refresh="emitter.emit('listItems')">
                <DataRow v-for="term in terms.data" :key="term.uuid">
                    <DataCell name="name">
                        {{ term.name }}
                    </DataCell>
                    <DataCell name="description">
                        {{ term.description }}
                    </DataCell>
                    <DataCell name="action">
                        <DropdownMenu
                            v-if="term.isEditable || term.isDeletable || term.isReadtable || term.isCreatetable">
                            <DropdownItem term="fas fa-arrow-circle-right" v-if="term.isReadtable"
                                @click="router.push({ name: 'TermShow', params: { uuid: term.uuid } })">
                                {{ $trans('general.show') }}</DropdownItem>
                            <DropdownItem term="fas fa-edit" v-if="term.isEditable"
                                @click="router.push({ name: 'TermEdit', params: { uuid: term.uuid } })">
                                {{ $trans('general.edit') }}</DropdownItem>
                            <DropdownItem term="fas fa-copy" v-if="term.isCreatetable"
                                @click="router.push({ name: 'TermDuplicate', params: { uuid: term.uuid } })">
                                {{ $trans('general.duplicate') }}</DropdownItem>
                            <DropdownItem term="fas fa-trash" v-if="term.isDeletable" @click="emitter.emit('deleteItem', {
                                uuid: term.uuid
                            })">{{ $trans('general.delete') }}</DropdownItem>
                        </DropdownMenu>
                    </DataCell>
                </DataRow>
                <template #actionButton>
                    <BaseButton @click="router.push({ name: 'TermCreate' })"
                        v-if="perform('term:create')">
                        {{ $trans('global.add', { attribute: $trans('master.term.term') }) }}
                    </BaseButton>
                </template>
            </DataTable>
        </ParentTransition>
    </ListItem>
</template>

<script>
export default {
    name: 'TermList'
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
if (perform('term:create')) {
    actions.unshift('create')
}
let dropdownActions = [];
if (perform('term:export')) {
    dropdownActions = ['print', 'pdf', 'excel']
}

const initUrl = "master/term/"
const showFilter = ref(false)
const showImport = ref(false)

const terms = reactive({
    data: []
})

const setItems = (data) => {
    Object.assign(terms, data)
}
</script>