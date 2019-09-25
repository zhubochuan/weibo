<a href="#">
    <strong id="following" class="stat">
        {{ count($user->followings) }}
    </strong>
    following
</a>
<a href="#">
    <strong id="followers" class="stat">
        {{ count($user->followers) }}
    </strong>
    follower
</a>
<a href="#">
    <strong id="statuses" class="stat">
        {{ $user->statuses()->count() }}
    </strong>
    post
</a>