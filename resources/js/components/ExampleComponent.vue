<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card row">
                    <div class="card-header">Superman Vs Batman</div>

                    <div class="card-body">
                       <input type="text" v-model="test">

                   
                    </div>
                    <h1> {{ test }} </h1>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: () => {
            
            return{test: ''}

        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
