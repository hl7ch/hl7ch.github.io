# FOPH Dossier Number - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **FOPH Dossier Number**

## Data Type Profile: FOPH Dossier Number 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/StructureDefinition/ch-foph-dossier-number | *Version*:1.0.0 |
| Active as of 2025-12-11 | *Computable Name*:FOPHIdentifier |
| **Copyright/Legal**: CC0-1.0 | |

 
Identifier holding the Dossier number of FOPH 

**Usages:**

* Use this DataType Profile: [CH - EPL Reimbursement SL](StructureDefinition-reimbursementSL.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epl|current/StructureDefinition/ch-foph-dossier-number)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-foph-dossier-number.csv), [Excel](StructureDefinition-ch-foph-dossier-number.xlsx), [Schematron](StructureDefinition-ch-foph-dossier-number.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-foph-dossier-number",
  "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-foph-dossier-number",
  "version" : "1.0.0",
  "name" : "FOPHIdentifier",
  "title" : "FOPH Dossier Number",
  "status" : "active",
  "date" : "2025-12-11T12:35:50+00:00",
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
  "description" : "Identifier holding the Dossier number of FOPH",
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
  "fhirVersion" : "5.0.0",
  "mapping" : [
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 V2 Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "servd",
      "uri" : "http://www.omg.org/spec/ServD/1.0/",
      "name" : "ServD"
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "type" : "Identifier",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Identifier",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Identifier",
        "path" : "Identifier"
      },
      {
        "id" : "Identifier.system",
        "path" : "Identifier.system",
        "short" : "FOPHDossierNumber",
        "min" : 1,
        "fixedUri" : "urn:oid:2.16.756.1"
      },
      {
        "id" : "Identifier.value",
        "path" : "Identifier.value",
        "short" : "FOPHDossierNumber",
        "min" : 1
      }
    ]
  }
}

```
