# Artifacts Summary - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* **Artifacts Summary**

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

### Behavior: Capability Statements 

The following artifacts define the specific capabilities that different types of systems are expected to have in order to comply with this implementation guide. Systems conforming to this implementation guide are expected to declare conformance to one or more of the following capability statements.

| | |
| :--- | :--- |
| [ATNA Audit Creator (client)](CapabilityStatement-CH.ATNA.AuditCreator.md) | CapabilityStatement for Client Actor in the IHE IT Infrastructure Technical Framework Supplement Add RESTful ATNA. |
| [ATNA Audit Record Repository (server)](CapabilityStatement-CH.ATNA.AuditRecordRepository.md) | CapabilityStatement for Server Actor in the IHE IT Infrastructure Technical Framework Supplement Add RESTful ATNA. |
| [CH PDQm Consumer requirements CapabilityStatement](CapabilityStatement-CH.PDQm.Consumer.md) | The PDQm Patient Demographics Consumer Actor requirements CapabilityStatement expresses the requirements that can be utilized while being compliant.* Query against the FHIR endpoint to the Patient Resource endpoint
* Using FHIR R4
* may request json or xml encoding
* TLS SHALL be used together with IUA basic access token
 |
| [CapabilityStatement for the Patient Audit Record Repository](CapabilityStatement-PatientAuditRecordRepositoryCapabilityStatement.md) | Defines the CapabilityStatement for the Patient Audit Record Repository actor of ITI-81. |
| [EPR API (server)](CapabilityStatement-CH.EPR.API.md) | CapabilityStatement for EPR API (server). |
| [EPR App (client)](CapabilityStatement-CH.EPR.App.md) | CapabilityStatement for EPR App (client). |
| [MHD Document Consumer (client)](CapabilityStatement-CH.MHD.DocumentConsumer.md) | CapabilityStatement for Actor MHD Document Consumer (client). |
| [MHD Document Recipient (server)](CapabilityStatement-CH.MHD.DocumentRecipient.md) | CapabilityStatement for Actor MHD Document Recipient (server). |
| [MHD Document Responder (server)](CapabilityStatement-CH.MHD.DocumentResponder.md) | CapabilityStatement for Actor MHD Document Responder (server). |
| [MHD Document Source (client)](CapabilityStatement-CH.MHD.DocumentSource.md) | CapabilityStatement for Actor MHD Document Source (client). |
| [PDQm Supplier (server)](CapabilityStatement-CH.PDQm.Supplier.md) | The PDQm Patient Demographics Supplier Actor requirements CapabilityStatement expresses the requirements that shall be provided.* Query against the FHIR endpoint to the Patient Resource endpoint
* Using FHIR R4
* shall support both json or xml encoding
* TLS SHALL be used together with IUA basic access token
* SHALL support the PDQm $match operation
* SHALL return Patient Resources conforming to the PDQm Patient Profile
 |
| [PIXm Patient Identifier Cross-Reference Consumer (client)](CapabilityStatement-CH.PIXm.Consumer.md) | The Patient Identifier Cross-reference Consumer Actor CapabilityStatement expresses the requirements that can be utilized while being compliant. - using FHIR R4 - using json or xml encoding - query the $ihe-pix operation |
| [PIXm Patient Identifier Cross-reference Manager (server)](CapabilityStatement-CH.PIXm.Manager.md) | The Patient Identifier Cross-reference Manager CapabilityStatement expresses the requirements that shall be provided. - using FHIR R4 - using json and xml encoding - support the $ihe-pix operation - support conditional update for [ITI-104] - support conditional delete for [ITI-104] if Remove Patient Option is supported - used with IHE-IUA |
| [PIXm Patient Identity Source (client)](CapabilityStatement-CH.PIXm.Source.md) | The Patient Identity Source Actor CapabilityStatement expresses the requirements that can be utilized while being compliant. - using FHIR R4 - using json or xml encoding - using conditional update for [ITI-104] - provide supported Patient profile for cross-referencing for [ITI-104] |
| [PPQm Policy Repository (server)](CapabilityStatement-CH.PPQm.PolicyRepository.md) | CapabilityStatement for the Policy Repository actor in the CH:PPQm profile (server). |
| [PPQm Policy Source and Consumer (client)](CapabilityStatement-CH.PPQm.PolicySourceConsumer.md) | CapabilityStatement for the Policy Source and Policy Consumer actors in the CH:PPQm profile (client). |
| [mCSD Data Source (client)](CapabilityStatement-CH.mCSD.DataSource.md) | CapabilityStatement for Data Source Actor in the IHE IT Infrastructure Technical Framework Supplement IHE mCSD. |
| [mCSD Directory (server)](CapabilityStatement-CH.mCSD.Directory.md) | CapabilityStatement for Server Actor in the IHE IT Infrastructure Technical Framework Supplement IHE mCSD. |
| [mCSD Query Client (client)](CapabilityStatement-CH.mCSD.QueryClient.md) | CapabilityStatement for Client Actor in the IHE IT Infrastructure Technical Framework Supplement IHE mCSD. |

### Behavior: Operation Definitions 

These are custom operations that can be supported by and/or invoked by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH PDQm $Match](OperationDefinition-CHPDQmMatch.md) | This operation implements the[Patient Demographics Match [ITI-119]](iti-119.md)transaction. It is fully compatible with the[$match Operation on Patient](http://hl7.org/fhir/R4/patient-operation-match.html). The only changes are to constrain the input parameters to use the[PDQm Patient Profile for $match Input](StructureDefinition-CHPDQmMatchInput.md)profile and to constrain the output parameters to use the[PDQm Patient Profile](StructureDefinition-ch-pdqm-patient.md)profile. |
| [PIXm Find patient matches](OperationDefinition-CH.PIXm.md) | Find patient matches using IHE-PIXm Profile |

### Behavior: Search Parameters 

These define the properties by which a RESTful server can be searched. They can also be used for sorting and including related resources.

| | |
| :--- | :--- |
| [Search Parameter AuditEvent entity.identifier](SearchParameter-AuditEvent-entity-identifier.md) | Defines the IHE RESTFul ATNA Query Parameter entity.identifier for an AuditEvent. |

### Structures: Resource Profiles 

These define constraints on FHIR resources for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH ATC AuditEvent](StructureDefinition-ch-atc-auditevent.md) | CH ATC profile on AuditEvent |
| [CH Audit Event for [CH:MHD-1] Document Responder](StructureDefinition-ch-mhd-updatedocumentmetadata-audit-responder.md) | This profile is used to define the CH Audit Event for the [CH:MHD-1] transaction and the actor 'Document Responder'. |
| [CH Audit Event for [CH:MHD-1] Document Source](StructureDefinition-ch-mhd-updatedocumentmetadata-audit-source.md) | This profile is used to define the CH Audit Event for the [CH:MHD-1] transaction and the actor 'Document Source'. |
| [CH Audit Event for [ITI-104] Patient Identifier Cross-reference Manager / Create patient](StructureDefinition-ChAuditEventIti104ManagerCreate.md) | This profile is used to define the CH Audit Event for the [ITI-104] transaction and the actor 'Patient Identifier Cross-reference Manager' when creating a patient. |
| [CH Audit Event for [ITI-104] Patient Identifier Cross-reference Manager / Update patient](StructureDefinition-ChAuditEventIti104ManagerUpdate.md) | This profile is used to define the CH Audit Event for the [ITI-104] transaction and the actor 'Patient Identifier Cross-reference Manager' when updating a patient. |
| [CH Audit Event for [ITI-104] Patient Identity Source](StructureDefinition-ChAuditEventIti104Source.md) | This profile is used to define the CH Audit Event for the [ITI-104] transaction and the actor 'Patient Identity Source'. |
| [CH Audit Event for [ITI-119] Patient Demographics Consumer](StructureDefinition-ChAuditEventIti119Consumer.md) | This profile is used to define the CH Audit Event for the [ITI-119] transaction and the actor 'Patient Demographics Consumer'. |
| [CH Audit Event for [ITI-119] Patient Demographics Supplier](StructureDefinition-ChAuditEventIti119Supplier.md) | This profile is used to define the CH Audit Event for the [ITI-119] transaction and the actor 'Patient Demographics Supplier'. |
| [CH Audit Event for [ITI-130] Data Source & Directory / Create](StructureDefinition-ChAuditEventIti130Create.md) | This profile is used to define the CH Audit Event for the [ITI-130] transaction and the actors 'Data Source' & Directory, when adding care service resources. |
| [CH Audit Event for [ITI-130] Data Source & Directory / Delete](StructureDefinition-ChAuditEventIti130Delete.md) | This profile is used to define the CH Audit Event for the [ITI-130] transaction and the actors 'Data Source' & Directory, when deleting care service resources. |
| [CH Audit Event for [ITI-130] Data Source & Directory / Update](StructureDefinition-ChAuditEventIti130Update.md) | This profile is used to define the CH Audit Event for the [ITI-130] transaction and the actors 'Data Source' & Directory, when updating care service resources. |
| [CH Audit Event for [ITI-65] Document Recipient](StructureDefinition-ChAuditEventIti65Recipient.md) | This profile is used to define the CH Audit Event for the [ITI-65] transaction and the actor 'Document Recipient'. |
| [CH Audit Event for [ITI-65] Document Source](StructureDefinition-ChAuditEventIti65Source.md) | This profile is used to define the CH Audit Event for the [ITI-65] transaction and the actor 'Document Source'. |
| [CH Audit Event for [ITI-67] Document Consumer](StructureDefinition-ChAuditEventIti67Consumer.md) | This profile is used to define the CH Audit Event for the [ITI-67] transaction and the actor 'Document Consumer'. |
| [CH Audit Event for [ITI-67] Document Responder](StructureDefinition-ChAuditEventIti67Responder.md) | This profile is used to define the CH Audit Event for the [ITI-67] transaction and the actor 'Document Responder'. |
| [CH Audit Event for [ITI-68] Document Consumer](StructureDefinition-ChAuditEventIti68Consumer.md) | This profile is used to define the CH Audit Event for the [ITI-68] transaction and the actor 'Document Consumer'. |
| [CH Audit Event for [ITI-68] Document Responder](StructureDefinition-ChAuditEventIti68Responder.md) | This profile is used to define the CH Audit Event for the [ITI-68] transaction and the actor 'Document Responder'. |
| [CH Audit Event for [ITI-83] Patient Identifier Cross-reference Consumer](StructureDefinition-ChAuditEventIti83Consumer.md) | This profile is used to define the CH Audit Event for the [ITI-83] transaction and the actor 'Patient Identifier Cross-reference Consumer'. |
| [CH Audit Event for [ITI-83] Patient Identifier Cross-reference Manager](StructureDefinition-ChAuditEventIti83Manager.md) | This profile is used to define the CH Audit Event for the [ITI-83] transaction and the actor 'Patient Identifier Cross-reference Manager'. |
| [CH Audit Event for [ITI-90] Query Client & Directory / Query](StructureDefinition-ChAuditEventIti90Query.md) | This profile is used to define the CH Audit Event for the [ITI-90] transaction and the actors 'Query Client' & Directory, when querying care service resources. |
| [CH Audit Event for [ITI-90] Query Client & Directory / Read](StructureDefinition-ChAuditEventIti90Read.md) | This profile is used to define the CH Audit Event for the [ITI-90] transaction and the actors 'Query Client' & Directory, when reading care service resources. |
| [CH Audit Event for [PPQ-3] Create privacy policy](StructureDefinition-ChAuditEventPpq3Create.md) | This profile is used to define the CH Audit Event for the [PPQ-3] transaction and the actors 'Policy Source' and 'Policy Repository' when creating a privacy policy. |
| [CH Audit Event for [PPQ-3] Delete privacy policy](StructureDefinition-ChAuditEventPpq3Delete.md) | This profile is used to define the CH Audit Event for the [PPQ-3] transaction and the actors 'Policy Source' and 'Policy Repository' when deleting a privacy policy. |
| [CH Audit Event for [PPQ-3] Update privacy policy](StructureDefinition-ChAuditEventPpq3Update.md) | This profile is used to define the CH Audit Event for the [PPQ-3] transaction and the actors 'Policy Source' and 'Policy Repository' when updating a privacy policy. |
| [CH Audit Event for [PPQ-5] Policy Consumer](StructureDefinition-ChAuditEventPpq5Consumer.md) | This profile is used to define the CH Audit Event for the [PPQ-5] transaction and the actor 'Policy Consumer'. |
| [CH Audit Event for [PPQ-5] Policy Repository](StructureDefinition-ChAuditEventPpq5Repository.md) | This profile is used to define the CH Audit Event for the [PPQ-5] transaction and the actor 'Policy Repository'. |
| [CH Audit Event with a Basic Auth Token](StructureDefinition-ChAuditEventBasicToken.md) | This is the profile for Swiss Audit Events when a transaction is secured with a Basic Authorization Token. |
| [CH Audit Event with an Extended Auth Token](StructureDefinition-ChAuditEventExtendedToken.md) | This is the profile for Swiss Audit Events when a transaction is secured with an Extended Authorization Token. |
| [CH MHD DocumentReference Comprehensive](StructureDefinition-ch-mhd-documentreference-comprehensive.md) | CH MHD Profile on CH Core DocumentReference |
| [CH MHD Find Document References Comprehensive Response message](StructureDefinition-ch-mhd-documentreference-comprehensive-bundle.md) | A profile on the Find Document References Comprehensive Response message for ITI-68 |
| [CH MHD Provide Document Bundle Comprehensive](StructureDefinition-ch-mhd-providedocumentbundle-comprehensive.md) | IHE MHD profile on Provide Document Bundle (ITI-65) transaction with Comprehensive Metadata for the Swiss EPR. |
| [CH MHD Provide Document Bundle Comprehensive Response](StructureDefinition-ch-mhd-providedocumentbundle-comprehensive-response.md) | IHE MHD profile on Response of Provide Document Bundle (ITI-65) transaction with Comprehensive Metadata. |
| [CH MHD SubmissionSet Comprehensive](StructureDefinition-ch-mhd-submissionset-comprehensive.md) | CH MHD SubmissionSet Comprehensive |
| [CH MHD-1 Update Document Metadata Transaction Request](StructureDefinition-ch-mhd-1-updatedocumentmetadatatransactionrequest.md) | A profile for Update Document Metadata (CH:MHD-1) transaction request |
| [CH MHD-1 Update Document Metadata Transaction Response](StructureDefinition-ch-mhd-1-updatedocumentmetadatatransactionresponse.md) | A profile for Update Document Metadata (CH:MHD-1) transaction response |
| [CH PDQm Match Input Parameters Profile](StructureDefinition-CHPDQmMatchParametersIn.md) | The PDQm Match Input Parameters Profile describes the Parameters Resource that is to be posted to the $match endpoint when invoking ITI-119. This profile is consistent with the exceptions of the[Patient-match operation in FHIR core](http://hl7.org/fhir/R4/patient-operation-match.html), except the input resource SHALL be an instance of the[PDQm Patient Profile for $match Input](StructureDefinition-CHPDQmMatchInput.md).Note that the only REQUIRED parameter is the Patient Resource. When only the Patient is supplied, it can be POSTed directly to the $match endpoint without being wrapped in a Parameters Resource, as long as it conforms to the[PDQm Patient Profile for $match Input](StructureDefinition-CHPDQmMatchInput.md). |
| [CH PDQm Match Output Bundle Profile](StructureDefinition-ch-pdqm-matchparametersout.md) | A profile on the Query Patient Resource Response message for ITI-119 |
| [CH PDQm OperationOutcome More Attributes Requested](StructureDefinition-ch-pdqm-moreattributesrequested.md) | A profile on the OperationOutcome for indicating which additional attributes are requested to lower the results number. |
| [CH PDQm Patient](StructureDefinition-ch-pdqm-patient.md) | The patient demographics and identifier information which can be provided in the PDQm response according to the EPR. If the patient is already registered in a community, the MPI-PID SHALL be provided as an identifier. The EPR-SPID as an identifier MAY be added. The birthname can be added with the ISO 21090 qualifier extension. |
| [CH PDQm Patient Profile for $match Input](StructureDefinition-CHPDQmMatchInput.md) | The PDQm Patient Profile for $match Input SHALL be provided as input to the ITI-119 transaction.* While it is not REQUIRED that the input to $match be a valid FHIR instance, it is RECOMMENDED to supply as many elements as possible to facilitate matching.
* modifierExtension and implicitRules SHALL not be specified.
* The ChEprFhirBirthName profile is available to hold the mother's maiden name
 |
| [CH PIXm Feed Organization](StructureDefinition-ch-pixm-feed-organization.md) | The organization information which can be provided in the PIXm Feed according to the EPR. The organization identifier SHALL be expressed as an ISO OID. The organization SHALL have at least one of telecom, address, or contact person to be present. |
| [CH PIXm IN Parameters](StructureDefinition-ch-pixm-in-parameters.md) | The StructureDefinition defines the Input Parameters for the $ihe-pix operation: - Input: sourceIdentifier, targetSystem |
| [CH PIXm OUT Parameters](StructureDefinition-ch-pixm-out-parameters.md) | The StructureDefinition defines the Output Parameters for the $ihe-pix operation: |
| [CH PIXm Patient Feed](StructureDefinition-ch-pixm-patient-feed.md) | The patient demographics and identifier information which can be provided in the PIXm Feed according to the EPR. The EPR-SPID as an identifier SHALL be added. The birthname can be added with the ISO 21090 qualifier extension. |
| [CH PPQm Consent](StructureDefinition-PpqmConsent.md) | Swiss EPR Policy Set as a Consent |
| [CH PPQm Feed Request Bundle](StructureDefinition-PpqmFeedRequestBundle.md) | Bundle for Mobile Privacy Policy Bundle Feed requests |
| [CH PPQm Retrieve Response Bundle](StructureDefinition-PpqmRetrieveResponseBundle.md) | Bundle for Mobile Privacy Policy Retrieve responses |
| [CH mCSD Feed Practitioner](StructureDefinition-CH.mCSD.Feed.Practitioner.md) | CH mCSD profile on Practitioner Feed |
| [CH mCSD Organization](StructureDefinition-CH.mCSD.Organization.md) | CH mCSD profile on Organization |
| [CH mCSD Practitioner](StructureDefinition-CH.mCSD.Practitioner.md) | CH mCSD profile on Practitioner |
| [CH mCSD PractitionerRole](StructureDefinition-CH.mCSD.PractitionerRole.md) | CH mCSD profile on PractitionerRole |
| [EPR policy set based on template 201](StructureDefinition-PpqmConsentTemplate201.md) | EPR policy set based on template 201 – grants the patient the full access to the their EPR. This policy set shall be created during the patient's onboarding. |
| [EPR policy set based on template 202](StructureDefinition-PpqmConsentTemplate202.md) | EPR policy set based on template 202 – grants healthcare professionals access to the patient's EPR in emergency mode. This policy set shall be created during the patient's onboarding, but can be modified later. |
| [EPR policy set based on template 203](StructureDefinition-PpqmConsentTemplate203.md) | EPR policy set based on template 203 – defines the minimal confidentiality level of documents. This policy set shall be created during the patient's onboarding, but can be modified later. |
| [EPR policy set based on template 301](StructureDefinition-PpqmConsentTemplate301.md) | EPR policy set based on template 301 – allowing a user (health professional) to access the patient's EPD according to the scope of the referenced access level (PolicySetIdReference below), without delegation. |
| [EPR policy set based on template 302](StructureDefinition-PpqmConsentTemplate302.md) | EPR policy set based on template 302 – gives a group of healthcare professionals read access to the patient's EPR, without delegation rights. |
| [EPR policy set based on template 303](StructureDefinition-PpqmConsentTemplate303.md) | EPR policy set based on template 303 – gives a representative full access to the patient's EPR. |
| [EPR policy set based on template 304](StructureDefinition-PpqmConsentTemplate304.md) | EPR policy set based on template 304 – gives a particular healthcare professional read access to the patient's EPR, with delegation rights. |
| [Profile on AccessAuditTrailEvent for CH ATC](StructureDefinition-AccessAuditTrailEvent.md) | This profile defines the content of the access audit trail event which a community has to provide for a patients audit trail. |
| [Profile on DocumentAuditEvent for CH ATC](StructureDefinition-DocumentAuditEvent.md) | This profile defines the content of the document audit events which a community has to provide for a patients audit trail. |
| [Profile on HpdAuditEvent for CH ATC](StructureDefinition-HpdAuditEvent.md) | This profile defines the content of the HPD audit events which a community has to provide for a patients audit trail. |
| [Profile on PolicyAuditEvent for CH ATC](StructureDefinition-PolicyAuditEvent.md) | This profile defines the content of the policy audit events which a community has to provide for a patients audit trail. |
| [Retrieve CH ATC ATNA Audit Event [ITI-81] Response](StructureDefinition-CH-ATC.ITI-81.Response.md) | This profile defines the response to the [ITI-81] query. The response is a search set including all audit events which a community has to provide for a patients audit trail. |
| [Transaction Bundle Profile for ITI-130 Process Care Services Resources Request Message](StructureDefinition-CH.mCSD.ProcessCareServices.md) | A profile on the Bundle transaction for ITI-130 Process Care Services Resources Request Message |

### Structures: Data Type Profiles 

These define constraints on FHIR data types for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH EPR FHIR BirthName](StructureDefinition-ch-epr-fhir-birthname.md) | The birthname with the ISO 21090 qualifier https://www.hl7.org/fhir/extension-iso21090-en-qualifier.html BR |
| [CH EPR FHIR HumanName](StructureDefinition-ch-epr-fhir-humanname.md) | The human name WITHOUT the ISO 21090 qualifier https://www.hl7.org/fhir/extension-iso21090-en-qualifier.html BR |
| [DICOM Study Instance UID](StructureDefinition-DicomStudyInstanceUidIdentifier.md) | Identifier[representation](https://www.hl7.org/fhir/imagingstudy.html#notes)of DICOM Study Instance UID |
| [Identifier for XDSDocumentEntry.uniqueId](StructureDefinition-ch-atc-uniqueid-identifier.md) | Identifier for XDSDocumentEntry.uniqueId |
| [LDAP Identifier](StructureDefinition-LdapIdentifier.md) | Identifier with an LDAP DN |
| [Oid Identifier](StructureDefinition-OidIdentifier.md) | Identifier with an oid |

### Structures: Extension Definitions 

These define constraints on FHIR data types for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH Extension Author AuthorRole](StructureDefinition-ch-ext-author-authorrole.md) | Extension Author AuthorRole for SubmissionSet and DocumentEntry |
| [CH Extension Deletion Status](StructureDefinition-ch-ext-deletionstatus.md) | Extension Deletion Status for DocumentReference |
| [CH MHD Extension to provide the homeCommunityId](StructureDefinition-ch-mhd-home-community-id.md) | This CH MHD extension enables to provide homeCommunityId in an OperationOutcome |

### Terminology: Value Sets 

These define sets of codes used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [AccessAuditTrailEventType](ValueSet-AccessAuditTrailEventType.md) | AccessAuditTrailEventType |
| [CH PDQm ValueSet More Attributes Requested](ValueSet-ChPdqmMoreAttributesRequested.md) | Coded Values for indicating which additional attributes are requested to lower the results number. |
| [CH PPQm Actor Identifier Type](ValueSet-PpqmActorIdentifierType.md) | Actor Identifier Types for CH:PPQm |
| [CH PPQm Consent Identifier Type](ValueSet-PpqmConsentIdentifierType.md) | Value Set for CH:PPQm Consent Identifier Types |
| [CH PPQm Feed Request HTTP Method](ValueSet-PpqmFeedRequestHttpMethod.md) | HTTP methods allowed in CH:PPQm Feed requests |
| [CH PPQm Policy Set Template ID](ValueSet-PpqmPolicySetTemplateId.md) | IDs of policy set templates |
| [CH PPQm Referenced Policy Set for Default Provide (203) template](ValueSet-PpqmReferencedPolicySetDefaultProvide.md) | IDs of basis policy sets that may be referenced from template 203 |
| [CH PPQm Referenced Policy Set for Emergency Access (202) and HCP Group (302) templates](ValueSet-PpqmReferencedPolicySetGroupEmergency.md) | IDs of basis policy sets that may be referenced from templates 202 and 302 |
| [CH PPQm Referenced Policy Set for Healthcare Professionals with Delegation (304) template](ValueSet-PpqmReferencedPolicySetHcpWithDelegation.md) | IDs of basis policy sets that may be referenced from template 304 |
| [CH PPQm Referenced Policy Set for Healthcare Professionals without Delegation (301) template](ValueSet-PpqmReferencedPolicySetHcpWithoutDelegation.md) | IDs of basis policy sets that may be referenced from template 301 |
| [CH PPQm Referenced Policy Set for Patients (201) and Representative (303) templates](ValueSet-PpqmReferencedPolicySetFullAccess.md) | IDs of basis policy sets that may be referenced from templates 201 and 303 |
| [CH mCSD Practitioner Administrative Gender Value Set](ValueSet-ch-mcsd-practitioner-gender-vs.md) | Value set for the administrative gender of a CH mCSD Practitioner. Only 'male' and 'female' values are allowed in the HPD context. |
| [DocumentAuditEventType](ValueSet-DocumentAuditEventType.md) | DocumentAuditEventType |
| [EprParticipant](ValueSet-EprParticipant.md) | EprParticipant |
| [HpdAuditEventType](ValueSet-HpdAuditEventType.md) | HpdAuditEventType |
| [PolicyAuditEventType](ValueSet-PolicyAuditEventType.md) | PolicyAuditEventType |
| [Restricted HTTP Verb Value Set](ValueSet-restricted-http-verb-vs.md) | Value set for allowed HTTP verbs, excluding GET operations. |

### Terminology: Code Systems 

These define new code systems used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH Codesystem PDQ More Attributes Requested](CodeSystem-2.16.756.5.30.1.127.3.10.17.md) | Codes for indicating which additional attributes are requested to lower the results number. |
| [CH PPQm Consent Identifier Type](CodeSystem-PpqmConsentIdentifierType.md) | Code system for CH:PPQm Consent Identifier Types |
| [CH PPQm Policy Set Template ID](CodeSystem-PpqmPolicySetTemplateId.md) | Code system for Policy Set Template IDs |
| [IHE XCPD Codesystem more attributes requested](CodeSystem-1.3.6.1.4.1.19376.1.2.27.1.md) | Codes for indicating which additional attributes are requested to lower the results number. |

### Terminology: Naming Systems 

These define identifier and/or code system identities used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [EhsEventTypeCode](NamingSystem-EhsEventTypeCode.md) | NamingSystem for event type code system from eHealth Suisse. |
| [IheEventTypeCode](NamingSystem-IheEventTypeCode.md) | NamingSystem for event type code from IHE. |
| [IheItiXds2013UniqueId](NamingSystem-IheItiXds2013UniqueId.md) | NamingSystem for uniqueId from IHE. |
| [Ldap](NamingSystem-Ldap.md) | NamingSystem for Lightweight Directory Access Protocol (LDAP);[https://www.ietf.org/rfc/rfc4514.html](https://www.ietf.org/rfc/rfc4514.html). |

### Example: Example Instances 

These are example instances that show what data produced and consumed by systems conforming with this implementation guide might look like.

| | |
| :--- | :--- |
| [CH ATC - Access of Audit Trail Repository](AuditEvent-atc-log-read.md) | CH ATC - Access of Audit Trail Repository |
| [CH ATC - Audit Event for Document Search](AuditEvent-atc-doc-search.md) | CH ATC - Audit Event for Document Search |
| [CH ATC - Audit Event for Group Entry Audit Event Content Profile](AuditEvent-atc-hpd-group-entry-notify.md) | CH ATC - AuditEvent of Healthcare professional which has been added to a group and patient has been notified |
| [CH ATC - Create Access Right for Healthcare professional](AuditEvent-atc-pol-create-acc-right.md) | CH ATC - Create Access Right for Healthcare professional |
| [CH ATC - Create Access Right for a representative](AuditEvent-atc-pol-create-rep.md) | CH ATC - Create Access Right a representative |
| [CH ATC - Creation of a Document](AuditEvent-atc-doc-create-rep-pat.md) | CH ATC - Creation of a Document for a patient by a representative of this patient |
| [CH ATC - Reponse Audit Trail](Bundle-ch-atc-iti-81-response-sample.md) | CH ATC - Reponse Audit Trail |
| [CH ATC - Retrieveal of a Document](AuditEvent-atc-doc-read-ass-hpc.md) | CH ATC - Retrieveal of a Document from a patient by an assitant for a healthcare professional |
| [CH MHD-1 Update Document Metadata Transaction Request Example](Bundle-CHMhd1UpdateDocumentMetadataTransactionRequestExample.md) | Example of a CH MHD-1 Update Document Metadata Transaction Request |
| [CH MHD-1 Update Document Metadata Transaction Response Example](Bundle-CHMhd1UpdateDocumentMetadataTransactionResponseExample.md) | Example of a CH MHD-1 Update Document Metadata Transaction Response |
| [Comprehensive DocumentReference for a PDF Document](DocumentReference-DocRefPdf.md) | Comprehensive DocumentReference for a PDF Document |
| [Example of audit event for a [CH:MHD-1] transaction at Responder](AuditEvent-ChAuditEventChMhd1ResponderExample.md) | This example shows an made by the Document Responder for a CH:MHD-1 transaction. |
| [Example of audit event for a [CH:MHD-1] transaction at Source](AuditEvent-ChAuditEventChMhd1SourceExample.md) | This example shows an made by the Document Source for a CH:MHD-1 transaction. |
| [Example of audit event for a [ITI-130] create transaction](AuditEvent-ChAuditEventIti130CreateExample.md) | This example shows an AuditEvent made by the Data Source for a ITI-130 transaction that created a new PractitionerRole (relationship). |
| [Example of audit event for a [ITI-130] delete transaction](AuditEvent-ChAuditEventIti130DeleteExample.md) | This example shows an AuditEvent made by the Directory for a ITI-130 transaction that deleted an Organization. |
| [Example of audit event for a [ITI-130] update transaction](AuditEvent-ChAuditEventIti130UpdateExample.md) | This example shows an AuditEvent made by the Directory for a ITI-130 transaction that updated an existing Practitioner. |
| [Example of audit event for a [PPQ-3] create transaction](AuditEvent-ChAuditEventPpq3CreateExample.md) | This example shows an made by the Policy Source for a PPQ-3 transaction that added a new Consent. |
| [Example of audit event for a [PPQ-3] delete transaction](AuditEvent-ChAuditEventPpq3DeleteExample.md) | This example shows an AuditEvent made by the Policy Source for a PPQ-3 transaction that deleted a Consent. |
| [Example of audit event for a [PPQ-3] update transaction](AuditEvent-ChAuditEventPpq3UpdateExample.md) | This example shows an made by the Policy Repository for a PPQ-3 transaction that updated an existing Consent. |
| [Example of audit event for a [PPQ-5] transaction at Consumer](AuditEvent-ChAuditEventPpq5ConsumerExample.md) | This example shows an made by the Policy Consumer for a PPQ-5 transaction. |
| [Example of audit event for a [PPQ-5] transaction at Repository](AuditEvent-ChAuditEventPpq5RepositoryExample.md) | This example shows an made by the Policy Repository for a PPQ-5 transaction. |
| [Example of audit event for an [ITI-104] add transaction at Manager](AuditEvent-ChAuditEventIti104ManagerCreateExample.md) | This example shows an made by the Patient Identifier Cross-reference Manager for an ITI-104 transaction that added a new Patient. |
| [Example of audit event for an [ITI-104] transaction at Source](AuditEvent-ChAuditEventIti104SourceExample.md) | This example shows an made by the Patient Identity Source for an ITI-104 transaction. |
| [Example of audit event for an [ITI-104] update transaction at Manager](AuditEvent-ChAuditEventIti104ManagerUpdateExample.md) | This example shows an made by the Patient Identifier Cross-reference Manager for an ITI-104 transaction that revised an existing Patient. |
| [Example of audit event for an [ITI-119] transaction at Consumer](AuditEvent-ChAuditEventIti119ConsumerExample.md) | This example shows an made by the Patient Demographics Consumer for an ITI-119 transaction. |
| [Example of audit event for an [ITI-119] transaction at Supplier](AuditEvent-ChAuditEventIti119SupplierExample.md) | This example shows an made by the Patient Demographics Supplier for an ITI-119 transaction. |
| [Example of audit event for an [ITI-65] transaction at Recipient](AuditEvent-ChAuditEventIti65RecipientExample.md) | This example shows an made by the Document Recipient for an ITI-65 transaction. |
| [Example of audit event for an [ITI-65] transaction at Source](AuditEvent-ChAuditEventIti65SourceExample.md) | This example shows an made by the Document Source for an ITI-65 transaction. |
| [Example of audit event for an [ITI-67] transaction at Consumer](AuditEvent-ChAuditEventIti67ConsumerExample.md) | This example shows an made by the Document Consumer for an ITI-67 transaction. |
| [Example of audit event for an [ITI-67] transaction at Responder](AuditEvent-ChAuditEventIti67ResponderExample.md) | This example shows an made by the Document Responder for an ITI-67 transaction. |
| [Example of audit event for an [ITI-68] transaction at Consumer](AuditEvent-ChAuditEventIti68ConsumerExample.md) | This example shows an made by the Document Consumer for an ITI-68 transaction. |
| [Example of audit event for an [ITI-68] transaction at Responder](AuditEvent-ChAuditEventIti68ResponderExample.md) | This example shows an made by the Document Responder for an ITI-68 transaction. |
| [Example of audit event for an [ITI-83] transaction at Consumer](AuditEvent-ChAuditEventIti83ConsumerExample.md) | This example shows an made by the Patient Identifier Cross-reference Consumer for an ITI-83 transaction. |
| [Example of audit event for an [ITI-83] transaction at Manager](AuditEvent-ChAuditEventIti83ManagerExample.md) | This example shows an made by the Patient Identifier Cross-reference Manager for an ITI-83 transaction. |
| [Example of audit event for an [ITI-90] query transaction](AuditEvent-ChAuditEventIti90QueryExample.md) | This example shows an made by the Directory for an ITI-90 transaction that searched Practitioners. |
| [Example of audit event for an [ITI-90] read transaction](AuditEvent-ChAuditEventIti90ReadExample.md) | This example shows an made by the Query Client for an ITI-90 transaction that read an Organization. |
| [Example of bundle of audit events for a [PPQ-4] transaction](Bundle-ChAuditEventPpq4Example.md) | This example shows a Bundle of AuditEvents made by the Policy Source for a PPQ-4 transaction. |
| [MHD Find DocumentReferences](Bundle-Bundle-FindDocumentReferences.md) | MHD Find DocumentReferences - Bundle as Response |
| [MHD OperationOutcome DocumentReference update error identifiers](OperationOutcome-MhdOperationOutcomeErrorXdsMetadataIdentifier.md) | Error OperationOutcome that the updated DocumentReference has not same values for the identifiers |
| [MHD OperationOutcome DocumentReference update error patient id reconciliation](OperationOutcome-MhdOperationOutcomeErrorXDSPatientIDReconciliationError.md) | Error OperationOutcome that the updated DocumentReference references not the same patient |
| [MHD OperationOutcome DocumentReference update error unmodifiable metadata](OperationOutcome-MhdOperationOutcomeErrorUnmodifiableMetadataError.md) | Error OperationOutcome that the updated DocumentReference changed unmodifiable metadata |
| [MHD Provide Document Bundle Response for PDF publication](Bundle-BundleProvideDocument-Response.md) | MHD Provide Document Bundle Response for PDF publication |
| [MHD Provide Document Bundle for a PDF Document](Bundle-BundleProvideDocument.md) | MHD Provide Document Bundle for a PDF Document |
| [PDQm Match response message](Bundle-PDQm-QueryResponse.md) | CH PDQm Match response message example result for Franz Muster, 27.1.1955 |
| [PDQm Match response message too many results](Bundle-PDQm-QueryResponseTooManyResults.md) | CH PDQm Match response message with too many results indication |
| [PDQm OperationOutcome More Attributes Requested Example](OperationOutcome-PDQmResponseMoreAttributesRequested.md) | An example on the OperationOutcome for indicating which additional attributes are requested to lower the results number. |
| [PDQm Patient Franz Muster (Full URL)](Patient-FranzMusterNeedsAbsoluteUrl.md) | Example Patient |
| [PIXm Feed Provider Organization Gruppenpraxis](Organization-GruppenpraxisCH.md) | Example Organization |
| [PIXm Parameters Query Input](Parameters-ParametersPIXmInput.md) | Example Input Parameters Mobile Patient Identifier Cross-reference Query |
| [PIXm Parameters Query Output](Parameters-ParametersPIXmOutput.md) | Example Output Parameters Mobile Patient Identifier Cross-reference Query |
| [PIXm Patient Feed](Patient-PatientPIXmFeed.md) | Example PIXm Patient for Feed |
| [PPQm Consent for template 201](Consent-PpqmConsentTemplate201Example.md) | CH:PPQm Consent for template 201 – Full access for the patient |
| [PPQm Consent for template 202](Consent-PpqmConsentTemplate202Example.md) | CH:PPQm Consent for template 202 – Read access in emergency mode |
| [PPQm Consent for template 203](Consent-PpqmConsentTemplate203Example.md) | CH:PPQm Consent for template 203 – Default provide level |
| [PPQm Consent for template 301](Consent-PpqmConsentTemplate301Example.md) | CH:PPQm Consent for template 301 – Read access for a healthcare professional, without delegation |
| [PPQm Consent for template 302](Consent-PpqmConsentTemplate302Example.md) | CH:PPQm Consent for template 302 – Read access for a group of healthcare professionals |
| [PPQm Consent for template 303](Consent-PpqmConsentTemplate303Example.md) | CH:PPQm Consent for template 303 – Full access for a representative |
| [PPQm Consent for template 304](Consent-PpqmConsentTemplate304Example.md) | CH:PPQm Consent for template 304 – Read access for a healthcare professional, with delegation |
| [PPQm Feed Request Bundle (DELETE)](Bundle-PpqmFeedRequestBundleDelete.md) | CH:PPQm Feed Request Bundle for HTTP method DELETE – delete policy sets |
| [PPQm Feed Request Bundle (POST)](Bundle-PpqmFeedRequestBundleAdd.md) | CH:PPQm Feed Request Bundle for HTTP method POST – add new policy sets |
| [PPQm Feed Request Bundle (PUT)](Bundle-PpqmFeedRequestBundleUpdate.md) | CH:PPQm Feed Request Bundle for HTTP method PUT – conditionally update policy sets |
| [PPQm Feed Response Bundle](Bundle-6de90529-3baa-4157-9bef-e945363b2c39.md) | CH:PPQm Feed Response Bundle |
| [PPQm Retrieve Response Bundle](Bundle-PpqmRetrieveResponseBundle.md) | CH:PPQm Retrieve Response Bundle |
| [mCSD Find Matching Care Services Response Bundle](Bundle-FindMatchingCareServicesResponse.md) | An example of ITI-90 response Bundle in the profile CH mCSD |
| [mCSD Organization Community A](Organization-CommunityA.md) | An example of CHmCSDOrganization that contains the same information as Community A in the Swiss examples (uid=CommunityA,OU=CHCommunity,DC=CPI,O=BAG,C=ch) |
| [mCSD Organization Praxis P](Organization-PraxisP.md) | An example of CHmCSDOrganization that contains the same information as Praxis P in the Swiss examples (uid=CommunityA:00000001001,OU=HCRegulatedOrganization,DC=HPD,O=BAG,C=ch) |
| [mCSD Organization Spital X](Organization-SpitalX.md) | An example of CHmCSDOrganization that contains the same information as Spital X in the Swiss examples (uid=CommunityA:00000001000,OU=HCRegulatedOrganization,DC=HPD,O=BAG,C=ch) |
| [mCSD Organization Spital X Dept. 3](Organization-SpitalXDept3.md) | An example of CHmCSDOrganization that contains the same information as Spital X, Dept. 3 in the Swiss examples (uid=CommunityA:00000001004,OU=HCRegulatedOrganization,DC=HPD,O=BAG,C=ch) |
| [mCSD Practitioner Dr. Peter Pan](Practitioner-DrPeterPan.md) | An example of CHmCSDPractitioner that contains the same information as Dr. Peter Pan in the Swiss examples (uid=CommunityA:00000003002,OU=HCProfessional,DC=HPD,O=BAG,C=ch) |
| [mCSD PractitionerRole Dr. Peter Pan at Praxis P](PractitionerRole-PeterPanPraxisP.md) | An example of CHmCSDPractitionerRole that contains the same information as Dr. Peter Pan - Praxis P Relationship in the Swiss examples (CN=CommunityA:00000001001,OU=Relationship,DC=HPD,O=BAG,C=ch) |
| [mCSD PractitionerRole Dr. Peter Pan at Spital X Dept. 3](PractitionerRole-PeterPanSpitalXDept3.md) | An example of CHmCSDPractitionerRole that contains the same information as Dr. Peter Pan - Spital X, Dept. 3 Relationship in the Swiss examples (CN=CommunityA:00000001004,OU=Relationship,DC=HPD,O=BAG,C=ch) |
| [mCSD-No-peer-Organization-SpitalX](Organization-mCSD-No-peer-Organization-SpitalX.md) | Resource Organization SpitalX |
| [mCSD-No-peer-Practitioner-DrAndrews](Practitioner-mCSD-No-peer-Practitioner-DrAndrews.md) | Resource Practitioner DrAndrews |
| [mCSD-No-peer-Practitioner-DrMeier](Practitioner-mCSD-No-peer-Practitioner-DrMeier.md) | Resource Practitioner DrMeier |
| [mCSD-No-peer-Practitioner-DrReynolds](Practitioner-mCSD-No-peer-Practitioner-DrReynolds.md) | Resource Practitioner DrReynolds |
| [mCSD-No-peer-PractitionerRole-AnnAndrewsSpitalXOsteopathie](PractitionerRole-mCSD-No-peer-PractitionerRole-AnnAndrewsSpitalXOsteopathie.md) | Resource PractitionerRole AnnAndrewsSpitalXOsteopathie |
| [mCSD-No-peer-PractitionerRole-HansMeierSpitalX](PractitionerRole-mCSD-No-peer-PractitionerRole-HansMeierSpitalX.md) | Resource PractitionerRole HansMeierSpitalX |
| [mCSD-No-peer-PractitionerRole-RichardReynoldsSpitalX](PractitionerRole-mCSD-No-peer-PractitionerRole-RichardReynoldsSpitalX.md) | Resource PractitionerRole RichardReynoldsSpitalX |
| [mCSD-No-peer-mcsd-Organization-SpitalX-Osteopathie](Organization-mCSD-No-peer-Organization-SpitalX-Osteopathie.md) | Resource Organization SpitalX-Osteopathie |
| [mCSD-Peer-to-peer-Organization-Auryn-Spital](Organization-mCSD-Peer-to-peer-Organization-Auryn-Spital.md) | Resource Organization Auryn-Spital |
| [mCSD-Peer-to-peer-Organization-Fuchur-Klinik](Organization-mCSD-Peer-to-peer-Organization-Fuchur-Klinik.md) | Resource Organization Fuchur-Klinik |
| [mCSD-Peer-to-peer-Practitioner-DrBux](Practitioner-mCSD-Peer-to-peer-Practitioner-DrBux.md) | Resource Practitioner DrBux |
| [mCSD-Peer-to-peer-Practitioner-DrGmork](Practitioner-mCSD-Peer-to-peer-Practitioner-DrGmork.md) | Resource Practitioner DrGmork |
| [mCSD-Peer-to-peer-Practitioner-DrKoreander](Practitioner-mCSD-Peer-to-peer-Practitioner-DrKoreander.md) | Resource Practitioner DrKoreander |
| [mCSD-Peer-to-peer-PractitionerRole-BastianBuxAuryn-Spital](PractitionerRole-mCSD-Peer-to-peer-PractitionerRole-BastianBuxAuryn-Spital.md) | Resource PractitionerRole BastianBuxAuryn-Spital |
| [mCSD-Peer-to-peer-PractitionerRole-GisiGmorkFurchur-Klinik](PractitionerRole-mCSD-Peer-to-peer-PractitionerRole-GisiGmorkFurchur-Klinik.md) | Resource PractitionerRole GisiGmorkFurchur-Klinik |
| [mCSD-Peer-to-peer-PractitionerRole-KarlKoreanderFurchur-Klinik](PractitionerRole-mCSD-Peer-to-peer-PractitionerRole-KarlKoreanderFurchur-Klinik.md) | Resource PractitionerRole KarlKoreanderFuchur-Klinik |

