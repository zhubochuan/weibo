<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>confirm sign up</title>
</head>

<body>
    <h1>thank you for signup！</h1>

    <p>
        Please click follow link to finish signup:
        <a href="{{ route('confirm_email', $user->activation_token) }}">
            {{ route('confirm_email', $user->activation_token) }}
        </a>
    </p>

    <p>
        if it is not your operation, please ignore it. 
    </p>
</body>

</html>