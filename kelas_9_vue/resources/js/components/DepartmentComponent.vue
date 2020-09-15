<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Departments Component</div>

                    <div class="card-body">
                        <p v-for="dept in departments">
                            {{dept.name}} <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        // mounted() {
        //     console.log('Component mounted.')
        // }

        data() {
            return {
                departments: []
            }
        },
        props: [
            'data'
        ],
        mounted() {
            this.departments = this.data
            // console.log in JS == echo in php
            console.log(this.departments)
        }
    }
</script>
