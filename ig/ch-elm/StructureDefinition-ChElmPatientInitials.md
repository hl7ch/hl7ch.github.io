# CH ELM Patient Initials - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Patient Initials**

## Resource Profile: CH ELM Patient Initials 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/StructureDefinition/ChElmPatientInitials | *Version*:1.12.0 |
| Active as of 2025-10-21 | *Computable Name*:ChElmPatientInitials |
| **Copyright/Legal**: CC0-1.0 | |

 
Patient representation via Initials 

**Usages:**

* This Profile is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-elm|current/StructureDefinition/ChElmPatientInitials)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ChElmPatientInitials.csv), [Excel](StructureDefinition-ChElmPatientInitials.xlsx), [Schematron](StructureDefinition-ChElmPatientInitials.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ChElmPatientInitials",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.eu/fhir/laboratory/StructureDefinition/Patient-eu-lab"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ChElmPatientInitials",
  "version" : "1.12.0",
  "name" : "ChElmPatientInitials",
  "title" : "CH ELM Patient Initials",
  "status" : "active",
  "date" : "2025-10-21T11:52:21+00:00",
  "publisher" : "Federal Office of Public Health FOPH",
  "contact" : [
    {
      "name" : "Federal Office of Public Health FOPH",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html"
        }
      ]
    }
  ],
  "description" : "Patient representation via Initials",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "eCH",
      "uri" : "http://www.ech.ch/",
      "name" : "eCH-Standards"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "loinc",
      "uri" : "http://loinc.org",
      "name" : "LOINC code for the element"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Patient",
  "baseDefinition" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-patient",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Patient",
        "path" : "Patient"
      },
      {
        "id" : "Patient.name",
        "path" : "Patient.name",
        "constraint" : [
          {
            "key" : "name-initials",
            "severity" : "error",
            "human" : "a name with initials",
            "expression" : "given.exists() and given.first().exists() and (''+given.first()).length() = 1 and family.exists() and (''+family).length() = 1",
            "source" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ChElmPatientInitials"
          }
        ]
      },
      {
        "id" : "Patient.telecom",
        "path" : "Patient.telecom",
        "max" : "0"
      },
      {
        "id" : "Patient.telecom:email",
        "path" : "Patient.telecom",
        "sliceName" : "email",
        "max" : "0"
      },
      {
        "id" : "Patient.telecom:phone",
        "path" : "Patient.telecom",
        "sliceName" : "phone",
        "max" : "0"
      },
      {
        "id" : "Patient.telecom:internet",
        "path" : "Patient.telecom",
        "sliceName" : "internet",
        "max" : "0"
      },
      {
        "id" : "Patient.address:home",
        "path" : "Patient.address",
        "sliceName" : "home"
      },
      {
        "id" : "Patient.address:home.line",
        "path" : "Patient.address.line",
        "max" : "0"
      }
    ]
  }
}

```
