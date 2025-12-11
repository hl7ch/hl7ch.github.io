# CH - EPL Full Limitation Text - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH - EPL Full Limitation Text**

## Extension: CH - EPL Full Limitation Text 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/StructureDefinition/fullLimitationText | *Version*:1.0.0 |
| Active as of 2025-12-11 | *Computable Name*:EPLFullLimitationText |
| **Copyright/Legal**: CC0-1.0 | |

Extension for representing the full wording of the limitations used by FOPH

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [IDMP MedicinalProductDefinition](StructureDefinition-ch-idmp-medicinalproductdefinition.md)
* Examples for this Extension: [Bundle/08f553cb-1404-4972-bf14-2023a5f59955](Bundle-08f553cb-1404-4972-bf14-2023a5f59955.md), [Bundle/3e18bbe5-4cc2-4eaa-8d27-815c0e885025](Bundle-3e18bbe5-4cc2-4eaa-8d27-815c0e885025.md), [Bundle/6722a9ee-ae3b-4c20-bcf0-9b7cb6f062db](Bundle-6722a9ee-ae3b-4c20-bcf0-9b7cb6f062db.md), [Bundle/a69ea53d-79d4-46f4-bd2e-7a71439f148f](Bundle-a69ea53d-79d4-46f4-bd2e-7a71439f148f.md)...Show 8 more,[Bundle/b2eb19be-cca4-4fd8-a2a3-84d05631e6c0](Bundle-b2eb19be-cca4-4fd8-a2a3-84d05631e6c0.md),[Bundle/c97d5d89-4467-4c1e-9954-9d1e1d1d46e2](Bundle-c97d5d89-4467-4c1e-9954-9d1e1d1d46e2.md),[MedicinalProductDefinition/Abrilada-40mg-Pre-Filled-Pen](MedicinalProductDefinition-Abrilada-40mg-Pre-Filled-Pen.md),[MedicinalProductDefinition/Cuprior-150mg-Filmcoatedtablet](MedicinalProductDefinition-Cuprior-150mg-Filmcoatedtablet.md),[MedicinalProductDefinition/Entocort-Solvent-and-Tablet](MedicinalProductDefinition-Entocort-Solvent-and-Tablet.md),[MedicinalProductDefinition/Keytruda-100mg-Vial](MedicinalProductDefinition-Keytruda-100mg-Vial.md),[MedicinalProductDefinition/Paxlovid-Filmcoatedtablet](MedicinalProductDefinition-Paxlovid-Filmcoatedtablet.md)and[MedicinalProductDefinition/Triogen-250mg-Capsule](MedicinalProductDefinition-Triogen-250mg-Capsule.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epl|current/StructureDefinition/fullLimitationText)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fullLimitationText.csv), [Excel](StructureDefinition-fullLimitationText.xlsx), [Schematron](StructureDefinition-fullLimitationText.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fullLimitationText",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
      "valueCode" : "can-bind"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/fullLimitationText",
  "version" : "1.0.0",
  "name" : "EPLFullLimitationText",
  "title" : "CH - EPL Full Limitation Text",
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
  "description" : "Extension for representing the full wording of the limitations used by FOPH",
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
      "expression" : "MedicinalProductDefinition"
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
        "short" : "CH - EPL Full Limitation Text",
        "definition" : "Extension for representing the full wording of the limitations used by FOPH"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://fhir.ch/ig/ch-epl/StructureDefinition/fullLimitationText"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "type" : [
          {
            "code" : "string"
          }
        ]
      }
    ]
  }
}

```
