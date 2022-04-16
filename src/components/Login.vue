<template>
  <div class="lougin">
    <div class="wrapper">
      <section class="form signup">
        <header>Realtime chat app</header>
        <form
          action="#"
          v-on:submit.prevent="login"
          enctype="multipart/form-data"
          autocomplete="off"
        >
          <div class="error-txt"></div>
          <div class="name-details">
            <div class="field input">
              <label>First Name</label>
              <input
                type="text"
                name="fname"
                placeholder="First Name"
                required=""
                v-model="loginData.fname"
              />
            </div>
            <div class="field input">
              <label>Last Name</label>
              <input
                type="text"
                name="lname"
                placeholder="last Name"
                required=""
                v-model="loginData.lname"
              />
            </div>
          </div>
          <div class="field input">
            <label>E-mail</label>
            <input
              type="text"
              name="email"
              placeholder="Enter E-mail"
              required=""
              v-model="loginData.email"
            />
          </div>
          <div class="field input">
            <label>Password</label>
            <input
              type="password"
              name="password"
              placeholder="Enter Password"
              required=""
              v-model="loginData.password"
            />
            <i class="fas fa-eye"></i>
          </div>
          <div class="field image">
            <label>Select Image</label>
            <input
              type="file"
              name="image"
              required=""
              v-on:change="previewFiles"
            />
          </div>
          <div class="field button">
            <input type="submit" value="Continue to chat" />
          </div>
        </form>
        <div class="link">
          Already signed up? <router-link to="logout">Logout</router-link>
        </div>
      </section>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      loginData: {},
      selectedFiles: {},
    };
  },
  methods: {
    login() {
      console.log(this.loginData);
    },
    previewFiles(event) {
      // console.log(event.target.files[0]);
      this.selectedFiles = event.target.files[0];
    },
  },
};
</script>

<style scoped lang="scss">
// .login {
//   text-align: center;
//   font-size: 1rem;
//   padding-top: 15px 0;
//   color: aliceblue;
// }
.container-List {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
}
// .formulaire {
//   padding: 1rem;
//   background: #333;
//   border-radius: 5px;
//   .card .prenom {
//     border: none;
//     margin-bottom: 0.25rem;
//   }
// }
// .card {
//   background: none;
// }
// label {
//   color: white;
//   margin-bottom: 0.25rem;
// }

// .button {
//   margin-top: 0.25rem;
// }
</style>