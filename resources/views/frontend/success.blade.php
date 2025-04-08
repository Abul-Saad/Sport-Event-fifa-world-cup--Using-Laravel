<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        @keyframes bounceIn {
            0%, 20%, 40%, 60%, 80%, 100% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
            50% {
                -webkit-transform: translateY(-10px);
                transform: translateY(-10px);
            }
        }
        .animate-bounce-in {
            animation: bounceIn 1s ease-in-out;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen bg-white">
    <div class="text-center">
        <div class="text-9xl text-green-500 animate-bounce-in">
            <i class="fas fa-check-circle"></i>
        </div>
        <h1 class="mt-4 text-2xl font-bold text-gray-800">Ticket Booking Successfully!!!</h1>
        <p class="mt-2 text-gray-600">Your FIFA World Cup ticket has been booked.</p>
        <p class="mt-2 text-gray-600">We look forward to seeing you at the event!</p>
        <a href="{{url('/')}}" class="mt-4 inline-block px-6 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">Back to Home</a>
    </div>
</body>
</html>