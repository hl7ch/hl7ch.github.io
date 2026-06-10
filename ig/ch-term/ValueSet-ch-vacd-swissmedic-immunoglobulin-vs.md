# CH VACD Swissmedic Authorized Immunoglobulin Codes - CH Term (R4) v3.4.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH VACD Swissmedic Authorized Immunoglobulin Codes**

## ValueSet: CH VACD Swissmedic Authorized Immunoglobulin Codes 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-swissmedic-immunoglobulin-vs | *Version*:3.4.0 |
| Active as of 2026-06-10 | *Computable Name*:SwissImunoglobulin |
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
  "version" : "3.4.0",
  "name" : "SwissImunoglobulin",
  "title" : "CH VACD Swissmedic Authorized Immunoglobulin Codes",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-06-10T10:00:23+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  },
  {
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/",
      "use" : "work"
    }]
  }],
  "description" : "The list of ATC J06B – Immunoglobulin codes Swissmedic has given an autorization number.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [{
      "system" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-swissmedic-immunoglobulin-cs",
      "concept" : [{
        "code" : "00687-01",
        "display" : "Berirab 2 ml, Injektionslösung"
      },
      {
        "code" : "00687-02",
        "display" : "Berirab 5 ml, Injektionslösung"
      },
      {
        "code" : "69039-02",
        "display" : "Beyfortus 100 mg/1 ml, solution injectable en seringue préremplie"
      },
      {
        "code" : "69039-01",
        "display" : "Beyfortus 50 mg/0.5 ml, solution injectable en seringue préremplie"
      },
      {
        "code" : "68222-01",
        "display" : "Cutaquig 165 mg/ml, Injektionslösung"
      },
      {
        "code" : "65992-01",
        "display" : "Cuvitru 200 mg/ml, Injektionslösung"
      },
      {
        "code" : "00506-02",
        "display" : "Cytotect CP Biotest, Infusionslösung"
      },
      {
        "code" : "00701-02",
        "display" : "Gammanorm, Injektionslösung"
      },
      {
        "code" : "00668-01",
        "display" : "Gamunex 10%, solution pour injection intraveineuse"
      },
      {
        "code" : "00488-02",
        "display" : "Hepatect CP, Infusionslösung"
      },
      {
        "code" : "00674-01",
        "display" : "Hepatitis-B-Immunglobulin Behring, Injektionslösung"
      },
      {
        "code" : "66410-01",
        "display" : "Hizentra 200mg/ml, Injektionslösung zur s.c. Anwendung, Fertigspritze"
      },
      {
        "code" : "61547-01",
        "display" : "Hizentra, Injektionslösung zur s.c. Anwendung"
      },
      {
        "code" : "66684-01",
        "display" : "HyQvia 100 mg/ml, Infusionslösung zur subkutanen Anwendung"
      },
      {
        "code" : "58157-01",
        "display" : "Ig Vena Kedrion 50 g/I, solution pour infusion"
      },
      {
        "code" : "62913-01",
        "display" : "Intratect 10%, Infusionslösung"
      },
      {
        "code" : "57676-01",
        "display" : "Intratect 5%, Infusionslösung"
      },
      {
        "code" : "66332-03",
        "display" : "Iqymune 10g/100ml, Infusionslösung"
      },
      {
        "code" : "66332-04",
        "display" : "Iqymune 20g/200ml, Infusionslösung"
      },
      {
        "code" : "66332-01",
        "display" : "Iqymune 2g/20ml, Infusionslösung"
      },
      {
        "code" : "66332-02",
        "display" : "Iqymune 5g/50ml, Infusionslösung"
      },
      {
        "code" : "60323-01",
        "display" : "Octagam 10 %, Lösung zur intravenösen Anwendung"
      },
      {
        "code" : "57469-01",
        "display" : "Kiovig, Infusionslösung"
      },
      {
        "code" : "58314-01",
        "display" : "Privigen, Infusionslösung"
      },
      {
        "code" : "53609-02",
        "display" : "Rhophylac 300, Injektionslösung"
      },
      {
        "code" : "65695-02",
        "display" : "Synagis 100 mg/1 ml, Injektionslösung"
      },
      {
        "code" : "65695-01",
        "display" : "Synagis 50 mg/0.5 ml, Injektionslösung"
      },
      {
        "code" : "00673-02",
        "display" : "Tetagam P, Injektionslösung"
      },
      {
        "code" : "59374-01",
        "display" : "Uman Big 180 UI/1 ml, solution pour injection intramusculaire"
      },
      {
        "code" : "59374-02",
        "display" : "Uman Big 540 UI/3 ml, solution pour injection intramusculaire"
      },
      {
        "code" : "59451-01",
        "display" : "Varitect CP, Lösung zur intravenösen Injektion"
      },
      {
        "code" : "59373-02",
        "display" : "Venbig 2500 U.I/50 ml, poudre et solution pour injection intraveineuse"
      },
      {
        "code" : "59373-01",
        "display" : "Venbig 500 U.I/10 ml, poudre et solution pour injection intraveineuse"
      },
      {
        "code" : "68471-01",
        "display" : "Xevudy, Konzentrat zur Herstellung einer Infusionslösung"
      },
      {
        "code" : "66344-01",
        "display" : "Zinplava, Konzentrat zur Herstellung einer Infusionslösung"
      },
      {
        "code" : "61639-01",
        "display" : "Zutectra, Injektionslösung"
      }]
    }]
  }
}

```
