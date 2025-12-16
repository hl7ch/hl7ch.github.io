# Home - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* **Home**

## Home

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-orf/ImplementationGuide/ch.fhir.ig.ch-orf | *Version*:3.0.2 |
| Active as of 2025-12-16 | *Computable Name*:CH_ORF |
| **Copyright/Legal**: CC0-1.0 | |

The CH **O**rder & **R**eferral by **F**orm (CH ORF) implementation guide and its derivatives describe how forms for eReferrals, requests for information (such as diagnostic imaging results, lab results, discharge reports etc.) can be defined, deployed and used in order to achieve a syntactical and semantically consistent cross enterprise information exchange.

Whereas CH ORF is the "mother"-implementation guide defining attributes and value sets necessary in all sorts of order and referrals (such as patient name, order placer and order filler, insurance data etc.), derivatives cover specific use cases thus defining dedicated attributes and value sets needed there. Currently under development are CH eTOC for electronic transition of care, CH RAD Order for imaging services and CH LAB Order for laboratory orders.

All support creation and domain wide deployment of forms for structured and coded information exchange. Because the implementation guide relies heavily on the FHIR resources Questionnaire and QuestionnaireResponse, forms are addressed here as Questionnaires.

All IG derived from CH ORF use FHIR defined resources – Composition, Questionnaire, QuestionnaireResponse, Patient, PractitionerRole, Practitioner, Organization, ServiceRequest and Bundle from FHIR R4. For details on HL7 FHIR R4 see [http://hl7.org/fhir/r4](http://hl7.org/fhir/r4).

CH ORF and its derivatives are derived from the implementation guides [HL7 Structured Data Capture](https://hl7.org/fhir/uv/sdc/) and [CH Core](https://fhir.ch/ig/ch-core/index.html).

[Changelog](changelog.md) with significant changes, open and closed issues.

**Download:** You can download this implementation guide in [npm format](https://confluence.hl7.org/display/FHIR/NPM+Package+Specification) from [here](package.tgz).

### MustSupport

In this implementation guide “MustSupport” (MS) denotes elements of the questionnaire that are mapped to corresponding resource items.

### Volume 1 – Implementation Guide

The CH ORF implementation guide addresses three issues:

1. It supports a scenario where an authority (e.g., health authority, expert panel) defines a set of forms (here called questionnaires) for well-defined use cases which then are deployed in a specific enterprise, domain etc. or even nationwide.
1. New use cases or changes in use cases can easily be handled either by modification of existing questionnaires or new ones.
1. It assures that the representation of an order at filler's site is consistent to the placer site. CH ORF addresses this by supplying a questionnaire which defines sequence and grouping of items in a form. Authors of CH ORF derivatives are advised to do the same.

When writing the CH ORF implementation guide, the authors had the following use case in mind: A human fills in a questionnaire for a particular request and sends this questionnaire to a receiver. There, a human reads the questionnaire with its content. A corresponding response will work in the same way. There is possibly some payload coming with the questionnaire: A request may be accompanied by results of preceding exams (e.g. images, reports); the response may be a diagnostic result. Workflow is therefore not a particular issue because directional information exchange is based on a request and response mechanism.

There may be good reasons to implement user interfaces by other technical means than questionnaires. Therefore CH ORF sets the cardinality for the questionnaire / questionnaireResponse to 0.. thus allowing authors of derivatives to decide if applications following their IG must implement a questionnaire / questionnaireResponse or not. In any case, the questionnaire will give guidance for sequence and grouping of items in the user interface.

A major challenge is the need for further machine processing: at filler site in terms of prepopulating attributes with content from other applications (e.g. demographic data of a patient) whereas the receiver may want to have the content of the form ready for further processing in his applications. Obviously the two aims – semantic interoperability and flexibility in the definition of questionnaires – are contradictory. CH ORF addresses this problem by defining the mandatory set of generic elements and codes with defined being part of every CH ORF derived IG. Derivatives will then only define additional case specific elements.

Vendors implementing the CH ORF implementation guide (or one of its derivatives) therefore benefit of a high re-use potential.

There has been a discussion whether population of the resources such as Patient, ServiceRequest etc. with the content of the QuestionnaireResponse should be done by the order placer application or rather by the order filler application. The argument for assigning the task to the order placer is a result of not making the implementation of a questionnaire / questionnaireResponse mandatory: For the sake of keeping all CH ORF derived exchange formats equal (as far as sensible), the authors decided to mandate the order placer application with the task.

Applications claiming for conformance with an CH ORF derived implementation guide shall:

* Render (and in case of the Questionnaire Filler allow for data entry) all elements of a questionnaire in the user interface (e.g. on screen, in print). Grouping of items and the order of items within shall be adequately reproduced according to the questionnaire.
* In case of an implementation without the resources Questionnaire and QuestionnaireResponse, the content of otherwise implemented user interfaces shall be in accordance to the questionnaire definition.

Vendors of applications with Questionnaire Filler/Questionnaire Receiver actors are strongly recommended to implement interfaces to other applications (such as HIS and PACS) at least for all data in the generics elements of questionnaires.

Nothing speaks against interfaces for data in the use case specific part of a particular questionnaire. One has however to keep in mind, that such interfaces are tied to a specific questionnaire. Ownership or other means, which prevent changes of the questionnaire by third parties, are therefore advisable.

The ORF implementation guide deals with transport, workflow and content. It is based on FHIR resources and in particular the FHIR Questionnaire resource. FHIR specifies RESTful web services as a mean for transport. An implementation based on RESTful web services is strongly recommended however not mandatory to comply with the CH ORF implementation guide or its derivatives unless the authors of a derivate insist on it. Content is defined by a set of generic given elements and codes and the possibility to extend both as required by the use cases addressed

#### ORF Actors, Transactions and Content Modules

This implementation guide depends on the implementation guide [Structured Data Capture](http://hl7.org/fhir/uv/sdc/STU3/index.html): 
 **Questionnaires and forms are found everywhere in healthcare. They are used to capture administrative data, claims data, clinical information, research information, for public health reporting - every type of data that is manipulated by healthcare systems. They provide a user-friendly mechanism for capturing data in a consistent way. In FHIR, forms are represented using the Questionnaire resource and completed forms are represented using the QuestionnaireResponse resource. The base FHIR specification defines these resources but does not provide much guidance around how they should be used, nor does it set minimal expectations for interoperation. The SDC implementation guide provides a set of guidance around the use of Questionnaire and QuestionnaireResponse.**

##### SDC Specification relevant to CH ORF

These sections define the different use cases supported by SDC, specify the profile(s) needed to meet the use cases.

1. [Finding a questionnaire](http://hl7.org/fhir/uv/sdc/STU3/search.html)describes expectations for systems serving as form repositories as well as clients who will need to search for forms.
1. [Advanced form rendering](http://hl7.org/fhir/uv/sdc/STU3/rendering.html)describes how to use various questions and the base capabilities of questionnaire to render different types of form elements.
1. [Form behavior and calculation](http://hl7.org/fhir/uv/sdc/STU3/behavior.html)describes how to design 'active' forms that adjust what information is displayed and/or that perform calculations based on user input.
1. [Form population](http://hl7.org/fhir/uv/sdc/STU3/populate.html)describes how to design questionnaires to support pre-population of answers and how to use services that support pre-populating forms.
1. [Form data extraction](http://hl7.org/fhir/uv/sdc/STU3/extraction.html)describes how to design questionnaires to support converting completed forms into a FHIR resource or a bundle of FHIR resources for subsequent analysis.
1. [Modular forms](http://hl7.org/fhir/uv/sdc/STU3/modular.html)simplify the questionnaire maintenance process by allowing questions or sections of a questionnaire to be shared across multiple forms. This also increases the consistency of questions and allows data to be more comparable.
1. [Adaptive forms](http://hl7.org/fhir/uv/sdc/STU3/adaptive.html)describes an architecture to support completing forms where the questionnaire is not pre-defined and instead is dynamically developed based on the user's answers.

##### SDC Actors and Workflow relevant to CH ORF

To be considered SDC-conformant, a system must adhere to the requirements defined by at least one of these statements. Some systems might choose to comply with more than one.

* [SDC Form Designer](http://hl7.org/fhir/uv/sdc/STU3/CapabilityStatement-sdc-form-designer.html) - System responsible for creating and editing form designs.
* [SDC Form Filler](http://hl7.org/fhir/uv/sdc/STU3/CapabilityStatement-sdc-form-filler.html) - System responsible for capturing user form input to produce partially or fully completed forms.
* [SDC Form Manager](http://hl7.org/fhir/uv/sdc/STU3/CapabilityStatement-sdc-form-manager.html) - Repository for form definitions. May also perform pre-population.
* [SDC Form Response Manager](http://hl7.org/fhir/uv/sdc/STU3/CapabilityStatement-sdc-form-response-manager.html) - Searchable repository for storage and retrieval of completed and partially completed forms.
* [SDC Form Receiver](http://hl7.org/fhir/uv/sdc/STU3/CapabilityStatement-sdc-form-receiver.html) - Write-only destination to which forms are sent for processing.

The relationship between these roles and a summary of how they can interact is shown in [Figure 1].

[Figure 1] **SDC role operations**

##### CH ORF

This section defines the actors, transactions and/or content modules specific to this implementation guide.

* Actor: Questionnaire Filler
  * Definition: A system that renders Questionnaires and allows for filling in. The Questionnaire Filler is also responsible for filling in the corresponding resources in the Bundle, corresponds to the[SDC Form Filler](http://hl7.org/fhir/uv/sdc/STU3/CapabilityStatement-sdc-form-filler.html).
* Actor: Questionnaire Receiver
  * Definition: A system that receives a Bundle (according to the Questionnaire) from a Questionnaire Filler and renders it, corresponds to the[SDC Form Receiver](http://hl7.org/fhir/uv/sdc/STU3/CapabilityStatement-sdc-form-receiver.html).

[Table 1] **ORF actors**

[Figure 2] **Questionnaire handling actor diagram**

[Figure 2] shows the actors directly involved in the ORF implementation guide and the relevant transactions between them. Actors which have a mandatory grouping are shown in conjoined boxes.

* Actor: Questionnaire Filler
  * Transaction: Submit Bundle [CH ORF-1]
  * Optionality: O
  * Reference: [Volume 2 – Transactions](index.md#volume-2--transactions)
* Actor: Questionnaire Receiver
  * Transaction: Submit Bundle [CH ORF-1]
  * Optionality: O
  * Reference: [Volume 2 – Transactions](index.md#volume-2--transactions)

[Table 2] **ORF actors and transactions**

[Table 2] lists the transactions for each actor directly involved in the Order & Referral by Form (ORF) implementation guide. To claim compliance with this implementation guide, an actor shall support all required transactions (labeled “R”) and may support the optional transactions (labeled “O”).

The Submit Bundle transaction is marked as optional to allow solutions which choose a different communication transaction method like IHE XDS, XDR, XMD to be conform with this implementation guide.

A product implementation using the group actors from this implementation guide with actors from a workflow or transport implementation guide to be functional. The grouping of the content module described in this implementation guide to specific actors is described in more detail in the [Required Actor Groupings](index.md#orf-required-actor-groupings) section below.

[Table 3] lists the content module defined in the Order & Referral by Form (ORF) implementation guide. To claim support with this implementation guide, an actor shall support all required content modules (labeled “R”) and may support optional content modules (labeled “O”). The content module is based on the CH Core profiles.

* Actor: Questionnaire Filler
  * Content Module: ORF Content Module[Note 1]
  * Optionality: R
  * Reference: [Volume 3 – Content Modules](index.md#volume-3--content-modules)
* Actor: Questionnaire Receiver
  * Content Module: ORF Content Module[Note 1]
  * Optionality: R[Note 1]
  * Reference: [Volume 3 – Content Modules](index.md#volume-3--content-modules)

[Table 3] **ORF actors and content modules**

[Note 1] **The content of the form depends on the form which itself is defined by the FHIR Questionnaire. The Questionnaire defines elements and structure of the form. Codes for coded attributes are provided with corresponding value sets (for details see[Content Modules (Volume 3)](index.md#volume-3--content-modules)).**

##### ORF Actor Descriptions and Actor Requirements

Most requirements are documented in [Transactions (Volume 2)](index.md#volume-2--transactions) and [Content Modules (Volume 3)](index.md#volume-3--content-modules). This section documents any additional requirements on implementation guide's actors.

Questionnaire Filler and Questionnaire Receiver actors may be implemented on a mobile device, although this is not the primary setting in mind. All other actors will rather be implemented in a stationary setting because the use case addressed involve mostly stationary applications.

#### ORF Actor Options

Options that may be selected for each actor in this profile, if any, are listed in [Table 4]. Dependencies between options when applicable are specified in notes.

* Actor: Questionnaire Filler
  * Option Name: No options defined
  * Reference: --
* Actor: Questionnaire Receiver
  * Option Name: No options defined
  * Reference: --

[Table 4] **ORF actors and options**

#### ORF Required Actor Groupings

An actor from this implementation guide (column 1) shall implement all of the required transactions and/or content modules in this profile **in addition to** all of the transactions required for the grouped actor (column 2).

If this is a content module, and actors from this implementation guide are grouped with actors from a workflow or transport profile, the content bindings reference column references any specifications for mapping data from the content module into data elements from the workflow or transport transactions.

In some cases, required groupings are defined as at least one of an enumerated set of possible actors; this is designated by merging column one into a single cell spanning multiple potential grouped actors. Notes are used to highlight this situation.

The [Security Considerations](index.md#orf-security-considerations) section describes some optional groupings that may be of interest for security considerations.

* ORF Actor: Questionnaire Filler
  * Actor to be grouped with: Questionnaire Receiver
  * Reference: [CH ORF](index.md#ch-orf)Actors/Transactions
  * Content Bindings Reference: [Volume 3 – Content Modules](index.md#volume-3--content-modules)
* ORF Actor: Questionnaire Receiver
  * Actor to be grouped with: Questionnaire Filler
  * Reference: [CH ORF](index.md#ch-orf)Actors/Transactions
  * Content Bindings Reference: [Volume 3 – Content Modules](index.md#volume-3--content-modules)
* ORF Actor: Questionnaire Filler
  * Actor to be grouped with: CT Time Client
  * Reference: [ITI TF-1: 7.1](https://profiles.ihe.net/ITI/TF/Volume1/ch-7.html#7.1)CT Actors/Transactions
  * Content Bindings Reference: na
* ORF Actor: Questionnaire Receiver
  * Actor to be grouped with: CT Time Client
  * Reference: [ITI TF-1: 7.1](https://profiles.ihe.net/ITI/TF/Volume1/ch-7.html#7.1)CT Actors/Transactions
  * Content Bindings Reference: na

[Table 5] **ORF required actor groupings**

#### ORF Overview

##### Use Cases

###### Questionnaire Usage Process Flow

Dr. Miller has a new patient John Doe who has had an MRI at the radiology service “S-U-P-E-R-XR”. Dr. Miller retrieves a special order questionnaire from the SDC Form Manager at S-U-P-E-R-XR which allows ordering of images and reports of previous exams. Dr. Miller fills in this questionnaire and sends it back. At S-U-P-E-R-XR, a staff member will fill in another questionnaire with a reply, attaches images and reports an sends all to Dr. Miller.

#### ORF Security Considerations

A resource server should not return any patient information unless proper authentication and communications security have been proven.

There are many reasonable methods of securing interoperability transactions. These security models can be layered in without modifying the characteristics of the ORF profile transactions. The use of TLS is mandatory.

User authentication on mobile devices is encouraged using Internet User Authorization (IUA) profile. The network communication security and user authentication are layered in at the HTTP transport layer and do not modify the interoperability characteristics defined in the ORF profile.

The Security Audit logging (e.g. ATNA) is recommended. Support for ATNA-based audit logging on the mobile health device may be beyond the ability of this constrained environment.

In case vendors decide to include the Patient ID (patient.identifier) as a query parameter on the resource URL (what would be out of the scope of ORF implementation guide), this URL pattern would present a risk when using typical web server audit logging of URL requests, and browser history. In both of these cases the URL with the patient identity would be clearly visible. These risks should be mitigated in system or operational design.

### Volume 2 – Transactions

#### Submit Bundle [CH ORF-1]

This section corresponds to transaction [CH ORF-1]. This transaction is used by the Questionnaire Filler and Questionnaire Receiver. This is a combination of extracting resources outlined in the SDC workflow [10.1. OPTIONAL: EHR system extracts data from Questionnaire Response](http://hl7.org/fhir/uv/sdc/STU3/workflow.html) and sending a Bundle including the extracted information according to Volume 3 and QuestionnaireResponse to the Questionnaire Receiver.

##### Scope

This transaction is used to submit a filled in Questionnaire together with required additional resources and attachment in a Bundle from a Questionnaire Filler to a Questionnaire Receiver.

##### Actor Roles

[Figure 3] **Use case diagram**

* **Actor**: Questionnaire Filler
  * **Role**: A system that allows querying a SDC Form Manager in order to fill in the elements for a QuestionnaireResponse. Upon completion, a corresponding Bundle will be submitted to the Questionnaire Receiver.
* **Actor**: Questionnaire Receiver
  * **Role**: A system that receives Bundles and processes them compliant to the ORF profile.

[Table 6] **ORF actors and roles**

##### Referenced Standard

* [HL7 FHIR](http://hl7.org/fhir/r4/index.html) - Fast Healthcare Interoperability Resources
* [HL7 SDC IG](http://hl7.org/fhir/uv/sdc/STU3/index.html) - Structured Data Capture Implementation Guide
* IETF RFC 2616 - Hypertext Transfer Protocol – HTTP/1.1
* IETF RFC 7540 - Hypertext Transfer Protocol – HTTP/2
* IETF RFC 3986 - Uniform Resource Identifier (URI): Generic Syntax
* IETF RFC 4627 - The application/json Media Type for JavaScript Object Notation (JSON)
* IETF RFC 6585 - Additional HTTP Status Codes
* [IHE Appendix on HL7 FHIR](https://www.ihe.net/uploadedFiles/Documents/ITI/IHE_ITI_Suppl_Appx-Z.pdf) - Appendix Z – FHIR Implementation Material (Trial Implementation)

##### Interaction Diagram

[Figure 4] **Interaction diagram**

###### Submit Bundle

The transaction uses the HTTP POST method on the target Questionnaire Receiver endpoint to convey the Bundle with the questionnaire as a FHIR transaction.

**Trigger Events** 
 After the questionnaire is completed by the Questionnaire Filler user, the Questionnaire Filler submits the corresponding Bundle to the Questionnaire Receiver.

**Message Semantics** 
 The Questionnaire Filler shall initiate a FHIR “transaction” using a “create” action by sending an HTTP POST request method composed of a FHIR Bundle resource containing the Composition resource and all resources referenced in, in particular one Questionnaire resource, one QuestionnaireResponse resource and additional resources according to the Questionnaire profile.

The media type of the HTTP body shall be either `application/json+fhir` or `application/xml+fhir`.

See [http://hl7.org/fhir/http.html#transaction](http://hl7.org/fhir/http.html#transaction) for complete requirements of a transaction. See [http://hl7.org/fhir/bundle-transaction.html](http://hl7.org/fhir/bundle-transaction.html) for example of a transaction Bundle.

Submit Bundle is sent to the base URI as defined in FHIR. See [http://hl7.org/fhir/r4/http.html](http://hl7.org/fhir/r4/http.html) for the definition of “http” access methods and “base”.

For complete information on constructing a FHIR Bundle resource, see [http://hl7.org/fhir/r4/bundle.html](http://hl7.org/fhir/r4/bundle.html). 
 The FHIR `Bundle.meta.profile` shall include the value `http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-document`.

**Expected Actions** 
 The Questionnaire Receiver shall accept both media types `application/json+fhir` and `application/xml+fhir`.

On receipt of the submission, the Questionnaire Receiver shall validate the resources and respond with one of the HTTP codes defined in **Message Semantics** of section [Status Message](index.md#status-message).

###### Status Message

The Questionnaire Receiver returns a HTTP Status code appropriate to the processing, conforming to the transaction specification requirements as specified in [http://hl7.org/fhir/r4/http.html#transaction](http://hl7.org/fhir/r4/http.html#transaction).

**Trigger Events** 
 This message shall be sent once the Bundle with the questionnaire is received and completely processed.

**Message Semantics** 
 When the Questionnaire Receiver has successfully processed the POST transaction, then the Questionnaire Receiver shall return an HTTP response with an overall status code.

In order to allow the Questionnaire Filler to know the outcomes of processing the transaction, and the identities assigned to the resources by the Questionnaire Receiver, the Questionnaire Receiver shall return a Bundle, with type set to `transaction-response`, that contains one entry for each entry in the request, in the same order, with the outcome of processing the entry. See FHIR [http://hl7.org/fhir/r4/bundle.html#transaction-response](http://hl7.org/fhir/r4/bundle.html#transaction-response).

Each entry element shall contain a response element which details the outcome of processing the entry - the HTTP status code. All other elements are not required.

On success, the Questionnaire Receiver shall return the HTTP status code 200 – OK.

Guidance on handling **Access Denied** related to use of 403 and 404 can be found in IHE Appendix on HL7 FHIR Z.7.

On failure, the Questionnaire Receiver shall return the HTTP status codes as follows:

* 400 Bad Request - resource could not be parsed or failed basic FHIR validation rules like reference inconsistencies, schema violations, etc.
* 404 Not Found - resource type not supported.
* 422 Unprocessable Entity - one or more proposed resources violated applicable FHIR profiles or server business rules.

In addition, the Questionnaire Receiver may also send 5xx HTTP status codes to indicate non-transaction related failures. Note that the Questionnaire Filler may also encounter non-FHIR endpoints which will not return a Bundle in the response.

The Questionnaire Receiver may return HTTP redirect responses (responses with HTTP status codes 301, 302, 303 or 307) in response to a request.

**Expected Actions** If the Questionnaire Receiver returns an HTTP redirect response (HTTP status codes 301, 302, 303, or 307), the Questionnaire Filler shall follow that redirection, although it may stop processing if it detects a loop.

The Questionnaire Receiver processes the results according to application-defined rules.

If a Questionnaire Receiver cannot automatically recover from an error condition, at a minimum, it should display the error to the user.

###### Conformance Resource

Questionnaire Receiver implementing this transaction should provide a conformance resource as described in IHE Appendix on HL7 FHIR Z.3 indicating the operation has been implemented.

### Volume 3 – Content Modules

#### Questionnaire Content

This section describes the content of a form. The following definitions apply:

Request and responses consist of filled in questionnaires. Some elements of the questionnaire are generic given elements (such as author, data entry person, receiver etc.) and are always present in a questionnaire compliant to the ORF implementation guide. In addition, a questionnaire will contain elements which are use case specific. The ORF implementation guide makes no assumptions about the nature of such elements: structure and content (including coding of codes elements) are in the responsibility of those creating a form for a particular use case.

As this implementation guide is based on FHIR, the following rules apply:

Items, grouping of items, order of groups and order of elements within groups of a questionnaire shall be defined in a Questionnaire resource. The Questionnaire resource is defined by means of the SDC From Designer and made available by the SDC Form Manager.

Based on the Questionnaire, a Questionnaire Filler defines a QuestionnaireResponse and appropriate additional resources aimed at transmitting the information provided by the Questionnaire Filler in a standardized structured form. Upon completion of the questionnaire, the Questionnaire Filler shall create a Bundle with all resources mentioned above.

Questionnaires may be accompanied by additional material which can be attached or sent by postal mail (e.g. xray-films or paper documents). The use case may require some references between attached objects (e.g. which pdf-reports belongs to which imaging study).

#### Generic Elements of a Questionnaire

A Questionnaire shall have a set of generic elements (e.g. author, data entry person, receiver etc.).

* **Name**: [Date](StructureDefinition-ch-orf-servicerequest.md#ServiceRequest.authoredOn)
  * **Comment**: Date when the request transitioned to being actionable (e.g sent to the receiver).
* **Name**: [Placer Order Identifier](StructureDefinition-ch-orf-servicerequest.md#ServiceRequest.identifier)
  * **Comment**: Placer Order Identifier
* **Name**: [Placer Order Identifier Domain](StructureDefinition-ch-orf-servicerequest.md#ServiceRequest.identifier)
  * **Comment**: Placer Order Identifier Domain
* **Name**: [Filler Order Identifier](StructureDefinition-ch-orf-servicerequest.md#ServiceRequest.identifier)
  * **Comment**: Filler Order Identifier
* **Name**: [Filler Order Identifier Domain](StructureDefinition-ch-orf-servicerequest.md#ServiceRequest.identifier)
  * **Comment**: Filler Order Identifier Domain
* **Name**: [Precedent Document Identifier](StructureDefinition-ch-orf-composition.md#Composition.extension)
  * **Comment**: Precedent Document Identifier
* **Name**: [Urgent Notification Contact for this document](StructureDefinition-ch-orf-composition.md#Composition.extension)
  * **Comment**: An information recipient to notify for urgent matters (e.g. in a radiology service, the radiologist has to be called by phone right away at the time the document is received.)
* **Name**: [Urgent Notification Contact for the Response to this document](StructureDefinition-ch-orf-composition.md#Composition.extension)
  * **Comment**: An information recipient to notify for urgent matters about the response (e.g. in a clinical setting, the referring doctor has to be called by phone right away at the time the images and reports arrive).The Urgent Notification Contact for the Response can be specified already in the request. At the time the response is written, this element shall be populated to the Urgent Notification Contact element in the response.
* **Name**: [Priority](StructureDefinition-ch-orf-servicerequest.md#ServiceRequest)
  * **Comment**: Order priority.
* **Name**: [Receiver](StructureDefinition-ch-orf-composition.md#Composition.extension)
  * **Comment**: Person/organization who receives the document.
* **Name**: [Initiator](StructureDefinition-ch-orf-composition.md#Composition.extension)
  * **Comment**: Person or organization who initiated the service request; particularly in the context of spitex or admission to a nursing/retirement home (e.g the husband asks for spitex support because he needs help for the care of his wife).
* **Name**: [Patient](StructureDefinition-ch-orf-composition.md#Composition.subject)
  * **Comment**: The principle target of a particular form content is one patient.
* **Name**: [Patient Contact Person](StructureDefinition-ch-orf-composition.md#Composition.subject)
  * **Comment**: The principle target of a particular form content is one patient.
* **Name**: [Familydoctor](https://hl7.org/fhir/R4/patient.html#Patient.managingOrganization)
  * **Comment**: Healthprofessional who takes the role of a familydoctor.
* **Name**: [Requested Encounter](StructureDefinition-ch-orf-servicerequest.md#ServiceRequest.extension)
  * **Comment**: Requested Encounter such as ambulatory/inpatient/emergency.
* **Name**: [Coverage](StructureDefinition-ch-orf-servicerequest.md#ServiceRequest.insurance)
  * **Comment**: Payor covering the costs.
* **Name**: [Sender/Author](StructureDefinition-ch-orf-composition.md#Composition.author)
  * **Comment**: The person/organization responsible for the form content.
* **Name**: [Data Entry Person](StructureDefinition-ch-orf-composition.md#Composition.extension)
  * **Comment**: The person/organization who has typed/filled in the form content.
* **Name**: [Copy Receiver](StructureDefinition-ch-orf-composition.md#Composition.extension)
  * **Comment**: Person/organization who receives the copy of this order (shall receive also all results therefrom).
* **Name**: [Antecedent Episode of Care](StructureDefinition-ch-orf-composition.md#Composition.extension)
  * **Comment**: Documentation of the episode of care preceding this order (e.g in case of care transfer between institutions such as hospitals, rehab. clinics, retirement homes etc.)"
* **Name**: [Appointment](StructureDefinition-ch-orf-servicerequest.md#ServiceRequest.extension)
  * **Comment**: Indication of date/time and location of the requested appointment(s)
* **Name**: [Patientconsent](StructureDefinition-ch-orf-composition.md#Composition.extension)
  * **Comment**: Indication of whether the patient has given informed consent to this order; in particular for Spitex and transfer to nursing/retirement home, etc.
* **Name**: [Note](StructureDefinition-ch-orf-servicerequest.md#ServiceRequest.note.text)
  * **Comment**: General remarks

[Table 7] **Generic elements in questionnaires compliant to the ORF implementation guide**

[Table 7] shows that the FHIR representation of elements representing a person and/or an organization is defined by the **PractitionerRole** resource. The Practitioner and/or the Organization resource can then be referenced from the PractitionerRole resource.

#### Healthcare Domain specific Elements of a Questionnaire

##### ServiceRequest Resource

The CH ORF context specific requirements for this resource are shown in the profile [CH ORF ServiceRequest](StructureDefinition-ch-orf-servicerequest.md).

##### DocumentReference Resource

There may be the need to provide a linkage between particular files or between a particular file and an imaging study (e.g. a link between a PDF-File containing a report and a DICOM study). Such links shall be expressed with a DocumentReference resource.

The CH ORF context specific requirements for this resource are shown in the profile [CH ORF DocumentReference](StructureDefinition-ch-orf-documentreference.md).

#### FHIR Representation

FHIR depicts forms in a Questionnaire resource. A Questionnaire resource can be conceived as an empty Questionnaire where as the filled in Questionnaire refers to the QuestionnaireResponse resource. QuestionnaireResponse resources are certainly structured but due to their flexibility in design not in a standardized manner. FHIR addresses this issue by means of its standardized resources.

The Order & Referral by Form implementation guide is based on two FHIR resources profiles. For details on profiling FHIR see HL7 FHIR [http://www.hl7.org/fhir/profiling.html](http://www.hl7.org/fhir/profiling.html). For details on FHIR resources and data-types see HL7 FHIR [http://hl7.org/fhir/](http://hl7.org/fhir/).

1. The CH ORF Questionnaire profile defines the usage of the FHIR Questionnaire resource within the Order & Referral by Form implementation guide. The Questionnaire resource is an organized collection of questions intended to solicit information from patients, providers or other individuals involved in the healthcare domain. They may be simple flat lists of questions or can be hierarchically organized in groups and sub-groups, each containing questions. The Questionnaire defines the questions to be asked, how they are ordered and grouped and what the constraints are on the allowed answers. The results of a Questionnaire can be communicated using the QuestionnaireResponse resource (see[http://www.hl7.org/fhir/questionnaire.html](http://www.hl7.org/fhir/questionnaire.html)).
1. The CH ORF Document profile defines the usage of the FHIR Bundle resource within the Order & Referral by Form (ORF) implementation guide. The document consist of a FHIR document (Bundle) that contains the results of a filled in Questionnaire (QuestionnaireResponse resource) together with the structured resources which map all information filled in the Questionnaire. The[Bundle](http://hl7.org/fhir/bundle.html)is of[type](http://hl7.org/fhir/bundle-definitions.html#Bundle.type)`document`and has a[Composition](http://hl7.org/fhir/composition.html)as the first resource in the Bundle, followed by a series of other resources, referenced from the Composition resource. The Bundle gathers all the content of the document into a single document which may be signed and managed as required. The resources include both human readable and computer processable sections. In addition, a Bundle as defined in this profile shall include a CSS stylesheets and optionally it may include a signature.

Any resource referenced directly in the Composition resource shall be included in the Bundle. Other resources that these referenced resources refer to shall also be included in the Bundle. Including these additional resources will make the document bigger, but will save applications from needing to retrieve the linked resources.

##### FHIR Resources Constraints

This section lists FHIR resources for which these [CH ORF profiles](profiles.md) provide additional information. Resources not listed here follow the specifications of FHIR. For details refer to [https://www.hl7.org/fhir/resourcelist.html](https://www.hl7.org/fhir/resourcelist.html).

###### Composition Resource

The CH ORF context specific requirements for this resource are shown in the profile [CH ORF Composition](StructureDefinition-ch-orf-composition.md).

In the Composition, general information about the document is defined, such as title, type and category. In the CH ORF exchange format, no fixed values are determined for these elements, only a preferred binding to specific value sets is made. These values are context-dependent and have to be specified in the corresponding derived exchange format. They must be defined as `fixedValues` or limited value set in the Composition profile.

* **Element**: [Composition.title](StructureDefinition-ch-orf-composition.md#Composition.title)
  * **Description**: Meaningful human-readable title of the document
  * **DataType**: `string`
  * **ValueSet**: -
* **Element**: [Composition.type](StructureDefinition-ch-orf-composition.md#Composition.type)
  * **Description**: Precise type of the document
  * **DataType**: `CodeableConcept`
  * **ValueSet**: [DocumentEntry.typeCode](http://fhir.ch/ig/ch-term/ValueSet-DocumentEntry.typeCode.html)
* **Element**: [Composition.category](StructureDefinition-ch-orf-composition.md#Composition.category)
  * **Description**: High-level kind of the document at a macro level
  * **DataType**: `CodeableConcept`
  * **ValueSet**: [DocumentEntry.classCode](http://fhir.ch/ig/ch-term/ValueSet-DocumentEntry.classCode.html)

[Table 8] **General information about the document defined in Composition**

###### Questionnaire Resource

The intention of the ORF Implementation guide is to provide a standardized representation of forms at sender and receiver site as well. This is achieved with the Questionnaire resource, which defines representation of all elements for the user (with the help of a CSS) and user interaction as well (e.g. with drop down lists).

This approach requires two things:

1. Precise definition of all questions
1. Mapping between elements of the Questionnaire resource and the corresponding elements of the other resources in the Bundle

Both is achieved by assigning meaningful concepts to all elements concerned. For codes refer to Appendix A.

The CH ORF context specific requirements for this resource are shown in the profile [CH ORF Questionnaire](StructureDefinition-ch-orf-questionnaire.md).

###### QuestionnaireResponse Resource

The QuestionnaireResponse resource depends of the definition of the Questionnaire resource and is therefore use case specific. For deriving QuestionnaireResponse resources from the Questionnaire resources refer to [https://www.hl7.org/fhir/r4/questionnaireresponse.html](https://www.hl7.org/fhir/r4/questionnaireresponse.html).

The CH ORF context specific requirements for this resource are shown in the profile [CH ORF QuestionnaireResponse](StructureDefinition-ch-orf-questionnaireresponse.md).

This Implementation Guide provides three examples of QuestionnaireResponse such as [QuestionnaireResponse Medical Referral](QuestionnaireResponse-qr-order-referral-form.md), [QuestionnaireResponse Radiology Order](QuestionnaireResponse-qr-radiology-order.md) and [QuestionnaireResponse External Diagnostics Order](QuestionnaireResponse-qr-external-diagnostics-order.md). Only [QuestionnaireResponse Medical Referral](QuestionnaireResponse-qr-order-referral-form.md) shows all items filled in.

### Appendix

#### Safety Considerations

This implementation guide defines data elements, resources, formats, and methods for exchanging healthcare data between different participants in the healthcare process. As such, clinical safety is a key concern. Additional guidance regarding safety for the specification’s many and various implementations is available at: [https://www.hl7.org/FHIR/safety.html](https://www.hl7.org/FHIR/safety.html).

Although the present specification does gives users the opportunity to observe data protection and data security regulations, its use does not guarantee compliance with these regulations. Effective compliance must be ensured by appropriate measures during implementation projects and in daily operations. The corresponding implementation measures are explained in the standard. In addition, the present specification can only influence compliance with the security regulations in the technical area of standardization. It cannot influence organizational and contractual matters.

#### IP Statements

This document is licensed under Creative Commons "No Rights Reserved" ([CC0](https://creativecommons.org/publicdomain/zero/1.0/)).

HL7®, HEALTH LEVEL SEVEN®, FHIR® and the FHIR ![](icon-fhir-16.png)® are trademarks owned by Health Level Seven International, registered with the United States Patent and Trademark Office.

This implementation guide contains and references intellectual property owned by third parties ("Third Party IP"). Acceptance of these License Terms does not grant any rights with respect to Third Party IP. The licensee alone is responsible for identifying and obtaining any necessary licenses or authorizations to utilize Third Party IP in connection with the specification or otherwise.

This publication includes IP covered under the following statements.

* CC0-1.0

* [BFS Medizinische Statistik - 21 1.3.V02 - Klasse / Classe / Classe](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-bfs-medstats-21-encountertype.html): [Bundle/bundle-order-referral-form](Bundle-bundle-order-referral-form.md), [Bundle/external-diagnostics-order](Bundle-external-diagnostics-order.md)...Show 7 more,[Bundle/radiology-order](Bundle-radiology-order.md),[ChOrfDesiredAccommodation](StructureDefinition-ch-orf-desiredaccommodation.md),[ChOrfVsDesiredAccommodation](ValueSet-ch-orf-vs-desiredaccommodation.md),[Encounter/EncounterMusterfrau](Encounter-EncounterMusterfrau.md),[ModuleQuestionnaireOrderRequestedEncounter](Questionnaire-ch-orf-module-requestedencounter.md),[OrderReferralForm](Questionnaire-order-referral-form.md)and[QuestionnaireResponse/qr-order-referral-form](QuestionnaireResponse-qr-order-referral-form.md)
* [BFS Medizinische Statistik - 25 1.4.V02 - Hauptkostenträger für Grundversicherungsleistungen / Prise en charge des soins de base / Unità d’imputazione principale per le prestazioni dell’assicurazione di base](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-bfs-medstats-25-mainguarantor.html): [Bundle/bundle-order-referral-form](Bundle-bundle-order-referral-form.md), [ChOrfCoverage](StructureDefinition-ch-orf-coverage.md), [Coverage/CoverageMusterfrau](Coverage-CoverageMusterfrau.md), [Coverage/CoverageSelfPatient](Coverage-CoverageSelfPatient.md) and [Coverage/CoverageSelfRelatedPerson](Coverage-CoverageSelfRelatedPerson.md)
* [eCH-011 MaritalStatus](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-ech-11-maritalstatus.html): [Bundle/bundle-order-referral-form](Bundle-bundle-order-referral-form.md), [Bundle/external-diagnostics-order](Bundle-external-diagnostics-order.md)...Show 5 more,[Bundle/radiology-order](Bundle-radiology-order.md),[ModuleQuestionnaireOrderPatient](Questionnaire-ch-orf-module-patient.md),[OrderReferralForm](Questionnaire-order-referral-form.md),[Patient/ErikaMusterfrau](Patient-ErikaMusterfrau.md)and[QuestionnaireResponse/qr-order-referral-form](QuestionnaireResponse-qr-order-referral-form.md)
* [Main guarantor](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-mainguarantor.html): [ChOrfCoverage](StructureDefinition-ch-orf-coverage.md)
* [Consent Status](CodeSystem-ch-orf-cs-consentstatus.md): [Bundle/bundle-order-referral-form](Bundle-bundle-order-referral-form.md), [Bundle/external-diagnostics-order](Bundle-external-diagnostics-order.md)...Show 6 more,[Bundle/radiology-order](Bundle-radiology-order.md),[ChOrfConsentCode](StructureDefinition-ch-orf-consentcode.md),[ChOrfConsentStatus](ValueSet-ch-orf-vs-consentstatus.md),[ModuleQuestionnaireConsent](Questionnaire-ch-orf-module-consent.md),[OrderReferralForm](Questionnaire-order-referral-form.md)and[QuestionnaireResponse/qr-order-referral-form](QuestionnaireResponse-qr-order-referral-form.md)
* [Coverage Identifier Type](CodeSystem-ch-orf-cs-coverageidentifiertype.md): [Bundle/bundle-order-referral-form](Bundle-bundle-order-referral-form.md), [ChOrfCoverage](StructureDefinition-ch-orf-coverage.md), [ChOrfCoverageIdentifierType](ValueSet-ch-orf-vs-coverageidentifiertype.md) and [Coverage/CoverageMusterfrau](Coverage-CoverageMusterfrau.md)
* [ch-ehealth-codesystem-language](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-2.16.756.5.30.1.127.3.10.12.html): [ModuleQuestionnaireOrderPatient](Questionnaire-ch-orf-module-patient.md) and [OrderReferralForm](Questionnaire-order-referral-form.md)


* ISO maintains the copyright on the country codes, and controls its use carefully. For further details see the ISO 3166 web page: [https://www.iso.org/iso-3166-country-codes.html](https://www.iso.org/iso-3166-country-codes.html)

* [ISO 3166-1 Codes for the representation of names of countries and their subdivisions — Part 1: Country code](http://terminology.hl7.org/6.5.0/CodeSystem-ISO3166Part1.html): [Bundle/bundle-order-referral-form](Bundle-bundle-order-referral-form.md), [Bundle/external-diagnostics-order](Bundle-external-diagnostics-order.md)...Show 49 more,[Bundle/radiology-order](Bundle-radiology-order.md),[CH_ORF](index.md),[ChOrfAntecedentEpisodeOfCare](StructureDefinition-ch-orf-antecedentepisodeofcare.md),[ChOrfAppointment](StructureDefinition-ch-orf-appointment.md),[ChOrfAppointmentStatus](ValueSet-ch-orf-vs-appointmentstatus.md),[ChOrfComposition](StructureDefinition-ch-orf-composition.md),[ChOrfConsent](StructureDefinition-ch-orf-consent.md),[ChOrfConsentCode](StructureDefinition-ch-orf-consentcode.md),[ChOrfConsentNote](StructureDefinition-ch-orf-consentnote.md),[ChOrfConsentStatus](ValueSet-ch-orf-vs-consentstatus.md),[ChOrfCopyReceiver](StructureDefinition-ch-orf-copyreceiver.md),[ChOrfCoverage](StructureDefinition-ch-orf-coverage.md),[ChOrfCoverageIdentifierType](ValueSet-ch-orf-vs-coverageidentifiertype.md),[ChOrfDesiredAccommodation](StructureDefinition-ch-orf-desiredaccommodation.md),[ChOrfDocument](StructureDefinition-ch-orf-document.md),[ChOrfDocumentReference](StructureDefinition-ch-orf-documentreference.md),[ChOrfEncounterClass](ValueSet-ch-orf-vs-encounterclass.md),[ChOrfEpisodeOfCare](StructureDefinition-ch-orf-episodeofcare.md),[ChOrfInitiator](StructureDefinition-ch-orf-initiator.md),[ChOrfLocation](StructureDefinition-ch-orf-location.md),[ChOrfLocationAndTime](StructureDefinition-ch-orf-locationandtime.md),[ChOrfPatientConsent](StructureDefinition-ch-orf-patientconsent.md),[ChOrfPrecedentDocument](StructureDefinition-ch-orf-precedentdocument.md),[ChOrfQuestionnaire](StructureDefinition-ch-orf-questionnaire.md),[ChOrfQuestionnaireResponse](StructureDefinition-ch-orf-questionnaireresponse.md),[ChOrfReceiver](StructureDefinition-ch-orf-receiver.md),[ChOrfRequestedEncounter](StructureDefinition-ch-orf-encounter.md),[ChOrfRequestedEncounterDetails](StructureDefinition-ch-orf-requestedencounterdetails.md),[ChOrfServiceRequest](StructureDefinition-ch-orf-servicerequest.md),[ChOrfUrgentNotificiationContactForTheResponseToThisDocument](StructureDefinition-ch-orf-urgentnoficationcontactfortheresponsetothisdocument.md),[ChOrfUrgentNotificiationContactForThisDocument](StructureDefinition-ch-orf-urgentnoficationcontactforthisdocument.md),[ChOrfVSLegalRelation](ValueSet-ch-orf-vs-legalrelation.md),[ChOrfVsDesiredAccommodation](ValueSet-ch-orf-vs-desiredaccommodation.md),[ChOrfVsPersonalRelation](ValueSet-ch-orf-vs-personalrelation.md),[ModuleQuestionnaireAddress](Questionnaire-ch-orf-module-address.md),[ModuleQuestionnaireConsent](Questionnaire-ch-orf-module-consent.md),[ModuleQuestionnaireOrderAppointment](Questionnaire-ch-orf-module-appointment.md),[ModuleQuestionnaireOrderCoverage](Questionnaire-ch-orf-module-coverage.md),[ModuleQuestionnaireOrderForm](Questionnaire-ch-orf-module-order.md),[ModuleQuestionnaireOrderInitiator](Questionnaire-ch-orf-module-initiator.md),[ModuleQuestionnaireOrderPatient](Questionnaire-ch-orf-module-patient.md),[ModuleQuestionnaireOrderReceiver](Questionnaire-ch-orf-module-receiver.md),[ModuleQuestionnaireOrderReceiverCopy](Questionnaire-ch-orf-module-receivercopy.md),[ModuleQuestionnaireOrderRequestedEncounter](Questionnaire-ch-orf-module-requestedencounter.md),[ModuleQuestionnaireOrderSender](Questionnaire-ch-orf-module-sender.md),[ModuleQuestionnairePractitionerNameTel](Questionnaire-ch-orf-module-practitioner-nametel.md),[OrderReferralForm](Questionnaire-order-referral-form.md),[OrfQrToBundle](StructureMap-OrfQrToBundle.md)and[SDCModularQuestionnaireExampleForIssue126](Questionnaire-sdc-modular-issue126.md)


* This material contains content from [LOINC](http://loinc.org). LOINC is copyright © 1995-2020, Regenstrief Institute, Inc. and the Logical Observation Identifiers Names and Codes (LOINC) Committee and is available at no cost under the [license](http://loinc.org/license). LOINC® is a registered United States trademark of Regenstrief Institute, Inc.

* [LOINC](http://terminology.hl7.org/6.5.0/CodeSystem-v3-loinc.html): [Bundle/bundle-order-referral-form](Bundle-bundle-order-referral-form.md), [Bundle/external-diagnostics-order](Bundle-external-diagnostics-order.md)...Show 6 more,[Bundle/radiology-order](Bundle-radiology-order.md),[ChOrfComposition](StructureDefinition-ch-orf-composition.md),[ChOrfConsent](StructureDefinition-ch-orf-consent.md),[Composition/comp-order-referral-form](Composition-comp-order-referral-form.md),[Composition/spitex-order](Composition-spitex-order.md)and[Consent/ChOrfConsentSUfferer](Consent-ChOrfConsentSUfferer.md)


* This material contains content that is copyright of SNOMED International. Implementers of these specifications must have the appropriate SNOMED CT Affiliate license - for more information contact [https://www.snomed.org/get-snomed](https://www.snomed.org/get-snomed) or [info@snomed.org](mailto:info@snomed.org).

* [SNOMED Clinical Terms&reg; (SNOMED CT&reg;)](http://hl7.org/fhir/R4/codesystem-snomedct.html): [Bundle/bundle-order-referral-form](Bundle-bundle-order-referral-form.md), [Bundle/external-diagnostics-order](Bundle-external-diagnostics-order.md)...Show 14 more,[Bundle/radiology-order](Bundle-radiology-order.md),[ChOrfComposition](StructureDefinition-ch-orf-composition.md),[ChOrfConsentCode](StructureDefinition-ch-orf-consentcode.md),[ChOrfConsentStatus](ValueSet-ch-orf-vs-consentstatus.md),[ChOrfInitiator](StructureDefinition-ch-orf-initiator.md),[ChOrfVSLegalRelation](ValueSet-ch-orf-vs-legalrelation.md),[ChOrfVsPersonalRelation](ValueSet-ch-orf-vs-personalrelation.md),[Composition/comp-order-referral-form](Composition-comp-order-referral-form.md),[Composition/spitex-order](Composition-spitex-order.md),[Consent/ChOrfConsentSUfferer](Consent-ChOrfConsentSUfferer.md),[DocumentReference/DocRef](DocumentReference-DocRef.md),[ModuleQuestionnaireOrderInitiator](Questionnaire-ch-orf-module-initiator.md),[OrderReferralForm](Questionnaire-order-referral-form.md)and[QuestionnaireResponse/qr-order-referral-form](QuestionnaireResponse-qr-order-referral-form.md)


* This material derives from the HL7 Terminology (THO). THO is copyright ©1989+ Health Level Seven International and is made available under the CC0 designation. For more licensing information see: [https://terminology.hl7.org/license.html](https://terminology.hl7.org/license.html)

* [Consent Scope Codes](http://terminology.hl7.org/7.0.1/CodeSystem-consentscope.html): [ChOrfConsent](StructureDefinition-ch-orf-consent.md) and [Consent/ChOrfConsentSUfferer](Consent-ChOrfConsentSUfferer.md)
* [identifierType](http://terminology.hl7.org/7.0.1/CodeSystem-v2-0203.html): [Bundle/bundle-order-referral-form](Bundle-bundle-order-referral-form.md), [Bundle/external-diagnostics-order](Bundle-external-diagnostics-order.md)...Show 5 more,[Bundle/radiology-order](Bundle-radiology-order.md),[ChOrfRequestedEncounter](StructureDefinition-ch-orf-encounter.md),[ChOrfServiceRequest](StructureDefinition-ch-orf-servicerequest.md),[Patient/ErikaMusterfrau](Patient-ErikaMusterfrau.md)and[ServiceRequest/sr-order-referral-form](ServiceRequest-sr-order-referral-form.md)
* [ActCode](http://terminology.hl7.org/7.0.1/CodeSystem-v3-ActCode.html): [Bundle/bundle-order-referral-form](Bundle-bundle-order-referral-form.md), [Bundle/external-diagnostics-order](Bundle-external-diagnostics-order.md)...Show 7 more,[Bundle/radiology-order](Bundle-radiology-order.md),[ChOrfEncounterClass](ValueSet-ch-orf-vs-encounterclass.md),[ChOrfRequestedEncounter](StructureDefinition-ch-orf-encounter.md),[Encounter/EncounterMusterfrau](Encounter-EncounterMusterfrau.md),[ModuleQuestionnaireOrderRequestedEncounter](Questionnaire-ch-orf-module-requestedencounter.md),[OrderReferralForm](Questionnaire-order-referral-form.md)and[QuestionnaireResponse/qr-order-referral-form](QuestionnaireResponse-qr-order-referral-form.md)


#### Cross Version Analysis

This is an R4 IG. None of the features it uses are changed in R4B, so it can be used as is with R4B systems. Packages for both [R4 (ch.fhir.ig.ch-orf.r4)](package.r4.tgz) and [R4B (ch.fhir.ig.ch-orf.r4b)](package.r4b.tgz) are available.

#### Dependency Table






#### Globals Table

*There are no Global profiles defined*



## Resource Content

```json
{
  "resourceType" : "ImplementationGuide",
  "id" : "ch.fhir.ig.ch-orf",
  "url" : "http://fhir.ch/ig/ch-orf/ImplementationGuide/ch.fhir.ig.ch-orf",
  "version" : "3.0.2",
  "name" : "CH_ORF",
  "title" : "CH ORF (R4)",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-16",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/"
        }
      ]
    }
  ],
  "description" : "Order & Referral by Form - Implementation Guide (CH ORF)",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "packageId" : "ch.fhir.ig.ch-orf",
  "license" : "CC0-1.0",
  "fhirVersion" : ["4.0.1"],
  "dependsOn" : [
    {
      "id" : "hl7ext",
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/implementationguide-dependency-comment",
          "valueMarkdown" : "Automatically added as a dependency - all IGs depend on the HL7 Extension Pack"
        }
      ],
      "uri" : "http://hl7.org/fhir/extensions/ImplementationGuide/hl7.fhir.uv.extensions",
      "packageId" : "hl7.fhir.uv.extensions.r4",
      "version" : "5.2.0"
    },
    {
      "id" : "hl7terminology",
      "uri" : "http://terminology.hl7.org/ImplementationGuide/hl7.terminology",
      "packageId" : "hl7.terminology.r4",
      "version" : "7.0.1"
    },
    {
      "id" : "chcore",
      "uri" : "http://fhir.ch/ig/ch-core/ImplementationGuide/ch.fhir.ig.ch-core",
      "packageId" : "ch.fhir.ig.ch-core",
      "version" : "6.0.0"
    },
    {
      "id" : "sdc",
      "uri" : "http://hl7.org/fhir/uv/sdc/ImplementationGuide/hl7.fhir.uv.sdc",
      "packageId" : "hl7.fhir.uv.sdc",
      "version" : "3.0.0"
    }
  ],
  "definition" : {
    "extension" : [
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "releaselabel"
          },
          {
            "url" : "value",
            "valueString" : "trial-use"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "copyrightyear"
          },
          {
            "url" : "value",
            "valueString" : "2020+"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "display-warnings"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-expansion-params"
          },
          {
            "url" : "value",
            "valueString" : "../expansion-params.json"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "pin-canonicals"
          },
          {
            "url" : "value",
            "valueString" : "pin-multiples"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "autoload-resources"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "template/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "input/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-qa"
          },
          {
            "url" : "value",
            "valueString" : "temp/qa"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-temp"
          },
          {
            "url" : "value",
            "valueString" : "temp/pages"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-output"
          },
          {
            "url" : "value",
            "valueString" : "output"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-suppressed-warnings"
          },
          {
            "url" : "value",
            "valueString" : "input/ignoreWarnings.txt"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-history"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-orf/history.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "template-html"
          },
          {
            "url" : "value",
            "valueString" : "template-page.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "template-md"
          },
          {
            "url" : "value",
            "valueString" : "template-page-md.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-contact"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-context"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-copyright"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-jurisdiction"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-license"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-publisher"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-version"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-wg"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "active-tables"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "fmm-definition"
          },
          {
            "url" : "value",
            "valueString" : "http://hl7.org/fhir/versions.html#maturity"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "propagate-status"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "excludelogbinaryformat"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "tabbed-snapshots"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/expansion-parameters",
        "valueReference" : {
          "reference" : "Parameters/expansion-parameters"
        }
      },
      {
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-internal-dependency",
        "valueCode" : "hl7.fhir.uv.tools.r4#0.8.0"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "releaselabel"
          },
          {
            "url" : "value",
            "valueString" : "trial-use"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "copyrightyear"
          },
          {
            "url" : "value",
            "valueString" : "2020+"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "display-warnings"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-expansion-params"
          },
          {
            "url" : "value",
            "valueString" : "../expansion-params.json"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "pin-canonicals"
          },
          {
            "url" : "value",
            "valueString" : "pin-multiples"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "autoload-resources"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "template/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "input/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-qa"
          },
          {
            "url" : "value",
            "valueString" : "temp/qa"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-temp"
          },
          {
            "url" : "value",
            "valueString" : "temp/pages"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-output"
          },
          {
            "url" : "value",
            "valueString" : "output"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-suppressed-warnings"
          },
          {
            "url" : "value",
            "valueString" : "input/ignoreWarnings.txt"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-history"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-orf/history.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "template-html"
          },
          {
            "url" : "value",
            "valueString" : "template-page.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "template-md"
          },
          {
            "url" : "value",
            "valueString" : "template-page-md.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-contact"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-context"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-copyright"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-jurisdiction"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-license"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-publisher"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-version"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-wg"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "active-tables"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "fmm-definition"
          },
          {
            "url" : "value",
            "valueString" : "http://hl7.org/fhir/versions.html#maturity"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "propagate-status"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "excludelogbinaryformat"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "tabbed-snapshots"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      }
    ],
    "grouping" : [
      {
        "name" : "CH ORF"
      }
    ],
    "resource" : [
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-orf-document"
        },
        "name" : "CH ORF Document",
        "description" : "Profile to set constraints that specify the CH ORF-conformant presentation of a document. \nThe CH ORF exchange format is defined as a document type corresponding to a Bundle resource.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-orf-composition"
        },
        "name" : "CH ORF Composition",
        "description" : "Profile to specify how the generic elements (e.g. patient, author) and the healthcare domain specific elements \nmust be structured in the Composition as the first entry of the document.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-orf-questionnaire"
        },
        "name" : "CH ORF Questionnaire",
        "description" : "Profile to define how a CH ORF-conformant Questionnaire resource must be structured. \nThis is independent of the content and content structure of the questionnaire instance itself.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-orf-questionnaireresponse"
        },
        "name" : "CH ORF QuestionnaireResponse",
        "description" : "Profile to define how a CH ORF-conformant QuestionnaireResponse resource must be structured. \nThis is independent of the content and content structure of the response items to a specific questionnaire.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-orf-servicerequest"
        },
        "name" : "CH ORF ServiceRequest",
        "description" : "Profile to define how the record of a request for service to be performed is represented in the context of an order.\nThis resource is used to share relevant information required to support an CH ORF request from the order placer to the order filler.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-orf-documentreference"
        },
        "name" : "CH ORF DocumentReference",
        "description" : "Profile to describe how to provide a reference to a document to make it available to a healthcare system.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-orf-coverage"
        },
        "name" : "CH ORF Coverage",
        "description" : "Profile to specify how the coverage is represented. \nThis provides an organization or the individual, which will pay for services requested.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-orf-location"
        },
        "name" : "CH ORF Location",
        "description" : "Profile to define the details of the location of the appointment.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-orf-appointment"
        },
        "name" : "CH ORF Appointment",
        "description" : "Profile to describe the location and time for the fulfillment of the service request.\nIn this resource, the status of the appointment is defined, patient-oriented instructions are listed here \nand where and when the service request is to be fulfilled.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-orf-encounter"
        },
        "name" : "CH ORF Requested Encounter",
        "description" : "Profile to describe which details are represented at the requested encounter for the fulfillment of the service request. \nThese are, for example, the status of the encounter or the class and the desired accomodation during the encounter.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-orf-consent"
        },
        "name" : "CH ORF Consent",
        "description" : "Profile to specify if the patient gave an informed consent to this order; in particulars for spitex \nand  transfer to retirement home etc.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-orf-urgentnoficationcontactforthisdocument"
        },
        "name" : "CH ORF Urgent Notification Contact For This Documet",
        "description" : "An information recipient to notify for urgent matters (e.g. in a radiology service, the radiologist has to be called by phone right away at the time the doucment is received).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-orf-urgentnoficationcontactfortheresponsetothisdocument"
        },
        "name" : "CH ORF Urgent Notification Contact For The Response To This Document",
        "description" : "An information recipient to notify for urgent matters about the response. (e.g. in a clinical setting, the referring doctor has to be called by phone right away at the time the images and reports arrive. The Urgent Notification Contact for the Response can be specified already in the request. At the time the response is written, this element shall be populated to the Urgent Notification Contact element in the response.)",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-orf-receiver"
        },
        "name" : "CH ORF Receiver",
        "description" : "Person/organization who receives the document",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-orf-copyreceiver"
        },
        "name" : "CH ORF Copy Receiver",
        "description" : "Receiver of the copy of this order and the results therefrom",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-orf-locationandtime"
        },
        "name" : "CH ORF Location and Time",
        "description" : "Location and Time of ServiceRequest Fulfillment.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-orf-requestedencounterdetails"
        },
        "name" : "CH ORF Requested Encounter Details",
        "description" : "Requested Encounter Details for ServiceRequest Fulfillment.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-orf-desiredaccommodation"
        },
        "name" : "CH ORF Desired Accommodation",
        "description" : "Desired Accommodation during the Requested Encounter.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-orf-episodeofcare"
        },
        "name" : "CH ORF Episode of Care",
        "description" : "Profile to document the antecedent episode of  care e.g hospitalisation in case of care transfer between instituitons e.g. hospitals, rehab. clinics, retirement homes etc.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-orf-antecedentepisodeofcare"
        },
        "name" : "CH ORF Episode of Care",
        "description" : "Documentation of the antecedent episode  of care e.g hospitalisation in case of care transfer between instituitons e.g. hospitals, rehab. clinics, retirement homes etc.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-orf-precedentdocument"
        },
        "name" : "CH ORF Precedent Document",
        "description" : "Identifier of the document which precedes this document in a thread.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-orf-patientconsent"
        },
        "name" : "CH ORF Patient Consent",
        "description" : "Patient Consent to this Order",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-orf-consentcode"
        },
        "name" : "CH ORF Consent Code",
        "description" : "Consent Code",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-orf-consentnote"
        },
        "name" : "CH ORF Consent Note",
        "description" : "Consent Note",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-orf-initiator"
        },
        "name" : "CH ORF Initiator",
        "description" : "Initiator and his realtion to the patient",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-orf-vs-coverageidentifiertype"
        },
        "name" : "Coverage Identifier Type",
        "description" : "Value Set for CH ORF Coverage Identifier Type",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-orf-vs-appointmentstatus"
        },
        "name" : "Appointment Status",
        "description" : "Value Set for CH ORF Appointment Status",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-orf-vs-encounterclass"
        },
        "name" : "Encounter Class",
        "description" : "Value Set for CH ORF Encounter Class",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-orf-vs-desiredaccommodation"
        },
        "name" : "Desired Accommodation",
        "description" : "Value Set for CH ORF Desired Accomodation",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-orf-vs-personalrelation"
        },
        "name" : "Personal Relation",
        "description" : "Value Set for Personal Relation",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-orf-vs-legalrelation"
        },
        "name" : "Legal Relation",
        "description" : "Value Set for Legal Relation",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-orf-vs-consentstatus"
        },
        "name" : "Consent Status",
        "description" : "Value Set for CH ORF Consent Status",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ch-orf-cs-coverageidentifiertype"
        },
        "name" : "Coverage Identifier Type",
        "description" : "Code System for CH ORF Coverage Identifier Type",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ch-orf-cs-consentstatus"
        },
        "name" : "Consent Status",
        "description" : "Value Set for CH ORF Consent Status",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureMap"
          }
        ],
        "reference" : {
          "reference" : "StructureMap/OrfQrToBundle"
        },
        "name" : "Map ORF",
        "description" : "Mapping ORF QuestionnaireResponse to Bundle",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/bundle-order-referral-form"
        },
        "name" : "Bundle Order-Referral-Form",
        "description" : "Example for Bundle",
        "exampleCanonical" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-document"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/spitex-order"
        },
        "name" : "Composition Spitex-Order",
        "description" : "Example for Composition",
        "exampleCanonical" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-composition"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/radiology-order"
        },
        "name" : "Radiology Order",
        "description" : "Example for Bundle",
        "exampleCanonical" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-document"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/external-diagnostics-order"
        },
        "name" : "Order External Diagnostics",
        "description" : "Example for Bundle",
        "exampleCanonical" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-document"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/comp-order-referral-form"
        },
        "name" : "Composition Order-Referral-Form",
        "description" : "Example for Composition",
        "exampleCanonical" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-composition"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Questionnaire"
          }
        ],
        "reference" : {
          "reference" : "Questionnaire/sdc-modular-issue126"
        },
        "name" : "SDCModularQuestionnaireExampleForIssue126",
        "description" : "SDC Modular Questionnaire Example for Issue 126",
        "exampleCanonical" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-modular"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Questionnaire"
          }
        ],
        "reference" : {
          "reference" : "Questionnaire/order-referral-form"
        },
        "name" : "Questionnaire Order-Referral-Form",
        "description" : "Example for Questionnaire",
        "exampleCanonical" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-questionnaire"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Questionnaire"
          }
        ],
        "reference" : {
          "reference" : "Questionnaire/order-referral-form-modular"
        },
        "name" : "Questionnaire Order-Referral-Form (Modular version)",
        "description" : "Example for Questionnaire (Modular version)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-questionnaire"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Questionnaire"
          }
        ],
        "reference" : {
          "reference" : "Questionnaire/ch-orf-module-familydoctor"
        },
        "name" : "Module Questionnaire Familydoctor",
        "description" : "Subquestionnaire familyDoctor"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Questionnaire"
          }
        ],
        "reference" : {
          "reference" : "Questionnaire/ch-orf-module-address"
        },
        "name" : "Module Questionnaire Address",
        "description" : "Subquestionnaire address"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Questionnaire"
          }
        ],
        "reference" : {
          "reference" : "Questionnaire/ch-orf-module-order"
        },
        "name" : "Module Questionnaire Order",
        "description" : "Subquestionnaire order"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Questionnaire"
          }
        ],
        "reference" : {
          "reference" : "Questionnaire/ch-orf-module-receiver"
        },
        "name" : "Module Questionnaire Receiver",
        "description" : "Subquestionnaire receiver"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Questionnaire"
          }
        ],
        "reference" : {
          "reference" : "Questionnaire/ch-orf-module-patient"
        },
        "name" : "Module Questionnaire Patient",
        "description" : "Subquestionnaire patient"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Questionnaire"
          }
        ],
        "reference" : {
          "reference" : "Questionnaire/ch-orf-module-requestedencounter"
        },
        "name" : "Module Questionnaire Requested Encounter",
        "description" : "Subquestionnaire requestedEncounter"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Questionnaire"
          }
        ],
        "reference" : {
          "reference" : "Questionnaire/ch-orf-module-coverage"
        },
        "name" : "Module Questionnaire Coverage",
        "description" : "Subquestionnaire coverage"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Questionnaire"
          }
        ],
        "reference" : {
          "reference" : "Questionnaire/ch-orf-module-sender"
        },
        "name" : "Module Questionnaire Sender",
        "description" : "Subquestionnaire sender"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Questionnaire"
          }
        ],
        "reference" : {
          "reference" : "Questionnaire/ch-orf-module-receivercopy"
        },
        "name" : "Module Questionnaire Receiver Copy",
        "description" : "Subquestionnaire receiverCopy"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Questionnaire"
          }
        ],
        "reference" : {
          "reference" : "Questionnaire/ch-orf-module-appointment"
        },
        "name" : "Module Questionnaire Appointment",
        "description" : "Subquestionnaire appointment"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Questionnaire"
          }
        ],
        "reference" : {
          "reference" : "Questionnaire/ch-orf-module-practitioner-nametel"
        },
        "name" : "Module Questionnaire Practitioner Name Tel",
        "description" : "Subquestionnaire Practitioner with Name and Telecom"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Questionnaire"
          }
        ],
        "reference" : {
          "reference" : "Questionnaire/ch-orf-module-initiator"
        },
        "name" : "Module Questionnaire Initiator",
        "description" : "Subquestionnaire initiator"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Questionnaire"
          }
        ],
        "reference" : {
          "reference" : "Questionnaire/ch-orf-module-consent"
        },
        "name" : "Module Questionnaire Consent",
        "description" : "Subquestionnaire consent"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "QuestionnaireResponse"
          }
        ],
        "reference" : {
          "reference" : "QuestionnaireResponse/qr-order-referral-form"
        },
        "name" : "QuestionnaireResponse Medical Referral",
        "description" : "Example for QuestionnaireResponse",
        "exampleCanonical" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-questionnaireresponse"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "QuestionnaireResponse"
          }
        ],
        "reference" : {
          "reference" : "QuestionnaireResponse/qr-radiology-order"
        },
        "name" : "QuestionnaireResponse Radiology Order",
        "description" : "Example for QuestionnaireResponse",
        "exampleCanonical" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-questionnaireresponse"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "QuestionnaireResponse"
          }
        ],
        "reference" : {
          "reference" : "QuestionnaireResponse/qr-external-diagnostics-order"
        },
        "name" : "QuestionnaireResponse External Diagnostics Order",
        "description" : "Example for QuestionnaireResponse",
        "exampleCanonical" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-questionnaireresponse"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ServiceRequest"
          }
        ],
        "reference" : {
          "reference" : "ServiceRequest/sr-order-referral-form"
        },
        "name" : "ServiceRequest Order-Referral-Form",
        "description" : "Example for ServiceRequest",
        "exampleCanonical" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-servicerequest"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "DocumentReference"
          }
        ],
        "reference" : {
          "reference" : "DocumentReference/DocRef"
        },
        "name" : "DocumentReference",
        "description" : "Example for DocumentReference",
        "exampleCanonical" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-documentreference"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/NotificationContactSabineMeier"
        },
        "name" : "Notification Contact Sabine Meier",
        "description" : "Example for PractitionerRole",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/SabineMeierPraxisSeeblick"
        },
        "name" : "Sabine Meier @ Praxis Seeblick",
        "description" : "Example for PractitionerRole",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/StabiloBossPraxisSeeblick"
        },
        "name" : "Stabilo Boss @ Praxis Seeblick",
        "description" : "Example for PractitionerRole",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/HansRoentgenKantonsspital"
        },
        "name" : "Hans Röntgen @ Kantonsspital",
        "description" : "Example for PractitionerRole",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/ChOrfPractitionerRoleSPitex"
        },
        "name" : "Spitex",
        "description" : "Example for PractitionerRole",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/NotificationContactHansRoentgen"
        },
        "name" : "Notification Contact Hans Röntgen",
        "description" : "Example for PractitionerRole",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/CopyReceiverSabineMeierPraxisSeeblick"
        },
        "name" : "Copy Receiver Sabine Meier @ Praxis Seeblick",
        "description" : "Example for PractitionerRole",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/PraxisSeeblick"
        },
        "name" : "Praxis Seeblick",
        "description" : "Example for Organization",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/CopyReceiverPraxisSeeblick"
        },
        "name" : "Copy Receiver Praxis Seeblick",
        "description" : "Example for PractitionerRole",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/Kantonsspital"
        },
        "name" : "Kantonsspital",
        "description" : "Example for Organization",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/SabineMeier"
        },
        "name" : "Sabine Meier",
        "description" : "Example for Practitioner",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/CopyReceiverSabineMeier"
        },
        "name" : "Copy Receiver Sabine Meier",
        "description" : "Example for Practitioner",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/NotificationContactSabineMeier"
        },
        "name" : "Notification Contact Sabine Meier",
        "description" : "Example for Practitioner",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/StabiloBoss"
        },
        "name" : "Stabilo Boss",
        "description" : "Example for Practitioner",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/HansRoentgen"
        },
        "name" : "Hans Röntgen",
        "description" : "Example for Practitioner",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/NotificationContactHansRoentgen"
        },
        "name" : "Notification Contact Hans Röntgen",
        "description" : "Example for Practitioner",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/ErikaMusterfrau"
        },
        "name" : "Erika Musterfrau",
        "description" : "Example for Patient",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Coverage"
          }
        ],
        "reference" : {
          "reference" : "Coverage/CoverageMusterfrau"
        },
        "name" : "Coverage KVG",
        "description" : "Example for Coverage",
        "exampleCanonical" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Coverage"
          }
        ],
        "reference" : {
          "reference" : "Coverage/CoverageSelfPatient"
        },
        "name" : "Coverage Self (Patient)",
        "description" : "Example for Coverage",
        "exampleCanonical" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Coverage"
          }
        ],
        "reference" : {
          "reference" : "Coverage/CoverageSelfRelatedPerson"
        },
        "name" : "Coverage Self (RelatedPerson)",
        "description" : "Example for Coverage",
        "exampleCanonical" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Encounter"
          }
        ],
        "reference" : {
          "reference" : "Encounter/EncounterMusterfrau"
        },
        "name" : "Encounter Emergency",
        "description" : "Example for Encounter",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Appointment"
          }
        ],
        "reference" : {
          "reference" : "Appointment/AppointmentPending"
        },
        "name" : "Appointment Pending",
        "description" : "Example for Appointment with status=pending",
        "exampleCanonical" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-appointment"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Appointment"
          }
        ],
        "reference" : {
          "reference" : "Appointment/AppointmentBooked"
        },
        "name" : "Appointment Booked",
        "description" : "Example for Appointment with status=booked",
        "exampleCanonical" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-appointment"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Appointment"
          }
        ],
        "reference" : {
          "reference" : "Appointment/AppointmentProposed"
        },
        "name" : "Appointment Proposed",
        "description" : "Example for Appointment with status=proposed",
        "exampleCanonical" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-appointment"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Location"
          }
        ],
        "reference" : {
          "reference" : "Location/LocationOfAppointment"
        },
        "name" : "Location of Appointment",
        "description" : "Example for Location",
        "exampleCanonical" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-location"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/SUfferer"
        },
        "name" : "Susanna Ufferer",
        "description" : "Example for Patient",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "RelatedPerson"
          }
        ],
        "reference" : {
          "reference" : "RelatedPerson/ChOrfRelatedPersonMUfferer"
        },
        "name" : "Max Ufferer",
        "description" : "Example for Related Person (Husband of Susanna Ufferer)",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "EpisodeOfCare"
          }
        ],
        "reference" : {
          "reference" : "EpisodeOfCare/ChOrfEpisodeOfCareSUfferer"
        },
        "name" : "Eisode of Care",
        "description" : "Example for Discharge Date in EpisodeOfCare",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Consent"
          }
        ],
        "reference" : {
          "reference" : "Consent/ChOrfConsentSUfferer"
        },
        "name" : "Consent",
        "description" : "Example for Consent",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/OrganizationSpitalTrubschachen"
        },
        "name" : "Spital Trubschachen",
        "description" : "Example for Organization",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/ChOrfPractitionerRoleFAmily"
        },
        "name" : "Florence Amily @ Praxis Allzeitbereit",
        "description" : "Example for PractitionerRole",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/ChOrfPractitionerSPitex"
        },
        "name" : "Samuel Pitex",
        "description" : "Example for Practitioner",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/ChCorePractitionerTRub"
        },
        "name" : "Thomas Rub",
        "description" : "Example for Practitioner",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/ChOrfPractitionerFAmily"
        },
        "name" : "Florence Amily",
        "description" : "Example for Practitioner",
        "exampleBoolean" : true
      }
    ],
    "page" : {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "toc.html"
        }
      ],
      "nameUrl" : "toc.html",
      "title" : "Table of Contents",
      "generation" : "html",
      "page" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "index.html"
            }
          ],
          "nameUrl" : "index.html",
          "title" : "Home",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "usecase-english.html"
            }
          ],
          "nameUrl" : "usecase-english.html",
          "title" : "Use Cases",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "usecase-german.html"
            }
          ],
          "nameUrl" : "usecase-german.html",
          "title" : "Anwendungsfälle",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "usecase-french.html"
            }
          ],
          "nameUrl" : "usecase-french.html",
          "title" : "Cas d'application",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "questionnaire-form.html"
            }
          ],
          "nameUrl" : "questionnaire-form.html",
          "title" : "Questionnaire Order-Referral-Form",
          "generation" : "html"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "modular-form.html"
            }
          ],
          "nameUrl" : "modular-form.html",
          "title" : "Modular Form",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "form-population.html"
            }
          ],
          "nameUrl" : "form-population.html",
          "title" : "Form Population",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "form-data-extraction.html"
            }
          ],
          "nameUrl" : "form-data-extraction.html",
          "title" : "Form Data Extraction",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "document.html"
            }
          ],
          "nameUrl" : "document.html",
          "title" : "Document",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "profiles.html"
            }
          ],
          "nameUrl" : "profiles.html",
          "title" : "Profiles",
          "generation" : "html"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "extensions.html"
            }
          ],
          "nameUrl" : "extensions.html",
          "title" : "Extensions",
          "generation" : "html"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "terminology.html"
            }
          ],
          "nameUrl" : "terminology.html",
          "title" : "Terminology",
          "generation" : "html"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "changelog.html"
            }
          ],
          "nameUrl" : "changelog.html",
          "title" : "Changelog",
          "generation" : "markdown"
        }
      ]
    },
    "parameter" : [
      {
        "code" : "path-pages",
        "value" : "pages"
      },
      {
        "code" : "path-resource",
        "value" : "input/capabilities"
      },
      {
        "code" : "path-resource",
        "value" : "input/examples"
      },
      {
        "code" : "path-resource",
        "value" : "input/extensions"
      },
      {
        "code" : "path-resource",
        "value" : "input/models"
      },
      {
        "code" : "path-resource",
        "value" : "input/operations"
      },
      {
        "code" : "path-resource",
        "value" : "input/profiles"
      },
      {
        "code" : "path-resource",
        "value" : "input/resources"
      },
      {
        "code" : "path-resource",
        "value" : "input/vocabulary"
      },
      {
        "code" : "path-resource",
        "value" : "input/maps"
      },
      {
        "code" : "path-resource",
        "value" : "input/testing"
      },
      {
        "code" : "path-resource",
        "value" : "input/history"
      },
      {
        "code" : "path-resource",
        "value" : "fsh-generated/resources"
      },
      {
        "code" : "path-pages",
        "value" : "template/config"
      },
      {
        "code" : "path-pages",
        "value" : "input/images"
      },
      {
        "code" : "path-tx-cache",
        "value" : "input-cache/txcache"
      }
    ]
  }
}

```
