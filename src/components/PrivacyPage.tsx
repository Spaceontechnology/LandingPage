import React from "react";
import { Clock, ShieldCheck, ArrowLeft } from "lucide-react";

interface PrivacyPageProps {
  onBack: () => void;
}

export function PrivacyPage({ onBack }: PrivacyPageProps) {
  return (
    <div className="relative min-h-screen overflow-x-hidden bg-[#fafafa] font-sans selection:bg-sky-500/10 selection:text-sky-900 py-12 px-4 sm:px-6 lg:px-8">
      {/* Ambient Glowing Blobs */}
      <div className="absolute inset-0 pointer-events-none z-0 overflow-hidden">
        <div className="absolute top-[-5%] left-[-5%] w-[45%] h-[45%] rounded-full bg-sky-900/5 blur-[120px]" />
        <div className="absolute bottom-[5%] right-[-5%] w-[50%] h-[50%] rounded-full bg-teal-900/5 blur-[150px]" />
        <div className="absolute inset-0 opacity-[0.02]" style={{ backgroundImage: "radial-gradient(#38bdf8 1px, transparent 1px)", backgroundSize: "24px 24px" }} />
      </div>

      <div className="relative z-10 max-w-4xl mx-auto">
        {/* Header */}
        <header className="flex flex-col sm:flex-row items-center justify-between gap-4 border-b border-slate-200/80 pb-6 mb-8">
          <button onClick={onBack} className="flex items-center hover:opacity-90 transition-opacity bg-transparent border-0 cursor-pointer p-0">
            <img src="https://patelarsh.com/Pharmovix/PHARMOVIX.png" alt="Pharmovix Logo" className="h-10 sm:h-12 w-auto object-contain" referrerPolicy="no-referrer" />
          </button>
          
          <button
            onClick={onBack}
            className="inline-flex items-center gap-2 px-4 py-2 rounded-xl border border-slate-200 bg-white hover:bg-slate-50 text-xs font-bold text-slate-700 shadow-sm transition-all cursor-pointer"
          >
            <ArrowLeft className="w-4 h-4 text-slate-500" />
            Back to Home
          </button>
        </header>

        {/* Main Content Card */}
        <main className="bg-white/90 backdrop-blur-md border border-slate-200/80 rounded-2xl shadow-xl p-6 sm:p-10 leading-relaxed text-slate-600 text-sm sm:text-base">
          <h1 className="text-3xl sm:text-4xl font-extrabold text-sky-950 tracking-tight mb-2">Privacy Policy</h1>
          <p className="text-xs text-slate-400 font-medium mb-8 flex items-center gap-1.5 uppercase tracking-widest font-mono">
            <Clock className="w-3.5 h-3.5 text-slate-400" />
            Last Updated: June 2026
          </p>

          <div className="space-y-8">
            {/* Welcome Section */}
            <div>
              <p className="text-slate-600 sm:text-lg font-light leading-relaxed">
                Welcome to <span className="font-semibold text-sky-700">Pharmovix</span>, powered by <span className="font-semibold text-sky-700">SpaceOn Technology</span>. 
                We are committed to protecting your privacy and safeguarding your data. This Privacy Policy explains how we collect, use, and protect information when you use Pharmovix and related services.
              </p>
            </div>

            {/* 1. Information We Collect */}
            <div>
              <h2 className="text-xl sm:text-2xl font-bold text-sky-950 mb-4 flex items-center gap-2">
                <span className="text-sky-600 font-mono text-base bg-sky-50 border border-sky-100 rounded-lg w-7 h-7 flex items-center justify-center font-bold">01</span>
                Information We Collect
              </h2>
              
              <div className="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                <div className="p-5 rounded-xl border border-slate-100 bg-[#fbfdfd] shadow-sm hover:shadow-md transition-shadow">
                  <h3 className="font-bold text-sm uppercase tracking-wide mb-3 flex items-center gap-1.5 text-sky-800">
                    <span className="w-1.5 h-1.5 rounded-full bg-sky-500" /> Business Information
                  </h3>
                  <ul className="space-y-1 text-xs sm:text-sm text-slate-500 font-medium">
                    <li>• Pharmacy Name</li>
                    <li>• Owner Name</li>
                    <li>• Business Address</li>
                    <li>• GST Number</li>
                    <li>• Email Address</li>
                    <li>• Contact Information</li>
                  </ul>
                </div>

                <div className="p-5 rounded-xl border border-slate-100 bg-[#fbfdfd] shadow-sm hover:shadow-md transition-shadow">
                  <h3 className="font-bold text-sm uppercase tracking-wide mb-3 flex items-center gap-1.5 text-teal-800">
                    <span className="w-1.5 h-1.5 rounded-full bg-teal-500" /> Customer Information
                  </h3>
                  <ul className="space-y-1 text-xs sm:text-sm text-slate-500 font-medium">
                    <li>• Customer Name</li>
                    <li>• Mobile Number</li>
                    <li>• Prescription Details (if entered)</li>
                    <li>• Purchase History</li>
                  </ul>
                </div>

                <div className="p-5 rounded-xl border border-slate-100 bg-[#fbfdfd] shadow-sm hover:shadow-md transition-shadow">
                  <h3 className="font-bold text-sm uppercase tracking-wide mb-3 flex items-center gap-1.5 text-indigo-800">
                    <span className="w-1.5 h-1.5 rounded-full bg-indigo-500" /> Inventory Information
                  </h3>
                  <ul className="space-y-1 text-xs sm:text-sm text-slate-500 font-medium">
                    <li>• Medicine Details</li>
                    <li>• Stock Records</li>
                    <li>• Supplier Information</li>
                    <li>• Expiry Dates</li>
                    <li>• Sales and Purchase Records</li>
                  </ul>
                </div>

                <div className="p-5 rounded-xl border border-slate-100 bg-[#fbfdfd] shadow-sm hover:shadow-md transition-shadow">
                  <h3 className="font-bold text-sm uppercase tracking-wide mb-3 flex items-center gap-1.5 text-slate-800">
                    <span className="w-1.5 h-1.5 rounded-full bg-slate-500" /> Technical Information
                  </h3>
                  <ul className="space-y-1 text-xs sm:text-sm text-slate-500 font-medium">
                    <li>• IP Address</li>
                    <li>• Browser Information</li>
                    <li>• Device Information</li>
                    <li>• Login Time and Activity Logs</li>
                  </ul>
                </div>
              </div>
            </div>

            {/* 2. How We Use */}
            <div>
              <h2 className="text-xl sm:text-2xl font-bold text-sky-950 mb-3 flex items-center gap-2">
                <span className="text-sky-600 font-mono text-base bg-sky-50 border border-sky-100 rounded-lg w-7 h-7 flex items-center justify-center font-bold">02</span>
                How We Use Your Information
              </h2>
              <ul className="space-y-2 mt-3 list-none pl-1">
                {[
                  "Provide and maintain Pharmovix services.",
                  "Manage inventory, billing, and reports.",
                  "Send WhatsApp notifications for stock and expiry alerts.",
                  "Improve software functionality and user experience.",
                  "Provide technical support.",
                  "Comply with applicable laws and regulations."
                ].map((item, idx) => (
                  <li key={idx} className="flex items-start gap-2.5">
                    <span className="h-5 w-5 shrink-0 bg-sky-50 border border-sky-100 rounded-md flex items-center justify-center text-sky-600 font-mono text-xs font-bold mt-0.5">✓</span>
                    <span>{item}</span>
                  </li>
                ))}
              </ul>
            </div>

            {/* 3. Data Security */}
            <div>
              <h2 className="text-xl sm:text-2xl font-bold text-sky-950 mb-3 flex items-center gap-2">
                <span className="text-sky-600 font-mono text-base bg-sky-50 border border-sky-100 rounded-lg w-7 h-7 flex items-center justify-center font-bold">03</span>
                Data Security
              </h2>
              <p className="mb-4">
                We implement industry-standard security measures to protect your data, including:
              </p>
              <ul className="space-y-2 list-none pl-1">
                {[
                  "Encrypted connections (HTTPS)",
                  "Secure cloud infrastructure",
                  "Access control and authentication mechanisms",
                  "Regular backups and monitoring"
                ].map((item, idx) => (
                  <li key={idx} className="flex items-start gap-2.5">
                    <span className="h-5 w-5 shrink-0 bg-emerald-50 border border-emerald-100 rounded-md flex items-center justify-center text-emerald-600 font-mono text-xs font-bold mt-0.5">✓</span>
                    <span>{item}</span>
                  </li>
                ))}
              </ul>
              <p className="italic text-xs text-slate-400 mt-4 leading-normal">
                While we strive to protect your information, no method of transmission or storage is completely secure.
              </p>
            </div>

            {/* 4. Data Sharing */}
            <div>
              <h2 className="text-xl sm:text-2xl font-bold text-sky-950 mb-3 flex items-center gap-2">
                <span className="text-sky-600 font-mono text-base bg-sky-50 border border-sky-100 rounded-lg w-7 h-7 flex items-center justify-center font-bold">04</span>
                Data Sharing
              </h2>
              <p className="mb-3">
                Pharmovix does <strong className="text-sky-950 underline decoration-sky-400 decoration-2">not sell, rent, or trade</strong> your personal or business information.
              </p>
              <p className="mb-3 text-slate-500 font-medium">Information may be shared only with essential services including:</p>
              <ul className="space-y-1 text-xs sm:text-sm text-slate-500 font-medium list-none pl-3">
                <li>• Cloud hosting providers</li>
                <li>• Payment gateway providers</li>
                <li>• WhatsApp communication providers</li>
                <li>• Government authorities when required by law</li>
              </ul>
            </div>

            {/* 5. Data Retention */}
            <div>
              <h2 className="text-xl sm:text-2xl font-bold text-sky-950 mb-2 flex items-center gap-2">
                <span className="text-sky-600 font-mono text-base bg-sky-50 border border-sky-100 rounded-lg w-7 h-7 flex items-center justify-center font-bold">05</span>
                Data Retention
              </h2>
              <p>
                We retain your information for as long as necessary to provide our services and comply with legal obligations.
              </p>
            </div>

            {/* 6. Third-Party Services */}
            <div>
              <h2 className="text-xl sm:text-2xl font-bold text-sky-950 mb-3 flex items-center gap-2">
                <span className="text-sky-600 font-mono text-base bg-sky-50 border border-sky-100 rounded-lg w-7 h-7 flex items-center justify-center font-bold">06</span>
                Third-Party Services
              </h2>
              <p className="mb-3 font-medium text-slate-500">Pharmovix may integrate with:</p>
              <ul className="space-y-1 text-xs sm:text-sm text-slate-500 font-medium list-none pl-3">
                <li>• WhatsApp Business APIs</li>
                <li>• Email service providers</li>
                <li>• Cloud hosting services</li>
                <li>• Analytics services</li>
                <li>• Payment gateways</li>
              </ul>
            </div>

            {/* 7. Cookies and Analytics */}
            <div>
              <h2 className="text-xl sm:text-2xl font-bold text-sky-950 mb-2 flex items-center gap-2">
                <span className="text-sky-600 font-mono text-base bg-sky-50 border border-sky-100 rounded-lg w-7 h-7 flex items-center justify-center font-bold">07</span>
                Cookies and Analytics
              </h2>
              <p>
                Our website and software may use cookies and analytics tools to improve performance and user experience. You may disable cookies through your browser settings.
              </p>
            </div>

            {/* 8. User Responsibilities */}
            <div>
              <h2 className="text-xl sm:text-2xl font-bold text-sky-950 mb-3 flex items-center gap-2">
                <span className="text-sky-600 font-mono text-base bg-sky-50 border border-sky-100 rounded-lg w-7 h-7 flex items-center justify-center font-bold">08</span>
                User Responsibilities
              </h2>
              <ul className="space-y-1 text-xs sm:text-sm text-slate-500 font-medium list-none pl-3">
                <li>• Keep login credentials confidential.</li>
                <li>• Provide accurate information.</li>
                <li>• Use Pharmovix in compliance with applicable laws.</li>
              </ul>
            </div>

            {/* 9. Your Rights */}
            <div>
              <h2 className="text-xl sm:text-2xl font-bold text-sky-950 mb-3 flex items-center gap-2">
                <span className="text-sky-600 font-mono text-base bg-sky-50 border border-sky-100 rounded-lg w-7 h-7 flex items-center justify-center font-bold">09</span>
                Your Rights
              </h2>
              <ul className="space-y-1 text-xs sm:text-sm text-slate-500 font-medium list-none pl-3">
                <li>• Access your data.</li>
                <li>• Request correction of inaccurate information.</li>
                <li>• Request deletion of data, subject to legal requirements.</li>
                <li>• Withdraw consent where applicable.</li>
              </ul>
            </div>

            {/* 10. Children's Privacy */}
            <div>
              <h2 className="text-xl sm:text-2xl font-bold text-sky-950 mb-2 flex items-center gap-2">
                <span className="text-sky-600 font-mono text-base bg-sky-50 border border-sky-100 rounded-lg w-7 h-7 flex items-center justify-center font-bold">10</span>
                Children's Privacy
              </h2>
              <p>
                Pharmovix services are intended for businesses and are not directed toward individuals under the age of 18.
              </p>
            </div>

            {/* 11. Changes to This Privacy Policy */}
            <div>
              <h2 className="text-xl sm:text-2xl font-bold text-sky-950 mb-2 flex items-center gap-2">
                <span className="text-sky-600 font-mono text-base bg-sky-50 border border-sky-100 rounded-lg w-7 h-7 flex items-center justify-center font-bold">11</span>
                Changes to This Privacy Policy
              </h2>
              <p>
                We may update this Privacy Policy from time to time. Changes will be posted on our website and become effective immediately.
              </p>
            </div>

            {/* 12. Contact Us */}
            <div>
              <h2 className="text-xl sm:text-2xl font-bold text-sky-950 mb-3 flex items-center gap-2">
                <span className="text-sky-600 font-mono text-base bg-sky-50 border border-sky-100 rounded-lg w-7 h-7 flex items-center justify-center font-bold">12</span>
                Contact Us
              </h2>
              <div className="p-5 rounded-xl border border-sky-100 bg-[#fbfdfd] flex flex-col sm:flex-row justify-between gap-4">
                <div>
                  <strong className="text-sky-950 text-base sm:text-lg block">Pharmovix</strong>
                  <span className="text-xs text-slate-500 font-semibold uppercase tracking-wider block mb-3 font-mono">Powered by SpaceOn Technology</span>
                  <div className="space-y-1.5 text-xs sm:text-sm text-slate-600">
                    <div>Website: <a href="https://www.pharmovix.com" className="text-sky-600 font-semibold hover:underline">www.pharmovix.com</a></div>
                    <div>Email: <a href="mailto:info@pharmovix.com" className="text-sky-600 font-semibold hover:underline">info@pharmovix.com</a></div>
                    <div>Phone: <a href="tel:+917069182990" className="text-sky-600 font-semibold hover:underline">+91 70691 82990</a></div>
                  </div>
                </div>
                <div className="sm:self-end">
                  <span className="inline-block px-3 py-1 bg-emerald-50 text-emerald-700 text-xs font-semibold rounded-full border border-emerald-100 flex items-center gap-1.5 font-mono">
                    <span className="h-1.5 w-1.5 rounded-full bg-emerald-500 animate-ping" />
                    Secure Communications
                  </span>
                </div>
              </div>
            </div>

            {/* Consent */}
            <div className="border-t border-slate-100 pt-6">
              <h2 className="text-base sm:text-lg font-bold text-sky-950 mb-1">Consent</h2>
              <p className="text-xs sm:text-sm">
                By using Pharmovix, you acknowledge that you have read, understood, and agreed to this Privacy Policy.
              </p>
            </div>
          </div>
        </main>

        {/* Footer */}
        <footer className="mt-8 flex flex-col md:flex-row items-center justify-between text-xs text-slate-500 gap-4">
          <div className="flex items-center gap-2 sm:gap-4 font-medium text-slate-500">
            <span>&copy; {new Date().getFullYear()} Pharmovix Inc. All rights reserved.</span>
            <span>|</span>
            <span>Powered by SpaceOn Technology</span>
          </div>
          <div className="flex items-center gap-1 text-slate-600 font-semibold font-mono text-[10px] uppercase tracking-wider bg-white rounded-lg px-2.5 py-1.5 border border-slate-200/60 shadow-sm">
            <ShieldCheck className="w-3.5 h-3.5 text-emerald-500" />
            SSL Encrypted Delivery
          </div>
        </footer>
      </div>
    </div>
  );
}
