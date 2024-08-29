<script setup>
import { computed } from 'vue';
import { ref, toRefs } from 'vue';

const props = defineProps({
    colorMode: {
        type: String,
        required: true,
    },
    label: {
        type: String,
        required: true,
    }
});

const emit = defineEmits(['click', 'submit']);

const colors = {
    primary: 'bg-[#684e52]',
    secondary: 'bg-[#d6c9b6]',
    default: 'bg-[#999999]'

}

const bgClass = computed(() => {
    return colors[props.colorMode] || colors.primary; 
});

const handleClick = () => {
    emit('click');
};

</script>



<template>
    <button :class="bgClass"
        class="inline-flex items-center mt-8 px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white  uppercase tracking-widest hover:shadow-xl transition ease-in-out duration-150 hover:bg-[#443c3d]"
        @click="handleClick">
        {{ props.label }}
    </button>
</template>

