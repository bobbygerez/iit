<template>
  <v-card>
    <v-snackbar
      :timeout="0"
      :color="color"
      v-model="snackbar"
    >
      {{ text }}
      <v-btn dark flat @click.native="snackbarClose">Close</v-btn>
    </v-snackbar>
  </v-card>
</template>
<script>
  export default {
    props: ['text', 'color'],
    data () {
      return {
        mode: '',
      }
    },
    computed: {
       snackbar: {
          get(){
            return this.$store.getters.snackbar
          },
          set(){

          }
       }
    },
    methods: {
      snackbarClose(){
        this.$store.dispatch('snackbar', false);
      }
    }
  }
</script>