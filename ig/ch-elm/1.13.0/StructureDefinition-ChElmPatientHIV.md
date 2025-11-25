# CH ELM Patient HIV - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Patient HIV**

## Resource Profile: CH ELM Patient HIV 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/StructureDefinition/ChElmPatientHIV | *Version*:1.13.0 |
| Active as of 2025-11-25 | *Computable Name*:ChElmPatientHIV |
| **Copyright/Legal**: CC0-1.0 | |

 
Patient representation for HIV 

**Usages:**

* Refer to this Profile: [CH ELM Observation Results for HIV Recency Testing (strict)](StructureDefinition-ch-elm-observation-results-hiv-recency-strict.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-elm|current/StructureDefinition/ChElmPatientHIV)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ChElmPatientHIV.csv), [Excel](StructureDefinition-ChElmPatientHIV.xlsx), [Schematron](StructureDefinition-ChElmPatientHIV.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ChElmPatientHIV",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.eu/fhir/laboratory/StructureDefinition/Patient-eu-lab"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ChElmPatientHIV",
  "version" : "1.13.0",
  "name" : "ChElmPatientHIV",
  "title" : "CH ELM Patient HIV",
  "status" : "active",
  "date" : "2025-11-25T09:47:06+00:00",
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
  "description" : "Patient representation for HIV",
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
        "path" : "Patient",
        "short" : "CH ELM Patient HIV"
      },
      {
        "id" : "Patient.name.extension",
        "path" : "Patient.name.extension",
        "min" : 1
      },
      {
        "id" : "Patient.name.extension:vctcode",
        "path" : "Patient.name.extension",
        "sliceName" : "vctcode",
        "max" : "0"
      },
      {
        "id" : "Patient.name.extension:hivcode",
        "path" : "Patient.name.extension",
        "sliceName" : "hivcode",
        "min" : 1
      },
      {
        "id" : "Patient.name.family.extension",
        "path" : "Patient.name.family.extension",
        "min" : 1
      },
      {
        "id" : "Patient.name.family.extension:dataabsentreason",
        "path" : "Patient.name.family.extension",
        "sliceName" : "dataabsentreason",
        "min" : 1
      },
      {
        "id" : "Patient.name.family.extension:dataabsentreason.value[x]",
        "path" : "Patient.name.family.extension.value[x]",
        "patternCode" : "masked"
      },
      {
        "id" : "Patient.name.given.extension",
        "path" : "Patient.name.given.extension",
        "min" : 1
      },
      {
        "id" : "Patient.name.given.extension:dataabsentreason",
        "path" : "Patient.name.given.extension",
        "sliceName" : "dataabsentreason",
        "min" : 1
      },
      {
        "id" : "Patient.name.given.extension:dataabsentreason.value[x]",
        "path" : "Patient.name.given.extension.value[x]",
        "patternCode" : "masked"
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
