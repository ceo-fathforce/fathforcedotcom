<template>
  <FormAction :init-url="initUrl" :init-form="initForm"
    :form="form" redirect="PartnerMember">
    <div class="grid grid-cols-2 gap-6">
      <div class="col-span-2">
        <BaseInput type="text" v-model="form.name" name="name" :label="$trans('master.partnermember.props.name')"
          v-model:error="formErrors.name" autofocus />
      </div>
      <div class="col-span-3 sm:col-span-2">
        <BaseTextarea v-model="form.description" name="description"
          :label="$trans('master.partnermember.props.description')" v-model:error="formErrors.description" />
      </div>
    </div>
    <div class="grid grid-cols-1">
      <div class="col">
        <MediaUpload multiple :label="$trans('general.file')" module="partnermember" :media="form.media"
          @setHash="(hash) => (form.mediaHash = hash)" @setToken="(token) => (form.mediaToken = token)" />
      </div>
    </div>
  </FormAction>
</template>

<script>
export default {
  name: "PartnerMemberForm",
};
</script>

<script setup>
import { reactive } from "vue";
import { getFormErrors } from "@core/helpers/action";


const initUrl = "master/partnermember/";
const formErrors = getFormErrors(initUrl);


const initForm = {
  name: "",
  description: "",
  media: [],
  mediaToken: "",
  mediaHash: "",
};

const form = reactive({ ...initForm });

</script>
