<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmovix | Enterprise Pharma Management Software Suite</title>
    
    <!-- Google Typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS (CDN for standalone copy-paste ease) -->
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
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(226, 232, 240, 0.8);
            border-radius: 1rem;
            box-shadow: 0 20px 25px -5px rgba(148, 163, 184, 0.15);
        }
        .glass-input {
            width: 100%;
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 0.75rem;
            padding: 0.75rem 1rem;
            color: #0f172a;
            transition: all 0.2s ease-in-out;
            outline: none;
        }
        .glass-input::placeholder {
            color: #94a3b8;
        }
        .glass-input:focus {
            outline: none;
            box-shadow: 0 0 0 2px rgba(14, 165, 233, 0.15);
            border-color: #0ea5e9;
        }
        @keyframes floatGentle {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-8px) rotate(0.5deg); }
        }
        .animate-float {
            animation: floatGentle 8s ease-in-out infinite;
        }
    </style>
</head>
<body class="font-sans antialiased relative min-h-screen overflow-x-hidden selection:bg-sky-500/30 selection:text-sky-200">

    <!-- Floating Toast Notification Container (Top Right) -->
    <div id="toast-container" class="fixed top-5 right-5 z-50 flex flex-col gap-3 max-w-sm w-full pointer-events-none"></div>

    <!-- Ambient Glowing Blobs -->
    <div class="absolute inset-0 pointer-events-none z-0">
        <div class="absolute top-[-10%] left-[-10%] w-[50%] h-[50%] rounded-full bg-sky-900/10 blur-[120px]"></div>
        <div class="absolute bottom-[10%] right-[-10%] w-[60%] h-[60%] rounded-full bg-teal-900/10 blur-[150px]"></div>
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(#38bdf8 1px, transparent 1px); background-size: 24px 24px;"></div>
    </div>

    <!-- Outer Frame Container -->
    <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-6 flex flex-col min-h-screen justify-between">
        
        <!-- Header Section -->
        <header class="flex items-center justify-between border-b border-slate-200 pb-6 mb-8">
            <div class="flex items-center">
                <img src="https://patelarsh.com/Pharmovix/PHARMOVIX.png" alt="Pharmovix Logo" class="h-12 sm:h-14 w-auto object-contain" referrerpolicy="no-referrer">
            </div>
        </header>

        <!-- Main Display Grid -->
        <main class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center my-auto py-4">
            
            <!-- Left Grid Pane: Mission Pillars & Countdown -->
            <div class="lg:col-span-6 space-y-8 flex flex-col justify-center">
                
                <!-- Tagline Badge -->
                <div class="inline-flex self-start items-center gap-2 rounded-full bg-sky-50 px-3.5 py-1.5 text-xs font-semibold text-sky-700 border border-sky-100 shadow-sm">
                    <svg class="w-3.5 h-3.5 text-sky-500 animate-spin" style="animation-duration: 12s;" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.714-1.912a2 2 0 0 1-1.275-1.275z"/>
                        <path d="m5 3 1 2.5L8.5 6 6 7 5 9.5 4 7 1.5 6 4 5z"/>
                        <path d="m19 17 1 2.5 2.5.5-2.5 1-1 2.5-1-2.5-2.5-1 2.5-1z"/>
                    </svg>
                    <span>Enterprise Pharma ERP & Operations Suite</span>
                </div>

                <div class="space-y-4">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black font-display tracking-tight text-slate-900 leading-[1.1]">
                        Intelligent Software <br>
                        for Comprehensive <br>
                        <span class="bg-gradient-to-r from-sky-600 via-teal-600 to-indigo-600 bg-clip-text text-transparent">
                            Pharma Management
                        </span>
                    </h1>
                    <p class="text-slate-600 text-base sm:text-lg max-w-xl font-light leading-relaxed">
                        Pharmovix is engineering a next-generation, cloud-based Pharma ERP tailored for modern pharmacies, distributors, and healthcare businesses. 
                    </p>
                </div>

                <!-- Custom countdown ticker -->
                <div class="glass-panel p-6 bg-white/75 backdrop-blur-md relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-3 text-slate-100 pointer-events-none">
                        <svg class="w-12 h-12 stroke-[0.5]" fill="none" stroke="currentColor" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10"/>
                            <polyline points="12 6 12 12 16 14"/>
                        </svg>
                    </div>
                    <div class="text-xs uppercase font-semibold text-sky-600 tracking-wider mb-4 flex items-center gap-2 font-bold relative z-10">
                        <span class="h-2 w-2 rounded-full bg-sky-500"></span>
                        Targeting Software Release In
                    </div>
                    
                    <div class="grid grid-cols-4 gap-4 text-center">
                        <div class="bg-slate-50/70 rounded-xl p-3 border border-slate-100">
                          <div id="days" class="text-3xl sm:text-4xl font-bold font-mono text-slate-800 tracking-tight">00</div>
                          <div class="text-[10px] text-slate-500 font-semibold uppercase mt-1 tracking-wider">Days</div>
                        </div>
                        <div class="bg-slate-50/70 rounded-xl p-3 border border-slate-100">
                          <div id="hours" class="text-3xl sm:text-4xl font-bold font-mono text-sky-600 tracking-tight">00</div>
                          <div class="text-[10px] text-slate-500 font-semibold uppercase mt-1 tracking-wider">Hrs</div>
                        </div>
                        <div class="bg-slate-50/70 rounded-xl p-3 border border-slate-100">
                          <div id="minutes" class="text-3xl sm:text-4xl font-bold font-mono text-teal-600 tracking-tight">00</div>
                          <div class="text-[10px] text-slate-500 font-semibold uppercase mt-1 tracking-wider">Mins</div>
                        </div>
                        <div class="bg-slate-50/70 rounded-xl p-3 border border-slate-100">
                          <div id="seconds" class="text-3xl sm:text-4xl font-bold font-mono text-indigo-600 tracking-tight">00</div>
                          <div class="text-[10px] text-slate-500 font-semibold uppercase mt-1 tracking-wider">Secs</div>
                        </div>
                    </div>
                </div>



            </div>

            <!-- Right Grid Pane: High Fidelity Product Preview Image -->
            <div class="lg:col-span-6 flex items-center justify-center">
                <img src="https://patelarsh.com/SpaceOn%20Logo/Selected%20Project/IMAGE_PHARMOVIX.png" alt="Pharmovix ERP Platform Preview" class="w-full h-auto object-contain" referrerpolicy="no-referrer">
            </div>
 
        </main>

        <!-- Priority Waiting List Section - Moved Down -->
        <section class="relative z-10 max-w-3xl mx-auto w-full my-12" id="waiting-list">
            <div class="absolute -inset-1.5 bg-gradient-to-r from-sky-500/5 to-indigo-500/5 rounded-2xl blur-xl opacity-30"></div>
            <div class="relative glass-panel bg-white p-6 sm:p-8 md:p-10 border-slate-200 shadow-xl rounded-2xl overflow-hidden">
                
                <!-- ENQUIRY FORM PANEL (Toggle with JS) -->
                <div id="form-container">
                    <div class="mb-6">
                        <h2 class="text-2xl font-bold font-display text-slate-900 tracking-tight flex items-center gap-2">
                            <svg class="w-6 h-6 text-sky-600" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <rect width="20" height="14" x="2" y="7" rx="2" ry="2"/>
                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
                            </svg>
                            Join Priority Waiting List
                        </h2>
                        <p class="text-xs text-slate-500 mt-1">Our suite is in high-fidelity development. Join now we will notify you instantly when available.</p>
                    </div>

                    <form id="enquiry-form" class="space-y-4">
                        <!-- Name / Email inputs -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="space-y-1.5 font-sans">
                                <label class="text-[11px] font-bold text-slate-500 uppercase tracking-wider flex items-center gap-1">
                                    <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/>
                                        <circle cx="12" cy="7" r="4"/>
                                    </svg>
                                    Full Name <span class="text-rose-500">*</span>
                                </label>
                                <input type="text" id="name" required placeholder="Dr. Evelyn Carter" class="glass-input text-sm py-2.5 h-11">
                            </div>
                            <div class="space-y-1.5 font-sans">
                                <label class="text-[11px] font-bold text-slate-500 uppercase tracking-wider flex items-center gap-1">
                                    <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                        <rect width="20" height="16" x="2" y="4" rx="2"/>
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                                    </svg>
                                    Email Address <span class="text-rose-500">*</span>
                                </label>
                                <input type="email" id="email" required placeholder="e.carter@pharmacy.org" class="glass-input text-sm py-2.5 h-11">
                            </div>
                        </div>

                        <!-- Phone / Company inputs -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="space-y-1.5 font-sans">
                                <label class="text-[11px] font-bold text-slate-500 uppercase tracking-wider flex items-center gap-1">
                                    <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7a2 2 0 0 1 2 1.72v0z"/>
                                    </svg>
                                    Contact Number <span class="text-rose-500">*</span>
                                </label>
                                <input type="tel" id="phone" required placeholder="+1 (555) 304-4921" class="glass-input text-sm py-2.5 h-11">
                            </div>
                            <div class="space-y-1.5 font-sans">
                                <label class="text-[11px] font-bold text-slate-500 uppercase tracking-wider flex items-center gap-1">
                                    <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                        <rect width="16" height="20" x="4" y="2" rx="2" ry="2"/>
                                        <path d="M9 22v-4h6v4"/>
                                        <path d="M8 6h.01"/>
                                        <path d="M16 6h.01"/>
                                        <path d="M8 10h.01"/>
                                        <path d="M16 10h.01"/>
                                        <path d="M8 14h.01"/>
                                        <path d="M16 14h.01"/>
                                    </svg>
                                    Pharma Store Name <span class="text-rose-500">*</span>
                                </label>
                                <input type="text" id="company" required placeholder="e.g. Carter Pharmacy Solutions" class="glass-input text-sm py-2.5 h-11">
                            </div>
                        </div>

                        <!-- Interest (Hidden default selection for the waitlist) -->
                        <input type="hidden" id="interest" value="Priority Waiting List Signup">

                        <!-- Statement message -->
                        <div class="space-y-1.5 font-sans">
                            <label class="text-[11px] font-bold text-slate-500 uppercase tracking-wider flex items-center gap-1">
                                <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                                </svg>
                                Message / Note (Optional)
                            </label>
                            <textarea id="message" rows="3" placeholder="Outline any key requirements or custom modules you are most interested in..." class="glass-input text-sm py-3 min-h-[80px] max-h-[110px] resize-y"></textarea>
                        </div>


                        <!-- Submit button -->
                        <button type="submit" id="submit-btn" class="w-full flex items-center justify-center gap-2.5 rounded-xl bg-gradient-to-r from-sky-500 via-sky-600 to-indigo-600 px-5 py-3 h-12 text-sm font-semibold text-white shadow-lg shadow-sky-500/10 transition-all duration-200 hover:shadow-sky-500/20 active:scale-[0.99] cursor-pointer">
                            <span class="tracking-wide font-bold" id="btn-text">Register for Priority Notification</span>
                            <span id="btn-icon">
                                <svg class="w-4 h-4 text-sky-200" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <line x1="22" y1="2" x2="11" y2="13"/>
                                    <polyline points="22 2 15 22 11 13 2 9 22 2"/>
                                </svg>
                            </span>
                        </button>
                    </form>
                </div>

                <!-- SUCCESS RECEIPT PANEL (Initially hidden) -->
                <div id="success-container" class="hidden text-center py-6 space-y-6 animate-fade-in">
                    <div class="inline-flex items-center justify-center w-14 h-14 rounded-full bg-teal-50 border border-teal-200 text-teal-600 mb-2 shadow-sm">
                        <svg class="w-8 h-8 animate-bounce" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/>
                            <path d="m9 12 2 2 4-4"/>
                        </svg>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-2xl font-bold font-display text-slate-900">Subscription Active</h3>
                        <p class="text-xs text-teal-600 font-bold">Launch Priority Waiting List Registered</p>
                        <p class="text-xs text-slate-600 max-w-md mx-auto leading-relaxed" id="success-description">
                            Thank you! Your pharmacy has been successfully added to our priority waiting list. A detailed confirmation envelope has been dispatched to your mailbox when available.
                        </p>
                    </div>

                    <!-- Mini feedback summary of variables -->
                    <div class="text-left bg-slate-50 border border-slate-100 rounded-xl p-4 space-y-2.5 max-w-md mx-auto text-xs text-slate-700 shadow-inner">
                        <div class="flex justify-between border-b border-slate-200 pb-1.5 text-[10px] font-semibold text-slate-500 uppercase tracking-widest font-bold font-mono">
                            <span>Waiting List Spot Receipt</span>
                            <span class="text-teal-600 font-mono">STATUS: REGISTERED</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-slate-500">Full Name:</span>
                            <span id="summary-name" class="font-bold text-slate-900"></span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-slate-500">Corporate Email:</span>
                            <span id="summary-email" class="font-bold text-slate-900"></span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-slate-500">Contact Number:</span>
                            <span id="summary-phone" class="font-bold text-slate-900"></span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-slate-500">Pharma Store:</span>
                            <span id="summary-company" class="font-bold text-slate-900"></span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-slate-500">Interest level:</span>
                            <span id="summary-interest" class="font-medium text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200/80">Waiting List Member</span>
                        </div>
                        <div class="flex justify-between border-t border-slate-100 pt-2 text-[11px]">
                            <span class="text-slate-500">Secure Time Stamp:</span>
                            <span id="summary-timestamp" class="font-mono text-slate-600 font-medium"></span>
                        </div>
                    </div>

                    <div class="pt-2">
                        <button id="reset-btn" class="inline-flex items-center gap-1.5 px-4.5 py-2.5 rounded-xl border border-slate-200 text-xs font-semibold text-slate-700 bg-white shadow-sm hover:bg-slate-50 transition-all cursor-pointer">
                            Register Another Store
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <line x1="5" y1="12" x2="19" y2="12"/>
                                <polyline points="12 5 19 12 12 19"/>
                            </svg>
                        </button>
                    </div>
                </div>

            </div>
        </section>

        <!-- Feature Showcase Grid Section matching User's Mockup -->
        <section class="my-16 space-y-10" id="features-showcase-block">
            <div class="text-center max-w-3xl mx-auto space-y-3 px-4">
                <h2 class="text-2xl sm:text-4xl font-extrabold font-display text-slate-900 tracking-tight leading-normal">
                    Introducing Pharmovix
                </h2>
                <p class="text-sm text-slate-600 font-light max-w-2xl mx-auto leading-relaxed">
                    The future of pharmacy management is almost here. Experience highly accurate ERP systems, robust OCR bill scanning modules, and automated alert relays designed for modern distributors and pharmacies.
                </p>
            </div>

            <!-- Grid container with exactly 6 custom cards matching the user image style -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-5 px-1 sm:px-4">
                
                <!-- Card 1: AI Bill Scanner -->
                <div class="bg-white rounded-2xl border border-slate-200/90 p-6 flex flex-col items-center text-center justify-between min-h-[300px] shadow-sm hover:shadow-xl hover:border-slate-300 hover:-translate-y-1 transition-all duration-300 group">
                    <div class="w-16 h-16 flex items-center justify-center mb-5 group-hover:scale-105 transition-transform duration-200">
                        <svg viewBox="0 0 100 100" class="w-16 h-16 text-sky-800 shrink-0" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="25" y="15" width="42" height="56" rx="4" stroke="currentColor" stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round" />
                            <line x1="35" y1="28" x2="57" y2="28" stroke="currentColor" stroke-width="4.5" stroke-linecap="round" />
                            <line x1="35" y1="40" x2="51" y2="40" stroke="currentColor" stroke-width="4.5" stroke-linecap="round" />
                            <line x1="35" y1="52" x2="43" y2="52" stroke="currentColor" stroke-width="4.5" stroke-linecap="round" />
                            <circle cx="68" cy="68" r="12" fill="white" stroke="#0ea5e9" stroke-width="4.5" />
                            <line x1="76" y1="76" x2="86" y2="86" stroke="#0ea5e9" stroke-width="4.5" stroke-linecap="round" />
                        </svg>
                    </div>
                    <div class="flex-1 flex flex-col justify-start">
                        <h3 class="text-blue-950 font-display font-extrabold text-[12px] tracking-wider uppercase mb-3.5 leading-snug">
                            AI BILL SCANNER
                        </h3>
                        <p class="text-[11px] text-slate-500 font-normal leading-relaxed max-w-[170px] mx-auto">
                            Upload bill image or PDF. AI extracts medicine details and auto-adds stock in seconds.
                        </p>
                    </div>
                </div>

                <!-- Card 2: AI Auto Stock Entry -->
                <div class="bg-white rounded-2xl border border-slate-200/90 p-6 flex flex-col items-center text-center justify-between min-h-[300px] shadow-sm hover:shadow-xl hover:border-slate-300 hover:-translate-y-1 transition-all duration-300 group">
                    <div class="w-16 h-16 flex items-center justify-center mb-5 group-hover:scale-105 transition-transform duration-200">
                        <svg viewBox="0 0 100 100" class="w-16 h-16 text-[#1e3a8a] shrink-0" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M50 14 L22 28 C22 28 35 35 50 42 L78 28 Z" stroke="currentColor" stroke-width="4.5" stroke-linejoin="round" stroke-linecap="round" />
                            <path d="M22 28 V60 L50 74 V42" stroke="currentColor" stroke-width="4.5" stroke-linejoin="round" stroke-linecap="round" />
                            <path d="M78 28 V46" stroke="currentColor" stroke-width="4.5" stroke-linejoin="round" stroke-linecap="round" />
                            <circle cx="72" cy="66" r="13" fill="white" stroke="#3b82f6" stroke-width="4.5" />
                            <path d="M66 66 L70 70 L78 60" stroke="#3b82f6" stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="flex-1 flex flex-col justify-start">
                        <h3 class="text-blue-950 font-display font-extrabold text-[12px] tracking-wider uppercase mb-3.5 leading-snug">
                            AI AUTO STOCK ENTRY
                        </h3>
                        <p class="text-[11px] text-slate-500 font-normal leading-relaxed max-w-[170px] mx-auto">
                            Scan invoice ➔ Verify ➔ Stock Added. Save 90% data entry time.
                        </p>
                    </div>
                </div>

                <!-- Card 3: WhatsApp Expiry Alerts -->
                <div class="bg-white rounded-2xl border border-slate-200/90 p-6 flex flex-col items-center text-center justify-between min-h-[300px] shadow-sm hover:shadow-xl hover:border-slate-300 hover:-translate-y-1 transition-all duration-300 group">
                    <div class="w-16 h-16 flex items-center justify-center mb-5 group-hover:scale-105 transition-transform duration-200">
                        <svg viewBox="0 0 24 24" class="w-16 h-16 text-[#22c55e] shrink-0" fill="none" stroke="currentColor" stroke-width="2.1" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" />
                            <g transform="translate(6.6, 6.6) scale(0.45)">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" fill="currentColor" stroke="none" />
                            </g>
                        </svg>
                    </div>
                    <div class="flex-1 flex flex-col justify-start">
                        <h3 class="text-blue-950 font-display font-extrabold text-[12px] tracking-wider uppercase mb-3.5 leading-snug">
                            WHATSAPP EXPIRY ALERTS
                        </h3>
                        <p class="text-[11px] text-slate-500 font-normal leading-relaxed max-w-[170px] mx-auto">
                            Get expiry alerts directly on owner WhatsApp. Stay ahead, stay compliant.
                        </p>
                    </div>
                </div>

                <!-- Card 4: WhatsApp Low Stock Alerts -->
                <div class="bg-white rounded-2xl border border-slate-200/90 p-6 flex flex-col items-center text-center justify-between min-h-[300px] shadow-sm hover:shadow-xl hover:border-slate-300 hover:-translate-y-1 transition-all duration-300 group">
                    <div class="w-16 h-16 flex items-center justify-center mb-5 group-hover:scale-105 transition-transform duration-200">
                        <svg viewBox="0 0 24 24" class="w-16 h-16 text-[#22c55e] shrink-0" fill="none" stroke="currentColor" stroke-width="2.1" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" />
                            <g transform="translate(6.6, 6.6) scale(0.45)">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" fill="currentColor" stroke="none" />
                            </g>
                        </svg>
                    </div>
                    <div class="flex-1 flex flex-col justify-start">
                        <h3 class="text-blue-950 font-display font-extrabold text-[12px] tracking-wider uppercase mb-3.5 leading-snug">
                            WHATSAPP LOW STOCK ALERTS
                        </h3>
                        <p class="text-[11px] text-slate-500 font-normal leading-relaxed max-w-[170px] mx-auto">
                            Instant notifications when stock reaches minimum level. Never miss reordering.
                        </p>
                    </div>
                </div>

                <!-- Card 5: Business Analytics -->
                <div class="bg-white rounded-2xl border border-slate-200/90 p-6 flex flex-col items-center text-center justify-between min-h-[300px] shadow-sm hover:shadow-xl hover:border-slate-300 hover:-translate-y-1 transition-all duration-300 group">
                    <div class="w-16 h-16 flex items-center justify-center mb-5 group-hover:scale-105 transition-transform duration-200">
                        <svg viewBox="0 0 100 100" class="w-16 h-16 text-[#0c4a6e] shrink-0" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="20" y1="15" x2="20" y2="85" stroke="currentColor" stroke-width="4.5" stroke-linecap="round" />
                            <line x1="20" y1="85" x2="85" y2="85" stroke="currentColor" stroke-width="4.5" stroke-linecap="round" />
                            <rect x="28" y="55" width="10" height="30" rx="1.5" fill="currentColor" />
                            <rect x="43" y="40" width="10" height="45" rx="1.5" fill="currentColor" />
                            <rect x="58" y="25" width="10" height="60" rx="1.5" fill="currentColor" />
                            <path d="M22 68 L33 50 L48 45 L63 20 L75 16" fill="none" stroke="#0ea5e9" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M68 16 H75 V23" fill="none" stroke="#0ea5e9" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="flex-1 flex flex-col justify-start">
                        <h3 class="text-blue-950 font-display font-extrabold text-[12px] tracking-wider uppercase mb-3.5 leading-snug">
                            BUSINESS ANALYTICS
                        </h3>
                        <p class="text-[11px] text-slate-500 font-normal leading-relaxed max-w-[170px] mx-auto">
                            Real-time insights on sales, profit, top products and much more to grow your business.
                        </p>
                    </div>
                </div>

                <!-- Card 6: GST Billing -->
                <div class="bg-white rounded-2xl border border-slate-200/90 p-6 flex flex-col items-center text-center justify-between min-h-[300px] shadow-sm hover:shadow-xl hover:border-slate-300 hover:-translate-y-1 transition-all duration-300 group">
                    <div class="w-16 h-16 flex items-center justify-center mb-5 group-hover:scale-105 transition-transform duration-200">
                        <svg viewBox="0 0 100 100" class="w-16 h-16 text-sky-800 shrink-0" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="25" y="15" width="42" height="56" rx="4" stroke="currentColor" stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round" />
                            <line x1="33" y1="28" x2="59" y2="28" stroke="currentColor" stroke-width="4.5" stroke-linecap="round" />
                            <line x1="33" y1="40" x2="51" y2="40" stroke="currentColor" stroke-width="4.5" stroke-linecap="round" />
                            <line x1="33" y1="52" x2="43" y2="52" stroke="currentColor" stroke-width="4.5" stroke-linecap="round" />
                            <circle cx="68" cy="68" r="14" fill="#1e3a8a" />
                            <path d="M63 62 H72 M63 66 H71 M68 62 C68 62 68 70 63 70 M67 66 L71 74" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="flex-1 flex flex-col justify-start">
                        <h3 class="text-blue-950 font-display font-extrabold text-[12px] tracking-wider uppercase mb-3.5 leading-snug">
                            GST BILLING
                        </h3>
                        <p class="text-[11px] text-slate-500 font-normal leading-relaxed max-w-[170px] mx-auto">
                            Fast & accurate billing with GST, e-invoice & e-way bill compliance.
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <!-- Footer Area -->
        <footer class="border-t border-slate-200 pt-6 mt-8 flex flex-col md:flex-row items-center justify-between text-xs text-slate-500 gap-4">
            <div class="flex items-center gap-2.5 sm:gap-4 flex-wrap">
                <span>&copy; <span id="current-year"></span> Pharmovix Inc. All rights reserved.</span>
                <span class="text-slate-200">|</span>
                <span class="font-medium text-slate-600">Powered By SpaceOn Technology</span>
            </div>
            <div class="flex items-center gap-1 text-slate-600 font-medium">
                <svg class="w-4 h-4 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                SSL Encrypted Delivery
            </div>
        </footer>
    </div>

    <!-- Interactive JavaScript Logic -->
    <script>
        // Set actual year in footer
        document.getElementById('current-year').textContent = new Date().getFullYear();

        // Target Date Countdown: Oct 15, 2026 
        const targetLaunchDate = new Date("2026-10-15T09:00:00Z").getTime();

        function updateCountdown() {
            const now = new Date().getTime();
            const difference = targetLaunchDate - now;

            if (difference <= 0) {
                document.getElementById('days').innerText = "00";
                document.getElementById('hours').innerText = "00";
                document.getElementById('minutes').innerText = "00";
                document.getElementById('seconds').innerText = "00";
                return;
            }

            const days = Math.floor(difference / (1000 * 60 * 60 * 24));
            const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((difference % (1000 * 60)) / 1000);

            document.getElementById('days').innerText = String(days).padStart(2, '0');
            document.getElementById('hours').innerText = String(hours).padStart(2, '0');
            document.getElementById('minutes').innerText = String(minutes).padStart(2, '0');
            document.getElementById('seconds').innerText = String(seconds).padStart(2, '0');
        }
        setInterval(updateCountdown, 1000);
        updateCountdown();

        // State control elements
        const form = document.getElementById('enquiry-form');
        const submitBtn = document.getElementById('submit-btn');
        const btnText = document.getElementById('btn-text');
        const btnIcon = document.getElementById('btn-icon');
        
        const formContainer = document.getElementById('form-container');
        const successContainer = document.getElementById('success-container');
        const summaryName = document.getElementById('summary-name');
        const summaryEmail = document.getElementById('summary-email');
        const summaryPhone = document.getElementById('summary-phone');
        const summaryCompany = document.getElementById('summary-company');
        const summaryInterest = document.getElementById('summary-interest');
        const summaryTimestamp = document.getElementById('summary-timestamp');
        const resetBtn = document.getElementById('reset-btn');

        // Toast notification system
        function showToast(title, message, type = 'info') {
            const container = document.getElementById('toast-container');
            if (!container) return null;

            const toast = document.createElement('div');
            toast.className = `transform translate-x-full transition-all duration-300 ease-out flex items-start gap-3 p-4 rounded-xl shadow-xl border bg-white pointer-events-auto max-w-sm w-full`;
            
            let iconHtml = '';
            if (type === 'success') {
                toast.classList.add('border-teal-100');
                iconHtml = `
                    <div class="h-6 w-6 rounded-full bg-teal-50 border border-teal-200 flex items-center justify-center shrink-0 text-teal-600">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                    </div>`;
            } else if (type === 'error') {
                toast.classList.add('border-rose-100');
                iconHtml = `
                    <div class="h-6 w-6 rounded-full bg-rose-50 border border-rose-200 flex items-center justify-center shrink-0 text-rose-600">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <line x1="18" y1="6" x2="6" y2="18"/>
                            <line x1="6" y1="6" x2="18" y2="18"/>
                        </svg>
                    </div>`;
            } else if (type === 'loading') {
                toast.classList.add('border-sky-100');
                iconHtml = `
                    <div class="h-6 w-6 flex items-center justify-center shrink-0">
                        <span class="inline-block animate-spin h-4.5 w-4.5 rounded-full border-2 border-sky-600/30 border-t-sky-600"></span>
                    </div>`;
            } else {
                toast.classList.add('border-slate-100');
                iconHtml = `
                    <div class="h-6 w-6 rounded-full bg-indigo-50 border border-indigo-200 flex items-center justify-center shrink-0 text-indigo-600">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10"/>
                            <line x1="12" y1="16" x2="12" y2="12"/>
                            <line x1="12" y1="8" x2="12.01" y2="8"/>
                        </svg>
                    </div>`;
            }

            toast.innerHTML = `
                ${iconHtml}
                <div class="flex-1 min-w-0">
                    <span class="text-xs font-bold text-slate-800 block leading-tight">${title}</span>
                    <span class="text-[11px] text-slate-500 block mt-0.5 leading-normal">${message}</span>
                </div>
                <button class="text-slate-400 hover:text-slate-600 transition-colors shrink-0 items-center justify-center self-start" onclick="this.parentElement.remove()">
                    <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <line x1="18" y1="6" x2="6" y2="18"/>
                        <line x1="6" y1="6" x2="18" y2="18"/>
                    </svg>
                </button>
            `;

            container.appendChild(toast);

            setTimeout(() => {
                toast.classList.remove('translate-x-full');
            }, 10);

            if (type !== 'loading') {
                setTimeout(() => {
                    toast.classList.add('translate-x-full');
                    toast.style.opacity = '0';
                    setTimeout(() => {
                        toast.remove();
                    }, 300);
                }, 4500);
            }

            return toast;
        }

        let activeLoadingToast = null;

        // AJAX Form Submission
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            // Form properties extract
            const formData = {
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
                phone: document.getElementById('phone').value,
                company: document.getElementById('company').value,
                interest: document.getElementById('interest').value,
                message: document.getElementById('message').value
            };

            // Loading status display
            submitBtn.disabled = true;
            submitBtn.style.opacity = '0.7';
            btnText.innerText = "Registering Store Protocol...";
            btnIcon.innerHTML = `<span class="inline-block animate-spin h-4.5 w-4.5 rounded-full border-2 border-white/30 border-t-white"></span>`;

            activeLoadingToast = showToast("Processing Registration", "Encrypting transmission and dispatching connection packets...", "loading");

            // Send standard async fetch AJAX transaction to enquiry.php
            fetch('enquiry.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(formData)
            })
            .then(response => response.json())
            .then(data => {
                if (activeLoadingToast) {
                    activeLoadingToast.remove();
                    activeLoadingToast = null;
                }

                if (data.success) {
                    // Inject receipt values
                    summaryName.innerText = formData.name;
                    summaryEmail.innerText = formData.email;
                    summaryPhone.innerText = formData.phone;
                    summaryCompany.innerText = formData.company;
                    summaryTimestamp.innerText = new Date().toLocaleString();
                    
                    document.getElementById('success-description').innerHTML = `Thank you! Your pharmacy, <span class="text-sky-600 font-bold">${formData.company}</span>, has been safely registered. We will send launch bulletins directly to <span class="text-sky-600 font-semibold">${formData.email}</span> and text updates to <span class="text-sky-600 font-semibold">${formData.phone}</span> when available.`;

                    // Swap forms panel view layout smoothly
                    formContainer.classList.add('hidden');
                    successContainer.classList.remove('hidden');

                    showToast("Registration Success", "Your pharmacy store has been successfully registered!", "success");
                } else {
                    showToast("Subscription Error", data.message || "Failed to finalize registration. Please provide correct store coordinates.", "error");
                    
                    // Reset button states
                    submitBtn.disabled = false;
                    submitBtn.style.opacity = '1';
                    btnText.innerText = "Register for Priority Notification";
                    btnIcon.innerHTML = `<svg class="w-4 h-4 text-sky-200" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><line x1="22" y1="2" x2="11" y2="13"/><polyline points="22 2 15 22 11 13 2 9 22 2"/></svg>`;
                }
            })
            .catch(error => {
                console.error('AJAX Failure:', error);
                if (activeLoadingToast) {
                    activeLoadingToast.remove();
                    activeLoadingToast = null;
                }

                showToast("Subscription Error", "Network connection interrupted. Ensure server is active and retry.", "error");
                
                // Reset button states
                submitBtn.disabled = false;
                submitBtn.style.opacity = '1';
                btnText.innerText = "Register for Priority Notification";
                btnIcon.innerHTML = `<svg class="w-4 h-4 text-sky-200" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><line x1="22" y1="2" x2="11" y2="13"/><polyline points="22 2 15 22 11 13 2 9 22 2"/></svg>`;
            });
        });

        // Toggle back to input form
        resetBtn.addEventListener('click', function() {
            form.reset();
            
            submitBtn.disabled = false;
            submitBtn.style.opacity = '1';
            btnText.innerText = "Register for Priority Notification";
            btnIcon.innerHTML = `<svg class="w-4 h-4 text-sky-200" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><line x1="22" y1="2" x2="11" y2="13"/><polyline points="22 2 15 22 11 13 2 9 22 2"/></svg>`;

            successContainer.classList.add('hidden');
            formContainer.classList.remove('hidden');
        });
    </script>
</body>
</html>
