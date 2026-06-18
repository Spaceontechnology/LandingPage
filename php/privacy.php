<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy | Pharmovix</title>

    <!-- Google Typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS (CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        display: ['Outfit', 'sans-serif'],
                        mono: ['JetBrains Mono', 'monospace'],
                    },
                    colors: {
                        brand: {
                            50: '#f0fdfa',
                            100: '#ccfbf1',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            900: '#0f172a',
                        }
                    }
                }
            }
        }
    </script>

    <style>
        body {
            background-color: #fafafa;
            color: #0f172a;
        }
        .glass-panel {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(226, 232, 240, 0.8);
            border-radius: 1.5rem;
            box-shadow: 0 20px 25px -5px rgba(148, 163, 184, 0.1);
        }
    </style>
</head>
<body class="font-sans antialiased relative min-h-screen selection:bg-sky-500/30 selection:text-sky-200 py-12 px-4 sm:px-6 lg:px-8">

    <!-- Ambient Glowing Blobs -->
    <div class="absolute inset-0 pointer-events-none z-0 overflow-hidden">
        <div class="absolute top-[-5%] left-[-5%] w-[45%] h-[45%] rounded-full bg-sky-900/5 blur-[120px]"></div>
        <div class="absolute bottom-[5%] right-[-5%] w-[50%] h-[50%] rounded-full bg-teal-900/5 blur-[150px]"></div>
        <div class="absolute inset-0 opacity-[0.02]" style="background-image: radial-gradient(#38bdf8 1px, transparent 1px); background-size: 24px 24px;"></div>
    </div>

    <!-- Container Frame -->
    <div class="relative z-10 max-w-4xl mx-auto">
        
        <!-- Header -->
        <header class="flex flex-col sm:flex-row items-center justify-between gap-4 border-b border-slate-200/80 pb-6 mb-8">
            <a href="index.php" class="flex items-center hover:opacity-90 transition-opacity">
                <img src="https://patelarsh.com/Pharmovix/PHARMOVIX.png" alt="Pharmovix Logo" class="h-10 sm:h-12 w-auto object-contain" referrerpolicy="no-referrer">
            </a>
            
            <a href="index.php" class="inline-flex items-center gap-2 px-4 py-2 rounded-xl border border-slate-200 bg-white hover:bg-slate-50 text-xs font-bold text-slate-700 shadow-sm transition-all">
                <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Back to Home Launch
            </a>
        </header>

        <!-- Main Content Card -->
        <main class="glass-panel p-6 sm:p-10 leading-relaxed text-slate-600 text-sm sm:text-base">
            <h1 class="text-3xl sm:text-4xl font-extrabold font-display text-sky-950 tracking-tight mb-2">Privacy Policy</h1>
            <p class="text-xs text-slate-400 font-medium mb-8 flex items-center gap-1.5 uppercase tracking-widest font-mono">
                <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10" />
                    <polyline points="12 6 12 12 16 14" />
                </svg>
                Last Updated: June 2026
            </p>

            <div class="space-y-8">
                <!-- Welcome Section -->
                <div>
                    <p class="text-slate-600 sm:text-lg font-light leading-relaxed">
                        Welcome to <span class="font-semibold text-sky-700">Pharmovix</span>, powered by <span class="font-semibold text-sky-700">SpaceOn Technology</span>. 
                        We are committed to protecting your privacy and safeguarding your data. This Privacy Policy explains how we collect, use, and protect information when you use Pharmovix and related services.
                    </p>
                </div>

                <!-- 1. Information We Collect -->
                <div>
                    <h2 class="text-xl sm:text-2xl font-bold font-display text-sky-950 mb-4 flex items-center gap-2">
                        <span class="text-sky-600 font-mono text-base bg-sky-50 border border-sky-100 rounded-lg w-7 h-7 flex items-center justify-center font-bold">01</span>
                        Information We Collect
                    </h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                        <div class="p-5 rounded-xl border border-slate-100 bg-white shadow-sm hover:shadow-md transition-shadow">
                            <h3 class="font-bold text-slate-800 text-sm uppercase tracking-wide mb-3 flex items-center gap-1.5 text-sky-800">
                                <span class="w-1.5 h-1.5 rounded-full bg-sky-500"></span> Business Information
                            </h3>
                            <ul class="space-y-1 text-xs sm:text-sm text-slate-500 font-medium">
                                <li>• Pharmacy Name</li>
                                <li>• Owner Name</li>
                                <li>• Business Address</li>
                                <li>• GST Number</li>
                                <li>• Email Address</li>
                                <li>• Contact Information</li>
                            </ul>
                        </div>

                        <div class="p-5 rounded-xl border border-slate-100 bg-white shadow-sm hover:shadow-md transition-shadow">
                            <h3 class="font-bold text-slate-800 text-sm uppercase tracking-wide mb-3 flex items-center gap-1.5 text-teal-800">
                                <span class="w-1.5 h-1.5 rounded-full bg-teal-500"></span> Customer Information
                            </h3>
                            <ul class="space-y-1 text-xs sm:text-sm text-slate-500 font-medium">
                                <li>• Customer Name</li>
                                <li>• Mobile Number</li>
                                <li>• Prescription Details (if entered)</li>
                                <li>• Purchase History</li>
                            </ul>
                        </div>

                        <div class="p-5 rounded-xl border border-slate-100 bg-white shadow-sm hover:shadow-md transition-shadow">
                            <h3 class="font-bold text-slate-800 text-sm uppercase tracking-wide mb-3 flex items-center gap-1.5 text-indigo-800">
                                <span class="w-1.5 h-1.5 rounded-full bg-indigo-500"></span> Inventory Information
                            </h3>
                            <ul class="space-y-1 text-xs sm:text-sm text-slate-500 font-medium">
                                <li>• Medicine Details</li>
                                <li>• Stock Records</li>
                                <li>• Supplier Information</li>
                                <li>• Expiry Dates</li>
                                <li>• Sales and Purchase Records</li>
                            </ul>
                        </div>

                        <div class="p-5 rounded-xl border border-slate-100 bg-white shadow-sm hover:shadow-md transition-shadow">
                            <h3 class="font-bold text-slate-800 text-sm uppercase tracking-wide mb-3 flex items-center gap-1.5 text-slate-800">
                                <span class="w-1.5 h-1.5 rounded-full bg-slate-500"></span> Technical Information
                            </h3>
                            <ul class="space-y-1 text-xs sm:text-sm text-slate-500 font-medium">
                                <li>• IP Address</li>
                                <li>• Browser Information</li>
                                <li>• Device Information</li>
                                <li>• Login Time and Activity Logs</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- 2. How We Use Your Information -->
                <div>
                    <h2 class="text-xl sm:text-2xl font-bold font-display text-sky-950 mb-3 flex items-center gap-2">
                        <span class="text-sky-600 font-mono text-base bg-sky-50 border border-sky-100 rounded-lg w-7 h-7 flex items-center justify-center font-bold">02</span>
                        How We Use Your Information
                    </h2>
                    <ul class="space-y-2 mt-3 list-none pl-1">
                        <li class="flex items-start gap-2.5">
                            <span class="h-5 w-5 shrink-0 bg-sky-50 border border-sky-100 rounded-md flex items-center justify-center text-sky-600 font-mono text-xs font-bold mt-0.5">✓</span>
                            <span>Provide and maintain Pharmovix services.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="h-5 w-5 shrink-0 bg-sky-50 border border-sky-100 rounded-md flex items-center justify-center text-sky-600 font-mono text-xs font-bold mt-0.5">✓</span>
                            <span>Manage inventory, billing, and reports.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="h-5 w-5 shrink-0 bg-sky-50 border border-sky-100 rounded-md flex items-center justify-center text-sky-600 font-mono text-xs font-bold mt-0.5">✓</span>
                            <span>Send WhatsApp notifications for stock and expiry alerts.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="h-5 w-5 shrink-0 bg-sky-50 border border-sky-100 rounded-md flex items-center justify-center text-sky-600 font-mono text-xs font-bold mt-0.5">✓</span>
                            <span>Improve software functionality and user experience.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="h-5 w-5 shrink-0 bg-sky-50 border border-sky-100 rounded-md flex items-center justify-center text-sky-600 font-mono text-xs font-bold mt-0.5">✓</span>
                            <span>Provide technical support.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="h-5 w-5 shrink-0 bg-sky-50 border border-sky-100 rounded-md flex items-center justify-center text-sky-600 font-mono text-xs font-bold mt-0.5">✓</span>
                            <span>Comply with applicable laws and regulations.</span>
                        </li>
                    </ul>
                </div>

                <!-- 3. Data Security -->
                <div>
                    <h2 class="text-xl sm:text-2xl font-bold font-display text-sky-950 mb-3 flex items-center gap-2">
                        <span class="text-sky-600 font-mono text-base bg-sky-50 border border-sky-100 rounded-lg w-7 h-7 flex items-center justify-center font-bold">03</span>
                        Data Security
                    </h2>
                    <p class="mb-4">
                        We implement industry-standard security measures to protect your data, including:
                    </p>
                    <ul class="space-y-2 list-none pl-1">
                        <li class="flex items-start gap-2.5">
                            <svg class="h-5 w-5 text-emerald-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                            <span>Encrypted connections (HTTPS)</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <svg class="h-5 w-5 text-emerald-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                            <span>Secure cloud infrastructure</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <svg class="h-5 w-5 text-emerald-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                            <span>Access control and authentication mechanisms</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <svg class="h-5 w-5 text-emerald-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                            <span>Regular backups and monitoring</span>
                        </li>
                    </ul>
                    <p class="italic text-xs text-slate-400 mt-4 leading-normal">
                        While we strive to protect your information, no method of transmission or storage is completely secure.
                    </p>
                </div>

                <!-- 4. Data Sharing -->
                <div>
                    <h2 class="text-xl sm:text-2xl font-bold font-display text-sky-950 mb-3 flex items-center gap-2">
                        <span class="text-sky-600 font-mono text-base bg-sky-50 border border-sky-100 rounded-lg w-7 h-7 flex items-center justify-center font-bold">04</span>
                        Data Sharing
                    </h2>
                    <p class="mb-3">
                        Pharmovix does <strong class="text-sky-950 underline decoration-sky-400 decoration-2">not sell, rent, or trade</strong> your personal or business information.
                    </p>
                    <p class="mb-3 text-slate-550 font-medium">Information may be shared with:</p>
                    <ul class="space-y-1 text-xs sm:text-sm text-slate-500 font-medium list-none pl-3">
                        <li>• Cloud hosting providers</li>
                        <li>• Payment gateway providers</li>
                        <li>• WhatsApp communication providers</li>
                        <li>• Government authorities when required by law</li>
                    </ul>
                </div>

                <!-- 5. Data Retention -->
                <div>
                    <h2 class="text-xl sm:text-2xl font-bold font-display text-sky-950 mb-2 flex items-center gap-2">
                        <span class="text-sky-600 font-mono text-base bg-sky-50 border border-sky-100 rounded-lg w-7 h-7 flex items-center justify-center font-bold">05</span>
                        Data Retention
                    </h2>
                    <p>
                        We retain your information for as long as necessary to provide our services and comply with legal obligations.
                    </p>
                </div>

                <!-- 6. Third-Party Services -->
                <div>
                    <h2 class="text-xl sm:text-2xl font-bold font-display text-sky-950 mb-3 flex items-center gap-2">
                        <span class="text-sky-600 font-mono text-base bg-sky-50 border border-sky-100 rounded-lg w-7 h-7 flex items-center justify-center font-bold">06</span>
                        Third-Party Services
                    </h2>
                    <p class="mb-3">Pharmovix may integrate with third-party services including:</p>
                    <ul class="space-y-1 text-xs sm:text-sm text-slate-500 font-medium list-none pl-3">
                        <li>• WhatsApp Business APIs</li>
                        <li>• Email service providers</li>
                        <li>• Cloud hosting services</li>
                        <li>• Analytics services</li>
                        <li>• Payment gateways</li>
                    </ul>
                </div>

                <!-- 7. Cookies and Analytics -->
                <div>
                    <h2 class="text-xl sm:text-2xl font-bold font-display text-sky-950 mb-2 flex items-center gap-2">
                        <span class="text-sky-600 font-mono text-base bg-sky-50 border border-sky-100 rounded-lg w-7 h-7 flex items-center justify-center font-bold">07</span>
                        Cookies and Analytics
                    </h2>
                    <p>
                        Our website and software may use cookies and analytics tools to improve performance and user experience. You may disable cookies through your browser settings.
                    </p>
                </div>

                <!-- 8. User Responsibilities -->
                <div>
                    <h2 class="text-xl sm:text-2xl font-bold font-display text-sky-950 mb-3 flex items-center gap-2">
                        <span class="text-sky-600 font-mono text-base bg-sky-50 border border-sky-100 rounded-lg w-7 h-7 flex items-center justify-center font-bold">08</span>
                        User Responsibilities
                    </h2>
                    <ul class="space-y-1 text-xs sm:text-sm text-slate-500 font-medium list-none pl-3">
                        <li>• Keep login credentials confidential.</li>
                        <li>• Provide accurate information.</li>
                        <li>• Use Pharmovix in compliance with applicable laws.</li>
                    </ul>
                </div>

                <!-- 9. Your Rights -->
                <div>
                    <h2 class="text-xl sm:text-2xl font-bold font-display text-sky-950 mb-3 flex items-center gap-2">
                        <span class="text-sky-600 font-mono text-base bg-sky-50 border border-sky-100 rounded-lg w-7 h-7 flex items-center justify-center font-bold">09</span>
                        Your Rights
                    </h2>
                    <ul class="space-y-1 text-xs sm:text-sm text-slate-500 font-medium list-none pl-3">
                        <li>• Access your data.</li>
                        <li>• Request correction of inaccurate information.</li>
                        <li>• Request deletion of data, subject to legal requirements.</li>
                        <li>• Withdraw consent where applicable.</li>
                    </ul>
                </div>

                <!-- 10. Children's Privacy -->
                <div>
                    <h2 class="text-xl sm:text-2xl font-bold font-display text-sky-950 mb-2 flex items-center gap-2">
                        <span class="text-sky-600 font-mono text-base bg-sky-50 border border-sky-100 rounded-lg w-7 h-7 flex items-center justify-center font-bold">10</span>
                        Children's Privacy
                    </h2>
                    <p>
                        Pharmovix services are intended for businesses and are not directed toward individuals under the age of 18.
                    </p>
                </div>

                <!-- 11. Changes to This Privacy Policy -->
                <div>
                    <h2 class="text-xl sm:text-2xl font-bold font-display text-sky-950 mb-2 flex items-center gap-2">
                        <span class="text-sky-600 font-mono text-base bg-sky-50 border border-sky-100 rounded-lg w-7 h-7 flex items-center justify-center font-bold">11</span>
                        Changes to This Privacy Policy
                    </h2>
                    <p>
                        We may update this Privacy Policy from time to time. Changes will be posted on our website and become effective immediately.
                    </p>
                </div>

                <!-- 12. Contact Us -->
                <div>
                    <h2 class="text-xl sm:text-2xl font-bold font-display text-sky-950 mb-3 flex items-center gap-2">
                        <span class="text-sky-600 font-mono text-base bg-sky-50 border border-sky-100 rounded-lg w-7 h-7 flex items-center justify-center font-bold">12</span>
                        Contact Us
                    </h2>
                    <div class="p-5 rounded-xl border border-sky-100 bg-[#fbfdfd] flex flex-col sm:flex-row justify-between gap-4">
                        <div>
                            <strong class="text-sky-950 text-base sm:text-lg block">Pharmovix</strong>
                            <span class="text-xs text-slate-500 font-semibold uppercase tracking-wider block mb-3 font-mono">Powered by SpaceOn Technology</span>
                            <div class="space-y-1.5 text-xs sm:text-sm text-slate-600">
                                <div class="flex items-center gap-2">
                                    <svg class="h-4 w-4 text-sky-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                    </svg>
                                    <span>Website: <a href="https://www.pharmovix.com" class="text-sky-600 font-semibold hover:underline">www.pharmovix.com</a></span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg class="h-4 w-4 text-sky-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <span>Email: <a href="mailto:info@pharmovix.com" class="text-sky-600 font-semibold hover:underline">info@pharmovix.com</a></span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg class="h-4 w-4 text-sky-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    <span>Phone: <a href="tel:+917069182990" class="text-sky-600 font-semibold hover:underline">+91 70691 82990</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="sm:self-end">
                            <span class="inline-block px-3 py-1 bg-emerald-50 text-emerald-700 text-xs font-semibold rounded-full border border-emerald-100 flex items-center gap-1.5 font-mono">
                                <span class="h-1.5 w-1.5 rounded-full bg-emerald-500 animate-ping"></span>
                                Secure Communications
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Consent -->
                <div class="border-t border-slate-100 pt-6">
                    <h2 class="text-base sm:text-lg font-bold font-display text-sky-950 mb-1">Consent</h2>
                    <p class="text-xs sm:text-sm">
                        By using Pharmovix, you acknowledge that you have read, understood, and agreed to this Privacy Policy.
                    </p>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="mt-8 flex flex-col md:flex-row items-center justify-between text-xs text-slate-500 gap-4">
            <div class="flex items-center gap-2 sm:gap-4 font-medium text-slate-500">
                <span>&copy; <span id="current-year">2026</span> Pharmovix Inc. All rights reserved.</span>
                <span>|</span>
                <span>Powered by SpaceOn Technology</span>
            </div>
            <div class="flex items-center gap-1 text-slate-600 font-semibold font-mono text-[10px] uppercase tracking-wider bg-white rounded-lg px-2.5 py-1.5 border border-slate-200/60 shadow-sm">
                <svg class="w-3.5 h-3.5 text-emerald-500" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z" />
                </svg>
                SSL Encrypted Delivery
            </div>
        </footer>
    </div>

    <script>
        document.getElementById('current-year').textContent = new Date().getFullYear();
    </script>
</body>
</html>
