<template>
<div class="">
    <b-navbar toggleable="md" type="dark" variant="info">
        <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>
        <b-navbar-brand to="/">SBS</b-navbar-brand>
        <b-collapse is-nav id="nav_collapse">
            <b-navbar-nav>
                <b-nav-item-dropdown id="university" text="대학게시판">
                    <div style="height:800px;overflow: scroll;">
                        <b-dropdown-item
                        v-bind:to="'/university/'+universityName.university_id"
                        :key="universityName.university_name"
                        :value="universityName.university_name"
                        v-for="universityName in universityNames">
                            <p v-if="universityName.university_name == user_university" style="background-color:yellow">
                                {{ universityName.university_name }}
                            </p>
                            <p v-else>
                                {{ universityName.university_name }}
                            </p>
                        </b-dropdown-item>
                    </div>
                </b-nav-item-dropdown>
                <b-nav-item-dropdown text="자유게시판">
                    <b-dropdown-item href="/freeboard">자유게시판</b-dropdown-item>
                    <b-dropdown-item href="/recipe">나만의 레시피</b-dropdown-item>
                </b-nav-item-dropdown>
            </b-navbar-nav>
            <!-- Right aligned nav items -->
            <b-navbar-nav class="ml-auto">
                <b-nav-form>
                    <b-form-input size="sm" class="mr-sm-2" type="text" placeholder="Search"/>
                    <b-button size="sm" class="my-2 my-sm-0" type="submit">Search</b-button>
                </b-nav-form>

                <b-nav-item-dropdown right>
                    <!-- Using button-content slot -->
                    <template slot="button-content">
                        <em>User</em>
                    </template>
                    <b-dropdown-item v-if="this.$userId" href="/logout">LogOut</b-dropdown-item>
                    <b-dropdown-item v-if="this.$userId" to="/joinus">SignUp</b-dropdown-item>
                    <b-dropdown-item v-if="!this.$userId" to="/login">LogIn</b-dropdown-item>
                    <b-dropdown-item v-if="!this.$userId" to="/mypage">mypage</b-dropdown-item>
                </b-nav-item-dropdown>
            </b-navbar-nav>
        </b-collapse>
    </b-navbar>
</div>
</template>

<script>
export default {
    data() {
        return {
          universityNames: null,
          user_university: null,
        }
    },
    mounted(){
        var temp = JSON.parse(this.$userId)
        console.log('dddd'+this.$userCheck)
        this.user_university = temp.university
        axios.get('/getUniversityNames').then(response => (
            this.universityNames = response.data,
            // console.log(response)
            console.log(this.universityNames)
            //대학 이름 전부 배열화
        ))
        console.log('nav completed');
    }
}
</script>

<style lang="css">

</style>
