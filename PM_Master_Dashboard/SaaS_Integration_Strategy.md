# CareMe SaaS Integration Strategy

**Document Owner:** Antigravity (Project Manager)  
**Date:** March 2024  
**Objective:** Define the architecture and user flow for integrating the proprietary "CareMe SaaS" (Lead Management & Chat) with the standalone WordPress theme.

---

## 🚀 The Vision: The "Trojan Horse" Strategy

Your WordPress Theme and Plugin act as a **Freemium Acquisition Engine** for your core SaaS product.

When you sell the theme to a dental clinic, they receive your custom *CareMe Forms* plugin.
1. **The Core Value:** The plugin allows them to easily capture patient leads and route them directly to their standard email inbox. This makes the theme highly valuable on its own.
2. **The "Trojan Horse" Upsell:** Inside the exact same settings page where they configure their email address, they see an integrated upsell: **Premium SaaS Integration**.
3. **The Hook:** When their inbox gets messy and they want better patient management, the software is already pitching them your SaaS. They simply click "Learn More", subscribe to your SaaS product, get an API key, and paste it back into the plugin. 

Instantly, they upgrade from standard emails to an automated Lead Routing & Live Chat system.

## 🏗️ How We Do It: The "CareMe Connect" Plugin

Instead of hardcoding the SaaS connection directly into the theme (which is bad practice and locks clients in), we will build a dedicated, lightweight WordPress plugin: **CareMe Connect**. 

When you sell the theme to a dental clinic, you also provide them with this plugin.

### Key Features of the Plugin:

#### 1. The API Handshake (Settings Page)
The plugin will add a simple settings page in the WordPress admin (or we can inject it straight into the *CareMe Theme Dashboard* we just built). 
*   **The Flow:** The clinic owner creates an account on your SaaS. They generate an API key. They paste that API key into this WordPress settings page.
*   **The Result:** The WordPress site is now securely authenticated with your SaaS product.

#### 2. Universal Lead Routing
The plugin will hook into the site's forms (whether we use WPForms, Contact Form 7, or custom HTML forms in the Hero/Services sections).
*   **The Flow:** A patient lands on the site and fills out "Book an Appointment".
*   **The Result:** WordPress captures the form, but instead of just sending an email, the *CareMe Connect* plugin packages the data (Name, Phone, Service Requested) and fires a `POST` request to your SaaS REST API. The lead instantly appears in your SaaS dashboard.

#### 3. 1-Click Chat Widget Injection
Since your SaaS handles patient chat, clinics need that chat bubble on their site.
*   **The Flow:** Once the API key is verified, the plugin automatically hooks into `wp_footer`.
*   **The Result:** The plugin dynamically injects your SaaS Chat JavaScript snippet onto every page of the WordPress site. The client never has to touch code; they just enter their API key, and the chat widget appears.

#### 4. Dashboard Syncing (Optional/Phase 2)
To keep clients engaged, we can pull data from your SaaS *back* into WordPress over the API.
*   **The Flow:** The client logs into their WordPress admin dashboard.
*   **The Result:** In the CareMe Theme Dashboard, they see a "Quick Stats" widget showing: *14 New Leads this week* and *3 Unread Chats*, pulled directly from your SaaS API.

---

## 📋 Next Steps for Implementation

If you approve this architecture, here is the PM checklist to get this built:

1.  **[ ] API Documentation Prep:** You need to provide the REST API endpoints for your SaaS (e.g., `POST /api/v1/leads/` and the JavaScript snippet for the chat widget).
2.  **[ ] Plugin Scaffolding:** I will generate the base architecture for the `careme-connect` WordPress plugin.
3.  **[ ] Settings UI:** I will build the form where clients enter their SaaS API key.
4.  **[ ] API Integration:** I will write the PHP logic that intercepts WordPress form submissions and pushes them to your SaaS endpoint via `wp_remote_post()`.
5.  **[ ] Script Injection:** I will write the hook that safely injects your chat widget JS into the site footer.

**Decision Required:** Let me know if you want to proceed with building the `careme-connect` plugin skeleton right now, or if you need to finalize your SaaS API endpoints first!
