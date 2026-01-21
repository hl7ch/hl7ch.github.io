# CH ELM Results Complete Spec - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Results Complete Spec**

## ValueSet: CH ELM Results Complete Spec 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-complete-spec | *Version*:1.13.1 |
| Active as of 2026-01-21 | *Computable Name*:ChElmResultsCompleteSpec |
| **Copyright/Legal**: CC0-1.0 | |

 
The "CH ELM Results Complete Spec" material group provides a curated set of codes representing specific materials. Each code within this group is selected to ensure consistency and accuracy for medical coding related to the primary LOINC codes. Clients using the "CH ELM Results Complete Spec" group should refer to the provided codes to ensure they capture and report material information correctly and consistently. 

 **References** 

* [CH ELM Specimen: Laboratory](StructureDefinition-ch-elm-specimen.md)

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
  "id" : "ch-elm-results-complete-spec",
  "url" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-complete-spec",
  "version" : "1.13.1",
  "name" : "ChElmResultsCompleteSpec",
  "title" : "CH ELM Results Complete Spec",
  "status" : "active",
  "experimental" : false,
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
  "description" : "The \"CH ELM Results Complete Spec\" material group provides a curated set of codes representing specific materials. Each code within this group is selected to ensure consistency and accuracy for medical coding related to the primary LOINC codes. Clients using the \"CH ELM Results Complete Spec\" group should refer to the provided codes to ensure they capture and report material information correctly and consistently.",
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
            "code" : "122592007",
            "display" : "Acellular blood (serum or plasma) specimen (specimen)"
          },
          {
            "code" : "119396006",
            "display" : "Specimen from endometrium (specimen)"
          },
          {
            "code" : "119341000",
            "display" : "Bile specimen (specimen)"
          },
          {
            "code" : "397129002",
            "display" : "Specimen from vulva (specimen)"
          },
          {
            "code" : "258603007",
            "display" : "Specimen from respiratory system (specimen)"
          },
          {
            "code" : "309051001",
            "display" : "Body fluid specimen (specimen)"
          },
          {
            "code" : "119340004",
            "display" : "Meconium specimen (specimen)"
          },
          {
            "code" : "418932006",
            "display" : "Oral Swab (specimen)"
          },
          {
            "code" : "119401005",
            "display" : "Specimen from conjunctiva (specimen)"
          },
          {
            "code" : "127479004",
            "display" : "Specimen from uterus (specimen)"
          },
          {
            "code" : "119378002",
            "display" : "Endocardial specimen (specimen)"
          },
          {
            "code" : "119347001",
            "display" : "Seminal fluid specimen (specimen)"
          },
          {
            "code" : "119339001",
            "display" : "Stool specimen (specimen)"
          },
          {
            "code" : "258580003",
            "display" : "Whole blood specimen (specimen)"
          },
          {
            "code" : "119389009",
            "display" : "Specimen from throat (specimen)"
          },
          {
            "code" : "258527002",
            "display" : "Anal swab (specimen)"
          },
          {
            "code" : "119386002",
            "display" : "Specimen from prostate (specimen)"
          },
          {
            "code" : "258454002",
            "display" : "Dialysate specimen (specimen)"
          },
          {
            "code" : "430268003",
            "display" : "Specimen from bone (specimen)"
          },
          {
            "code" : "119395005",
            "display" : "Specimen from uterine cervix (specimen)"
          },
          {
            "code" : "309066003",
            "display" : "Skin biopsy specimen (specimen)"
          },
          {
            "code" : "258542004",
            "display" : "Heart valve specimen (specimen)"
          },
          {
            "code" : "122575003",
            "display" : "Urine specimen (specimen)"
          },
          {
            "code" : "258465007",
            "display" : "Lacrimal fluid specimen (specimen)"
          },
          {
            "code" : "119359002",
            "display" : "Bone marrow specimen (specimen)"
          },
          {
            "code" : "257261003",
            "display" : "Swab (specimen)"
          },
          {
            "code" : "119361006",
            "display" : "Plasma specimen (specimen)"
          },
          {
            "code" : "119368000",
            "display" : "Specimen from cyst (specimen)"
          },
          {
            "code" : "258500001",
            "display" : "Nasopharyngeal swab (specimen)"
          },
          {
            "code" : "168139001",
            "display" : "Peritoneal fluid specimen (specimen)"
          },
          {
            "code" : "119300005",
            "display" : "Specimen from blood product (specimen)"
          },
          {
            "code" : "258604001",
            "display" : "Upper respiratory specimen"
          },
          {
            "code" : "119393003",
            "display" : "Specimen from urethra (specimen)"
          },
          {
            "code" : "119364003",
            "display" : "Serum specimen (specimen)"
          },
          {
            "code" : "418564007",
            "display" : "Pleural fluid specimen (specimen)"
          },
          {
            "code" : "119303007",
            "display" : "Microbial isolate specimen (specimen)"
          },
          {
            "code" : "119369008",
            "display" : "Specimen from ulcer (specimen)"
          },
          {
            "code" : "119391001",
            "display" : "Specimen from bronchus (specimen)"
          },
          {
            "code" : "119323008",
            "display" : "Pus specimen (specimen)"
          },
          {
            "code" : "258606004",
            "display" : "Lower respiratory tract specimen"
          },
          {
            "code" : "399492000",
            "display" : "Tissue specimen from lung (specimen)"
          },
          {
            "code" : "119332005",
            "display" : "Synovial fluid specimen (specimen)"
          },
          {
            "code" : "258589002",
            "display" : "Lymph node specimen (specimen)"
          },
          {
            "code" : "3040001000004107",
            "display" : "Paraffin embedded tissue block specimen (specimen)"
          },
          {
            "code" : "119295008",
            "display" : "Specimen obtained by aspiration (specimen)"
          },
          {
            "code" : "447154002",
            "display" : "Specimen from nose (specimen)"
          },
          {
            "code" : "119399004",
            "display" : "Specimen from eye (specimen)"
          },
          {
            "code" : "309502007",
            "display" : "Fetus specimen (specimen)"
          },
          {
            "code" : "119297000",
            "display" : "Blood specimen (specimen)"
          },
          {
            "code" : "119394009",
            "display" : "Specimen from vagina (specimen)"
          },
          {
            "code" : "122736005",
            "display" : "Tissue specimen from placenta (specimen)"
          },
          {
            "code" : "119344008",
            "display" : "Specimen from genital system (specimen)"
          },
          {
            "code" : "447955000",
            "display" : "Specimen from rectum (specimen)"
          },
          {
            "code" : "119376003",
            "display" : "Tissue specimen (specimen)"
          },
          {
            "code" : "119343002",
            "display" : "Pancreatic fluid specimen (specimen)"
          },
          {
            "code" : "472904006",
            "display" : "Swab from abdomen (specimen)"
          },
          {
            "code" : "122643008",
            "display" : "Tissue specimen from large intestine (specimen)"
          },
          {
            "code" : "119324002",
            "display" : "Specimen of unknown material (specimen)"
          },
          {
            "code" : "122571007",
            "display" : "Pericardial fluid specimen (specimen)"
          },
          {
            "code" : "309165001",
            "display" : "Ear specimen (specimen)"
          },
          {
            "code" : "258459007",
            "display" : "Gastric fluid specimen (specimen)"
          },
          {
            "code" : "608969007",
            "display" : "Specimen from skin (specimen)"
          },
          {
            "code" : "122556008",
            "display" : "Cord blood specimen (specimen)"
          },
          {
            "code" : "258450006",
            "display" : "Cerebrospinal fluid specimen (specimen)"
          },
          {
            "code" : "258607008",
            "display" : "Bronchoalveolar lavage fluid specimen (specimen)"
          },
          {
            "code" : "258415003",
            "display" : "Biopsy specimen (specimen)"
          },
          {
            "code" : "445447003",
            "display" : "Specimen from trachea obtained by aspiration (specimen)"
          },
          {
            "code" : "119398007",
            "display" : "Specimen from brain (specimen)"
          },
          {
            "code" : "119342007",
            "display" : "Saliva specimen (specimen)"
          },
          {
            "code" : "119365002",
            "display" : "Specimen from wound (specimen)"
          },
          {
            "code" : "119334006",
            "display" : "Sputum specimen (specimen)"
          },
          {
            "code" : "119373006",
            "display" : "Amniotic fluid specimen (specimen)"
          },
          {
            "code" : "119371008",
            "display" : "Specimen from abscess (specimen)"
          }
        ]
      }
    ]
  }
}

```
