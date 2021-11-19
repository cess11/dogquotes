<template>
    <div class="quote">
        <quote>"{{ currentDoge.quote }}"</quote>
    </div>
    <div class="doge">
        <img :src="currentDoge.doge" />
    </div>
</template>

<script lang="ts">
import { defineComponent } from 'vue'
import Doge from 'src/types/Doge'
import DogeData from 'src/services/DogeData'
import DogeResponse from 'src/types/DogeResponse'


export default defineComponent({
    name: 'DogeQuote',
    data() {
        return {
            currentDoge: {} as Doge
        }
    },
    methods: {
        fillDoge() {
            DogeData.getDoge()
                .then((response: DogeResponse) => { this.currentDoge = response.data })
                .catch((err: Error) => { console.log(err) })
            
        }
    },
    mounted() {
        this.fillDoge()
    },
})
</script>

<style scoped>
quote {
    font-weight: bold;
    font-size: 16pt;
}
.quote {
    width: 400px;
    height: 100px;
}
</style>