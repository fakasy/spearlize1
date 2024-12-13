<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }
        body {
            background: linear-gradient(135deg, #2c0101, #5a0202, #3a0303);
            color: #f0f0f0;
            overflow-x: hidden;
            font-family: 'Inter', sans-serif;
        }
        
        /* Intense Neon Glow Effects */
        .neon-glow {
            transition: all 0.3s ease;
        }
        .neon-glow:hover {
            text-shadow: 0 0 15px rgba(255, 0, 0, 0.7), 0 0 30px rgba(255, 0, 0, 0.5);
            transform: scale(1.1);
        }

        /* Advanced Parallax Background */
        .parallax-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #2c0101, #5a0202, #3a0303);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
            z-index: -1;
        }

        @keyframes gradientBG {
            0% {background-position: 0% 50%;}
            50% {background-position: 100% 50%;}
            100% {background-position: 0% 50%;}
        }

        /* Intense Glassmorphism Card Effect */
        .glass-card {
            background: rgba(255, 0, 0, 0.1);
            backdrop-filter: blur(15px);
            border-radius: 25px;
            border: 1px solid rgba(255, 0, 0, 0.2);
            box-shadow: 0 12px 48px 0 rgba(139, 0, 0, 0.5);
            transition: all 0.4s ease;
        }
        .glass-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 16px 64px 0 rgba(139, 0, 0, 0.7);
        }

        /* Advanced Hover Effects */
        .hover-lift {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .hover-lift:hover {
            transform: translateY(-20px) rotate(3deg);
            box-shadow: 0 10px 30px rgba(255, 0, 0, 0.4);
        }

        /* Animated Gradient Text */
        .animated-gradient-text {
            background: linear-gradient(45deg, #ff1a1a, #8b0000, #ff4500, #ff6347);
            background-size: 400% 400%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: AnimatedGradientText 10s ease infinite;
        }

        @keyframes AnimatedGradientText {
            0% {background-position: 0% 50%;}
            50% {background-position: 100% 50%;}
            100% {background-position: 0% 50%;}
        }

        /* Intense Service Cards */
        .service-card {
            background: rgba(255, 0, 0, 0.1);
            border: 2px solid rgba(255, 0, 0, 0.3);
            transition: all 0.4s ease;
            box-shadow: 0 8px 24px rgba(139, 0, 0, 0.3);
        }
        .service-card:hover {
            transform: translateY(-15px);
            background: rgba(255, 0, 0, 0.2);
            box-shadow: 0 12px 36px rgba(139, 0, 0, 0.5);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            body { font-size: 14px; }
            .responsive-text { font-size: 2rem !important; }
        }

        /* Enhanced Button Styles */
        .btn-primary {
            background-color: #ff1a1a;
            border: 2px solid #8b0000;
            box-shadow: 0 4px 15px rgba(139, 0, 0, 0.4);
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #8b0000;
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(139, 0, 0, 0.6);
        }

        /* Customize scrollbar */
::-webkit-scrollbar {
  width: 10px; /* width of the scrollbar */
  height: 10px; /* height of the scrollbar */
}

::-webkit-scrollbar-thumb {
  background-color:rgb(230, 29, 29); /* color of the scrollbar thumb */
  border-radius: 10px; /* rounded corners of the scrollbar thumb */
}

::-webkit-scrollbar-thumb:hover {
  background-color:rgb(172, 12, 12); /* color of the scrollbar thumb on hover */
}

::-webkit-scrollbar-track {
  background-color:rgb(255, 255, 255); /* color of the scrollbar track */
  border-radius: 10px; /* rounded corners of the scrollbar track */
}
    </style>
</head>
<body>
    <div class="parallax-bg"></div>

    <!-- Enhanced Navbar -->
    <nav class="fixed w-full z-50 bg-transparent backdrop-blur-md">
        <div class="max-w-screen-xl mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <span class="text-3xl font-bold animated-gradient-text">Spearlize</span>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#plans" class="text-white neon-glow hover:text-red-300 transition-all">Web</a>
                    <a href="#about" class="text-white neon-glow hover:text-red-300 transition-all">About</a>
                    <a href="#contact" class="text-white neon-glow hover:text-red-300 transition-all">Contact</a>
                </div>
                <div>
                    <a href="#" class="px-6 py-3 btn-primary text-white rounded-full transition-all hover-lift">
                        Login
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section with Advanced Background -->
    <section class="relative min-h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('https://giffiles.alphacoders.com/174/1744.gif');">
        <div class="absolute inset-0 bg-black/70"></div>
        <div class="relative z-10 text-center px-4">
            <h1 class="text-5xl md:text-7xl font-bold mb-6 text-red-500" id="randomChar"></h1>
            <script>
                let charArray = ['#fgR45', 'S*4r8s', 'Ls00#$', 'i7&nss', 'onK90%'];
                let i = 0;
                setInterval(() => {
                    let randomIndex = Math.floor(Math.random() * charArray.length);
                    document.getElementById('randomChar').innerText = charArray[randomIndex];
                    i++;
                    if (i === 2) {
                        i = 0;
                        document.getElementById('randomChar').innerText = 'SPLIZE';
                    }
                }, 800);
            </script>
            <a href="#plans" class="inline-block px-8 py-4 btn-primary text-white rounded-full transition-all hover-lift">
                Explore Target
            </a>
        </div>
    </section>

    <!-- Search Section with Enhanced Design -->
    <section class="relative -mt-20 px-4 mb-24">
        <div class="max-w-4xl mx-auto glass-card p-8 transform hover:shadow-2xl transition-all duration-300">
            <h2 class="text-2xl font-bold mb-6 text-white">Find Your Programmer <b>(<i>Maintenance</i>)</b></h2>
            <form class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-300">Skills</label>
                    <input type="text" placeholder="e.g. Python, Java, C++" class="w-full p-3 bg-white/10 border border-red-500/20 rounded-lg text-white focus:ring-2 focus:ring-red-500 transition-all" disabled pattern="[^&lt;&gt;&quot;']*" title="No special characters allowed">
                </div>
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-300">Price</label>
                    <input type="number" placeholder="e.g. Rp.100.000" class="w-full p-3 bg-white/10 border border-red-500/20 rounded-lg text-white focus:ring-2 focus:ring-red-500 transition-all" disabled pattern="^[0-9]+$" title="Only numbers allowed">
                </div>
                <button class="md:col-span-2 btn-primary text-white py-4 rounded-lg transition-all hover-lift cursor-not-allowed" disabled>
                    Search Programmer
                </button>
            </form>
        </div>
    </section>

    <!-- Web Development Services -->
    <section id="plans" class="py-20 px-4">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl font-bold text-white mb-12 text-center">Web Development</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-8">
                <div class="service-card rounded-2xl p-6 text-center">
                    <h3 class="text-xl font-bold text-white mb-4">Basic Plan</h3>
                    <div class="text-gray-300 mb-4">
                        <p>CRUD Basic • Login Page</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-red-400">30.000 - 50.000</span>
                        <a href="https://t.me/YonKasyura" class="px-4 py-2 btn-primary text-white rounded-lg transition-all hover-lift">
                            Contact
                        </a>
                    </div>
                </div>
                <!-- Similar design for other service cards... -->
            </div>
        </div>
    </section>

    <!-- About Section with Modern Layout -->
    <section id="about" class="py-20 px-4">
        <div class="max-w-7xl mx-auto glass-card p-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl font-bold text-white mb-6">About Splize</h2>
                    <p class="text-lg text-gray-300 mb-4">
                        Splize adalah perusahaan yang bergerak di bidang jasa IT, khususnya web development, cybersecurity, dan network.
                    </p>
                    <div class="flex space-x-4">
                        <span class="px-4 py-2 bg-red-900/30 rounded-full text-white">Web Development</span>
                        <span class="px-4 py-2 bg-red-900/30 rounded-full text-white">Cybersecurity</span>
                    </div>
                </div>
                <div>
                    <img src="splize nbg hd.png" alt="About Splize" class="rounded-2xl shadow-xl hover-lift">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 px-4">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-4xl font-bold text-white mb-12">Connect with Splize</h2>
            <div class="glass-card p-8 max-w-md mx-auto">
                <div class="flex justify-center space-x-6 mb-6">
                    <a href="https://www.instagram.com/splize.zone/" target="_blank" class="transform hover:scale-110 transition-all">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/1200px-Instagram_logo_2016.svg.png" alt="Instagram" class="w-12 h-12">
                    </a>
                    <a href="https://www.tiktok.com/@spearlize" target="_blank" class="transform hover:scale-110 transition-all">
                        <img src="https://tse1.mm.bing.net/th?id=OIP.bOuv9CXDZsXaZUv7r8QRXQHaHa&pid=Api&P=0&h=220" alt="TikTok" class="w-12 h-12">
                    </a>
                    <a href="https://www.whatsapp.com/channel/0029VaodynP3AzNNChcxGh01" target="_blank" class="transform hover:scale-110 transition-all">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/1200px-WhatsApp.svg.png" alt="WhatsApp" class="w-12 h-12">
                    </a>
                    <a href="https://www.youtube.com/@Spearlize" target="_blank" class="transform hover:scale-110 transition-all">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/4/42/YouTube_icon_%282013-2017%29.png" alt="YouTube" class="w-12 h-12">
                    </a>
                </div>
                <a href="#" class="px-6 py-3 btn-primary text-white rounded-full transition-all hover-lift">
                    Contact Splize Enterprise
                </a>
            </div>
        </div>
    </section>

    <footer class="py-8 text-center bg-transparent ">
        <p class="text-gray-400">&copy; 2024 Splize. All Rights Reserved.</p>
    </footer>

    <script>
        // ScrollReveal Animations
        ScrollReveal().reveal('.service-card, .glass-card', { 
            delay: 200, 
            distance: '50px', 
            origin: 'bottom',
            easing: 'cubic-bezier(0.5, 0, 0, 1)'
        });
    </script>
</body>
</html>
