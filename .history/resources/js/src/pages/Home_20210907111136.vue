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
          <div class="col-md-4">
            <div class="card shadow text-center">
              <div
                 v-for="(skill,index) in skills" :key="index"
                class="position-relative rounded-top progress-wrapper"
                data-color="#fdb157"
              >
                <div class="wave" data-progress="90%"></div>
              </div>
              <div class="card-footer bg-white">
                <h4 class="card-title">{{skill.skills}} {{skill.progress}}</h4>
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
          <div class="col-lg-3 col-md-4 text-center">
            <img src="/frontend/assets/images/experience/icon-1.png" alt="icon" />
            <p class="mb-0">Jan 2007 - Feb 2009</p>
            <h4>Junior UX Designer</h4>
            <h6 class="text-light">WEBEX</h6>
          </div>
          <div class="col-lg-3 col-md-4 text-center">
            <img src="/frontend/assets/images/experience/icon-2.png" alt="icon" />
            <p class="mb-0">Mar 2009 - Aug 2014</p>
            <h4>UX & UI Designer</h4>
            <h6 class="text-light">AUGMEDIX</h6>
          </div>
          <div class="col-lg-3 col-md-4 text-center">
            <img src="/frontend/assets/images/experience/icon-3.png" alt="icon" />
            <p class="mb-0">Sep 2014 - Present</p>
            <h4>Senior UI Designer</h4>
            <h6 class="text-light">THEMEFISHER</h6>
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
          <div class="col-lg-6 col-md-6 mb-80">
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
                <p class="text-dark mb-1">2006</p>
                <h4>Marters in UX Design</h4>
                <p class="mb-0 text-light">
                  Masassusets Institute of Technology
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 mb-80">
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
                <p class="text-dark mb-1">2004</p>
                <h4>Honours in Fine Arts</h4>
                <p class="mb-0 text-light">Harvard University</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 mb-80">
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
                <p class="text-dark mb-1">2000</p>
                <h4>Higher Secondary Certificat</h4>
                <p class="mb-0 text-light">Cardiff School</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 mb-80">
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
                <p class="text-dark mb-1">1998</p>
                <h4>Secondary School Certificate</h4>
                <p class="mb-0 text-light">Cardiff School</p>
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
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="card hover-shadow shadow">
              <div class="card-body text-center px-4 py-5">
                <i class="ti-palette icon mb-5 d-inline-block"></i>
                <h4 class="mb-4">UI Design</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="card active-bg-primary hover-shadow shadow">
              <div class="card-body text-center px-4 py-5">
                <i class="ti-vector icon mb-5 d-inline-block"></i>
                <h4 class="mb-4">UX Design</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="card hover-shadow shadow">
              <div class="card-body text-center px-4 py-5">
                <i class="ti-panel icon mb-5 d-inline-block"></i>
                <h4 class="mb-4">Interaction Design</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /services -->

    <!-- portfolio -->
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2 class="section-title">Portfolio</h2>
          </div>
        </div>
        <div class="row shuffle-wrapper">
          <div class="col-lg-4 col-6 mb-4 shuffle-item">
            <div class="position-relative rounded hover-wrapper">
              <img
                src="/frontend/assets/images/portfolio/item-1.png"
                alt="portfolio-image"
                class="img-fluid rounded w-100"
              />
              <div class="hover-overlay">
                <div class="hover-content">
                  <a class="btn btn-light btn-sm" href="project-single.html"
                    >view project</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6 mb-4 shuffle-item">
            <div class="position-relative rounded hover-wrapper">
              <img
                src="/frontend/assets/images/portfolio/item-2.png"
                alt="portfolio-image"
                class="img-fluid rounded w-100"
              />
              <div class="hover-overlay">
                <div class="hover-content">
                  <a class="btn btn-light btn-sm" href="project-single.html"
                    >view project</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6 mb-4 shuffle-item">
            <div class="position-relative rounded hover-wrapper">
              <img
                src="/frontend/assets/images/portfolio/item-3.png"
                alt="portfolio-image"
                class="img-fluid rounded w-100"
              />
              <div class="hover-overlay">
                <div class="hover-content">
                  <a class="btn btn-light btn-sm" href="project-single.html"
                    >view project</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6 mb-4 shuffle-item">
            <div class="position-relative rounded hover-wrapper">
              <img
                src="/frontend/assets/images/portfolio/item-4.png"
                alt="portfolio-image"
                class="img-fluid rounded w-100"
              />
              <div class="hover-overlay">
                <div class="hover-content">
                  <a class="btn btn-light btn-sm" href="project-single.html"
                    >view project</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6 mb-4 shuffle-item">
            <div class="position-relative rounded hover-wrapper">
              <img
                src="/frontend/assets/images/portfolio/item-5.png"
                alt="portfolio-image"
                class="img-fluid rounded w-100"
              />
              <div class="hover-overlay">
                <div class="hover-content">
                  <a class="btn btn-light btn-sm" href="project-single.html"
                    >view project</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /portfolio -->
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

  async skill() {
    let skill = await Axios.get("http://localhost:8000/api/skill");
    return this.skills = skill.data.data;
  },
};
</script>