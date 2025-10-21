# CH ELM Extension: Department - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Extension: Department**

## Extension: CH ELM Extension: Department 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-ext-department | *Version*:1.12.0 |
| Active as of 2025-10-21 | *Computable Name*:ChElmExtDepartment |
| **Copyright/Legal**: CC0-1.0 | |

This CH ELM extension enables the representation of a department (name) of an organization directly in the resource Organization itself.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH ELM Organization: Orderer](StructureDefinition-ch-elm-organization-orderer.md)
* Examples for this Extension: [Bundle/1Doc-NeisseriaGonorrhoeae](Bundle-1Doc-NeisseriaGonorrhoeae.md), [Bundle/1bDoc-NeisseriaGonorrhoeae](Bundle-1bDoc-NeisseriaGonorrhoeae.md), [Bundle/4Doc-Campylobacter](Bundle-4Doc-Campylobacter.md), [Bundle/5Doc-TreponemaPallidum](Bundle-5Doc-TreponemaPallidum.md)...Show 8 more,[Bundle/7Doc-SARSCoV2](Bundle-7Doc-SARSCoV2.md),[DocumentReference/1-DocumentReferenceStrict](DocumentReference-1-DocumentReferenceStrict.md),[DocumentReference/Publish-1Doc-NeisseriaGonorrhoeae](DocumentReference-Publish-1Doc-NeisseriaGonorrhoeae.md),[DocumentReference/Publish-4Doc-Campylobacter](DocumentReference-Publish-4Doc-Campylobacter.md),[DocumentReference/Publish-5Doc-TreponemaPallidum](DocumentReference-Publish-5Doc-TreponemaPallidum.md),[DocumentReference/Publish-7Doc-SARSCoV2](DocumentReference-Publish-7Doc-SARSCoV2.md),[Kantonsspital ABC](Organization-1Org-KsAbc.md)and[Hôpital régional soleil](Organization-Org-JeanneMoreau.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-elm|current/StructureDefinition/ch-elm-ext-department)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-elm-ext-department.csv), [Excel](StructureDefinition-ch-elm-ext-department.xlsx), [Schematron](StructureDefinition-ch-elm-ext-department.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-elm-ext-department",
  "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-ext-department",
  "version" : "1.12.0",
  "name" : "ChElmExtDepartment",
  "title" : "CH ELM Extension: Department",
  "status" : "active",
  "date" : "2025-10-21T11:37:53+00:00",
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
  "description" : "This CH ELM extension enables the representation of a department (name) of an organization directly in the resource Organization itself.",
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
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [
    {
      "type" : "element",
      "expression" : "Organization"
    }
  ],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Extension",
        "path" : "Extension",
        "short" : "CH ELM Extension: Department",
        "definition" : "This CH ELM extension enables the representation of a department (name) of an organization directly in the resource Organization itself."
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-ext-department"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "short" : "Name of the department",
        "min" : 1,
        "type" : [
          {
            "code" : "string"
          }
        ],
        "maxLength" : 100
      }
    ]
  }
}

```
