# Observation for Pharmaceutical Advice document - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Observation for Pharmaceutical Advice document**

## Example Observation: Observation for Pharmaceutical Advice document

Profile: [CH EMED Observation (PADV)](StructureDefinition-ch-emed-observation.md)

> **CH EMED Extension Prescription**
* id: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:1c5b5e9b-24f7-45ed-ae9c-6e2ec53e7b05
* externalDocumentId: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:1c5b5e9b-24f7-45ed-ae9c-6e2ec53e7b05

**CH EMED Extension MedicationRequest Changed**: [MedicationRequest: identifier = UUID:9e5045e3-03a7-4885-a8e1-f3dc056af465; status = active; intent = order; medication[x] = ->Medication AMLODIPIN Spirig HC Tabl 10 mg; authoredOn = 2012-02-04 14:00:00+0100; reasonCode =](MedicationRequest-MedReq-ChangeMedication.md)

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:9a34302b-49d1-4098-adf8-cea5302ab26b

**status**: Final

**code**: CHANGE

**subject**: [Monika Wegmüller Female, DoB: 1943-05-15 ( Medical record number)](Patient-MonikaWegmueller.md)

**effective**: 2012-02-04 14:00:00+0100

**issued**: 2012-02-04 14:00:00+0100

**performer**: [PractitionerRole](PractitionerRole-FamilienHausarztAtHausarzt.md)

**note**: 

> 

Generika: Amlodipin anstatt Norvasc




## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "PharmaceuticalAdvice-ChangeMedicament",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-observation"
    ]
  },
  "extension" : [
    {
      "extension" : [
        {
          "url" : "id",
          "valueIdentifier" : {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:1c5b5e9b-24f7-45ed-ae9c-6e2ec53e7b05"
          }
        },
        {
          "url" : "externalDocumentId",
          "valueIdentifier" : {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:1c5b5e9b-24f7-45ed-ae9c-6e2ec53e7b05"
          }
        }
      ],
      "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-prescription"
    },
    {
      "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-medicationrequest-changed",
      "valueReference" : {
        "reference" : "MedicationRequest/MedReq-ChangeMedication"
      }
    }
  ],
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:9a34302b-49d1-4098-adf8-cea5302ab26b"
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
    "reference" : "Patient/MonikaWegmueller"
  },
  "effectiveDateTime" : "2012-02-04T14:00:00+01:00",
  "issued" : "2012-02-04T14:00:00+01:00",
  "performer" : [
    {
      "reference" : "PractitionerRole/FamilienHausarztAtHausarzt"
    }
  ],
  "note" : [
    {
      "text" : "Generika: Amlodipin anstatt Norvasc"
    }
  ]
}

```
