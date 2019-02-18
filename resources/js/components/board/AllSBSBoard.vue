<template>
    <div class="container">
        <br>
        <marquee>환영합니다 ~</marquee>
        <br>
        <b-table striped hover :items="allProducts" :fields="fields">
            <template slot="title" slot-scope="data">
                <a :href="'/allsbs/' +  data.item.id">
                    {{data.value}}
                </a>
            </template>
        </b-table>

        <b-btn right to="/writesbs" type="button" name="button">글쓰기</b-btn>
    </div>
</template>

<script>
export default {
    data() {
        return {
             fields: {
                 id: {
                     label: '번호'
                 },
                 title: {
                     label: '제목',
                 },
                 created_at: {
                     label: '작성 날짜',
                     sortable: true
                 },
                 updated_at: {
                     label: '업데이트',
                     sortable: true
                 },
             },
            allProducts: [],
        }
    },
    mounted() {
        axios.get('/products').then(response => (
            this.allProducts = response.data,
            console.log(this.allProducts)
        ))
    },
}
</script>

<style lang="css">
</style>
