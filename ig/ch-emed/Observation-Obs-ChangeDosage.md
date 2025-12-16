# Observation for Pharmaceutical Advice document - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Observation for Pharmaceutical Advice document**

## Example Observation: Observation for Pharmaceutical Advice document

Profile: [CH EMED Observation (PADV)](StructureDefinition-ch-emed-observation.md)

> **CH EMED Extension Treatment Plan**
* id: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:7aa20b27-eac0-4fef-a7b9-b10196718b9f
* externalDocumentId: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:7aa20b27-eac0-4fef-a7b9-b10196718b9f

**CH EMED Extension MedicationStatement Changed**: [MedicationStatement: identifier = UUID:7aa20b27-eac0-4fef-a7b9-b10196718b9f; status = active; medication[x] = ->Medication AMLODIPIN Spirig HC Tabl 10 mg; dateAsserted = 2012-02-04 14:00:00+0100; reasonCode =](MedicationStatement-MedStatTriatec-ChangeDosage.md)

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:adab8d2d-ae14-48d6-8d15-b726d6ea82c5

**status**: Final

**code**: CHANGE

**subject**: [Monika Wegmüller Female, DoB: 1943-05-15 ( Medical record number)](Patient-MonikaWegmueller.md)

**effective**: 2012-02-04 14:00:00+0100

**issued**: 2012-02-04 14:00:00+0100

**performer**: [PractitionerRole](PractitionerRole-FamilienHausarztAtHausarzt.md)

**note**: 

> 

Dosierungsänderung: Morgens 1 Tablette anstatt 0.5 Tablette




## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "Obs-ChangeDosage",
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
            "value" : "urn:uuid:7aa20b27-eac0-4fef-a7b9-b10196718b9f"
          }
        },
        {
          "url" : "externalDocumentId",
          "valueIdentifier" : {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:7aa20b27-eac0-4fef-a7b9-b10196718b9f"
          }
        }
      ],
      "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-treatmentplan"
    },
    {
      "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-medicationstatement-changed",
      "valueReference" : {
        "reference" : "MedicationStatement/MedStatTriatec-ChangeDosage"
      }
    }
  ],
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:adab8d2d-ae14-48d6-8d15-b726d6ea82c5"
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
      "text" : "Dosierungsänderung: Morgens 1 Tablette anstatt 0.5 Tablette"
    }
  ]
}

```
