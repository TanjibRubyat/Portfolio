<template>
    <div>
    <app-header></app-header>
        <transition name="router-anim" enter-active-class="animated fadeInDown" leave-active-class="animated fadeOutDown">
           <router-view></router-view>
        </transition>
    <!-- <app-footer></app-footer> -->
  </div>
</template>
<script>
import AppHeader from "./components/Header";
export default {
    components: {
    AppHeader,
}
</script>