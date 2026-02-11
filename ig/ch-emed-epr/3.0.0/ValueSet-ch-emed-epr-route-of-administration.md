# Route of Administration - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Route of Administration**

## ValueSet: Route of Administration (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed-epr/ValueSet/ch-emed-epr-route-of-administration | *Version*:3.0.0 |
| Draft as of 2026-02-11 | *Computable Name*:CHEMEDEPRRouteOfAdministration |
| **Copyright/Legal**: CC0-1.0 | |

 
Valueset RouteOfAdministration filtered for ambulatory care use. 
This value set is a subset of the mandatory value set ([EDQM - RouteOfAdministration](http://fhir.ch/ig/ch-term/ValueSet/edqm-routeofadministration)) that contains only values compatible with ambulatory care. We recommend implementers to focus on supporting this value set instead of the complete one. 

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
  "id" : "ch-emed-epr-route-of-administration",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablevalueset"]
  },
  "url" : "http://fhir.ch/ig/ch-emed-epr/ValueSet/ch-emed-epr-route-of-administration",
  "version" : "3.0.0",
  "name" : "CHEMEDEPRRouteOfAdministration",
  "title" : "Route of Administration",
  "status" : "draft",
  "experimental" : true,
  "date" : "2026-02-11T07:01:54+00:00",
  "publisher" : "CARA",
  "contact" : [
    {
      "name" : "CARA",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.cara.ch"
        }
      ]
    }
  ],
  "description" : "Valueset RouteOfAdministration filtered for ambulatory care use.\n\nThis value set is a subset of the mandatory value set ([EDQM - RouteOfAdministration](http://fhir.ch/ig/ch-term/ValueSet/edqm-routeofadministration)) that contains only values compatible with ambulatory care.\nWe recommend implementers to focus on supporting this value set instead of the complete one.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH",
          "display" : "Switzerland"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [
      {
        "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
        "concept" : [
          {
            "code" : "20001000",
            "display" : "Auricular use"
          },
          {
            "code" : "20002500",
            "display" : "Buccal use"
          },
          {
            "code" : "20003000",
            "display" : "Cutaneous use"
          },
          {
            "code" : "20004000",
            "display" : "Dental use"
          },
          {
            "code" : "20008000",
            "display" : "Endotracheopulmonary use"
          },
          {
            "code" : "20010000",
            "display" : "Epilesional use"
          },
          {
            "code" : "20013500",
            "display" : "Gastric use"
          },
          {
            "code" : "20013000",
            "display" : "Gastroenteral use"
          },
          {
            "code" : "20014000",
            "display" : "Gingival use"
          },
          {
            "code" : "20015000",
            "display" : "Haemodialysis"
          },
          {
            "code" : "20020000",
            "display" : "Inhalation use"
          },
          {
            "code" : "20021000",
            "display" : "Intestinal use"
          },
          {
            "code" : "20031500",
            "display" : "Intraepidermal use"
          },
          {
            "code" : "20032000",
            "display" : "Intralesional use"
          },
          {
            "code" : "20035000",
            "display" : "Intramuscular use"
          },
          {
            "code" : "20039000",
            "display" : "Intrapleural use"
          },
          {
            "code" : "20044000",
            "display" : "Intrauterine use"
          },
          {
            "code" : "20045000",
            "display" : "Intravenous use"
          },
          {
            "code" : "20046000",
            "display" : "Intravesical use"
          },
          {
            "code" : "20049000",
            "display" : "Nasal use"
          },
          {
            "code" : "20051000",
            "display" : "Ocular use"
          },
          {
            "code" : "20053000",
            "display" : "Oral use"
          },
          {
            "code" : "20054000",
            "display" : "Oromucosal use"
          },
          {
            "code" : "20055000",
            "display" : "Oropharyngeal use"
          },
          {
            "code" : "20061000",
            "display" : "Rectal use"
          },
          {
            "code" : "20066000",
            "display" : "Subcutaneous use"
          },
          {
            "code" : "20067000",
            "display" : "Sublingual use"
          },
          {
            "code" : "20070000",
            "display" : "Transdermal use"
          },
          {
            "code" : "20071000",
            "display" : "Urethral use"
          },
          {
            "code" : "20072000",
            "display" : "Vaginal use"
          }
        ]
      }
    ]
  }
}

```
