# CH ELM Organization: Orderer - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Organization: Orderer**

## Resource Profile: CH ELM Organization: Orderer 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-organization-orderer | *Version*:1.13.1 |
| Active as of 2026-01-21 | *Computable Name*:ChElmOrganizationOrderer |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH ELM base profile constrains the Organization resource for the orderer. 

**Usages:**

* Refer to this Profile: [CH ELM PractitionerRole: Orderer](StructureDefinition-ch-elm-practitionerrole-orderer.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-elm|current/StructureDefinition/ch-elm-organization-orderer)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-elm-organization-orderer.csv), [Excel](StructureDefinition-ch-elm-organization-orderer.xlsx), [Schematron](StructureDefinition-ch-elm-organization-orderer.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-elm-organization-orderer",
  "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-organization-orderer",
  "version" : "1.13.1",
  "name" : "ChElmOrganizationOrderer",
  "title" : "CH ELM Organization: Orderer",
  "status" : "active",
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
  "description" : "This CH ELM base profile constrains the Organization resource for the orderer.",
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
      "identity" : "eCH",
      "uri" : "https://www.ech.ch/",
      "name" : "eCH Standards"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "servd",
      "uri" : "http://www.omg.org/spec/ServD/1.0/",
      "name" : "ServD"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Organization",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Organization",
        "path" : "Organization",
        "short" : "CH ELM Organization: Orderer"
      },
      {
        "id" : "Organization.extension",
        "path" : "Organization.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Organization.extension:department",
        "path" : "Organization.extension",
        "sliceName" : "department",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-ext-department"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Organization.identifier",
        "path" : "Organization.identifier",
        "mustSupport" : true
      },
      {
        "id" : "Organization.identifier:BER",
        "path" : "Organization.identifier",
        "sliceName" : "BER",
        "mustSupport" : true
      },
      {
        "id" : "Organization.identifier:UIDB",
        "path" : "Organization.identifier",
        "sliceName" : "UIDB",
        "mustSupport" : true
      },
      {
        "id" : "Organization.name",
        "path" : "Organization.name",
        "maxLength" : 100,
        "mustSupport" : true
      },
      {
        "id" : "Organization.address",
        "path" : "Organization.address",
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Organization.address.line",
        "path" : "Organization.address.line",
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Organization.address.line.extension:streetName",
        "path" : "Organization.address.line.extension",
        "sliceName" : "streetName",
        "mustSupport" : true
      },
      {
        "id" : "Organization.address.line.extension:houseNumber",
        "path" : "Organization.address.line.extension",
        "sliceName" : "houseNumber",
        "mustSupport" : true
      },
      {
        "id" : "Organization.address.line.extension:postOfficeBoxNumber",
        "path" : "Organization.address.line.extension",
        "sliceName" : "postOfficeBoxNumber",
        "mustSupport" : true
      },
      {
        "id" : "Organization.address.city",
        "path" : "Organization.address.city",
        "mustSupport" : true
      },
      {
        "id" : "Organization.address.postalCode",
        "path" : "Organization.address.postalCode",
        "mustSupport" : true
      }
    ]
  }
}

```
