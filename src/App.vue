<template>
  <div id="app">
    <div id="nav">
      <div class="nav-container">
        <div id="logo">
          <router-link to="/"
            ><img alt="Vue logo" src="./assets/img/wish-logo-800.png"
          /></router-link>
        </div>
        <router-link to="/creer"><i class="fas fa-user"></i></router-link>
        <router-link to="/editer">Creer</router-link>
        <router-link to="/supprimer">test</router-link>
        <router-link :to="{ name: 'Login' }">Login</router-link>
      </div>
    </div>
  </div>
  <router-view></router-view>
</template>

<script></script>
<style lang="scss">
#app {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  list-style: none;
  font-family: "Ubuntu", sans-serif;
}

#nav {
  padding: 0.8rem 2.4rem;
  background: rgba($color: white, $alpha: 0.97);
  position: fixed;
  width: 100%;
  top: 0;
  z-index: 2;
  box-shadow: 0 2px 4px -3px rgba(50, 51, 51, 0.2);

  .nav-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1050px;
    margin: 0 auto;

    #logo {
      height: 32px;
      width: 66%;
      img {
        height: 100%;
        margin-left: -106px;
      }
    }
    a {
      font-weight: bold;
      color: #0b7beb;
      border: none;

      &.router-link-exact-active {
        color: #42b983;
      }
    }
  }
}
</style>
