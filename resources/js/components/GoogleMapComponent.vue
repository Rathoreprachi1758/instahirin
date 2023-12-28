<template>
  <div class="project_form_field">
    <GoogleAddressAutocomplete
      apiKey="AIzaSyCWCwDO2UDvwai9BBUyvxGS6t436Eot7Wc"
      :value="modelValue"
      :class="cssClass"
      :placeholder="placeholder"
      @input="updateValue"
    />
  </div>
</template>

<script>
import GoogleAddressAutocomplete from "vue3-google-address-autocomplete";

export default {
  components: {
    GoogleAddressAutocomplete,
  },
  props: {
    modelValue: String,
    cssClass: String,
    placeholder: String,
  },
  data() {
    return {};
  },
  methods: {
    updateValue(newValue) {
      this.$emit("input", newValue);
      //this.$emit("update:modelValue", newValue);
    },
  },
};
</script>
