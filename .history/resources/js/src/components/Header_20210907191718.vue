<template>
  <div>
    <header class="navigation fixed-top">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand font-tertiary h3" href="#"
          ><img src="/frontend/assets/images/logo.png" alt="Myself"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navigation"
          aria-controls="navigation"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-center" id="navigation">
          <ul class="navbar-nav ml-auto ">
            <li class=" nav-item active">
              <router-link class="nav-text" :to="{ name: 'home-page' }">Home</router-link>
            </li>
            <li class=" nav-item">
              <router-link class="nav-text" :to="{ name: 'portfolio-page' }"
                >Portfolio</router-link
              >
            </li>
            <li class=" nav-item">
              <router-link class="nav-text" :to="{ name: 'about-page' }">About</router-link>
            </li>
            <li class=" nav-item">
              <router-link class="nav-text" :to="{ name: 'contact-page' }">Contact</router-link>
            </li>
          </ul>
        </div>
      </nav>
    </header>
  </div>
</template>
<style>
  .nav-text{
    color:rgb(255, 255, 255);
    padding: 10px;
    text-decoration: none;
    outline: none;
  }

  .nav-text:hover{
    color: #DBFF33;
  }
</style>