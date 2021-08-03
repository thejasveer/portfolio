<template>

    <h1 class="text-white text-center">pfth finder</h1>
<!--<Node :tableNodes="nodes"  />-->

<!--    <Node v-for="node in nodes" >-->
<!--        <Node v-for="node in nodes"  >tr</Node>-->

<!--    </Node>-->
    <div class="mt-20">
        <div class="flex justify-center" v-for="item in nodes" >
            <div class="flex border p-2 text-white " v-for="{node,idx} in item" :key="idx" >
                {{node}}
<!--                <Node />-->
            </div>
        </div>



    </div>
</template>

<script>
    import util from "util";
    import Node from "./node";
    export default {
        name: "path-finder",
        props: [],
        components:{
          Node
        },
        data() {
            return {
                tableCol:50,
                tableRow:15,
                nodes:[]
            };
        },
        watch: {},
        computed: {

        },

        methods: {
            makeTable()
            {
                for(let row= 0;row<=this.tableRow;row++)
                {
                    const currentRow= [];
                    for(let col=0;col<=this.tableCol;col++)
                    {
                        currentRow.push([{"id": col}]);
console.log(currentRow[col])
                    }
                    this.nodes.push(currentRow)

                }
                console.log(this.nodes)

            }
        },
        mounted() {
            this.makeTable();
        },
        created() {

        },

    }
</script>

<style scoped>

</style>
