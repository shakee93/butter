<template>
    <section class="content">
        <div class="big-header container-fluid">
            <h1>{{ header }}</h1>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 content-container">
                    <slot></slot>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default{
        name : "page",
        props : {
            header : {
                default : "Your Header"
            }
        }
    }
</script>
