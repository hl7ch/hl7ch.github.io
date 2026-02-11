# Observation: Ramipril (PADV) - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Observation: Ramipril (PADV)**

## Example Observation: Observation: Ramipril (PADV)

Language: fr-CH

Profile: [PADV Observation](StructureDefinition-ch-emed-epr-observation.md)

> **CH EMED Extension Prescription**
* id: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:cc74c310-3e16-45ff-b03d-4e0787e552d3
* externalDocumentId: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:6f9d43df-fdc2-4ec2-a6d4-88b27dadb291

**CH EMED Extension MedicationRequest Changed**: [MedicationRequest: extension = ; identifier = UUID:cc74c310-3e16-45ff-b03d-4e0787e552d3; status = active; intent = order; medication[x] = ->Medication RAMIPRIL Mepha cpr 2.5 mg; authoredOn = 2023-04-20](Bundle-DocumentPadv2.md#urn-uuid-cc74c310-3e16-45ff-b03d-4e0787e552d3)

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:e0a7065f-61c3-4b17-ba6d-9446cd2d6473

**status**: Final

**code**: CHANGE

**subject**: [Jeanne Dupont Female, DoB: 1972-08-07 ( Medical record number)](Bundle-DocumentDis1.md#urn-uuid-2dbfe659-07d0-45c7-b8df-4a48372049a3)

**issued**: 2023-04-12 12:00:00+0200

**performer**: [PractitionerRole](Bundle-BundleUtc6bPml.md#urn-uuid-213d609a-1164-459a-bb10-727516ae3d0c)

**note**: 

> 

Ordonnance de Ramipril Mepha en lieu du Triatec (prix).




## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "ObservationRamiprilPadv",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-observation"
    ]
  },
  "language" : "fr-CH",
  "extension" : [
    {
      "extension" : [
        {
          "url" : "id",
          "valueIdentifier" : {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:cc74c310-3e16-45ff-b03d-4e0787e552d3"
          }
        },
        {
          "url" : "externalDocumentId",
          "valueIdentifier" : {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:6f9d43df-fdc2-4ec2-a6d4-88b27dadb291"
          }
        }
      ],
      "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-prescription"
    },
    {
      "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-medicationrequest-changed",
      "valueReference" : {
        "reference" : "urn:uuid:cc74c310-3e16-45ff-b03d-4e0787e552d3"
      }
    }
  ],
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:e0a7065f-61c3-4b17-ba6d-9446cd2d6473"
    }
  ],
  "status" : "final",
  "code" : {
    "coding" : [
      {
        "system" : "urn:oid:1.3.6.1.4.1.19376.1.9.2.1",
        "code" : "CHANGE"
      }
    ]
  },
  "subject" : {
    "reference" : "urn:uuid:2dbfe659-07d0-45c7-b8df-4a48372049a3"
  },
  "issued" : "2023-04-12T12:00:00+02:00",
  "performer" : [
    {
      "reference" : "urn:uuid:213d609a-1164-459a-bb10-727516ae3d0c"
    }
  ],
  "note" : [
    {
      "text" : "Ordonnance de Ramipril Mepha en lieu du Triatec (prix)."
    }
  ]
}

```
