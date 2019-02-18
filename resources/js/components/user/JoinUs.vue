<template>
    <div class="container">
        <form autocomplete="off" @submit.prevent="register" method="post">
            <div class="form-group">
                <label for="name">ID</label>
                <input type="text" id="id" name="id" class="form-control" v-model="joinUsDetails.id" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="user@example.com" v-model="joinUsDetails.email" required>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="name" id="name" name="name" class="form-control" placeholder="name" v-model="joinUsDetails.name" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="name" class="form-control" v-model="joinUsDetails.password" required>
            </div>
            <div class="form-group" data-toggle="buttons">
                <select class="form-control" id="sex" name="sex" v-model="joinUsDetails.sex">
                    <option value="man">man</option>
                    <option value="woman">woman</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text" name="university" v-model="universityNames" v-on:keyup="inputUniversity();" id="searchUniversity" value="">

                <select class="form-control" id="university" name="university" v-model="joinUsDetails.university">
                    <option value="universityName.university_name" v-for="universityName in universityNames"> {{ universityName.university_name }} </option>
                </select>
            </div>
            <button type="submit" class="btn btn-outline-secondary btn-sm">Submit</button>
        </form>
    </div>
</template>

<script>
export default {

  data () {
    return {
      joinUsDetails: {
        id:'',
        email: '',
        name: '',
        password:'',
        sex:'',
        university:'',
        address:'',
        success: false
      },
      show: true,
      universityNames: null,
    }
  },
  mounted() {
      axios.get('/getUniversityNames').then(response => (
          this.universityNames = response.data,
          // console.log(response)
          console.log(this.universityNames)
          //대학 이름 전부 배열화
      ))
  },
  methods: {
    register(){
            var app = this
            this.$auth.register({
                data: {
                    id: app.id,
                    name: app.name,
                    email: app.email,
                    password: app.password,
                    sex: app.sex,
                    university: app.university,
                    address: app.address,
                },
                success: function () {
                    app.success = true;
                    console.log('ok')
                },
                error: function (resp) {
                    console.log(resp.response.data)
                }
            });
            let thisVue = this;
            this.axios.post('/register',thisVue.joinUsDetails).then(response => {
            console.log(response.data);
        });
    },
    onChange(){

    },

  }
}
</script>

<style lang="css">
</style>
