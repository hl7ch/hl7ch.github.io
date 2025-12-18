# Volume 3 - CH:ATC Audit Event Content Profiles - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* **Volume 3 - CH:ATC Audit Event Content Profiles**

## Volume 3 - CH:ATC Audit Event Content Profiles

Annex 2 EPRO-FDHA, chapter 2.10 defines the audit requirements for the EPR.

There are four different categories of Audit Events in the context of the EPR :

1. Document management (e.g., a document has been uploaded to the EPR of a patient or a list of document metadata has been retrieved).
1. Policy management (e.g., a patient has given a healthcare professional access rights to his EPR).
1. Access Patient Audit Record Repository by a patient or representative (a patient viewed the Audit Trail for the Audit Record Repository).
1. Notification of the patient about the entry of healthcare professionals into a group.

While the Access to the Audit Repository, Document and Policy management categories are self-explanatory, the notification of the patient about the entry of healthcare professionals into a group may require some explanations. The access management of the EPR is based on individuals and groups. Patients assign the access rights either to individual healthcare professionals, or to groups of healthcare professionals. All healthcare professionals in a group inherit the access rights of the group or of the parent groups, depending on the hierarchy of groups (see [examples](iti-mcsd.md#examples)). To ensure that patients are aware of the entry of healthcare professionals into a group, the communities shall provide the notifications to patients. The notification mechanism is out of scope of this specification. This specification only specifies the requirements for the audit trail of the event.

Each category is described as a content profile. These content profiles are based on the AuditEvent Resource, [http://hl7.org/fhir/R4/auditevent.html](http://hl7.org/fhir/R4/auditevent.html).

The AuditEvent Resource has [mapping rules to the DICOM audit message format](http://hl7.org/fhir/R4/auditevent-mappings.html#dicom), which allows to map to ATNA.

### Audit Trail Consumption Event Types

The following Audit Trail Consumption Event Types are defined and shall be supported, see [EprAuditTrailConsumptionEventTypes](http://fhir.ch/ig/ch-term/ValueSet/EprAuditTrailConsumptionEventType) from [Codesystem 2.16.756.5.30.1.127.3.10.7](https://fhir.ch/ig/ch-term/CodeSystem-2.16.756.5.30.1.127.3.10.7.html).

| | | | |
| :--- | :--- | :--- | :--- |
| ATC_DOC_CREATE | Document upload | [Document Audit Event Content Profile](#document-audit-event-content-profile) | R |
| ATC_DOC_READ | Document retrieval | [Document Audit Event Content Profile](#document-audit-event-content-profile) | R |
| ATC_DOC_UPDATE | Document or Document Metadata update | [Document Audit Event Content Profile](#document-audit-event-content-profile) | R |
| ATC_DOC_DELETE | Document removal | [Document Audit Event Content Profile](#document-audit-event-content-profile) | R |
| ATC_DOC_SEARCH | Document search | [Document Audit Event Content Profile](#document-audit-event-content-profile) | R |
| ATC_POL_CREATE_AUT_PART_AL | Authorize participants to access level/date | [Policy Audit Event Content Profile](#policy-audit-event-content-profile) | R, (NP if not reference community) |
| ATC_POL_UPDATE_AUT_PART_AL | Update access level/date of authorized participants | [Policy Audit Event Content Profile](#policy-audit-event-content-profile) | R, (NP: if not reference community) |
| ATC_POL_REMOVE_AUT_PART_AL | Remove authorization for participants | [Policy Audit Event Content Profile](#policy-audit-event-content-profile) | R, (NP: if not reference community) |
| ATC_POL_DEF_CONFLEVEL | Set or update default Confidentiality Level | [Policy Audit Event Content Profile](#policy-audit-event-content-profile) | R, (NP: if not reference community) |
| ATC_POL_DIS_EMER_USE | Disabling Emergency Access | [Policy Audit Event Content Profile](#policy-audit-event-content-profile) | R, (NP: if not reference community) |
| ATC_POL_ENA_EMER_USE | Enabling Emergency Access | [Policy Audit Event Content Profile](#policy-audit-event-content-profile) | R, (NP: if not reference community) |
| ATC_POL_INCL_BLACKLIST | Assign Healthcare Professional to Blacklist | [Policy Audit Event Content Profile](#policy-audit-event-content-profile) | R, (NP: if not reference community) |
| ATC_POL_EXL_BLACKLIST | Exclude Healthcare Professional from Blacklist | [Policy Audit Event Content Profile](#policy-audit-event-content-profile) | R, (NP: if not reference community) |
| ATC_LOG_READ | Accessing Patient Audit Record Repository | [Access Audit Trail Content Profile](#access-audit-trail-content-profile) | R |
| ATC_HPD_GROUP_ENTRY_NOTIFY | Entry of healthcare professionals into a group | [HPD Group Entry Audit Event Content Profile](#hpd-group-entry-audit-event-content-profile) | R, (NP: if not reference community) |

**Table 4: Audit Trail Consumption Event Types**

### Document Audit Event Content Profile

This content profile describes Audit Event related to Document Management. The following Data Elements shall be provided:

| | | |
| :--- | :--- | :--- |
| **Data Element** | **Description** | **Property/Value** |
| Event Type | Document uploadDocument retrievalDocument or Document Metadata updateDocument removalDocument search | |
| Event Date and Time |   | FHIR instant |
| Participants |   |   |
| Initiator | Patient | Name |
| Representative of patient | NameUAP-ID or EPR-SPID | |
| Authorized Healthcare Professional | NameGLN | |
| Assistant of a Healthcare Professional | NameGLN[[5.1]](#_ftn5.1) | |
| Technical User | NameIdentifier | |
| Document Administrator | NameUAP-ID | |
| Responsible[[5.2]](#_ftn5.2) | Patient | Name |
| Healthcare Professional | NameGLN | |
| Groups where Healthcare Professional is member |   | Name of GroupOID |
| Purpose of Use |   | NORM, EMER, AUTO, DICOM_AUTO |
| Patient | Involved patient | EPR-SPID |
| Document[[5.3]](#_ftn5.3) | type of document | typeCode[[5.4]](#_ftn5.4)(SNOMED CT code) |
| reference to document | [uniqueId](https://profiles.ihe.net/ITI/TF/Volume3/ch-4.2.html#4.2.3.2.26)[repositoryUniqueId](https://profiles.ihe.net/ITI/TF/Volume3/ch-4.2.html#4.2.3.2.18)[homeCommunityID](https://profiles.ihe.net/ITI/TF/Volume3/ch-4.2.html#4.2.3.2.12) | |
| title of document | [title](https://profiles.ihe.net/ITI/TF/Volume3/ch-4.2.html#4.2.3.2.24) | |

[[5.1]](#_ftnref5.1) if known, optional by XUA

[[5.2]](#_ftnref5.2) If different from Initiator (Representative of patient acting on behalf of a patient then patient is responsible).

[[5.3]](#_ftnref5.3) Required for Document upload, Document retrieval, Document or Document Metadata update and Document removal but not for Document search.

[[5.4]](#_ftnref5.4) Annex 3 EPRO-FDHA, chapter 2.6 type of document (2.16.756.5.30.1.127.3.10.1.27).

**Table 5: Document Audit Event Data Elements**

This profile defines the content of the document audit events which a community has to provide for a patient's audit trail. This profile builds on AuditEvent ([http://hl7.org/fhir/R4/auditevent.html](http://hl7.org/fhir/R4/auditevent.html)).

* [StructureDefinition for Document Audit Event Profile](StructureDefinition-DocumentAuditEvent.md)

The mapping from the Document Audit Event Resource to the Data Elements is as follows:

* [Mapping for Document Audit Event Profile](StructureDefinition-DocumentAuditEvent-mappings.md)

#### Example of a Document Audit Event: Document upload

| | |
| :--- | :--- |
| Event | Upload |
| Resource title of Document | Austrittsbericht von Julia Helfe-Gern |
| Resource: type of Document | Sonstige Dokumentation (SNOMED CT: 419891008) |
| Resource: reference to Document | uniqueID |
| Event Date and Time | 10.10.2020 18:29 |
| Participant, Initiator | Julia Helfe-Gern |
| Participant, Responsible | representing Jakob Wieder-Gesund |

**Table 6: Uploading a Record Artifact by a patient representative (atc-doc-create-rep-pat)**

* Example for Document Audit Event Profile: [XML](AuditEvent-atc-doc-create-rep-pat.xml.md), [JSON](AuditEvent-atc-doc-create-rep-pat.json.md)

#### Example of a Document Audit Event: Document search

| | |
| :--- | :--- |
| Event | Search for documents |
| Event Date and Time | 10.10.2020 18:49 |
| Participant, Initiator | David Mustermann |
| Participant, Responsible | representing Dr. med. Sabine Musterfrau |
| Participant, Group | Kardiologie Universitätsspital Musterstadt |
| Purpose of event | Emergency Access |

**Table 7: Example of a Document Audit Event: Document search**

* Example for Document Audit Event Profile: [XML](AuditEvent-atc-doc-search.xml.md), [JSON](AuditEvent-atc-doc-search.json.md)

### Policy Audit Event Content Profile

This content profile describes Audit Events related to Policy Management. The following Data Elements shall be provided:

| | | |
| :--- | :--- | :--- |
| **Data Element** | **Description** | **Property/Value** |
| Event Type | Authorize participants to access level/date | |
| Update access level/date of authorized participants | | |
| Remove authorization for participants to access level/date | | |
| Set or update the default Confidentiality Level for new documents | | |
| Disabling Emergency Access | | |
| Enabling Emergency Access | | |
| Exclude a Healthcare Professional from accessing the EPR | | |
| Revoke the exclusion of a Healthcare Professional from accessing the EPR | | |
| Event Date Time |   | FHIR instant |
| Participants |   |   |
| Initiator | Patient | Name |
| Representative of patient | NameUAP-ID or EPR-SPID | |
| Authorized Healthcare Professional[[8.1]](#_ftn8.1) | NameGLN | |
| Assistant of a Healthcare Professional | NameGLN | |
| Policy Administrator | NameUAP-ID | |
| Responsible | Patient | Name |
| Healthcare Professional | NameGLN | |
| Patient | Involved patient | EPR-SPID |
| Resource | Resource Role | HCP, GRP or REP |
| Healthcare Professional | NameGLN | |
| Group of Healthcare Professional | Name of GroupOID | |
| Representative of patient | NameUAP-ID or EPR-SPID | |
| AccessLevel[[8.2]](#_ftn8.2) | one of urn:e-health-suisse:2015:policies:access-level:normal, restricted, delegation-and-restricted, delegation-and-normal, full | |
| AccessLimitedToDate[[8.2]](#_ftn8.2) | Date | |
| ProvideLevel[[8.3]](#_ftn8.3) | one of urn:e-health-suisse:2015:policies:provide-level:normal, restricted, secret | |

[[8.1]](#_ftnref8.1) Healthcare Professional or Assistant of Healthcare Professional can only be a participant for the first Event Type (Authorize participants to access level).

[[8.2]](#_ftnref8.2) Access Level and the date if the access is limited (AccessLimitedToDate) are required for the first two Event Types (Authorize, update Authorization participants to access level/date), for the other Event Types these parameters do not need to be specified.

[[8.3]](#_ftnref8.3) Provide Level is only relevant for the Event Type Default Confidentiality Level for new Documents.

**Table 8: Policy Audit Event Data Elements**

This content profile defines the policy audit events which a community has to provide for a patients audit trail. This profile builds on AuditEvent ([http://hl7.org/fhir/R4/auditevent.html](http://hl7.org/fhir/R4/auditevent.html)).

* [StructureDefinition for Policy Audit Event Profile](StructureDefinition-PolicyAuditEvent.md)

The mapping from the Policy Audit Event Resource to the Data Elements is as follows:

* [Mapping for Policy Audit Event Profile](StructureDefinition-PolicyAuditEvent-mappings.md)

#### Examples

| | |
| :--- | :--- |
| Event | Create |
| Resource: HCP | EPR-Access Level "delegation-and-restricted"till 31.12.2020 08:00 toDr. med. Hans Allzeitbereit |
| Event Date and Time | 22.09.2020 09:47 |
| Participant Initiator | Jakob Wieder-Gesund |

**Table 9: Example Create Delegation and Restricted access for a healthcare professional (atc-pol-create-acc-right)**

* Example for Policy Audit Event Profile: [XML](AuditEvent-atc-pol-create-acc-right.xml.md), [JSON](AuditEvent-atc-pol-create-acc-right.json.md)

| | |
| :--- | :--- |
| Event | Create |
| Resource: Representative | Julia Helfe-Gern |
| Event Date and Time | 22.09.2020 09:48 |
| Participant Initiator | Jakob Wieder-Gesund |

**Table 10: Example Create for a representative (atc-pol-create-rep)**

* Example for Policy Audit Event Profile: [XML](AuditEvent-atc-pol-create-rep.xml.md), [JSON](AuditEvent-atc-pol-create-rep.json.md)

### Access Audit Trail Content Profile

This content profile describes Audit Event related to Accessing the Audit Trail of a Patient from a Patient Audit Record Repository. The following Data Elements shall be provided:

| | | |
| :--- | :--- | :--- |
| **Data Element** | **Description** | **Property/Value** |
| Event Type |   | Access Audit Trail |
| Event Date and Time |   | FHIR instant |
| Participants |   |   |
| Initiator | Patient | Name |
| Representative of patient | NameUAP-ID or EPR-SPID | |
| Responsible | Patient | Name |
| Patient | Involved patient | EPR-SPID |

**Table 11: Access Audit Trail Data Elements**

This content profile defines the access audit trail event, which a community has to provide for a patient’s audit trail. This profile builds on AuditEvent ([http://hl7.org/fhir/R4/auditevent.html](http://hl7.org/fhir/R4/auditevent.html)).

* [StructureDefinition for Access Audit Trail Event Profile](StructureDefinition-AccessAuditTrailEvent.md)

The mapping from the Access Audit Trail Event Resource to the Data Elements is as follows:

* [Mapping for Access Audit Trail Event Profile](StructureDefinition-AccessAuditTrailEvent-mappings.md)

#### Example

| | |
| :--- | :--- |
| Event | Access Audit Trail |
| Patient | Jakob Wieder-Gesund |
| Timestamp | 22.09.2020 10:47 |
| Participant | Jakob Wieder-Gesund |

**Table 12: Example Log Access (atc-log-read)**

* Example for Access Audit Trail Event Profile: [XML](AuditEvent-atc-log-read.xml.md), [JSON](AuditEvent-atc-log-read.json.md)

### HPD Group Entry Audit Event Content Profile

This content profile describe the Audit Event related to the entry of a healthcare professional into a HPD group for which the patient is notified. The following Data Elements shall be provided:

| | | |
| :--- | :--- | :--- |
| **Data Element** | **Description** | **Property/Value** |
| Event Type | Patient notified of Healthcare Professionals added to a group | |
| Event Date and Time |   | FHIR instant |
| Notification Service |   | Name |
| Patient | Notified patient | EPR-SPID |
| Healthcare Professionals | Healthcare professionals | NameGLN |
| Group | Group where Healthcare Professionals are added as members | Name of GroupOID |

**Table 13: HPD Group Entry Audit Event Elements**

This profile defines the content of the HPD group entry audit event. This profile builds on AuditEvent ([http://hl7.org/fhir/R4/auditevent.html](http://hl7.org/fhir/R4/auditevent.html)).

* [StructureDefinition for HPD Group Entry Audit Event Profile](StructureDefinition-HpdAuditEvent.md)

The mapping from the HPD Group Entry Audit Event Resource to the Data Elements is as follows:

* [Mapping for HPD Group Entry Audit Event Profile](StructureDefinition-HpdAuditEvent-mappings.md)

#### Example

| | |
| :--- | :--- |
| Event | Group entry of healthcare professional: |
| Healthcare professionals | Dr. med. Sabine Musterfrau |
| Timestamp | 10.10.2020 10:05 |
| Participant, Group | Kardiologie Universitätsspital Musterstadt |
| Patient | Jakob Wieder-Gesund |

**Table 14: Example group entry of healthcare professionals**

* Example for HPD Group Entry Audit Event Profile: [XML](AuditEvent-atc-hpd-group-entry-notify.xml.md), [JSON](AuditEvent-atc-hpd-group-entry-notify.json.md)

