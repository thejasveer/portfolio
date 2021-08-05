<template>

    <h1 class="text-white text-center">path finder</h1>

    <div class="mt-20">
        <div class="flex justify-center text-white" v-for="item in nodes" :key="item.row">

            <div class="flex border  text-white "  style="width: 4rem; height: 4rem" v-for="node in item" :key="node.col" >

                <Node :value="node" :isStart="node.isStart" :isFinish="node.isFinish"/>
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
                tableCol:25,
                tableRow:15,
                nodes:[],
                startNode:{row:2,col:23},
                endNode:{row:8,col:3}
            };
        },
        watch: {},
        computed: {

        },

        methods: {
            makeTable()
            {
                for(let row= 1;row<=this.tableRow;row++)
                {
                    const currentRow= [];
                    for(let col=1;col<=this.tableCol;col++)
                    {
                        let currentNode= this.createNode(row,col)
                        currentRow.push(currentNode);

                    }
                    this.nodes.push(currentRow)

                }


            },
            createNode(row,col)
            {
                return  {
                    col,
                    row,
                    isStart:(row===this.startNode.row && col===this.startNode.col),
                    isFinish:(row===this.endNode.row&& col===this.endNode.col),
                    distance:Infinity,
                    isVisited:false,
                    isWall:false,
                    previousNode:null
                }
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
