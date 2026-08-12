# CH ELM Results Laboratory Observation Genotyping - CH ELM (R4) v1.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Results Laboratory Observation Genotyping**

## ValueSet: CH ELM Results Laboratory Observation Genotyping 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-laboratory-observation-geno | *Version*:1.15.0 |
| Active as of 2026-08-12 | *Computable Name*:ChElmResultsLaboratoryObservationGeno |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH ELM value set includes the codes for the laboratory genotyping test results. 

 **References** 

* [CH ELM Observation Results for Genotyping](StructureDefinition-ch-elm-observation-results-laboratory-genotyping.md)
* [CH ELM Observation Results for Genotyping (strict)](StructureDefinition-ch-elm-observation-results-laboratory-genotyping-strict.md)

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
  "id" : "ch-elm-results-laboratory-observation-geno",
  "url" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-laboratory-observation-geno",
  "version" : "1.15.0",
  "name" : "ChElmResultsLaboratoryObservationGeno",
  "title" : "CH ELM Results Laboratory Observation Genotyping",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-08-12T07:05:53+00:00",
  "publisher" : "Federal Office of Public Health FOPH",
  "contact" : [{
    "name" : "Federal Office of Public Health FOPH",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html"
    }]
  }],
  "description" : "This CH ELM value set includes the codes for the laboratory genotyping test results.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [{
      "system" : "http://snomed.info/sct",
      "concept" : [{
        "code" : "1087501000112108",
        "display" : "Carbapenemase-producing Buttiauxella"
      },
      {
        "code" : "1089101000112105",
        "display" : "Carbapenemase-producing Citrobacter amalonaticus"
      },
      {
        "code" : "1089301000112107",
        "display" : "Carbapenemase-producing Citrobacter braakii"
      },
      {
        "code" : "1089501000112101",
        "display" : "Carbapenemase-producing Citrobacter"
      },
      {
        "code" : "1089701000112106",
        "display" : "Carbapenemase-producing Citrobacter farmeri"
      },
      {
        "code" : "1089901000112108",
        "display" : "Carbapenemase-producing Citrobacter freundii"
      },
      {
        "code" : "1090201000112105",
        "display" : "Carbapenemase-producing Citrobacter gillenii"
      },
      {
        "code" : "1090401000112109",
        "display" : "Carbapenemase-producing Citrobacter koseri"
      },
      {
        "code" : "1090601000112107",
        "display" : "Carbapenemase-producing Citrobacter murliniae"
      },
      {
        "code" : "1091001000112109",
        "display" : "Carbapenemase-producing Citrobacter sedlakii"
      },
      {
        "code" : "1091201000112104",
        "display" : "Carbapenemase-producing Citrobacter werkmanii"
      },
      {
        "code" : "1091401000112100",
        "display" : "Carbapenemase-producing Citrobacter youngae"
      },
      {
        "code" : "1092401000112105",
        "display" : "Carbapenemase-producing Cronobacter sakazakii"
      },
      {
        "code" : "1093401000112101",
        "display" : "Carbapenemase-producing Enterobacter"
      },
      {
        "code" : "1093601000112103",
        "display" : "Carbapenemase-producing Enterobacter asburiae"
      },
      {
        "code" : "1094301000112105",
        "display" : "Carbapenemase-producing Enterobacter hormaechei"
      },
      {
        "code" : "1096801000112108",
        "display" : "Carbapenemase-producing Klebsiella"
      },
      {
        "code" : "1097701000112102",
        "display" : "Carbapenemase-producing Klebsiella pneumoniae subsp. ozaenae"
      },
      {
        "code" : "1098201000112108",
        "display" : "Carbapenemase-producing Klebsiella pneumoniae"
      },
      {
        "code" : "1099001000112108",
        "display" : "Carbapenemase-producing Kluyvera"
      },
      {
        "code" : "1099201000112103",
        "display" : "Carbapenemase-producing Kluyvera ascorbata"
      },
      {
        "code" : "1099401000112104",
        "display" : "Carbapenemase-producing Kluyvera cryocrescens"
      },
      {
        "code" : "1099601000112101",
        "display" : "Carbapenemase-producing Kluyvera georgiana"
      },
      {
        "code" : "1099801000112102",
        "display" : "Carbapenemase-producing Kluyvera intermedia"
      },
      {
        "code" : "1100001000112108",
        "display" : "Carbapenemase-producing Leclercia"
      },
      {
        "code" : "1100201000112103",
        "display" : "Carbapenemase-producing Leclercia adecarboxylata"
      },
      {
        "code" : "1105401000112106",
        "display" : "Carbapenemase-producing Raoultella ornithinolytica"
      },
      {
        "code" : "1105601000112109",
        "display" : "Carbapenemase-producing Raoultella planticola"
      },
      {
        "code" : "1105801000112108",
        "display" : "Carbapenemase-producing Raoultella terrigena"
      },
      {
        "code" : "1106001000112106",
        "display" : "Carbapenemase-producing Salmonella"
      },
      {
        "code" : "1108301000112108",
        "display" : "Carbapenemase-producing Shigella"
      },
      {
        "code" : "1112101000112106",
        "display" : "Carbapenemase-producing Lelliottia amnigena"
      },
      {
        "code" : "1359810002",
        "display" : "Carbapenemase-producing Cronobacter"
      },
      {
        "code" : "1359811003",
        "display" : "Carbapenemase-producing Escherichia spp"
      },
      {
        "code" : "1362138006",
        "display" : "Carbapenemase-producing Lelliottia"
      },
      {
        "code" : "1388125003",
        "display" : "Carbapenemase-producing Pluralibacter (organism)"
      },
      {
        "code" : "308241000087107",
        "display" : "Carbapenemase-producing Pluralibacter gergoviae (organism)"
      },
      {
        "code" : "33691000087101",
        "display" : "Carbapenemase-producing Klebsiella variicola"
      },
      {
        "code" : "432763001",
        "display" : "Enterobacter ludwigii (organism)"
      },
      {
        "code" : "44601000087107",
        "display" : "Carbapenemase-producing Citrobacter freundii complex"
      },
      {
        "code" : "51271000087100",
        "display" : "Carbapenemase-producing Klebsiella oxytoca"
      },
      {
        "code" : "734352006",
        "display" : "Carbapenemase-producing Klebsiella aerogenes (organism)"
      },
      {
        "code" : "734353001",
        "display" : "Carbapenemase-producing Enterobacter cloacae complex (organism)"
      },
      {
        "code" : "737528008",
        "display" : "Carbapenemase-producing Escherichia coli (organism)"
      },
      {
        "code" : "737529000",
        "display" : "Carbapenemase-producing Enterobacter cloacae (organism)"
      },
      {
        "code" : "770392005",
        "display" : "Carbapenemase-producing Raoultella (organism)"
      }]
    },
    {
      "system" : "http://loinc.org",
      "concept" : [{
        "code" : "94053-6",
        "display" : "Mycobacterium tuberculosis complex resistance panel by Molecular genetics method"
      }]
    }]
  }
}

```
