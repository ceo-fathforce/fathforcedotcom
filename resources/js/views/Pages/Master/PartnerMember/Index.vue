@ -0,0 +1,102 @@
<template>
    <ListItem :init-url="initUrl" @setItems="setItems">
        <template #header>
            <PageHeader :title="$trans('master.partnermember.partnermember')">
                <PageHeaderAction url="master/partnermembermembers/" name="PartnerMember"
                    :title="$trans('master.partnermember.partnermember')" :actions="actions"
                    :dropdown-actions="dropdownActions" @toggleFilter="showFilter = !showFilter"
                    @toggleImport="showImport = !showImport" />
            </PageHeader>
        </template>

        <template #import>
            <ParentTransition appear :visibility="showImport">
                <BaseImport path="master/partnermembers/import" @cancelled="showImport = false" @hide="showImport = false"
                    @completed="emitter.emit('listItems')" />
            </ParentTransition>
        </template>

        <template #filter>
            <ParentTransition appear :visibility="showFilter">
                <FilterForm @refresh="emitter.emit('listItems')" @hide="showFilter = false"></FilterForm>
            </ParentTransition>
        </template>

        <ParentTransition appear :visibility="true">
            <DataTable :header="partnermembers.headers" :meta="partnermembers.meta" module="PartnerMember"
                @refresh="emitter.emit('listItems')">
                <DataRow v-for="partnermember in partnermembers.data" :key="partnermember.uuid">
                    <DataCell name="name">
                        {{ partnermember.name }}
                    </DataCell>
                    <DataCell name="description">
                        {{ partnermember.description }}
                    </DataCell>
                    <DataCell name="action">
                        <DropdownMenu
                            v-if="partnermember.isEditable || partnermember.isDeletable || partnermember.isReadtable || partnermember.isCreatetable">
                            <DropdownItem partnermember="fas fa-arrow-circle-right" v-if="partnermember.isReadtable"
                                @click="router.push({ name: 'PartnerMemberShow', params: { uuid: partnermember.uuid } })">
                                {{ $trans('general.show') }}</DropdownItem>
                            <DropdownItem partnermember="fas fa-edit" v-if="partnermember.isEditable"
                                @click="router.push({ name: 'PartnerMemberEdit', params: { uuid: partnermember.uuid } })">
                                {{ $trans('general.edit') }}</DropdownItem>
                            <DropdownItem partnermember="fas fa-copy" v-if="partnermember.isCreatetable"
                                @click="router.push({ name: 'PartnerMemberDuplicate', params: { uuid: partnermember.uuid } })">
                                {{ $trans('general.duplicate') }}</DropdownItem>
                            <DropdownItem partnermember="fas fa-trash" v-if="partnermember.isDeletable" @click="emitter.emit('deleteItem', {
                                uuid: partnermember.uuid
                            })">{{ $trans('general.delete') }}</DropdownItem>
                        </DropdownMenu>
                    </DataCell>
                </DataRow>
                <template #actionButton>
                    <BaseButton @click="router.push({ name: 'PartnerMemberCreate' })"
                        v-if="perform('partnermember:create')">
                        {{ $trans('global.add', { attribute: $trans('master.partnermember.partnermember') }) }}
                    </BaseButton>
                </template>
            </DataTable>
        </ParentTransition>
    </ListItem>
</template>

<script>
export default {
    name: 'PartnerMemberList'
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
if (perform('partnermember:create')) {
    actions.unshift('create')
}
let dropdownActions = [];
if (perform('partnermember:export')) {
    dropdownActions = ['print', 'pdf', 'excel']
}

const initUrl = "master/partnermember/"
const showFilter = ref(false)
const showImport = ref(false)

const partnermembers = reactive({
    data: []
})

const setItems = (data) => {
    Object.assign(partnermembers, data)
}
</script>