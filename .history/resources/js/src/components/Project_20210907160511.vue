<template>
  <div>
      <router-link :to="{ name:'portfolio-page' , params: {id: projectData.id}}"></router-link>
    <div class="position-relative rounded hover-wrapper">
      <img
        :src="project.images"
        alt="portfolio-image"
        class="img-fluid rounded w-100 d-block"
      />
      <p>{{ project.description }}</p>
      <div class="hover-overlay">
        <div class="hover-content"></div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
    props: ["projectData"],

}
</script>