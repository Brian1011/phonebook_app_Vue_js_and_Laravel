<?php
/**
 * Created by PhpStorm.
 * User: Brian Mutinda
 * Date: 03/12/2018
 * Time: 08:36 PM
 */
?>
<html>
    <head>
        <title>PhoneBook App</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

    </head>

    <body>
        <div id="app">
            <Myheader></Myheader>

            <div class="container">
                <router-view></router-view>
            </div>

            <Myfooter></Myfooter>
        </div>

        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
