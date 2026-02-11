# Observation: CHANGE of Axapharm paracetamol prescription, replaced with Dafalgan eff. - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Observation: CHANGE of Axapharm paracetamol prescription, replaced with Dafalgan eff.**

## Example Observation: Observation: CHANGE of Axapharm paracetamol prescription, replaced with Dafalgan eff.

Language: fr-CH

Profile: [PML Observation](StructureDefinition-ch-emed-epr-observation-list.md)

> **CH EMED Extension Prescription**
* id: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:ac8ad5cd-aa46-49d6-a5ec-fbc48a9287b4
* externalDocumentId: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:e0c06f3c-1b63-468a-9c46-e800d39b6a15

**CH EMED Extension MedicationRequest Changed**: [MedicationRequest: extension = ,; identifier = UUID:a62e5440-c82c-4270-92fb-d50cd515198a; status = active; intent = order; medication[x] = ->Medication DAFALGAN cpr eff 500mg; authoredOn = 2023-11-04 12:00:00+0200; note = Difficulté à prendre le comprimé pelliculé, substitution par un comprimé effervescent.](Bundle-BundleUtc6bPml.md#urn-uuid-a62e5440-c82c-4270-92fb-d50cd515198a)

> **CH EMED Extension Pharmaceutical Advice**
* id: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:7e64e4bf-65d9-40d4-a2b5-e7ddc254f08d
* externalDocumentId: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:6c5a6e38-3782-499c-986f-086e7121828d

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:383ed95d-95d3-4599-b975-9db806359c0d

**status**: Final

**code**: CHANGE

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
  "id" : "ObservationParacetamolAxapharmPrePadvChangePml",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-observation-list"
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
            "value" : "urn:uuid:ac8ad5cd-aa46-49d6-a5ec-fbc48a9287b4"
          }
        },
        {
          "url" : "externalDocumentId",
          "valueIdentifier" : {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:e0c06f3c-1b63-468a-9c46-e800d39b6a15"
          }
        }
      ],
      "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-prescription"
    },
    {
      "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-medicationrequest-changed",
      "valueReference" : {
        "reference" : "urn:uuid:a62e5440-c82c-4270-92fb-d50cd515198a"
      }
    },
    {
      "extension" : [
        {
          "url" : "id",
          "valueIdentifier" : {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:7e64e4bf-65d9-40d4-a2b5-e7ddc254f08d"
          }
        },
        {
          "url" : "externalDocumentId",
          "valueIdentifier" : {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:6c5a6e38-3782-499c-986f-086e7121828d"
          }
        }
      ],
      "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-pharmaceuticaladvice"
    }
  ],
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:383ed95d-95d3-4599-b975-9db806359c0d"
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
