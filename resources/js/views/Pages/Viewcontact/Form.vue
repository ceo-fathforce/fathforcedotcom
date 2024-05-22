<template>
    <FormAction
        :init-url="initUrl"
        :init-form="initForm"
        :form="form"
        redirect="Viewcontact"
    >
        <div class="grid grid-cols-2 gap-6">
            <div class="col-span-2">
                <BaseInput
                    type="text"
                    v-model="form.first"
                    name="first"
                    :label="
                        $trans('viewcontact.props.first')
                    "
                    v-model:error="formErrors.first"
                    autofocus
                />
            </div>
            <div class="col-span-3 sm:col-span-2">
                <BaseTextarea
                    v-model="form.last"
                    name="last"
                    :label="
                        $trans('viewcontact.props.last')
                    "
                    v-model:error="formErrors.last"
                />
            </div>
            <div class="col-span-3 sm:col-span-2">
                <BaseTextarea
                    v-model="form.email"
                    name="email"
                    :label="
                        $trans('viewcontact.props.email')
                    "
                    v-model:error="formErrors.email"
                />
            </div>
            <div class="col-span-3 sm:col-span-2">
                <BaseTextarea
                    v-model="form.department"
                    name="department"
                    :label="
                        $trans('viewcontact.props.department')
                    "
                    v-model:error="formErrors.department"
                />
            </div>
            <div class="col-span-3 sm:col-span-2">
                <BaseTextarea
                    v-model="form.message"
                    name="message"
                    :label="
                        $trans('viewcontact.props.message')
                    "
                    v-model:error="formErrors.message"
                />
            </div>
        </div>
        <div class="grid grid-cols-1">
            <div class="col">
                <MediaUpload
                    multiple
                    :label="$trans('general.file')"
                    module="viewcontact"
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
    name: 'ViewcontactForm'
}
</script>

<script setup>
import { reactive } from "vue";
import { getFormErrors } from "@core/helpers/action"

const initForm = {
    first: "",
    last: "",
    email: "",
    department: "",
    message: "",
    media: [],
    mediaToken: "",
    mediaHash: "",
};

const initUrl = "viewcontact/"
const formErrors = getFormErrors(initUrl)

const form = reactive({ ...initForm });
</script>
