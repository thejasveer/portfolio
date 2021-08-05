<template>
    <div
     class="h-full w-full"
    >
        <div :class="extraClassName" draggable="true" class="h-full w-full "> </div>

    </div>


</template>

<script>
    export default {
        name: "node",
        props:
            {
                value:Object,
                isStart:Boolean,
                isFinish:Boolean,
            }
        ,

        components:{

        },
        data() {
            return {
                // nodesArray:this.tableNodes
            };
        },
        watch: {},
        computed: {
            extraClassName()
            {
                const {isStart,isFinish} = this.value;
                console.log(isStart)
           const cn = (isFinish== true) ? 'endCls': (isStart == true) ? 'startCls' : '';
           console.log(cn)
           return cn;
            }
        },

        methods: {

        },
        mounted() {

        },
    }
</script>

<style scoped>
.startCls{
    background-color: greenyellow;
    color: yellow;
    cursor: grabbing;
}
.endCls{
    background-color: red;
    color: yellow;
    cursor: grabbing;
}
</style>
