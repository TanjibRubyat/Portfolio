<template>
  <header class="navigation fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand font-tertiary h3" href="#"
        ><img src="images/logo.png" alt="Myself"
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
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <router-link :to="{name: 'home-page'}">Home</router-link>
          </li>
          <li class="nav-item">
            <router-link to="name: 'portfolio-page'">Portfolio</router-link>
          </li>
          <li class="nav-item">
            <router-link to="name: 'about-page'">About</router-link>
          </li>
          <li class="nav-item">
            <router-link to="name: 'contact-page'">Contact</router-link>
          </li>
        </ul>
      </div>
    </nav>
  </header>
</template>