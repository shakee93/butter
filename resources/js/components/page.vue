<template>
    <section class="content">

        <div class="header-info">
            {{ description }}
        </div>

        <div class="big-header container-fluid">
            <div class="text">{{ header }}</div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 content-container">
                    <slot></slot>
                </div>

                <div class="col-md-1" v-if="isAction">
                    <div class="actions">
                        <a class="fab" href="javascript:;">
                            <i class="material-icons">{{ icon }}</i>
                        </a>
                    </div>
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
            },
            description : {
                default : "Your Description"
            },
            isAction : {
                type : Boolean,
                default : false
            },
            icon : {
                default : "add"
            }
        }
    }
</script>
