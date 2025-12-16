# Manuela Muster - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Manuela Muster**

## Example Patient: Manuela Muster

Profile: [CH Core Patient](StructureDefinition-ch-core-patient.md)

Manuela Muster Female, DoB: 1997-02-21 ( urn:oid:2.16.756.5.30.1.127.3.10.3#761337615317835750)

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
  "id" : "ManuelaMuster",
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
      "system" : "urn:oid:2.16.756.5.30.1.127.3.10.3",
      "value" : "761337615317835750"
    }
  ],
  "name" : [
    {
      "family" : "Muster",
      "given" : ["Manuela"]
    }
  ],
  "gender" : "female",
  "birthDate" : "1997-02-21",
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
