# CH ELM Expecting Specimen Specification - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Expecting Specimen Specification**

## ValueSet: CH ELM Expecting Specimen Specification 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-expecting-specimen-specification | *Version*:1.13.1 |
| Active as of 2026-01-21 | *Computable Name*:ChElmExpectingSpecimenSpecification |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH ELM value set includes the leading codes for the laboratory test results, which have to be completed by another code for the expecting specimen. 

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
  "id" : "ch-elm-expecting-specimen-specification",
  "url" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-expecting-specimen-specification",
  "version" : "1.13.1",
  "name" : "ChElmExpectingSpecimenSpecification",
  "title" : "CH ELM Expecting Specimen Specification",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-01-21T11:05:32+00:00",
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
  "description" : "This CH ELM value set includes the leading codes for the laboratory test results, which have to be completed by another code for the expecting specimen.",
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
        "system" : "http://loinc.org",
        "concept" : [
          {
            "code" : "16134-9",
            "display" : "Neisseria meningitidis [Presence] in Specimen by Organism specific culture"
          },
          {
            "code" : "21613-5",
            "display" : "Chlamydia trachomatis DNA [Presence] in Specimen by NAA with probe detection"
          },
          {
            "code" : "29907-3",
            "display" : "Haemophilus influenzae B DNA [Presence] in Specimen by NAA with probe detection"
          },
          {
            "code" : "31777-6",
            "display" : "Chlamydia trachomatis Ag [Presence] in Specimen"
          },
          {
            "code" : "31912-9",
            "display" : "Neisseria meningitidis Ag [Presence] in Specimen"
          },
          {
            "code" : "31969-9",
            "display" : "Streptococcus pneumoniae Ag [Presence] in Specimen"
          },
          {
            "code" : "38353-9",
            "display" : "Streptococcus sp identified in Specimen by Organism specific culture"
          },
          {
            "code" : "43304-5",
            "display" : "Chlamydia trachomatis rRNA [Presence] in Specimen by NAA with probe detection"
          },
          {
            "code" : "49671-1",
            "display" : "Neisseria meningitidis DNA [Presence] in Specimen by NAA with probe detection"
          },
          {
            "code" : "49672-9",
            "display" : "Streptococcus pneumoniae DNA [Presence] in Specimen by NAA with probe detection"
          },
          {
            "code" : "58473-0",
            "display" : "Haemophilus influenzae serotype DNA [Identifier] in Specimen by NAA with probe detection"
          },
          {
            "code" : "61366-1",
            "display" : "Haemophilus influenzae DNA [Presence] in Specimen by NAA with probe detection"
          },
          {
            "code" : "61369-5",
            "display" : "Listeria monocytogenes DNA [Presence] in Specimen by NAA with probe detection"
          },
          {
            "code" : "6349-5",
            "display" : "Chlamydia trachomatis [Presence] in Specimen by Organism specific culture"
          },
          {
            "code" : "6600-1",
            "display" : "Haemophilus sp identified in Specimen by Organism specific culture"
          },
          {
            "code" : "6609-2",
            "display" : "Listeria sp identified in Specimen by Organism specific culture"
          },
          {
            "code" : "69410-9",
            "display" : "Haemophilus influenzae [Identifier] in Specimen by Organism specific culture"
          }
        ]
      }
    ]
  }
}

```
