# CH - SMC Authorized Dose Form - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH - SMC Authorized Dose Form**

## Extension: CH - SMC Authorized Dose Form 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/StructureDefinition/authorizedDoseForm | *Version*:1.0.0 |
| Active as of 2025-12-11 | *Computable Name*:CHIDMPAuthorizedDoseForm |
| **Copyright/Legal**: CC0-1.0 | |

Extension for representing the authorized dose form

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [IDMP MedicinalProductDefinition](StructureDefinition-ch-idmp-medicinalproductdefinition.md)
* Examples for this Extension: [Bundle/08f553cb-1404-4972-bf14-2023a5f59955](Bundle-08f553cb-1404-4972-bf14-2023a5f59955.md), [Bundle/3e18bbe5-4cc2-4eaa-8d27-815c0e885025](Bundle-3e18bbe5-4cc2-4eaa-8d27-815c0e885025.md), [Bundle/5bb930aa-f30d-4f10-aeef-e85f6b5f8d59](Bundle-5bb930aa-f30d-4f10-aeef-e85f6b5f8d59.md), [Bundle/6722a9ee-ae3b-4c20-bcf0-9b7cb6f062db](Bundle-6722a9ee-ae3b-4c20-bcf0-9b7cb6f062db.md)...Show 10 more,[Bundle/a69ea53d-79d4-46f4-bd2e-7a71439f148f](Bundle-a69ea53d-79d4-46f4-bd2e-7a71439f148f.md),[Bundle/b2eb19be-cca4-4fd8-a2a3-84d05631e6c0](Bundle-b2eb19be-cca4-4fd8-a2a3-84d05631e6c0.md),[Bundle/c97d5d89-4467-4c1e-9954-9d1e1d1d46e2](Bundle-c97d5d89-4467-4c1e-9954-9d1e1d1d46e2.md),[MedicinalProductDefinition/Abrilada-40mg-Pre-Filled-Pen](MedicinalProductDefinition-Abrilada-40mg-Pre-Filled-Pen.md),[MedicinalProductDefinition/Cuprior-150mg-Filmcoatedtablet](MedicinalProductDefinition-Cuprior-150mg-Filmcoatedtablet.md),[MedicinalProductDefinition/Entocort-Solvent-and-Tablet](MedicinalProductDefinition-Entocort-Solvent-and-Tablet.md),[MedicinalProductDefinition/Estalis-Transdermalpatch](MedicinalProductDefinition-Estalis-Transdermalpatch.md),[MedicinalProductDefinition/Keytruda-100mg-Vial](MedicinalProductDefinition-Keytruda-100mg-Vial.md),[MedicinalProductDefinition/Paxlovid-Filmcoatedtablet](MedicinalProductDefinition-Paxlovid-Filmcoatedtablet.md)and[MedicinalProductDefinition/Triogen-250mg-Capsule](MedicinalProductDefinition-Triogen-250mg-Capsule.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epl|current/StructureDefinition/authorizedDoseForm)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-authorizedDoseForm.csv), [Excel](StructureDefinition-authorizedDoseForm.xlsx), [Schematron](StructureDefinition-authorizedDoseForm.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "authorizedDoseForm",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
      "valueCode" : "can-bind"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/authorizedDoseForm",
  "version" : "1.0.0",
  "name" : "CHIDMPAuthorizedDoseForm",
  "title" : "CH - SMC Authorized Dose Form",
  "status" : "active",
  "date" : "2025-12-11T12:29:57+00:00",
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
  "description" : "Extension for representing the authorized dose form",
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
        "short" : "CH - SMC Authorized Dose Form",
        "definition" : "Extension for representing the authorized dose form"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://fhir.ch/ig/ch-epl/StructureDefinition/authorizedDoseForm"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "type" : [
          {
            "code" : "CodeableConcept"
          }
        ],
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-epl/ValueSet/ch-SMC-authorised-pharmaceutical-dose-form"
        }
      },
      {
        "id" : "Extension.value[x].coding",
        "path" : "Extension.value[x].coding",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "system"
            }
          ],
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "Extension.value[x].coding:SMC",
        "path" : "Extension.value[x].coding",
        "sliceName" : "SMC",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Extension.value[x].coding:SMC.system",
        "path" : "Extension.value[x].coding.system",
        "min" : 1,
        "patternUri" : "http://standardterms.edqm.eu"
      },
      {
        "id" : "Extension.value[x].coding:SMC.code",
        "path" : "Extension.value[x].coding.code",
        "min" : 1
      }
    ]
  }
}

```
