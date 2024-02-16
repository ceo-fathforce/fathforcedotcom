@ -0,0 +1,102 @@
<template>
    <ListItem :init-url="initUrl" @setItems="setItems">
        <template #header>
            <PageHeader :title="$trans('landing.page.page')">
                <PageHeaderAction url="landing/pagepages/" name="Page" :title="$trans('landing.page.page')"
                    :actions="actions" :dropdown-actions="dropdownActions" @toggleFilter="showFilter = !showFilter"
                    @toggleImport="showImport = !showImport" />
            </PageHeader>
        </template>

        <template #import>
            <ParentTransition appear :visibility="showImport">
                <BaseImport path="landing/pages/import" @cancelled="showImport = false" @hide="showImport = false"
                    @completed="emitter.emit('listItems')" />
            </ParentTransition>
        </template>

        <template #filter>
            <ParentTransition appear :visibility="showFilter">
                <FilterForm @refresh="emitter.emit('listItems')" @hide="showFilter = false"></FilterForm>
            </ParentTransition>
        </template>

        <ParentTransition appear :visibility="true">
            <DataTable :header="pages.headers" :meta="pages.meta" module="Page" @refresh="emitter.emit('listItems')">
                <DataRow v-for="page in pages.data" :key="page.uuid">
                    <DataCell name="name">
                        {{ page.name }}
                    </DataCell>
                    <DataCell name="pagecategory">
                        {{ page.pagecategorytitle }}
                    </DataCell>
                    <DataCell name="action">
                        <DropdownMenu v-if="page.isEditable || page.isDeletable || page.isReadtable || page.isCreatetable">
                            <DropdownItem page="fas fa-arrow-circle-right" v-if="page.isReadtable"
                                @click="router.push({ name: 'PageShow', params: { uuid: page.uuid } })">
                                {{ $trans('general.show') }}</DropdownItem>
                            <DropdownItem page="fas fa-edit" v-if="page.isEditable"
                                @click="router.push({ name: 'PageEdit', params: { uuid: page.uuid } })">
                                {{ $trans('general.edit') }}</DropdownItem>
                            <DropdownItem page="fas fa-copy" v-if="page.isCreatetable"
                                @click="router.push({ name: 'PageDuplicate', params: { uuid: page.uuid } })">
                                {{ $trans('general.duplicate') }}</DropdownItem>
                            <DropdownItem page="fas fa-trash" v-if="page.isDeletable" @click="emitter.emit('deleteItem', {
                                uuid: page.uuid
                            })">{{ $trans('general.delete') }}</DropdownItem>
                        </DropdownMenu>
                    </DataCell>
                </DataRow>
                <template #actionButton>
                    <BaseButton @click="router.push({ name: 'PageCreate' })" v-if="perform('page:create')">
                        {{ $trans('global.add', { attribute: $trans('landing.page.page') }) }}
                    </BaseButton>
                </template>
            </DataTable>
        </ParentTransition>
    </ListItem>
</template>

<script>
export default {
    name: 'PageList'
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
if (perform('page:create')) {
    actions.unshift('create')
}
let dropdownActions = [];
if (perform('page:export')) {
    dropdownActions = ['print', 'pdf', 'excel']
}

const initUrl = "landing/page/"
const showFilter = ref(false)
const showImport = ref(false)

const pages = reactive({
    data: []
})

const setItems = (data) => {
    Object.assign(pages, data)
}
</script>