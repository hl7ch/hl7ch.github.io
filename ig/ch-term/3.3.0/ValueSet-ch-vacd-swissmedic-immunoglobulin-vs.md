# CH VACD Swissmedic Authorized Immunoglobulin Codes - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH VACD Swissmedic Authorized Immunoglobulin Codes**

## ValueSet: CH VACD Swissmedic Authorized Immunoglobulin Codes 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-swissmedic-immunoglobulin-vs | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:SwissImunoglobulin |
| **Copyright/Legal**: CC0-1.0 | |

 
The list of ATC J06B – Immunoglobulin codes Swissmedic has given an autorization number. 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/ch-vacd-swissmedic-immunoglobulin-vs) via the XIG (Cross-IG) index for FHIR specifications. 

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
  "id" : "ch-vacd-swissmedic-immunoglobulin-vs",
  "url" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-swissmedic-immunoglobulin-vs",
  "version" : "3.3.0",
  "name" : "SwissImunoglobulin",
  "title" : "CH VACD Swissmedic Authorized Immunoglobulin Codes",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-15T10:36:18+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/"
        }
      ]
    },
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "The list of ATC J06B – Immunoglobulin codes Swissmedic has given an autorization number.",
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
        "system" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-swissmedic-immunoglobulin-cs",
        "concept" : [
          {
            "code" : "00687-01",
            "display" : "Berirab 2 ml, Injektionslösung",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Berirab 2 ml"
              },
              {
                "language" : "fr-CH",
                "value" : "Berirab 2 ml"
              },
              {
                "language" : "it-CH",
                "value" : "Berirab 2 ml"
              },
              {
                "language" : "rm-CH",
                "value" : "Berirab 2 ml"
              },
              {
                "language" : "en-US",
                "value" : "Berirab 2 ml"
              }
            ]
          },
          {
            "code" : "00687-02",
            "display" : "Berirab 5 ml, Injektionslösung",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Berirab 5 ml"
              },
              {
                "language" : "fr-CH",
                "value" : "Berirab 5 ml"
              },
              {
                "language" : "it-CH",
                "value" : "Berirab 5 ml"
              },
              {
                "language" : "rm-CH",
                "value" : "Berirab 5 ml"
              },
              {
                "language" : "en-US",
                "value" : "Berirab 5 ml"
              }
            ]
          },
          {
            "code" : "69039-02",
            "display" : "Beyfortus 100 mg/1 ml, solution injectable en seringue préremplie",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Beyfortus 100 mg/1 ml"
              },
              {
                "language" : "fr-CH",
                "value" : "Beyfortus 100 mg/1 ml"
              },
              {
                "language" : "it-CH",
                "value" : "Beyfortus 100 mg/1 ml"
              },
              {
                "language" : "rm-CH",
                "value" : "Beyfortus 100 mg/1 ml"
              },
              {
                "language" : "en-US",
                "value" : "Beyfortus 100 mg/1 ml"
              }
            ]
          },
          {
            "code" : "69039-01",
            "display" : "Beyfortus 50 mg/0.5 ml, solution injectable en seringue préremplie",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Beyfortus 50 mg/0.5 ml"
              },
              {
                "language" : "fr-CH",
                "value" : "Beyfortus 50 mg/0.5 ml"
              },
              {
                "language" : "it-CH",
                "value" : "Beyfortus 50 mg/0.5 ml"
              },
              {
                "language" : "rm-CH",
                "value" : "Beyfortus 50 mg/0.5 ml"
              },
              {
                "language" : "en-US",
                "value" : "Beyfortus 50 mg/0.5 ml"
              }
            ]
          },
          {
            "code" : "65745-01",
            "display" : "Antivipmyn",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Antivipmyn"
              },
              {
                "language" : "fr-CH",
                "value" : "Antivipmyn"
              },
              {
                "language" : "it-CH",
                "value" : "Antivipmyn"
              },
              {
                "language" : "rm-CH",
                "value" : "Antivipmyn"
              },
              {
                "language" : "en-US",
                "value" : "Antivipmyn"
              }
            ]
          },
          {
            "code" : "68222-01",
            "display" : "Cutaquig 165 mg/ml, Injektionslösung",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Cutaquig 165 mg/ml"
              },
              {
                "language" : "fr-CH",
                "value" : "Cutaquig 165 mg/ml"
              },
              {
                "language" : "it-CH",
                "value" : "Cutaquig 165 mg/ml"
              },
              {
                "language" : "rm-CH",
                "value" : "Cutaquig 165 mg/ml"
              },
              {
                "language" : "en-US",
                "value" : "Cutaquig 165 mg/ml"
              }
            ]
          },
          {
            "code" : "65992-01",
            "display" : "Cuvitru 200 mg/ml, Injektionslösung",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Cuvitru 200 mg/ml"
              },
              {
                "language" : "fr-CH",
                "value" : "Cuvitru 200 mg/ml"
              },
              {
                "language" : "it-CH",
                "value" : "Cuvitru 200 mg/ml"
              },
              {
                "language" : "rm-CH",
                "value" : "Cuvitru 200 mg/ml"
              },
              {
                "language" : "en-US",
                "value" : "Cuvitru 200 mg/ml"
              }
            ]
          },
          {
            "code" : "00506-02",
            "display" : "Cytotect CP Biotest, Infusionslösung",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Cytotect CP Biotest"
              },
              {
                "language" : "fr-CH",
                "value" : "Cytotect CP Biotest"
              },
              {
                "language" : "it-CH",
                "value" : "Cytotect CP Biotest"
              },
              {
                "language" : "rm-CH",
                "value" : "Cytotect CP Biotest"
              },
              {
                "language" : "en-US",
                "value" : "Cytotect CP Biotest"
              }
            ]
          },
          {
            "code" : "00701-02",
            "display" : "Gammanorm, Injektionslösung",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Gammanorm"
              },
              {
                "language" : "fr-CH",
                "value" : "Gammanorm"
              },
              {
                "language" : "it-CH",
                "value" : "Gammanorm"
              },
              {
                "language" : "rm-CH",
                "value" : "Gammanorm"
              },
              {
                "language" : "en-US",
                "value" : "Gammanorm"
              }
            ]
          },
          {
            "code" : "00668-01",
            "display" : "Gamunex 10%, solution pour injection intraveineuse",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Gamunex 10%"
              },
              {
                "language" : "fr-CH",
                "value" : "Gamunex 10%"
              },
              {
                "language" : "it-CH",
                "value" : "Gamunex 10%"
              },
              {
                "language" : "rm-CH",
                "value" : "Gamunex 10%"
              },
              {
                "language" : "en-US",
                "value" : "Gamunex 10%"
              }
            ]
          },
          {
            "code" : "00488-02",
            "display" : "Hepatect CP, Infusionslösung",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Hepatect CP"
              },
              {
                "language" : "fr-CH",
                "value" : "Hepatect CP"
              },
              {
                "language" : "it-CH",
                "value" : "Hepatect CP"
              },
              {
                "language" : "rm-CH",
                "value" : "Hepatect CP"
              },
              {
                "language" : "en-US",
                "value" : "Hepatect CP"
              }
            ]
          },
          {
            "code" : "00674-01",
            "display" : "Hepatitis-B-Immunglobulin Behring, Injektionslösung",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Hepatitis-B-Immunglobulin Behring"
              },
              {
                "language" : "fr-CH",
                "value" : "Hepatitis-B-Immunglobulin Behring"
              },
              {
                "language" : "it-CH",
                "value" : "Hepatitis-B-Immunglobulin Behring"
              },
              {
                "language" : "rm-CH",
                "value" : "Hepatitis-B-Immunglobulin Behring"
              },
              {
                "language" : "en-US",
                "value" : "Hepatitis-B-Immunglobulin Behring"
              }
            ]
          },
          {
            "code" : "66410-01",
            "display" : "Hizentra 200mg/ml, Injektionslösung zur s.c. Anwendung, Fertigspritze",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Hizentra 200mg/ml"
              },
              {
                "language" : "fr-CH",
                "value" : "Hizentra 200mg/ml"
              },
              {
                "language" : "it-CH",
                "value" : "Hizentra 200mg/ml"
              },
              {
                "language" : "rm-CH",
                "value" : "Hizentra 200mg/ml"
              },
              {
                "language" : "en-US",
                "value" : "Hizentra 200mg/ml"
              }
            ]
          },
          {
            "code" : "61547-01",
            "display" : "Hizentra, Injektionslösung zur s.c. Anwendung",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Hizentra"
              },
              {
                "language" : "fr-CH",
                "value" : "Hizentra"
              },
              {
                "language" : "it-CH",
                "value" : "Hizentra"
              },
              {
                "language" : "rm-CH",
                "value" : "Hizentra"
              },
              {
                "language" : "en-US",
                "value" : "Hizentra"
              }
            ]
          },
          {
            "code" : "66684-01",
            "display" : "HyQvia 100 mg/ml, Infusionslösung zur subkutanen Anwendung",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "HyQvia 100 mg/ml"
              },
              {
                "language" : "fr-CH",
                "value" : "HyQvia 100 mg/ml"
              },
              {
                "language" : "it-CH",
                "value" : "HyQvia 100 mg/ml"
              },
              {
                "language" : "rm-CH",
                "value" : "HyQvia 100 mg/ml"
              },
              {
                "language" : "en-US",
                "value" : "HyQvia 100 mg/ml"
              }
            ]
          },
          {
            "code" : "58157-01",
            "display" : "Ig Vena Kedrion 50 g/I, solution pour infusion",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ig Vena Kedrion 50 g/I"
              },
              {
                "language" : "fr-CH",
                "value" : "Ig Vena Kedrion 50 g/I"
              },
              {
                "language" : "it-CH",
                "value" : "Ig Vena Kedrion 50 g/I"
              },
              {
                "language" : "rm-CH",
                "value" : "Ig Vena Kedrion 50 g/I"
              },
              {
                "language" : "en-US",
                "value" : "Ig Vena Kedrion 50 g/I"
              }
            ]
          },
          {
            "code" : "62913-01",
            "display" : "Intratect 10%, Infusionslösung",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Intratect 10%"
              },
              {
                "language" : "fr-CH",
                "value" : "Intratect 10%"
              },
              {
                "language" : "it-CH",
                "value" : "Intratect 10%"
              },
              {
                "language" : "rm-CH",
                "value" : "Intratect 10%"
              },
              {
                "language" : "en-US",
                "value" : "Intratect 10%"
              }
            ]
          },
          {
            "code" : "57676-01",
            "display" : "Intratect 5%, Infusionslösung",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Intratect 5%"
              },
              {
                "language" : "fr-CH",
                "value" : "Intratect 5%"
              },
              {
                "language" : "it-CH",
                "value" : "Intratect 5%"
              },
              {
                "language" : "rm-CH",
                "value" : "Intratect 5%"
              },
              {
                "language" : "en-US",
                "value" : "Intratect 5%"
              }
            ]
          },
          {
            "code" : "66332-03",
            "display" : "Iqymune 10g/100ml, Infusionslösung",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Iqymune 10g/100ml"
              },
              {
                "language" : "fr-CH",
                "value" : "Iqymune 10g/100ml"
              },
              {
                "language" : "it-CH",
                "value" : "Iqymune 10g/100ml"
              },
              {
                "language" : "rm-CH",
                "value" : "Iqymune 10g/100ml"
              },
              {
                "language" : "en-US",
                "value" : "Iqymune 10g/100ml"
              }
            ]
          },
          {
            "code" : "66332-04",
            "display" : "Iqymune 20g/200ml, Infusionslösung",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Iqymune 20g/200ml"
              },
              {
                "language" : "fr-CH",
                "value" : "Iqymune 20g/200ml"
              },
              {
                "language" : "it-CH",
                "value" : "Iqymune 20g/200ml"
              },
              {
                "language" : "rm-CH",
                "value" : "Iqymune 20g/200ml"
              },
              {
                "language" : "en-US",
                "value" : "Iqymune 20g/200ml"
              }
            ]
          },
          {
            "code" : "66332-01",
            "display" : "Iqymune 2g/20ml, Infusionslösung",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Iqymune 2g/20ml"
              },
              {
                "language" : "fr-CH",
                "value" : "Iqymune 2g/20ml"
              },
              {
                "language" : "it-CH",
                "value" : "Iqymune 2g/20ml"
              },
              {
                "language" : "rm-CH",
                "value" : "Iqymune 2g/20ml"
              },
              {
                "language" : "en-US",
                "value" : "Iqymune 2g/20ml"
              }
            ]
          },
          {
            "code" : "66332-02",
            "display" : "Iqymune 5g/50ml, Infusionslösung",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Iqymune 5g/50ml"
              },
              {
                "language" : "fr-CH",
                "value" : "Iqymune 5g/50ml"
              },
              {
                "language" : "it-CH",
                "value" : "Iqymune 5g/50ml"
              },
              {
                "language" : "rm-CH",
                "value" : "Iqymune 5g/50ml"
              },
              {
                "language" : "en-US",
                "value" : "Iqymune 5g/50ml"
              }
            ]
          },
          {
            "code" : "60323-01",
            "display" : "Octagam 10 %, Lösung zur intravenösen Anwendung",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Octagam 10 %"
              },
              {
                "language" : "fr-CH",
                "value" : "Octagam 10 %"
              },
              {
                "language" : "it-CH",
                "value" : "Octagam 10 %"
              },
              {
                "language" : "rm-CH",
                "value" : "Octagam 10 %"
              },
              {
                "language" : "en-US",
                "value" : "Octagam 10 %"
              }
            ]
          },
          {
            "code" : "57469-01",
            "display" : "Kiovig, Infusionslösung",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Kiovig"
              },
              {
                "language" : "fr-CH",
                "value" : "Kiovig"
              },
              {
                "language" : "it-CH",
                "value" : "Kiovig"
              },
              {
                "language" : "rm-CH",
                "value" : "Kiovig"
              },
              {
                "language" : "en-US",
                "value" : "Kiovig"
              }
            ]
          },
          {
            "code" : "58314-01",
            "display" : "Privigen, Infusionslösung",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Privigen"
              },
              {
                "language" : "fr-CH",
                "value" : "Privigen"
              },
              {
                "language" : "it-CH",
                "value" : "Privigen"
              },
              {
                "language" : "rm-CH",
                "value" : "Privigen"
              },
              {
                "language" : "en-US",
                "value" : "Privigen"
              }
            ]
          },
          {
            "code" : "53609-02",
            "display" : "Rhophylac 300, Injektionslösung",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Rhophylac 300"
              },
              {
                "language" : "fr-CH",
                "value" : "Rhophylac 300"
              },
              {
                "language" : "it-CH",
                "value" : "Rhophylac 300"
              },
              {
                "language" : "rm-CH",
                "value" : "Rhophylac 300"
              },
              {
                "language" : "en-US",
                "value" : "Rhophylac 300"
              }
            ]
          },
          {
            "code" : "65695-02",
            "display" : "Synagis 100 mg/1 ml, Injektionslösung",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Synagis 100 mg/1 ml"
              },
              {
                "language" : "fr-CH",
                "value" : "Synagis 100 mg/1 ml"
              },
              {
                "language" : "it-CH",
                "value" : "Synagis 100 mg/1 ml"
              },
              {
                "language" : "rm-CH",
                "value" : "Synagis 100 mg/1 ml"
              },
              {
                "language" : "en-US",
                "value" : "Synagis 100 mg/1 ml"
              }
            ]
          },
          {
            "code" : "65695-01",
            "display" : "Synagis 50 mg/0.5 ml, Injektionslösung",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Synagis 50 mg/0.5 ml"
              },
              {
                "language" : "fr-CH",
                "value" : "Synagis 50 mg/0.5 ml"
              },
              {
                "language" : "it-CH",
                "value" : "Synagis 50 mg/0.5 ml"
              },
              {
                "language" : "rm-CH",
                "value" : "Synagis 50 mg/0.5 ml"
              },
              {
                "language" : "en-US",
                "value" : "Synagis 50 mg/0.5 ml"
              }
            ]
          },
          {
            "code" : "00673-02",
            "display" : "Tetagam P, Injektionslösung",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tetagam P"
              },
              {
                "language" : "fr-CH",
                "value" : "Tetagam P"
              },
              {
                "language" : "it-CH",
                "value" : "Tetagam P"
              },
              {
                "language" : "rm-CH",
                "value" : "Tetagam P"
              },
              {
                "language" : "en-US",
                "value" : "Tetagam P"
              }
            ]
          },
          {
            "code" : "59374-01",
            "display" : "Uman Big 180 UI/1 ml, solution pour injection intramusculaire",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Uman Big 180 UI/1 ml"
              },
              {
                "language" : "fr-CH",
                "value" : "Uman Big 180 UI/1 ml"
              },
              {
                "language" : "it-CH",
                "value" : "Uman Big 180 UI/1 ml"
              },
              {
                "language" : "rm-CH",
                "value" : "Uman Big 180 UI/1 ml"
              },
              {
                "language" : "en-US",
                "value" : "Uman Big 180 UI/1 ml"
              }
            ]
          },
          {
            "code" : "59374-02",
            "display" : "Uman Big 540 UI/3 ml, solution pour injection intramusculaire",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Uman Big 540 UI/3 ml"
              },
              {
                "language" : "fr-CH",
                "value" : "Uman Big 540 UI/3 ml"
              },
              {
                "language" : "it-CH",
                "value" : "Uman Big 540 UI/3 ml"
              },
              {
                "language" : "rm-CH",
                "value" : "Uman Big 540 UI/3 ml"
              },
              {
                "language" : "en-US",
                "value" : "Uman Big 540 UI/3 ml"
              }
            ]
          },
          {
            "code" : "59451-01",
            "display" : "Varitect CP, Lösung zur intravenösen Injektion",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Varitect CP"
              },
              {
                "language" : "fr-CH",
                "value" : "Varitect CP"
              },
              {
                "language" : "it-CH",
                "value" : "Varitect CP"
              },
              {
                "language" : "rm-CH",
                "value" : "Varitect CP"
              },
              {
                "language" : "en-US",
                "value" : "Varitect CP"
              }
            ]
          },
          {
            "code" : "59373-02",
            "display" : "Venbig 2500 U.I/50 ml, poudre et solution pour injection intraveineuse",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Venbig 2500 U.I/50 ml"
              },
              {
                "language" : "fr-CH",
                "value" : "Venbig 2500 U.I/50 ml"
              },
              {
                "language" : "it-CH",
                "value" : "Venbig 2500 U.I/50 ml"
              },
              {
                "language" : "rm-CH",
                "value" : "Venbig 2500 U.I/50 ml"
              },
              {
                "language" : "en-US",
                "value" : "Venbig 2500 U.I/50 ml"
              }
            ]
          },
          {
            "code" : "59373-01",
            "display" : "Venbig 500 U.I/10 ml, poudre et solution pour injection intraveineuse",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Venbig 500 U.I/10 ml"
              },
              {
                "language" : "fr-CH",
                "value" : "Venbig 500 U.I/10 ml"
              },
              {
                "language" : "it-CH",
                "value" : "Venbig 500 U.I/10 ml"
              },
              {
                "language" : "rm-CH",
                "value" : "Venbig 500 U.I/10 ml"
              },
              {
                "language" : "en-US",
                "value" : "Venbig 500 U.I/10 ml"
              }
            ]
          },
          {
            "code" : "68471-01",
            "display" : "Xevudy, Konzentrat zur Herstellung einer Infusionslösung",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Xevudy"
              },
              {
                "language" : "fr-CH",
                "value" : "Xevudy"
              },
              {
                "language" : "it-CH",
                "value" : "Xevudy"
              },
              {
                "language" : "rm-CH",
                "value" : "Xevudy"
              },
              {
                "language" : "en-US",
                "value" : "Xevudy"
              }
            ]
          },
          {
            "code" : "66344-01",
            "display" : "Zinplava, Konzentrat zur Herstellung einer Infusionslösung",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Zinplava"
              },
              {
                "language" : "fr-CH",
                "value" : "Zinplava"
              },
              {
                "language" : "it-CH",
                "value" : "Zinplava"
              },
              {
                "language" : "rm-CH",
                "value" : "Zinplava"
              },
              {
                "language" : "en-US",
                "value" : "Zinplava"
              }
            ]
          },
          {
            "code" : "61639-01",
            "display" : "Zutectra, Injektionslösung",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Zutectra"
              },
              {
                "language" : "fr-CH",
                "value" : "Zutectra"
              },
              {
                "language" : "it-CH",
                "value" : "Zutectra"
              },
              {
                "language" : "rm-CH",
                "value" : "Zutectra"
              },
              {
                "language" : "en-US",
                "value" : "Zutectra"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
