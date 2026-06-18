import React, { useState, useEffect } from "react";
import { motion, AnimatePresence } from "motion/react";
import { FeaturesMockup } from "./components/FeaturesMockup";
import {
  Beaker,
  Dna,
  Brain,
  Sparkles,
  User,
  Mail,
  Phone,
  Building,
  MessageSquare,
  Send,
  CheckCircle2,
  AlertTriangle,
  ChevronRight,
  ShieldCheck,
  Globe,
  ArrowRight,
  Lock,
  Clock,
  Briefcase,
  X,
  XCircle,
  Info
} from "lucide-react";

// Target launch date: October 15, 2026 at 09:00:00 UTC
const TARGET_LAUNCH_DATE = new Date("2026-10-15T09:00:00Z").getTime();

interface CountdownTime {
  days: number;
  hours: number;
  minutes: number;
  seconds: number;
}

interface Toast {
  id: string;
  title: string;
  message: string;
  type: "success" | "error" | "loading" | "info";
}

export default function App() {
  // Countdown State
  const [timeLeft, setTimeLeft] = useState<CountdownTime>({
    days: 0,
    hours: 0,
    minutes: 0,
    seconds: 0
  });

  // Form Field State
  const [formFields, setFormFields] = useState({
    name: "",
    email: "",
    phone: "",
    company: "",
    interest: "Priority Waiting List Signup",
    message: ""
  });

  // Form AJAX Status
  const [submitStatus, setSubmitStatus] = useState<
    "idle" | "submitting" | "success" | "error"
  >("idle");
  const [statusMessage, setStatusMessage] = useState<string>("");
  const [serverEnquiryReceipt, setServerEnquiryReceipt] = useState<any>(null);
  const [toasts, setToasts] = useState<Toast[]>([]);
  const [isPrivacyOpen, setIsPrivacyOpen] = useState(false);

  const showToast = (title: string, message: string, type: Toast["type"]) => {
    const id = Math.random().toString(36).substr(2, 9);
    setToasts((prev) => {
      const filtered = type === "loading" ? prev.filter(t => t.type !== "loading") : prev;
      return [...filtered, { id, title, message, type }];
    });

    if (type !== "loading") {
      setTimeout(() => {
        dismissToast(id);
      }, 4500);
    }
    return id;
  };

  const dismissToast = (id: string) => {
    setToasts((prev) => prev.filter((t) => t.id !== id));
  };

  // Handle Countdown Ticks
  useEffect(() => {
    const updateCountdown = () => {
      const now = new Date().getTime();
      const difference = TARGET_LAUNCH_DATE - now;

      if (difference <= 0) {
        setTimeLeft({ days: 0, hours: 0, minutes: 0, seconds: 0 });
        return;
      }

      const days = Math.floor(difference / (1000 * 60 * 60 * 24));
      const hours = Math.floor(
        (difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
      );
      const minutes = Math.floor(
        (difference % (1000 * 60 * 60)) / (1000 * 60)
      );
      const seconds = Math.floor((difference % (1000 * 60)) / 1000);

      setTimeLeft({ days, hours, minutes, seconds });
    };

    updateCountdown();
    const intervalId = setInterval(updateCountdown, 1000);

    return () => clearInterval(intervalId);
  }, []);

  // Handle Form Submission
  const handleFormSubmit = async (e: React.FormEvent) => {
    e.preventDefault();
    if (!formFields.name || !formFields.email || !formFields.phone || !formFields.company) {
      setSubmitStatus("error");
      showToast("Subscription Error", "Please fulfill all mandatory properties: Name, Email, Contact Number, and Pharma Store Name.", "error");
      return;
    }

    setSubmitStatus("submitting");
    const loadingId = showToast("Processing Registration", "Encrypting transmission and dispatching connection packets...", "loading");

    try {
      const response = await fetch("/api/enquiry", {
        method: "POST",
        headers: {
          "Content-Type": "application/json"
        },
        body: JSON.stringify(formFields)
      });

      const data = await response.json();
      dismissToast(loadingId);

      if (response.ok && data.success) {
        setSubmitStatus("success");
        setServerEnquiryReceipt({
          ...formFields,
          timestamp: new Date().toISOString(),
          isDemo: data.developmentMode || false
        });
        showToast("Registration Success", "Your pharmacy store has been successfully registered!", "success");
      } else {
        setSubmitStatus("error");
        showToast("Subscription Error", data.message || "A secure server connection handshake failed. Please attempt submission again.", "error");
      }
    } catch (err: any) {
      console.error("AJAX enquiry dispatch error:", err);
      dismissToast(loadingId);
      setSubmitStatus("error");
      showToast("Subscription Error", "Network connection interrupted. Ensure server is active and retry.", "error");
    }
  };

  // Reset Form for another Submission
  const handleResetForm = () => {
    setFormFields({
      name: "",
      email: "",
      phone: "",
      company: "",
      interest: "Priority Waiting List Signup",
      message: ""
    });
    setSubmitStatus("idle");
    setStatusMessage("");
    setServerEnquiryReceipt(null);
  };

  return (
    <div className="relative min-h-screen overflow-x-hidden bg-[#fafafa] font-sans selection:bg-sky-500/10 selection:text-sky-900">
      
      {/* Floating Toast Notification Container (Top Right) */}
      <div className="fixed top-5 right-5 z-50 flex flex-col gap-3 max-w-sm w-full pointer-events-none">
        <AnimatePresence>
          {toasts.map((toast) => (
            <motion.div
              key={toast.id}
              initial={{ opacity: 0, x: 100 }}
              animate={{ opacity: 1, x: 0 }}
              exit={{ opacity: 0, x: 100 }}
              className={`flex items-start gap-3 p-4 rounded-xl shadow-xl border bg-white pointer-events-auto max-w-sm w-full ${
                toast.type === "success"
                  ? "border-teal-100"
                  : toast.type === "error"
                  ? "border-rose-100"
                  : toast.type === "loading"
                  ? "border-sky-100"
                  : "border-slate-100"
              }`}
            >
              {toast.type === "success" && (
                <div className="h-6 w-6 rounded-full bg-teal-50 border border-teal-200 flex items-center justify-center shrink-0 text-teal-600">
                  <CheckCircle2 className="h-4 w-4" />
                </div>
              )}
              {toast.type === "error" && (
                <div className="h-6 w-6 rounded-full bg-rose-50 border border-rose-200 flex items-center justify-center shrink-0 text-rose-600">
                  <XCircle className="h-4 w-4" />
                </div>
              )}
              {toast.type === "loading" && (
                <div className="h-6 w-6 flex items-center justify-center shrink-0">
                  <span className="inline-block animate-spin h-4.5 w-4.5 rounded-full border-2 border-sky-600/30 border-t-sky-600" />
                </div>
              )}
              {toast.type === "info" && (
                <div className="h-6 w-6 rounded-full bg-indigo-50 border border-indigo-200 flex items-center justify-center shrink-0 text-indigo-600">
                  <Info className="h-4 w-4" />
                </div>
              )}
              <div className="flex-1 min-w-0">
                <span className="text-xs font-bold text-slate-800 block leading-tight">{toast.title}</span>
                <span className="text-[11px] text-slate-500 block mt-0.5 leading-normal">{toast.message}</span>
              </div>
              <button
                className="text-slate-400 hover:text-slate-600 transition-colors shrink-0 items-center justify-center self-start"
                onClick={() => dismissToast(toast.id)}
              >
                <X className="h-3.5 w-3.5" />
              </button>
            </motion.div>
          ))}
        </AnimatePresence>
      </div>

      {/* Dynamic Aesthetic Background Grids & Blobs */}
      <div className="absolute inset-0 pointer-events-none z-0">
        <div className="absolute top-[-10%] left-[-10%] w-[50%] h-[50%] rounded-full bg-sky-200/20 blur-[120px]" />
        <div className="absolute bottom-[10%] right-[-10%] w-[60%] h-[60%] rounded-full bg-teal-200/20 blur-[150px]" />
        <div 
          className="absolute inset-0 opacity-[0.05]" 
          style={{
            backgroundImage: "radial-gradient(#0ea5e9 1px, transparent 1px)",
            backgroundSize: "24px 24px"
          }} 
          rect-id="bg-grid-dots"
        />
      </div>

      {/* Primary Container */}
      <div className="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-6 flex flex-col min-h-screen justify-between">
        
        {/* Header Navigation Area */}
        <header className="flex items-center justify-between border-b border-slate-200 pb-6 mb-8">
          <div className="flex items-center">
            <img
              src="https://patelarsh.com/Pharmovix/PHARMOVIX.png"
              alt="Pharmovix Logo"
              className="h-12 sm:h-14 w-auto object-contain"
              referrerPolicy="no-referrer"
            />
          </div>
        </header>

        {/* Central Grid Content */}
        <main className="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center my-auto py-4">
          
          {/* Left Column: Vision, Info & Countdown */}
          <div className="lg:col-span-6 space-y-8 flex flex-col justify-center">
            
            {/* Slogan pill */}
            <div className="inline-flex self-start items-center gap-2 rounded-full bg-sky-50 px-3.5 py-1.5 text-xs font-semibold text-sky-700 border border-sky-100 shadow-sm">
              <Sparkles className="w-3.5 h-3.5 text-sky-500 animate-spin" style={{ animationDuration: "12s" }} />
              <span>Enterprise Pharma ERP & Operations Suite</span>
            </div>

            {/* Core Titles */}
            <div className="space-y-4">
              <h1 className="text-4xl sm:text-5xl lg:text-6xl font-black font-display tracking-tight text-slate-900 leading-[1.1]">
                Intelligent Software <br />
                for Comprehensive <br />
                <span className="bg-gradient-to-r from-sky-600 via-teal-600 to-indigo-600 bg-clip-text text-transparent">
                  Pharma Management
                </span>
              </h1>
              <p className="text-slate-600 text-base sm:text-lg max-w-xl font-light leading-relaxed">
                Pharmovix is engineering an ultra-secure, cloud-native ERP platform built to orchestrate pharmaceutical warehouse supply chains, streamline retail dispenser workflows, and ensure bulletproof compliance.
              </p>
            </div>

            {/* Micro Countdown Timer UI */}
            <div className="glass-panel p-6 border-slate-200 bg-white/75 backdrop-blur-md relative overflow-hidden">
              <div className="absolute top-0 right-0 p-3 text-slate-100 pointer-events-none">
                <Clock className="w-12 h-12 stroke-[0.5]" />
              </div>
              <div className="text-xs uppercase font-semibold text-sky-600 tracking-wider mb-4 flex items-center gap-2">
                <span className="h-2 w-2 rounded-full bg-sky-500" />
                Targeting Deployment In
              </div>
              <div className="grid grid-cols-4 gap-4 text-center">
                <div className="bg-slate-50 rounded-xl p-3 border border-slate-100/80 shadow-sm">
                  <div className="text-3xl sm:text-4xl font-bold font-mono text-slate-900 tracking-tight">
                    {String(timeLeft.days).padStart(2, "0")}
                  </div>
                  <div className="text-[10px] text-slate-400 font-semibold uppercase mt-1 tracking-wider">Days</div>
                </div>
                <div className="bg-slate-50 rounded-xl p-3 border border-slate-100/80 shadow-sm">
                  <div className="text-3xl sm:text-4xl font-bold font-mono text-sky-600 tracking-tight">
                    {String(timeLeft.hours).padStart(2, "0")}
                  </div>
                  <div className="text-[10px] text-slate-400 font-semibold uppercase mt-1 tracking-wider">Hrs</div>
                </div>
                <div className="bg-slate-50 rounded-xl p-3 border border-slate-100/80 shadow-sm">
                  <div className="text-3xl sm:text-4xl font-bold font-mono text-teal-600 tracking-tight">
                    {String(timeLeft.minutes).padStart(2, "0")}
                  </div>
                  <div className="text-[10px] text-slate-400 font-semibold uppercase mt-1 tracking-wider">Mins</div>
                </div>
                <div className="bg-slate-50 rounded-xl p-3 border border-slate-100/80 shadow-sm">
                  <div className="text-3xl sm:text-4xl font-bold font-mono text-indigo-600 tracking-tight">
                    {String(timeLeft.seconds).padStart(2, "0")}
                  </div>
                  <div className="text-[10px] text-slate-500 font-semibold uppercase mt-1 tracking-wider">Secs</div>
                </div>
              </div>
            </div>

          </div>

          {/* Right Column: High Fidelity Product Preview Image */}
          <div className="lg:col-span-6 flex items-center justify-center">
            <img 
              src="https://patelarsh.com/SpaceOn%20Logo/Selected%20Project/IMAGE_PHARMOVIX.png" 
              alt="Pharmovix ERP Platform Preview" 
              className="w-full h-auto object-contain"
              referrerPolicy="no-referrer"
            />
          </div>

        </main>

        {/* Priority Waiting List Section - Moved Down */}
        <section className="relative z-10 max-w-3xl mx-auto w-full my-12" id="waiting-list">
          <div className="absolute -inset-1.5 bg-gradient-to-r from-sky-500/5 to-indigo-500/5 rounded-2xl blur-xl opacity-30" />
          <div className="relative glass-panel bg-white p-6 sm:p-8 md:p-10 border-slate-200 shadow-xl rounded-2xl overflow-hidden">
            <AnimatePresence mode="wait">
              {submitStatus !== "success" ? (
                <motion.div
                  key="enquiry-form"
                  initial={{ opacity: 0, y: 15 }}
                  animate={{ opacity: 1, y: 0 }}
                  exit={{ opacity: 0, y: -15 }}
                  transition={{ duration: 0.25 }}
                >
                  <div className="mb-6">
                    <h2 className="text-2xl font-bold font-display text-slate-900 tracking-tight flex items-center gap-2">
                      <Briefcase className="w-6 h-6 text-sky-600" />
                      Join Priority Waiting List
                    </h2>
                    <p className="text-xs text-slate-500 mt-1">
                      Our suite is in high-fidelity development. Join now we will notify you instantly when available.
                    </p>
                  </div>

                  <form onSubmit={handleFormSubmit} className="space-y-4">
                    
                    {/* Name & Email Group */}
                    <div className="grid grid-cols-1 sm:grid-cols-2 gap-4">
                      <div className="space-y-1.5">
                        <label className="text-[11px] font-bold text-slate-500 uppercase tracking-wider flex items-center gap-1">
                          <User className="w-3 h-3 text-slate-400" />
                          Full Name <span className="text-rose-500">*</span>
                        </label>
                        <input
                          type="text"
                          required
                          placeholder="Dr. Evelyn Carter"
                          value={formFields.name}
                          onChange={(e) =>
                            setFormFields({ ...formFields, name: e.target.value })
                          }
                          className="glass-input text-sm py-2.5 h-11"
                        />
                      </div>

                      <div className="space-y-1.5">
                        <label className="text-[11px] font-bold text-slate-500 uppercase tracking-wider flex items-center gap-1">
                          <Mail className="w-3 h-3 text-slate-400" />
                          Email Address <span className="text-rose-500">*</span>
                        </label>
                        <input
                          type="email"
                          required
                          placeholder="e.carter@pharmacy.org"
                          value={formFields.email}
                          onChange={(e) =>
                            setFormFields({ ...formFields, email: e.target.value })
                          }
                          className="glass-input text-sm py-2.5 h-11"
                        />
                      </div>
                    </div>

                    {/* Phone & Company Group */}
                    <div className="grid grid-cols-1 sm:grid-cols-2 gap-4">
                      <div className="space-y-1.5">
                        <label className="text-[11px] font-bold text-slate-500 uppercase tracking-wider flex items-center gap-1">
                          <Phone className="w-3 h-3 text-slate-400" />
                          Contact Number <span className="text-rose-500">*</span>
                        </label>
                        <input
                          type="tel"
                          required
                          placeholder="+1 (555) 304-4921"
                          value={formFields.phone}
                          onChange={(e) =>
                            setFormFields({ ...formFields, phone: e.target.value })
                          }
                          className="glass-input text-sm py-2.5 h-11"
                        />
                      </div>

                      <div className="space-y-1.5">
                        <label className="text-[11px] font-bold text-slate-500 uppercase tracking-wider flex items-center gap-1">
                          <Building className="w-3 h-3 text-slate-400" />
                          Pharma Store Name <span className="text-rose-500">*</span>
                        </label>
                        <input
                          type="text"
                          required
                          placeholder="e.g. Carter Pharmacy Solutions"
                          value={formFields.company}
                          onChange={(e) =>
                            setFormFields({ ...formFields, company: e.target.value })
                          }
                          className="glass-input text-sm py-2.5 h-11"
                        />
                      </div>
                    </div>

                    {/* Detail / Text Message */}
                    <div className="space-y-1.5">
                      <label className="text-[11px] font-bold text-slate-500 uppercase tracking-wider flex items-center gap-1">
                        <MessageSquare className="w-3 h-3 text-slate-400" />
                        Message / Note (Optional)
                      </label>
                      <textarea
                        rows={3}
                        placeholder="Outline any key requirements or custom modules you are most interested in..."
                        value={formFields.message}
                        onChange={(e) =>
                            setFormFields({ ...formFields, message: e.target.value })
                        }
                        className="glass-input text-sm py-3 min-h-[80px] max-h-[110px] resize-y"
                      />
                    </div>


                    {/* Submit Trigger Button */}
                    <button
                      type="submit"
                      disabled={submitStatus === "submitting"}
                      className="w-full flex items-center justify-center gap-2.5 rounded-xl bg-gradient-to-r from-sky-500 via-sky-600 to-indigo-600 px-5 py-3 h-12 text-sm font-semibold text-white shadow-lg shadow-sky-500/10 hover:shadow-sky-500/20 active:scale-[0.99] transition-all duration-200 cursor-pointer disabled:opacity-50 disabled:cursor-not-allowed"
                    >
                      {submitStatus === "submitting" ? (
                        <>
                          <div className="h-4.5 w-4.5 rounded-full border-2 border-white/30 border-t-white animate-spin" />
                          <span>Registering Store Protocol...</span>
                        </>
                      ) : (
                        <>
                          <Send className="w-4 h-4 text-sky-200" />
                          <span className="tracking-wide font-bold">Register for Priority Notification</span>
                        </>
                      )}
                    </button>

                  </form>
                </motion.div>
              ) : (
                <motion.div
                  key="success-receipt"
                  initial={{ opacity: 0, scale: 0.95 }}
                  animate={{ opacity: 1, scale: 1 }}
                  exit={{ opacity: 0, scale: 0.95 }}
                  transition={{ type: "spring", damping: 25, stiffness: 350 }}
                  className="text-center py-6 space-y-6"
                >
                  <div className="inline-flex items-center justify-center w-14 h-14 rounded-full bg-teal-50 border border-teal-200 text-teal-600 mb-2 shadow-sm">
                    <CheckCircle2 className="w-8 h-8 animate-bounce" />
                  </div>

                  <div className="space-y-2">
                     <h3 className="text-2xl font-bold font-display text-slate-900">
                       Subscription Active
                     </h3>
                     <p className="text-xs text-teal-600 font-bold">
                       Launch Priority Waiting List Registered
                     </p>
                     <p className="text-xs text-slate-600 max-w-md mx-auto leading-relaxed">
                       Thank you! Your pharmacy, <span className="text-sky-600 font-bold">{serverEnquiryReceipt?.company}</span>, has been safely registered. We will send launch bulletins directly to <span className="text-sky-600 font-semibold">{serverEnquiryReceipt?.email}</span> and text updates to <span className="text-sky-600 font-semibold">{serverEnquiryReceipt?.phone}</span> when available.
                     </p>
                  </div>

                  {/* Receipt Preview Card */}
                  {serverEnquiryReceipt && (
                    <div className="text-left bg-slate-50 border border-slate-100 rounded-xl p-4 space-y-3.5 max-w-md mx-auto text-slate-700 shadow-inner">
                      <div className="flex items-center justify-between border-b border-slate-200/65 pb-2 text-[10px] font-semibold text-slate-500 uppercase tracking-widest font-mono font-bold">
                        <span>Waiting List Spot Receipt</span>
                        <span className="text-teal-600">Registered</span>
                      </div>
                      
                      <div className="space-y-2 text-xs">
                        <div className="flex justify-between">
                          <span className="text-slate-500 font-medium">Full Name:</span>
                          <span className="font-bold text-slate-900">{serverEnquiryReceipt.name}</span>
                        </div>
                        <div className="flex justify-between">
                          <span className="text-slate-500 font-medium">Contact Email:</span>
                          <span className="font-bold text-slate-900">{serverEnquiryReceipt.email}</span>
                        </div>
                        {serverEnquiryReceipt.phone && (
                          <div className="flex justify-between">
                            <span className="text-slate-500 font-medium font-medium">Direct Contact:</span>
                            <span className="font-bold text-slate-900">{serverEnquiryReceipt.phone}</span>
                          </div>
                        )}
                        {serverEnquiryReceipt.company && (
                          <div className="flex justify-between">
                            <span className="text-slate-500 font-medium">Pharma Store:</span>
                            <span className="font-bold text-slate-900">{serverEnquiryReceipt.company}</span>
                          </div>
                        )}
                        <div className="flex justify-between">
                          <span className="text-slate-500 font-medium">Status:</span>
                          <span className="font-bold text-emerald-700 bg-emerald-50 px-2.2 py-0.5 rounded border border-emerald-200">Waiting List Member</span>
                        </div>
                        {serverEnquiryReceipt.message && (
                          <div className="border-t border-slate-200 pt-2 text-[11px] text-slate-650 italic">
                            <span className="block text-[9px] font-bold text-slate-500 uppercase not-italic mb-1">Optional Notes:</span>
                            &ldquo;{serverEnquiryReceipt.message}&rdquo;
                          </div>
                        )}
                      </div>

                      {serverEnquiryReceipt.isDemo && (
                        <div className="bg-amber-50 p-2.5 rounded-lg border border-amber-100 text-[10px] text-amber-800 leading-relaxed font-normal">
                          <span className="font-bold block text-amber-900 uppercase tracking-wider mb-0.5">SMTP Integration Live Note:</span>
                          You can directly trigger genuine SMTP dispatches to custom external mail boxes by updating variables inside your Settings Panel.
                        </div>
                      )}
                    </div>
                  )}

                  <div className="pt-2">
                    <button
                      onClick={handleResetForm}
                      className="inline-flex items-center gap-1.5 px-4.5 py-2.5 rounded-xl border border-slate-200 text-xs font-semibold text-slate-700 bg-white hover:bg-slate-50 shadow-sm transition-all cursor-pointer"
                    >
                      Register Another Store
                      <ArrowRight className="w-3.5 h-3.5" />
                    </button>
                  </div>
                </motion.div>
              )}
            </AnimatePresence>
          </div>
        </section>

        {/* Feature Cards Section matching Mockup */}
        <FeaturesMockup />

        {/* Footer Area with security guidelines */}
        <footer className="border-t border-slate-200 pt-6 mt-8 flex flex-col md:flex-row items-center justify-between text-xs text-slate-500 gap-4">
          <div className="flex items-center gap-2.5 sm:gap-4 flex-wrap">
            <span>&copy; {new Date().getFullYear()} Pharmovix Inc. All rights reserved.</span>
            <span className="text-slate-200">|</span>
            <span className="font-medium text-slate-600">Powered By SpaceOn Technology</span>
            <span className="text-slate-200">|</span>
            <button onClick={() => setIsPrivacyOpen(true)} className="hover:text-sky-600 transition-colors font-medium cursor-pointer">Privacy Policy</button>
          </div>
          
          <div className="flex items-center gap-4">
            <span className="flex items-center gap-1 text-slate-600 font-medium">
              <ShieldCheck className="w-4 h-4 text-emerald-500" />
              SSL Encrypted Delivery
            </span>
          </div>
        </footer>

      </div>

      {/* Elegant React-Native Privacy Policy Modal Overlay */}
      <AnimatePresence>
        {isPrivacyOpen && (
          <div className="fixed inset-0 z-50 flex items-center justify-center p-4">
            {/* Backdrop */}
            <motion.div
              initial={{ opacity: 0 }}
              animate={{ opacity: 1 }}
              exit={{ opacity: 0 }}
              onClick={() => setIsPrivacyOpen(false)}
              className="absolute inset-0 bg-slate-900/40 backdrop-blur-md"
            />

            {/* Modal Box */}
            <motion.div
              initial={{ opacity: 0, scale: 0.95, y: 20 }}
              animate={{ opacity: 1, scale: 1, y: 0 }}
              exit={{ opacity: 0, scale: 0.95, y: 20 }}
              className="relative w-full max-w-4xl max-h-[85vh] overflow-y-auto bg-white rounded-2xl shadow-2xl border border-slate-200/80 z-10 flex flex-col"
            >
              {/* Header */}
              <div className="sticky top-0 bg-white border-b border-slate-200/80 px-6 py-4 flex items-center justify-between z-20">
                <div className="flex items-center gap-3">
                  <img src="https://patelarsh.com/Pharmovix/PHARMOVIX.png" alt="Pharmovix Logo" className="h-8 w-auto object-contain" referrerPolicy="no-referrer" />
                  <span className="h-5 w-px bg-slate-200 hidden sm:inline-block" />
                  <span className="text-slate-400 font-mono text-[10px] uppercase tracking-wider font-semibold hidden sm:inline-block">Compliance Verified</span>
                </div>
                <button
                  type="button"
                  onClick={() => setIsPrivacyOpen(false)}
                  className="p-2 rounded-lg hover:bg-slate-100 text-slate-400 hover:text-slate-600 transition-all cursor-pointer"
                >
                  <X className="w-5 h-5" />
                </button>
              </div>

              {/* Dynamic Body Content */}
              <div className="p-6 sm:p-10 text-slate-600 text-sm leading-relaxed space-y-8">
                <div>
                  <h1 className="text-2xl sm:text-3xl font-extrabold text-sky-950 font-display tracking-tight mb-2">Privacy Policy</h1>
                  <p className="text-xs text-slate-400 font-mono font-medium flex items-center gap-1.5 uppercase tracking-widest">
                    <Clock className="w-3.5 h-3.5 text-slate-400" />
                    Last Updated: June 2026
                  </p>
                  <p className="mt-4 text-slate-600 sm:text-base font-light">
                    Welcome to <span className="font-semibold text-sky-700">Pharmovix</span>, powered by <span className="font-semibold text-sky-700">SpaceOn Technology</span>. 
                    We are committed to protecting your privacy and safeguarding your data. This Privacy Policy explains how we collect, use, and protect information when you use Pharmovix and related services.
                  </p>
                </div>

                {/* 1. Information We Collect */}
                <div>
                  <h2 className="text-lg font-bold text-sky-950 mb-4 flex items-center gap-2 font-display">
                    <span className="text-sky-600 font-mono text-xs bg-sky-50 border border-sky-100 rounded-md w-6 h-6 flex items-center justify-center font-bold">01</span>
                    Information We Collect
                  </h2>
                  <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div className="p-4 rounded-xl border border-slate-100 bg-[#fbfdfd] shadow-sm">
                      <span className="font-bold text-sky-800 text-xs sm:text-xs uppercase tracking-wider mb-2.5 block">Business Information</span>
                      <ul className="space-y-1 text-xs text-slate-500 font-medium">
                        <li>• Pharmacy Name</li>
                        <li>• Owner Name</li>
                        <li>• Business Address</li>
                        <li>• GST Number</li>
                        <li>• Email Address</li>
                        <li>• Contact Information</li>
                      </ul>
                    </div>
                    <div className="p-4 rounded-xl border border-slate-100 bg-[#fbfdfd] shadow-sm">
                      <span className="font-bold text-teal-800 text-xs uppercase tracking-wider mb-2.5 block">Customer Information</span>
                      <ul className="space-y-1 text-xs text-slate-500 font-medium">
                        <li>• Customer Name</li>
                        <li>• Mobile Number</li>
                        <li>• Prescription Details (if entered)</li>
                        <li>• Purchase History</li>
                      </ul>
                    </div>
                    <div className="p-4 rounded-xl border border-slate-100 bg-[#fbfdfd] shadow-sm">
                      <span className="font-bold text-indigo-800 text-xs uppercase tracking-wider mb-2.5 block">Inventory Information</span>
                      <ul className="space-y-1 text-xs text-slate-500 font-medium">
                        <li>• Medicine Details</li>
                        <li>• Stock Records</li>
                        <li>• Supplier Information</li>
                        <li>• Expiry Dates</li>
                        <li>• Sales and Purchase Records</li>
                      </ul>
                    </div>
                    <div className="p-4 rounded-xl border border-slate-100 bg-[#fbfdfd] shadow-sm">
                      <span className="font-bold text-slate-800 text-xs uppercase tracking-wider mb-2.5 block">Technical Information</span>
                      <ul className="space-y-1 text-xs text-slate-500 font-medium">
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
                  <h2 className="text-lg font-bold text-sky-950 mb-3 flex items-center gap-2 font-display">
                    <span className="text-sky-600 font-mono text-xs bg-sky-50 border border-sky-100 rounded-md w-6 h-6 flex items-center justify-center font-bold">02</span>
                    How We Use Your Information
                  </h2>
                  <ul className="space-y-2 list-none pl-1 text-xs sm:text-sm">
                    {["Provide and maintain Pharmovix services.", "Manage inventory, billing, and reports.", "Send WhatsApp notifications for stock and expiry alerts.", "Improve software functionality and user experience.", "Provide technical support.", "Comply with applicable laws and regulations."].map((item, idx) => (
                      <li key={idx} className="flex items-start gap-2.5">
                        <span className="h-5 w-5 shrink-0 bg-sky-50 border border-sky-100 rounded-md flex items-center justify-center text-sky-600 font-mono text-xs font-bold mt-0.5">✓</span>
                        <span>{item}</span>
                      </li>
                    ))}
                  </ul>
                </div>

                {/* 3. Data Security */}
                <div>
                  <h2 className="text-lg font-bold text-sky-950 mb-3 flex items-center gap-2 font-display">
                    <span className="text-sky-600 font-mono text-xs bg-sky-50 border border-sky-100 rounded-md w-6 h-6 flex items-center justify-center font-bold">03</span>
                    Data Security
                  </h2>
                  <p className="mb-4">
                    We implement industry-standard security measures to protect your data, including encrypted connections (HTTPS), secure cloud infrastructure, selective role authentication, and regular automated backups.
                  </p>
                  <p className="italic text-xs text-slate-400">
                    While we strive to protect your information, no method of transmission or storage is completely secure.
                  </p>
                </div>

                {/* 4. Data Sharing */}
                <div>
                  <h2 className="text-lg font-bold text-sky-950 mb-3 flex items-center gap-2 font-display">
                    <span className="text-sky-600 font-mono text-xs bg-sky-50 border border-sky-100 rounded-md w-6 h-6 flex items-center justify-center font-bold">04</span>
                    Data Sharing
                  </h2>
                  <p className="mb-3">
                    Pharmovix does <strong className="text-sky-950 underline decoration-sky-400 decoration-2">not sell, rent, or trade</strong> your personal or business information. Data is shared only with strictly scoped essential sub-processors (e.g. AWS Secure Hosting, WhatsApp Business APIs, or payment gateways).
                  </p>
                </div>

                {/* Contact Us */}
                <div>
                  <h2 className="text-lg font-bold text-sky-950 mb-3 flex items-center gap-2 font-display">
                    <span className="text-sky-600 font-mono text-xs bg-sky-50 border border-sky-100 rounded-md w-6 h-6 flex items-center justify-center font-bold">05</span>
                    Contact Us
                  </h2>
                  <div className="p-5 rounded-2xl border border-sky-100 bg-[#fbfdfd] flex flex-col sm:flex-row justify-between gap-4">
                    <div className="space-y-1.5 text-xs sm:text-sm text-slate-600">
                      <strong className="text-sky-950 text-base block">Pharmovix</strong>
                      <span className="text-xs text-slate-400 font-mono font-semibold block uppercase tracking-wider">Powered by SpaceOn Technology</span>
                      <div className="pt-2 space-y-1 text-slate-500 font-medium">
                        <div>🌐 Website: <a href="https://www.pharmovix.com" className="text-sky-600 hover:underline">www.pharmovix.com</a></div>
                        <div>📧 Email: <a href="mailto:info@pharmovix.com" className="text-sky-600 hover:underline">info@pharmovix.com</a></div>
                        <div>📞 Phone: <a href="tel:+917069182990" className="text-sky-600 hover:underline">+91 70691 82990</a></div>
                      </div>
                    </div>
                  </div>
                </div>

                {/* Consent */}
                <div className="border-t border-slate-100 pt-6">
                  <p className="text-xs text-slate-400">
                    By using Pharmovix, you acknowledge that you have read, understood, and agreed to this Privacy Policy.
                  </p>
                </div>
              </div>

              {/* Close Button Footer */}
              <div className="sticky bottom-0 bg-slate-50 border-t border-slate-200/80 px-6 py-4 flex justify-end z-20">
                <button
                  type="button"
                  onClick={() => setIsPrivacyOpen(false)}
                  className="px-4 py-2 bg-slate-900 hover:bg-slate-800 text-white font-semibold text-xs rounded-xl shadow-sm transition-all cursor-pointer"
                >
                  I Understand
                </button>
              </div>
            </motion.div>
          </div>
        )}
      </AnimatePresence>

    </div>
);
}
