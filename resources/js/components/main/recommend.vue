<template>
    <div class="container">
        <p>
        <a @click="prev">Previous</a> || <a @click="next">Next</a>
        </p>
        <transition-group name='fade' tag='div'>
            <div
            v-for="number in [currentNumber]"
            :key='number'
            >
                <img
                class = "images"
                :src="currentImage"
                v-on:mouseover="stopRotation"
                v-on:mouseout="startRotation"
                />
            </div>
        </transition-group>
    </div>
</template>

<script>
export default {
    mounted(){
         this.startRotation();
    },
    props: [
        'advertisements'
    ],
    data(){
        return {
            imagePath: [
                '/images/products/1.jpg',
                '/images/products/2.jpg',
                '/images/products/3.jpg',
                '/images/products/4.jpg',
                '/images/products/5.jpg'
            ],
            currentNumber: 0,
            timer : null
        }
    },
    methods:{
        startRotation : function() {
            console.log("nooo");
            this.timer = setInterval(this.next, 3000);
        },
        stopRotation : function() {
            clearTimeout(this.timer);
            this.timer = null;
            console.log(this);
        },
        next : function() {
            this.currentNumber += 1
        },
        prev : function() {
            this.currentNumber -= 1
        }
    },
    computed: {
       	currentImage: function() {
         	return this.imagePath[Math.abs(this.currentNumber) % this.imagePath.length];
         }
       }
}

</script>

<style lang="css">
    .images {
        width: 80px;
        height: 80px;
    }
    .images:hover {
        border:1px solid #f00;
    }
    .fade-enter-active, .fade-leave-active {
        transition: all 0.8s ease;
        overflow: hidden;
        visibility: visible;
        opacity: 1;
        position: absolute;
    }
    .fade-enter, .fade-leave-to {
        opacity: 0;
        visibility: hidden;
    }
</style>
