<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form class="login-form" method="POST" action="{{route('login')}}">
        @csrf
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input
                        type="email" 
                        id="email" 
                        name="email"
                        placeholder="admin@greentech.com"
                        autocomplete="email"
                    >
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input 
                        type="password" 
                        id="password" 
                        placeholder="Enter your password"
                        autocomplete="current-password"
                        name="password"
                    >
                </div>

                <button type="submit" class="login-button">Login to Dashboard</button>
    </form>
</body>
</html>