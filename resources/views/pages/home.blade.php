@extends('layouts.app')

@section('title', 'Patna Transport | Safe • Reliable • On-Time Travel Since Years | Boring Road, Patna')

@section('content')
<!-- HERO SECTION (Refined Soft Dark Wash with Clean Luminous Console & Gold Accents) -->
<section class="relative min-h-[90vh] pt-32 sm:pt-36 pb-20 flex flex-col items-center justify-center overflow-hidden bg-gradient-to-b from-[#1A2638] via-[#213046] to-[#283C56] border-b border-[#334B6B]/40">
    
    <!-- Hero Background Image with Balanced Visibility & Clear Text Legibility -->
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute inset-0 bg-gradient-to-b from-[#0B172A]/75 via-[#0B172A]/45 to-[#0B172A]/80 z-10"></div>
        <img
            src="{{ asset('images/patna_transport_fleet.jpg') }}"
            alt="Patna Transport Fleet"
            class="w-full h-full object-cover object-center opacity-80 filter saturate-115 contrast-105"
        />
        <!-- Ambient Champagne Gold & Ice Blue Glows -->
        <div class="motion-glow absolute top-1/4 left-1/4 w-96 h-96 bg-sky-400/15 rounded-full blur-3xl pointer-events-none"></div>
        <div class="motion-glow absolute top-1/3 right-1/4 w-80 h-80 bg-amber-400/10 rounded-full blur-3xl pointer-events-none"></div>
    </div>

    <div class="relative z-10 text-center px-4 w-full max-w-5xl mx-auto">
        
        <!-- Small Pill Tag with Airplane & Tagline -->
        <div class="motion-float-badge inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/15 backdrop-blur-md border border-white/25 text-amber-300 text-xs font-bold uppercase tracking-wider mb-6 shadow-md">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
            <span>✈️ 24x7 Cabs • Outstation • 🚗 Self-Drive Car Rentals on Rent</span>
        </div>

        <!-- Big Display Headline (Simple, Clean & Bold) -->
        <h1 class="text-4xl sm:text-6xl md:text-7xl font-bold tracking-tight mb-6 text-white leading-tight">
            Patna Transport <br class="hidden sm:block" />
            <span class="text-amber-400">24x7 Cabs & Self-Drive Rentals</span>
        </h1>

        <!-- Simple, Clear Subtitle with Address -->
        <p class="max-w-3xl mx-auto text-base sm:text-lg md:text-xl text-slate-200 font-normal mb-8 leading-relaxed px-4">
            Based at <strong>Boring Road, Patna</strong>. Reliable 24x7 city cabs, Patna Airport (PAT) pickup & drop, outstation trips across Bihar, and <strong>Self-Drive Cars on Rent</strong> (Thar, Scorpio, Brezza, Dzire) with hassle-free daily/weekly packages.
        </p>

        <!-- Primary Call to Action Buttons -->
        <div class="flex flex-wrap items-center justify-center gap-4 mb-12">
            <a href="tel:8877177161" class="btn-gold text-base font-bold px-8 py-4 flex items-center gap-3 shadow-xl hover:scale-105 transition-transform group">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                <span>CALL NOW: 8877177161</span>
            </a>
            <a href="{{ route('fleet') }}" class="btn-blue text-base font-bold px-8 py-4 flex items-center gap-3 shadow-xl hover:scale-105 transition-transform">
                <span>🚗 Cabs & Self-Drive Fares</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
            <a href="{{ route('contact') }}" class="px-8 py-4 rounded-full bg-white/10 hover:bg-white/20 text-white font-semibold text-base border border-white/25 backdrop-blur-md transition-all shadow-md">
                <span>Book Self-Drive / Cab</span>
            </a>
        </div>

        <!-- 4 Highlights Cards Grid (Luminous Clean Cards with Details) -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 max-w-5xl mx-auto mb-8">
            <div class="flex flex-col items-center p-5 bg-white/95 backdrop-blur-md rounded-3xl border border-white/60 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                <div class="w-12 h-12 bg-sky-100 text-[#004E92] rounded-2xl flex items-center justify-center mb-3 shadow-sm text-2xl">
                    📍
                </div>
                <span class="text-xs font-bold uppercase tracking-wider text-slate-500 mb-1">Our Location</span>
                <span class="text-[#0B172A] text-base sm:text-lg font-bold">Boring Road, Patna</span>
            </div>

            <div class="flex flex-col items-center p-5 bg-white/95 backdrop-blur-md rounded-3xl border-2 border-amber-300 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 bg-amber-50/50">
                <div class="w-12 h-12 bg-amber-100 text-amber-700 rounded-2xl flex items-center justify-center mb-3 shadow-sm text-2xl">
                    🚗
                </div>
                <span class="text-xs font-bold uppercase tracking-wider text-amber-600 mb-1">Self-Drive Rental</span>
                <span class="text-[#0B172A] text-base sm:text-lg font-bold">Thar, Scorpio, Dzire</span>
            </div>

            <div class="flex flex-col items-center p-5 bg-white/95 backdrop-blur-md rounded-3xl border border-white/60 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                <div class="w-12 h-12 bg-sky-100 text-[#004E92] rounded-2xl flex items-center justify-center mb-3 shadow-sm text-2xl">
                    ✈️
                </div>
                <span class="text-xs font-bold uppercase tracking-wider text-slate-500 mb-1">Airport Pickup</span>
                <span class="text-[#0B172A] text-base sm:text-lg font-bold">Patna Airport (PAT)</span>
            </div>

            <div class="flex flex-col items-center p-5 bg-white/95 backdrop-blur-md rounded-3xl border border-white/60 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                <div class="w-12 h-12 bg-emerald-100 text-emerald-700 rounded-2xl flex items-center justify-center mb-3 shadow-sm text-2xl">
                    💰
                </div>
                <span class="text-xs font-bold uppercase tracking-wider text-slate-500 mb-1">Best Rates</span>
                <span class="text-[#0B172A] text-base sm:text-lg font-bold">Rent ₹1,400/Day</span>
            </div>
        </div>

        <!-- Social Proof Under Highlights -->
        <div class="flex flex-wrap items-center justify-center gap-6 text-xs text-slate-200 font-medium">
            <span class="flex items-center gap-1.5">
                <span class="text-amber-300 font-bold">★ 4.96</span> from 50,000+ Happy Riders Across Bihar
            </span>
            <span class="text-slate-400">•</span>
            <span class="flex items-center gap-1.5">
                <span class="text-sky-300 font-bold">✓</span> 100% Police Verified Drivers
            </span>
            <span class="text-slate-400">•</span>
            <span class="flex items-center gap-1.5">
                <span class="text-amber-300 font-bold">📞</span> 24x7 Helpline: 8877177161
            </span>
        </div>

    </div>
</section>


<!-- RIDES FOR EVERY NEED (Light Blue & Gold Theme) -->
<section class="py-20 px-6 bg-white border-b border-[#D2E4F7]">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-16">
            <span class="text-amber-600 font-bold text-xs tracking-[0.3em] uppercase mb-3 block">Rides for Every Need</span>
            <h2 class="text-3xl sm:text-4xl font-bold text-[#0B172A]">Cab Services for Every Journey</h2>
            <p class="text-[#475569] text-sm sm:text-base max-w-xl mx-auto mt-3 font-normal">Whether it is your daily office commute or an airport pickup, we have the right cab ready for         <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- Service 1: 24x7 Cab Service -->
            <div class="bg-[#F0F6FD] border border-[#D2E4F7] p-8 rounded-[2rem] hover:shadow-xl transition-all duration-300 hover:-translate-y-1 group">
                <div class="w-14 h-14 bg-sky-100 text-[#004E92] rounded-2xl flex items-center justify-center mb-6 group-hover:bg-[#004E92] group-hover:text-white transition-colors shadow-sm">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-[#0B172A] mb-2">24x7 Cab Service</h3>
                <p class="text-[#475569] text-sm font-normal leading-relaxed">Round-the-clock city rides across Patna. Quick 3-5 minute pickup across Boring Road, Bailey Road & Patna Jn.</p>
            </div>

            <!-- Service 2: Self-Drive Car Rental on Rent -->
            <div class="bg-[#F0F6FD] border-2 border-amber-300 p-8 rounded-[2rem] hover:shadow-xl transition-all duration-300 hover:-translate-y-1 group bg-gradient-to-b from-amber-50/40 to-white">
                <div class="w-14 h-14 bg-amber-100 text-amber-700 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-amber-500 group-hover:text-white transition-colors shadow-sm text-2xl">
                    🚗
                </div>
                <div class="inline-block px-2.5 py-0.5 rounded-full bg-amber-400 text-slate-900 text-[10px] font-black uppercase tracking-wider mb-2">NEW FEATURE</div>
                <h3 class="text-xl font-bold text-[#0B172A] mb-2">Self-Drive Car Rental</h3>
                <p class="text-[#475569] text-sm font-normal leading-relaxed">Rent Thar 4x4, Scorpio Classic, Brezza & Dzire on daily/weekly rent. Complete privacy, Fastag enabled, minimal security deposit & doorstep delivery in Patna.</p>
            </div>

            <!-- Service 3: Airport Pickup & Drop -->
            <div class="bg-[#F0F6FD] border border-[#D2E4F7] p-8 rounded-[2rem] hover:shadow-xl transition-all duration-300 hover:-translate-y-1 group">
                <div class="w-14 h-14 bg-sky-100 text-[#004E92] rounded-2xl flex items-center justify-center mb-6 group-hover:bg-[#004E92] group-hover:text-white transition-colors shadow-sm">
                    <svg class="w-7 h-7 transform -rotate-45" fill="currentColor" viewBox="0 0 24 24"><path d="M21 16v-2l-8-5V3.5c0-.83-.67-1.5-1.5-1.5S10 2.67 10 3.5V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-[#0B172A] mb-2">Airport Pick & Drop</h3>
                <p class="text-[#475569] text-sm font-normal leading-relaxed">Flight-tracked Jay Prakash Narayan Airport (PAT) transfers. Zero delay charges if flights are rescheduled.</p>
            </div>

            <!-- Service 4: Outstation Trips -->
            <div class="bg-[#F0F6FD] border border-[#D2E4F7] p-8 rounded-[2rem] hover:shadow-xl transition-all duration-300 hover:-translate-y-1 group">
                <div class="w-14 h-14 bg-sky-100 text-[#004E92] rounded-2xl flex items-center justify-center mb-6 group-hover:bg-[#004E92] group-hover:text-white transition-colors shadow-sm">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/></svg>
                </div>
                <h3 class="text-xl font-bold text-[#0B172A] mb-2">Outstation Trips</h3>
                <p class="text-[#475569] text-sm font-normal leading-relaxed">Comfortable travel to Bodh Gaya, Rajgir, Nalanda, Muzaffarpur, Darbhanga & Varanasi with seasoned highway drivers.</p>
            </div>

        </div>
    </div>
</section>

<!-- POPULAR CABS SHOWCASE -->
<section class="py-20 px-6 bg-[#F0F6FD] border-b border-[#D2E4F7]">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-12 gap-4">
            <div>
                <span class="text-amber-600 font-bold text-xs tracking-[0.3em] uppercase mb-2 block">Our Fleet</span>
                <h2 class="text-3xl sm:text-4xl font-bold text-[#0B172A]">Choose Your Cab</h2>
            </div>
            <a href="{{ route('fleet') }}" class="btn-outline-blue px-6 py-2.5 text-xs font-semibold flex items-center gap-2 self-start sm:self-auto shadow-sm">
                <span>View Full Fleet (6 Cabs)</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Cab 1: Maruti Dzire -->
            <div class="card-clean overflow-hidden flex flex-col justify-between">
                <div>
                    <div class="h-52 overflow-hidden relative">
                        <img src="{{ asset('images/car_dzire.jpg') }}" alt="Maruti Suzuki Dzire Patna" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 left-4 bg-white/95 border border-[#C7E0FA] px-3 py-1 rounded-full text-xs font-bold text-[#0B172A] shadow-sm">
                            ⭐ CITY & AIRPORT FAVORITE
                        </span>
                        <span class="absolute top-4 right-4 bg-emerald-500 text-white px-2.5 py-0.5 rounded-full text-[10px] font-bold shadow-md">
                            🚗 SELF-DRIVE AVAILABLE
                        </span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="text-xl font-bold text-[#0B172A]">Maruti Suzuki Dzire</h3>
                            <span class="text-xl font-bold text-amber-600">₹11 <span class="text-xs text-slate-500 font-sans">/ KM</span></span>
                        </div>
                        <div class="text-[11px] font-bold text-emerald-700 mb-2">🚗 Self-Drive Rent: From ₹1,600 / Day</div>
                        <p class="text-xs text-[#475569] mb-4">Quiet, air-conditioned sedan ideal for Patna Airport transfers, city rides, or self-driving on rent.</p>
                        
                        <div class="flex items-center gap-4 text-xs font-medium text-slate-500 border-t border-[#E1EFFD] pt-3">
                            <span>👤 4 Passengers</span>
                            <span>🧳 3 Bags</span>
                            <span>❄️ AC Included</span>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0 space-y-2">
                    <a href="tel:8877177161" class="btn-blue w-full text-center py-3 text-xs block font-bold">
                        📞 Call to Book Dzire (8877177161)
                    </a>
                    <a href="https://wa.me/918877177161?text=Hi%20Patna%20Transport,%20I%20want%20to%20rent%20Dzire%20for%20Self-Drive." target="_blank" class="w-full text-center py-2 text-xs block font-bold text-emerald-800 bg-emerald-50 hover:bg-emerald-100 rounded-full border border-emerald-300">
                        💬 Rent for Self-Drive on WhatsApp
                    </a>
                </div>
            </div>

            <!-- Cab 2: Mahindra Scorpio -->
            <div class="card-clean overflow-hidden flex flex-col justify-between border-2 border-sky-300">
                <div>
                    <div class="h-52 overflow-hidden relative">
                        <img src="{{ asset('images/car_scorpio.jpg') }}" alt="Mahindra Scorpio Classic Patna" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 left-4 bg-[#004E92] text-white px-3 py-1 rounded-full text-xs font-bold shadow-md">
                            👑 HIGHWAY KING
                        </span>
                        <span class="absolute top-4 right-4 bg-emerald-500 text-white px-2.5 py-0.5 rounded-full text-[10px] font-bold shadow-md">
                            🚗 SELF-DRIVE AVAILABLE
                        </span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="text-xl font-bold text-[#0B172A]">Mahindra Scorpio</h3>
                            <span class="text-xl font-bold text-amber-600">₹16 <span class="text-xs text-slate-500 font-sans">/ KM</span></span>
                        </div>
                        <div class="text-[11px] font-bold text-emerald-700 mb-2">🚗 Self-Drive Rent: From ₹2,800 / Day</div>
                        <p class="text-xs text-[#475569] mb-4">Powerful, high-clearance SUV for outstation trips across Bihar, weddings, or self-driving on rent.</p>
                        
                        <div class="flex items-center gap-4 text-xs font-medium text-slate-500 border-t border-[#E1EFFD] pt-3">
                            <span>👤 7 Passengers</span>
                            <span>🧳 5 Bags</span>
                            <span>🏔️ All-Terrain</span>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0 space-y-2">
                    <a href="tel:8877177161" class="btn-blue w-full text-center py-3 text-xs block font-bold">
                        📞 Call to Book Scorpio (8877177161)
                    </a>
                    <a href="https://wa.me/918877177161?text=Hi%20Patna%20Transport,%20I%20want%20to%20rent%20Scorpio%20for%20Self-Drive." target="_blank" class="w-full text-center py-2 text-xs block font-bold text-emerald-800 bg-emerald-50 hover:bg-emerald-100 rounded-full border border-emerald-300">
                        💬 Rent for Self-Drive on WhatsApp
                    </a>
                </div>
            </div>

            <!-- Cab 3: Maruti Vitara Brezza -->
            <div class="card-clean overflow-hidden flex flex-col justify-between">
                <div>
                    <div class="h-52 overflow-hidden relative">
                        <img src="{{ asset('images/car_brezza.jpg') }}" alt="Maruti Suzuki Vitara Brezza Patna" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 left-4 bg-amber-500 text-slate-900 px-3 py-1 rounded-full text-xs font-bold shadow-sm">
                            👥 COMFORT SUV
                        </span>
                        <span class="absolute top-4 right-4 bg-emerald-500 text-white px-2.5 py-0.5 rounded-full text-[10px] font-bold shadow-md">
                            🚗 SELF-DRIVE AVAILABLE
                        </span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="text-xl font-bold text-[#0B172A]">Maruti Suzuki Brezza</h3>
                            <span class="text-xl font-bold text-amber-600">₹13 <span class="text-xs text-slate-500 font-sans">/ KM</span></span>
                        </div>
                        <div class="text-[11px] font-bold text-emerald-700 mb-2">🚗 Self-Drive Rent: From ₹2,200 / Day</div>
                        <p class="text-xs text-[#475569] mb-4">High seating, clean AC interior, and smooth ride for family city travel or self-driving on rent.</p>
                        
                        <div class="flex items-center gap-4 text-xs font-medium text-slate-500 border-t border-[#E1EFFD] pt-3">
                            <span>👤 5 Passengers</span>
                            <span>🧳 4 Bags</span>
                            <span>❄️ Chilled AC</span>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0 space-y-2">
                    <a href="tel:8877177161" class="btn-blue w-full text-center py-3 text-xs block font-bold">
                        📞 Call to Book Brezza (8877177161)
                    </a>
                    <a href="https://wa.me/918877177161?text=Hi%20Patna%20Transport,%20I%20want%20to%20rent%20Brezza%20for%20Self-Drive." target="_blank" class="w-full text-center py-2 text-xs block font-bold text-emerald-800 bg-emerald-50 hover:bg-emerald-100 rounded-full border border-emerald-300">
                        💬 Rent for Self-Drive on WhatsApp
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- DEDICATED SELF-DRIVE ON RENT SECTION -->
<section class="py-20 px-6 bg-gradient-to-b from-[#EBF4FE] to-white border-b border-[#D2E4F7]">
    <div class="max-w-6xl mx-auto">
        <div class="bg-gradient-to-br from-[#0B172A] via-[#10243E] to-[#0B172A] text-white rounded-[2.5rem] p-8 sm:p-14 border-2 border-amber-400/40 shadow-2xl relative overflow-hidden">
            <!-- Ambient Glow -->
            <div class="absolute -right-20 -top-20 w-80 h-80 bg-amber-400/10 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -left-20 -bottom-20 w-80 h-80 bg-sky-400/15 rounded-full blur-3xl pointer-events-none"></div>

            <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-7 space-y-4">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-400 text-slate-900 text-xs font-black uppercase tracking-wider">
                        🚗 SELF-DRIVE CAR RENTALS IN PATNA
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white leading-tight">
                        Rent a Car & Drive Yourself <br>
                        <span class="text-amber-400">Zero Driver Intrusion • 100% Privacy</span>
                    </h2>
                    <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                        Planning a family road trip, weekend outing, or wedding entry? Rent Mahindra Thar 4x4, Scorpio Classic, Brezza, Dzire or Swift on flexible <strong>Daily & Weekly Rent</strong> directly from Boring Road, Patna.
                    </p>

                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 pt-3">
                        <div class="p-3 bg-white/10 rounded-2xl border border-white/10 text-center">
                            <span class="text-xl block mb-1">⚡</span>
                            <span class="text-[11px] font-bold text-amber-300 block">Fast KYC</span>
                            <span class="text-[10px] text-slate-300">Aadhaar + DL</span>
                        </div>
                        <div class="p-3 bg-white/10 rounded-2xl border border-white/10 text-center">
                            <span class="text-xl block mb-1">📍</span>
                            <span class="text-[11px] font-bold text-amber-300 block">Door Delivery</span>
                            <span class="text-[10px] text-slate-300">Boring Rd / PAT</span>
                        </div>
                        <div class="p-3 bg-white/10 rounded-2xl border border-white/10 text-center">
                            <span class="text-xl block mb-1">🛡️</span>
                            <span class="text-[11px] font-bold text-amber-300 block">Easy Security</span>
                            <span class="text-[10px] text-slate-300">Minimal deposit</span>
                        </div>
                        <div class="p-3 bg-white/10 rounded-2xl border border-white/10 text-center">
                            <span class="text-xl block mb-1">🛣️</span>
                            <span class="text-[11px] font-bold text-amber-300 block">Unlimited KM</span>
                            <span class="text-[10px] text-slate-300">Flexible options</span>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-5 bg-white/10 backdrop-blur-md p-6 rounded-3xl border border-white/20 text-center space-y-4">
                    <span class="text-xs uppercase font-bold text-amber-300 tracking-wider block">Self-Drive Daily Rent Rates</span>
                    <div class="space-y-2 text-xs">
                        <div class="flex justify-between items-center py-2 border-b border-white/10">
                            <span class="font-bold text-white">Mahindra Thar 4x4</span>
                            <span class="text-amber-400 font-extrabold text-sm">₹3,500 / Day</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-white/10">
                            <span class="font-bold text-white">Mahindra Scorpio</span>
                            <span class="text-amber-400 font-extrabold text-sm">₹2,800 / Day</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-white/10">
                            <span class="font-bold text-white">Maruti Vitara Brezza</span>
                            <span class="text-amber-400 font-extrabold text-sm">₹2,200 / Day</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-white/10">
                            <span class="font-bold text-white">Maruti Dzire / Swift</span>
                            <span class="text-amber-400 font-extrabold text-sm">₹1,600 / Day</span>
                        </div>
                    </div>

                    <div class="pt-2 space-y-2">
                        <a href="https://wa.me/918877177161?text=Hi%20Patna%20Transport,%20I%20want%20to%20inquire%20about%20Self-Drive%20Car%20Rental." target="_blank" class="w-full bg-[#25D366] hover:bg-[#20ba5a] text-white py-3 px-4 rounded-full text-xs font-bold flex items-center justify-center gap-2 shadow-lg transition-transform hover:scale-105">
                            💬 WhatsApp for Self-Drive Booking
                        </a>
                        <a href="tel:8877177161" class="w-full bg-amber-400 hover:bg-amber-300 text-slate-900 py-3 px-4 rounded-full text-xs font-bold block shadow-md transition-transform hover:scale-105">
                            📞 Call 8877177161 for Instant Rental
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

        </div>
    </div>
</section>

<!-- SIMPLE TESTIMONIALS (Blue & Gold Card Styling) -->
<section class="py-20 px-6 bg-white border-b border-[#D2E4F7]">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-14">
            <span class="text-amber-600 font-bold text-xs tracking-[0.3em] uppercase mb-3 block">Real Rider Experiences</span>
            <h2 class="text-3xl sm:text-4xl font-bold text-[#0B172A]">What Our Riders Say</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="p-8 rounded-[2rem] bg-[#F0F6FD] border border-[#D2E4F7] space-y-4">
                <div class="flex text-amber-400 text-sm">★★★★★</div>
                <p class="text-sm text-[#334155] font-normal leading-relaxed">
                    "Booked a Dzire from Boring Road to Patna Airport. Cab arrived in 3 minutes, clean seats, polite driver, and the fare was exactly ₹899 as quoted."
                </p>
                <div class="pt-2">
                    <h4 class="font-bold text-sm text-[#0B172A]">Pooja Sharma</h4>
                    <span class="text-xs text-slate-500">Boring Road, Patna</span>
                </div>
            </div>

            <div class="p-8 rounded-[2rem] bg-[#F0F6FD] border border-[#D2E4F7] space-y-4">
                <div class="flex text-amber-400 text-sm">★★★★★</div>
                <p class="text-sm text-[#334155] font-normal leading-relaxed">
                    "Booked an airport cab for late night flight arrival at Patna Airport (PAT). The driver was already waiting outside with AC on. Safe and professional service."
                </p>
                <div class="pt-2">
                    <h4 class="font-bold text-sm text-[#0B172A]">Rahul Mehra</h4>
                    <span class="text-xs text-slate-500">Business Traveler</span>
                </div>
            </div>

            <div class="p-8 rounded-[2rem] bg-[#F0F6FD] border border-[#D2E4F7] space-y-4">
                <div class="flex text-amber-400 text-sm">★★★★★</div>
                <p class="text-sm text-[#334155] font-normal leading-relaxed">
                    "Took the Mahindra Scorpio for a weekend trip to Bodh Gaya and Rajgir with family. Excellent highway driving and completely transparent toll breakdown."
                </p>
                <div class="pt-2">
                    <h4 class="font-bold text-sm text-[#0B172A]">Amit Verma</h4>
                    <span class="text-xs text-slate-500">Family Outstation Trip</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA STRIP (Royal Navy + Golden Glow) -->
<section class="py-16 px-6 bg-[#F0F6FD]">
    <div class="max-w-5xl mx-auto bg-gradient-to-r from-[#0C2340] via-[#0F3057] to-[#0C2340] text-white rounded-[2.5rem] p-8 sm:p-14 text-center relative overflow-hidden shadow-2xl border border-amber-500/30">
        <div class="relative z-10 max-w-2xl mx-auto space-y-4">
            <span class="text-amber-400 font-bold text-xs uppercase tracking-widest block">Safe • Reliable • On-Time Travel Since Years</span>
            <h2 class="text-3xl sm:text-4xl font-bold leading-tight">Ready to Book Your Ride in Patna?</h2>
            <p class="text-sky-200 text-sm sm:text-base font-normal">
                Reserve online in under 60 seconds or call our 24x7 Boring Road dispatch office directly.
            </p>
            <div class="pt-4 flex flex-wrap items-center justify-center gap-4">
                <a href="tel:8877177161" class="btn-gold text-sm font-bold px-8 py-4 flex items-center gap-2 shadow-xl">
                    <svg class="w-4 h-4 text-slate-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    <span>CALL NOW 24x7: 8877177161</span>
                </a>
                <a href="{{ route('contact') }}" class="btn-outline-blue border-white/20 text-white hover:text-[#0B172A] px-6 py-4 text-sm font-semibold flex items-center gap-2">
                    <span>Contact & Dispatch Office</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- FAQS SECTION -->
<section class="py-20 px-6 bg-white border-t border-[#D2E4F7]">
    <div class="max-w-4xl mx-auto">
        <div class="text-center mb-14">
            <span class="text-amber-600 font-bold text-xs tracking-[0.3em] uppercase mb-3 block">Common Questions</span>
            <h2 class="text-3xl sm:text-4xl font-bold text-[#0B172A]">Frequently Asked Questions</h2>
        </div>

        <div class="space-y-4">
            <div class="border border-[#D2E4F7] rounded-2xl p-5 hover:border-sky-500 transition-colors bg-[#F0F6FD]">
                <button type="button" onclick="toggleFaq(1)" class="w-full text-left flex items-center justify-between font-bold text-base sm:text-lg text-[#0B172A]">
                    <span>Are the prices fixed or will they change during rush hour?</span>
                    <span id="faqIcon1" class="text-amber-600 text-xl font-bold">+</span>
                </button>
                <div id="faqContent1" class="hidden mt-3 text-sm text-[#475569] leading-relaxed border-t border-[#D2E4F7] pt-3">
                    Our fares are 100% fixed once you book. We do not charge surge pricing during peak morning hours or rain. The price shown on your booking confirmation is the exact price you pay.
                </div>
            </div>

            <div class="border border-[#D2E4F7] rounded-2xl p-5 hover:border-sky-500 transition-colors bg-[#F0F6FD]">
                <button type="button" onclick="toggleFaq(2)" class="w-full text-left flex items-center justify-between font-bold text-base sm:text-lg text-[#0B172A]">
                    <span>What happens if my flight is delayed for an airport pickup?</span>
                    <span id="faqIcon2" class="text-amber-600 text-xl font-bold">+</span>
                </button>
                <div id="faqContent2" class="hidden mt-3 text-sm text-[#475569] leading-relaxed border-t border-[#D2E4F7] pt-3">
                    If you share your flight number during booking, we monitor your flight's live status. Your driver will arrive when your flight lands, with up to 60 minutes of free waiting time at the terminal.
                </div>
            </div>

            <div class="border border-[#D2E4F7] rounded-2xl p-5 hover:border-sky-500 transition-colors bg-[#F0F6FD]">
                <button type="button" onclick="toggleFaq(3)" class="w-full text-left flex items-center justify-between font-bold text-base sm:text-lg text-[#0B172A]">
                    <span>Can I cancel or reschedule my ride?</span>
                    <span id="faqIcon3" class="text-amber-600 text-xl font-bold">+</span>
                </button>
                <div id="faqContent3" class="hidden mt-3 text-sm text-[#475569] leading-relaxed border-t border-[#D2E4F7] pt-3">
                    Yes! You can reschedule or cancel for free up to 1 hour before scheduled pickup for city rides, and up to 4 hours for outstation journeys.
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


