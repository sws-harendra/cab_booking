@extends('layouts.app')

@section('title', 'Our Cabs & Transparent Fares | Patna Transport | Atal path beside Pani Tanki near the fit spoon, 800024')

@section('content')
<!-- FLEET HERO HEADER (Light Blue Atmosphere with Golden Accents) -->
<section class="pt-32 sm:pt-36 pb-16 px-6 bg-gradient-to-b from-[#E2EEFB] via-[#F0F6FD] to-[#F0F6FD] border-b border-[#C7E0FA] text-center relative overflow-hidden">
    <!-- Ambient Glows -->
    <div class="absolute top-0 left-1/4 w-80 h-80 bg-sky-400/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute top-10 right-1/4 w-72 h-72 bg-amber-400/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-4xl mx-auto relative z-10">
        <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/90 border border-[#C7E0FA] text-[#004E92] text-xs font-bold uppercase tracking-wider mb-4 shadow-sm">
            <span class="w-2 h-2 rounded-full bg-amber-400"></span>
            Safe • Reliable • On-Time Travel Since Years
        </span>
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-[#0B172A] mb-4">
            Our Cabs & <span class="text-amber-500">Fixed Fares</span>
        </h1>
        <p class="text-[#475569] text-sm sm:text-base max-w-xl mx-auto font-normal leading-relaxed">
            Patna Transport fleet based at <strong>Atal path beside Pani Tanki near the fit spoon, 800024</strong>. Clean air-conditioned cabs, polite verified drivers, and 100% transparent rates in Indian Rupees with zero hidden surge.
        </p>

        <!-- Category Filter Buttons (Light Blue Pill Style) -->
        <div class="flex flex-wrap items-center justify-center gap-2 pt-8">
            <button type="button" onclick="filterCabs('all')" id="btnFilterAll" class="px-5 py-2 rounded-full text-xs font-bold uppercase tracking-wider transition-all bg-[#004E92] text-white shadow-md">
                All Vehicles (6)
            </button>
            <button type="button" onclick="filterCabs('selfdrive')" id="btnFilterSelfDrive" class="px-5 py-2 rounded-full text-xs font-bold uppercase tracking-wider transition-all bg-emerald-50 border border-emerald-300 text-emerald-800 hover:bg-emerald-100 flex items-center gap-1.5 shadow-sm">
                🚗 Self-Drive (Rent)
            </button>
            <button type="button" onclick="filterCabs('suv')" id="btnFilterSuv" class="px-5 py-2 rounded-full text-xs font-bold uppercase tracking-wider transition-all bg-white border border-[#C7E0FA] text-[#1E3A5F] hover:bg-[#E1EFFD]">
                SUVs
            </button>
            <button type="button" onclick="filterCabs('sedan')" id="btnFilterSedan" class="px-5 py-2 rounded-full text-xs font-bold uppercase tracking-wider transition-all bg-white border border-[#C7E0FA] text-[#1E3A5F] hover:bg-[#E1EFFD]">
                Sedans
            </button>
            <button type="button" onclick="filterCabs('van')" id="btnFilterVan" class="px-5 py-2 rounded-full text-xs font-bold uppercase tracking-wider transition-all bg-white border border-[#C7E0FA] text-[#1E3A5F] hover:bg-[#E1EFFD]">
                7-Seaters & Vans
            </button>
            <button type="button" onclick="filterCabs('electric')" id="btnFilterElectric" class="px-5 py-2 rounded-full text-xs font-bold uppercase tracking-wider transition-all bg-white border border-[#C7E0FA] text-[#1E3A5F] hover:bg-[#E1EFFD]">
                Electric Cabs
            </button>
        </div>
    </div>
</section>

<!-- FLEET CATALOG GRID -->
<section class="py-16 px-6 bg-[#F0F6FD]">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="fleetContainer">
            
            <!-- CAB 1: Maruti Suzuki Dzire -->
            <div class="cab-card sedan selfdrive card-clean overflow-hidden flex flex-col justify-between">
                <div>
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/car_dzire.jpg') }}" alt="Maruti Suzuki Dzire" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 left-4 bg-white/95 border border-[#C7E0FA] px-3 py-1 rounded-full text-xs font-bold text-[#0B172A] shadow-sm">
                            ⭐ CITY & AIRPORT FAVORITE
                        </span>
                        <span class="absolute top-4 right-4 bg-emerald-600 text-white px-2.5 py-0.5 rounded-full text-[10px] font-bold shadow-md">
                            🚗 SELF-DRIVE AVAILABLE
                        </span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="text-xl font-bold text-[#0B172A]">Maruti Suzuki Dzire</h3>
                            <span class="text-xl font-bold text-amber-600">₹11 <span class="text-xs text-slate-500 font-sans">/ KM</span></span>
                        </div>
                        <div class="text-[11px] font-bold text-emerald-700 mb-2">🚗 Self-Drive Rent: From ₹1,600 / Day</div>
                        <p class="text-xs text-[#475569] mb-4">Quiet, air-conditioned sedan. Ideal for Patna Airport (PAT) transfers, Boring Road, and daily city travel or self-drive rent.</p>

                        <div class="grid grid-cols-3 gap-2 py-3 border-y border-[#E1EFFD] text-center text-xs text-[#475569]">
                            <div>
                                <span class="text-[10px] text-[#64748B] block">SEATING</span>
                                <span class="font-bold text-[#0B172A]">4 Seats</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] block">LUGGAGE</span>
                                <span class="font-bold text-[#0B172A]">3 Bags</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] block">BASE FARE</span>
                                <span class="font-bold text-[#004E92]">₹899</span>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-1.5 pt-3">
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Chilled AC</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Self-Drive Rent</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Phone Charger</span>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0 space-y-2">
                    <button type="button" onclick="openDetailsModal('sedan')" class="btn-outline-blue w-full py-2.5 text-xs block text-center">
                        View Details & Features
                    </button>
                    <a href="tel:8877177161" class="btn-gold w-full py-2.5 text-xs block text-center font-bold shadow-md">
                        📞 Call to Book Dzire
                    </a>
                    <a href="https://wa.me/918877177161?text=Hi%20Patna%20Transport,%20I%20want%20to%20rent%20Dzire%20for%20Self-Drive." target="_blank" class="w-full text-center py-2 text-xs block font-bold text-emerald-800 bg-emerald-50 hover:bg-emerald-100 rounded-full border border-emerald-300">
                        💬 WhatsApp for Self-Drive Rent
                    </a>
                </div>
            </div>

            <!-- CAB 2: Mahindra Scorpio Classic -->
            <div class="cab-card suv selfdrive card-clean overflow-hidden flex flex-col justify-between border-2 border-sky-300">
                <div>
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/car_scorpio.jpg') }}" alt="Mahindra Scorpio Classic" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 left-4 bg-[#004E92] text-white px-3 py-1 rounded-full text-xs font-bold shadow-md">
                            👑 HIGHWAY KING
                        </span>
                        <span class="absolute top-4 right-4 bg-emerald-600 text-white px-2.5 py-0.5 rounded-full text-[10px] font-bold shadow-md">
                            🚗 SELF-DRIVE AVAILABLE
                        </span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="text-xl font-bold text-[#0B172A]">Mahindra Scorpio</h3>
                            <span class="text-xl font-bold text-amber-600">₹16 <span class="text-xs text-slate-500 font-sans">/ KM</span></span>
                        </div>
                        <div class="text-[11px] font-bold text-emerald-700 mb-2">🚗 Self-Drive Rent: From ₹2,800 / Day</div>
                        <p class="text-xs text-[#475569] mb-4">Commanding presence and high road clearance. Perfect for outstation Bihar trips, Bodh Gaya, weddings, or self-drive rent.</p>

                        <div class="grid grid-cols-3 gap-2 py-3 border-y border-[#E1EFFD] text-center text-xs text-[#475569]">
                            <div>
                                <span class="text-[10px] text-[#64748B] block">SEATING</span>
                                <span class="font-bold text-[#0B172A]">7 Seats</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] block">LUGGAGE</span>
                                <span class="font-bold text-[#0B172A]">5 Bags</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] block">BASE FARE</span>
                                <span class="font-bold text-[#004E92]">₹1,499</span>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-1.5 pt-3">
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Rear AC Vents</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Self-Drive Rent</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Highway Certified</span>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0 space-y-2">
                    <button type="button" onclick="openDetailsModal('suv')" class="btn-outline-blue w-full py-2.5 text-xs block text-center">
                        View Details & Features
                    </button>
                    <a href="tel:8877177161" class="btn-gold w-full py-2.5 text-xs block text-center font-bold shadow-md">
                        📞 Call to Book Scorpio
                    </a>
                    <a href="https://wa.me/918877177161?text=Hi%20Patna%20Transport,%20I%20want%20to%20rent%20Scorpio%20for%20Self-Drive." target="_blank" class="w-full text-center py-2 text-xs block font-bold text-emerald-800 bg-emerald-50 hover:bg-emerald-100 rounded-full border border-emerald-300">
                        💬 WhatsApp for Self-Drive Rent
                    </a>
                </div>
            </div>

            <!-- CAB 3: Maruti Suzuki Brezza -->
            <div class="cab-card suv selfdrive card-clean overflow-hidden flex flex-col justify-between">
                <div>
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/car_brezza.jpg') }}" alt="Maruti Suzuki Vitara Brezza" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 left-4 bg-amber-500 text-slate-900 px-3 py-1 rounded-full text-xs font-bold shadow-sm">
                            👥 COMFORT SUV
                        </span>
                        <span class="absolute top-4 right-4 bg-emerald-600 text-white px-2.5 py-0.5 rounded-full text-[10px] font-bold shadow-md">
                            🚗 SELF-DRIVE AVAILABLE
                        </span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="text-xl font-bold text-[#0B172A]">Maruti Suzuki Brezza</h3>
                            <span class="text-xl font-bold text-amber-600">₹13 <span class="text-xs text-slate-500 font-sans">/ KM</span></span>
                        </div>
                        <div class="text-[11px] font-bold text-emerald-700 mb-2">🚗 Self-Drive Rent: From ₹2,200 / Day</div>
                        <p class="text-xs text-[#475569] mb-4">High seating, clean AC interior, and smooth city/highway ride for comfortable travel across Bihar or self-drive rent.</p>

                        <div class="grid grid-cols-3 gap-2 py-3 border-y border-[#E1EFFD] text-center text-xs text-[#475569]">
                            <div>
                                <span class="text-[10px] text-[#64748B] block">SEATING</span>
                                <span class="font-bold text-[#0B172A]">5 Seats</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] block">LUGGAGE</span>
                                <span class="font-bold text-[#0B172A]">4 Bags</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] block">BASE FARE</span>
                                <span class="font-bold text-[#004E92]">₹1,199</span>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-1.5 pt-3">
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Chilled AC</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Self-Drive Rent</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Smooth Ride</span>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0 space-y-2">
                    <button type="button" onclick="openDetailsModal('van')" class="btn-outline-blue w-full py-2.5 text-xs block text-center">
                        View Details & Features
                    </button>
                    <a href="tel:8877177161" class="btn-gold w-full py-2.5 text-xs block text-center font-bold shadow-md">
                        📞 Call to Book Brezza
                    </a>
                    <a href="https://wa.me/918877177161?text=Hi%20Patna%20Transport,%20I%20want%20to%20rent%20Brezza%20for%20Self-Drive." target="_blank" class="w-full text-center py-2 text-xs block font-bold text-emerald-800 bg-emerald-50 hover:bg-emerald-100 rounded-full border border-emerald-300">
                        💬 WhatsApp for Self-Drive Rent
                    </a>
                </div>
            </div>

            <!-- CAB 4: Mahindra Thar 4x4 -->
            <div class="cab-card suv selfdrive card-clean overflow-hidden flex flex-col justify-between border-2 border-red-300 bg-gradient-to-b from-red-50/20 to-white">
                <div>
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/car_thar.jpg') }}" alt="Mahindra Thar 4x4" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 left-4 bg-red-600 text-white px-3 py-1 rounded-full text-xs font-bold shadow-sm">
                            🔥 THAR 4x4 VIP
                        </span>
                        <span class="absolute top-4 right-4 bg-emerald-600 text-white px-2.5 py-0.5 rounded-full text-[10px] font-bold shadow-md">
                            🚗 SELF-DRIVE TOP PICK
                        </span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="text-xl font-bold text-[#0B172A]">Mahindra Thar 4x4</h3>
                            <span class="text-xl font-bold text-amber-600">₹18 <span class="text-xs text-slate-500 font-sans">/ KM</span></span>
                        </div>
                        <div class="text-[11px] font-bold text-emerald-700 mb-2">🚗 Self-Drive Rent: From ₹3,500 / Day</div>
                        <p class="text-xs text-[#475569] mb-4">Commanding road presence, iconic red styling for VIP events, wedding entries, road trips, and self-drive rent.</p>

                        <div class="grid grid-cols-3 gap-2 py-3 border-y border-[#E1EFFD] text-center text-xs text-[#475569]">
                            <div>
                                <span class="text-[10px] text-[#64748B] block">SEATING</span>
                                <span class="font-bold text-[#0B172A]">4 Seats</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] block">LUGGAGE</span>
                                <span class="font-bold text-[#0B172A]">3 Bags</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] block">BASE FARE</span>
                                <span class="font-bold text-[#004E92]">₹1,699</span>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-1.5 pt-3">
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">4x4 Capability</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Self-Drive Rent</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">VIP Entrance</span>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0 space-y-2">
                    <button type="button" onclick="openDetailsModal('innova')" class="btn-outline-blue w-full py-2.5 text-xs block text-center">
                        View Details & Features
                    </button>
                    <a href="tel:8877177161" class="btn-gold w-full py-2.5 text-xs block text-center font-bold shadow-md">
                        📞 Call to Book Thar
                    </a>
                    <a href="https://wa.me/918877177161?text=Hi%20Patna%20Transport,%20I%20want%20to%20rent%20Thar%204x4%20for%20Self-Drive." target="_blank" class="w-full text-center py-2 text-xs block font-bold text-emerald-800 bg-emerald-50 hover:bg-emerald-100 rounded-full border border-emerald-300">
                        💬 WhatsApp for Self-Drive Rent
                    </a>
                </div>
            </div>

            <!-- CAB 5: Maruti Swift Special -->
            <div class="cab-card sedan selfdrive card-clean overflow-hidden flex flex-col justify-between">
                <div>
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/car_swift_red.jpg') }}" alt="Maruti Swift Special" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 left-4 bg-sky-600 text-white px-3 py-1 rounded-full text-xs font-bold shadow-sm">
                            ⚡ CITY EXPRESS
                        </span>
                        <span class="absolute top-4 right-4 bg-emerald-600 text-white px-2.5 py-0.5 rounded-full text-[10px] font-bold shadow-md">
                            🚗 SELF-DRIVE AVAILABLE
                        </span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="text-xl font-bold text-[#0B172A]">Maruti Swift</h3>
                            <span class="text-xl font-bold text-amber-600">₹10 <span class="text-xs text-slate-500 font-sans">/ KM</span></span>
                        </div>
                        <div class="text-[11px] font-bold text-emerald-700 mb-2">🚗 Self-Drive Rent: From ₹1,400 / Day</div>
                        <p class="text-xs text-[#475569] mb-4">Quick, economical city ride or self-drive rent for fast navigation across Boring Road, Bailey Road, and railway station.</p>

                        <div class="grid grid-cols-3 gap-2 py-3 border-y border-[#E1EFFD] text-center text-xs text-[#475569]">
                            <div>
                                <span class="text-[10px] text-[#64748B] block">SEATING</span>
                                <span class="font-bold text-[#0B172A]">4 Seats</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] block">LUGGAGE</span>
                                <span class="font-bold text-[#0B172A]">2 Bags</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] block">BASE FARE</span>
                                <span class="font-bold text-[#004E92]">₹799</span>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-1.5 pt-3">
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Quick Pickup</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Self-Drive Rent</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">AC Cab</span>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0 space-y-2">
                    <button type="button" onclick="openDetailsModal('electric')" class="btn-outline-blue w-full py-2.5 text-xs block text-center">
                        View Details & Features
                    </button>
                    <a href="tel:8877177161" class="btn-gold w-full py-2.5 text-xs block text-center font-bold shadow-md">
                        📞 Call to Book Swift
                    </a>
                    <a href="https://wa.me/918877177161?text=Hi%20Patna%20Transport,%20I%20want%20to%20rent%20Swift%20for%20Self-Drive." target="_blank" class="w-full text-center py-2 text-xs block font-bold text-emerald-800 bg-emerald-50 hover:bg-emerald-100 rounded-full border border-emerald-300">
                        💬 WhatsApp for Self-Drive Rent
                    </a>
                </div>
            </div>

            <!-- CAB 6: Patna Transport Fleet / Group -->
            <div class="cab-card van card-clean overflow-hidden flex flex-col justify-between">
                <div>
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/patna_transport_fleet.jpg') }}" alt="Patna Transport Entire Fleet" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 left-4 bg-white/95 border border-[#C7E0FA] px-3 py-1 rounded-full text-xs font-bold text-[#0B172A] shadow-sm">
                            🚌 GROUP & WEDDINGS
                        </span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="text-xl font-bold text-[#0B172A]">Patna Transport Group Fleet</h3>
                            <span class="text-xl font-bold text-amber-600">₹22 <span class="text-xs text-slate-500 font-sans">/ KM</span></span>
                        </div>
                        <p class="text-xs text-[#475569] mb-4">Book multiple cabs together for family weddings, pilgrimage tours to Bodh Gaya & Rajgir, or corporate events.</p>

                        <div class="grid grid-cols-3 gap-2 py-3 border-y border-[#E1EFFD] text-center text-xs text-[#475569]">
                            <div>
                                <span class="text-[10px] text-[#64748B] block">FLEET SIZE</span>
                                <span class="font-bold text-[#0B172A]">2 to 20 Cabs</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] block">CAPACITY</span>
                                <span class="font-bold text-[#0B172A]">50+ Riders</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] block">BASE FARE</span>
                                <span class="font-bold text-[#004E92]">Custom</span>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-1.5 pt-3">
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Verified Drivers</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">24x7 Coordinator</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Bihar Special</span>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0 space-y-2">
                    <button type="button" onclick="openDetailsModal('traveler')" class="btn-outline-blue w-full py-2.5 text-xs block text-center">
                        View Details & Features
                    </button>
                    <a href="tel:8877177161" class="btn-gold w-full py-2.5 text-xs block text-center font-bold shadow-md">
                        📞 Call to Book Fleet
                    </a>
                </div>
            </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="text-xl font-bold text-[#0B172A]">Executive Tour Traveler</h3>
                            <span class="text-xl font-bold text-amber-600">₹22 <span class="text-xs text-slate-500 font-sans">/ KM</span></span>
                        </div>
                        <p class="text-xs text-[#475569] mb-4">High roof, spacious seats, and huge boot space. Built for family tours to Bodh Gaya, Rajgir, and wedding parties.</p>

                        <div class="grid grid-cols-3 gap-2 py-3 border-y border-[#E1EFFD] text-center text-xs text-[#475569]">
                            <div>
                                <span class="text-[10px] text-[#64748B] block">SEATING</span>
                                <span class="font-bold text-[#0B172A]">12 Seats</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] block">LUGGAGE</span>
                                <span class="font-bold text-[#0B172A]">10+ Bags</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] block">BASE FARE</span>
                                <span class="font-bold text-[#004E92]">₹2,499</span>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-1.5 pt-3">
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">High Ceiling</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Huge Luggage Boot</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Bihar Tour Special</span>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0 space-y-2">
                    <button type="button" onclick="openDetailsModal('traveler')" class="btn-outline-blue w-full py-2.5 text-xs block text-center">
                        View Details & Features
                    </button>
                    <a href="tel:8877177161" class="btn-gold w-full py-2.5 text-xs block text-center font-bold shadow-md">
                        📞 Call to Book Traveler
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- MODAL: CAB DETAILS MODAL -->
<div id="detailsModal" class="fixed inset-0 z-[120] bg-black/40 backdrop-blur-md flex items-center justify-center p-4 hidden">
    <div class="bg-white rounded-[2rem] border-2 border-[#C7E0FA] max-w-xl w-full p-6 sm:p-8 relative shadow-2xl space-y-6">
        <button type="button" onclick="closeDetailsModal()" class="absolute top-5 right-5 text-slate-400 hover:text-[#0B172A] text-xl font-bold transition-colors">✕</button>
        
        <div>
            <span id="modalCategoryTag" class="text-xs font-bold uppercase tracking-wider text-amber-600 block">Cab Specifications</span>
            <h3 id="modalTitle" class="font-serif text-2xl font-bold text-[#0B172A] mt-1">Comfort Prime Sedan</h3>
        </div>

        <div class="h-48 rounded-2xl overflow-hidden border border-[#C7E0FA]">
            <img id="modalImage" src="{{ asset('images/hero_sedan.jpg') }}" alt="Cab Preview" class="w-full h-full object-cover">
        </div>

        <div class="grid grid-cols-3 gap-3 text-center text-xs">
            <div class="p-3 rounded-2xl bg-[#F0F6FD] border border-[#C7E0FA]">
                <span class="text-[#64748B] block text-[10px]">PASSENGERS</span>
                <span id="modalPax" class="font-bold text-[#0B172A]">4 Persons</span>
            </div>
            <div class="p-3 rounded-2xl bg-[#F0F6FD] border border-[#C7E0FA]">
                <span class="text-[#64748B] block text-[10px]">LUGGAGE</span>
                <span id="modalBags" class="font-bold text-[#0B172A]">3 Large Bags</span>
            </div>
            <div class="p-3 rounded-2xl bg-[#F0F6FD] border border-[#C7E0FA]">
                <span class="text-[#64748B] block text-[10px]">BASE FARE</span>
                <span id="modalFare" class="font-bold text-amber-600 text-sm font-serif">$35.00</span>
            </div>
        </div>

        <div class="space-y-2">
            <h4 class="text-xs font-bold uppercase tracking-wider text-[#0B172A]">What's Included with Patna Transport:</h4>
            <ul class="text-xs text-[#475569] space-y-1.5 font-medium">
                <li>✓ 100% Sanitized and cleaned interior before every trip</li>
                <li>✓ Verified, background-checked polite commercial driver</li>
                <li>✓ Working Chilled AC guaranteed on every ride</li>
                <li>✓ Free cancellation up to 1 hour before pickup</li>
            </ul>
        </div>

        <div class="flex items-center justify-between pt-4 border-t border-[#E1EFFD]">
            <button type="button" onclick="closeDetailsModal()" class="btn-outline-blue px-6 py-2.5 text-xs">Close</button>
            <a id="modalBookLink" href="tel:8877177161" class="btn-gold px-8 py-2.5 text-xs font-bold shadow-md">
                📞 Call to Book Now: 8877177161
            </a>
        </div>
    </div>
</div>

<!-- CALL & BOOKING STRIP -->
<section class="py-16 px-6 bg-white border-t border-[#C7E0FA]">
    <div class="max-w-5xl mx-auto p-8 sm:p-12 rounded-[2.5rem] bg-gradient-to-r from-[#002244] via-[#003B73] to-[#004E92] text-white flex flex-col sm:flex-row items-center justify-between gap-6 shadow-xl border border-sky-400/20">
        <div class="text-center sm:text-left space-y-2">
            <span class="text-amber-400 text-xs font-bold uppercase tracking-wider block">Safe • Reliable • On-Time Travel Since Years</span>
            <h3 class="text-2xl sm:text-3xl font-bold">Need a Cab in Patna Right Now?</h3>
            <p class="text-xs sm:text-sm text-sky-200">Local rides, Jay Prakash Narayan Airport (PAT) transfers, or outstation tours across Bihar.</p>
            <div class="flex flex-wrap items-center gap-3 text-xs text-sky-200 font-semibold pt-1">
                <span>📍 Atal path beside Pani Tanki near the fit spoon, 800024</span>
                <span>•</span>
                <span>⚡ 3-5 Min Pickup</span>
                <span>•</span>
                <span>₹ Fixed Fares</span>
            </div>
        </div>
        <div class="flex flex-col sm:flex-row items-center gap-3 shrink-0">
            <a href="tel:8877177161" class="btn-gold px-8 py-4 text-xs font-bold flex items-center gap-2 shadow-lg">
                <span>📞 CALL 24x7: 8877177161</span>
            </a>
            <a href="{{ route('contact') }}" class="btn-outline-blue border-white/30 text-white hover:text-slate-900 px-6 py-4 text-xs font-bold">
                <span>Contact & Office</span>
            </a>
        </div>
    </div>
</section>
@endsection


