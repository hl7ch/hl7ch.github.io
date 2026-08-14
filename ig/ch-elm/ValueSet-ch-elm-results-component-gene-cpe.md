# CH ELM Results Gene Cpe - CH ELM (R4) v1.15.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Results Gene Cpe**

## ValueSet: CH ELM Results Gene Cpe 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-component-gene-cpe | *Version*:1.15.1 |
| Active as of 2026-08-14 | *Computable Name*:ChElmResultsComponentGeneCpe |
| **Copyright/Legal**: CC0-1.0 | |

 
The "CH ELM Results Gene Cpe" group provides a curated set of codes representing specific genotypes. Each code within this group is selected to ensure consistency and accuracy for medical coding related to the primary LOINC codes. Clients using the "CH ELM Results Gene Cpe" group should refer to the provided codes to ensure they capture and report antibiotic information correctly and consistently 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ch-elm-results-component-gene-cpe",
  "url" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-component-gene-cpe",
  "version" : "1.15.1",
  "name" : "ChElmResultsComponentGeneCpe",
  "title" : "CH ELM Results Gene Cpe",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-08-14T07:34:39+00:00",
  "publisher" : "Federal Office of Public Health FOPH",
  "contact" : [{
    "name" : "Federal Office of Public Health FOPH",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html"
    }]
  }],
  "description" : "The \"CH ELM Results Gene Cpe\" group provides a curated set of codes representing specific genotypes. Each code within this group is selected to ensure consistency and accuracy for medical coding related to the primary LOINC codes. Clients using the \"CH ELM Results Gene Cpe\" group should refer to the provided codes to ensure they capture and report antibiotic information correctly and consistently",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [{
      "system" : "http://loinc.org",
      "concept" : [{
        "code" : "85829-0",
        "display" : "Carbapenem resistance blaSPM gene [Presence] by Molecular method"
      },
      {
        "code" : "85823-3",
        "display" : "Carbapenem resistance blaGES gene [Presence] by Molecular method"
      },
      {
        "code" : "85826-6",
        "display" : "Carbapenem resistance blaOXA-24-like gene [Presence] by Molecular method"
      },
      {
        "code" : "105019-4",
        "display" : "Bacterial Carbapenem resistance blaNDM-1 gene [Presence] by Molecular method"
      },
      {
        "code" : "105028-5",
        "display" : "Bacterial Carbapenem resistance blaOXA-232 gene [Presence] by Molecular method"
      },
      {
        "code" : "73982-1",
        "display" : "Carbapenem resistance blaNDM gene [Presence] by Molecular method"
      },
      {
        "code" : "105034-3",
        "display" : "Bacterial Carbapenem resistance blaVIM-1 gene [Presence] by Molecular method"
      },
      {
        "code" : "LP113695-3",
        "display" : "Carbapenem resistance genes"
      },
      {
        "code" : "105021-0",
        "display" : "Bacterial Carbapenem resistance blaNDM-4 gene [Presence] by Molecular method"
      },
      {
        "code" : "105029-3",
        "display" : "Bacterial Carbapenem resistance blaOXA24/40 gene [Presence] by Molecular method"
      },
      {
        "code" : "85827-4",
        "display" : "Carbapenem resistance bla OXA-48-like gene [Presence] by Molecular method"
      },
      {
        "code" : "105022-8",
        "display" : "Bacterial Carbapenem resistance blaNDM-5 gene [Presence] by Molecular method"
      },
      {
        "code" : "105020-2",
        "display" : "Bacterial Carbapenem resistance blaNDM-19 gene [Presence] by Molecular method"
      },
      {
        "code" : "101123-8",
        "display" : "Bacterial carbapenem resistance blaIMI gene [Presence] by Molecular method"
      },
      {
        "code" : "85825-8",
        "display" : "Carbapenem resistance blaOXA-23-like gene [Presence] by Molecular method"
      },
      {
        "code" : "105018-6",
        "display" : "Bacterial Carbapenem resistance blaKPC-3 gene [Presence] by Molecular method"
      },
      {
        "code" : "85501-5",
        "display" : "Carbapenem resistance blaVIM gene [Presence] by Molecular method"
      },
      {
        "code" : "105030-1",
        "display" : "Bacterial Carbapenem resistance blaOXA-244 gene [Presence] by Molecular method"
      },
      {
        "code" : "105015-2",
        "display" : "Bacterial Carbapenem resistance blaGIM-1 gene [Presence] by Molecular method"
      },
      {
        "code" : "85503-1",
        "display" : "Carbapenem resistance blaOXA-48 gene [Presence] by Molecular method"
      },
      {
        "code" : "105014-5",
        "display" : "Bacterial Carbapenem resistance blaGES-5 gene [Presence] by Molecular method"
      },
      {
        "code" : "105031-9",
        "display" : "Bacterial Carbapenem resistance blaOXA-58 gene [Presence] by Molecular method"
      },
      {
        "code" : "105035-0",
        "display" : "Bacterial Carbapenem resistance blaVIM-2 gene [Presence] by Molecular method"
      },
      {
        "code" : "105036-8",
        "display" : "Bacterial Carbapenem resistance blaVIM-4 gene [Presence] by Molecular method"
      },
      {
        "code" : "85498-4",
        "display" : "Carbapenem resistance blaIMP gene [Presence] by Molecular method"
      },
      {
        "code" : "105023-6",
        "display" : "Bacterial Carbapenem resistance blaNDM-7 gene [Presence] by Molecular method"
      },
      {
        "code" : "85828-2",
        "display" : "Carbapenem resistance blaOXA-58-like gene [Presence] by Molecular method"
      },
      {
        "code" : "105027-7",
        "display" : "Bacterial Carbapenem resistance blaOXA-23 gene [Presence] by Molecular method"
      },
      {
        "code" : "105032-7",
        "display" : "Bacterial Carbapenem resistance blaOXA-72 gene [Presence] by Molecular method"
      },
      {
        "code" : "105025-1",
        "display" : "Bacterial Carbapenem resistance blaOXA 181 gene [Presence] by Molecular method"
      },
      {
        "code" : "49617-4",
        "display" : "Carbapenem resistance blaKPC gene [Presence] by Molecular method"
      },
      {
        "code" : "105024-4",
        "display" : "Bacterial Carbapenem resistance blaNDM-9 gene [Presence] by Molecular method"
      },
      {
        "code" : "85833-2",
        "display" : "Carbapenem resistance blaGIM gene [Presence] by Molecular method"
      },
      {
        "code" : "105026-9",
        "display" : "Bacterial Carbapenem resistance blaOXA-162 gene [Presence] by Molecular method"
      },
      {
        "code" : "105017-8",
        "display" : "Bacterial Carbapenem resistance blaKPC-2 gene [Presence] by Molecular method"
      }]
    }]
  }
}

```
