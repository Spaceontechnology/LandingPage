import React from "react";
import { createRoot } from "react-dom/client";
import { PrivacyPage } from "./components/PrivacyPage";
import "./index.css";

const container = document.getElementById("privacy-root");
if (container) {
  const root = createRoot(container);
  root.render(
    <React.StrictMode>
      <PrivacyPage onBack={() => { window.location.href = "./"; }} />
    </React.StrictMode>
  );
}
