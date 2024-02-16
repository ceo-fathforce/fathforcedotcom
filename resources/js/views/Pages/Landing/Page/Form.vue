<template>
  <FormAction
    :init-url="initUrl"
    :pre-requisites="true"
    @setPreRequisites="setPreRequisites"
    :init-form="initForm"
    :form="form"
    redirect="Page"
  >
    <div class="grid grid-cols-2 gap-6">
      <div class="col-span-2">
        <BaseInput
          type="text"
          v-model="form.name"
          name="name"
          :label="$trans('landing.page.props.name')"
          v-model:error="formErrors.name"
          autofocus
        />
      </div>
      <div class="col-span-2">
        <BaseSelect
          v-model="form.pagecategory"
          name="pagecategory"
          :label="$trans('landing.pagecategory.pagecategory')"
          :options="preRequisites.pagecategory"
          v-model:error="formErrors.pagecategory"
        />
      </div>
      <div class="col-span-3 sm:col-span-2">
        <BaseTextarea
          v-model="form.description"
          name="description"
          :label="$trans('landing.page.props.description')"
          v-model:error="formErrors.description"
        />
      </div>
    </div>
    <div class="grid grid-cols-1">
      <div class="col">
        <MediaUpload
          multiple
          :label="$trans('general.file')"
          module="page"
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
  name: "PageForm",
};
</script>

<script setup>
import { reactive } from "vue";
import { getFormErrors } from "@core/helpers/action";

const initUrl = "landing/page/";
const formErrors = getFormErrors(initUrl);
const preRequisites = reactive({});

const initForm = {
  name: "",
  pagecategory: "",
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
