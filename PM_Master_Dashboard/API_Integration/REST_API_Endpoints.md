Task 1: API Architecture Setup
## API Architecture Setup

**Assignee:** API Developer  
**Status:** To Do  
**Priority:** High  
**Deadline:** 2024-05-13  
**Estimated Hours:** 6

### Description
Setup REST API structure with authentication, versioning, and security for theme-CRM communication.

### Checklist
- [ ] API namespace registration (`dental/v1`)
- [ ] Authentication method (JWT or API keys)
- [ ] CORS configuration
- [ ] Rate limiting setup
- [ ] Request validation middleware
- [ ] Response format standardization (JSON)
- [ ] Error handling structure
- [ ] API documentation starter
- [ ] Version control (v1, v2 future-proofing)

### Deliverables
- [ ] `api/class-api-core.php`
- [ ] Authentication handlers
- [ ] Base controller class

### Review Criteria
- [ ] Endpoints return valid JSON
- [ ] Authentication secure
- [ ] Errors handled gracefully

---

**Time Log:**
| Date | Hours | Notes |
|------|-------|-------|
| | | |

**Actual Hours:** ___  
**Status History:** To Do → In Progress → Review → Done

Task 2: Appointment API Endpoints
## Appointment API Endpoints

**Assignee:** API Developer  
**Status:** To Do  
**Priority:** High  
**Deadline:** 2024-05-14  
**Estimated Hours:** 10

### Description
Create REST endpoints for appointment CRUD operations between theme and CRM.

### Checklist
- [ ] POST `/appointments` - Create new appointment
- [ ] GET `/appointments` - List appointments (admin)
- [ ] GET `/appointments/{id}` - Single appointment
- [ ] PUT `/appointments/{id}` - Update appointment
- [ ] DELETE `/appointments/{id}` - Cancel appointment
- [ ] GET `/available-slots` - Get available time slots
- [ ] POST `/check-availability` - Check doctor/service availability
- [ ] Nonce verification on all requests
- [ ] Capability checks (edit_others_posts for admin)
- [ ] Sanitize all inputs
- [ ] Log API requests for debugging

### Deliverables
- [ ] `api/class-appointment-controller.php`
- [ ] Endpoint registration
- [ ] Postman collection for testing

### Review Criteria
- [ ] All endpoints work via Postman
- [ ] Data saves to CPT correctly
- [ ] Security checks pass

---

**Time Log:**
| Date | Hours | Notes |
|------|-------|-------|
| | | |

**Actual Hours:** ___  
**Status History:** To Do → In Progress → Review → Done

Task 3: Doctors & Services API
## Doctors & Services API

**Assignee:** API Developer  
**Status:** To Do  
**Priority:** Medium  
**Deadline:** 2024-05-15  
**Estimated Hours:** 6

### Description
Create endpoints to fetch doctors and services data for dynamic frontend loading.

### Checklist
- [ ] GET `/doctors` - List all doctors
- [ ] GET `/doctors/{id}` - Single doctor details
- [ ] GET `/doctors/{id}/services` - Services by doctor
- [ ] GET `/services` - List all services
- [ ] GET `/services/{id}` - Single service details
- [ ] GET `/services/{id}/doctors` - Doctors for service
- [ ] Query parameters (filter, search, pagination)
- [ ] Caching headers for performance
- [ ] Image URLs in response
- [ ] Meta fields included

### Deliverables
- [ ] `api/class-doctor-controller.php`
- [ ] `api/class-service-controller.php`
- [ ] Frontend fetch examples

### Review Criteria
- [ ] JSON structure consistent
- [ ] Images load correctly
- [ ] Filters work

---

**Time Log:**
| Date | Hours | Notes |
|------|-------|-------|
| | | |

**Actual Hours:** ___  
**Status History:** To Do → In Progress → Review → Done

Task 4: Webhook System
## Webhook System

**Assignee:** API Developer  
**Status:** To Do  
**Priority:** High  
**Deadline:** 2024-05-16  
**Estimated Hours:** 8

### Description
Build outgoing webhook system to push data to external CRM when events occur.

### Checklist
- [ ] Webhook registration UI (in theme settings)
- [ ] Webhook URL storage (encrypted)
- [ ] Event triggers: new_appointment, updated_appointment, cancelled_appointment
- [ ] Retry mechanism (3 attempts)
- [ ] Webhook payload formatting (JSON)
- [ ] Signature verification (HMAC)
- [ ] Webhook log (success/failure)
- [ ] Manual retry option
- [ ] Test webhook button
- [ ] Batch processing option

### Deliverables
- [ ] `api/class-webhook-sender.php`
- [ ] Webhook settings page
- [ ] Logging system

### Review Criteria
- [ ] Webhooks fire on events
- [ ] Retry works on failure
- [ ] Secure signature validation

---

**Time Log:**
| Date | Hours | Notes |
|------|-------|-------|
| | | |

**Actual Hours:** ___  
**Status History:** To Do → In Progress → Review → Done


