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
        @if(isset($id))
        <form action="/blog_update" method="POST">

            <input type="hidden" name="id" value="{{$id}}" />
            <input type="text" name="title" value="{{$title}}" />
            <input type="text" name="content" value="{{$content}}" />
            <input type="text" name="description" value="{{$description}}" />
            <input type="submit" value="Submit" />
            {{csrf_field()}}
        </form>
        @else
        <form action="/blog_addition" method="POST">
            <input type="text" name="title" value="" />
            <input type="text" name="content" value="" />
            <input type="text" name="description" value="" />
            <input type="submit" value="Submit" />
            {{csrf_field()}}
        </form>
        @endif
        <a href="/blog_view_all">View</a>
    </body>
</html>
