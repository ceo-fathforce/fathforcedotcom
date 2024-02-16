<template>
    <FormAction
        :init-url="initUrl"
        :init-form="initForm"
        :form="form"
        redirect="GalleryCategory"
    >
        <div class="grid grid-cols-2 gap-6">
            <div class="col-span-2">
                <BaseInput
                    type="text"
                    v-model="form.title"
                    name="title"
                    :label="
                        $trans('master.gallerycategory.props.title')
                    "
                    v-model:error="formErrors.title"
                    autofocus
                />
            </div>
        </div>
    </FormAction>
</template>

<script>
export default {
    name: 'GalleryCategoryForm'
}
</script>

<script setup>
import { reactive } from "vue";
import { getFormErrors } from "@core/helpers/action"

const initForm = {
    title: "",
};

const initUrl = "master/gallerycategory/"
const formErrors = getFormErrors(initUrl)

const form = reactive({ ...initForm });
</script>
