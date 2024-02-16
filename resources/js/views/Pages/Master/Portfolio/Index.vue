@ -0,0 +1,102 @@
<template>
    <ListItem :init-url="initUrl" @setItems="setItems">
        <template #header>
            <PageHeader :title="$trans('master.portfolio.portfolio')">
                <PageHeaderAction url="master/portfolioportfolios/" name="Portfolio"
                    :title="$trans('master.portfolio.portfolio')" :actions="actions" :dropdown-actions="dropdownActions"
                    @toggleFilter="showFilter = !showFilter" @toggleImport="showImport = !showImport" />
            </PageHeader>
        </template>

        <template #import>
            <ParentTransition appear :visibility="showImport">
                <BaseImport path="master/portfolios/import" @cancelled="showImport = false" @hide="showImport = false"
                    @completed="emitter.emit('listItems')" />
            </ParentTransition>
        </template>

        <template #filter>
            <ParentTransition appear :visibility="showFilter">
                <FilterForm @refresh="emitter.emit('listItems')" @hide="showFilter = false"></FilterForm>
            </ParentTransition>
        </template>

        <ParentTransition appear :visibility="true">
            <DataTable :header="portfolios.headers" :meta="portfolios.meta" module="Portfolio"
                @refresh="emitter.emit('listItems')">
                <DataRow v-for="portfolio in portfolios.data" :key="portfolio.uuid">
                    <DataCell name="name">
                        {{ portfolio.name }}
                    </DataCell>
                    <DataCell name="portfoliocategory">
                        {{ portfolio.portfoliocategorytitle }}
                    </DataCell>
                    <DataCell name="action">
                        <DropdownMenu
                            v-if="portfolio.isEditable || portfolio.isDeletable || portfolio.isReadtable || portfolio.isCreatetable">
                            <DropdownItem portfolio="fas fa-arrow-circle-right" v-if="portfolio.isReadtable"
                                @click="router.push({ name: 'PortfolioShow', params: { uuid: portfolio.uuid } })">
                                {{ $trans('general.show') }}</DropdownItem>
                            <DropdownItem portfolio="fas fa-edit" v-if="portfolio.isEditable"
                                @click="router.push({ name: 'PortfolioEdit', params: { uuid: portfolio.uuid } })">
                                {{ $trans('general.edit') }}</DropdownItem>
                            <DropdownItem portfolio="fas fa-copy" v-if="portfolio.isCreatetable"
                                @click="router.push({ name: 'PortfolioDuplicate', params: { uuid: portfolio.uuid } })">
                                {{ $trans('general.duplicate') }}</DropdownItem>
                            <DropdownItem portfolio="fas fa-trash" v-if="portfolio.isDeletable" @click="emitter.emit('deleteItem', {
                                uuid: portfolio.uuid
                            })">{{ $trans('general.delete') }}</DropdownItem>
                        </DropdownMenu>
                    </DataCell>
                </DataRow>
                <template #actionButton>
                    <BaseButton @click="router.push({ name: 'PortfolioCreate' })" v-if="perform('portfolio:create')">
                        {{ $trans('global.add', { attribute: $trans('master.portfolio.portfolio') }) }}
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
import { perform } from "@core/helpers/action"
import FilterForm from './Filter.vue'

const router = useRouter()

const emitter = inject('emitter')

let actions = ['filter']
if (perform('portfolio:create')) {
    actions.unshift('create')
}
let dropdownActions = [];
if (perform('portfolio:export')) {
    dropdownActions = ['print', 'pdf', 'excel']
}

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