<template>
    <div>
    <app-header></app-header>        
           <router-view></router-view>
     <app-footer></app-footer>
  </div>
</template>
<script>
import AppHeader from "./components/Header";
import AppFooter from "./components/Footer";
export default {
    components: {
    AppHeader,
    AppFooter,
    },
    data() {
    return {
      slide: 0,
      sliding: null,
    };
  },
  methods: {
    onSlideStart(slide) {
      this.sliding = true;
    },
    onSlideEnd(slide) {
      this.sliding = false;
    },
  },
}

</script>