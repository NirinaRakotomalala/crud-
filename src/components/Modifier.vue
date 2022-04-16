<template>
  <div class="container">
    <div class="card">
      <div class="card-header">Formulaire</div>
      <div class="card-body">
        <form v-on:submit.prevent="updateList">
          <div class="form-group">
            <label>Nom</label>
            <input type="text" class="form-control" v-model="vuejs.nom" />
          </div>
          <div class="form-group">
            <label>Prenom</label
            ><input type="text" class="form-control" v-model="vuejs.prenom" />
          </div>
          <div class="form-group">
            <label>Adresse</label
            ><input type="text" class="form-control" v-model="vuejs.adresse" />
          </div>
          <div>
            <label>Email</label
            ><input type="text" class="form-control" v-model="vuejs.email" />
          </div>
          <div class="form-group">
            <label>Password</label
            ><input
              type="password"
              class="form-control"
              v-model="vuejs.password"
            />
          </div>
          <div class="btn-group">
            <button type="submit" class="btn btn-success">Modifier</button>
            <router-link to="/creer" class="btn btn-danger"
              >Annuler</router-link
            >
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      vuejs: {},
    };
  },
  created: function () {
    this.getListId();
  },
  methods: {
    getListId() {
      fetch("http://localhost:8000/vuejs/?data=" + this.$route.params.id)
        .then((res) => res.json())
        .then((data) => {
          console.log(data);
          this.vuejs = data[0];
        })
        .catch(console.log());
    },
    updateList() {
      console.log(this.vuejs);

      var dataInsert = {
        id: this.$route.params.id,
        nom: this.vuejs.nom,
        prenom: this.vuejs.prenom,
        adresse: this.vuejs.adresse,
        email: this.vuejs.email,
        password: this.vuejs.password,
      };
      fetch("http://localhost:8000/vuejs/?update=" + this.$route.params.id, {
        method: "POST",
        body: JSON.stringify(dataInsert),
      })
        .then((res) => res.json())
        .then((data) => {
          console.log(data);
          window.location.href = "#/creer";
        });
      // https://router.vuejs.org/api/#exact-active-class
    },
  },
};
</script>
