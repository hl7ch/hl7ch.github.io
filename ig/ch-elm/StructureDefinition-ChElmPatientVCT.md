# CH ELM Patient VCT - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Patient VCT**

## Resource Profile: CH ELM Patient VCT 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/StructureDefinition/ChElmPatientVCT | *Version*:1.13.1 |
| Active as of 2026-01-21 | *Computable Name*:ChElmPatientVCT |
| **Copyright/Legal**: CC0-1.0 | |

 
Patient representation via a VCT Code 

**Usages:**

* This Profile is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-elm|current/StructureDefinition/ChElmPatientVCT)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ChElmPatientVCT.csv), [Excel](StructureDefinition-ChElmPatientVCT.xlsx), [Schematron](StructureDefinition-ChElmPatientVCT.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ChElmPatientVCT",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.eu/fhir/laboratory/StructureDefinition/Patient-eu-lab"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ChElmPatientVCT",
  "version" : "1.13.1",
  "name" : "ChElmPatientVCT",
  "title" : "CH ELM Patient VCT",
  "status" : "active",
  "date" : "2026-01-21T11:21:00+00:00",
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
  "description" : "Patient representation via a VCT Code",
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
        "short" : "CH ELM Patient VCT"
      },
      {
        "id" : "Patient.identifier:AHVN13",
        "path" : "Patient.identifier",
        "sliceName" : "AHVN13",
        "max" : "0"
      },
      {
        "id" : "Patient.identifier:IDN",
        "path" : "Patient.identifier",
        "sliceName" : "IDN",
        "max" : "0"
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
        "min" : 1
      },
      {
        "id" : "Patient.name.extension:hivcode",
        "path" : "Patient.name.extension",
        "sliceName" : "hivcode",
        "max" : "0"
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
