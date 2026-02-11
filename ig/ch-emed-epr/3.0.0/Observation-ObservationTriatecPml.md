# Observation: Triatec (PML) - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Observation: Triatec (PML)**

## Example Observation: Observation: Triatec (PML)

Profile: [PML Observation](StructureDefinition-ch-emed-epr-observation-list.md)

> **CH EMED Extension Treatment Plan**
* id: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:41b97645-e263-47c2-8d96-79da451a33f2
* externalDocumentId: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:24c84eef-f9db-4710-8f6c-2d342ad3ac2d

**CH EMED Extension MedicationStatement Changed**: [MedicationStatement: extension = ; identifier = UUID:41b97645-e263-47c2-8d96-79da451a33f2; status = active; medication[x] = ->Medication TRIATEC Tabl 2.5 mg 20 Stk; dateAsserted = 2023-04-11](Bundle-BundlePml1.md#urn-uuid-41b97645-e263-47c2-8d96-79da451a33f2)

> **CH EMED Extension Pharmaceutical Advice**
* id: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:41b97645-e263-47c2-8d96-79da451a33f2
* externalDocumentId: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:293bf5b1-f663-4914-8080-4e33aa54b909

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:e729b2f6-62aa-4628-8a13-27c8b8674473

**status**: Final

**code**: CHANGE

**subject**: [Jeanne Dupont Female, DoB: 1972-08-07 ( Medical record number)](Bundle-DocumentDis1.md#urn-uuid-2dbfe659-07d0-45c7-b8df-4a48372049a3)

**issued**: 2023-04-11 12:00:00+0200

**performer**: [PractitionerRole](Bundle-BundleUtc6bPml.md#urn-uuid-213d609a-1164-459a-bb10-727516ae3d0c)

**note**: 

> 

Changed intake to range 0.5-1 tablets after discussion with patient.




## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "ObservationTriatecPml",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-observation-list"
    ]
  },
  "extension" : [
    {
      "extension" : [
        {
          "url" : "id",
          "valueIdentifier" : {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:41b97645-e263-47c2-8d96-79da451a33f2"
          }
        },
        {
          "url" : "externalDocumentId",
          "valueIdentifier" : {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:24c84eef-f9db-4710-8f6c-2d342ad3ac2d"
          }
        }
      ],
      "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-treatmentplan"
    },
    {
      "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-medicationstatement-changed",
      "valueReference" : {
        "reference" : "urn:uuid:41b97645-e263-47c2-8d96-79da451a33f2"
      }
    },
    {
      "extension" : [
        {
          "url" : "id",
          "valueIdentifier" : {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:41b97645-e263-47c2-8d96-79da451a33f2"
          }
        },
        {
          "url" : "externalDocumentId",
          "valueIdentifier" : {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:293bf5b1-f663-4914-8080-4e33aa54b909"
          }
        }
      ],
      "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-pharmaceuticaladvice"
    }
  ],
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:e729b2f6-62aa-4628-8a13-27c8b8674473"
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
  "issued" : "2023-04-11T12:00:00+02:00",
  "performer" : [
    {
      "reference" : "urn:uuid:213d609a-1164-459a-bb10-727516ae3d0c"
    }
  ],
  "note" : [
    {
      "text" : "Changed intake to range 0.5-1 tablets after discussion with patient."
    }
  ]
}

```
