<template>

    <div class="container">
        <br>
        <table>
            <tr>
                <td>
                    <img src="/images/logo/logo3.png" alt="used auction logo" style="width:30%">
                </td>
                <td style="width:900px">
                </td>
            </tr>
        </table>
        <hr>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/images/logo/logo4.png" alt="first advertisement">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/images/logo/logo5.png" alt="second advertisement">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/images/ad/thrid_ad.jpg" alt="third advertisement">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/images/ad/fourth_ad.jpg" alt="fourth advertisement">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/images/ad/fifth_ad.jpg" alt="fifth advertisement">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">이전</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">다음</span>
            </a>
        </div>
        <br>
        <div class="" style="text-align:center">
            <table class="table">
                <tr>
                    <td>
                        <a class="in-table" href="#gallery" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon change-view-icon-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </td>
                    <td><h2>추천 상품</h2></td>
                    <td>
                        <a class="in-table" href="#gallery" role="button" data-slide="next">
                            <span class="carousel-control-next-icon change-view-icon-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </td>
                </tr>
            </table>
        </div>
        <div id="gallery" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col">
                            <img class="img-fluid" src="http://via.placeholder.com/800x450/caa8f5/ffffff?text=Image+1" alt="Image 1"/>
                        </div>
                        <div class="col">
                            <img class="img-fluid" src="http://via.placeholder.com/800x450/9984d4/ffffff?text=Image+2" alt="Image 2"/>
                        </div>
                        <div class="col">
                            <img class="img-fluid" src="http://via.placeholder.com/800x450/592e83/ffffff?text=Image+3" alt="Image 3"/>
                        </div>
                        <div class="col">
                            <img class="img-fluid" src="http://via.placeholder.com/800x450/230c33/ffffff?text=Image+4" alt="Image 4"/>
                        </div>
                        <div class="col">
                            <img class="img-fluid" src="http://via.placeholder.com/800x450/b27c66/ffffff?text=Image+5" alt="Image 5"/>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col">
                            <img class="img-fluid" src="http://via.placeholder.com/800x450/f35b04/ffffff?text=Image+6" alt="Image 6"/>
                        </div>
                        <div class="col">
                            <img class="img-fluid" src="http://via.placeholder.com/800x450/f18701/ffffff?text=Image+7" alt="Image 7"/>
                        </div>
                        <div class="col">
                            <img class="img-fluid" src="http://via.placeholder.com/800x450/f7b801/ffffff?text=Image+8" alt="Image 8"/>
                        </div>
                        <div class="col">
                            <img class="img-fluid" src="http://via.placeholder.com/800x450/7678ed/ffffff?text=Image+9" alt="Image 9"/>
                        </div>
                        <div class="col">
                            <img class="img-fluid" src="http://via.placeholder.com/800x450/3d348b/ffffff?text=Image+10" alt="Image 10"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="" style="text-align:center;">
            <br>
            <h2>자취생 메뉴</h2>
            <br>
        </div>
        <div class="">
            <nav>
                <div class="nav nav-pills nav-justified" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-roommate-tab" data-toggle="tab" href="#nav-roommate" role="tab" aria-controls="nav-roommate" aria-selected="true">룸메이트</a>
                    <a class="nav-item nav-link" id="nav-passroom-tab" data-toggle="tab" href="#nav-passroom" role="tab" aria-controls="nav-passroom" aria-selected="false">이어살기</a>
                    <a class="nav-item nav-link" id="nav-recommendrecipe-tab" data-toggle="tab" href="#nav-recommendrecipe" role="tab" aria-controls="nav-recommendrecipe" aria-selected="false">추천 레시피</a>
                    <a class="nav-item nav-link" id="nav-study-tab" data-toggle="tab" href="#nav-study" role="tab" aria-controls="nav-study" aria-selected="false">스터디</a>
                    <a class="nav-item nav-link" id="nav-universityboard-tab" data-toggle="tab" href="#nav-universityboard" role="tab" aria-controls="nav-universityboard" aria-selected="false">대학게시판</a>
                    <a class="nav-item nav-link" id="nav-freeboard-tab" data-toggle="tab" href="#nav-freeboard" role="tab" aria-controls="nav-freeboard" aria-selected="false">자유게시판</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-roommate" role="tabpanel" aria-labelledby="nav-roommate-tab">
                    <template>
                        <b-table striped hover :items="roommate"></b-table>
                    </template>
                </div>
                <div class="tab-pane fade" id="nav-passroom" role="tabpanel" aria-labelledby="nav-passroom-tab">
                    <template>
                        <b-table striped hover :items="passRoom"></b-table>
                    </template>
                </div>
                <div class="tab-pane fade" id="nav-recommendrecipe" role="tabpanel" aria-labelledby="nav-recommendrecipe-tab">
                    <template>
                        <b-table striped hover :items="passroom"></b-table>
                    </template>
                </div>
                <div class="tab-pane fade" id="nav-study" role="tabpanel" aria-labelledby="nav-study-tab">
                    <template>
                        <b-table striped hover :items="studyGroup"></b-table>
                    </template>
                </div>
                <div class="tab-pane fade" id="nav-universityboard" role="tabpanel" aria-labelledby="nav-universityboard-tab">
                    <template>
                        <b-table striped hover :items="passroom"></b-table>
                    </template>
                </div>
                <div class="tab-pane fade" id="nav-freeboard" role="tabpanel" aria-labelledby="nav-freeboard-tab">
                    <template>
                        <b-table striped hover :items="passroom"></b-table>
                    </template>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br>
        <button v-on:click="go" type="btn" name="button">gggg</button>

    </div>

</template>
<script>



export default {

// import {mapGetters} from 'vuex';

    props: [
        'category'
        // 라라벨에서 변수를 바로 넘겨 줄 경우 사용
        // 현재는 필요 X
    ],mounted() {
        console.log(this.category);
        // vue 파일이 마운트(최종단계)되면 실행 할 메소드
    },data(){
        return{
            temp : false,
            products:[],
            roommate:[],
            studyGroup:[],
            passRoom:[],
            // method에서 사용할 변수를 정의하거나 템플릿 문법에서 사용할 변수 정의
        }
    },methods: {
// 스크립트 태그 내부에 메소드를 바로 정의하는 것이 아닌
// 객체 형태로 정의해야 템블릿 문법에서 사용 가능
        go(){
            this.axios.get('/test').then(response => {
                // this.axios.요청방식('URL').then(요청이 끝난 다음 할 행동)
                console.log(response.data[0]);
                console.log(window.Laravel.user);
            });
        }
    },
    computed : {

        test : function () {
            // console.log("sex" + this.gogogo);
            // return this.temp = this.gogogo;
        }
    },
    mounted(){
        console.log("1---------")
        console.log(this.$userId)
        console.log("2---------")
        console.log(typeof this.$userId)
        axios.get('/allboards').then(response => (
            this.products = response.data.products,
            this.roommate = response.data.roommates,
            this.studyGroup = response.data.studyGroups,
            this.passRoom = response.data.passRooms
        ))

    }
}
var availableTags = [];
    for (var i = 0; i < 30; i++) {
        availableTags.push(i);
    }

console.log(availableTags);

</script>

<style lang="css">
    #v-pills-tab{
        width:20%;
        margin: 5px 5px 5px 0;
    }
    #category{
        display: flex;
        /* background-color: black; */
        width: 100%;
    }
    #v-pills-tabContent{
        width: 100%;
    }
    .tab-pane{
        /* background-color: black; */
        width: 100%;
    }
    .carousel-item{
        /* 800*400 이미지로 */
    }
    .change-view-icon-left{
        width: 50px;
        height: 50px;
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%2381d8d0' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E") !important;
    }
    .change-view-icon-right{
        width: 50px;
        height: 50px;
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%2381d8d0' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E") !important;
    }
    .in-table{
        left: auto;
        right: auto;
    	top:0;
    	bottom:0;
    	align-items:center;
    	-ms-flex-pack:center;
    	justify-content:center;
    	width:15%;
    	color:black;
    	text-align:center;
    	opacity:.5
    }

    .nav-pills .nav-link.active,.nav-pills .show>.nav-link{
        color:#5b6167;
        background-color:#81d8d0;
    }
    .nav-item{
        color:black;
    }
    .top_menu{
        margin-top: 5px;
    }
/* 여기 내부의 스타일 값은 전체 vue 템플릿끼리 공유됨 */
</style>
