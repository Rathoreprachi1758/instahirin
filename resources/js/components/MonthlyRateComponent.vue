<template>
  <div class="rate_editable">
    <template v-if="!editing">
      <small @click="startEditing"
        >$ {{ modelValue }} / Month<i class="fa fa-pencil" aria-hidden="true"></i
      ></small>
    </template>
    <template v-else>
      <input v-model="editedValue" @blur="stopEditing" @keyup.enter="stopEditing" />
    </template>
  </div>
</template>

<style scoped>
/* Style for the input field when in edit mode */
.rate_editable input {
  display: inline-block;
  width: auto;
  border: 1px solid #ccc;
  padding: 4px 8px;
  font-size: 14px;
  background-color: transparent;
  color: #333;
}

/* Style for the pencil icon */
.rate_editable i.fa-pencil {
  cursor: pointer;
  margin-left: 8px;
}

/* Style for the text and pencil icon when not in edit mode */
.rate_editable small {
  cursor: pointer;
  display: inline-block;
  margin-right: 8px; /* Add some spacing to the right of the text */
}
</style>

<script>
export default {
  props: {
    modelValue: String,
  },
  data() {
    return {
      editing: false,
      editedValue: this.modelValue,
    };
  },
  methods: {
    startEditing() {
      this.editing = true;
    },
    stopEditing() {
      this.editing = false;
      this.$emit("update:modelValue", this.editedValue);
    },
  },
};
</script>
