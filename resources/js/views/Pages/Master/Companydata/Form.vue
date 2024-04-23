<template>
    <FormAction
        :init-url="initUrl"
        :init-form="initForm"
        :form="form"
        redirect="Companydata"
    >
        <div class="grid grid-cols-2 gap-6">
            <div class="col-span-2">
                <BaseInput
                    type="number"
                    v-model="form.completedprojects"
                    name="completedprojects"
                    :label="
                        $trans('master.companydata.props.completedprojects')
                    "
                    v-model:error="formErrors.completedprojects"
                    autofocus
                />
            </div>
            <div class="col-span-3 sm:col-span-2">
                <BaseInput
                    type="number"
                    v-model="form.totalproducts"
                    name="totalproducts"
                    :label="
                        $trans('master.companydata.props.totalproducts')
                    "
                    v-model:error="formErrors.totalproducts"
                />
            </div>
            <div class="col-span-2">
                <BaseInput
                    type="number"
                    v-model="form.satisfiedcostumers"
                    name="satisfiedcostumers"
                    :label="
                        $trans('master.companydata.props.satisfiedcostumers')
                    "
                    v-model:error="formErrors.satisfiedcostumers"
                    autofocus
                />
            </div>
            <div class="col-span-3 sm:col-span-2">
                <BaseInput
                    type="number"
                    v-model="form.employees"
                    name="employees"
                    :label="
                        $trans('master.companydata.props.employees')
                    "
                    v-model:error="formErrors.employees"
                />
            </div>
        </div>
        <div class="grid grid-cols-1">
            <div class="col">
                <MediaUpload
                    multiple
                    :label="$trans('general.file')"
                    module="companydata"
                    :media="form.media"
                    @setHash="hash => form.mediaHash = hash"
                    @setToken="token => form.mediaToken = token"
                    />
            </div>
        </div>
    </FormAction>
</template>

<script>
export default {
    name: 'CompanydataForm'
}
</script>

<script setup>
import { reactive } from "vue";
import { getFormErrors } from "@core/helpers/action"

const initForm = {
    completedprojects: "",
    totalproducts: "",
    satisfiedcostumers: "",
    employees: "",
    media: [],
    mediaToken: "",
    mediaHash: "",
};

const initUrl = "master/companydata/"
const formErrors = getFormErrors(initUrl)

const form = reactive({ ...initForm });
</script>
