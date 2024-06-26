<template>
    <FormAction
        :pre-requisites="true"
        @setPreRequisites="setPreRequisites"
        :init-url="initUrl"
        :init-form="initForm"
        :form="form"
        :set-form="setForm"
        redirect="User"
    >
        <div class="grid grid-cols-3 gap-6">
            <div class="col-span-3 sm:col-span-1">
                <BaseInput
                    type="text"
                    v-model="form.name"
                    name="name"
                    :label="
                        $trans('user.props.name')
                    "
                    v-model:error="formErrors.name"
                    autofocus
                />
            </div>
            <div class="col-span-3 sm:col-span-1">
                <BaseInput
                    type="text"
                    v-model="form.email"
                    name="email"
                    :label="
                        $trans('user.props.email')
                    "
                    v-model:error="formErrors.email"
                />
            </div>
            <div class="col-span-3 sm:col-span-1">
                <BaseInput
                    type="text"
                    v-model="form.username"
                    name="username"
                    :label="
                        $trans('user.props.username')
                    "
                    v-model:error="formErrors.username"
                />
            </div>
            <div class="col-span-3 sm:col-span-1">
                <BaseInput
                    type="text"
                    v-model="form.job"
                    name="job"
                    :label="
                        $trans('user.props.job')
                    "
                    v-model:error="formErrors.job"
                />
            </div>
            <div class="col-span-3 sm:col-span-1">
                <BaseInput
                    type="text"
                    v-model="form.me"
                    name="me"
                    :label="
                        $trans('user.props.me')
                    "
                    v-model:error="formErrors.me"
                />
            </div>
            <div class="col-span-3 sm:col-span-1">
                <BaseInput
                    type="text"
                    v-model="form.twitter"
                    name="twitter"
                    :label="
                        $trans('user.props.twitter')
                    "
                    v-model:error="formErrors.twitter"
                />
            </div>
            <div class="col-span-3 sm:col-span-1">
                <BaseInput
                    type="text"
                    v-model="form.facebook"
                    name="facebook"
                    :label="
                        $trans('user.props.facebook')
                    "
                    v-model:error="formErrors.facebook"
                />
            </div>
            <div class="col-span-3 sm:col-span-1">
                <BaseInput
                    type="text"
                    v-model="form.instagram"
                    name="instagram"
                    :label="
                        $trans('user.props.instagram')
                    "
                    v-model:error="formErrors.instagram"
                />
            </div>
            <div class="col-span-3 sm:col-span-1">
                <BaseInput
                    type="text"
                    v-model="form.youtube"
                    name="youtube"
                    :label="
                        $trans('user.props.youtube')
                    "
                    v-model:error="formErrors.youtube"
                />
            </div>
            <div class="col-span-3 sm:col-span-1">
                <BaseSelect
                    v-model="form.roles"
                    name="roles"
                    :label="
                        $trans('config.role.role')
                    "
                    :options="preRequisites.roles"
                    multiple
                    label-prop="label"
                    value-prop="uuid"
                    v-model:error="formErrors.roles"
                />
            </div>
        </div>
        <div class="mt-6 grid grid-cols-3 gap-6" v-if="route.meta.type === 'edit'">
            <div class="col-span-3 sm:col-span-1">
                <BaseSwitch
                    v-model="form.forceChangePassword"
                    name="forceChangePassword"
                    :label="$trans('user.props.force_change_password')"
                />
            </div>
        </div>
        <div class="mt-6 grid grid-cols-3 gap-6" v-if="form.forceChangePassword">
            <div class="col-span-3 sm:col-span-1">
                <BaseInput
                    type="password"
                    v-model="form.password"
                    name="password"
                    :label="
                        $trans('user.props.password')
                    "
                    v-model:error="formErrors.password"
                />
            </div>
            <div class="col-span-3 sm:col-span-1">
                <BaseInput
                    type="password"
                    v-model="form.passwordConfirmation"
                    name="passwordConfirmation"
                    :label="
                        $trans('user.props.password_confirmation')
                    "
                    v-model:error="formErrors.passwordConfirmation"
                />
            </div>
        </div>
    </FormAction>
</template>

<script>
export default {
    name: 'UserForm'
}
</script>

<script setup>
import { reactive } from "vue";
import { useRoute } from "vue-router"
import { cloneDeep } from "@core/utils"
import { getFormErrors } from "@core/helpers/action"

const route = useRoute()

const initForm = {
    name: "",
    roles: [],
    email: "",
    username: "",
    password: "",
    job: "",
    me: "",
    twitter: "",
    facebook: "",
    instagram: "",
    youtube: "",
    passwordConfirmation: "",
    forceChangePassword: true
};

const initUrl = "user/"
const preRequisites = reactive({})
const formErrors = getFormErrors(initUrl)

const form = reactive({ ...initForm });

const setForm = (data) => {
    Object.assign(initForm, {
        name: data.profile.name,
        roles: data.roles.map(item => item.uuid),
        email: data.email,
        username: data.username,
        job: data.job,
        me: data.me,
        twitter: data.twitter,
        facebook: data.facebook,
        instagram: data.instagram,
        youtube: data.youtube,
        forceChangePassword: false
    });

    Object.assign(form, cloneDeep(initForm));
};

const setPreRequisites = (data) => {
    Object.assign(preRequisites, data)
}
</script>
