<template>
    <ListItem
        :init-url="initUrl"
        @setItems="setItems"
    >
        <template #header>
            <PageHeader
                :title="$trans('master.socialmedia.socialmedia')"
            >
                <PageHeaderAction
                    url="master/socialmedias/"
                    name="Socialmedia"
                    :title="$trans('master.socialmedia.socialmedia')"
                    :actions="actions"
                    :dropdown-actions="dropdownActions"
                    @toggleFilter="showFilter = ! showFilter"
                    @toggleImport="showImport = ! showImport"
                />
            </PageHeader>
        </template>

        <template #import>
            <ParentTransition appear :visibility="showImport">
                <BaseImport path="master/socialmedias/import" @cancelled="showImport = false" @hide="showImport = false" @completed="emitter.emit('listItems')" />
            </ParentTransition>
        </template>

        <template #filter>
            <ParentTransition appear :visibility="showFilter">
                <FilterForm @refresh="emitter.emit('listItems')" @hide="showFilter = false"></FilterForm>
            </ParentTransition>
        </template>

        <ParentTransition appear :visibility="true">
            <DataTable
                :header="socialmedias.headers"
                :meta="socialmedias.meta"
                module="socialmedia"
                @refresh="emitter.emit('listItems')"
            >
                <DataRow v-for="socialmedia in socialmedias.data" :key="socialmedia.uuid">
                    <DataCell name="facebook">
                        {{ socialmedia.facebook }}
                    </DataCell>
                    <DataCell name="instagram">
                        {{ socialmedia.instagram }}
                    </DataCell>
                    <DataCell name="youtube">
                        {{ socialmedia.youtube }}
                    </DataCell>
                    <DataCell name="twitter">
                        {{ socialmedia.twitter }}
                    </DataCell>
                    <DataCell name="telegram">
                        {{ socialmedia.telegram }}
                    </DataCell>
                    <DataCell name="action">
                        <DropdownMenu v-if="socialmedia.isEditable || socialmedia.isDeletable || socialmedia.isReadtable || socialmedia.isCreatetable">
                            <DropdownItem socialmedia="fas fa-arrow-circle-right" v-if="socialmedia.isReadtable" @click="router.push({name: 'SocialmediaShow', params: {uuid: socialmedia.uuid}})">{{$trans('general.show')}}</DropdownItem>
                            <DropdownItem socialmedia="fas fa-edit" v-if="socialmedia.isEditable" @click="router.push({name: 'SocialmediaEdit', params: {uuid: socialmedia.uuid}})">{{$trans('general.edit')}}</DropdownItem>
                            <DropdownItem socialmedia="fas fa-copy" v-if="socialmedia.isCreatetable" @click="router.push({name: 'SocialmediaDuplicate', params: {uuid: socialmedia.uuid}})">{{$trans('general.duplicate')}}</DropdownItem>
                            <DropdownItem socialmedia="fas fa-trash" v-if="socialmedia.isDeletable" @click="emitter.emit('deleteItem', {
                                uuid: socialmedia.uuid
                            })">{{$trans('general.delete')}}</DropdownItem>
                        </DropdownMenu>
                    </DataCell>
                </DataRow>
                <template #actionButton>
                    <BaseButton @click="router.push({name: 'SocialmediaCreate'})" v-if="perform('socialmedia:create')">
                        {{$trans('global.add', {attribute: $trans('master.socialmedia.socialmedia')})}}
                    </BaseButton>
                </template>
            </DataTable>
        </ParentTransition>
    </ListItem>
</template>

<script>
export default {
    name: 'SocialmediaList'
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
if (perform('socialmedia:create')) {
    actions.unshift('create')
}
let dropdownActions = [];
if (perform('socialmedia:export')) {
    dropdownActions = ['print', 'pdf', 'excel']
}

const initUrl = "master/socialmedia/"
const showFilter = ref(false)
const showImport = ref(false)

const socialmedias = reactive({
    data: []
})

const setItems = (data) => {
    Object.assign(socialmedias, data)
}
</script>
