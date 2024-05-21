<template>
  <FormAction :init-url="initUrl" :init-form="initForm"
    :form="form" redirect="Companytext">
    <div class="grid grid-cols-2 gap-6">
      <div class="col-span-2">
        <BaseInput type="text" v-model="form.name" name="name" :label="$trans('customize.companytext.props.name')"
          v-model:error="formErrors.name" autofocus />
      </div>
    </div>
  </FormAction>
</template>

<script>
export default {
  name: "CompanytextForm",
};
</script>

<script setup>
import { reactive } from "vue";
import { getFormErrors } from "@core/helpers/action";


const initUrl = "customize/companytext/";
const formErrors = getFormErrors(initUrl);

const initForm = {
  name: "",

};

const form = reactive({ ...initForm });

</script>
