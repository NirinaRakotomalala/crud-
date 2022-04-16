<template>
  <div class="edit">
    <div class="container">
      <div class="card">
        <div class="card-header">Formulaire</div>
        <div class="card-body">
          <form v-on:submit.prevent="insertData">
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
              ><input
                type="text"
                class="form-control"
                v-model="vuejs.adresse"
              />
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
              <button type="submit" class="btn btn-success">Envoyer</button>
              <router-link to="/creer" class="btn btn-danger"
                >Annuler</router-link
              >
            </div>
          </form>
        </div>
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
  methods: {
    insertData() {
      console.log(this.vuejs);

      var dataInsert = {
        nom: this.vuejs.nom,
        prenom: this.vuejs.prenom,
        adresse: this.vuejs.adresse,
        email: this.vuejs.email,
        password: this.vuejs.password,
      };
      fetch("http://localhost:8000/vuejs/?insert=1", {
        method: "POST",
        body: JSON.stringify(dataInsert),
      })
        .then((res) => res.json())
        .then((data) => {
          console.log(data);
          window.location.href = "#/creer";
        });
    },
  },
};
</script>

<style scoped>
.edit {
  padding-top: 65px;
}
.card-header {
  text-align: center;
  font-size: 25px;
  text-transform: uppercase;
}
label {
  font-size: 16px;
  padding: 5px 0;
  margin: 5px 0;
  font-weight: 900;
  font-style: italic;
}
</style>
