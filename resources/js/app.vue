<template>
    <div>
        <navs></navs>
        <div id="contents">
            <router-view>
            </router-view>
        </div>
        <foot></foot>
    </div>
</template>

<script>
export default {
}
</script>

<style lang="css">
    #contents{
        width: 100%;
        height: 100%;
    }
</style>
