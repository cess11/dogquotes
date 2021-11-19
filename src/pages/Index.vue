<template>
  <q-page class="row items-center justify-evenly">
    <doge-quote />
  </q-page>
</template>

<script lang="ts">
import DogeQuote from 'components/DogeQuote.vue';
import { defineComponent } from 'vue';

export default defineComponent({
  name: 'PageIndex',
  components: { DogeQuote },
});
</script>
