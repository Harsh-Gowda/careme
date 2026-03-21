Task 1: Doctors Post Type
## Doctors Post Type

**Assignee:** Backend Developer  
**Status:** To Do  
**Priority:** High  
**Deadline:** 2024-04-25  
**Estimated Hours:** 8

### Description
Create custom post type for dental doctors with all necessary meta fields and taxonomies.

### Checklist
- [ ] Register `doctors` post type
- [ ] Labels (singular: Doctor, plural: Doctors)
- [ ] Menu icon (dashicons-businessman)
- [ ] Supports: title, editor, thumbnail, excerpt
- [ ] Archive page enabled
- [ ] Rewrite slug (`/doctors/`)
- [ ] Custom fields: Specialization, Experience, Education, Phone, Email
- [ ] Meta box for doctor details
- [ ] Featured image for photo
- [ ] Gallery meta for multiple photos
- [ ] Social media links (Facebook, LinkedIn, Twitter)

### Deliverables
- [ ] `post-types/doctors.php`
- [ ] `meta-boxes/doctor-meta.php`
- [ ] Admin columns customization

### Review Criteria
- [ ] Appears in admin menu
- [ ] Can add/edit doctors
- [ ] Archive page works
- [ ] Single doctor template ready

---

**Time Log:**
| Date | Hours | Notes |
|------|-------|-------|
| | | |

**Actual Hours:** ___  
**Status History:** To Do → In Progress → Review → Done

Task 2: Services Post Type
## Services Post Type

**Assignee:** Backend Developer  
**Status:** To Do  
**Priority:** High  
**Deadline:** 2024-04-26  
**Estimated Hours:** 8

### Description
Create custom post type for dental services with pricing, duration, and categories.

### Checklist
- [ ] Register `services` post type
- [ ] Labels (singular: Service, plural: Services)
- [ ] Menu icon (dashicons-clipboard)
- [ ] Supports: title, editor, thumbnail, excerpt
- [ ] Archive page enabled
- [ ] Rewrite slug (`/services/`)
- [ ] Custom fields: Price, Duration, Icon, Before/After gallery
- [ ] Service category taxonomy (General, Cosmetic, Surgical, Orthodontics)
- [ ] Meta box for service details
- [ ] FAQ repeater field
- [ ] Related services selector
- [ ] Booking form shortcode per service

### Deliverables
- [ ] `post-types/services.php`
- [ ] `taxonomies/service-category.php`
- [ ] `meta-boxes/service-meta.php`

### Review Criteria
- [ ] Categories filterable in admin
- [ ] Services display with pricing
- [ ] Related services query works

---

**Time Log:**
| Date | Hours | Notes |
|------|-------|-------|
| | | |

**Actual Hours:** ___  
**Status History:** To Do → In Progress → Review → Done

Task 3: Testimonials Post Type
## Testimonials Post Type

**Assignee:** Backend Developer  
**Status:** To Do  
**Priority:** Medium  
**Deadline:** 2024-04-27  
**Estimated Hours:** 6

### Description
Create custom post type for patient testimonials with ratings and verification.

### Checklist
- [ ] Register `testimonials` post type
- [ ] Labels (singular: Testimonial, plural: Testimonials)
- [ ] Menu icon (dashicons-format-quote)
- [ ] Supports: title, editor, thumbnail
- [ ] No archive (displayed via shortcode/widget)
- [ ] Custom fields: Patient Name, Rating (1-5 stars), Treatment Received, Date, Verified badge
- [ ] Meta box for testimonial details
- [ ] Star rating selector
- [ ] Before/After photo relation
- [ ] Shortcode: `[testimonials count="5"]`

### Deliverables
- [ ] `post-types/testimonials.php`
- [ ] `meta-boxes/testimonial-meta.php`
- [ ] Testimonial shortcode

### Review Criteria
- [ ] Testimonials display in slider
- [ ] Rating stars render correctly
- [ ] Shortcode works anywhere

---

**Time Log:**
| Date | Hours | Notes |
|------|-------|-------|
| | | |

**Actual Hours:** ___  
**Status History:** To Do → In Progress → Review → Done

Task 4: Before/After Gallery Post Type
## Before/After Gallery Post Type

**Assignee:** Backend Developer  
**Status:** To Do  
**Priority:** Medium  
**Deadline:** 2024-04-28  
**Estimated Hours:** 6

### Description
Create custom post type for treatment results with before/after image comparison.

### Checklist
- [ ] Register `gallery` post type (or `before_after`)
- [ ] Labels: Treatment Results
- [ ] Menu icon (dashicons-format-gallery)
- [ ] Supports: title, thumbnail
- [ ] Custom fields: Before Image, After Image, Treatment Type, Patient Age, Treatment Date, Notes
- [ ] Meta box with image uploaders
- [ ] Relation to Services post type
- [ ] Relation to Doctors post type
- [ ] Gallery category taxonomy
- [ ] Shortcode: `[before_after_grid]`
- [ ] Privacy mode (blur faces option)

### Deliverables
- [ ] `post-types/before-after.php`
- [ ] `meta-boxes/before-after-meta.php`
- [ ] Image comparison shortcode

### Review Criteria
- [ ] Before/After images upload
- [ ] Comparison slider works
- [ ] Privacy blur option works

---

**Time Log:**
| Date | Hours | Notes |
|------|-------|-------|
| | | |

**Actual Hours:** ___  
**Status History:** To Do → In Progress → Review → Done

Task 5: Appointments Post Type (CRM Bridge)
## Appointments Post Type (CRM Bridge)

**Assignee:** Backend Developer  
**Status:** To Do  
**Priority:** High  
**Deadline:** 2024-04-29  
**Estimated Hours:** 10

### Description
Create custom post type to store appointment bookings with CRM integration ready.

### Checklist
- [ ] Register `appointments` post type (private/hidden)
- [ ] Labels: Appointment Bookings
- [ ] Menu icon (dashicons-calendar-alt)
- [ ] No public archive (admin only)
- [ ] Custom fields: Patient Name, Phone, Email, Preferred Date, Preferred Time, Service ID, Doctor ID, Status (Pending, Confirmed, Completed, Cancelled), Notes, Source (Website/WhatsApp), CRM Sync Status
- [ ] Meta box for appointment details
- [ ] Status dropdown with colors
- [ ] Relation to Services post type
- [ ] Relation to Doctors post type
- [ ] REST API endpoint for frontend form
- [ ] Email notification hooks
- [ ] Webhook for CRM sync

### Deliverables
- [ ] `post-types/appointments.php`
- [ ] `meta-boxes/appointment-meta.php`
- [ ] REST API endpoint
- [ ] Admin columns (status, date, patient)

### Review Criteria
- [ ] Appointments save from frontend form
- [ ] Admin can manage status
- [ ] API returns JSON correctly

---

**Time Log:**
| Date | Hours | Notes |
|------|-------|-------|
| | | |

**Actual Hours:** ___  
**Status History:** To Do → In Progress → Review → Done

Task 6: Meta Boxes & Fields Framework
## Meta Boxes & Fields Framework

**Assignee:** Backend Lead  
**Status:** To Do  
**Priority:** High  
**Deadline:** 2024-04-24  
**Estimated Hours:** 8

### Description
Setup meta box framework (CMB2 or ACF) for all custom fields across post types.

### Checklist
- [ ] Install CMB2 or ACF (decide: free vs pro)
- [ ] Create base meta box class
- [ ] Field types: text, textarea, number, email, tel, date, time, select, radio, checkbox, file, image, gallery, oEmbed, repeater
- [ ] Validation callbacks
- [ ] Sanitization functions
- [ ] Conditional logic support
- [ ] Admin styling for meta boxes
- [ ] Save hook integration

### Deliverables
- [ ] Meta box framework file
- [ ] Example meta box implementations
- [ ] Documentation for team

### Review Criteria
- [ ] All field types work
- [ ] Data saves correctly
- [ ] No PHP notices

---

**Time Log:**
| Date | Hours | Notes |
|------|-------|-------|
| | | |

**Actual Hours:** ___  
**Status History:** To Do → In Progress → Review → Done


