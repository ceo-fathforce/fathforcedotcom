<template>
  <FormAction
    :init-url="initUrl"
    :pre-requisites="true"
    @setPreRequisites="setPreRequisites"
    :init-form="initForm"
    :form="form"
    redirect="Gallery"
  >
    <div class="grid grid-cols-2 gap-6">
      <div class="col-span-2">
        <BaseInput
          type="text"
          v-model="form.name"
          name="name"
          :label="$trans('master.gallery.props.name')"
          v-model:error="formErrors.name"
          autofocus
        />
      </div>
      <div class="col-span-2">
        <BaseSelect
          v-model="form.gallerycategory"
          name="gallerycategory"
          :label="$trans('master.gallerycategory.gallerycategory')"
          :options="preRequisites.gallerycategory"
          v-model:error="formErrors.gallerycategory"
        />
      </div>
    </div>
    <div class="grid grid-cols-1">
      <div class="col">
        <MediaUpload
          multiple
          :label="$trans('general.file')"
          module="gallery"
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
  name: "GalleryForm",
};
</script>

<script setup>
import { reactive } from "vue";
import { getFormErrors } from "@core/helpers/action";

const initUrl = "master/gallery/";
const formErrors = getFormErrors(initUrl);
const preRequisites = reactive({});

const initForm = {
  name: "",
  gallerycategory: "",
  description: "",
  media: [],
  mediaToken: "",
  mediaHash: "",
};

const form = reactive({ ...initForm });

const setPreRequisites = (data) => {
  Object.assign(preRequisites, data);
};
</script>
