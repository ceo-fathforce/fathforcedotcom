<template>
    <FormAction
        :init-url="initUrl"
        :init-form="initForm"
        :form="form"
        redirect="Socialmedia"
    >
        <div class="grid grid-cols-2 gap-6">
            <div class="col-span-2">
                <BaseInput
                    type="text"
                    v-model="form.facebook"
                    name="facebook"
                    :label="
                        $trans('master.socialmedia.props.facebook')
                    "
                    v-model:error="formErrors.facebook"
                    autofocus
                />
            </div>
            <div class="col-span-3 sm:col-span-2">
                <BaseInput
                    type="text"
                    v-model="form.instagram"
                    name="instagram"
                    :label="
                        $trans('master.socialmedia.props.instagram')
                    "
                    v-model:error="formErrors.instagram"
                />
            </div>
            <div class="col-span-2">
                <BaseInput
                    type="text"
                    v-model="form.youtube"
                    name="youtube"
                    :label="
                        $trans('master.socialmedia.props.youtube')
                    "
                    v-model:error="formErrors.youtube"
                    autofocus
                />
            </div>
            <div class="col-span-3 sm:col-span-2">
                <BaseInput
                    type="text"
                    v-model="form.twitter"
                    name="twitter"
                    :label="
                        $trans('master.socialmedia.props.twitter')
                    "
                    v-model:error="formErrors.twitter"
                />
            </div>
             <div class="col-span-3 sm:col-span-2">
                <BaseInput
                    type="text"
                    v-model="form.telegram"
                    name="telegram"
                    :label="
                        $trans('master.socialmedia.props.telegram')
                    "
                    v-model:error="formErrors.telegram"
                />
            </div>
        </div>
        <div class="grid grid-cols-1">
            <div class="col">
                <MediaUpload
                    multiple
                    :label="$trans('general.file')"
                    module="socialmedia"
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
    name: 'SocialmediaForm'
}
</script>

<script setup>
import { reactive } from "vue";
import { getFormErrors } from "@core/helpers/action"

const initForm = {
    facebook: "",
    instagram: "",
    youtube: "",
    twitter: "",
    telegram: "",
    media: [],
    mediaToken: "",
    mediaHash: "",
};

const initUrl = "master/socialmedia/"
const formErrors = getFormErrors(initUrl)

const form = reactive({ ...initForm });
</script>
