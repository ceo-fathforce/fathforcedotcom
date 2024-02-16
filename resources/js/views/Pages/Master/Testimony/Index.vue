@ -0,0 +1,102 @@
<template>
    <ListItem :init-url="initUrl" @setItems="setItems">
        <template #header>
            <PageHeader :title="$trans('master.testimony.testimony')">
                <PageHeaderAction url="master/testimonycompanys/" name="Testimony"
                    :title="$trans('master.testimony.testimony')" :actions="actions"
                    :dropdown-actions="dropdownActions" @toggleFilter="showFilter = !showFilter"
                    @toggleImport="showImport = !showImport" />
            </PageHeader>
        </template>

        <template #import>
            <ParentTransition appear :visibility="showImport">
                <BaseImport path="master/testimonys/import" @cancelled="showImport = false" @hide="showImport = false"
                    @completed="emitter.emit('listItems')" />
            </ParentTransition>
        </template>

        <template #filter>
            <ParentTransition appear :visibility="showFilter">
                <FilterForm @refresh="emitter.emit('listItems')" @hide="showFilter = false"></FilterForm>
            </ParentTransition>
        </template>

        <ParentTransition appear :visibility="true">
            <DataTable :header="testimonys.headers" :meta="testimonys.meta" module="Testimony"
                @refresh="emitter.emit('listItems')">
                <DataRow v-for="testimony in testimonys.data" :key="testimony.uuid">
                    <DataCell name="name">
                        {{ testimony.name }}
                    </DataCell>
                    <DataCell name="description">
                        {{ testimony.description }}
                    </DataCell>
                    <DataCell name="action">
                        <DropdownMenu
                            v-if="testimony.isEditable || testimony.isDeletable || testimony.isReadtable || testimony.isCreatetable">
                            <DropdownItem testimony="fas fa-arrow-circle-right" v-if="testimony.isReadtable"
                                @click="router.push({ name: 'TestimonyShow', params: { uuid: testimony.uuid } })">
                                {{ $trans('general.show') }}</DropdownItem>
                            <DropdownItem testimony="fas fa-edit" v-if="testimony.isEditable"
                                @click="router.push({ name: 'TestimonyEdit', params: { uuid: testimony.uuid } })">
                                {{ $trans('general.edit') }}</DropdownItem>
                            <DropdownItem testimony="fas fa-copy" v-if="testimony.isCreatetable"
                                @click="router.push({ name: 'TestimonyDuplicate', params: { uuid: testimony.uuid } })">
                                {{ $trans('general.duplicate') }}</DropdownItem>
                            <DropdownItem testimony="fas fa-trash" v-if="testimony.isDeletable" @click="emitter.emit('deleteItem', {
                                uuid: testimony.uuid
                            })">{{ $trans('general.delete') }}</DropdownItem>
                        </DropdownMenu>
                    </DataCell>
                </DataRow>
                <template #actionButton>
                    <BaseButton @click="router.push({ name: 'TestimonyCreate' })"
                        v-if="perform('testimony:create')">
                        {{ $trans('global.add', { attribute: $trans('master.testimony.testimony') }) }}
                    </BaseButton>
                </template>
            </DataTable>
        </ParentTransition>
    </ListItem>
</template>

<script>
export default {
    name: 'TestimonyList'
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
if (perform('testimony:create')) {
    actions.unshift('create')
}
let dropdownActions = [];
if (perform('testimony:export')) {
    dropdownActions = ['print', 'pdf', 'excel']
}

const initUrl = "master/testimony/"
const showFilter = ref(false)
const showImport = ref(false)

const testimonys = reactive({
    data: []
})

const setItems = (data) => {
    Object.assign(testimonys, data)
}
</script>