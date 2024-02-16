@ -0,0 +1,102 @@
<template>
    <ListItem
        :init-url="initUrl"
        @setItems="setItems"
    >
        <template #header>
            <PageHeader
                :title="$trans('master.gallery.gallery')"
            >
                <PageHeaderAction
                    url="master/gallerygallerys/"
                    name="Gallery"
                    :title="$trans('master.gallery.gallery')"
                    :actions="actions"
                    :dropdown-actions="dropdownActions"
                    @toggleFilter="showFilter = ! showFilter"
                    @toggleImport="showImport = ! showImport"
                />
            </PageHeader>
        </template>

        <template #import>
            <ParentTransition appear :visibility="showImport">
                <BaseImport path="master/gallerys/import" @cancelled="showImport = false" @hide="showImport = false" @completed="emitter.emit('listItems')" />
            </ParentTransition>
        </template>

        <template #filter>
            <ParentTransition appear :visibility="showFilter">
                <FilterForm @refresh="emitter.emit('listItems')" @hide="showFilter = false"></FilterForm>
            </ParentTransition>
        </template>

        <ParentTransition appear :visibility="true">
            <DataTable
                :header="gallerys.headers"
                :meta="gallerys.meta"
                module="Gallery"
                @refresh="emitter.emit('listItems')"
            >
                <DataRow v-for="gallery in gallerys.data" :key="gallery.uuid">
                    <DataCell name="name">
                        {{ gallery.name }}
                    </DataCell>
                    <DataCell name="gallerycategory">
                        {{ gallery.gallerycategorytitle }}
                    </DataCell>
                    <DataCell name="action">
                        <DropdownMenu v-if="gallery.isEditable || gallery.isDeletable || gallery.isReadtable || gallery.isCreatetable">
                            <DropdownItem gallery="fas fa-arrow-circle-right" v-if="gallery.isReadtable" @click="router.push({name: 'GalleryShow', params: {uuid: gallery.uuid}})">{{$trans('general.show')}}</DropdownItem>
                            <DropdownItem gallery="fas fa-edit" v-if="gallery.isEditable" @click="router.push({name: 'GalleryEdit', params: {uuid: gallery.uuid}})">{{$trans('general.edit')}}</DropdownItem>
                            <DropdownItem gallery="fas fa-copy" v-if="gallery.isCreatetable" @click="router.push({name: 'GalleryDuplicate', params: {uuid: gallery.uuid}})">{{$trans('general.duplicate')}}</DropdownItem>
                            <DropdownItem gallery="fas fa-trash" v-if="gallery.isDeletable" @click="emitter.emit('deleteItem', {
                                uuid: gallery.uuid
                            })">{{$trans('general.delete')}}</DropdownItem>
                        </DropdownMenu>
                    </DataCell>
                </DataRow>
                <template #actionButton>
                    <BaseButton @click="router.push({name: 'GalleryCreate'})" v-if="perform('gallery:create')">
                        {{$trans('global.add', {attribute: $trans('master.gallery.gallery')})}}
                    </BaseButton>
                </template>
            </DataTable>
        </ParentTransition>
    </ListItem>
</template>

<script>
export default {
    name: 'GalleryList'
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
if (perform('gallery:create')) {
    actions.unshift('create')
}
let dropdownActions = [];
if (perform('gallery:export')) {
    dropdownActions = ['print', 'pdf', 'excel']
}

const initUrl = "master/gallery/"
const showFilter = ref(false)
const showImport = ref(false)

const gallerys = reactive({
    data: []
})

const setItems = (data) => {
    Object.assign(gallerys, data)
}
</script>