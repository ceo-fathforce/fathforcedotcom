@ -0,0 +1,102 @@
<template>
    <ListItem :init-url="initUrl" @setItems="setItems">
        <template #header>
            <PageHeader :title="$trans('customize.servicetext.servicetext')">
                <PageHeaderAction url="customize/servicetextservicetexts/" name="Servicetext"
                    :title="$trans('customize.servicetext.servicetext')" :actions="actions"
                    :dropdown-actions="dropdownActions" @toggleFilter="showFilter = !showFilter"
                    @toggleImport="showImport = !showImport" />
            </PageHeader>
        </template>

        <template #import>
            <ParentTransition appear :visibility="showImport">
                <BaseImport path="customize/servicetexts/import" @cancelled="showImport = false" @hide="showImport = false"
                    @completed="emitter.emit('listItems')" />
            </ParentTransition>
        </template>

        <template #filter>
            <ParentTransition appear :visibility="showFilter">
                <FilterForm @refresh="emitter.emit('listItems')" @hide="showFilter = false"></FilterForm>
            </ParentTransition>
        </template>

        <ParentTransition appear :visibility="true">
            <DataTable :header="servicetexts.headers" :meta="servicetexts.meta" module="Servicetext"
                @refresh="emitter.emit('listItems')">
                <DataRow v-for="servicetext in servicetexts.data" :key="servicetext.uuid">
                    <DataCell name="name">
                        {{ servicetext.name }}
                    </DataCell>
                    <DataCell name="action">
                        <DropdownMenu
                            v-if="servicetext.isEditable || servicetext.isDeletable || servicetext.isReadtable || servicetext.isCreatetable">
                            <DropdownItem servicetext="fas fa-arrow-circle-right" v-if="servicetext.isReadtable"
                                @click="router.push({ name: 'ServicetextShow', params: { uuid: servicetext.uuid } })">
                                {{ $trans('general.show') }}</DropdownItem>
                            <DropdownItem servicetext="fas fa-edit" v-if="servicetext.isEditable"
                                @click="router.push({ name: 'ServicetextEdit', params: { uuid: servicetext.uuid } })">
                                {{ $trans('general.edit') }}</DropdownItem>
                            <!-- <DropdownItem servicetext="fas fa-copy" v-if="servicetext.isCreatetable"
                                @click="router.push({ name: 'ServicetextDuplicate', params: { uuid: servicetext.uuid } })">
                                {{ $trans('general.duplicate') }}</DropdownItem>
                            <DropdownItem servicetext="fas fa-trash" v-if="servicetext.isDeletable" @click="emitter.emit('deleteItem', {
                                uuid: servicetext.uuid
                            })">{{ $trans('general.delete') }}</DropdownItem> -->
                        </DropdownMenu>
                    </DataCell>
                </DataRow>
                <template #actionButton>
                    <BaseButton @click="router.push({ name: 'ServicetextCreate' })"
                        v-if="perform('servicetext:create')">
                        {{ $trans('global.add', { attribute: $trans('customize.servicetext.servicetext') }) }}
                    </BaseButton>
                </template>
            </DataTable>
        </ParentTransition>
    </ListItem>
</template>

<script>
export default {
    name: 'ServicetextList'
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
if (perform('servicetext:create')) {
    actions.unshift('create')
}
let dropdownActions = [];
if (perform('servicetext:export')) {
    dropdownActions = ['print', 'pdf', 'excel']
}

const initUrl = "customize/servicetext/"
const showFilter = ref(false)
const showImport = ref(false)

const servicetexts = reactive({
    data: []
})

const setItems = (data) => {
    Object.assign(servicetexts, data)
    servicetexts.data.sort((a, b) => {
        return new Date(a.createdAt) - new Date(b.createdAt);
    });
}

</script>