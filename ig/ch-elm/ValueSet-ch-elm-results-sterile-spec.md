# CH ELM Results Sterile Spec - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Results Sterile Spec**

## ValueSet: CH ELM Results Sterile Spec 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-sterile-spec | *Version*:1.13.0 |
| Active as of 2025-11-25 | *Computable Name*:ChElmResultsSterileSpec |
| **Copyright/Legal**: CC0-1.0 | |

 
The "CH ELM Results Sterile Spec" material group provides a curated set of codes representing specific materials. Each code within this group is selected to ensure consistency and accuracy for medical coding related to the primary LOINC codes. Clients using the "CH ELM Results Sterile Spec" group should refer to the provided codes to ensure they capture and report material information correctly and consistently. 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

Expansion from tx.fhir.org based on SNOMED CT International edition 01-Feb 2025

This value set contains 26 concepts

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
  "id" : "ch-elm-results-sterile-spec",
  "url" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-sterile-spec",
  "version" : "1.13.0",
  "name" : "ChElmResultsSterileSpec",
  "title" : "CH ELM Results Sterile Spec",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-11-25T09:58:53+00:00",
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
  "description" : "The \"CH ELM Results Sterile Spec\" material group provides a curated set of codes representing specific materials. Each code within this group is selected to ensure consistency and accuracy for medical coding related to the primary LOINC codes. Clients using the \"CH ELM Results Sterile Spec\" group should refer to the provided codes to ensure they capture and report material information correctly and consistently.",
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
  "compose" : {
    "include" : [
      {
        "system" : "http://snomed.info/sct",
        "concept" : [
          {
            "code" : "258415003",
            "display" : "Biopsy specimen (specimen)"
          },
          {
            "code" : "119359002",
            "display" : "Bone marrow specimen (specimen)"
          },
          {
            "code" : "119378002",
            "display" : "Endocardial specimen (specimen)"
          },
          {
            "code" : "122571007",
            "display" : "Pericardial fluid specimen (specimen)"
          },
          {
            "code" : "309066003",
            "display" : "Skin biopsy specimen (specimen)"
          },
          {
            "code" : "119297000",
            "display" : "Blood specimen (specimen)"
          },
          {
            "code" : "122736005",
            "display" : "Tissue specimen from placenta (specimen)"
          },
          {
            "code" : "258589002",
            "display" : "Lymph node specimen (specimen)"
          },
          {
            "code" : "258542004",
            "display" : "Heart valve specimen (specimen)"
          },
          {
            "code" : "258450006",
            "display" : "Cerebrospinal fluid specimen (specimen)"
          },
          {
            "code" : "258454002",
            "display" : "Dialysate specimen (specimen)"
          },
          {
            "code" : "168139001",
            "display" : "Peritoneal fluid specimen (specimen)"
          },
          {
            "code" : "119396006",
            "display" : "Specimen from endometrium (specimen)"
          },
          {
            "code" : "119373006",
            "display" : "Amniotic fluid specimen (specimen)"
          },
          {
            "code" : "119371008",
            "display" : "Specimen from abscess (specimen)"
          },
          {
            "code" : "119398007",
            "display" : "Specimen from brain (specimen)"
          },
          {
            "code" : "430268003",
            "display" : "Specimen from bone (specimen)"
          },
          {
            "code" : "119364003",
            "display" : "Serum specimen (specimen)"
          },
          {
            "code" : "119386002",
            "display" : "Specimen from prostate (specimen)"
          },
          {
            "code" : "122592007",
            "display" : "Acellular blood (serum or plasma) specimen (specimen)"
          },
          {
            "code" : "119361006",
            "display" : "Plasma specimen (specimen)"
          },
          {
            "code" : "119300005",
            "display" : "Specimen from blood product (specimen)"
          },
          {
            "code" : "122556008",
            "display" : "Cord blood specimen (specimen)"
          },
          {
            "code" : "418564007",
            "display" : "Pleural fluid specimen (specimen)"
          },
          {
            "code" : "119332005",
            "display" : "Synovial fluid specimen (specimen)"
          },
          {
            "code" : "258580003",
            "display" : "Whole blood specimen (specimen)"
          }
        ]
      }
    ]
  }
}

```
