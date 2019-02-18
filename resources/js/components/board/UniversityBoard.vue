<template>
    <div class="container">
        <br>
        <marquee>환영합니다 ~</marquee>
        <br>
        <b-btn v-b-toggle.collapse1 variant="outline-success">자취 물품 찾기</b-btn>
        <b-collapse id="collapse1" class="mt-2">
            <div>
                <form class="" @submit.prevent="getProducts" method="post">
                <b-navbar toggleable="md" type="dark" variant="primary">
                    <b-navbar-toggle target="nav_collapse">
                    </b-navbar-toggle>
                    <b-collapse is-nav id="nav_collapse">
                        <b-navbar-nav>
                            <b-nav-item>
                                <select class="form-control" id="university" name="university">
                                    <option value="category.category_num" v-for="category in categories[0]"> {{ category.category_name }} </option>
                                </select>
                            </b-nav-item>
                            <b-nav-item>
                                <select class="form-control" id="university" name="university">
                                    <option value="category.category_num" v-for="category in categories[1]"> {{ category.category_name }} </option>
                                </select>
                            </b-nav-item>
                            <b-nav-item>
                                <select class="form-control" id="university" name="university">
                                    <option value="category.category_num" v-for="category in categories[2]"> {{ category.category_name }} </option>
                                </select>
                            </b-nav-item>
                        </b-navbar-nav>
                        <b-navbar-nav class="ml-auto">
                            <b-nav-item right>
                                <b-btn right type="submit" name="button">검색</b-btn>
                            </b-nav-item>
                            <b-nav-item right>
                                <b-btn right to="/allsbs" type="button" name="button">전체보기</b-btn>
                            </b-nav-item>
                            <b-nav-item right>
                                <b-btn right to="/writesbs" type="button" name="button">글쓰기</b-btn>
                            </b-nav-item>
                        </b-navbar-nav>
                    </b-collapse>
                </b-navbar>
            </form>
                <template>
                    <b-table striped hover :items="products"></b-table>
                </template>
            </div>
        </b-collapse>


        <b-btn v-b-toggle.collapse2 variant="outline-success">룸메이트</b-btn>
        <b-collapse id="collapse2" class="mt-2">
            <div>
                <template>
                    <b-table striped hover :items="roommate"></b-table>
                </template>
            </div>
        </b-collapse>

        <b-btn v-b-toggle.collapse3 variant="outline-success">이어살기</b-btn>
        <b-collapse id="collapse3" class="mt-2">
            <div>
                <template>
                    <b-table striped hover :items="passRoom"></b-table>
                </template>
            </div>
        </b-collapse>

        <b-btn v-b-toggle.collapse4 variant="outline-success">스터디 그룹</b-btn>
        <b-collapse id="collapse4" class="mt-2">
            <div>
                <template>
                    <b-table striped hover :items="studyGroup"></b-table>
                </template>
            </div>
        </b-collapse>
    </div>
</template>

<script>
export default {
    // 카테고리 클릭시 변경
    data() {
        return {
            categories:[],
            products:[],
            roommate:[],
            studyGroup:[],
            passRoom:[],
            searchInfo:{

            }
        }
    },
    mounted() {
        axios.get('/allboards').then(response => (
            this.products = response.data.products,
            this.roommate = response.data.roommates,
            this.studyGroup = response.data.studyGroups,
            this.passRoom = response.data.passRooms
        ))
        //
        // axios.get('/products').then(response => (
        //     this.products = response.data,
        //     console.log(this.products)
        // ))
        // axios.get('/roommate').then(response => (
        //     this.roommate = response.data,
        //     console.log(this.products)
        // ))
        // axios.get('/studygroup').then(response => (
        //     this.studyGroup = response.data,
        //     console.log(this.products)
        // ))
        // axios.get('/passroom').then(response => (
        //     this.passRoom = response.data,
        //     console.log(this.products)
        // )),

        axios.get('/getcategory').then(response => (
            this.categories[0] = response.data.first,
            this.categories[1] = response.data.second,
            this.categories[2] = response.data.third,
            console.log('category is '+this.categories[0]),
            console.log(response.data.first)
        ))
    },

    methods: {
        getProducts(){
            axios.post('/products',this.searchInfo).then(response => (
                this.products = response.data,
                console.log(this.products)
            ))
        }
    },
    computed: {

    },
}
</script>

<style lang="css">
</style>
