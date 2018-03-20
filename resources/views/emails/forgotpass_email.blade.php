<h1>Welcome to SimpleCar </h1>
<p>Hi, {{ $user['name'] }}</p>
<p>Kindly Click on the below link to update your password</p>
<br>
<a href="{{ route('pass_reset_view', ['token' => $token]) }}">Update Password</a>
