# 1 Thomas Müller - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1 Thomas Müller**

## Example Patient: 1 Thomas Müller



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "1-ThomasMueller",
  "extension" : [{
    "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient-ech-11-placeoforigin",
    "valueAddress" : {
      "city" : "Musterdorf",
      "state" : "ZH"
    }
  }],
  "identifier" : [{
    "system" : "urn:oid:2.16.756.5.32",
    "value" : "7562295883070"
  },
  {
    "type" : {
      "coding" : [{
        "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
        "code" : "MR"
      }]
    },
    "system" : "http://example.com",
    "value" : "762354"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Müller",
    "_family" : {
      "extension" : [{
        "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-11-name",
        "valueCode" : "officialName"
      }]
    },
    "given" : ["Thomas"],
    "_given" : [{
      "extension" : [{
        "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-11-firstname",
        "valueCode" : "officialFirstName"
      }]
    }]
  }],
  "gender" : "male",
  "birthDate" : "1961-10-01",
  "address" : [{
    "use" : "home",
    "line" : ["Bahnhofstrasse"],
    "_line" : [{
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-houseNumber",
        "valueString" : "1"
      }]
    }],
    "city" : "Zürich",
    "postalCode" : "8003",
    "country" : "Schweiz",
    "_country" : {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-SC-coding",
        "valueCoding" : {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      }]
    }
  }],
  "contact" : [{
    "extension" : [{
      "url" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-ext-personrole",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "code" : "74964007",
          "display" : "Other (qualifier value)"
        }],
        "text" : "Ehefrau"
      }
    }],
    "relationship" : [{
      "coding" : [{
        "system" : "http://terminology.hl7.org/CodeSystem/v3-RoleCode",
        "code" : "thirdParty"
      }]
    }],
    "name" : {
      "family" : "Müller",
      "given" : ["Erika"]
    }
  }]
}

```
