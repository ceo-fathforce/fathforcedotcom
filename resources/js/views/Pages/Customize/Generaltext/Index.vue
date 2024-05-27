@ -0,0 +1,102 @@
<template>
    <ListItem :init-url="initUrl" @setItems="setItems">
        <template #header>
            <PageHeader :title="$trans('customize.generaltext.generaltext')">
                <PageHeaderAction url="customize/generaltextgeneraltexts/" name="Generaltext"
                    :title="$trans('customize.generaltext.generaltext')" :actions="actions"
                    :dropdown-actions="dropdownActions" @toggleFilter="showFilter = !showFilter"
                    @toggleImport="showImport = !showImport" />
            </PageHeader>
        </template>

        <template #import>
            <ParentTransition appear :visibility="showImport">
                <BaseImport path="customize/generaltexts/import" @cancelled="showImport = false" @hide="showImport = false"
                    @completed="emitter.emit('listItems')" />
            </ParentTransition>
        </template>

        <template #filter>
            <ParentTransition appear :visibility="showFilter">
                <FilterForm @refresh="emitter.emit('listItems')" @hide="showFilter = false"></FilterForm>
            </ParentTransition>
        </template>

        <ParentTransition appear :visibility="true">
            <DataTable :header="generaltexts.headers" :meta="generaltexts.meta" module="Generaltext"
                @refresh="emitter.emit('listItems')">
                <DataRow v-for="generaltext in generaltexts.data" :key="generaltext.uuid">
                    <DataCell name="name">
                        {{ generaltext.name }}
                    </DataCell>
                    <DataCell name="action">
                        <DropdownMenu
                            v-if="generaltext.isEditable || generaltext.isDeletable || generaltext.isReadtable || generaltext.isCreatetable">
                            <DropdownItem generaltext="fas fa-arrow-circle-right" v-if="generaltext.isReadtable"
                                @click="router.push({ name: 'GeneraltextShow', params: { uuid: generaltext.uuid } })">
                                {{ $trans('general.show') }}</DropdownItem>
                            <DropdownItem generaltext="fas fa-edit" v-if="generaltext.isEditable"
                                @click="router.push({ name: 'GeneraltextEdit', params: { uuid: generaltext.uuid } })">
                                {{ $trans('general.edit') }}</DropdownItem>
                            <!-- <DropdownItem generaltext="fas fa-copy" v-if="generaltext.isCreatetable"
                                @click="router.push({ name: 'GeneraltextDuplicate', params: { uuid: generaltext.uuid } })">
                                {{ $trans('general.duplicate') }}</DropdownItem>
                            <DropdownItem generaltext="fas fa-trash" v-if="generaltext.isDeletable" @click="emitter.emit('deleteItem', {
                                uuid: generaltext.uuid
                            })">{{ $trans('general.delete') }}</DropdownItem> -->
                        </DropdownMenu>
                    </DataCell>
                </DataRow>
                <template #actionButton>
                    <BaseButton @click="router.push({ name: 'GeneraltextCreate' })"
                        v-if="perform('generaltext:create')">
                        {{ $trans('global.add', { attribute: $trans('customize.generaltext.generaltext') }) }}
                    </BaseButton>
                </template>
            </DataTable>
        </ParentTransition>
    </ListItem>
</template>

<script>
export default {
    name: 'GeneraltextList'
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
if (perform('generaltext:create')) {
    actions.unshift('create')
}
let dropdownActions = [];
if (perform('generaltext:export')) {
    dropdownActions = ['print', 'pdf', 'excel']
}

const initUrl = "customize/generaltext/"
const showFilter = ref(false)
const showImport = ref(false)

const generaltexts = reactive({
    data: []
})

const setItems = (data) => {
    Object.assign(generaltexts, data)
    generaltexts.data.sort((a, b) => {
        return new Date(a.createdAt) - new Date(b.createdAt);
    });
}

</script>