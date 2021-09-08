<template>
  <div>
    <!-- hero area -->
    <section class="hero-area bg-primary" id="parallax">
      <div class="container">
        <div class="row">
          <div v-for="(names,index) in name" :key="index" class="col-lg-11 mx-auto">
            <h1 class="text-white font-tertiary">
              Hi! I’m <br />
              {{names.name}} <br />
              {{names.speciality}}
            </h1>
          </div>
        </div>
      </div>
      <div class="layer-bg w-100">
        <img
          class="img-fluid w-100"
          src="images/illustrations/leaf-bg.png"
          alt="bg-shape"
        />
      </div>
      <div class="layer" id="l2">
        <img src="/frontend/assets/images/illustrations/dots-cyan.png" alt="bg-shape" />
      </div>
      <div class="layer" id="l3">
        <img src="/frontend/assets/images/illustrations/leaf-orange.png" alt="bg-shape" />
      </div>
      <div class="layer" id="l4">
        <img src="/frontend/assets/images/illustrations/dots-orange.png" alt="bg-shape" />
      </div>
      <div class="layer" id="l5">
        <img src="/frontend/assets/images/illustrations/leaf-yellow.png" alt="bg-shape" />
      </div>
      <div class="layer" id="l6">
        <img src="/frontend/assets/images/illustrations/leaf-cyan.png" alt="bg-shape" />
      </div>
      <div class="layer" id="l7">
        <img src="/frontend/assets/images/illustrations/dots-group-orange.png" alt="bg-shape" />
      </div>
      <div class="layer" id="l8">
        <img src="/frontend/assets/images/illustrations/leaf-pink-round.png" alt="bg-shape" />
      </div>
      <div class="layer" id="l9">
        <img src="/frontend/assets/images/illustrations/leaf-cyan-2.png" alt="bg-shape" />
      </div>
      <!-- social icon -->
      <ul class="list-unstyled ml-5 mt-3 position-relative zindex-1">
        <li class="mb-3">
          <a class="text-white" href="#"><i class="ti-facebook"></i></a>
        </li>
        <li class="mb-3">
          <a class="text-white" href="#"><i class="ti-instagram"></i></a>
        </li>
        <li class="mb-3">
          <a class="text-white" href="#"><i class="ti-dribbble"></i></a>
        </li>
        <li class="mb-3">
          <a class="text-white" href="#"><i class="ti-twitter"></i></a>
        </li>
      </ul>
      <!-- /social icon -->
    </section>
    <!-- /hero area -->

    <!-- about -->
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto text-center">
            <p v-for="(names,index) in name" :key="index" class="font-secondary paragraph-lg text-dark">
              {{names.intro}}
            </p>
            <a href="about.html" class="btn btn-transparent">know more</a>
          </div>
        </div>
      </div>
    </section>
    <!-- /about -->

    <!-- skills -->
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-title">Skills</h2>
          </div>
          <div v-for="(skill,index) in skills" :key="index" class="col-md-4">
            <div class="card shadow text-center">
              <div
                
                class="position-relative rounded-top progress-wrapper"
                data-color="#fdb157"
              >
                <div class="wave" data-progress="90%"></div>
              </div>
              <div class="card-footer bg-white">
                <h4 class="card-title">{{skill.skills}} {{skill.progress}}%</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /skills -->

    <!-- experience -->
    <section class="section">
      <div class="container">
        <div class="row justify-content-around">
          <div class="col-lg-12 text-center">
            <h2 class="section-title">Experience</h2>
          </div>
          <div v-for="(experience,index) in experiences" :key="index" class="col-lg-3 col-md-4 text-center">
            <img src="/frontend/assets/images/experience/icon-1.png" alt="icon" />
            <p class="mb-0">Jan 2007 - Feb 2009</p>
            <h4>{{experience.experiences}}</h4>
            <h6 class="text-light">WEBEX</h6>
          </div>
        </div>
      </div>
    </section>
    <!-- ./experience -->

    <!-- education -->
    <section class="section position-relative">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-title">Education</h2>
          </div>
          <div v-for="(education,index) in educations" :key="index" class="col-lg-6 col-md-6 mb-80">
            <div class="d-flex">
              <div class="mr-lg-5 mr-3">
                <i
                  class="
                    ti-medall
                    icon icon-light icon-bg
                    bg-white
                    shadow
                    rounded-circle
                    d-block
                  "
                ></i>
              </div>
              <div>
                <p class="text-dark mb-1">{{education.passing_year}}</p>
                <h4>{{education.certificate}}</h4>
                <p class="mb-0 text-light">
                  {{education.institute}}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- bg image -->
      <img
        class="img-fluid edu-bg-image w-100"
        src="/frontend/assets/images/backgrounds/education-bg.png"
        alt="bg-image"
      />
    </section>
    <!-- /education -->

    <!-- services -->
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2 class="section-title">Services</h2>
          </div>
          <div v-for="(service,index) in services" :key="index" class="col-md-4 mb-4 mb-md-0">
            <div class="card hover-shadow shadow">
              <div class="card-body text-center px-4 py-5">
                <i class="ti-palette icon mb-5 d-inline-block"></i>
                <h4 class="mb-4">{{service.services}}</h4>
                <p>
                  {{service.description}}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /services -->
  </div>
</template>

<script>
import Axios from "axios";
export default {
  data() {
    return {
      name: {},
      skills: {},
      experiences: {},
      educations: {},
      services: {},
    };
  },

  async beforeMount() {
    let res = await Axios.get("http://localhost:8000/api/name");
    return this.name = res.data.data;
  },

  async beforeCreate() {
    let skill = await Axios.get("http://localhost:8000/api/skill");
    return this.skills = skill.data.data;
  },

  async created() {
    let experience = await Axios.get("http://localhost:8000/api/experience");
    return this.experiences = experience.data.data;
  },

  async mounted() {
    let education = await Axios.get("http://localhost:8000/api/education");
    return this.educations = education.data.data;
  },

  async beforeUpdate() {
    let service = await Axios.get("http://localhost:8000/api/service");
    return this.services = service.data.data;
  },
};
</script>