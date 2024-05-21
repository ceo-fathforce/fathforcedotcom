<template>
  <FormAction
    :init-url="initUrl"
    :init-form="initForm"
    :form="form"
    redirect="Serviceimage"
  >
    <div class="grid grid-cols-2 gap-6">
      <div class="col-span-2">
        <BaseInput
          type="text"
          v-model="form.name"
          name="name"
          :label="$trans('customize.serviceimage.props.name')"
          v-model:error="formErrors.name"
          autofocus
        />
      </div>
    </div>
    <div class="grid grid-cols-1">
      <div class="col">
        <MediaUpload
          multiple
          :label="$trans('general.file')"
          module="serviceimage"
          :media="form.media"
          @setHash="(hash) => (form.mediaHash = hash)"
          @setToken="(token) => (form.mediaToken = token)"
        />
      </div>
    </div>
  </FormAction>
</template>

<script>
export default {
  name: "ServiceimageForm",
};
</script>

<script setup>
import { reactive } from "vue";
import { getFormErrors } from "@core/helpers/action";

const initUrl = "customize/serviceimage/";
const formErrors = getFormErrors(initUrl);

const initForm = {
  name: "",
  media: [],
  mediaToken: "",
  mediaHash: "",
};

const form = reactive({ ...initForm });
</script>
