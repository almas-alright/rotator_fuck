<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.3/vue.js" ></script>
        <style type="text/css">
            .modal-mask {
                position: fixed;
                z-index: 9998;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, .5);
                display: table;
                transition: opacity .3s ease;
            }

            .modal-wrapper {
                display: table-cell;
                vertical-align: middle;
            }

            .modal-container {
                width: 300px;
                margin: 0px auto;
                padding: 20px 30px;
                background-color: #fff;
                border-radius: 2px;
                box-shadow: 0 2px 8px rgba(0, 0, 0, .33);
                transition: all .3s ease;
                font-family: Helvetica, Arial, sans-serif;
            }

            .modal-header h3 {
                margin-top: 0;
                color: #42b983;
            }

            .modal-body {
                margin: 20px 0;
            }

            .modal-default-button {
                float: right;
            }

        </style>
    </head>
    <body>
        <script type="text/x-template" id="modal-template">
            <transition name="modal">
            <div class="modal-mask">
            <div class="modal-wrapper">
            <div class="modal-container">

            <div class="modal-header">
            <slot name="header">
            default header
            </slot>
            </div>

            <div class="modal-body">
            <slot name="body">
            default body
            </slot>
            </div>

            <div class="modal-footer">
            <slot name="footer">                                                        
            default footer
            <button class="modal-default-button" @click="$emit('close')">
            OK
            </button>
            </slot>
            </div>
            </div>
            </div>
            </div>
            </transition>
        </script>

        <!-- app -->
        <div id="app">
            <button id="show-modal" @click="showModal = true">Show Modal</button>
            <!-- use the modal component, pass in the prop -->
            <modal v-if="showModal" @close="showModal = false">
                <!--
                  you can use custom content here to overwrite
                  default content
                -->
                <h3 slot="header">custom header</h3>
            </modal>
        </div>
        <script type="text/javascript">
            // register modal component
            Vue.component('modal', {
                template: '#modal-template'
            })

            // start app
            new Vue({
                el: '#app',
                data: {
                    showModal: false
                }
            })
        </script>
    </body>
</html>
