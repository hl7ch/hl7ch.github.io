# Patient: Michaël Christopher KARCE - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Patient: Michaël Christopher KARCE**

## Example Patient: Patient: Michaël Christopher KARCE

Profile: [CH EMED EPR Patient](StructureDefinition-ch-emed-epr-patient.md)

Michaël Christopher Karce Male, DoB: 1973-12-25 ( Medical record number (use: official, ))

-------

| | | | |
| :--- | :--- | :--- | :--- |
| Active: | true | Marital Status: | unbekannt |
| Other Ids: | * Medical record number/100001368 (use: secondary, )
* Medical record number/CARAPMP004 (use: secondary, )
 | | |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "PatientCARAPMP004",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-patient"
    ]
  },
  "identifier" : [
    {
      "use" : "official",
      "type" : {
        "coding" : [
          {
            "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
            "code" : "MR"
          }
        ]
      },
      "system" : "urn:oid:2.16.756.5.30.1.1625.3.1.3.1",
      "value" : "7857bf60-93a1-409d-a647-ee260cec9c0e"
    },
    {
      "use" : "secondary",
      "type" : {
        "coding" : [
          {
            "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
            "code" : "MR"
          }
        ]
      },
      "system" : "urn:oid:2.16.756.5.30.1.177.2.2.1.1",
      "value" : "100001368"
    },
    {
      "use" : "secondary",
      "type" : {
        "coding" : [
          {
            "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
            "code" : "MR"
          }
        ]
      },
      "system" : "urn:oid:2.16.756.5.30.1.196.3.2.1",
      "value" : "CARAPMP004"
    }
  ],
  "active" : true,
  "name" : [
    {
      "family" : "Karce",
      "given" : ["Michaël Christopher"]
    }
  ],
  "gender" : "male",
  "birthDate" : "1973-12-25",
  "maritalStatus" : {
    "coding" : [
      {
        "system" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-maritalstatus",
        "code" : "9",
        "display" : "unbekannt"
      }
    ]
  }
}

```
