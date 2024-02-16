<template>
  <FormAction :init-url="initUrl" :init-form="initForm"
    :form="form" redirect="Faq">
    <div class="grid grid-cols-2 gap-6">
      <div class="col-span-2">
        <BaseInput type="text" v-model="form.name" name="name" :label="$trans('master.faq.props.name')"
          v-model:error="formErrors.name" autofocus />
      </div>
      <div class="col-span-3 sm:col-span-2">
        <BaseTextarea v-model="form.description" name="description"
          :label="$trans('master.faq.props.description')" v-model:error="formErrors.description" />
      </div>
    </div>
  </FormAction>
</template>

<script>
export default {
  name: "FaqForm",
};
</script>

<script setup>
import { reactive } from "vue";
import { getFormErrors } from "@core/helpers/action";


const initUrl = "master/faq/";
const formErrors = getFormErrors(initUrl);

const initForm = {
  name: "",
  description: "",

};

const form = reactive({ ...initForm });

</script>
