<template>
    <ListItem
        :init-url="initUrl"
        @setItems="setItems"
    >
        <template #header>
            <PageHeader
                :title="$trans('master.portfolio')"
            >
                <PageHeaderAction
                    url="portfolios/"
                    name="Portfolio"
                    :title="$trans('master.portfolio')"
                    :actions="['create', 'filter']"
                    :dropdown-actions="['import', 'print', 'pdf', 'excel']"
                    @toggleFilter="showFilter = ! showFilter"
                    @toggleImport="showImport = ! showImport"
                />
            </PageHeader>
        </template>

        <template #import>
            <ParentTransition appear :visibility="showImport">
                <BaseImport path="portfolios/import" @cancelled="showImport = false" @hide="showImport = false" @completed="emitter.emit('listItems')" />
            </ParentTransition>
        </template>

        <template #filter>
            <ParentTransition appear :visibility="showFilter">
                <FilterForm @refresh="emitter.emit('listItems')" @hide="showFilter = false"></FilterForm>
            </ParentTransition>
        </template>

        <ParentTransition appear :visibility="true">
            <DataTable
                :header="portfolios.headers"
                :meta="portfolios.meta"
                module="portfolio"
                @refresh="emitter.emit('listItems')"
            >
                <DataRow v-for="portfolio in portfolios.data" :key="portfolio.uuid">
                    <DataCell name="name">
                        {{ portfolio.name }}
                    </DataCell>
                    <DataCell name="action">
                        <DropdownMenu>
                            <DropdownItem icon="fas fa-arrow-circle-right" @click="router.push({name: 'PortfolioShow', params: {uuid: portfolio.uuid}})">{{$trans('general.show')}}</DropdownItem>
                            <DropdownItem icon="fas fa-edit" @click="router.push({name: 'PortfolioEdit', params: {uuid: portfolio.uuid}})">{{$trans('general.edit')}}</DropdownItem>
                            <DropdownItem icon="fas fa-copy" @click="router.push({name: 'PortfolioDuplicate', params: {uuid: portfolio.uuid}})">{{$trans('general.duplicate')}}</DropdownItem>
                            <DropdownItem icon="fas fa-trash" @click="emitter.emit('deleteItem', {
                                uuid: portfolio.uuid
                            })">{{$trans('general.delete')}}</DropdownItem>
                        </DropdownMenu>
                    </DataCell>
                </DataRow>
                <template #actionButton>
                    <BaseButton @click="router.push({name: 'PortfolioCreate'})">
                        {{$trans('global.add', {attribute: $trans('master.portfolio')})}}
                    </BaseButton>
                </template>
            </DataTable>
        </ParentTransition>
    </ListItem>
</template>

<script>
export default {
    name: 'PortfolioList'
}
</script>

<script setup>
import { ref, reactive, inject } from "vue"
import { useRouter } from "vue-router"
import FilterForm from './Filter.vue'

const router = useRouter()

const emitter = inject('emitter')

const initUrl = "master/portfolio/"
const showFilter = ref(false)
const showImport = ref(false)

const portfolios = reactive({
    data: []
})

const setItems = (data) => {
    Object.assign(portfolios, data)
}
</script>
