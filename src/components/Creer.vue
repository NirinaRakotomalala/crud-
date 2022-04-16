<template>
  <div class="creer">
    <div class="container">
      <div class="card">
        <div class="card-header">List donner</div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Adress</th>
                <th>Email</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="datas in vuejs" :key="datas.id">
                <td>{{ datas.nom }}</td>
                <td>{{ datas.prenom }}</td>
                <td>{{ datas.adresse }}</td>
                <td>{{ datas.email }}</td>
                <td>
                  <router-link
                    :to="{ name: 'Modifier', params: { id: datas.id } }"
                    class="btn btn-success"
                    >Editer</router-link
                  >
                  <button
                    type="button"
                    class="btn btn-danger"
                    v-on:click="deleteList(datas.id)"
                  >
                    Suppriner
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      vuejs: [],
    };
  },
  created: function () {
    this.listData();
  },
  methods: {
    listData() {
      fetch("http://localhost:8000/vuejs/")
        .then((res) => res.json())
        .then((data) => {
          console.log(data);
          this.vuejs = [];
          if (typeof data[0].success === "undefined") {
            this.vuejs = data;
          }
        })
        .catch(console.log());
    },
    deleteList(id) {
      console.log(id);
      if (confirm("vous etes sur de supprimer cette article")) {
        fetch("http://localhost:8000/vuejs/?delete=" + id)
          .then((res) => res.json())
          .then((data) => {
            console.log(data);
            window.location.href = "#/creer";
          })
          .catch(console.log());
      }
    },
    editList(id) {
      console.log(id);
    },
  },
};
</script>
