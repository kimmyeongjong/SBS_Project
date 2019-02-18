<template>
    <div class="container">
        <br>
        <form role="form" method="post">
            <table class="table center-block" id="login_form">
                <tr>
                    <th colspan="3"><router-link to="/" class=""><img src="/images/logo/logo3.png" alt="used auction logo" style=""></router-link></th>
                </tr>
                <tr>
                    <td colspan="3"> <input class="form-control form-control" type="text" name="id" placeholder="ID" v-model="loginDetails.id" required auto> </td>
                </tr>
                <tr>
                    <td colspan="3"> <input class="form-control form-control" type="password" name="password" placeholder="PASSWORD" v-model="loginDetails.password" required auto> </td>
                </tr>
                <tr>
                    <td colspan="3"> <button type="submit" @click.prevent="loginPost" class="form-control form-control btn btn-outline-info" name="button">LOGIN</button> </td>
                </tr>
                <tr>
                    <td><router-link to="" class="user_link">ID찾기</router-link></td>
                    <td><router-link to=""class="user_link">비밀번호찾기</router-link></td>
                    <td><router-link to=""class="user_link">회원가입</router-link></td>
                </tr>
            </table>
        </form>
    </div>
</template>

<script>
export default {
    data(){
          return {
              loginDetails:{
                  id:'',
                  password:'',
                  remember:true
              },
              checkLogin : false,
          }
      },
      mounted(){

      },
      methods: {
          loginPost(){
              let thisVue = this;
              axios.post('/login', thisVue.loginDetails).then(function (response) {
                  // console.log(thisVue.checkLogin);
                  // console.log(response.data);
                  if (response.data == 1) {
                      // console.log(thisVue.checkLogin);
                      thisVue.checkLogin = true;
                      alert('로그인 완료');
                      window.location = '/';
                  }
                  // console.log(thisVue.checkLogin);
              });
          },
          logoutGet(){
              axios.get('/logout').then(function (response) {
                  console.log(response.data);
              });
          },
      }
}
</script>

<style lang="css">
    .container{
        /* text-align: center; */
    }
    #login_form{
        position: absolute;
        right: 37.5%;
        width: 25%;
    }
    .user_link{
        color:black;
    }
    .user_link:hover{
        color: brown;
    }
    th[colspan="3"] {
        text-align: center;
    }
</style>
