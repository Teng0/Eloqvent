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
    @foreach($users as $user)

        <h2>{{$user->name}}</h2>
{{--        @foreach($user->addresses as $address)--}}

{{--                    <p> {{$address->country}}</p>--}}
{{--        @endforeach--}}
        @foreach($user->posts as $post)

            <p> {{$post->title}}</p>
        @endforeach
{{--        <p>{{$user->addresses->country}}</p>--}}
    @endforeach

{{--    @foreach($addresses as $address)--}}
{{--        {{$address}}--}}
{{--        <h2>{{$address->country}}</h2>--}}
{{--        <p>{{$address->user->name}}</p>--}}
{{--    @endforeach--}}
</body>
</html>
