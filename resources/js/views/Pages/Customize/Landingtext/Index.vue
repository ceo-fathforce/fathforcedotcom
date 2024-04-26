@ -0,0 +1,102 @@
<template>
    <ListItem :init-url="initUrl" @setItems="setItems">
        <template #header>
            <PageHeader :title="$trans('customize.landingtext.landingtext')">
                <PageHeaderAction url="customize/landingtextlandingtexts/" name="Landingtext"
                    :title="$trans('customize.landingtext.landingtext')" :actions="actions"
                    :dropdown-actions="dropdownActions" @toggleFilter="showFilter = !showFilter"
                    @toggleImport="showImport = !showImport" />
            </PageHeader>
        </template>

        <template #import>
            <ParentTransition appear :visibility="showImport">
                <BaseImport path="customize/landingtexts/import" @cancelled="showImport = false" @hide="showImport = false"
                    @completed="emitter.emit('listItems')" />
            </ParentTransition>
        </template>

        <template #filter>
            <ParentTransition appear :visibility="showFilter">
                <FilterForm @refresh="emitter.emit('listItems')" @hide="showFilter = false"></FilterForm>
            </ParentTransition>
        </template>

        <ParentTransition appear :visibility="true">
            <DataTable :header="landingtexts.headers" :meta="landingtexts.meta" module="Landingtext"
                @refresh="emitter.emit('listItems')">
                <DataRow v-for="landingtext in landingtexts.data" :key="landingtext.uuid">
                    <DataCell name="name">
                        {{ landingtext.name }}
                    </DataCell>
                    <DataCell name="action">
                        <DropdownMenu
                            v-if="landingtext.isEditable || landingtext.isDeletable || landingtext.isReadtable || landingtext.isCreatetable">
                            <DropdownItem landingtext="fas fa-arrow-circle-right" v-if="landingtext.isReadtable"
                                @click="router.push({ name: 'LandingtextShow', params: { uuid: landingtext.uuid } })">
                                {{ $trans('general.show') }}</DropdownItem>
                            <DropdownItem landingtext="fas fa-edit" v-if="landingtext.isEditable"
                                @click="router.push({ name: 'LandingtextEdit', params: { uuid: landingtext.uuid } })">
                                {{ $trans('general.edit') }}</DropdownItem>
                            <DropdownItem landingtext="fas fa-copy" v-if="landingtext.isCreatetable"
                                @click="router.push({ name: 'LandingtextDuplicate', params: { uuid: landingtext.uuid } })">
                                {{ $trans('general.duplicate') }}</DropdownItem>
                            <DropdownItem landingtext="fas fa-trash" v-if="landingtext.isDeletable" @click="emitter.emit('deleteItem', {
                                uuid: landingtext.uuid
                            })">{{ $trans('general.delete') }}</DropdownItem>
                        </DropdownMenu>
                    </DataCell>
                </DataRow>
                <template #actionButton>
                    <BaseButton @click="router.push({ name: 'LandingtextCreate' })"
                        v-if="perform('landingtext:create')">
                        {{ $trans('global.add', { attribute: $trans('customize.landingtext.landingtext') }) }}
                    </BaseButton>
                </template>
            </DataTable>
        </ParentTransition>
    </ListItem>
</template>

<script>
export default {
    name: 'LandingtextList'
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
if (perform('landingtext:create')) {
    actions.unshift('create')
}
let dropdownActions = [];
if (perform('landingtext:export')) {
    dropdownActions = ['print', 'pdf', 'excel']
}

const initUrl = "customize/landingtext/"
const showFilter = ref(false)
const showImport = ref(false)

const landingtexts = reactive({
    data: []
})

const setItems = (data) => {
    Object.assign(landingtexts, data)
}
</script>