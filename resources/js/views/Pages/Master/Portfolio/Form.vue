<template>
  <FormAction :init-url="initUrl" :pre-requisites="true" @setPreRequisites="setPreRequisites" :init-form="initForm"
    :form="form" redirect="Portfolio">
    <div class="grid grid-cols-2 gap-6">
      <div class="col-span-2">
        <BaseInput type="text" v-model="form.name" name="name" :label="$trans('master.portfolio.props.name')"
          v-model:error="formErrors.name" autofocus />
      </div>
      <div class="col-span-2">
        <BaseSelect v-model="form.portfoliocategory" name="portfoliocategory"
          :label="$trans('master.portfoliocategory.portfoliocategory')" :options="preRequisites.portfoliocategory"
          v-model:error="formErrors.portfoliocategory" />
      </div>
      <div class="col-span-3 sm:col-span-2">
        <BaseTextarea v-model="form.description" name="description" :label="$trans('master.portfolio.props.description')"
          v-model:error="formErrors.description" />
      </div>
      <div class="col-span-4 sm:col-span-2">
        <BaseInput v-model="form.url" name="url" :label="$trans('master.portfolio.props.url')"
          v-model:error="formErrors.url" />
      </div>
    </div>
    <div class="grid grid-cols-1">
      <div class="col">
        <MediaUpload multiple :label="$trans('general.file')" module="portfolio" :media="form.media"
          @setHash="(hash) => (form.mediaHash = hash)" @setToken="(token) => (form.mediaToken = token)" />
      </div>
    </div>
  </FormAction>
</template>

<script>
export default {
  name: "PortfolioForm",
};
</script>

<script setup>
import { reactive } from "vue";
import { getFormErrors } from "@core/helpers/action";

const initUrl = "master/portfolio/";
const formErrors = getFormErrors(initUrl);
const preRequisites = reactive({});

const initForm = {
  name: "",
  portfoliocategory: "",
  description: "",
  url: "",
  media: [],
  mediaToken: "",
  mediaHash: "",
};

const form = reactive({ ...initForm });

const setPreRequisites = (data) => {
  Object.assign(preRequisites, data);
};
</script>
