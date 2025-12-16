# CH LAB-Report Additive Substance - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH LAB-Report Additive Substance**

## Resource Profile: CH LAB-Report Additive Substance 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-specimen-additive-substance | *Version*:2.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChLabSpecimenAdditiveSubstance |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile defines how to represent Specimen Additive Substances in HL7 FHIR for the purpose of this guide. 

**Usages:**

* Refer to this Profile: [CH LAB-Report Specimen](StructureDefinition-ch-lab-specimen.md)
* Examples for this Profile: [Substance/EDTA](Substance-EDTA.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-lab-report|current/StructureDefinition/ch-lab-specimen-additive-substance)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-lab-specimen-additive-substance.csv), [Excel](StructureDefinition-ch-lab-specimen-additive-substance.xlsx), [Schematron](StructureDefinition-ch-lab-specimen-additive-substance.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-lab-specimen-additive-substance",
  "url" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-specimen-additive-substance",
  "version" : "2.0.0",
  "name" : "ChLabSpecimenAdditiveSubstance",
  "title" : "CH LAB-Report Additive Substance",
  "status" : "active",
  "date" : "2025-12-16T10:27:41+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch"
        }
      ]
    },
    {
      "name" : "Marcel Hanselmann",
      "telecom" : [
        {
          "system" : "email",
          "value" : "laborprojektgruppe@gmail.com",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "This profile defines how to represent Specimen Additive Substances in HL7 FHIR for the purpose of this guide.",
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
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "orim",
      "uri" : "http://hl7.org/orim",
      "name" : "Ontological RIM Mapping"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Substance",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Substance",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Substance",
        "path" : "Substance"
      },
      {
        "id" : "Substance.code",
        "path" : "Substance.code",
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://hl7.eu/fhir/laboratory/ValueSet/lab-specimenAdditive-eu-lab"
        }
      }
    ]
  }
}

```
