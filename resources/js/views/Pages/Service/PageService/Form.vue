<template>
  <FormAction :init-url="initUrl" :pre-requisites="true" @setPreRequisites="setPreRequisites" :init-form="initForm"
    :form="form" redirect="PageService">
    <div class="grid grid-cols-2 gap-6">
      <div class="col-span-2">
        <BaseInput type="text" v-model="form.title" name="title" :label="$trans('service.pageservice.props.title')"
          v-model:error="formErrors.title" autofocus />
      </div>
      <div class="col-span-2">
        <BaseSelect v-model="form.pageservicecategory" name="pageservicecategory"
          :label="$trans('service.pageservicecategory.pageservicecategory')" :options="preRequisites.pageservicecategory"
          v-model:error="formErrors.pageservicecategory" />
      </div>
      <div class="col-span-3 sm:col-span-2">
        <BaseTextarea v-model="form.description" name="description"
          :label="$trans('service.pageservice.props.description')" v-model:error="formErrors.description" />
      </div>
    </div>
    <div class="grid grid-cols-1">
      <div class="col">
        <MediaUpload multiple :label="$trans('general.file')" module="pageservice" :media="form.media"
          @setHash="(hash) => (form.mediaHash = hash)" @setToken="(token) => (form.mediaToken = token)" />
      </div>
    </div>
  </FormAction>
</template>

<script>
export default {
  name: "PageServiceForm",
};
</script>

<script setup>
import { reactive } from "vue";
import { getFormErrors } from "@core/helpers/action";

const initUrl = "service/pageservice/";
const formErrors = getFormErrors(initUrl);
const preRequisites = reactive({});

const initForm = {
  title: "",
  pageservicecategory: "",
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
