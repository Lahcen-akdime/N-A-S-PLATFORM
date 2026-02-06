<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form class="register-form" method="POST" action="{{ route('create') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group">
                        <label for="firstname">Full Name</label>
                        <input 
                            type="text" 
                            id="firstname" 
                            placeholder="John"
                            name="name"
                            required
                        >
                    </div>
                </div>

                <div class="form-group full-width">
                    <label for="email">Email Address</label>
                    <input 
                        type="email" 
                        id="email" 
                        placeholder="john.doe@example.com"
                        autocomplete="email"
                        name="email"
                        required
                    >
                </div>

                <div class="form-group full-width">
                    <label for="password">Password</label>
                    <input 
                        type="password" 
                        id="password" 
                        placeholder="Create a strong password"
                        autocomplete="new-password"
                        name="password"
                        required
                    >
                </div>

                <div class="form-group full-width">
                    <label for="confirm-password">Confirm Password</label>
                    <input 
                        type="password" 
                        id="confirm-password" 
                        placeholder="Re-enter your password"
                        autocomplete="new-password"
                        required
                    >
                </div>

                <div class="checkbox-group">
                    <input type="checkbox" id="terms" required>
                    <label for="terms">
                        I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                    </label>
                </div>

                <div class="checkbox-group">
                    <input type="checkbox" id="newsletter">
                    <label for="newsletter">
                        Send me sustainable gardening tips and exclusive offers
                    </label>
                </div>

                <button type="submit" class="register-button">Create Account</button>
            </form>
</body>
</html>