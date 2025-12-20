# Zydura Pharmaceuticals - Official Website 💊

The official corporate website for **Zydura Pharmaceuticals**, a dermaceutical company specializing in advanced skincare solutions.

This project was designed, developed, and deployed to serve as the brand's primary digital presence, featuring a product catalog and a direct client inquiry system.

## 🔗 Live Demo
**[Visit www.zydura.in](http://www.zydura.in)**

---

## 🛠 Tech Stack
* **Frontend:** HTML5, CSS3 (Custom Responsive Design), JavaScript.
* **Integrations:** [FormSubmit.co](https://formsubmit.co/) (Serverless Email API).
* **Deployment:** Linux Shared Hosting (BigRock), Apache Server.
* **Tools:** VS Code, Git, cPanel.

---

## 🚀 Key Features
* **Fully Responsive Interface:** Optimized for seamless viewing on Mobile, Tablet, and Desktop.
* **Product Showcase:** A visual catalog displaying the Zydura product range (Celluglow, Zysoft, etc.).
* **Contact System:** Integrated a serverless form backend to ensure 100% email deliverability for client inquiries, bypassing strict corporate spam filters.
* **SEO Friendly:** Semantic HTML structure for better search engine indexing.

---

## 🧠 Engineering & Deployment Challenges
This project was not just about coding; it involved a full production deployment lifecycle. Key technical challenges resolved included:

* **DNS & Networking:** configured custom Name Servers (`sns401` vs `dns1`) and managed global propagation delays.
* **Email Routing (MX Records):** Successfully routed corporate emails through Google Workspace while hosting the website on a separate Linux server.
* **SSL Security:** Implemented HTTPS/SSL to ensure secure browsing (Green Padlock).
* **Infrastructure Pivot:** Migrated from a PHP `mail()` backend to a REST API (FormSubmit) to resolve server-side email blocking issues.

---

## 📂 Project Structure
```bash
├── index.html          # Homepage
├── Products.html       # Product Catalog
├── about.html          # Company Profile
├── contact.html        # Contact Form (API Integrated)
├── style.css           # Main Stylesheet
├── logo.jpeg           # Brand Assets
└── README.md           # Project Documentation
