# Elisabeth Broennimann by BFH - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Elisabeth Broennimann by BFH**

## Example Patient: Elisabeth Broennimann by BFH

Information Source: [https://www.bfh.ch/de/studium/bachelor/medizininformatik/](https://www.bfh.ch/de/studium/bachelor/medizininformatik/)

Profile: [CH Core Patient](StructureDefinition-ch-core-patient.md)

Elisabeth Brönnimann-Bertholet Female, DoB: 1937-05-03 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)

-------

| | |
| :--- | :--- |
| Marital Status: | verheiratet |
| Contact Detail | * [+41 32 321 61 11](tel:+41323216111)
* [elisabeth@broennimann.today](mailto:elisabeth@broennimann.today)
* Kreuzweg 11 Biel/Bienne BE 2500 Schweiz (home)
 |
| Links: | * General Practitioner: [Practitioner Hanspeter Wenger](Practitioner-HanspeterWengerByBFH.md)
 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "ElisabethBroennimannByBFH",
  "meta" : {
    "source" : "https://www.bfh.ch/de/studium/bachelor/medizininformatik/",
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.16.756.5.30.1.123.100.1.1.1",
      "value" : "80756015090002647590"
    }
  ],
  "name" : [
    {
      "family" : "Brönnimann-Bertholet",
      "given" : ["Elisabeth"]
    }
  ],
  "telecom" : [
    {
      "system" : "phone",
      "value" : "+41 32 321 61 11",
      "use" : "home"
    },
    {
      "system" : "email",
      "value" : "elisabeth@broennimann.today"
    }
  ],
  "gender" : "female",
  "birthDate" : "1937-05-03",
  "address" : [
    {
      "use" : "home",
      "line" : ["Kreuzweg 11"],
      "city" : "Biel/Bienne",
      "state" : "BE",
      "postalCode" : "2500",
      "country" : "Schweiz",
      "_country" : {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-codedString",
            "valueCoding" : {
              "system" : "urn:iso:std:iso:3166",
              "code" : "CH"
            }
          }
        ]
      }
    }
  ],
  "maritalStatus" : {
    "coding" : [
      {
        "system" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-maritalstatus",
        "code" : "2",
        "display" : "verheiratet"
      },
      {
        "system" : "http://terminology.hl7.org/CodeSystem/v3-MaritalStatus",
        "code" : "M",
        "display" : "married"
      }
    ]
  },
  "generalPractitioner" : [
    {
      "reference" : "Practitioner/HanspeterWengerByBFH"
    }
  ]
}

```
