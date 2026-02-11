# Observation: CANCEL of Axapharm paracetamol treatment. - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Observation: CANCEL of Axapharm paracetamol treatment.**

## Example Observation: Observation: CANCEL of Axapharm paracetamol treatment.

Language: fr-CH

Profile: [PADV Observation](StructureDefinition-ch-emed-epr-observation.md)

> **CH EMED Extension Treatment Plan**
* id: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:17837392-0340-414d-a3bf-fa9f237b91ff
* externalDocumentId: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:0399ef84-c71b-413b-8a66-b5a835f4f4c5

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:b34ff5b8-8da2-4a6f-8e68-852b84bad0b7

**status**: Final

**code**: CANCEL

**subject**: [Michaël Christopher Karce Male, DoB: 1973-12-25 ( Medical record number (use: official, ))](Bundle-BundleUtc1Pml.md#urn-uuid-9b00e81e-1165-4039-9d60-698ef838ae1a)

**issued**: 2023-10-04 00:00:00+0200

**performer**: [PractitionerRole](Bundle-BundleUtc6bPml.md#urn-uuid-213d609a-1164-459a-bb10-727516ae3d0c)

**note**: 

> 

Difficulté à perndre le comprimé pelliculé, substitution par un comprimé effervescent.




## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "ObservationParacetamolAxapharmPrePadvCancel",
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
            "value" : "urn:uuid:17837392-0340-414d-a3bf-fa9f237b91ff"
          }
        },
        {
          "url" : "externalDocumentId",
          "valueIdentifier" : {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:0399ef84-c71b-413b-8a66-b5a835f4f4c5"
          }
        }
      ],
      "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-treatmentplan"
    }
  ],
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:b34ff5b8-8da2-4a6f-8e68-852b84bad0b7"
    }
  ],
  "status" : "final",
  "code" : {
    "coding" : [
      {
        "system" : "urn:oid:1.3.6.1.4.1.19376.1.9.2.1",
        "code" : "CANCEL"
      }
    ]
  },
  "subject" : {
    "reference" : "urn:uuid:9b00e81e-1165-4039-9d60-698ef838ae1a"
  },
  "issued" : "2023-10-04T00:00:00+02:00",
  "performer" : [
    {
      "reference" : "urn:uuid:213d609a-1164-459a-bb10-727516ae3d0c"
    }
  ],
  "note" : [
    {
      "text" : "Difficulté à perndre le comprimé pelliculé, substitution par un comprimé effervescent."
    }
  ]
}

```
