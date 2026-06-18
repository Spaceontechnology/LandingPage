import express, { Request, Response } from "express";
import path from "path";
import { createServer as createViteServer } from "vite";
import nodemailer from "nodemailer";
import dotenv from "dotenv";

// Load environment variables
dotenv.config();

async function startServer() {
  const app = express();
  const PORT = 3000;

  // Middleware to parse JSON payloads for smooth AJAX submissions
  app.use(express.json());

  // Serve the PHP landing page directly on the root and index paths
  app.get("/", (req: Request, res: Response) => {
    res.setHeader("Content-Type", "text/html");
    res.sendFile(path.join(process.cwd(), "php", "index.php"));
  });

  app.get("/index.php", (req: Request, res: Response) => {
    res.setHeader("Content-Type", "text/html");
    res.sendFile(path.join(process.cwd(), "php", "index.php"));
  });

  app.get("/php/index.php", (req: Request, res: Response) => {
    res.setHeader("Content-Type", "text/html");
    res.sendFile(path.join(process.cwd(), "php", "index.php"));
  });

  // Serve the Privacy Policy page on dedicated routes
  app.get(["/privacy", "/privacy-policy", "/privacy-policy.html", "/php/privacy.php"], (req: Request, res: Response) => {
    res.setHeader("Content-Type", "text/html");
    res.sendFile(path.join(process.cwd(), "php", "privacy.php"));
  });

  // Health check API endpoint
  app.get("/api/health", (req: Request, res: Response) => {
    res.json({ status: "ok", timestamp: new Date().toISOString() });
  });

  // Enquiry Submission API Endpoint supporting multiple routes (React, PHP scripts)
  app.post(["/api/enquiry", "/enquiry.php", "/php/enquiry.php"], async (req: Request, res: Response) => {
    try {
      const { name, email, phone, company, interest, message } = req.body;

      // Validate inputs
      if (!name || !email || !phone || !company) {
        res.status(400).json({
          success: false,
          message: "Please fill in all details: Name, Email, Contact Number, and Pharma Store Name.",
        });
        return;
      }

      const finalMessage = message || "Priority Waiting List Signup - Please notify me when available!";
      const finalInterest = interest || "Priority Waiting List Signup";

      // Email Setup details
      const adminEmail = process.env.ADMIN_EMAIL || "info@pharmovix.com";
      const senderEmail = process.env.SMTP_SENDER || "enquiry@pharmovix.com";

      // Prepare beautiful HTML email bodies
      const adminHtmlContent = `
        <div style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; border: 1px solid #e5e7eb; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1)">
          <div style="background-color: #0f172a; padding: 24px; text-align: center;">
            <h1 style="color: #38bdf8; margin: 0; font-size: 24px; font-weight: 700; letter-spacing: 0.05em;">PHARMOVIX</h1>
            <p style="color: #94a3b8; margin: 5px 0 0 0; font-size: 14px;">Incoming Priority Waiting List Signup</p>
          </div>
          <div style="padding: 24px; background-color: #ffffff;">
            <p style="font-size: 16px; margin-top: 0;">Hello Admins,</p>
            <p style="font-size: 14px; color: #4b5563;">A new subscription has been captured from the <strong>Pharmovix Waiting List</strong> landing page.</p>
            
            <table style="width: 100%; border-collapse: collapse; margin: 20px 0;">
              <tr style="border-bottom: 1px solid #f3f4f6;">
                <td style="padding: 10px 0; font-weight: bold; width: 30%; color: #4b5563;">Subscriber Name:</td>
                <td style="padding: 10px 0; color: #111827;">${name}</td>
              </tr>
              <tr style="border-bottom: 1px solid #f3f4f6;">
                <td style="padding: 10px 0; font-weight: bold; color: #4b5563;">Email Address:</td>
                <td style="padding: 10px 0; color: #111827;"><a href="mailto:${email}" style="color: #0284c7; text-decoration: none;">${email}</a></td>
              </tr>
              <tr style="border-bottom: 1px solid #f3f4f6;">
                <td style="padding: 10px 0; font-weight: bold; color: #4b5563;">Phone Number:</td>
                <td style="padding: 10px 0; color: #111827;">${phone}</td>
              </tr>
              <tr style="border-bottom: 1px solid #f3f4f6;">
                <td style="padding: 10px 0; font-weight: bold; color: #4b5563;">Pharma Store Name:</td>
                <td style="padding: 10px 0; color: #111827;">${company}</td>
              </tr>
              <tr style="border-bottom: 1px solid #f3f4f6;">
                <td style="padding: 10px 0; font-weight: bold; color: #4b5563;">Core Interest:</td>
                <td style="padding: 10px 0; color: #111827;"><span style="background-color: #e0f2fe; color: #0369a1; padding: 4px 8px; border-radius: 4px; font-size: 12px; font-weight: 600;">${finalInterest}</span></td>
              </tr>
            </table>

            <div style="background-color: #f9fafb; padding: 16px; border-radius: 6px; border-left: 4px solid #0284c7;">
              <h4 style="margin: 0 0 8px 0; color: #374151;">Message Detailing:</h4>
              <p style="margin: 0; font-size: 14px; white-space: pre-wrap; color: #1f2937;">${finalMessage}</p>
            </div>
          </div>
          <div style="background-color: #f3f4f6; padding: 12px 24px; text-align: center; font-size: 11px; color: #9ca3af; border-top: 1px solid #e5e7eb;">
            Pharmovix Inc. &bull; Secure Waiting List System &bull; Sent on ${new Date().toLocaleString()}
          </div>
        </div>
      `;

      const userHtmlContent = `
        <div style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; border: 1px solid #e5e7eb; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1)">
          <div style="background-color: #0c4a6e; padding: 24px; text-align: center;">
            <h1 style="color: #38bdf8; margin: 0; font-size: 24px; font-weight: 700; letter-spacing: 0.05em;">PHARMOVIX</h1>
            <p style="color: #93c5fd; margin: 5px 0 0 0; font-size: 13px;">Waiting List Confirmation</p>
          </div>
          <div style="padding: 24px; background-color: #ffffff;">
            <p style="font-size: 16px; margin-top: 0; font-weight: bold; color: #0f172a;">Dear ${name},</p>
            <p style="font-size: 14px; color: #374151;">Thank you for your interest in <strong>Pharmovix ERP</strong>.</p>
            <p style="font-size: 14px; color: #374151;">We have successfully added your pharmacy, <strong>"${company}"</strong>, to our launch priority waiting list. Our systems are currently in advanced development, and we will notify you immediately via email (${email}) or phone (${phone}) the moment Pharmovix goes live.</p>
            
            <div style="border-top: 1px solid #f3f4f6; margin: 20px 0; padding-top: 15px;">
              <h5 style="margin: 0 0 8px 0; color: #6b7280; font-size: 12px; text-transform: uppercase; letter-spacing: 0.05em;">Your Submission Details:</h5>
              <p style="margin: 0; font-size: 13px; font-style: italic; color: #4b5563; background-color: #f9fafb; padding: 12px; border-radius: 4px;">"${finalMessage}"</p>
            </div>

            <p style="font-size: 13px; color: #6b7280; margin-bottom: 0;">If you did not request this notification or reached us by error, please ignore this communication or contact us at <a href="mailto:${adminEmail}" style="color: #0284c7; text-decoration: none;">${adminEmail}</a>.</p>
          </div>
          <div style="background-color: #f3f4f6; padding: 16px 24px; text-align: center; font-size: 11px; color: #9ca3af; border-top: 1px solid #e5e7eb;">
            Pharmovix Inc. &bull; Smart Software for Modern Pharmacy &bull; <a href="mailto:${adminEmail}" style="color: #4b5563; text-decoration: underline;">${adminEmail}</a>
          </div>
        </div>
      `;

      // Check for SMTP environment variables to decide if we can send a REAL email
      const smtpHost = process.env.SMTP_HOST;
      const smtpPort = process.env.SMTP_PORT;
      const smtpUser = process.env.SMTP_USER;
      const smtpPass = process.env.SMTP_PASS;

      if (smtpHost && smtpUser && smtpPass) {
        // Transporter config using user's values
        const isSecure = process.env.SMTP_SECURE === "true" || smtpPort === "465";
        const transporter = nodemailer.createTransport({
          host: smtpHost,
          port: parseInt(smtpPort || "587"),
          secure: isSecure,
          auth: {
            user: smtpUser,
            pass: smtpPass,
          },
        });

        // 1. Send copy to Admin (sent from SMTP SENDER or user email)
        await transporter.sendMail({
          from: `"${name} (Pharmovix Waiting List)" <${senderEmail}>`,
          to: adminEmail,
          replyTo: email,
          subject: `Priority Waiting List Signup: ${company} [${name}]`,
          html: adminHtmlContent,
        });

        // 2. Send acknowledgment to the User (sent from enquiry@pharmovix.com)
        await transporter.sendMail({
          from: `"Pharmovix Team" <${senderEmail}>`,
          to: email,
          subject: "Welcome to the Pharmovix Priority Waiting List",
          html: userHtmlContent,
        });

        res.json({
          success: true,
          message: "You have been successfully added to the priority waiting list! A confirmation email has been sent.",
        });
      } else {
        // Fallback for Development mode when SMTP is not configured
        console.log("=========================================");
        console.log("   DEVELOPMENT EMAIL DISPATCH SIMULATOR  ");
        console.log("=========================================");
        console.log(`From (Sender): ${senderEmail}`);
        console.log(`To (Admin): ${adminEmail}`);
        console.log(`Subject: Priority Waiting List Signup: ${company} [${name}]`);
        console.log(`Reply-To: ${email}`);
        console.log("--------- ADMIN EMAIL CONTENT ---------");
        console.log(`Submission Details:\nName: ${name}\nEmail: ${email}\nPhone: ${phone}\nCompany: ${company}\nInterest: ${finalInterest}\nMessage: ${finalMessage}`);
        console.log("---------------------------------------");
        console.log(`To (User Acknowledgement): ${email}`);
        console.log("=========================================");

        res.json({
          success: true,
          developmentMode: true,
          message: "Successfully signed up! (Note: Real notification emails will send once SMTP_HOST / SMTP_USER are configured in Settings/Secrets).",
        });
      }
    } catch (error: any) {
      console.error("Enquiry submission error:", error);
      res.status(500).json({
        success: false,
        message: "An internal server error occurred while sending your subscription. Please try again later.",
        errorOnServer: error.message || String(error),
      });
    }
  });

  // Vite server middleware for development preview
  if (process.env.NODE_ENV !== "production") {
    const vite = await createViteServer({
      server: { middlewareMode: true },
      appType: "spa",
    });
    app.use(vite.middlewares);
  } else {
    // Serve production built frontend files
    const distPath = path.join(process.cwd(), "dist");
    app.use(express.static(distPath));
    app.get("*", (req: Request, res: Response) => {
      res.sendFile(path.join(process.cwd(), "php", "index.php"));
    });
  }

  app.listen(PORT, "0.0.0.0", () => {
    console.log(`Server is operating and actively listening on http://0.0.0.0:${PORT}`);
  });
}

startServer();
