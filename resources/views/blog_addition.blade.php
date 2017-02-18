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
    </head>
    <body>
        <form action="/blog_addition" method="POST">
            <input type="text" name="title" value="" />
            <input type="text" name="content" value="" />
            <input type="submit" value="Submit" />
            {{csrf_field()}}
        </form>
        <a href="/blog_view_all">View</a>
    </body>
</html>
