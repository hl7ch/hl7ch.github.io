# CH EPREG Organization: Treating Healthcare Provider - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EPREG Organization: Treating Healthcare Provider**

## Resource Profile: CH EPREG Organization: Treating Healthcare Provider 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-organization-thcp | *Version*:1.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChEpregOrganizationTHCP |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the Organization resource to represent the treating healthcare provider. 

**Usages:**

* Refer to this Profile: [CH EPREG PractitionerRole: Treating Healthcare Provider](StructureDefinition-ch-epreg-practitionerrole-thcp.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epreg|current/StructureDefinition/ch-epreg-organization-thcp)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-epreg-organization-thcp.csv), [Excel](StructureDefinition-ch-epreg-organization-thcp.xlsx), [Schematron](StructureDefinition-ch-epreg-organization-thcp.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-epreg-organization-thcp",
  "url" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-organization-thcp",
  "version" : "1.0.0",
  "name" : "ChEpregOrganizationTHCP",
  "title" : "CH EPREG Organization: Treating Healthcare Provider",
  "status" : "active",
  "date" : "2025-12-16T12:22:20+00:00",
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
    }
  ],
  "description" : "This profile constrains the Organization resource to represent the treating healthcare provider.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CHE"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "concept-pregnancy-passport",
      "uri" : "https://www.e-health-suisse.ch/upload/documents/eSchwangerschaftspass_Konzept_de.pdf",
      "name" : "Concept Pregnancy Passport",
      "comment" : "This mapping illustrates the relationship between the CH EPREG profile and the concept of the pregnancy passport."
    },
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
        "short" : "CH EPREG Organization: Treating Healthcare Provider",
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Behandelnder Leistungserbringender | Fournisseur de prestations"
          }
        ]
      },
      {
        "id" : "Organization.name",
        "path" : "Organization.name",
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Name der behandelnden Institution | Nom de l’institution"
          }
        ]
      },
      {
        "id" : "Organization.telecom:email",
        "path" : "Organization.telecom",
        "sliceName" : "email",
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "E-Mailadresse | Courriel"
          }
        ]
      },
      {
        "id" : "Organization.telecom:phone",
        "path" : "Organization.telecom",
        "sliceName" : "phone",
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Telefon | N° de téléphone"
          },
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "use = mobile: Mobil | Mobile"
          },
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "use = work: Arbeit | Professionnel"
          }
        ]
      },
      {
        "id" : "Organization.address",
        "path" : "Organization.address",
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Adresse | Adresse"
          }
        ]
      },
      {
        "id" : "Organization.address.line",
        "path" : "Organization.address.line",
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Strasse | Rue"
          },
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Hausnummer | Numéro"
          }
        ]
      },
      {
        "id" : "Organization.address.city",
        "path" : "Organization.address.city",
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Ort | Localité"
          }
        ]
      },
      {
        "id" : "Organization.address.postalCode",
        "path" : "Organization.address.postalCode",
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Postleitzahl | Code postal"
          }
        ]
      },
      {
        "id" : "Organization.address.country",
        "path" : "Organization.address.country",
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Land | Pays"
          }
        ]
      }
    ]
  }
}

```
