# Franz Muster - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Franz Muster**

## Example Patient: Franz Muster

Profile: [CH Core Patient](StructureDefinition-ch-core-patient.md)

Franz Muster Male, DoB: 1995-01-27 ( Medical record number)

-------

| | |
| :--- | :--- |
| Marital Status: | in eingetragener Partnerschaft |
| Language: | Deutsch (Schweiz)(preferred) |
| [Patient Birth Place](http://hl7.org/fhir/extensions/5.3.0-ballot-tc1/StructureDefinition-patient-birthPlace.html) | Paris Frankreich |
| [Place of Origin according to eCH-0011](StructureDefinition-ch-core-patient-ech-11-placeoforigin.md) | Köniz BE |
| [Patient Religion](http://hl7.org/fhir/extensions/5.3.0-ballot-tc1/StructureDefinition-patient-religion.html) | Protestant |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "FranzMuster",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
    ]
  },
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/patient-birthPlace",
      "valueAddress" : {
        "city" : "Paris",
        "country" : "Frankreich"
      }
    },
    {
      "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient-ech-11-placeoforigin",
      "valueAddress" : {
        "city" : "Köniz",
        "state" : "BE"
      }
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/patient-religion",
      "valueCodeableConcept" : {
        "coding" : [
          {
            "system" : "http://terminology.hl7.org/CodeSystem/v3-ReligiousAffiliation",
            "code" : "1077",
            "display" : "Protestant"
          }
        ]
      }
    }
  ],
  "identifier" : [
    {
      "type" : {
        "coding" : [
          {
            "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
            "code" : "MR"
          }
        ]
      },
      "system" : "urn:oid:2.999.1.2.3.4",
      "value" : "012/08.111111"
    }
  ],
  "name" : [
    {
      "family" : "Muster",
      "given" : ["Franz"]
    }
  ],
  "gender" : "male",
  "birthDate" : "1995-01-27",
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
