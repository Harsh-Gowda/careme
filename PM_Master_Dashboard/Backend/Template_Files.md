Task 1: Header & Footer Templates
## Header & Footer Templates

**Assignee:** Backend Developer  
**Status:** To Do  
**Priority:** High  
**Deadline:** 2024-04-30  
**Estimated Hours:** 6

### Description
Create WordPress header and footer template parts with dynamic content integration.

### Checklist
- [ ] `header.php` with wp_head()
- [ ] Site logo (customizer or custom logo)
- [ ] Primary navigation wp_nav_menu()
- [ ] Mobile menu toggle button
- [ ] Header CTA button (Book Appointment)
- [ ] Header layout options (sticky, transparent)
- [ ] `footer.php` with wp_footer()
- [ ] Footer widget areas (4 columns)
- [ ] Copyright text with dynamic year
- [ ] Back to top button
- [ ] Schema.org markup (Organization)

### Deliverables
- [ ] `header.php`
- [ ] `footer.php`
- [ ] `template-parts/header/` folder

### Review Criteria
- [ ] Valid HTML5 structure
- [ ] Hooks work (wp_head, wp_footer)
- [ ] Customizer options reflect

---

**Time Log:**
| Date | Hours | Notes |
|------|-------|-------|
| | | |

**Actual Hours:** ___  
**Status History:** To Do → In Progress → Review → Done

Task 2: Homepage Template
## Homepage Template

**Assignee:** Backend Developer  
**Status:** To Do  
**Priority:** High  
**Deadline:** 2024-05-01  
**Estimated Hours:** 10

### Description
Build full homepage template with modular sections pulling from custom post types.

### Checklist
- [ ] `front-page.php` or `template-home.php`
- [ ] Hero section (Customizer content)
- [ ] Services preview (query 4 services)
- [ ] About/Welcome section
- [ ] Doctors preview (query 3 doctors)
- [ ] Testimonials slider (query 5 testimonials)
- [ ] Before/After gallery preview
- [ ] Appointment CTA section
- [ ] Latest blog posts (optional)
- [ ] Section order customizable
- [ ] Section show/hide toggles

### Deliverables
- [ ] Homepage template
- [ ] Section template parts
- [ ] Customizer homepage settings

### Review Criteria
- [ ] All sections display data
- [ ] Customizer controls work
- [ ] Responsive layout correct

---

**Time Log:**
| Date | Hours | Notes |
|------|-------|-------|
| | | |

**Actual Hours:** ___  
**Status History:** To Do → In Progress → Review → Done

Task 3: Doctor Archive & Single Templates
## Doctor Archive & Single Templates

**Assignee:** Backend Developer  
**Status:** To Do  
**Priority:** High  
**Deadline:** 2024-05-02  
**Estimated Hours:** 8

### Description
Create templates for doctor listing page and individual doctor profile pages.

### Checklist
- [ ] `archive-doctors.php` (listing page)
- [ ] Grid layout (3 columns desktop)
- [ ] Doctor card template part
- [ ] Filter by specialization (optional)
- [ ] Pagination
- [ ] `single-doctors.php` (profile page)
- [ ] Doctor photo (large)
- [ ] Specialization tags
- [ ] Bio/excerpt full content
- [ ] Contact info (phone, email)
- [ ] Social media links
- [ ] Available services list
- [ ] Booking form with doctor pre-selected
- [ ] Related doctors (same specialization)
- [ ] Schema markup (Person, Physician)

### Deliverables
- [ ] `archive-doctors.php`
- [ ] `single-doctors.php`
- [ ] `template-parts/content-doctor.php`

### Review Criteria
- [ ] Archive shows all doctors
- [ ] Single page displays all meta
- [ ] Booking links to form with doctor ID

---

**Time Log:**
| Date | Hours | Notes |
|------|-------|-------|
| | | |

**Actual Hours:** ___  
**Status History:** To Do → In Progress → Review → Done

Task 4: Services Archive & Single Templates
## Services Archive & Single Templates

**Assignee:** Backend Developer  
**Status:** To Do  
**Priority:** High  
**Deadline:** 2024-05-03  
**Estimated Hours:** 8

### Description
Create templates for services listing and individual service detail pages.

### Checklist
- [ ] `archive-services.php` (listing page)
- [ ] Category filter tabs
- [ ] Service card layout
- [ ] Price display
- [ ] Duration display
- [ ] `single-services.php` (detail page)
- [ ] Service icon (large)
- [ ] Full description
- [ ] Pricing table/box
- [ ] Duration info
- [ ] Before/After gallery (related)
- [ ] FAQ section (repeater field)
- [ ] Related services (same category)
- [ ] Book this service CTA
- [ ] Doctors who perform this service
- [ ] Schema markup (Service, MedicalWebPage)

### Deliverables
- [ ] `archive-services.php`
- [ ] `single-services.php`
- [ ] `template-parts/content-service.php`

### Review Criteria
- [ ] Categories filterable
- [ ] Pricing displays correctly
- [ ] Booking CTA links to form with service ID

---

**Time Log:**
| Date | Hours | Notes |
|------|-------|-------|
| | | |

**Actual Hours:** ___  
**Status History:** To Do → In Progress → Review → Done

Task 5: Before/After Gallery Template
## Before/After Gallery Template

**Assignee:** Backend Developer  
**Status:** To Do  
**Priority:** Medium  
**Deadline:** 2024-05-04  
**Estimated Hours:** 6

### Description
Create gallery page template with filterable grid and comparison slider integration.

### Checklist
- [ ] `archive-before_after.php` or page template
- [ ] Filter by treatment type (taxonomy)
- [ ] Masonry or grid layout
- [ ] Before/After card component
- [ ] Comparison slider JS integration
- [ ] Lightbox for full view
- [ ] Pagination or load more
- [ ] Privacy blur toggle (if enabled)
- [ ] Related treatment link
- [ ] Doctor credit link

### Deliverables
- [ ] Gallery archive template
- [ ] Before/After card template part
- [ ] Slider JS integration

### Review Criteria
- [ ] Slider works on all cards
- [ ] Filters work with AJAX or reload
- [ ] Responsive grid

---

**Time Log:**
| Date | Hours | Notes |
|------|-------|-------|
| | | |

**Actual Hours:** ___  
**Status History:** To Do → In Progress → Review → Done

Task 6: Contact & Appointment Templates
## Contact & Appointment Templates

**Assignee:** Backend Developer  
**Status:** To Do  
**Priority:** High  
**Deadline:** 2024-05-05  
**Estimated Hours:** 8

### Description
Create contact page and dedicated appointment booking page templates.

### Checklist
- [ ] `template-contact.php` (contact page)
- [ ] Contact info display (from Customizer)
- [ ] Google Maps embed (API key from Customizer)
- [ ] Contact form (CF7 or custom)
- [ ] Office hours display
- [ ] `template-appointment.php` (booking page)
- [ ] Multi-step or single page form
- [ ] Service selector (dropdown from CPT)
- [ ] Doctor selector (dropdown from CPT, filtered by service)
- [ ] Date picker (available dates)
- [ ] Time slot picker
- [ ] Patient details form
- [ ] Form validation (client + server side)
- [ ] Success message + confirmation email
- [ ] Save to Appointments CPT
- [ ] Webhook to CRM (if configured)

### Deliverables
- [ ] `template-contact.php`
- [ ] `template-appointment.php`
- [ ] Form processing handlers
- [ ] Email templates

### Review Criteria
- [ ] Form submits successfully
- [ ] Data saves to CPT
- [ ] Email notifications sent

---

**Time Log:**
| Date | Hours | Notes |
|------|-------|-------|
| | | |

**Actual Hours:** ___  
**Status History:** To Do → In Progress → Review → Done

Task 7: Blog & Default Templates
## Blog & Default Templates

**Assignee:** Backend Developer  
**Status:** To Do  
**Priority:** Medium  
**Deadline:** 2024-05-06  
**Estimated Hours:** 6

### Description
Create standard WordPress templates for blog, posts, pages, search, and 404.

### Checklist
- [ ] `index.php` (blog listing)
- [ ] `single.php` (blog post)
- [ ] `page.php` (standard page)
- [ ] `search.php` (search results)
- [ ] `404.php` (error page with search)
- [ ] `sidebar.php` (blog sidebar)
- [ ] Post navigation (previous/next)
- [ ] Comments template
- [ ] Author bio box
- [ ] Related posts
- [ ] Breadcrumbs integration
- [ ] Pagination

### Deliverables
- [ ] All standard templates
- [ ] `template-parts/content.php`
- [ ] `comments.php`

### Review Criteria
- [ ] Blog functions normally
- [ ] Search works
- [ ] 404 page helpful

---

**Time Log:**
| Date | Hours | Notes |
|------|-------|-------|
| | | |

**Actual Hours:** ___  
**Status History:** To Do → In Progress → Review → Done

