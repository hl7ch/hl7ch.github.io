# Marvin Muster - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Marvin Muster**

## Example Patient: Marvin Muster

Profile: [CH Core Patient](StructureDefinition-ch-core-patient.md)

Marvin Muster Male, DoB: 1997-01-26 ( urn:oid:2.16.756.5.32#7562295883070)

-------

| | |
| :--- | :--- |
| Marital Status: | in eingetragener Partnerschaft |
| Language: | Deutsch (Schweiz)(preferred) |
| [Patient Birth Place](http://hl7.org/fhir/extensions/5.3.0-ballot-tc1/StructureDefinition-patient-birthPlace.html) | Salzburg Österreich |
| [Place of Origin according to eCH-0011](StructureDefinition-ch-core-patient-ech-11-placeoforigin.md) | Zug ZG |
| [Patient Religion](http://hl7.org/fhir/extensions/5.3.0-ballot-tc1/StructureDefinition-patient-religion.html) | Orthodox |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "MarvinMuster",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
    ]
  },
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/patient-birthPlace",
      "valueAddress" : {
        "city" : "Salzburg",
        "country" : "Österreich"
      }
    },
    {
      "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient-ech-11-placeoforigin",
      "valueAddress" : {
        "city" : "Zug",
        "state" : "ZG"
      }
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/patient-religion",
      "valueCodeableConcept" : {
        "coding" : [
          {
            "system" : "http://terminology.hl7.org/CodeSystem/v3-ReligiousAffiliation",
            "code" : "1036",
            "display" : "Orthodox"
          }
        ]
      }
    }
  ],
  "identifier" : [
    {
      "system" : "urn:oid:2.16.756.5.32",
      "value" : "7562295883070"
    }
  ],
  "name" : [
    {
      "family" : "Muster",
      "given" : ["Marvin"]
    }
  ],
  "gender" : "male",
  "birthDate" : "1997-01-26",
  "maritalStatus" : {
    "coding" : [
      {
        "system" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-maritalstatus",
        "code" : "6",
        "display" : "in eingetragener Partnerschaft"
      }
    ]
  },
  "communication" : [
    {
      "language" : {
        "coding" : [
          {
            "system" : "urn:ietf:bcp:47",
            "code" : "de-CH"
          }
        ],
        "text" : "Deutsch (Schweiz)"
      },
      "preferred" : true
    }
  ]
}

```
