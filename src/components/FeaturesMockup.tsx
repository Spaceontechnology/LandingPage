import React from "react";

// 1. AI BILL SCANNER icon
const BillScannerIcon = () => (
  <svg viewBox="0 0 100 100" className="w-16 h-16 text-sky-800 shrink-0" fill="none" xmlns="http://www.w3.org/2000/svg">
    {/* Page outline */}
    <rect x="25" y="15" width="42" height="56" rx="4" stroke="currentColor" strokeWidth="4.5" strokeLinecap="round" strokeLinejoin="round" />
    {/* Page writing lines */}
    <line x1="35" y1="28" x2="57" y2="28" stroke="currentColor" strokeWidth="4.5" strokeLinecap="round" />
    <line x1="35" y1="40" x2="51" y2="40" stroke="currentColor" strokeWidth="4.5" strokeLinecap="round" />
    <line x1="35" y1="52" x2="43" y2="52" stroke="currentColor" strokeWidth="4.5" strokeLinecap="round" />
    {/* Magnifier Glass overlay at bottom right corner */}
    <circle cx="68" cy="68" r="12" fill="white" stroke="#0ea5e9" strokeWidth="4.5" />
    <line x1="76" y1="76" x2="86" y2="86" stroke="#0ea5e9" strokeWidth="4.5" strokeLinecap="round" />
  </svg>
);

// 2. AI AUTO STOCK ENTRY icon
const AutoStockIcon = () => (
  <svg viewBox="0 0 100 100" className="w-16 h-16 text-[#1e3a8a] shrink-0" fill="none" xmlns="http://www.w3.org/2000/svg">
    {/* 3D Box main path */}
    <path d="M50 14 L22 28 L50 42 L78 28 Z" stroke="currentColor" strokeWidth="4.5" strokeLinejoin="round" strokeLinecap="round" />
    <path d="M22 28 V60 L50 74 V42" stroke="currentColor" strokeWidth="4.5" strokeLinejoin="round" strokeLinecap="round" />
    <path d="M78 28 V46" stroke="currentColor" strokeWidth="4.5" strokeLinejoin="round" strokeLinecap="round" />
    {/* Flap details inside isometric box */}
    <path d="M35 21.5 L63 35.5" stroke="currentColor" strokeWidth="2.5" strokeDasharray="3 3" />
    {/* Check circle at bottom right */}
    <circle cx="72" cy="66" r="13" fill="white" stroke="#3b82f6" strokeWidth="4.5" />
    <path d="M66 66 L70 70 L78 60" stroke="#3b82f6" strokeWidth="4.5" strokeLinecap="round" strokeLinejoin="round" />
  </svg>
);

// 3. WHATSAPP EXPIRY ALERTS icon (High-fidelity custom WhatsApp logo green outlining)
const WhatsappGreenIcon = () => (
  <svg viewBox="0 0 24 24" className="w-16 h-16 text-[#22c55e] shrink-0" fill="none" stroke="currentColor" strokeWidth="2.1" strokeLinecap="round" strokeLinejoin="round" xmlns="http://www.w3.org/2000/svg">
    {/* Clean Chat Bubble shape */}
    <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" />
    {/* Micro-scaled high-fidelity Phone Handle filled inside */}
    <g transform="translate(6.6, 6.6) scale(0.45)">
      <path 
        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" 
        fill="currentColor" 
        stroke="none"
      />
    </g>
  </svg>
);

// 4. BUSINESS ANALYTICS icon (Bar chart with standard blue/tealy color tones)
const AnalyticsIcon = () => (
  <svg viewBox="0 0 100 100" className="w-16 h-16 text-[#0c4a6e] shrink-0" fill="none" xmlns="http://www.w3.org/2000/svg">
    {/* Y and X axes */}
    <line x1="20" y1="15" x2="20" y2="85" stroke="currentColor" strokeWidth="4.5" strokeLinecap="round" />
    <line x1="20" y1="85" x2="85" y2="85" stroke="currentColor" strokeWidth="4.5" strokeLinecap="round" />
    {/* Bar 1 */}
    <rect x="28" y="55" width="10" height="30" rx="1.5" fill="currentColor" />
    {/* Bar 2 */}
    <rect x="43" y="40" width="10" height="45" rx="1.5" fill="currentColor" />
    {/* Bar 3 */}
    <rect x="58" y="25" width="10" height="60" rx="1.5" fill="currentColor" />
    {/* Growth Indicator line with upward arrow */}
    <path d="M22 68 L33 50 L48 45 L63 20 L75 16" fill="none" stroke="#0ea5e9" strokeWidth="4" strokeLinecap="round" strokeLinejoin="round" />
    <path d="M68 16 H75 V23" fill="none" stroke="#0ea5e9" strokeWidth="4" strokeLinecap="round" strokeLinejoin="round" />
  </svg>
);

// 5. GST BILLING icon
const GstBillingIcon = () => (
  <svg viewBox="0 0 100 100" className="w-16 h-16 text-sky-800 shrink-0" fill="none" xmlns="http://www.w3.org/2000/svg">
    {/* Invoice doc sheet */}
    <rect x="25" y="15" width="42" height="56" rx="4" stroke="currentColor" strokeWidth="4.5" strokeLinecap="round" strokeLinejoin="round" />
    {/* Lines */}
    <line x1="33" y1="28" x2="59" y2="28" stroke="currentColor" strokeWidth="4.5" strokeLinecap="round" />
    <line x1="33" y1="40" x2="51" y2="40" stroke="currentColor" strokeWidth="4.5" strokeLinecap="round" />
    <line x1="33" y1="52" x2="43" y2="52" stroke="currentColor" strokeWidth="4.5" strokeLinecap="round" />
    {/* Indian Rupee circular badge on the bottom-right */}
    <circle cx="68" cy="68" r="14" fill="#1e3a8a" />
    {/* Rupee icon symbol '₹' detailed within badge */}
    <path d="M63 62 H72 M63 66 H71 M68 62 C68 62 68 70 63 70 M67 66 L71 74" stroke="white" strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round" />
  </svg>
);

export interface MockupFeatureData {
  title: string;
  description: string;
  icon: React.ReactNode;
}

export const featuresList: MockupFeatureData[] = [
  {
    title: "AI BILL SCANNER",
    description: "Upload bill image or PDF. AI extracts medicine details and auto-adds stock in seconds.",
    icon: <BillScannerIcon />,
  },
  {
    title: "AI AUTO STOCK ENTRY",
    description: "Scan invoice ➔ Verify ➔ Stock Added. Save 90% data entry time.",
    icon: <AutoStockIcon />,
  },
  {
    title: "WHATSAPP EXPIRY ALERTS",
    description: "Get expiry alerts directly on owner WhatsApp. Stay ahead, stay compliant.",
    icon: <WhatsappGreenIcon />,
  },
  {
    title: "WHATSAPP LOW STOCK ALERTS",
    description: "Instant notifications when stock reaches minimum level. Never miss reordering.",
    icon: <WhatsappGreenIcon />,
  },
  {
    title: "BUSINESS ANALYTICS",
    description: "Real-time insights on sales, profit, top products and much more to grow your business.",
    icon: <AnalyticsIcon />,
  },
  {
    title: "GST BILLING",
    description: "Fast & accurate billing with GST, e-invoice & e-way bill compliance.",
    icon: <GstBillingIcon />,
  },
];

export const FeaturesMockup: React.FC = () => {
  return (
    <section className="my-16 space-y-10" id="features-showcase-block">
      <div className="text-center max-w-3xl mx-auto space-y-3 px-4">
        <h2 className="text-2.5xl sm:text-4xl font-extrabold font-display text-slate-900 tracking-tight leading-normal">
          Introducing Pharmovix
        </h2>
        <p className="text-sm text-slate-600 font-light max-w-2xl mx-auto leading-relaxed">
          The future of pharmacy management is almost here. Experience highly accurate ERP systems, robust OCR bill scanning modules, and automated alert relays designed for modern distributors and pharmacies.
        </p>
      </div>

      {/* Grid container with exactly 6 custom responsive cards matching the user image style */}
      <div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-5 px-1 sm:px-4">
        {featuresList.map((feat, index) => (
          <div
            key={index}
            className="bg-white rounded-2xl border border-slate-200/90 p-6 flex flex-col items-center text-center justify-between min-h-[300px] shadow-sm hover:shadow-xl hover:border-slate-300 hover:-translate-y-1 transition-all duration-300 group"
          >
            {/* Centered Large Vector Icon */}
            <div className="w-16 h-16 flex items-center justify-center mb-5 group-hover:scale-105 transition-transform duration-200">
              {feat.icon}
            </div>

            {/* Content Stack */}
            <div className="flex-1 flex flex-col justify-start">
              {/* Bold Dark Blue Title */}
              <h3 className="text-blue-950 font-display font-extrabold text-[12.5px] tracking-wider uppercase mb-3.5 leading-snug">
                {feat.title}
              </h3>

              {/* Medium Slate Description */}
              <p className="text-[11px] text-slate-500 font-normal leading-relaxed max-w-[170px] mx-auto">
                {feat.description}
              </p>
            </div>
          </div>
        ))}
      </div>
    </section>
  );
};
