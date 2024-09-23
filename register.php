<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure PHP Authentication | Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      /* Custom gradient background for the whole page */
      body {
        background: linear-gradient(to right, #6EE7B7, #3B82F6);
        font-family: 'Poppins', sans-serif;
      }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-[#000000] via-[#0f0f00] to-yellow-950 text-white">
    <div class="bg-black backdrop-blur-md p-8 rounded-xl shadow-2xl max-w-md w-full">
        <h1 class="text-3xl font-bold text-center text-white mb-6">Register</h1>

        <?php if (isset($_GET['error'])): ?>
            <div class="bg-red-500 text-white p-3 rounded-lg mb-6">
                <?php echo htmlspecialchars($_GET['error']); ?>
            </div>
        <?php endif; ?>

        <form action="./src/auth/register.php" method="POST" class="space-y-6">
            <div>
                <label for="username" class="block text-sm font-medium text-gray-300">Username</label>
                <input type="text" id="username" name="username" required class="mt-2 w-full px-4 py-3 bg-gray-700 text-white border border-gray-600 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200 placeholder-gray-400" placeholder="Enter your username">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-300">Email</label>
                <input type="email" id="email" name="email" required class="mt-2 w-full px-4 py-3 bg-gray-700 text-white border border-gray-600 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200 placeholder-gray-400" placeholder="Enter your email">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-300">Password</label>
                <input type="password" id="password" name="password" required class="mt-2 w-full px-4 py-3 bg-gray-700 text-white border border-gray-600 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200 placeholder-gray-400" placeholder="Enter your password">
            </div>

            <div>
                <input type="submit" value="Register" class="w-full py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 cursor-pointer transition duration-300">
            </div>
        </form>
        <p class="text-sm text-center text-gray-400 mt-6">Already have an account? <a href="./login.php" class="text-blue-400 hover:text-blue-500 transition duration-200">Login here</a></p>
    </div>
</body>
</html>
