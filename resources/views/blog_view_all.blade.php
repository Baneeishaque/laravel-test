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
        <form action="/blog_view" method="POST">
            <input type="submit" value="List Articles" />
            {{csrf_field()}}
        </form>
        {{$articles}}
        @foreach ($articles as $article)
        <p>Article id : {{ $article->id }}</p>
        <p>Article title : {{ $article->title }}</p>
        <p>Article content : {{ $article->content }}</p>
        @endforeach

        <table border="1">
            <thead>
                <tr>
                    <th>Artilcle ID</th>
                    <th>Artilcle Title</th>
                    <th>Artilcle Content</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->content }}</td>

                </tr>
                @endforeach



            </tbody>
        </table>

    </body>
</html>
