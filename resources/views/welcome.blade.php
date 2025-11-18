<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>South Rift Matatu Awards 2025</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary: #1a237e;
            --secondary: #d32f2f;
            --accent: #ffc107;
            --light: #f5f5f5;
            --dark: #212121;
        }

        body {
            background: linear-gradient(135deg, var(--primary), #283593);
            color: var(--light);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .container {
            width: 100%;
            max-width: 500px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
            width: 100%;
        }

        .logo {
            width: 120px;
            height: 120px;
            background: var(--accent);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            border: 5px solid white;
        }

        .logo i {
            font-size: 50px;
            color: var(--primary);
        }

        .title {
            font-size: 32px;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 5px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .subtitle {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--accent);
        }

        .edition {
            background: var(--secondary);
            color: white;
            padding: 8px 25px;
            border-radius: 30px;
            font-size: 18px;
            font-weight: bold;
            display: inline-block;
            margin-bottom: 25px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
        }

        .patron-section {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 20px;
            width: 100%;
            margin-bottom: 30px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .patron-title {
            font-size: 18px;
            margin-bottom: 10px;
            color: var(--accent);
        }

        .patron-name {
            font-size: 24px;
            font-weight: bold;
            color: white;
        }

        .nominate-section {
            text-align: center;
            width: 100%;
            margin-bottom: 30px;
        }

        .nominate-title {
            font-size: 28px;
            font-weight: 800;
            text-transform: uppercase;
            margin-bottom: 20px;
            color: var(--accent);
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.4);
        }

        .start-btn {
            background: linear-gradient(45deg, var(--accent), #ffd54f);
            color: var(--dark);
            border: none;
            padding: 18px 40px;
            font-size: 22px;
            font-weight: bold;
            border-radius: 50px;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin: 0 auto;
            width: 100%;
            max-width: 280px;
        }

        .start-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
        }

        .start-btn:active {
            transform: translateY(1px);
        }

        .contact {
            text-align: center;
            margin-top: 30px;
            width: 100%;
        }

        .phone {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(5px);
            padding: 15px 25px;
            border-radius: 50px;
            font-size: 20px;
            font-weight: bold;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .phone i {
            color: var(--accent);
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: rgba(255, 255, 255, 0.7);
            width: 100%;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .features {
            display: flex;
            justify-content: space-around;
            width: 100%;
            margin: 25px 0;
        }

        .feature {
            text-align: center;
            flex: 1;
            padding: 0 10px;
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px;
            font-size: 24px;
            color: var(--accent);
        }

        .feature-text {
            font-size: 14px;
            color: rgba(255, 255, 255, 0.9);
        }

        /* Animation for elements */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animated {
            animation: fadeInUp 0.6s ease forwards;
        }

        .delay-1 {
            animation-delay: 0.2s;
        }

        .delay-2 {
            animation-delay: 0.4s;
        }

        .delay-3 {
            animation-delay: 0.6s;
        }

        /* Responsive adjustments */
        @media (max-width: 480px) {
            .title {
                font-size: 28px;
            }

            .subtitle {
                font-size: 18px;
            }

            .nominate-title {
                font-size: 24px;
            }

            .start-btn {
                font-size: 20px;
                padding: 16px 30px;
            }

            .phone {
                font-size: 18px;
            }

            .features {
                flex-direction: column;
                gap: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="header animated">
            <div class="logo">
                <i class="fas fa-trophy"></i>
            </div>
            <h1 class="title">SOUTH RIFT<br>MATATU<br>AWARDS 2025</h1>
            <div class="edition">SECOND EDITION</div>
        </header>

        <section class="patron-section animated delay-1">
            <div class="patron-title">PATRON</div>
            <div class="patron-name">KENDA VIN</div>
        </section>

        <section class="nominate-section animated delay-2">
            <h2 class="nominate-title">NOMINATE NOW!</h2>
            <button class="start-btn">
                <i class="fas fa-play-circle"></i> START
            </button>
        </section>

        <div class="features animated delay-2">
            <div class="feature">
                <div class="feature-icon">
                    <i class="fas fa-award"></i>
                </div>
                <div class="feature-text">Multiple Categories</div>
            </div>
            <div class="feature">
                <div class="feature-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="feature-text">Public Voting</div>
            </div>
            <div class="feature">
                <div class="feature-icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <div class="feature-text">2025 Event</div>
            </div>
        </div>

        <section class="contact animated delay-3">
            <div class="phone">
                <i class="fas fa-phone-alt"></i> 0747339043
            </div>
        </section>

        <footer class="footer animated delay-3">
            Official Event • South Rift Matatu Awards 2025
        </footer>
    </div>

    <script>
        // Add interactive functionality
        document.addEventListener('DOMContentLoaded', function() {
            const startBtn = document.querySelector('.start-btn');

            // Button click effect
            startBtn.addEventListener('click', function() {
                // Add ripple effect
                const ripple = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = event.clientX - rect.left - size/2;
                const y = event.clientY - rect.top - size/2;

                ripple.style.width = ripple.style.height = size + 'px';
                ripple.style.left = x + 'px';
                ripple.style.top = y + 'px';
                ripple.classList.add('ripple');

                this.appendChild(ripple);

                // Remove ripple after animation
                setTimeout(() => {
                    ripple.remove();
                }, 600);

                window.location.href = "/nominate";
            });

            // Add ripple effect styles
            const style = document.createElement('style');
            style.textContent = `
                .ripple {
                    position: absolute;
                    border-radius: 50%;
                    background: rgba(255, 255, 255, 0.6);
                    transform: scale(0);
                    animation: ripple-animation 0.6s linear;
                }

                @keyframes ripple-animation {
                    to {
                        transform: scale(4);
                        opacity: 0;
                    }
                }

                .start-btn {
                    position: relative;
                    overflow: hidden;
                }
            `;
            document.head.appendChild(style);
        });
    </script>

</body>
</html>
