# Mobile Privacy Policy Feed [PPQ-3] - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* **Mobile Privacy Policy Feed [PPQ-3]**

## Mobile Privacy Policy Feed [PPQ-3]

### Scope

This transaction is used by the Policy Source to add, update, or delete single privacy policies. Correspondingly, the following HTTP methods SHALL be supported: `POST`, `PUT`, and `DELETE`.

### HTTP Method POST

Figure 2: PPQ-3: HTTP Method POST
#### Trigger Event

The Policy Source uses HTTP method `POST` to submit a single new privacy policy to the Policy Repository.

#### Request Message

The request body SHALL represent a single Consent resource compliant to the [PpqmConsent](StructureDefinition-PpqmConsent.md) profile.

The request SHALL be sent to `[baseUrl]/Consent`.

#### Expected Actions

Upon receiving the HTTP POST request, the Policy Repository SHALL:

* Validate the Consent resource contained in the request body.
* Persist the policy set represented by this Consent.
* Create a PPQ-3 response according to the transaction outcome.

#### Response Message

The PPQ-3 response SHALL be created according to the section [3.1.0.8](https://hl7.org/fhir/R4/http.html#create) of the FHIR R4 specification.

### HTTP Method PUT

Figure 3: PPQ-3: HTTP Method PUT
#### Trigger Event

The Policy Source uses HTTP method `PUT` to submit a new or update an existing single privacy policy.

#### Request Message

The request body SHALL represent a single Consent resource compliant to the [PpqmConsent](StructureDefinition-PpqmConsent.md) profile.

The request SHALL be sent to `[baseUrl]/Consent?identifier=[uuid]`.

#### Expected Actions

The Policy Repository SHALL implement the Conditional Update pattern described in section [3.1.0.4.3](https://hl7.org/fhir/R4/http.html#cond-update) of the FHIR R4 specification.

Upon receiving the HTTP PUT request, the Policy Repository SHALL:

* Validate the Consent resource contained in the request body. In particular, it SHALL be validated that the policy set ID is the same as in the HTTP URL.
* Persist the policy set represented by this Consent.
* Create a PPQ-3 response according to the transaction outcome.

#### Response Message

The PPQ-3 response SHALL be created according to the section [3.1.0.4](https://hl7.org/fhir/R4/http.html#update) of the FHIR R4 specification.

### HTTP Method DELETE

Figure 4: PPQ-3: HTTP Method DELETE
#### Trigger Event

The Policy Source uses HTTP method `DELETE` to delete a single existing privacy policy from the Policy Repository.

#### Request Message

The request body SHALL be empty.

The request SHALL be sent to `[baseUrl]/Consent?identifier=[uuid]`.

#### Expected Actions

The Policy Repository SHALL implement the Conditional Delete pattern described in section [3.1.0.7.1](https://hl7.org/fhir/R4/http.html#3.1.0.7.1) of the FHIR R4 specification.

Upon receiving the HTTP DELETE request, the Policy Repository SHALL:

* Delete the policy set referenced in the request.
* Create a PPQ-3 response according to the transaction outcome.

#### Response Message

The PPQ-3 response SHALL be created according to the section [3.1.0.7](https://hl7.org/fhir/R4/http.html#delete) of the FHIR R4 specification.

### Security Considerations

The transaction SHALL be secured by Transport Layer Security (TLS) encryption and server authentication with server certificates.

The transaction SHALL use client authentication and authorization using one of the following strategies:

1. Use an extended access token defined in[IUA](iti-71.md)conveyed as defined in the[Incorporate Access Token [ITI-72]](https://profiles.ihe.net/ITI/IUA/index.html#372-incorporate-access-token-iti-72)transaction.
1. or, use mutual authentication (mTLS) on the transport layer in combination with a XUA token for authorization from the Get X-User Assertion transaction (Annex 5.1 1.6.4.2). The XUA token SHALL be conveyed as defined in the[Incorporate Access Token [ITI-72]](https://profiles.ihe.net/ITI/IUA/index.html#372-incorporate-access-token-iti-72)transaction.

The Policy Repository actor shall be grouped with CH:ADR, i.e. the Policy Repository shall use the CH:ADR Authorization Decision Request transaction to authorize the transaction and enforce the authorization decision retrieved from CH:ADR Authorization Decision Response.

The actors SHALL support the **traceparent** header handling, as defined in [Appendix: Trace Context](tracecontext.md).

#### Security Audit Considerations

The **Policy Source** and **Policy Repository** SHALL record an audit event for each operation in the transaction according to:

* [CH Audit Event for [PPQ-3]**Create**Privacy Policy](StructureDefinition-ChAuditEventPpq3Create.md)
* [CH Audit Event for [PPQ-3]**Update**Privacy Policy](StructureDefinition-ChAuditEventPpq3Update.md)
* [CH Audit Event for [PPQ-3]**Delete**Privacy Policy](StructureDefinition-ChAuditEventPpq3Delete.md)

