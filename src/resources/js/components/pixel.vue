<template>
        <input class="input-text" type="text" :value="value" @input="update($event.target.value)" />
</template>

<script>
export default {
    mixins: [Fieldtype],

    methods: {}
};
</script>