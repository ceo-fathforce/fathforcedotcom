<template>
  <FormAction :init-url="initUrl" :init-form="initForm"
    :form="form" redirect="Superiority">
    <div class="grid grid-cols-2 gap-6">
      <div class="col-span-2">
        <BaseInput type="text" v-model="form.name" name="name" :label="$trans('master.superiority.props.name')"
          v-model:error="formErrors.name" autofocus />
      </div>
      <div class="col-span-3 sm:col-span-2">
        <BaseTextarea v-model="form.description" name="description"
          :label="$trans('master.superiority.props.description')" v-model:error="formErrors.description" />
      </div>
    </div>
  </FormAction>
</template>

<script>
export default {
  name: "SuperiorityForm",
};
</script>

<script setup>
import { reactive } from "vue";
import { getFormErrors } from "@core/helpers/action";


const initUrl = "master/superiority/";
const formErrors = getFormErrors(initUrl);


const initForm = {
  name: "",
  description: "",
};

const form = reactive({ ...initForm });

</script>
