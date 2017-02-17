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
        <form method="POST" action="/multiply">
            Number 1 : <input type="text" name="n1" value="" />
            <br/>
            Number 2 : <input type="text" name="n2" value="" />
            <br/>
            <input type="submit" value="*" name="multiply" />
            {{csrf_field()}}
        </form>
    </body>
</html>
