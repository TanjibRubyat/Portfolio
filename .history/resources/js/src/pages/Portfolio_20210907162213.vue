<template>
  <div>
    <!-- page title -->
    <section class="page-title bg-primary position-relative">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h1 class="text-white font-tertiary">Portfolio</h1>
          </div>
        </div>
      </div>
      <!-- background shapes -->
      <img
        src="/frontend/assets/images/illustrations/page-title.png"
        alt="illustrations"
        class="bg-shape-1 w-100"
      />
      <img
        src="/frontend/assets/images/illustrations/leaf-pink-round.png"
        alt="illustrations"
        class="bg-shape-2"
      />
      <img
        src="/frontend/assets/images/illustrations/dots-cyan.png"
        alt="illustrations"
        class="bg-shape-3"
      />
      <img
        src="/frontend/assets/images/illustrations/leaf-orange.png"
        alt="illustrations"
        class="bg-shape-4"
      />
      <img
        src="/frontend/assets/images/illustrations/leaf-yellow.png"
        alt="illustrations"
        class="bg-shape-5"
      />
      <img
        src="/frontend/assets/images/illustrations/dots-group-cyan.png"
        alt="illustrations"
        class="bg-shape-6"
      />
      <img
        src="/frontend/assets/images/illustrations/leaf-cyan-lg.png"
        alt="illustrations"
        class="bg-shape-7"
      />
    </section>
    <!-- /page title -->

    <!-- portfolio -->
    <section class="section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <div
              class="btn-group btn-group-toggle justify-content-center d-flex"
              data-toggle="buttons"
            >
              <label v-for="(skill,index) in skills" :key="index" class="btn btn-sm btn-primary active">
                <input
                  type="radio"
                  name="shuffle-filter"
                  value="all"
                  checked="checked"
                />{{skill.skill}}
              </label>              
            </div>
          </div>
        </div>
        <div class="row shuffle-wrapper">
          <div v-for="(value,index) in projects" :key="index"
            class="col-lg-4 col-6 mb-4 shuffle-item"
            data-groups='["design","illustration"]'
          >            
            <product :project-data="value"></product>
          </div>
        </div>
      </div>
    </section>
    <!-- /portfolio -->
  </div>
</template>

<script>
import Axios from 'axios';
import Project from './../components/Project.vue';
export default {
  components: {Project},
  data(){
    return{
      skills:{},
      projects:{}
    }
  },

  async beforeMount(){
    let res = await Axios.get("http://localhost:8000/api/portfolio-skill")
    return this.skills = res.data.data
  },

    async beforeUpdate(){
        const project = await Axios.get("http://127.0.0.1:8000/api/projects-by-portfolio-id")
        if(project.data.success){
          this.projects = project.data.data;
        }else{
          this.errorMessage = project.data.message;
        }
    }
}
</script>