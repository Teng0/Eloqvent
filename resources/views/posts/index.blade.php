<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @foreach($posts as $post)
        {{$post}}
{{--        <h2>{{$post->title}}</h2>--}}
{{--        <p>{{$post->user->name}}</p>--}}
{{--        <ul>--}}
{{--            @foreach($post->tags as $tag)--}}
{{--                <li>{{$tag->name}}</li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
    @endforeach


{{--    @foreach($addresses as $address)--}}
{{--        {{$address}}--}}
{{--        <h2>{{$address->country}}</h2>--}}
{{--        <p>{{$address->user->name}}</p>--}}
{{--    @endforeach--}}
</body>
</html>
