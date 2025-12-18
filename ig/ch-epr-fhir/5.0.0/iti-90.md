# Find Matching Care Services [ITI-90] - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* **Find Matching Care Services [ITI-90]**

## Find Matching Care Services [ITI-90]

This section describes the national extension for the Swiss EPR to the [Find Matching Care Services [ITI-90]](https://profiles.ihe.net/ITI/mCSD/ITI-90.html) transaction defined in the mCSD profile published in the IHE IT Infrastructure Technical Framework Trial Implementation “Mobile Care Services Discovery”.

### Scope

A primary system wants to search for healthcare organizations or professionals. It can perform an [ITI-90](iti-90.md) request with search parameters to get a list of matched resources.

It offers an alternative to the HPD ITI-58 transaction.

### Actor Roles

**Actor:** Query Client
 **Role:** Requests a list of resources from the Directory based on query parameters.
 **Actor:** Directory
 **Role:** Accepts the query request and returns a list of matching resources.

### Referenced Standards

1. [IHE ITI Mobile Care Services Discovery (mCSD) 4.0.0](https://profiles.ihe.net/ITI/mCSD/4.0.0)
1. [FHIR R4 API search](http://hl7.org/fhir/R4/http.html#search)
1. [EPR – Central Services, Interface Documentation v1.0.40](https://www.e-health-suisse.ch/en/technique/technical-interoperability/specifications-for-the-epr-implementation#CentServRes)

### Messages

#### Find Matching Care Services Request Message

The **Find Matching Care Services** message is a FHIR search operation on the mCSD Resources.

A **Query Client** initiates a search request using HTTP GET or POST:

```
GET [base]/[resource]?[parameters] HTTP/1.1
Accept: application/fhir+json
traceparent: 00-0af7651916cd43dd8448eb211c80319c-b7ad6b7169203331-00

```

or

```
POST [base]/[resource]/_search HTTP/1.1
Accept: application/fhir+json
traceparent: 00-0af7651916cd43dd8448eb211c80319c-b7ad6b7169203331-00
Content-Type: application/x-www-form-urlencoded

param1=value&param2=value

```

##### Semantics

The **Directory** shall support the following search parameters for all resources:

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| _id | token | Resource.id |   |   |
| _lastUpdated | date | Resource.meta.lastUpdated | ge, le |   |
| _format | token | N/A |   | Defines the[expected response format](https://profiles.ihe.net/ITI/TF/Volume2/ch-Z.html#z.6-populating-the-expected-response-format) |
| _sort |   | N/A |   | For[sorting](https://www.hl7.org/fhir/R4/search.html#sort) |
| _count | number | N/A |   | For[paging](https://www.hl7.org/fhir/R4/search.html#count) |

The **Directory** shall support the following search parameters on the **[Organization](StructureDefinition-CH.mCSD.Organization.md)** resource:

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| active | token | Organization.active |   |   |
| identifier | token | Organization.identifier |   |   |
| name | string | Organization.(name, alias) | :contains, :exact |   |
| partof | reference | Organization.partOf |   |   |
| type | token | Organization.type |   |   |
| _include=Organization.endpoint |   |   |   | It has no effect |
| _revInclude=Location:organization |   |   |   | It has no effect |
| _revInclude=OrganizationAffiliation:participating-organization |   |   |   | It has no effect |
| _revInclude=OrganizationAffiliation:primary-organization |   |   |   | It has no effect |

The **Directory** shall support the following search parameters on the **[Practitioner](StructureDefinition-CH.mCSD.Practitioner.md)** resource:

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| active | token | Practitioner.active |   |   |
| identifier | token | Practitioner.identifier |   |   |
| name | string | Practitioner.name | :contains, :exact | A server defined search that may match any of the string fields in the HumanName |
| given | string | Practitioner.name.given | :contains, :exact |   |
| family | string | Practitioner.name.family | :contains, :exact |   |

The **Directory** shall support the following search parameters on the **[PractitionerRole](StructureDefinition-CH.mCSD.PractitionerRole.md)** resource:

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| active | token | PractitionerRole.active |   |   |
| location | reference | PractitionerRole.location |   | Will not yield any results |
| organization | reference | PractitionerRole.organization |   |   |
| practitioner | reference | PractitionerRole.practitioner |   |   |
| role | token | PractitionerRole.code |   |   |
| service | reference | PractitionerRole.healthcareService |   | Will not yield any results |
| specialty | token | PractitionerRole.specialty |   |   |
| _include=PractitionerRole:practitioner |   |   |   | Includes the referenced Practitioners in the response |

The **Directory** may not support other resources (**Endpoint**, **HealthcareService**, **Location** and **OrganizationAffiliation**), as they are not used in this national extension. Any search query on these resources may not yield any result. Some example queries are given here:

1. The following request searches for an active**Organization**whose name contains 'Medical':`GET [base]/Organization?active=true&name:contains=Medical`
1. The following request searches for a**Practitioner**named 'Müller':`GET [base]/Practitioner?family=Müller`
1. The following request searches for a**Practitioner**with the GLN '7601000102737':`GET [base]/Practitioner?identifier=urn:oid:2.51.1.3|7601000102737`
1. The following request searches for all**Practitioners**working at the 'HUG' organization:`GET [base]/PractitionerRole?organization=Organization/HUG&_include=PractitionerRole:practitioner`

#### Find Matching Care Services Response Message

The response message is a [Search Results Bundle](http://hl7.org/fhir/R4/bundle.html#searchset) that contains **[Organizations](StructureDefinition-CH.mCSD.Organization.md)**, **[Practitioners](StructureDefinition-CH.mCSD.Practitioner.md)** and **[PractitionerRoles](StructureDefinition-CH.mCSD.PractitionerRole.md)**. [An example of response message](Bundle-FindMatchingCareServicesResponse.md) is provided.

#### Retrieve Care Services Resource Message

The **Retrieve Care Services Resource** is conducted by executing an HTTP GET against the **Directory**'s Care Services Resource URL, providing the resource id of the resource being retrieved. The target is formatted as: `GET [base]/[resource]/[resourceId]`. Some examples are

1. Retrieve the**Organization**'Spital X Dept. 3':`GET [base]/Organization/SpitalXDept3`.
1. Retrieve the**Practitioner**'Dr. Peter Pan':`GET [base]/Practitioner/DrPeterPan`.
1. Retrieve the**PractitionerRole**'Dr. Peter Pan at Praxis P':`GET [base]/PractitionerRole/PeterPanPraxisP`.

#### Retrieve Care Services Resource Response Message

The **Directory** shall respond to this query by sending a single **Care Services Resource** instance.

* If the **Directory** finds the resource, `HTTP 200 OK` is returned with the resource (an **[Organization](StructureDefinition-CH.mCSD.Organization.md)**, **[Practitioner](StructureDefinition-CH.mCSD.Practitioner.md)** or **[PractitionerRole](StructureDefinition-CH.mCSD.PractitionerRole.md)**).
* If the **Directory** does not find the resource, `HTTP 404 Not Found` is returned with an **[OperationOutcome](https://www.hl7.org/fhir/r4/operationoutcome.html)** resource.

#### CapabilityStatement Resource

The CapabilityStatement resource for the **Query Client** is [mCSD Query Client](CapabilityStatement-CH.mCSD.QueryClient.md).

The CapabilityStatement resource for the **Directory** is [mCSD Directory](CapabilityStatement-CH.mCSD.Directory.md).

### Security Considerations

The transaction SHALL be secured by Transport Layer Security (TLS) encryption and server authentication with server certificates.

The transaction SHALL use client authentication and authorization using one of the following strategies:

1. Use a basic access token defined in[IUA](iti-71.md)conveyed as defined in the[Incorporate Access Token [ITI-72]](https://profiles.ihe.net/ITI/IUA/index.html#372-incorporate-access-token-iti-72)transaction.
1. or, use mutual authentication (mTLS) on the transport layer.

The actors SHALL support the **traceparent** header handling, as defined in [Appendix: Trace Context](tracecontext.md).

#### Security Audit Considerations

Note that the same audit message is recorded by both **Directory** and **Query Client**. The difference being the Audit Source element. Both sides record to show consistency between the message sent by the Query Client and the action taken at the Directory.

The actors involved shall record audit events according to the [CH Audit Event for [ITI-90] Query Client & Directory, for a**Read**operation](StructureDefinition-ChAuditEventIti90Read.md) or the [CH Audit Event for [ITI-90] Query Client & Directory, for a**Query**operation](StructureDefinition-ChAuditEventIti90Query.md).

